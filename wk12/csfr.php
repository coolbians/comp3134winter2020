<!DOCTYPE html> 
<html>
<head>
</head>
<body>

    <form method="post" name="csfrForm" action="csfr.php">
        <input type="text" placeholder="Username" name="username" id="username" required>
        <input type="password" placeholder="" name="password" id="password" required>
	    <input class="submit" type="submit" name='submit'>
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