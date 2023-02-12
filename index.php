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

                    <li class="splide__slide project-card">
                        <h3>Bootswerft Visitenkarte</h3>
                        <span class="subline">Visitenkarte für <a class="interactable" data-interactable-type="external_link" href="https://www.hatecke-bootswerft.de/" target="_blank">Hatecke Bootswerft</a></span>

                        <p class="description">
                            <strong>Briefing:</strong>
                            Es sollten neue Visitenkarten in Anlehnung an die Website erstellt werden.
                        </p>

                        <div class="image_previews">
                            <div class="image_preview"
                                 data-image-description="<strong>Vorderseite:</strong> Als Anlehnung auf die Website des Kunden habe ich mich zur Verwendung von Wellen als Gestaltungselement entschieden, in welchen ich auf der Vorderseite eine Illustration eines Boots platziert habe, um den Bezug zum Bootswerft zu verstärken und neben der textlichen Darstellung ebenfalls visuell darzustellen.">
                                <img src="images/projekte/hatecke-bootswerft/vorderseite.jpg" alt="Vorderseite">
                            </div>

                            <div class="image_preview"
                                 data-image-description="<strong>Rückseite (Entwurf 1):</strong> Wie auch auf der Vorderseite habe ich hier erneut die Wellen als Gestaltungselement verwendet, um den Wiedererkennungswert der Website zu gewährleisten. Abgesehen davon habe ich hier einen QR-Code mir Verlinkung zur Website hinzugefügt, um es potentiellen Kunden einfacher zu machen an weitere Informationen zum Unternehmen zu gelangen.">
                                <img src="images/projekte/hatecke-bootswerft/rueckseite.jpg" alt="Rückseite">
                            </div>

                            <div class="image_preview"
                                 data-image-description="<strong>Rückseite (Entwurf 2):</strong> Als weiteren Entwurf habe ich dem Kunden eine helle Variante der Rückseite entworfen um eine Auswahl zu ermöglichen. Diese Variante wirkt durch die hellen Farben etwas freundlicher und einladender. Auch hier habe ich die Wellen, in etwas transparenter verwendet um den Wiedererkennungswert zu erhöhen, hier stehen diese allerdings nicht so stark im Vordergrund, wie bei den anderen Entwürfen.">
                                <img src="images/projekte/hatecke-bootswerft/rueckseite-hell.jpg" alt="Rückseite (Hell)">
                            </div>
                        </div>

                        <span class="text-button interactable" data-interactable-type="view" data-toggle-popup="design1" data-project-link="images/projekte/hatecke-bootswerft/visitenkarte.pdf">Ansehen</span>
                    </li>

                    <li class="splide__slide project-card">
                        <h3>Landingpage Augenoptiker</h3>
                        <span class="subline">Landingpage für <a class="interactable" data-interactable-type="external_link" href="https://augenoptik-nord.com/" target="_blank">Augenoptik Nord</a></span>

                        <p class="description">
                            <strong>Briefing:</strong>
                            Hier sollte eine Landingpage erstellt werden, welche einen großen Wert auf die kleinen Kunden legt. Außerdem sollte die Messung der Sehstärke von Kindern im Vordergrund stehen.<br><br>
                            Im allgemeinen habe ich mich für dieses Layout für den Wiedererkennungswert dazu entschieden, mein Layout am aktuellen Layout der <a class="interactable" target="_blank" data-interactable-type="external_link" href="https://augenoptik-nord.de/">Hauptwebsite des Kunden</a> auszurichten.
                        </p>

                        <div class="image_previews">
                            <div class="image_preview"
                                 data-image-description='<strong>Header:</strong> Der Kunde hatte sich ein passendes Bild für den Header gewünscht, welches auf voller Breite dargestellt wird. Daher habe ich mich für ein neugieriges Kind entschieden, welches den Kunden emotional ansprechen und außerdem dessen Blick in Richtung des Slogans "Messung der Sehstärke auch für unsere kleinen Kunden" lenken soll.'>
                                <img src="images/projekte/augenoptik-nord/header.jpg" alt="Header">
                            </div>

                            <div class="image_preview"
                                 data-image-description='<strong>Texte & Informationen:</strong> Wie bereits im Briefing erwähnt, habe ich mich bei der Gestaltung an der Website des Kunden ausgerichtet, dementsprechend kann ich hier nicht viel zur Gestaltung sagen.<br><br>Das Bild im Slider habe ich hier für das Portfolio nachträglich verwaschen, da ich nicht die Rechte an diesem Bild habe.'>
                                <img src="images/projekte/augenoptik-nord/about.jpg" alt="Texte & Informationen">
                            </div>

                            <div class="image_preview"
                                 data-image-description='<strong>Texte & Informationen:</strong> Auch beim Footer habe ich mich an dem auf der Website des Kunden orientiert, habe diesen allerdings etwas simplifiziert und die Zahlungsmethoden und sonstige Shop-Links entfernt, da diese Landingpage nur zu Informationszwecken dient.'>
                                <img src="images/projekte/augenoptik-nord/footer.jpg" alt="Footer">
                            </div>
                        </div>

                        <span class="text-button interactable" data-interactable-type="view" data-toggle-popup="design1" data-project-link="https://augenoptik-nord.com/">Ansehen</span>
                    </li>

                    <li class="splide__slide project-card">
                        <h3>Website Maler</h3>
                        <span class="subline">Landingpage für <a class="interactable" data-interactable-type="external_link" href="https://maler-heinecke.de/" target="_blank">Malerbetrieb Ingolf Heinecke</a></span>

                        <p class="description">
                            <strong>Briefing:</strong>
                            Hier sollten die Inhalte übernommen und lediglich das Design der Website modernisiert werden.
                        </p>

                        <div class="image_previews">
                            <div class="image_preview"
                                 data-image-description='<strong>Header:</strong> Zu aller erst habe ich die Navigation vereinfacht und sticky am oberen Bildschirmrand platziert, wodurch der Header etwas aufgeräumter wirkt. Desweiteren habe ich ein Bild in den Header gesetzt, um einen Eindruck davon zu vermitteln, was man bei den Dienstleistungen des Kunden erwarten kann und habe den Slogan mit einem "Farbstreifen", welchen ich auf der gesamten Seite als Gestaltungselement verwendet habe, in den Anschnitt gesetzt.'>
                                <img src="images/projekte/maler-heinecke/header.png" alt="Header">
                            </div>

                            <div class="image_preview"
                                 data-image-description='<strong>CTA:</strong> Die alte Website beinhielt keine CTAs, was unter Umständen dazu führen kann, dass viele Kunden, die eigentlich Interesse an den Dienstleistungen gehabt hätten, den Auftraggeber dennoch nicht kontaktiert hätten, da es keine explizite Aufforderung dazu gab und die Seite so aussehen könnte, als wäre Sie nur zur Informationsbeschaffung gedacht.'>
                                <img src="images/projekte/maler-heinecke/cta.png" alt="CTA">
                            </div>
                        </div>

                        <span class="text-button interactable" data-interactable-type="view" data-toggle-popup="design1" data-project-link="">Ansehen</span>
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
        arrows: false,
        gap: '1rem'
    }).mount();
</script>

</body>
</html>