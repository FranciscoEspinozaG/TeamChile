<?php b4st_footer_before();?>

</main><!-- /.container -->
<footer id="footer" class="mt-3 p-0">

  <div class="container row ml-auto mr-auto pt-3">
    <div class="col-md-3 align-self-center d-flex justify-content-around">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/Team-color-md.png">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/COCH-color-md.png">
    </div>
    <div class="col-md-3">
      <ul>
        <p class="titulo-footer des">Ubicación</p class="titulo-footer">
        <li>Dirección: <a href="https://goo.gl/maps/wcD7J4SJw312">Ramón Cruz Montt 1176, Ñuñoa</a></li>
        <br>
        <li>Teléfono: <a href="callto:5622703678">(56) 2 270 36 78</a></li>
      </ul>
      <p class="titulo-footer">Síguenos</p>
      <div class="container row d-flex justify-content-around pb-4">
        <a href="https://www.facebook.com/teamchile/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icono-facebook.png" alt="facebook-teamchile"></a>
        <a href="https://www.instagram.com/coch_teamchile/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icono-instagram.png" alt=""></a>
        <a href="https://twitter.com/TeamChile_COCH" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icono-twitter.png" alt=""></a>
        <a href="https://www.youtube.com/channel/UCBDTU9lVrB9NZn2HwMUDp-w" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icono-youtube.png" alt=""></a>
      </div>
    </div>
    <div class="col-md-6">
      <p class="titulo-footer dest">Menú</p>
      <div class="container p-0">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li><a href="<?php echo site_url(); ?>/#">Inicio</a></li>
              <br>
              <li><a href="<?php echo site_url(); ?>/que-es-teamchile">¿Qué es Team Chile?</a></li>
              <br>
              <li><a href="<?php echo site_url(); ?>/#que-es-ser-socio">¿Qué es ser socio del Team?</a></li>
              <br>
              <li><a href="<?php echo site_url(); ?>/categorias_socios">Categorías y Beneficios</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul>
              <li><a  href="<?php echo site_url(); ?>/quien-administra-los-recursos">¿Quién administra los recursos?</a></li>
              <br>
              <li><a  href="<?php echo site_url(); ?>/#sponsors-teamchile">Sponsors</a></li>
              <br>
              <li><a  href="<?php echo site_url(); ?>/#instagram">Instagram</a></li>
              <br>
              <li><a  href="<?php echo site_url(); ?>/contacto">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="row pt-5 pb-4" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?> -->
  </div>

  <div class="w-100 mb-0 azul-footer">
    <p class="text-center m-0 p-3" style="color:white;">
      2019 Team Chile | Todos los derechos reservados
    </p>
  </div>

</footer>

 <!--<?php b4st_footer_after();?>

<?php b4st_bottomline();?> -->

<?php wp_footer(); ?>
</body>
</html>
