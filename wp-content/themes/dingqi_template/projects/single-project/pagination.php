<?php
/**
 * Single project pagination
 *
 * @author        WooThemes
 * @package       Projects/Templates
 * @version       1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly
?>
<div class="tm-project-nav">
	<div class="row">
		<div class="col-md-6 align-left prev-project">
			<?php previous_post_link( '%link' ); ?>
		</div>
		<div class="col-md-6 align-right next-project">
			<?php next_post_link( '%link' ); ?>
		</div>
	</div>
</div>
