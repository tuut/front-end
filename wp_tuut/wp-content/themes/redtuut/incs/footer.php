        </div>
        <!-- conteudo -->
<footer>
          <h6><a class="logo" title="RED" href="javascript:void();"><img alt="Red" src="<?php bloginfo('template_url');?>/img/logo.svg" /></a></h6>
          
          <div class="escopo">
            <!--<ul class="links">
              <li><a href="javascript:void();">A RED</a></li>
              <li><a href="javascript:void();">OPORTUNIDADES</a></li>
              <li><a href="javascript:void();">NOTICIAS</a></li>
              <li><a href="javascript:void();">CONTATO</a></li>
              <li><a href="javascript:void();">CADASTRE-SE</a></li>
            </ul>-->
            <?php wp_nav_menu(array('theme_location'=>'menu-rodape', 'container' => '', 'menu_class' => 'links')) ?>

            <ul class="links-outros">
              <li>
                <span>PARCEIROS GLOBAIS:</span>
                <a href="javascript:void();"><img src="<?php bloginfo('template_url');?>/img/partner.png" /></a>
              </li>
              <li>
                <span>CONECTE-SE:</span>
                <ul>
                  <li><a href="javascript:void();"><span class="icon-facebook"></span></a></li>
                  <li><a href="javascript:void();"><span class="icon-linkedin2"></span></a></li>
                </ul>
              </li>
            </ul>

            <ul class="logos">
              <li>
                <img src="<?php bloginfo('template_url');?>/img/sp.svg" />
                <span>SÃO PAULO</span>
              </li>
              <li>
                <img src="<?php bloginfo('template_url');?>/img/rj.svg" />
                <span>RIO DE JANEIRO</span>
              </li>
              <li>
                <img src="<?php bloginfo('template_url');?>/img/ctb.svg" />
                <span>CORITIBA</span>
              </li>
            </ul>

          </div>
        </footer>

        <?php if(is_home()) : ?>
        <!-- MODAL NEWSLLETER -->
        <div id="news" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <header>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross" aria-hidden="true"></span></button>
                <h6>RECEBA E-MAILS COM NOVIDADES</h6>
              </header>
              <p class='sub'>Para se cadastrar, preencha os campos abaixo.</p>
              <form action="envia.php" method="post">
                <input name="nome" class="nome" type="text" placeholder="NOME COMPLETO*">
                <input name="email" class="email" type="text" placeholder="E-MAIL*">
                <input type="submit" value="Enviar">
             </form>
              <div class="status"></div>
            </div>
          </div>
        </div>
        <!-- MODAL NEWSLLETER -->
        <?php endif; ?>
    </body>
</html>