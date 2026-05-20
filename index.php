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
    <form action="Email-geschikt.php" method="post" name="email-schicken-form">
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
            <input class="form-control" type="text" id="sender-name" name="sender-name" placeholder="Max Mustermann" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="sender-email" >Email*</label><br/>
            <input class="form-control" type="email" id="sender-email" name="sender-email" placeholder="ihre@email.com" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="sender-nachricht" >Nachricht*</label><br/>
            <textarea class="form-control" id="sender-nachricht" name="sender-nachricht" placeholder="Schreiben Ihre E-mail hier." required></textarea>
            <div class="form-text">* is a required field</div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit" name="btn-sender-schicken" >Schicken</button>
        </div>
    </form>
</div>
</body>
</html>