<!doctype html>  // html file tag to display the output for php code
<html lang="en">

<head>
    <title>My Movie List</title>
</head>

<body>
    <?php include 'form.php';?>      // calling for the form content execution
    <?php include 'movie.php';?>     // calling for the database connection
    <?php if(isset($_GET['success']) && $_GET['success']=="true"){
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>';}?>                                                                     
</body> 

</html>