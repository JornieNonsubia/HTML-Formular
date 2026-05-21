<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <style>
        :root {
            --colors--shapeblau: #71c8da;
            --colors--shapegrun: #a5ce88;
            --colors--shapegrau: #474e5d;
            --colors--shapegrau-mittel: #6b7889;
            --colors--shapegelb-dunkel: #c6bd32;
            --colors--shapeorange: #ffa433;
            --colors--shaperosa: #ffbac1;
            --colors--shapegelb: #ffed00;
            --colors--shapewhite: white;
        }

        .bg-shapeblau {
            background-color: var(--colors--shapeblau);
        }

        .bg-shapegrun {
            background-color: var(--colors--shapegrun);
        }

        .bg-shapeorange {
            background-color: var(--colors--shapeorange);
        }
        .bg-shaperosa
        {
            background-color: var(--colors--shaperosa);
        }

        .border-shapeorange {
            border-color: var(--colors--shapeorange) !important;
        }

        .border-shapegrun {
            border-color: var(--colors--shapegrun) !important;
        }

        .border-shapeblau {
            border-color: var(--colors--shapeblau) !important;
        }

        .card-image-icon {
            height: 1.2em;
            width: auto;
        }

        .card-body-text {
            font-size: .8em;
        }

        .card-image-flag {
            right: 20px;
            top: -1px
        }

    </style>
</head>
<body>
<?php echo file_get_contents('header.php') ?>

<div class="position-relative pt-4 pb-2 mt-4 bg-shaperosa">
    <div class="container">
        <div class="swiper">
            <div class="swiper-wrapper ">
                <?php
                $cardAmount = 6;
                for ($i = 0; $i < $cardAmount; $i++) {
                    echo '<div class="swiper-slide">
            <div class="card">
                <div class="position-absolute card-image-flag pe-1 ps-1 rounded-bottom align-self-end bg-shapeorange">
                    <img class="card-image-icon" alt="" src="Icons/icon_tag.svg">
                    <span>Angebot</span>
                </div>
                <img class="card-img-top" alt="" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-shapeblau">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-3">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="card-image-icon" alt="" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" alt="" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" alt="" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
            </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="position-static swiper-pagination" ></div>
</div>

<div class="container">
    <?php
    $cardsPerRow = 3;
    $cardAmount = 6;

    for ($i = 0; $i < $cardAmount; $i++) {
        if ($i % $cardsPerRow == 0)
            echo '<div class="row mt-4">';
        echo '<div class="col">
            <div class="card position-relative">
                <div class="position-absolute card-image-flag pe-1 ps-1 rounded-bottom align-self-end bg-shapeorange">
                    <img class="card-image-icon" alt="" src="Icons/icon_tag.svg">
                    <span>Angebot</span>
                </div>
                <img class="card-img-top" alt="" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeblau">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-3">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="card-image-icon" alt="" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" alt="" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" alt="" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>';
        if (($i + 1) % $cardsPerRow == 0 || $i == $cardAmount - 1)
            echo '</div>';
    }
    ?>
</div>

<div class="mt-5">
    <?php echo file_get_contents('footer.php')
    ?>
</div>
</body>
</html>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper", {
        slidesPerView: 3,
        loop: true,
        cssMode: true,
        autoHeight: true,
        spaceBetween: 24,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        keyboard: true,
    });
</script>