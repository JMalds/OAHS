<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'oahs');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: index.php');
		}else{
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: index.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.php");
}

if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

if(isset($_POST['sub'])){
    upload();
}

function upload() {
    
    if(getimagesize($_FILES['image']['tmp_name'])== false){
        echo "Please select an image.";
    } else {
        $image = addslashes($_FILES['image']['tmp_name']);
        $name = e($_POST['name']);
        $image = file_get_contents($image);
        $image = base64_encode($image);
        $animal_Id = e($_POST['animal_Id']);
	$species = e($_POST['species']);
        $breed = e($_POST['breed']);
        $age = e($_POST['age']);
        $gender = e($_POST['gender']);
        $size = e($_POST['size']);
        $color = e($_POST['color']);
        $fixed = e($_POST['fixed']);
        $declawed = e($_POST['declawed']);
        $h_trained = e($_POST['h_trained']);
        $location = e($_POST['location']);
        $date = e($_POST['date']);
        $descrip = e($_POST['descrip']);
        save($name,$animal_Id,$species,$image,$breed,$age,$gender,$size,$color,$fixed,$declawed,$h_trained,$location,$date,$descrip);
    }
}

function save($name,$animal_Id,$species,$image,$breed,$age,$gender,$size,$color,$fixed,$declawed,$h_trained,$location,$date,$descrip){
   global $db;
   
   $qry = "INSERT INTO pets (name, animal_Id, species, image, breed, age, gender, size, color, fixed, declawed, h_trained, location, date, descrip)"
           . " VALUES ('$name','$animal_Id','$species','$image','$breed','$age','$gender','$size','$color','$fixed','$declawed','$h_trained','$location','$date','$descrip')";
   $result = mysqli_query($db, $qry);
   if ($result){
       echo "Uploaded.";
   } else {
       echo "Not Uploaded.";
   }
}

function display(){
    global $db;
    
    $qry = "SELECT * FROM pets";
    $result = mysqli_query($db, $qry);
    echo '<div class="row" style="margin-left: 15px;">';
    while ($row = mysqli_fetch_array($result)){
        echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">';
        echo '<h1 id="'.$row[1].'"></h1>';
        echo '<img height="auto" width="auto" src="data:image;base64,'.$row[4].'"> ';
        echo '<h2>Hello, my name is '.$row[1].'</h2>';
        echo '<div class="table-responsive">';
        echo '<table class="table table-striped">';
            echo '<tbody>';
             echo '<tr>';
                echo '<th scope="row">Name:</th>';
                echo '<td>'.$row[1].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Animal ID:</th>';
                echo '<td>'.$row[2].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Species:</th>';
                echo '<td>'.$row[3].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Breed:</th>';
                echo '<td>'.$row[5].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Age:</th>';
                echo '<td>'.$row[6].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Gender:</th>';
                echo '<td>'.$row[7].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Size:</th>';
                echo '<td>'.$row[8].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Color:</th>';
                echo '<td>'.$row[9].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Spayed/Neutered:</th>';
                echo '<td>'.$row[10].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Declawed:</th>';
                echo '<td>'.$row[11].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">House Trained:</th>';
                echo '<td>'.$row[12].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Location</th>';
                echo '<td>'.$row[13].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Intake Date:</th>';
                echo '<td>'.$row[14].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="row">Description:</th>';
                echo '<td>'.$row[15].'</td>';
              echo '</tr>';
            echo '</tbody>';
          echo '</table>';
          echo '</div>';
          echo '</div>';
          
    }
    echo '</div>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    mysqli_close($db);
}

function show(){
    global $db;
    
    $qry = "SELECT * FROM pets";
    $result = mysqli_query($db, $qry);
    echo '<div class="row portfolio-container">';
    while ($row = mysqli_fetch_array($result)) {
                  echo '<div class="col-lg-4 col-md-6 portfolio-item wow bounceInUp filter-'.$row[3].'">';
                      
                         echo '<img height="auto" width="auto" class="img-fluid" src="data:image;base64,'.$row[4].'"> ';
                          echo '<div class="portfolio-info">';
                              echo '<h3><a href="#">'.$row[1].'</a></h3>';
                              echo '<p>'.$row[5].'</p>';
                              echo '<div>';
                                 echo '<a href="pets.php#'.$row[1].'" class="link-details" title="More Details"><i class="ion ion-android-open"></i>&nbsp;&nbsp;More Details</a>';
                                 echo '<br>';
                              echo '</div>';
                         echo ' </div>';
                      
                  echo '</div>';
               
     }
     echo '</div>';
     echo '<br>';
     mysqli_close($db);
}

function latest(){
    global $db;
    
    $qry = "SELECT * FROM pets ORDER BY id DESC LIMIT 3";
    $result = mysqli_query($db, $qry);
    echo '<div class="row portfolio-container">';
    while ($row = mysqli_fetch_array($result)) {
                  echo '<div class="col-lg-4 col-md-6 portfolio-item wow bounceInUp filter-'.$row[3].'">';
                      
                         echo '<img height="auto" width="auto" class="img-fluid" src="data:image;base64,'.$row[4].'"> ';
                          echo '<div class="portfolio-info">';
                              echo '<h4><a href="#">'.$row[1].'</a></h4>';
                              echo '<p>'.$row[5].'</p>';
                              echo '<div>';
                                 echo '<a href="pets.php#'.$row[1].'" class="link-details" title="More Details"><i class="ion ion-android-open"></i>&nbsp;&nbsp;More Details</a>';
                                 echo '<br>';
                              echo '</div>';
                         echo ' </div>';
                      
                  echo '</div>';
               
     }
     echo '</div>';
     echo '<br>';
     mysqli_close($db);
}