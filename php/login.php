<?php
    include 'dbconn.php'; // to us functions of database
    // fetching data from login.html
    $logusr = $_POST['logusr'];
    $logpass = $_POST['logpass'] ;
    
    // checking if fields are empty or not
    if((!$logusr) & (!$logpass))
    {
    
    echo "<script>
        alert('username or password cannot be empty');
        window.location='../index.html';
    </script>";
    }
    // fetching data from user_details table from database login
    $fetch_sql = mysql_query("SELECT password from user_details WHERE userid = $logusr");

    $arr = mysql_fetch_array($fetch_sql);
    //checking password is wrong
    if($logpass != $arr[0])
    {
    echo "<script>
        alert('Invalid!!');
        window.location='../index.html';
    </script>";
    }
    // check for pass is right
    else if($logpass == $arr(0))
    {
        echo "<script>
        alert('logged in');
        window.location='../home.html';
    </script>";
    }
?>