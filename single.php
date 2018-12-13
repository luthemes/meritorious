<?php
/**
 * Initiator (single.php)
 *
 * The (single.php) template file contains the main query to display the single posts and attachments. The single.php is the
 * primary template file to be used unless you need to specify a template from the hierarchy if you truly need it.
 *
 * @package     Initiator Starter Theme
 * @copyright   Copyright (C) 2018. Benjamin Lu
 * @license     GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Benjamin Lu (https://luthemes.com)
 */

?>
<?php get_header(); ?>
	<section id="main" class="site-main">
		<div id="global-layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'left-sidebar' ) ); ?>">
			<div class="content-area">
				<?php Benlumia007\Backdrop\MainQuery\display_content_single(); ?>
			</div>
			<?php Benlumia007\Backdrop\Sidebar\display_primary(); ?>
		</div>
	</section>
<?php get_footer(); ?>