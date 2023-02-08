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
    <script src="js/index.js"></script>
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
        <p class="full-typing">Ich mache <span class="typing" data-list="['irgendwas mit Medien', 'brilliante Layouts', 'beeindruckendes JavaScript-Zeugs']"></span></p>
    </div>

    <div class="header_content image_burst">
        <img src="https://picsum.photos/seed/a/200/300">
        <img src="https://picsum.photos/seed/b/200/300">
        <img src="https://picsum.photos/seed/c/200/300">
        <img src="https://picsum.photos/seed/c/200/300">
        <img src="https://picsum.photos/seed/c/200/300">
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
        <div class="popups"></div>

        <h2>Projekte</h2>
        <p>
            Hier findest du eine Auswahl meiner Projekte. Klicke auf ein Projekt, um mehr Informationen zu erhalten. Als kleinen spaßigen Sidefact: Die Popups werden komplett per JS generiert. Im Quelltext existieren nur die einzelnen Slides des Sliders.
        </p>

        <div class="no-js-element"></div>
        <div class="splide" role="group" aria-label="Designs">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide project-card">
                        <h3>Fliesenleger Website</h3>
                        <span class="subline">Layout für <a class="interactable" data-interactable-type="external_link" href="https://www.faszination-fliesen.de/" target="_blank">Faszination Fliesen</a> [Umsetzung steht aus]</span>

                        <p class="description">
                            <strong>Briefing:</strong>
                            Die aktuelle Onepage soll modernisiert und in eine Website umstrukturiert werden.
                            Dabei sollen die Farben übernommen werden.
                        </p>

                        <div class="image_previews">
                            <div class="image_preview" data-image-description="<strong>Header:</strong> Für den Header hat sich der Kunde ein breites Header-Bild gewünscht, um jedoch dennoch grundlegende Informationen und einen CTA-Button unterzubringen, habe ich die linke Sektion hinzugefügt. Dadurch sieht der Header außerdem etwas weniger 08/15 und somit ansprechender aus.">
                                <img src="images/projekte/faszination-fliesen/nachher-1.png" alt="Header">
                            </div>
                            <div class="image_preview" data-image-description="<strong>Über uns:</strong> Die Über uns-Sektion habe ich zweispaltig umgesetzt. Das hat es mir ermöglicht diesen Abschnitt zu unterteilen in: Den vom Kunden gewünschten Text, sowie eine schnellübersicht über die Eigenschaften, die das Unternehmen ausmacht – ohne viel gerede um den heißen Brei.">
                                <img src="images/projekte/faszination-fliesen/nachher-2.png" alt="Über uns">
                            </div>
                            <div class="image_preview" data-image-description="<strong>Leistungen:</strong> Auf der Onepage des Kunden wurden für die einzelnen Leistungspunkte sehr lange Texte verwendet, in denen sich Informationen teilweise gedoppelt haben, diese habe ich gekürzt und auf das Wesentliche reduziert.">
                                <img src="images/projekte/faszination-fliesen/nachher-3.png" alt="Leistungen">
                            </div>
                        </div>

                        <span class="text-button interactable" data-interactable-type="view" data-toggle-popup="design1" data-project-link="https://www.figma.com/file/kPgZSKB6cHF54O14OIhOFn/240030_Website-Layout_Faszination-Fliesen">Ansehen</span>
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