        <footer class="page-footer garntante">
          <div class="container">
            <div class="row">
                <div class="col m4 s12 white-text">
                    <h5 class="caption-title">Kontakt</h5>
                    Garntante<br>
                    Hammer Steindamm 119 <br>
                    20535 Hamburg<br>
                    Tel: (040) 60 43 3500
                </div>

                <div class="col m4 s12 white-text">
                    <h5 class="caption-title">&Ouml;ffnungszeiten</h5>
                    Montag - Freitag: 10:00 - 19:00 Uhr<br>
                    Samstag: 09:00 - 14:00 Uhr<br>
                </div>

                <div class="col m4 s12 white-text">
                    <h5 class="caption-title">Soziale Netze</h5>
                    <a href="https://www.facebook.com/Garntante/" style="color:white" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/facebook.png"></a>
                </div>

            </div>
          </div>


          <div class="footer-copyright">
            <div class="container">
                <span><?php echo 'Copyright &copy; ' . date('Y') . '&nbsp;' . get_bloginfo('name'); ?></span>
                <span class="right">
                    <?php
                    wp_nav_menu(array(
                      'theme_location' => 'footer_nav',
                      'container' => 'span',
                      'container_class' => 'right',
                      'menu_class' => 'footer_nav'
                    ));
                    ?>
                </span>
            </div>
          </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
