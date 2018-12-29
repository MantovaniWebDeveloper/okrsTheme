<?php get_header(); ?>
<main>
  <section id="wrapIntro" >
    <div class="container">
      <div id="wrapIntroContent">
        <div class="logo">
          <img src="assets/logocampionatoTEXT.png" alt="logo-campionato">
        </div>
        <div class="frasePromozionale">
          <h2>IL CAMPIONATO DI KART RENTAL APERTO A TUTTI</h2>
        </div>
        <div class="wrapButton">
          <a class="btnIscriviti white" href="#">ISCRIVITI AL CAMPIONATO</a>
        </div>
        <div class="wrapArrow">
          <smal>info</smal>
          <div><i class="fas fa-angle-down"></i></div>
        </div>
      </div>
    </div>
  </section>
  <section id="wrapSpiegazioneGenerale">
    <div class="container">
      <?php $the_query = new WP_Query( 'cat=3' ); ?>
      <?php while ( $the_query->have_posts() ) :
	       $the_query->the_post(); ?>
      <div class="wrapSpiegazioneGeneraleContent">
        <div class="wrapImgKart">
          <?php the_post_thumbnail(); ?>
        </div>
        <div>
          <div class="wrapSpiegazioneText">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <div class="wrapButton">
              <a class="btnIscriviti black" href="#">VOGLIO PARTECIPARE</a>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile;
          // Ripristina Query & Post Data originali
          wp_reset_query();
          wp_reset_postdata();
      ?>
    </div>
  </section>

</main>
<?php get_footer(); ?>
