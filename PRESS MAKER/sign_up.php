<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign_up.css"/>
    <title>Logging in PRESS MAKER</title>
    <style>
        .error
        {
            color: red;
            font-size: 15px;
            margin:0px;
            margin-left:8%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2><span style="font-weight: 900;">P</span>RESS <span style="font-weight: 900;">M</span>AKER</h2>
        </div>
        <div class="word">
            <h1>Sign Up</h1>
        </div>
        
        <div class="sign_in">
           
            <form action="form.php" method="POST" >
               <div class="right">First name: <br/> <input type="text" name="first"/><br/></div> 
               <?php
                    if($_SESSION['first_name'] == true)
                    {
                        echo "<p class='error'>Nie wpisano pierwszego imienia </p>";
                        unset($_SESSION['first_name']);
                    }
                ?>
               <div class="right">Last  name:<br/>  <input type="text" name="second"/><br/></div> 
               <?php
                    if($_SESSION['second_name'] == true)
                    {
                        echo "<p class='error'>Nie wpisano nazwiska </p>";
                        unset($_SESSION['second_name']);
                    }
                ?>
               <div class="right">Email: <br/> <input type="text" name="email"/><br/></div> 
               <?php
                    if($_SESSION['email'] == true)
                    {
                        echo "<p class='error'>Nie wpisano emaila </p>";
                        unset($_SESSION['email']);
                    }
                ?>
               <div class="right">Password: <br/> <input type="password" name="password"/><br/></div> 
               <?php
                    if($_SESSION['password'] == true)
                    {
                        echo "<p class='error'>Nie wpisano hasła </p>";
                        unset($_SESSION['password']);
                    }
                ?>
               <div class="right">Repeat password: <br/> <input type="password" name="password1"/><br/></div> 
               <?php
                    if($_SESSION['password1'] == true)
                    {
                        echo "<p class='error'>Nie wpisano hasła2 </p>";
                        unset($_SESSION['password1']);
                    }
                    else if($_SESSION['identyczne'] == true)
                    {
                        echo "<p class='error'>Hasła są różne</p>";
                        unset($_SESSION['identyczne']);
                    }
                ?>
                <input type="submit" value="Sign Up"/>
            </form>
            <?php
                if($_SESSION['replika_usera'] == true)
                {
                    echo "<p class='error'>Użytkownik o podanym adresie email już istnieje.</p>";
                    unset($_SESSION['replika_usera']);
                }
            ?>
        </div>
    </div>
</body>
</html>
