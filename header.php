<?php ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .bg-shapeblau {
        background-color: var(--colors--shapeblau);
    }

    .burger-button-icon {
        width: 25px;
    }

    .rounded-bottom-start {
        border-radius: 0 0 0 8px;
    }

    .active {
        content-visibility: visible;
    }

    .hidden {
        content-visibility: hidden;
    }
</style>


<header>
    <nav class="navbar navbar-expand bg-shapeblau">
        <div class="container-fluid">
            <span class="navbar-brand">Guten Tag!</span>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">E-Mail Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Aufgabe_2.php">Aufgabe 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="test.php">Test</a>
                    </li>
                </ul>
            </div>
            <a class="btn" onclick="HamburgerHandler()" data-bs-toggle="collapse" aria-controls="burgerLinks">
                <img class="burger-button-icon" src="Icons/icon_menu.svg" alt="">
            </a>
        </div>
    </nav>

    <div class="d-grid position-absolute end-0 z-3 bg-shapeblau rounded-bottom-start hidden" id="burgerLinks">
        <nav class="navbar">
            <ul class="navbar-nav me-3 ms-3">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">E-Mail Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Aufgabe_2.php">Aufgabe 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="test.php">Test</a>
                </li>
            </ul>
        </nav>
    </div>
</header>


<script>
    function HamburgerHandler() {
        let x = document.getElementById("burgerLinks");
        if (x.classList.contains("active")) {
            x.classList.remove("active");
            x.classList.add("hidden");
        } else {
            x.classList.add("active");
            x.classList.remove("hidden")
        }
    }
</script>
