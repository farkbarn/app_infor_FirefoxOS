  <footer>
    <div class="footer" align="center">
      <div class="footer_container">
          <nav class="nav_footer">
            <a href="<?php echo home_url(); ?>"> inicio</a> |
            <a href="<?php echo home_url(); ?>/?cat=209"> barquisimeto + regiones </a> |<!--CATEGORIA LOCALES-->
            <a href="<?php echo home_url(); ?>/?cat=6"> deportes</a> |
            <a href="<?php echo home_url(); ?>/?cat=7"> zona libre + sociales</a> |
	    <a href="<?php echo home_url(); ?>/?cat=19"> negocios</a> |
            <a href="<?php echo home_url(); ?>/?cat=8"> venezuela + mundo</a> |
            <a href="<?php echo home_url(); ?>/?cat=5"> sucesos</a> 
           <!-- <a href="<?php echo home_url(); ?>/category/guareando"> guareando</a> -->
           <!-- <a href="<?php echo home_url(); ?>/category/opinion/">+ opinión</a>--> <!--TEMPORAL-->
           <!-- <a href="" class="enlace_clasificados">clasificados</a>-->
           <!-- <a href="">+ la guía de lara</a>-->
          </nav>
          <div class="links_footer_container">
            <nav class="link_footer">
              <a class="label_buscador">Buscador:</a>
            </nav>
            <div class="buscador">
                         <form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
                    <input type="text" value="<?php echo $search_text; ?>"
            name="s" id="s"  onblur="if (this.value == '')  {this.value = '<?php echo $search_text; ?>';}"
            onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" placeholder="buscar aqui" />
              <input type="submit" value="Buscar">
            </form>
            </div>
            <nav class="link_footer2">
              <div><a href="http://www.elinformador.com.ve/?page_id=4512">Contáctenos <span>su opinion nos interesa</span></a></div>
              <div><a href="http://www.elinformador.com.ve/?page_id=4519">Quiénes Somos <span>El Informador C.A.</span></a></div>
            </nav>
            <div class="clear"></div>
            <a class="link_footer_inferior" href="#">Anuncie con nosotros | Condiciones de Publicación | Servicio FTP | Términos de uso y privacidad | Mapa del sitio | HMTL5 + CSS3</a>
            <div class="clear"></div>
            <p class="creditos">© Copyright 2012 por EL INFORMADOR "El Diario de Barquisimeto" RIF.-J08500641-9. Todos los derechos reservados. </p>
          </div> <!-- fin link footer -->
      </div> <!-- fin footer container -->
    </div>
  </footer>
</div> <!--! end of #container -->
  <!-- Javascript at the bottom for fast page loading -->
  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/main.js") ?>
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  <?php wp_footer(); ?>
<script type="text/javascript">
      $(document).ready(function(){
        $(".cerrar_flotante").click(function(){
          $(".aviso_flotante").css("display","none");
          return false;
          });
    });
    </script>
<?//echo 'M: ' . round(memory_get_usage() / 1024,1) . ' - ' . round(memory_get_usage(1) / 1024,1) . '';?>
</body>
</html>