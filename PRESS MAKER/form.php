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
    
    if(isset($_POST['first']) && !empty($_POST['first']) && isset($_POST['second']) && !empty($_POST['second']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['password1']) && !empty($_POST['password1']) && $_POST['password'] == $_POST['password1'])
    {
        $password = $_POST['password'];
        $first_name = $_POST['first'];
        $last_name = $_POST['second'];
        $email = $_POST['email'];

        $sql_verifikacja = "SELECT * FROM users WHERE email = '$email'";

        $result_verifikacja = $connect->query($sql_verifikacja);

        if($result_verifikacja->num_rows > 0)
        {
            $_SESSION['replika_usera'] = true;
            header('Location: sign_up.php');
        }
        else
        {
            $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

            $result = $connect->query($sql);

            if($result)
            {
                $_SESSION['dodano_usera'] = true;
                header('Location:loog_in.php');
            }
            else
            {
                $_SESSION['blad_dodania'] = true;
            }
        }
        
    }
    else
    {
        if(empty($_POST['first']))
        {
            $_SESSION['first_name'] = true;
        }
        if(empty($_POST['second']))
        {
            $_SESSION['second_name'] = true;
        }
        if(empty($_POST['email']))
        {
            $_SESSION['email'] = true;
        }
        if(empty($_POST['password']))
        {
            $_SESSION['password'] = true;
        }
        if(empty($_POST['password1']))
        {
            $_SESSION['password1'] = true;
        }
        if($_POST['password'] != $_POST['password1'])
        {
            $_SESSION['identyczne'] = true;
        }
        header('Location: sign_up.php');
    }
}
?>
