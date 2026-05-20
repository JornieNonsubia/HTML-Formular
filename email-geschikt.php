<?php

use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

require_once 'vendor/autoload.php';

session_start();
$EmailAnrede = filter_var($_SESSION["anrede"],FILTER_SANITIZE_SPECIAL_CHARS);
$EmailSenderName = filter_var($_SESSION["sender-name"],FILTER_SANITIZE_SPECIAL_CHARS);
$EmailSenderMailbox = filter_var($_SESSION["sender-email"], FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_SPECIAL_CHARS);
$EmailSenderNachricht = filter_var($_SESSION["sender-nachricht"],FILTER_SANITIZE_SPECIAL_CHARS);

$transport = Transport::fromDsn('smtp://0.0.0.0:1025');
$mailer = new Mailer($transport);

$email = (new Email ())->from($EmailSenderMailbox)->to('test@email.de')->subject('Testing')->text($EmailSenderNachricht);

try {
    $mailer->send($email);
} catch (\Symfony\Component\Mailer\Exception\TransportExceptionInterface $e) {

}
?>

<html>
<body>

<div>
<?php echo $EmailAnrede; ?> <?php echo $EmailSenderName?>
<br/>
Ihre E-Mail hat an <?php echo $EmailSenderMailbox; ?> geschikt.
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

