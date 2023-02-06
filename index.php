<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Marvin Roßkothen</title>

    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, min-scale=1.0, min-scale=2.0">

    <link rel="stylesheet" href="style/css/splide-default.min.css">
    <link rel="stylesheet" href="style/css/main.css">
    <link rel="stylesheet" href="style/css/index.css">

    <script src="js/main.js"></script>
    <script src="js/splide.min.js"></script>
</head>
<body class="no-js">

<?php
include_once('php/elements/cursor.php');
include_once('php/elements/contextmenu.php');
include_once('php/elements/noscript.php');
?>

<header>
    <div class="header_content">
        <h1>Marvin Roßkothen</h1>
    </div>
</header>

<main>
    <section id="ueber">
        <h2>Über mich</h2>
        <p>
            Ich bin Marvin und bin 21 Jahre alt. Ich habe einen Abschluss als <strong>Informationstechnischer
                Assistent</strong> am Berufskolleg Kluse in Mülheim und bin derzeit im 2. Lehrjahr meiner <strong>Ausbildung
                zum Mediengestalter Digital/Print</strong>. In meiner Freizeit programmiere ich gerne, produziere Musik und
            arbeite
            an Animationen. Ich bin begeistert von der Kombination aus Technologie und Kreativität und freue mich
            darauf,
            meine Fähigkeiten weiterzuentwickeln und in meiner Karriere zu nutzen.
        </p>
    </section>

    <section id="design">
        <div class="popups">
            <div class="popup" id="design1">
                <h3>Design #1</h3>
                <span class="subline">Über den Kunden / Zweck</span>

                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam autem blanditiis,
                    debitis deleniti, dolor doloremque dolorum eos et illum incidunt inventore iste minima
                    molestiae obcaecati porro qui ullam voluptates.
                </p>

                <div class="image_previews">
                    <div class="image_preview">
                        <img src="https://picsum.photos/seed/x1/300/200" alt="Design #1 Preview 1">
                    </div>
                    <div class="image_preview">
                        <img src="https://picsum.photos/seed/x2/300/200" alt="Design #1 Preview 2">
                    </div>
                    <div class="image_preview">
                        <img src="https://picsum.photos/seed/x3/300/200" alt="Design #1 Preview 3">
                    </div>
                </div>

                <a class="text-button interactable" data-interactable-type="link">Projekt anzeigen</a>
            </div>

            <div class="popup" id="design2">
                <h3>Design #2</h3>
                <span class="subline">Über den Kunden / Zweck</span>

                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam autem blanditiis,
                    debitis deleniti, dolor doloremque dolorum eos et illum incidunt inventore iste minima
                    molestiae obcaecati porro qui ullam voluptates.
                </p>

                <div class="image_previews">
                    <div class="image_preview">
                        <img src="https://picsum.photos/seed/x4/300/200" alt="Design #2 Preview 1">
                    </div>
                    <div class="image_preview">
                        <img src="https://picsum.photos/seed/x5/300/200" alt="Design #2 Preview 2">
                    </div>
                    <div class="image_preview">
                        <img src="https://picsum.photos/seed/x6/300/200" alt="Design #2 Preview 3">
                    </div>
                </div>

                <a class="text-button interactable" data-interactable-type="link">Projekt anzeigen</a>
            </div>

            <div class="popup" id="design3">
                <h3>Design #3</h3>
                <span class="subline">Über den Kunden / Zweck</span>

                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam autem blanditiis,
                    debitis deleniti, dolor doloremque dolorum eos et illum incidunt inventore iste minima
                    molestiae obcaecati porro qui ullam voluptates.
                </p>

                <div class="image_previews">
                    <div class="image_preview">
                        <img src="https://picsum.photos/seed/x7/300/200" alt="Design #3 Preview 1">
                    </div>
                    <div class="image_preview">
                        <img src="https://picsum.photos/seed/x8/300/200" alt="Design #3 Preview 2">
                    </div>
                    <div class="image_preview">
                        <img src="https://picsum.photos/seed/x9/300/200" alt="Design #3 Preview 3">
                    </div>
                </div>

                <a class="text-button interactable" data-interactable-type="link">Projekt anzeigen</a>
            </div>
        </div>

        <h2>Projekte</h2>
        <p>
            Hier findest du eine Auswahl meiner Projekte. Klicke auf ein Projekt, um mehr Informationen zu erhalten.
        </p>

        <div class="no-js-element"></div>
        <div class="splide" role="group" aria-label="Designs">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide project-card">
                        <h3>Design #1</h3>
                        <span class="subline">Über den Kunden / Zweck</span>

                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam autem blanditiis,
                            debitis deleniti, dolor doloremque dolorum eos et illum incidunt inventore iste minima
                            molestiae obcaecati porro qui ullam voluptates.
                        </p>

                        <div class="image_previews">
                            <div class="image_preview">
                                <img src="https://picsum.photos/seed/x1/300/200" alt="Design #1 Preview 1">
                            </div>
                            <div class="image_preview">
                                <img src="https://picsum.photos/seed/x2/300/200" alt="Design #1 Preview 2">
                            </div>
                            <div class="image_preview">
                                <img src="https://picsum.photos/seed/x3/300/200" alt="Design #1 Preview 3">
                            </div>
                        </div>

                        <span class="text-button interactable" data-interactable-type="view" data-toggle-popup="design1">Ansehen</span>
                    </li>
                    <li class="splide__slide project-card">
                        <h3>Design #2</h3>
                        <span class="subline">Über den Kunden / Zweck</span>

                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam autem blanditiis,
                            debitis deleniti, dolor doloremque dolorum eos et illum incidunt inventore iste minima
                            molestiae obcaecati porro qui ullam voluptates.
                        </p>

                        <div class="image_previews">
                            <div class="image_preview">
                                <img src="https://picsum.photos/seed/x4/300/200" alt="Design #2 Preview 1">
                            </div>
                            <div class="image_preview">
                                <img src="https://picsum.photos/seed/x5/300/200" alt="Design #2 Preview 2">
                            </div>
                            <div class="image_preview">
                                <img src="https://picsum.photos/seed/x6/300/200" alt="Design #2 Preview 3">
                            </div>
                        </div>

                        <span class="text-button interactable" data-interactable-type="view" data-toggle-popup="design2">Ansehen</span>
                    </li>
                    <li class="splide__slide project-card">
                        <h3>Design #3</h3>
                        <span class="subline">Über den Kunden / Zweck</span>

                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam autem blanditiis,
                            debitis deleniti, dolor doloremque dolorum eos et illum incidunt inventore iste minima
                            molestiae obcaecati porro qui ullam voluptates.
                        </p>

                        <div class="image_previews">
                            <div class="image_preview">
                                <img src="https://picsum.photos/seed/x7/300/200" alt="Design #3 Preview 1">
                            </div>
                            <div class="image_preview">
                                <img src="https://picsum.photos/seed/x8/300/200" alt="Design #3 Preview 2">
                            </div>
                            <div class="image_preview">
                                <img src="https://picsum.photos/seed/x9/300/200" alt="Design #3 Preview 3">
                            </div>
                        </div>

                        <span class="text-button interactable" data-interactable-type="view" data-toggle-popup="design3">Ansehen</span>
                    </li>
                </ul>
            </div>

            <div class="splide__progress">
                <div class="splide__progress__bar"></div>
            </div>
        </div>
    </section>
</main>

<script>
    new Splide('.splide', {
        arrows: false
    }).mount();
</script>

</body>
</html>