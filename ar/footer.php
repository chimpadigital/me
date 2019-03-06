<!-- ***** Footer Area Start ***** -->
<footer class="footer-social-icon section_padding_70 clearfix bg-dark text-white">
        <!-- footer logo -->
        <div class="container">
            <div class="row">
                <div class="col-1-5 col-md-2 mb-4 mb-md-0">
                    <img src="img/core-img/logo-footer.svg" class="mb-3" alt="">
                    <p class="text-white">Somos especialistas en Felicidad Organizacional y nos apasiona trabajar con otros para crecer, aprender y actualizarnos</p>
                    <div class="footer-social-icon">
                        <a href="https://www.facebook.com/MEExperiencias" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/meexperiencias" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/meexperiencias/ " target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/company/meexperiencias/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-1-5 col-md-3 mb-4 mb-md-0">
                    <div class="footer-heading">
                        <h3>Contacto</h3>
                    </div>
                    <div class="footer-text2">
                        <img src="img/core-img/mail.svg" class="float-left mr-2 mb-1" alt="">
                        <h4>EscribiME</h4>
                        <p>contamemas@meexperiencias.com</p>
                    </div>
                    <div class="footer-text2">
                        <img src="img/core-img/tel.svg" class="float-left mr-2 mb-1" alt="">
                        <h4>LlamaME</h4>
                        <p>+54-9-351-2017150</p>
                    </div>
                </div>
                <div class="col-1-5 col-md-2 mb-4 mb-md-0">
                    <div class="footer-heading">
                        <h3>Enlaces</h3>
                    </div>
                    <ul>
                        <li class="mb-3"><a href="bienvenido.php">Bienvenido</a></li>
                        <li class="mb-3"><a href="nosotras.php">¿Quiénes somos?</a></li>
                        <li class="mb-3"><a href="servicios.php">¿Qué hacemos?</a></li>
                        <li class="mb-3"><a href="blog.php">Blog</a></li>
                        <li class="mb-3"><a href="cursos.php">Próximos cursos</a></li>
                        <li class="mb-3"><a href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-1-5 col-md-2 mb-4 mb-md-0">
                    <div class="footer-heading">
                        <h3>Servicios</h3>
                    </div>
                    <ul>
                        <li class="mb-3"><a href="servicios.php#asesoria">Asesoría</a></li>
                        <li class="mb-3"><a href="servicios.php#cursos">Cursos de formación</a></li>
                        <li class="mb-3"><a href="servicios.php#team-building">Team building</a></li>
                        <li class="mb-3"><a href="servicios.php#charlas">Charlas y conferencias</a></li>
                    </ul>
                </div>
                <div class="col-1-5 col-md-3 mb-4 mb-md-0">
                    <div class="fb-page" data-href="https://www.facebook.com/MEExperiencias/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-height="300" data-width=""data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/MEExperiencias/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MEExperiencias/">ME Consultora en Felicidad Organizacional</a></blockquote></div>
                </div>
            </div>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p>Copyright ©2019 Me experiencia. Diseñado, ilustrado y desarrollado por <a href="https://chimpancedigital.com.ar" target="_blank">Chimpancé</a></p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
    
    <script src="js/otro.js"></script>


    <script type="text/javascript">
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $("#nav a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("a").addClass("active");
                //for making parent of submenu active
               $(this).closest("a").parent().parent().parent().addClass("active");
            }
        });
    });  

    
    </script>
</body>

</html>