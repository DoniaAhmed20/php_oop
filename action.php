<?php 

include_once 'functions.php';


$funObj = new dbFunction();

// Check if the user is logged in
if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
    //alert("BTS");
    // echo $_SESSION['login'];
    $userId = $_SESSION['uid'];
    // alert("hi");
    // console.log($userId);
    
    $userDetails = $funObj->getUserDetails($_SESSION['uid']);

    if ($userDetails) {
        // Display user details

        echo 'Welcome, ' . $userDetails['name'] . '!<br>';
        echo 'Your email: ' . $userDetails['email'] . '<br>';
        // Display other user details as needed
    } else {
        echo 'Error fetching user details.';
    }
} else {
    // Redirect to login page if not logged in
    header("location: login.php");
    exit();
}

////////////////////////////////////
//LogOut
if (isset($_POST['logout'])) {
    $funObj->logout();
}

?>
<form action='action.php' method="post">
    <div class="form-group">
        <input type="submit" id="logout" name="logout" value="logout" class="btn btn-primary btn-lg btn-block myBtn" />
    </div>
</form>

<!-- Delete user -->



