
<?php if($name_url[1] === "contact.php") : ?>
<section class="container-fluid mt-5 p-0">
        <iframe class="map w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11582.41246137468!2d-1.5406774!3d43.4688824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc114f378a7ebcc2!2sLe%20Studio!5e0!3m2!1sfr!2sfr!4v1658132842269!5m2!1sfr!2sfr" style="height: 500px;" allowfullscreen></iframe>
    </section>
 <?php endif; ?>
<footer class="container-fluid p-0 bg-grey">
        <div class=" row img-footer no-gutters">
            <?php addImage("img-fluid" , "./images/activites/pompes") ?>  
        </div>
        <div class=" w-80 text-footer d-flex justify-content-between align-items-center mt-5 content-footer">
            <ul>
                <li class=" logo-footer text-white d-flex align-items-center">
                    <img src="./images/logo_footer.png" alt="" class="mr-3">
                    <h5>A PROPOS</h5>
                </li>
                <li class="text-white list-unstyled "><strong>2018 © Studio Sport Biarrytz</strong></li>
                <li class="text-white list-unstyled ">Salle de sport, de fitness et de crossfit</li>
                <li class="text-white list-unstyled ">à Biarrytz Pays Basques.</li>
                <li class="text-white list-unstyled ">RCS : 000 000 000</li>
                <li><a href="./html/error-404.html" class="list-unstyled text-white text-decoration-none"><strong>Mentions Légales</strong></a></li>
            </ul>
            <ul>
                <li class=" text-white d-flex align-items-center">
                    <h5>STUDIO SPORT CORPORATE</h5>
                </li>
                <?php echo addLinks("", "list-unstyled text-white text-decoration-none", "./html/error-404.html", "<strong>___Studio Center : créer votre studio</strong>") ?>
                <?php echo addLinks("", "list-unstyled text-white text-decoration-none", "./html/error-404.html", "<strong>___Studio Center : créer votre studio</strong>") ?>
                <?php echo addLinks("", "list-unstyled text-white text-decoration-none", "./html/error-404.html", "<strong>___Studio Center : créer votre studio</strong>") ?>

            </ul>
            <ul>
                <li class=" text-white d-flex align-items-center">
                    <h5 class="mb-5">FITNESS, CROSSFIT ET TRAINNING AU PAYS BASQUES</h5>
                </li>
                <?php echo addLinks("list-unstyled text-white text-decoration-none", "list-unstyled text-white text-decoration-none", "./html/error-404.html", "<strong>Coach personnal de sport à Biarrytz, Coach personnel de sport à Anglet, Salle</strong>") ?>
                <li class="list-unstyled text-white text-decoration-none"><strong>de sport BAB, Fitness à Biarrytz, Sessions de fitness à Anglet</strong> </li>
                <li class="list-unstyled text-white text-decoration-none"><strong>Autre mot clé+ville, Autre mot clé+ville</strong></li>
            </ul>
        </div>
        <div class="bg-black  d-flex justify-content-center align-items-center pt-2">
            <ul>
                <li class="text-white list-unstyled ">Un site céer par</li>
                <li class="text-white list-unstyled "><strong>L'AGENCE 364 COM'</strong></li>
            </ul>
            <img class="pl-2" src="./images/364.png" alt="">
        </div>
    </footer>
    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>
</html>