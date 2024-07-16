<?php
require_once 'data_base.php';
session_start();

$connect = mysqli_connect($server, $db_user, $db_password, $db_name);

if (!$connect) 
{
    echo "Coś poszło nie tak: " . mysqli_connect_error();
} 
else 
{
    
    if(isset($_POST['email2']) && !empty($_POST['email2']) && isset($_POST['password2']) && !empty($_POST['password2']))
    {
        $password2 = $_POST['password2'];
        $email2 = $_POST['email2'];

        $sql = "SELECT * FROM users WHERE email = '$email2' and password = '$password2';";

        $result= $connect->query($sql);   
        
        if($result->num_rows == 0)
        {
            $_SESSION['email3'] = true;
            header('Location: loog_in.php');
        }
        else
        {
            header('Location:main.php');
        }
    }
    else
    {
      
        if(empty($_POST['email2']))
        {
            $_SESSION['email2'] = true;
        }
        if(empty($_POST['password2']))
        {
            $_SESSION['password2'] = true;
        }
        
        header('Location: loog_in.php');
    }
}
?>
