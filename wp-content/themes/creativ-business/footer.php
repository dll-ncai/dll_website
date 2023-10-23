<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Creativ Business
 */

	/**
	 * Hook - creativ_business_action_after_content.
	 *
	 * @hooked creativ_business_content_end - 10
	 */
	do_action( 'creativ_business_action_after_content' );
	?>

	<?php
	/**
	 * Hook - creativ_business_action_before_footer.
	 *
	 * @hooked creativ_business_footer_start - 10
	 */
	do_action( 'creativ_business_action_before_footer' );
	?>
    <?php
	  /**
	   * Hook - creativ_business_action_footer.
	   *
	   * @hooked creativ_business_footer_copyright - 10
	   */
	  do_action( 'creativ_business_action_footer' );
	?>
	<?php
	/**
	 * Hook - creativ_business_action_after_footer.
	 *
	 * @hooked creativ_business_footer_end - 10
	 */
	do_action( 'creativ_business_action_after_footer' );
	?>

<?php
	/**
	 * Hook - creativ_business_action_after.
	 *
	 * @hooked creativ_business_page_end - 10
	 * @hooked creativ_business_footer_goto_top - 20
	 */
	do_action( 'creativ_business_action_after' );
?>

<?php wp_footer(); ?>
</body>
</html>
