<!DOCTYPE html>
<html lang="en">

<head>
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
        <style>
            .one{
                padding-top:20px;
            }
            </style>
    </head>
    <body>

    <section style="margin: 50px 0;">
    <div class="container">
            <table class="table table-primary text-center">
                <thead>
                  <tr>

                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Hostel</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Usertype</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <?php 
                       require_once "conn.php";
                       if(isset($_POST["mail"])) {
                           $mail = $_POST["mail"]; // Get the user input ID
                       
                           $sql_query = "SELECT * FROM students WHERE mail = '$mail'";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
             
                                $id = $row['id'];
                                $name = $row['name'];     
                                $date = $row['birthday'];
                                $gender = $row['gender'];
                                $hostel = $row['hostel'];
                                $mail = $row['mail'];
                                $usertype = $row['usertype'];
                            }

                    ?>
                    <?php 
                    
                    ?>
                    

                    <tr class="trow">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>    
                        <td><?php echo $date; ?></td>
                        <td><?php echo $gender; ?></td>
                        <td><?php echo $hostel; ?></td>
                        <td><?php echo $mail; ?></td>
                        <td><?php echo $usertype;?></td>

                    </tr>
                    <?php
                            } 
                        } 


                    ?>
                </tbody>
              </table>
        </div>
    </section>
</body>

</html>


