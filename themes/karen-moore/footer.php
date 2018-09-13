<?php if( is_page('51') || is_page('49')): ?>
	<footer class="footer  container--grey ">
			<div class="container--default">
				<div class="wrap">
					<div class="pv4">
						<img src="<?php bloginfo('template_directory') ?>/images/Enstilar_Logo_footer.png" class="pa2" alt="">
						<div class="pt4">
							<?php
								wp_nav_menu(array(
									'menu'            => 'footer-nav',
									'theme_location'  => 'footer-nav',
									'container'       => 'ul',
									'menu_class'        => 'nav__list--footer flex flex-wrap',
									'depth'			  => 1,
									'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
									'walker'          => new WP_Bootstrap_Navwalker(),
								));
							?>
						</div>
						<div class="is-desktop ">
							<div class="flex flex-row-ns flex-column-reverse items-center pt5">
								<div class="">
									<img src="<?php bloginfo('template_directory') ?>/images/LEO_WORDMARK.png" class="pa2" alt="">
								</div>
								<div class="text--white bold ml4-ns tl-m tl-l tc">
									LEO, the LEO Lion Design, and Enstilar are registered trademarks of LEO Pharma A/S.</br>
									© 2018 LEO Pharma Inc. All rights reserved. July 2018 MAT-18460
								</div>
								<img src="<?php bloginfo('template_directory') ?>/images/leo-lion.png" class="pa2 ml5-ns " alt="">
							</div>
						</div>

						<!-- Tablet -->

						<div class="is-tablet">
							<div class=" flex items-center pt3">
									<img src="<?php bloginfo('template_directory') ?>/images/LEO_WORDMARK.png" class="pa2 tc w-20" alt="">
									<div class="text--white demi-bold center headline--five">
										LEO, the LEO Lion Design, Leo Pharma and Enstilar are registered trademarks of LEO Pharma A/S.</br>
										© 2018 LEO Pharma Inc. All rights reserved. July 2018 MAT-18460
									</div>
								<img src="<?php bloginfo('template_directory') ?>/images/leo-lion.png" class="pa2 ml5-ns w-40" alt="">
							</div>
						</div>

						<!-- Mobile -->

						<div class="is-mobile">
							<div class=" flex flex-row-ns flex-column-reverse items-center pt3">
								<div class="tc pt4">
									<img src="<?php bloginfo('template_directory') ?>/images/LEO_WORDMARK.png" class="pa2 tc w-30" alt="">
									<div class="text--white demi-bold tc center w-80">
										LEO, the LEO Lion Design, Leo Pharma and Enstilar are registered trademarks of LEO Pharma A/S.</br>
										© 2018 LEO Pharma Inc. All rights reserved. July 2018 MAT-18460
									</div>
								</div>

								<img src="<?php bloginfo('template_directory') ?>/images/leo-lion.png" class="pa2 ml5-ns w-40" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
<?php else: ?>
	<footer class="footer  container--grey ">
		<div class="pt4">
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
				You are encouraged to report negative side effects of prescription drugs to the FDA. Visit <a href="https://www.fda.gov/Safety/MedWatch/default.htm" target="_blank">www.fda.gov/medwatch</a>, or call 1-800-FDA-1088.</p>

				<div class="text--secondary bold ttu mt4">
					Indication and Usage
				</div>
				<p class="pb4 mt1">Enstilar<sup>®</sup> (calcipotriene and betamethasone dipropionate) Foam is a prescription medicine used on the skin to treat plaque psoriasis in adult patients 18 years of age and older.
				</br></br>
				Apply Enstilar<sup>®</sup> Foam to the affected areas of your skin 1 time a day for up to 4 weeks. You should stop treatment when your plaque psoriasis is under control, unless your doctor gives you other instructions. Do not use more than 60 grams of Enstilar<sup>®</sup> Foam every 4 days. Use Enstilar<sup>®</sup> Foam exactly as your doctor tells you to use it.
			</br></br>
				Please <a href="<?php bloginfo('template_directory') ?>/pdf/enstilar-pi.pdf" target="_blank">click here</a> for Enstilar<sup>®</sup> Full Prescribing Information.
			</br></br>
			</br></br>
				*Valid for up to 12 prescription fills per calendar year — up to a maximum of $6,000 per year. Patients are not eligible if they are enrolled in or eligible for any state or federally funded health care program
				(eg, Medicare, Medicaid). Additional restrictions and limitations apply. <a href="#" data-toggle="modal" data-target="#eligibilityCriteria">Click here</a> for eligibility criteria.</p>
			</div>
			<div class="container--default">
				<div class="wrap">
					<div class="pv4">
						<img src="<?php bloginfo('template_directory') ?>/images/Enstilar_Logo_footer.png" class="pa2" alt="">
						<div class="pt4 tl-m tl-l tc">
							<?php
								wp_nav_menu(array(
									'menu'            => 'footer-nav',
									'theme_location'  => 'footer-nav',
									'container'       => 'ul',
									'menu_class'        => 'nav__list--footer flex flex-wrap',
									'depth'			  => 1,
									'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
									'walker'          => new WP_Bootstrap_Navwalker(),
								));
							?>
						</div>
						<div class="is-desktop ">
							<div class="flex flex-row-ns flex-column-reverse items-center pt5">
								<div class="">
									<img src="<?php bloginfo('template_directory') ?>/images/LEO_WORDMARK.png" class="pa2" alt="">
								</div>
								<div class="text--white bold ml4-ns tl-m tl-l tc">
									LEO, the LEO Lion Design, and Enstilar are registered trademarks of LEO Pharma A/S.</br>
									© 2018 LEO Pharma Inc. All rights reserved. July 2018 MAT-18460
								</div>
								<img src="<?php bloginfo('template_directory') ?>/images/leo-lion.png" class="pa2 ml5-ns " alt="">
							</div>
						</div>

						<!-- Tablet -->

						<div class="is-tablet">
							<div class=" flex items-center pt3">
									<img src="<?php bloginfo('template_directory') ?>/images/LEO_WORDMARK.png" class="pa2 tc w-20" alt="">
									<div class="text--white demi-bold center headline--five">
										LEO, the LEO Lion Design, Leo Pharma and Enstilar are registered trademarks of LEO Pharma A/S.</br>
										© 2018 LEO Pharma Inc. All rights reserved. July 2018 MAT-18460
									</div>
								<img src="<?php bloginfo('template_directory') ?>/images/leo-lion.png" class="pa2 ml5-ns w-40" alt="">
							</div>
						</div>

						<!-- Mobile -->

						<div class=" is-mobile">
							<div class=" flex flex-row-ns flex-column-reverse items-center pt3">
								<div class="tc pt4">
									<img src="<?php bloginfo('template_directory') ?>/images/LEO_WORDMARK.png" class="pa2 tc w-30" alt="">
									<div class="text--white demi-bold tc center w-80">
										LEO, the LEO Lion Design, Leo Pharma and Enstilar are registered trademarks of LEO Pharma A/S.</br>
										© 2018 LEO Pharma Inc. All rights reserved. July 2018 MAT-18460
									</div>
								</div>

								<img src="<?php bloginfo('template_directory') ?>/images/leo-lion.png" class="pa2 ml5-ns w-40" alt="">
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</footer>

<?php endif; ?>

<div class="modal fade" id="eligibilityCriteria" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content no-background">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="container--grey pv3 ph4 healthcare-professinals">
      <div class="pv4">
        <h4 class="text--secondary demi-bold ml3">LEO PHARMA CONNECT ELIGIBILITY CRITERIA</h4>
        <ol class="headline--five">
          <li>This program covers only the following products with a valid prescription: Enstilar<sup>®</sup> (calcipotriene and betamethasone dipropionate) Foam
          0.005%/0.064%, Picato® (ingenol mebutate) gel 0.015%, 0.05%, and Taclonex® (calcipotriene and betamethasone dipropionate) Topical
          Suspension 0.005%/0.064%.</li>
          <li>This program is valid for up to 12 prescription fills per calendar year for Enstilar<sup>®</sup>, Picato®, or Taclonex® Topical Suspension.</li>
          <li>For patients with commercial health insurance, this program may reduce out-of-pocket expenses.</li>
          <li>Offer good only in the USA at participating pharmacies.</li>
          <li>The selling, purchasing, trading, or counterfeiting of any benefit provided under this program is prohibited by law.</li>
          <li>Offer is not transferable.</li>
          <li>You must be 18 years of age or older to use this program with your Enstilar<sup>®</sup> or Picato® prescription. For Taclonex® Topical Suspension prescriptions,
          you must be 12 years of age or older to use this program, but a legal guardian over 18 years of age may access this program on your behalf where
          permitted by, and consistent with, additional restrictions imposed by law.</li>
          <li>This program is not health insurance.</li>
          <li>You are responsible for complying with any and all obligations of your insurance plan, including any obligations to report cost-savings, coupons, or other coverage of out-of-pocket costs.</li>
          <li>You are not eligible to participate in the program if eligible for or enrolled in any state or federally funded programs, including, but not limited to,
          Medicare (including Medicare Part D), Medicaid, Medigap, VA, DOD, TRICARE or CHIP.</li>
          <li>Offer void where prohibited by law, taxed, or restricted.</li>
          <li>Not valid in combination with any other offers, discounts, or programs.</li>
          <li>LEO Pharma Inc. reserves the right to rescind, revoke, or amend this offer without notice.</li>
          <li>You understand and agree to the terms and conditions as set forth above.</li>
        </ol>
      </div>
		</div>
	</div>
</div>
</div>





</div>
</div> <!-- Body Classes -->
</div> <!-- Close .main-content -->
<?php wp_footer(); ?>
</body>
</html>
