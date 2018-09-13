<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script type="text/javascript">
		//Getting main URL:
		var templateUrl = '<?php echo get_site_url(); ?>';
	</script>
	<title>
        <?php wp_title(' | ', true, 'right'); ?>

    </title>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<!-- <div class="loading-overlay"></div> -->
	<!-- <div class="menu-toggle__container absolute z-999">
		<a href="#" class="menu-toggle menu-toggle--open-icon headline--five text--black no-underline no-smoothstate "><span class=" "><i class="far fa-bars mt2" data-fa-transform="rotate-90"></i></span></a>
		<a href="#" class="menu-toggle menu-toggle--close-icon pa2 no-smoothstate "><i class="far fa-times text--default"></i></span></a>
	</div> -->
<div id="main" class="">
<header class="header">
	<div class="container--grey">
		<div class="container">
			<div class="w-100 flex justify-between center is-desktop--flex">
				<div class="">
					<a href="#" class="headline--five text--secondary no-underline" data-toggle="modal" data-target="#safetyInformation">Important Safety Information</a>
				</div>
				<div class="">

					<a href="<?php bloginfo('template_directory') ?>/pdf/enstilar-pi.pdf" target="_blank" class="headline--five text--secondary no-underline">Prescribing Information</a>
				</div>
				<div class="">
					<a href="#" class="headline--five text--secondary no-underline" data-toggle="modal" data-target="#healthcareProfessionals">Healthcare Professionals</a>
				</div>
			</div>
		</div>

	</div>

	<div class="modal fade" id="safetyInformation" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container--grey">
				<div class=" wrap">
					<div class="text--secondary bold ttu">
						Important Safety Information
					</div>
					<p class="mt1">Enstilar<sup>®</sup> Foam is for use on skin only (topical). Do not get Enstilar<sup>®</sup> Foam in your mouth, eyes, or vagina. Avoid using Enstilar<sup>®</sup> Foam on your face, groin, or under your arms, or if you have thinning of your skin (atrophy) at the treatment site.
					</br></br>
					Enstilar<sup>®</sup> Foam is easily set on fire; avoid heat, flame, or smoking during and right after applying this medication.
				</br></br>
					Enstilar<sup>®</sup> Foam may cause serious side effects including too much calcium in your blood or urine and/or adrenal gland problems. You may experience skin problems including allergic reactions. If you get Enstilar<sup>®</sup> Foam in the mouth or in the eyes, wash the area with water right away. Wash your hands after using Enstilar<sup>®</sup> Foam unless you are using the medicine to treat your hands. Do not bandage or cover the treated skin area, unless instructed by your doctor.
				</br></br>
					The most common side effects include irritation, itching, inflammation, changes in skin color, rash, and worsening of your psoriasis. Tell your doctor if you have a calcium metabolism disorder, have thinning-skin (atrophy) at the site to be treated, are getting light therapy (phototherapy treatments) for your psoriasis, are pregnant or plan to become pregnant, or are breastfeeding or plan to breastfeed. Do not use Enstilar<sup>®</sup> Foam on your breast if you breastfeed. Tell your doctor about all the medicines you take, including prescription and nonprescription medicines, vitamins and herbal supplements. Be sure to tell your doctor if you use other corticosteroid medicines and/or other medicines for your psoriasis. Avoid spending a long time in the sunlight and avoid tanning booths and sun lamps.
				</br></br>
					You are encouraged to report negative side effects of prescription drugs to the FDA. Visit <a href="https://www.fda.gov/Safety/MedWatch/default.htm">www.fda.gov/medwatch</a>, or call 1-800-FDA-1088.</p>

					<div class="text--secondary bold ttu mt4">
						Indication and Usage
					</div>
					<p class="pb4 mt1">Enstilar<sup>®</sup> (calcipotriene and betamethasone dipropionate) Foam is a prescription medicine used on the skin to treat plaque psoriasis in adult patients 18 years of age and older.
					</br></br>
					Apply Enstilar<sup>®</sup> Foam to the affected areas of your skin 1 time a day for up to 4 weeks. You should stop treatment when your plaque psoriasis is under control, unless your doctor gives you other instructions. Do not use more than 60 grams of Enstilar<sup>®</sup> Foam every 4 days. Use Enstilar<sup>®</sup> Foam exactly as your doctor tells you to use it.
				</br></br>
					Please <a href="<?php bloginfo('template_directory') ?>/pdf/enstilar-pi.pdf" target="_blank">click here</a> for Enstilar<sup>®</sup> Full Prescribing Information.

				</div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="healthcareProfessionals" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content no-background">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="container--grey pv5 healthcare-professinals">
			<div class="tc wrap">
				<h4 class="text--secondary headline--four demi-bold">This information is intended for U.S. healthcare professionals only. Are you a healthcare professional?</h4>
				<div class="flex justify-center pt4">
					<div class="btn--small container--ruby-red w-20 mr3 pt1">
						<a href="http://enstilar.com/hcp/" target="_blank" class="text--white no-underline">YES</a>
					</div>
					<div class="btn--small container--ruby-red w-20 pt1" data-dismiss="modal" >
						<a href="#" class="text--white no-underline">NO</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


	<div class="nav__container container--white wrap is-desktop">
		<div class="flex justify-between items-center">
			<div class="pt2">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_directory') ?>/images/Enstilar_Logo.png" class="w-80-ns w-100" alt="">
				</a>
			</div>
			<div class="nav-search-bar">
				<form role="search" class="search-form relative" id="search-form" method="get" action="<?php echo home_url( '/' ); ?>">
					<label>
					<i class="fal fa-search absolute"></i>
					<input type="search" class="search-input" id="search-input" value="" name="s" placeholder="Search ">
					</label>

						<!-- <input type="submit" class="search-submit" value=""> -->
				</form>
			</div>
		</div>
		<nav class="nav relative">

				<?php
					wp_nav_menu(array(
						'menu'            => 'main-nav',
						'theme_location'  => 'main-nav',
						'container'       => 'ul',
						'menu_class'        => 'nav__list',
						'depth'			  => 2,
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					));
				?>


		</nav>
	</div>

	<!-- Tablet -->


	<div class="relative">
		<div class="fixed z-1 top-0 w-100">
			<div class="container--grey">
				<div class="is-tablet--flex grey-menu tc justify-between items-center w-90 center pv1">
					<div class="">
						<a href="http://enstilar.com/" class="pr2 headline--four text--secondary no-underline"><i class="fas fa-home"></i></a>
					</div>
					<div class="">
						<a href="#" class="grey-menu-mobile text--secondary no-underline" data-toggle="modal" data-target="#safetyInformation">Important Safety Information</a>
					</div>
					<div class="">

						<a href="<?php bloginfo('template_directory') ?>/pdf/enstilar-pi.pdf" target="_blank" class="grey-menu-mobile text--secondary no-underline">Prescribing Information</a>
					</div>
					<div class="">
						<a href="#" class="grey-menu-mobile text--secondary no-underline" data-toggle="modal" data-target="#healthcareProfessionals">Healthcare Professionals</a>
					</div>
				</div>
			</div>
			<div class=" container--white ph3 pv1 is-tablet--flex justify-between">
				<div class="flex justify-between w-100">
					<div class="pt2">
						<img src="<?php bloginfo('template_directory') ?>/images/Enstilar_Logo.png" class="w-90" alt="">
					</div>
					<div class="flex items-center">
						<a href="#" class="no-underline text--secondary flex items-center tablet-search" id="tablet-search"><i class="headline--two fas fa-search text--secondary ph2"></i></a>
						<a href="tel:8558209627" class="no-underline text--secondary flex items-center" ><i class="headline--two fas fa-phone text--secondary ph2"></i></a>
						<a href="#" class="no-underline text--secondary flex items-center" id="tablet-menu"><i class="headline--two fas fa-bars text--secondary ph2"></i></a>
						<div class="" id="tablet-close">
							<a href="#" class="no-underline text--secondary flex items-center" ><i class="fas fa-times headline--two text--secondary ph2"></i></a>
						</div>
					</div>
				</div>

				<nav class="nav-overlay relative">

						<?php
							wp_nav_menu(array(
								'menu'            => 'main-nav',
								'theme_location'  => 'main-nav',
								'container'       => 'ul',
								'menu_class'        => 'nav__list',
								'depth'			  => 2,
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker(),
							));
						?>


				</nav>
			</div>
			<div class="nav-search-bar-tablet wrap container--grey relative w-100">
				<div class="pt2">
					<i class="far fa-times text--black close-tablet"></i>
				</div>
				<form role="search" class="search-form relative pb3 flex justify-center" id="search-form" method="get" action="<?php echo home_url( '/' ); ?>">
					<label>
					<i class="fal fa-search absolute"></i>
					<input type="search" class="search-input" id="search-input" value="" name="s" placeholder="Search ">
					</label>

						<!-- <input type="submit" class="search-submit" value=""> -->
				</form>
			</div>

		</div>
	</div>

	<!-- Mobile -->

	<div class="relative">
		<div class="fixed z-1 top-0">
			<div class="container--grey">
				<div class="is-mobile--flex grey-menu tc justify-between items-center w-90 center pv1">
					<div class="">
						<a href="http://enstilar.com/" class="pr2 headline--four text--secondary no-underline"><i class="fas fa-home"></i></a>
					</div>
					<div class="">
						<a href="#" class="grey-menu-mobile text--secondary no-underline" data-toggle="modal" data-target="#safetyInformation">Important Safety Information</a>
					</div>
					<div class="">

						<a href="<?php bloginfo('template_directory') ?>/pdf/enstilar-pi.pdf" target="_blank" class="grey-menu-mobile text--secondary no-underline">Prescribing Information</a>
					</div>
					<div class="">
						<a href="#" class="grey-menu-mobile text--secondary no-underline" data-toggle="modal" data-target="#healthcareProfessionals">Healthcare Professionals</a>
					</div>
				</div>
			</div>
			<div class=" container--white ph3 pv1 is-mobile--flex">
				<div class="flex">
					<div class="pt2">
						<img src="<?php bloginfo('template_directory') ?>/images/Enstilar_Logo.png" class="w-90" alt="">
					</div>
					<div class="flex items-center">
						<a href="#" class="no-underline text--secondary flex items-center mobile-search" id="mobile-search"><i class="headline--two fas fa-search text--secondary ph2"></i></a>
						<a href="tel:8558209627" class="no-underline text--secondary flex items-center" ><i class="headline--two fas fa-phone text--secondary ph2"></i></a>
						<a href="#" class="no-underline text--secondary flex items-center mobile-menu" id="mobile-menu"><i class="headline--two fas fa-bars text--secondary ph2"></i></a>
						<div class="" id="mobile-close">
							<a href="#" class="no-underline text--secondary flex items-center" ><i class="fas fa-times headline--two text--secondary ph2"></i></a>
						</div>

					</div>
				</div>
				<nav class="nav-overlay relative">

						<?php
							wp_nav_menu(array(
								'menu'            => 'main-nav',
								'theme_location'  => 'main-nav',
								'container'       => 'ul',
								'menu_class'        => 'nav__list',
								'depth'			  => 2,
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker(),
							));
						?>


				</nav>
			</div>
			<div class="nav-search-bar-mobile wrap container--grey w-100 relative">
				<div class="pt2 ">
					<i class="far fa-times text--black close-mobile"></i>
				</div>
				<form role="search" class="search-form relative pb3 flex justify-center " id="search-form" method="get" action="<?php echo home_url( '/' ); ?>">
					<label>
					<i class="fal fa-search absolute"></i>
					<input type="search" class="search-input w-90" id="search-input" value="" name="s" placeholder="Search ">
					</label>

						<!-- <input type="submit" class="search-submit" value=""> -->
				</form>
			</div>
		</div>
	</div>

</header>


<div >
<div class="main-content">
