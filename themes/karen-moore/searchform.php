<?php
/**
 * The template for displaying the Searchbar
 */
?>

<div class="" id="">

	<form role="search" id="" method="get" action="<?php echo home_url( '/' ); ?>">

		<textarea type="search" class="" id="" placeholder="Search <i class="fal fa-search"></i>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" ></textarea>

		<!-- <button type="submit" id="search-submit" class="btn">Submit</button> -->
	</form>


</div>
