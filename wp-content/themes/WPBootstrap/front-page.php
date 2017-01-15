<?php get_header() ; ?>


    <section class="showcase">
      <div class="container">
        <h1>Custom Bootstrap Wordpress Theme</h1>
        <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam</p>
        <a class="btn btn-primary btn-lg">Read More</a>
      </div>
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <?php if(is_active_sidebar('box1')) : ?>
              <?php dynamic_sidebar('box1'); ?>
              <?php endif; ?>
          </div>

          <div class="col-md-4">
              <?php if(is_active_sidebar('box2')) : ?>
              <?php dynamic_sidebar('box2'); ?>
              <?php endif; ?>
          </div>

          <div class="col-md-4">
              <?php if(is_active_sidebar('box3')) : ?>
              <?php dynamic_sidebar('box3'); ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

<?php get_footer() ; ?>