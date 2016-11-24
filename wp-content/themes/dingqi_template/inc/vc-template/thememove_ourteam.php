<?php
extract( shortcode_atts( array(
	'type'       => '1',
	'photo'      => '',
	'name'       => '',
	'byline'     => '',
	'desc'       => '',
	'facebook'   => '',
	'twitter'    => '',
	'instagram'  => '',
	'youtube'    => '',
	'googleplus' => '',
	'profile'    => '',
	'class'      => '',
), $atts ) );
$class = $this->getExtraClass( $class );
if ( $type == 1 ) {
	?>
	<div <?php echo 'class="ourteam ourteam-type1 ' . $class . '"'; ?> >
		<div class="ourteam-photo effect-scale3d">
			<?php
			if ( $profile != '' ) {
				echo '<a href="' . esc_attr( $profile ) . '">';
				echo wp_get_attachment_image( $photo, 'full' );
				echo '</a>';
			} else {
				echo wp_get_attachment_image( $photo, 'full' );
			}
			?>
		</div>
		<div class="ourteam-info">
			<div class="ourteam-name">
				<?php
				if ( $profile != '' ) {
					echo '<a href="' . esc_attr( $profile ) . '">';
					echo esc_html( $name );
					echo '</a>';
				} else {
					echo esc_html( $name );
				}
				?>
			</div>
			<div class="ourteam-byline"><?php echo esc_html( $byline ); ?></div>
		</div>
	</div>
<?php } elseif ( $type == 2 ) {
	?>
	<div <?php echo 'class="ourteam ourteam-type2 ' . $class . '"'; ?> >
		<div class="ourteam-photo effect-apollo">
			<?php
			if ( $profile != '' ) {
				echo '<a href="' . esc_attr( $profile ) . '">';
				echo wp_get_attachment_image( $photo, 'full' );
				echo '</a>';
			} else {
				echo wp_get_attachment_image( $photo, 'full' );
			}
			?>
		</div>
		<div class="ourteam-info">
			<div class="ourteam-main-info">
				<div class="ourteam-name">
					<?php
					if ( $profile != '' ) {
						echo '<a href="' . esc_attr( $profile ) . '">';
						echo esc_html( $name );
						echo '</a>';
					} else {
						echo esc_html( $name );
					}
					?>
				</div>
				<?php
				if ( $byline != '' ) {
					echo '<div class="ourteam-byline">' . esc_html( $byline ) . '</div>';
				} ?>
			</div>
			<?php if ( $desc != '' ) {
				echo '<div class="ourteam-desc">' . esc_html( $desc ) . '</div>';
			} ?>
			<?php if ( ( $facebook != '' ) || ( $twitter != '' ) || ( $instagram != '' ) || ( $youtube != '' ) || ( $googleplus != '' ) ) {
				echo '<div class="ourteam-socials">';
				if ( $facebook != '' ) {
					echo '<a class="icon facebook" href="' . esc_url( $facebook ) . '" target="_blank"><i class="fa fa-facebook"></i></a>';
				}
				if ( $googleplus != '' ) {
					echo '<a class="icon googleplus" href="' . esc_url( $googleplus ) . '" target="_blank"><i class="fa fa-google-plus"></i></a>';
				}
				if ( $twitter != '' ) {
					echo '<a class="icon twitter" href="' . esc_url( $twitter ) . '" target="_blank"><i class="fa fa-twitter"></i></a>';
				}
				if ( $instagram != '' ) {
					echo '<a class="icon instagram" href="' . esc_url( $instagram ) . '" target="_blank"><i class="fa fa-instagram"></i></a>';
				}
				if ( $youtube != '' ) {
					echo '<a class="icon youtube" href="' . esc_url( $youtube ) . '" target="_blank"><i class="fa fa-youtube"></i></a>';
				}
				echo '</div>';
			} ?>
		</div>
	</div>
	<?php
} elseif ( $type == 3 ) {
	?>
	<div <?php echo 'class="ourteam autoheight ourteam-type3 ' . $class . '"'; ?> >
		<div class="ourteam-photo">
			<?php
			if ( $profile != '' ) {
				echo '<a href="' . esc_attr( $profile ) . '">';
				echo wp_get_attachment_image( $photo, 'full' );
				echo '</a>';
			} else {
				echo wp_get_attachment_image( $photo, 'full' );
			}
			?>
		</div>
		<div class="ourteam-info">
			<div class="ourteam-main-info">
				<div class="ourteam-name">
					<?php
					if ( $profile != '' ) {
						echo '<a href="' . esc_attr( $profile ) . '">';
						echo esc_html( $name );
						echo '</a>';
					} else {
						echo esc_html( $name );
					}
					?>
				</div>
				<?php
				if ( $byline != '' ) {
					echo '<div class="ourteam-byline">' . esc_html( $byline ) . '</div>';
				} ?>
			</div>
			<?php if ( ( $facebook != '' ) || ( $twitter != '' ) || ( $instagram != '' ) || ( $youtube != '' ) || ( $googleplus != '' ) ) {
				echo '<div class="ourteam-socials">';
				if ( $facebook != '' ) {
					echo '<a class="icon facebook" href="' . esc_url( $facebook ) . '" target="_blank"><i class="fa fa-facebook"></i></a>';
				}
				if ( $googleplus != '' ) {
					echo '<a class="icon googleplus" href="' . esc_url( $googleplus ) . '" target="_blank"><i class="fa fa-google-plus"></i></a>';
				}
				if ( $twitter != '' ) {
					echo '<a class="icon twitter" href="' . esc_url( $twitter ) . '" target="_blank"><i class="fa fa-twitter"></i></a>';
				}
				if ( $instagram != '' ) {
					echo '<a class="icon instagram" href="' . esc_url( $instagram ) . '" target="_blank"><i class="fa fa-instagram"></i></a>';
				}
				if ( $youtube != '' ) {
					echo '<a class="icon youtube" href="' . esc_url( $youtube ) . '" target="_blank"><i class="fa fa-youtube"></i></a>';
				}
				echo '</div>';
			} ?>
		</div>
	</div>
	<?php
} else {

}
?>