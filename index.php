<html>
<head>
<?php
if (isset($_POST['LightON']))
{
exec("sudo python /var/www/LED/led_on.py");
}
if (isset($_POST['LightOFF']))
{
exec("sudo python /var/www/LED/led_off.py");
}
?>
 <center>
<form method="post">
<button class="btn" name="LightON">Light ON</button> <P>
 <button class="btn" name="LightOFF">Light OFF</button><br><br></center>
    <br><br><br><br>
</form>
</html>
