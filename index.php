<html>
<head>
<?php
if (isset($_POST['LightON']))
{
exec("sudo python /var/www/lighton.py");
}
if (isset($_POST['LightOFF']))
{
exec("sudo python /var/www/lightoff.py");
}
?>
 
<form method="post">
<button class="btn" name="LightON">Light ON</button> 
<button class="btn" name="LightOFF">Light OFF</button><br><br>
    <br><br><br><br>
</form>
</html>
