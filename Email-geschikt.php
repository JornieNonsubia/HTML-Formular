<html>
<body>

<div>
    <?php
    $EmailAnrede = filter_var($_POST["anrede"],FILTER_SANITIZE_SPECIAL_CHARS);
    $EmailSenderName = filter_var($_POST["sender-name"],FILTER_SANITIZE_SPECIAL_CHARS);
    $EmailSenderMailbox = filter_var($_POST["sender-email"], FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_SPECIAL_CHARS);
    $EmailSenderNachricht = filter_var($_POST["sender-nachricht"],FILTER_SANITIZE_SPECIAL_CHARS);


    ?>

<?php echo $EmailAnrede; ?> <?php echo $EmailSenderName?>
<br/>
Ihre E-Mail hat an <?php
    if(filter_var($EmailSenderMailbox, FILTER_VALIDATE_EMAIL))
        echo $EmailSenderMailbox;
else echo "Invalid E-Mail"
    ?> geschikt.
<br/>
Ihre Nachricht lautet:<br/>
"<?php echo $EmailSenderNachricht; ?>"
<br/><br/>
    Vielen Dank fuer Nutzung unsere tolle E-Mail Service.
    <br/>
    <a href="index.php">Schreib neue E-Mail?</a>
</div>

</body>
</html>

