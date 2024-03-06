<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Etienne - CV</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
</head>
<body>
    <div class="bodycontainer">
        <?php include 'assets/nav.php'?>

        <?php include 'assets/profile.php'?>

        <div class="infomation">
            <h2>Portfolio</h2>
            <h3> Design <span>/</span> Development web/app <span>/</span> Leidinggevende <span>/</span> </h3>

            <p>
            </p>

            <hr>

            <div class="container">
                <div class="blok">
                    <h5>TokenToLine - CEO</h5>
                    <p class="location"> <a href="https://tokentoline.com" target="_blank">TokenToLine.com</a></p>
                    <img class="klikbareFoto" src="img/portfolio/tokentoline.png" alt="">
                    <p>Eigenaar van TokenToLine. Bestaand uit een team van 5 mensen die het beste uit de crypto wereld willen halen. Neem een kijkje op de website en vooral de GitHub.</p>

                </div>

                <div class="blok">
                    <p class="date"></p>
                    <h5>mvdwfoundation.nl</h5>
                    <p class="location"> <a href="https://mvdwfoundation.nl" target="_blank">mvdwfoundation.nl</a></p>
                    <img class="klikbareFoto" src="img/portfolio/mvdw.jpg" alt="">
                    <p>Met een team van 5 man alles vastgelegd op beeld en hier gaaf promotiemateriaal van gemaakt. Dit is terug te zien op de socails van mvdw foundation.</p>
                </div>
                
                <div class="blok">
                    <p class="date"></p>
                    <h5>Echte koffie</h5>
                    <p class="location"> <a href="https://u210738.gluwebsite.nl/koffie/" target="_blank">rijschoolyourstep.com</a></p>
                    <img class="klikbareFoto" src="img/portfolio/echtekoffie.png" alt="">
                    <p>Complete huisstijl en website voor Echte Koffie.</p>
                </div>



                <div class="blok">
                    <h5>Ultimate Gym Bro</h5>
                    <br><br>
                    <img class="klikbareFoto" src="img/portfolio/ultimategymbro.png" alt="">
                    <p>Design en development gedaan van Ultimate Gym Bro. Sportapp die jou met alles helpt om zo veel mogelijk spieropbouw te laten hebben.</p>
                </div>

                <div class="blok">
                    <p class="date"></p>
                    <h5>Your step</h5>
                    <p class="location"> <a href="https://rijschoolyourstep.nl" target="_blank">rijschoolyourstep.com</a></p>
                    <img class="klikbareFoto" src="img/portfolio/nextstep.png" alt="">
                    <p>Complete huisstijl en website voor Rijschool Your Step.</p>
                </div>

                <div class="blok">
                   
                </div>
            </div>
        </div>

        <!-- <div class="portfolio"> -->
            <div id="vergroteFotoContainer">
                <img id="vergroteFoto" src="" alt="Vergrote foto">
            </div>
        <!-- </div> -->
    </div>
</body>
<script>
      // Voeg een event listener toe aan alle foto's met de class "klikbareFoto"
      var klikbareFotos = document.querySelectorAll(".klikbareFoto");
        klikbareFotos.forEach(function(foto) {
            foto.addEventListener("click", function() {
                toonVergroteFoto(foto.src);
            });
        });

        // Toon foto
        function toonVergroteFoto(fotoURL) {
            var vergroteFotoContainer = document.getElementById("vergroteFotoContainer");
            var vergroteFoto = document.getElementById("vergroteFoto");
            vergroteFoto.src = fotoURL;
            vergroteFotoContainer.style.display = "block";
        }

        // Verberg foto
        document.getElementById("vergroteFotoContainer").addEventListener("click", function() {
            this.style.display = "none";
        });
</script>
</html>