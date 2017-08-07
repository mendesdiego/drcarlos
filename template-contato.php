<?php /* template name: Contato */ ?>

<?php get_header() ?>

<main>
  <section class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.052722395105!2d-43.95909408507861!3d-19.922182986608085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa697423f342f0b%3A0x35e82b9884190f0c!2sRua+dos+Timbiras%2C+3642+-+1102+-+Barro+Preto%2C+Belo+Horizonte+-+MG%2C+30140-062!5e0!3m2!1spt-BR!2sbr!4v1501609817379" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>

  <section class="form">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <?php echo do_shortcode('[contact-form-7 id="26" title="form-contato"]'); ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="end-principal">
            <h3 class="titulo-end">Consultório</h3>
            <ul class="list-unstyled lista-contato">
              <li><i class="fa fa-home icon-maior" aria-hidden="true"></i>  Rua Timbiras 3642 - Sala 1102 - Cep 30140-062</li>
              <li><i class="fa fa-phone icon-maior" aria-hidden="true"></i> 3295-4132</li>
              <!--<li><i class="fa fa-paper-plane icon-footer" aria-hidden="true"></i> email@enail.com</li>-->
            </ul>
          </div>

          <div class="end-secundario">
            <h3 class="titulo-end">Insituto de Oncologia do Hospital Felício Rocho</h3>
            <ul class="list-unstyled lista-contato">
              <li><i class="fa fa-home icon-maior" aria-hidden="true"></i>  Avenida do Contorno 9841 - 5&ordm; - Cep 35147-000</li>
              <li><i class="fa fa-phone icon-maior" aria-hidden="true"></i> 3299-7800 ou call center do Felicio Rocho: 3514-7000</li>
              <!--<li><i class="fa fa-paper-plane icon-footer" aria-hidden="true"></i> email@enail.com</li>-->
            </ul>
          </div>

          <div class="mail-contato">
            <h3 class="titulo-end">Email para Contato</h3>
            <p>email@email.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer() ?>
