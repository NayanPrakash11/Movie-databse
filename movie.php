<?php                                      // establishing connection to our database and server 
$server = "localhost";
$username = "root";
$password = "";
$database = "movprofile";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){

    die("Error". mysqli_connect_error());
}
else{
    echo "connection is successful<br>";
}
// table creation
$sql = "CREATE TABLE `movprofile`.`movie` ( `mov_name` VARCHAR(20) NOT NULL , `lead_actor` VARCHAR(20) NOT NULL , `lead_actress` VARCHAR(20) NOT NULL , `director` VARCHAR(20) NOT NULL , `release_year` YEAR(10) NOT NULL , PRIMARY KEY (`mov_name`))";
$result = mysqli_query($conn,$sql);
if($result){
    echo "the table has been created successfully<br>";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){               // used to push content of the form into our database by using insert operation
$mov_name = $_POST['movie'];
$lead_actor = $_POST['actor'];
$lead_actress = $_POST['actress'];;
$director = $_POST['director'];
$release_year = $_POST['year'];
$sql = "INSERT INTO `movie`(`mov_name`, `lead_actor`, `lead_actress`, `director`, `release_year`) VALUES ('$mov_name','$lead_actor',' $lead_actress','$director', '$release_year')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "the record has been inserted successfully inserted<br>";
}
else{
    echo "the record is not inserted ".mysqli_error($conn);
}
}

// here is the fetching operation for select statement. 
// NOTE: both the queries(fetching and pushing data) is on same page so please press submit button once then press back and then another.
// above submit button on execution will show warning separately on execution but pleadse ignore that warning because both the expressions are on same page using same variable names. 
$sql = "SELECT * FROM `movie`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)){
       echo var_dump($row);
       echo "<br>";
    }

// fetching operation by using lead actor's name.    
if($_SERVER["REQUEST_METHOD"] == "POST"){    
$lead_actor = $_POST['actor1'];
$sql = "SELECT * FROM `movie` WHERE lead_actor = '$lead_actor'"; // we can fetch results by lead actress, director and release year by replacing 'lead_actor'.
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)){
           echo var_dump($row);
           echo "<br>"; }  } 





?>