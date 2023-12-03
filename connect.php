
<?php
// in the class i collected the similar tasks  
// user is an object have variables and methods
// to create object
       // $object = new className();
      // $object->variableName = 'value';    variableName without $
      // const constantName = 'value';
      
      




//$_SERVER['REQUESR_METHOD'] == 'post' &&
if( isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '','test1', "3307");
    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO `users` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')";        $query = mysqli_query($conn, $sql);

        if($query){
            echo 'Entry Successfull';
        }
        else{
            echo 'Error Occurred';
        }
    }
}
else{
    die("connection failed");
}





