<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Reqister form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>



<?php
require_once "conn.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $date = $_POST['birthday'];
    $gender = $_POST['gender'];
    $hostel = $_POST['hostel'];
    $mail = $_POST['mail'];
    

    if (!empty($name) && !empty($date) && !empty($gender) && !empty($hostel) && !empty($mail)) {
        // Prepare and execute the SQL query
        $sql = "INSERT INTO students (`name`, `birthday`, `gender`, `hostel`, `mail`) VALUES ('$name','$date','$gender','$hostel','$mail')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if ($hostel == "AAH") {
                header("location:aah.php");
                exit(); // Add an exit() after header to stop execution
            } elseif ($hostel == "PDH") {
                header("location:pdh.php");
                exit(); // Add an exit() after header to stop execution
            }elseif ($hostel == "Joachim Villa/ Ennagam") {
                header("location:jv.php");
                exit(); 
            }
            else {
                echo "Incorrect hostel";
            }
     
    }
    }
}


        ?>
