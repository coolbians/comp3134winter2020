<!DOCTYPE html> 
<html>
<head>
</head>
<body>

<?php
        $session_confirmation = $_SESSION["confirmation"];
        $post_confirmation = $_POST['confirmation'];
        if(!isset($session_confirmation)){
            $session_confirmation = "miranda1";
        }

        if(!isset($post_confirmation)){
            $post_confirmation = "miranda1";
        }
?>

<form method="post" name="csfrForm" action="csfr.php">
    <input type="text" placeholder="Username" name="username" id="username" required
    <input type="password" placeholder="" name="password" id="password" required>
    <input class="submit" type="submit" name='submit' value="SUBMIT">
</form>

    <?php
    if(isset($_POST["username"]) and isset($_POST["password"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "host" and $password == "pass") {
            echo "<script type='text/javascript'>alert('Success')</script>";
        }
        else {
            echo "<script type='text/javascript'>alert('Wrong username or password')</script>";
        }
    }
    ?>
</body>
</html>