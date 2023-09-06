
<?php
    require_once "conn.php";
    if (!empty($name) && !empty($date) && !empty($gender) && !empty($hostel) && !empty($mail)){    
        $name = $_POST['name'];
        $date = $_POST['birthday'];
        $gender = $_POST['gender'];
        $hostel = $_POST['hostel'];
        $mail = $_POST['mail'];
       
        
        $sql = "UPDATE students SET 
        
            `name`= '$name',
            `birthday`= '$date',
            `gender`= '$gender',
            `hostel`='$hostel',
            `email`= '$mail',
             
              WHERE id= ".$_GET["id"];


       

        if(mysqli_query($conn, $sql)) {
            header("location: add.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>





