 <?php
    //Connect to database
    $conn = mysqli_connect('localhost','root','');
    if(!$conn){
        echo ("Can not conncet: " . mysql_error());
        exit();
    }
    mysqli_select_db($conn, "loginsystem");
    mysqli_query($conn, 'SET names UTF8');
?>