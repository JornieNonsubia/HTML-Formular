<html>
<body>

<div>

<?php echo $_POST["anrede"]; ?> <?php echo $_POST["sender-name"]?>
<br/>
Ihre E-Mail hat an <?php echo $_POST["sender-email"]; ?> geschikt.
<br/>
Ihre Nachricht lautet:<br/>
"<?php echo $_POST["sender-nachricht"]; ?>"
<br/><br/>
    Vielen Dank fuer Nutzung unsere tolle E-Mail Service.
    <br/>
    <a href="index.php">Schreib neue E-Mail?</a>
</div>

</body>
</html>