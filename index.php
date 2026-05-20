<?php

$isDataInvalid = false;

function ValidateEmailInputs($inputs)
{

    $errors=[];

    if(empty(trim($inputs["sender-name"]??false)))
        $errors['sender-name'] = "Name ist ungültig";
    else
        $_SESSION["sender-name"] = filter_var($inputs['sender-name'],FILTER_SANITIZE_SPECIAL_CHARS);
    if(!filter_var($inputs["sender-email"]??false, FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_SPECIAL_CHARS))
        $errors['sender-email'] = "E-Mail ist ungültig";
    else
        $_SESSION["sender-email"] = filter_var($inputs['sender-email'],FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty(trim($inputs["sender-nachricht"]??false)))
        $errors['sender-nachricht'] = "Message ist ungültig";
    else
        $_SESSION["sender-nachricht"] = filter_var($inputs['sender-nachricht'],FILTER_SANITIZE_SPECIAL_CHARS);

    $_SESSION['anrede'] = filter_var($_POST["anrede"]??"");

    return $errors;
}

if (is_array($_POST) && count($_POST))
{
    session_start();
    $errors = ValidateEmailInputs($_POST);
    if(!count($errors))
    {
        header("Location: email-geschikt.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-mail Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        :root{
            --colors--shapeblau: #71c8da;
            --colors--shapegrun: #a5ce88;
            --colors--shapegrau: #474e5d;
            --colors--shapegrau-mittel: #6b7889;
            --colors--shapegelb-dunkel: #c6bd32 ;
            --colors--shapeorange:#ffa433;
            --colors--shaperosa: #ffbac1;
            --colors--shapegelb:#ffed00;
            --colors--shapewhite:white;

            --margin--sides:25%;
        }
        body{
            background-color: var(--colors--shapeblau);
            color: var(--colors--shapegrau)
        }
        #sender-nachricht{
            min-height: 200px;
            max-height: 400px;
        }
        #div-email-form
        {
            background-color: var(--colors--shapewhite);
            margin-left: var(--margin--sides);
            margin-right: var(--margin--sides);
            min-height: 100vh;
        }
    </style>
</head>
<body>


<div id="div-email-form" class="pe-4 pt-4 ps-4">

    <form action="index.php" method="post" name="email-schicken-form">
        <div class="mb-3">
            <div class ="form-check-label form-check-inline">Anrede:</div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="herr-andrede" name="anrede" value="Herr">
                <label class="form-label" for="herr-andrede" >Herr</label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" id="frau-anrede" name="anrede" value="Frau">
                <label class="form-label" for="frau-anrede" >Frau</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="sender-name">Name*</label>
            <br/>
            <input class="form-control" type="text" id="sender-name" name="sender-name" placeholder="Max Mustermann" >
            <?php if ($errors['sender-name']??false) echo '<span class="text-danger small">'.$errors['sender-name'].'</span>';
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label" for="sender-email" >Email*</label><br/>
            <input class="form-control" type="email" id="sender-email" name="sender-email" placeholder="ihre@email.com">
            <?php if ($errors['sender-email']??false) echo '<span class="text-danger small">'.$errors['sender-email'].'</span>';
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label" for="sender-nachricht" >Nachricht*</label><br/>
            <textarea class="form-control" id="sender-nachricht" name="sender-nachricht" placeholder="Schreiben Ihre E-mail hier."></textarea>
            <?php if ($errors['sender-nachricht']??false) echo '<span class="text-danger small">'.$errors['sender-nachricht'].'</span>';
            ?>
            <div class="form-text">* ist ein Pflichtfeld</div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit" name="btn-senden" >Senden</button>
        </div>
    </form>
</div>
</body>
</html>