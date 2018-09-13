<?php get_header(); ?>

<div class=" is-desktop">
  <div class="header--home">
    <div class="row wrap">
      <div class="col-md-6 col-12 pt7-l pt3">
        <h3 class="text--secondary headline--three demi-bold">For Adults with Plaque Psoriasis</h3>
        <h1 class="text--secondary headline--one bold">Clearer Skin is Possible in Just 4 Weeks</h1>
      </div>
      <div class="col-md-2 col-12 relative">
        <img src="<?php bloginfo('template_directory') ?>/images/Enstilar_Red_Product--HOME.png" class="absolute bottom-0" alt="">
      </div>
      <div class="col-md-4 col-12">
        <div class="container--white b-radius--default pv4 tc absolute--center w-90 box-shadow">
          <h3 class="headline--three text--secondary demi-bold">Pay as little as</h3>
          <span class="headline--one text--ruby-red bold">$20*</span>
          <h3 class="headline--three text--secondary demi-bold">for Enstilar<sup>®</sup></h3>
          <div class="">
            <div class="container--ruby-red btn--primary center pt2 pb1">
              <a href="<?php bloginfo('url') ?>/co-pay-savings/" class="text--white no-underline">Learn More ></a>
            </div>
          </div>
          <a href="#" class="small pt3" data-toggle="modal" data-target="#eligibilityCriteria">*Co-Pay Savings Card Eligibility Requirements</a>
        </div>
      </div>
    </div>
  </div>

    <div class="container--secondary tc">
      <div class="wrap">
        <h3 class="headline--three text--white bold pt3">Need Enstilar<sup>®</sup> co-pay information? Call us at (855) 820-9627 <br />
        from 8:00 a.m. – 8:00 p.m. (EST) Monday – Friday</h3>
      </div>
    </div>
    <?php if(have_rows('home_circle_images_and_description')): ?>

    <div class="wrap row">
      <?php
        while(have_rows('home_circle_images_and_description')): the_row();
        $image = get_sub_field('description_image');
        $header = get_sub_field('description_header');
        $copy = get_sub_field('description_copy');
        $link = get_sub_field('description_link');

      ?>
      <div class="col-md-4 col-12 tc pv5-l pv4">
        <div class="w-100">
          <img src="<?php echo $image ?>" class="pa2 match-height" alt="">
          <h4 class="headline--four text--ruby-red ttu bold"><?php echo $header ?></h4>
          <div class="flex flex-column overflow-hidden home-fixed-height">
            <p class="w-70 center flex flex-column flex-ratio"><?php echo $copy ?></p>
          </div>
          <?php if($link): ?>
          <div class="container--default btn--primary center pt2 pb1">
            <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
          </div>
        <?php endif; ?>
        </div>
      </div>
      <!-- <div class="col-md-4 col-12 tc pv5-l pv4">
        <div class="w-100">
          <img src="<?php bloginfo('template_directory') ?>/images/applies-easily.png" class="pa2" alt="">
          <h4 class="headline--four text--ruby-red ttu bold">spray on foam</h4>
          <div class="match-height">
            <p class="w-70 center match-height">Enstilar<sup>®</sup> can be sprayed across a large body area. Gently rub in after spraying on.</p>
          </div>
          <div class="container--default btn--primary center pt2 pb1">
            <a href="#" class="text--white no-underline">Learn How ></a>
          </div>
        </div>
      </div> -->
      <!-- <div class="col-md-4 col-12 tc pv5-l pv4">
        <div class="w-100">
          <img src="<?php bloginfo('template_directory') ?>/images/speak-doctor.png" class="pa2" alt="">
          <h4 class="headline--four text--ruby-red ttu bold">Talk to your doctor</h4>
          <div class="match-height">
            <p class="w-70 center match-height">Your doctor can help you understand if Enstilar<sup>®</sup> may be right for you. </p>
          </div>
          <div class="container--default btn--primary center pt2 pb1">
            <a href="#" class="text--white no-underline">Learn More ></a>
          </div>
        </div>
      </div> -->
    <?php endwhile; ?>

    </div>
  <?php endif; ?>



    <div class="container--grey">
      <div class="row wrap--sm">
        <div class="col-md-7 col-12 flex justify-center items-center">
          <div class="tl mv5 mv0-l">
              <h2 class="headline--two text--secondary bold"><?php the_field('home_plaque_psoriasis_header')?></h2>
              <p><?php the_field('home_plaque_psoriasis_copy')?></p>
              <?php
                $link = get_field('home_plaque_psoriasis_link');

                if($link):
               ?>
              <div class="container--default btn--primary pt2 pb1 tl w-100">
                <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <img src="<?php the_field('home_plaque_psoriasis_image') ?>" class="pl4 pt2 h-100" alt="">
        </div>
      </div>
    </div>
  <div class="">
    <div class="row wrap">
      <div class="col-md-6 col-12">
        <img src="<?php the_field('home_about_enstilar_image') ?>" class="" alt="">
      </div>
      <div class="col-md-5 col-12 flex justify-center items-center tl">
        <div class="mv5">
          <h2 class="headline--two text--secondary bold"><?php the_field('home_about_enstilar_header') ?></h2>
          <p><?php the_field('home_about_enstilar_copy') ?></p>
          <?php
            $link = get_field('home_about_enstilar_link');

            if($link):
           ?>
          <div class="container--default btn--primary pt2 pb1">
            <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
          </div>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="pb4">
    <div class="row wrap">
      <div class="col-md-5 col-12 flex justify-center items-center tl">
        <div class="mv5 ml4">
          <h2 class="headline--two text--secondary bold"><?php the_field('home_patient_resources_header') ?></h2>
          <p><?php the_field('home_patient_resources_copy') ?></p>
          <?php
            $link = get_field('home_patient_resources_link');

            if($link):
           ?>
          <div class="container--default btn--primary pt2 pb1">
            <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
          </div>
        <?php endif; ?>
        </div>
      </div>

      <div class="col-md-7 col-12">
        <img src="<?php the_field('home_patient_resources_image') ?>" class="" alt="">
      </div>
    </div>
  </div>
</div>

<!-- Tablet -->

<div class="is-tablet">
  <div class="container--white b-radius--default pv4 tc">
    <h3 class="headline--three text--secondary demi-bold">Pay as little as</h3>
    <span class="headline--one text--ruby-red bold">$20*</span>
    <h3 class="headline--three text--secondary demi-bold">for Enstilar<sup>®</sup></h3>
    <div class="">
      <div class="container--ruby-red btn--primary center pt2 pb1">
        <a href="<?php bloginfo('url') ?>/co-pay-savings/" class="text--white no-underline">Learn More ></a>      </div>
    </div>
    <a href="#" class="small pt3" data-toggle="modal" data-target="#eligibilityCriteria">*Co-Pay Savings Card Eligibility Requirements</a>
  </div>
  <div class="container--grey tc pv3">
    <div class="">
      <h4 class="text--secondary headline--four demi-bold">For Adults with Plaque Psoriasis</h4>
      <h2 class="text--secondary headline--two bold">Clearer Skin is Possible in Just 4 Weeks</h2>
    </div>
  </div>
  <div class="container--secondary ph4 pv2 tc">
    <p class="text--white bold">Need Enstilar<sup>®</sup> co-pay information? Call us at <br />(855) 820-9627
    <br />from 8:00 a.m. – 8:00 p.m. <br />(EST) Monday – Friday</p>
  </div>
  <?php if(have_rows('home_circle_images_and_description')): ?>

  <div class="wrap row">
    <?php
      while(have_rows('home_circle_images_and_description')): the_row();
      $image = get_sub_field('description_image');
      $header = get_sub_field('description_header');
      $copy = get_sub_field('description_copy');
      $link = get_sub_field('description_link');

    ?>
    <div class="col-12 tc pv5-l pv4">
      <div class="w-100">
        <img src="<?php echo $image ?>" class="pa2" alt="">
        <h4 class="headline--four text--ruby-red ttu bold"><?php echo $header ?></h4>
        <div class="flex flex-column overflow-hidden">
          <p class="w-70 center flex flex-column flex-ratio"><?php echo $copy ?></p>
        </div>
        <?php if($link): ?>
        <div class="container--default btn--primary center pt2 pb1">
          <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
        </div>
      <?php endif; ?>
      </div>
    </div>
  <?php endwhile; ?>
  </div>
<?php endif; ?>
  <div class="container--grey tc pv5">
    <div class="wrap">
      <h2 class="headline--two text--secondary bold"><?php the_field('home_plaque_psoriasis_header')?></h2>
      <p><?php the_field('home_plaque_psoriasis_copy')?></p>
      <?php
        $link = get_field('home_plaque_psoriasis_link');

        if($link):
       ?>
      <div class="container--default btn--primary pt2 pb1 center w-100">
        <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
      </div>
    <?php endif; ?>
    </div>
  </div>
  <div class="pv5 about-enstilar-mobile" style="background-image: url(<?php the_field('home_about_enstilar_mobile_image'); ?>); background-size: cover ">
    <div class="wrap tc">
      <h2 class="headline--two text--secondary bold"><?php the_field('home_about_enstilar_header') ?></h2>
      <p><?php the_field('home_about_enstilar_copy') ?></p>
      <?php
        $link = get_field('home_about_enstilar_link');

        if($link):
       ?>
      <div class="container--default btn--primary mt5 pt2 center pb1">
        <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
      </div>
    <?php endif; ?>
    </div>
  </div>
  <div class="mv5 tc">
    <div class="wrap">
      <img src="<?php the_field('home_patient_resources_mobile_image') ?>" class="" alt="">
      <h2 class="headline--two text--secondary bold"><?php the_field('home_patient_resources_header') ?></h2>
      <p><?php the_field('home_patient_resources_copy') ?></p>
      <?php
        $link = get_field('home_patient_resources_link');

        if($link):
       ?>
      <div class="container--default btn--primary pt2 center pb1">
        <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
      </div>
    <?php endif; ?>
    </div>
  </div>
</div>

<!-- Mobile -->

<div class="is-mobile">
  <div class="container--white b-radius--default pv4 tc box-shadow--top">
    <h3 class="headline--three text--secondary demi-bold">Pay as little as</h3>
    <span class="headline--one text--ruby-red bold">$20*</span>
    <h3 class="headline--three text--secondary demi-bold">for Enstilar<sup>®</sup></h3>
    <div class="">
      <div class="container--ruby-red btn--primary center pt2 pb1">
        <a href="<?php bloginfo('url') ?>/co-pay-savings/" class="text--white no-underline">Learn More ></a>      </div>
    </div>
    <a href="#" class="small pt3" data-toggle="modal" data-target="#eligibilityCriteria">*Co-Pay Savings Card Eligibility Requirements</a>
  </div>
  <div class="container--grey tc pv3">
    <div class="">
      <h4 class="text--secondary headline--four demi-bold">For Adults with Plaque Psoriasis</h4>
      <h2 class="text--secondary headline--two bold">Clearer Skin is Possible in Just 4 Weeks</h2>
    </div>
  </div>
  <div class="container--secondary ph4 pv2 tc">
    <p class="text--white bold">Need Enstilar<sup>®</sup> co-pay information? Call us at <br />(855) 820-9627
    <br />from 8:00 a.m. – 8:00 p.m. <br />(EST) Monday – Friday</p>
  </div>
  <?php if(have_rows('home_circle_images_and_description')): ?>

  <div class="wrap row">
    <?php
      while(have_rows('home_circle_images_and_description')): the_row();
      $image = get_sub_field('description_image');
      $header = get_sub_field('description_header');
      $copy = get_sub_field('description_copy');
      $link = get_sub_field('description_link');

    ?>
    <div class="col-md-4 col-12 tc pv5-l pv4">
      <div class="w-100">
        <img src="<?php echo $image ?>" class="pa2" alt="">
        <h4 class="headline--four text--ruby-red ttu bold"><?php echo $header ?></h4>
        <div class="match-height">
          <p class="w-70 center match-height"><?php echo $copy ?></p>
        </div>
        <?php if($link): ?>
        <div class="container--default btn--primary center pt2 pb1">
          <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
        </div>
      <?php endif; ?>
      </div>
    </div>
  <?php endwhile; ?>
  </div>
<?php endif; ?>

  <div class="container--grey tc pv5">
    <div class="wrap">
      <h2 class="headline--two text--secondary bold"><?php the_field('home_plaque_psoriasis_header')?></h2>
      <p><?php the_field('home_plaque_psoriasis_copy')?></p>
      <?php
        $link = get_field('home_plaque_psoriasis_link');

        if($link):
       ?>
      <div class="container--default btn--primary pt2 center pb1 tl w-100">
        <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
      </div>
    <?php endif; ?>
    </div>
  </div>
  <div class="pv5 about-enstilar-mobile" style="background-image: url(<?php the_field('home_about_enstilar_mobile_image'); ?>); background-size: cover ">
    <div class="wrap tc">
      <h2 class="headline--two text--secondary bold"><?php the_field('home_about_enstilar_header') ?></h2>
      <p><?php the_field('home_about_enstilar_copy') ?></p>

      <?php
        $link = get_field('home_about_enstilar_link');

        if($link):
       ?>
      <div class="container--default btn--primary mt5 pt2 center pb1">
        <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
      </div>
    <?php endif; ?>
    </div>
  </div>
  <div class="mv5 tc">
    <div class="wrap">
      <img src="<?php the_field('home_patient_resources_mobile_image') ?>" class="" alt="">
      <h2 class="headline--two text--secondary bold"><?php the_field('home_patient_resources_header') ?></h2>
      <p><?php the_field('home_patient_resources_copy') ?></p>
      <?php
        $link = get_field('home_patient_resources_link');

        if($link):
       ?>
      <div class="container--default btn--primary pt2 center pb1">
        <a href="<?php echo $link['url']; ?>" class="text--white no-underline"><?php echo $link['title']; ?></a>
      </div>
    <?php endif; ?>
    </div>
  </div>
</div>

<?php get_template_part('partials/eligibility-modal'); ?>


<?php get_footer(); ?>
