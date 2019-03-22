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
 if (isset($_POST['RobotDemo']))
{
exec("sudo python3 /var/www/arm/arm-motions.py /var/www/arm/motions.txt");
}
?>
 <P>
    <P>
    <P>
     <button class="btn" name="RobotDemo">Robot Arm Demo</button>
 <center>
  <P>
   Power On LED Strip</P>
<form method="post">
<button class="btn" name="LightON">Light ON</button> <P>
 <button class="btn" name="LightOFF">Light OFF</button><br><br></center>
 
    <br><br><br><br>
</form>
</html>
