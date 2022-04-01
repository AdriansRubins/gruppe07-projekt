<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="../../css/headerstyle.css">
        <link rel="stylesheet" href="../../css/footerstyle.css">
        <link rel="stylesheet" href="../../css/servicestyle.css">
        <link rel="stylesheet" href="../../css/style.css">
        <title>Auto-care!</title>
    </head>
    <body>
    <?php
    $currentPage = 'leistungen';
    include ('../templates/header.php');
    ?>
    <br>

        <div class="gesamt">

            <div class="reifenHeading">
                <h1>Services</h1>
            </div>

            <div class="leistungsgrid">
                <div class="serviceRight">
                    <div class="reifendiv">
                        <details class="styled">
                            <summary>Reifenservice</summary>
                            <div class="tyreblock">
                                <div class="reifen">
                                    <p>
                                        für alle gängigen Reifenmarken und Größen <br>
                                        Egal ob Winterreifen, Sommerreifen oder Allwetterreifen, wir machen Ihnen immer ein passendes Angebot.<br>
                                        Über unseren Radkonfigurator wählen wir Ihr Fahrzeug aus und zeigen Ihnen die passenden Alufelgen am Fahrzeug.<br>
                                        Eine eventuell nötige Eintragung wird vor Ort von unserem Partner der GTÜ durchgeführt.<br>

                                        Wir beraten Sie gerne!
                                    </p>
                                </div>
                                <div class="tyrebild">
                                    <img alt="tires" class="bildtyre" src="../../assets/images/tyres.jpg">
                                </div>
                            </div>
                        </details>
                    </div>

                    <div class="glasdiv">
                        <details class="glasstyled">
                            <summary>Autoglas & Glasreparatur</summary>
                            <div class="glasblock">
                                <div class="glas">
                                    <p>
                                        Nicht jeder Glasschaden darf und kann repariert werden.<br>
                                        Das hängt von der Größe und dem Ort der
                                        Beschädigung ab. Ist die Beschädigung an bestimmten Stellen der Windschutzscheibe, muss die Scheibe
                                        ersetzt werden.<br>
                                        Am besten kommen Sie im Fall der Fälle vorbei, und wir sagen Ihnen, ob repariert werden kann.
                                        Auch der Austausch der Scheibe wird von Ihrer Teilkaskoversicherung abzgl. der Selbstbeteiligung übernommen.<br>
                                        Gerne helfen wir Ihnen bei der Abwicklung mit Ihrer Versicherung.
                                    </p>
                                </div>
                                <div class="glasbild">
                                    <img alt="glas" class="bildtyre" src="../../assets/images/glas.jpg">
                                </div>
                            </div>
                        </details>
                    </div>

                    <div class="unfalldiv">
                        <details class="unfallstyled">
                            <summary>Unfallinstandsetzung</summary>
                            <div class="unfallblock">
                                <div class="unfall">
                                    <p>
                                        Von der Beseitigung der kleinen Delle (Smart Repair) bis zur fachmännischen Reparatur eines
                                        Unfallschadens sind wir Ihr qualifizierter Partner. <br>Mit Hilfe des Kalkulationsprogramms Silver
                                        Dat erstellen wir einen Kostenvoranschlag oder beraten Sie, wenn ein Sachverständiger zur Erstellung eines Gutachtens und ein Anwalt nötig ist.<br>
                                        Ein Unfall-Ersatzfahrzeug kann Ihnen bei Bedarf zur Verfügung gestellt werden. Gerne helfen wir Ihnen
                                        bei der Abwicklung mit der Versicherung.<br>Zur Beseitigung von Rahmenschäden verfügen wir über eine Cellette-Richtbank.
                                    </p>
                                </div>
                                <div class="unfallbild">
                                    <img alt="unfall" class="bildtyre" src="../../assets/images/unfall.jpg" >
                                </div>
                            </div>
                        </details>
                    </div>
                </div>

            </div>
        </div>
        <?php
        include ('../templates/footer.php');
        ?>
    </body>
</html>


