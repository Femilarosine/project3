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
    $mail = $_POST['email'];
    $hostel = $_POST['hostel'];
    $message = $_POST['message'];
    
    if (!empty($name) && !empty($mail) && !empty($hostel) && !empty($message)){
        // Prepare and execute the SQL query
        $sql = "INSERT INTO user(`name`, `email`, `hostel`, `message`) VALUES ('$name','$mail','$hostel','$message')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location:index.php");
            exit; // Terminate script after redirect
        } else {
            echo "Something went wrong. Please try again later.";
        }
     
    }
    }


        ?>