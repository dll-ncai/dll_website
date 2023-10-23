<?php
/**
 * Displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Creativ Business
 */

?><?php
	/**
	 * Hook - creativ_business_action_doctype.
	 *
	 * @hooked creativ_business_doctype -  10
	 */
	do_action( 'creativ_business_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - creativ_business_action_head.
	 *
	 * @hooked creativ_business_head -  10
	 */
	do_action( 'creativ_business_action_head' );
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'wp_body_open' ); ?>

	<?php
	/**
	 * Hook - creativ_business_action_before.
	 *
	 * @hooked creativ_business_page_start - 10
	 * @hooked creativ_business_skip_to_content - 15
	 */
	do_action( 'creativ_business_action_before' );
	?>

    <?php
	  /**
	   * Hook - creativ_business_action_before_header.
	   *
	   * @hooked creativ_business_header_start - 10
	   */
	  do_action( 'creativ_business_action_before_header' );
	?>
		<?php
		/**
		 * Hook - creativ_business_action_header.
		 *
		 * @hooked creativ_business_site_branding - 10
		 */
		do_action( 'creativ_business_action_header' );
		?>
    <?php
	  /**
	   * Hook - creativ_business_action_after_header.
	   *
	   * @hooked creativ_business_header_end - 10
	   * @hooked creativ_business_add_primary_navigation - 20
	   */
	  do_action( 'creativ_business_action_after_header' );
	?>

	<?php
	/**
	 * Hook - creativ_business_action_before_content.
	 *
	 * @hooked creativ_business_add_breadcrumb - 7
	 * @hooked creativ_business_content_start - 10
	 */
	do_action( 'creativ_business_action_before_content' );
	?>
    <?php
	  /**
	   * Hook - creativ_business_action_content.
	   */
	  do_action( 'creativ_business_action_content' );
	?>
