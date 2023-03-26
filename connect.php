 <?php
 

 
 $fullname = $_POST['fullname'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $phoneNumber = $_POST['phonenumber'];
 $password = $_POST['password'];
 $confirmPassword = $_POST['confirmpassword'];
 
 //Database connection
 $conn = new mysqli('localhost','root','','school');
 
 $query = "INSERT INTO registration VALUES('','$fullname','$username','$email','$phonenumber','$password','$confirmpassword')";
 mysqli_query($conn ,$query);
 
 echo "Data inserted"
 ?>

 ?>