<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-mail Schiker</title>
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
        form{
            text-align: center;
            padding-top: 5%;
            padding-bottom: 5%;
        }
        form p{margin:0}
        .form-div-block{
            margin-bottom: 25px;
            padding: 0 10% 0 10%;
            text-align: left;
        }
        .form-div-block-input{

        }
        .form-div-block-radio{
            margin-right: 8px;
        }
        #sender-nachricht{
            min-height: 200px;
            max-height: 400px;
            text-align: start;
        }
        .email-text-field{
            min-width: 100%;
            max-width: 100%;
            box-shadow: 1px 1px 4px 0 black;
            border-style: none;
            border-radius: 10px;
        }
        form button {
            border-radius: 10px;
            border-width: 1px;
            border-style: solid;
            border-color: var(--colors--shapegrau-mittel);
            color: var(--colors--shapegrau);
            background-color: var(--colors--shapegrun);
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

<div id="div-email-form">
    <form action="Email-geschikt.php" method="post" name="email-schicken-form">
        <div class="form-div-block f" style="display: flex;">
            <div>Anrede:</div>
            <input type="radio" id="herr-andrede" name="anrede" value="Herr">
            <label for="herr-andrede">Herr</label>
            <input type="radio" id="frau-anrede" name="anrede" value="Frau">
            <label for="frau-anrede">Frau</label>
        </div>
        <div class="form-div-block">
            <label for="sender-name">Name*</label>
            <br/>
            <input class="email-text-field" type="text" id="sender-name" name="sender-name" placeholder=" Max Mustermann" required>
        </div>
        <div class="form-div-block">
            <label for="sender-email">Email*</label><br/>
            <input class="email-text-field" type="email" id="sender-email" name="sender-email" placeholder=" ihre@email.com" required>
        </div>
        <div class="form-div-block">
            <label for="sender-nachricht">Nachricht*</label><br/>
            <textarea class="email-text-field" id="sender-nachricht" name="sender-nachricht" placeholder=" Schreiben Ihre E-mail hier." required></textarea>
            <p style="font-size: 8pt; text-align: left;">* is a required field</p>
        </div>
        <button type="submit" id="btn-sender-schicken" name="btn-sender-schicken" >Schicken</button>
    </form>
</div>
</body>
</html>