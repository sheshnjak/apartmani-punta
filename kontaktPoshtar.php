<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Email</title>

<link href="dizajn/css.css" rel="stylesheet" type="text/css" />
<style type="text/css">body{ background-image:none; padding: 35px;}</style>
</head>
<body>

<?php

$to = "tomislav.juricin@zd.t-com.hr";
$subject = "Formular za rezervaciju - www.apartmani-punta.hr";
$visitor = $_POST['name'];
$visitormail = $_POST['email'];
$visitortel = $_POST['telefon'];
$app2 = $_POST['app2'];
$app1 = $_POST['app1'];
$soba = $_POST['soba'];
$brOsoba = $_POST['brOsoba'];
$termin = $_POST['termin'];
$tekst = $_POST['napomena'];



$message = " $visitor ($visitormail) \n
tel. $visitortel \n
rezervacija za: $app1 $app2 $soba \n
broj osoba: $brOsoba \n
termin: $termin \n
$tekst \n
";

$from = "From: $visitormail\r\n";

mail($to, $subject, $message, $from);

?>

<p align="center">
<h1>Hvala, uspješno ste poslali poruku.</h1>
<h1>Thank You. Your message is sent successfully.</h1>
<br />
<br />
<h3><?php echo $visitor ?> ( <?php echo $visitormail ?> )</h3>
<br />
<?php echo $visitortel ?>
<br />
<?php echo $termin ?>
<br />
<?php echo $tekst ?>

<br /><br />
<a href="javascript:history.back()"> Back </a>
</p>

</body>
</html>