<?php include_once 'components/header.php'; ?>


<form action="" method="POST">

<br>
<label for="firstName">First Name</label>
<input type="text" name="firstName" value="Default value" id="firstName">

<!-- Don't use a button bc it auto triggers -->
<input type="submit" value="Submit!">

</form>
<!-- 
function redirect_to($location){

    header('Location: ' . $location);
    exit;
}

redirect_to('http://www.google.com');
 -->