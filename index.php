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
 <P>
  
 <center>
  <P>
   Power On LED Strip</P
<form method="post">
<button class="btn" name="LightON">Light ON</button> <P>
 <button class="btn" name="LightOFF">Light OFF</button><br><br></center>
   <P>
    <P>
     <button class="btn" name="ShoulderLeft">Shoulder Left</button>
    <br><br><br><br>
</form>
</html>
