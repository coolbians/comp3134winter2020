<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>

<body>
<form method="get">
    <div>
        <input type="text" name="firstname" id="firstname">
    </div>
    <div>
        <input class="submit" type="submit" name="submit"><br/>
    </div>
</form>

<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Active</th>
    </tr>

    <?php
        $conn = mysqli_connect("165.227.33.185","root","miranda1", "cyber");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        $sql = "SELECT * FROM users WHERE `firstname` = 'Ben' AND `active` = '0'";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>". $row['id'] .
                    "</td><td>". $row["username"] .
                    "</td><td>". $row["email"] .
                    "</td><td>". $row["password"] .
                    "</td><td>". $row["firstname"] .
                    "</td><td>". $row["lastname"] .
                    "</td><td>". $row["active"];
            }
            echo "</table>";
        }
        $conn-> close();
    ?>
</table>
</body>
</html>