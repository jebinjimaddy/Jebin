<?php
    include 'dbconn.php';
    
    // getting value from register.html 
    $name = $_POST['name'];
    $logusr = $_POST['logusr'];
    $logpass = $_POST['logpass'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    
    // check if values are empty
    if((!$name) or (!$logusr) or (!$logpass) or(!$gender) or (!$country))
        {
        
        echo "<script>
            alert('fields cannot be empty');
            window.location='../register.html';
        </script>";
        }
        // insert values to database table user_details
        $sq = "INSERT INTO user_details(name, userid, password, gender, country) VALUES ('$name','$logusr','$logpass','$gender','$country')";
        $check =  mysql_query($conn, $sq);
        if($check)
        {
        echo "<script>
            alert('registered');
            window.location='../index.html';
        </script>";
        }
        else
        {
            echo "<script>
        alert('Somethings wrong');
        window.location='../register.html';
        </script>";
        }
?>