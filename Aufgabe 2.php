<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 2</title>
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
        }
        .bg-shapeblau{
            background-color: var(--colors--shapeblau);
        }
        .bg-shapegrun{
            background-color: var(--colors--shapegrun);
        }
        .border-shapeorange{
            border-color: var(--colors--shapeorange) !important;
        }
        .card-image-icon
        {
            height:1.2em;
            width: auto;
        }
        .card-body-text
        {
            font-size:.8em;
        }
    </style>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-shapeblau">
    <div class="container-fluid">
        <span class="navbar-brand">Guten Tag!</span>
    </div>
</nav>
</header>

<div class="container">
    <div class="row mt-4">
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card ">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1778546978926-100202afc9cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small">FÜHRUNG</span>
                        <span class="small border rounded border-2 border-shapeorange">Datum: 25.02.2026</span>
                    </div>
                    <h5 class="card-title mb-4">Reguläre Kräuterwanderung</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img class="figure-img card-image-icon" src="Icons/icon_location.svg">
                        <span class="small text-wrap">Bad Neuenahr-Ahrweiler</span>
                    </div>
                    <p class="card-body-text" >Heilwissen am Wegesrand - Zwischen Moos und Blatterrauschen Wächst mehr als nur Grun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="d-flex btn bg-shapegrun text-nowrap align-items-center">
                            <span>Mehr erfahren</span>
                            <img class="card-image-icon" src="Icons/icon_arrow.svg">
                        </a>
                        <img class="card-image-icon" src="Icons/icon_bookmark.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div>Das ist mein Footer.</div>
</footer>
</div>
</body>
</html>