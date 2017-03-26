<?php ?>

	<section class="staff-profile-preview profile-preview">
		<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

		<h4 class="name"><?php echo CFS()->get('name'); ?></h4>
		<p class="job-title"><?php echo CFS()->get('job_title'); ?></p>
		<button class="staff-enter-button enter-button" type="button"><span>+</span></button>
	</section>

	<section class="staff-profile-popout profile-popout">

			<?php $cvDescription = CFS()->get('cvdescription');
				if ( !empty( $cvDescription ) ) : 
			?>

				<div class="left-column">
					<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

					<h4 class="name"><?php echo CFS()->get('name'); ?></h4>
					<p class="job-title"><?php echo CFS()->get('job_title'); ?></p>

					<?php $quote = CFS()->get('quote'); 
						if ( !empty( $quote ) ) : 
					?>
						<p class="quote"><?php echo $quote; ?></p>
					<?php endif; ?>
				</div>

			<?php $cvDescription = CFS()->get('cvdescription');
				elseif ( empty( $cvDescription ) ) : 
			?>
				<div class="center-column">
					<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

					<h4 class="name"><?php echo CFS()->get('name'); ?></h4>
					<p class="job-title"><?php echo CFS()->get('job_title'); ?></p>

					<?php $quote = CFS()->get('quote'); 
						if ( !empty( $quote ) ) : 
					?>
						<p class="quote"><?php echo $quote; ?></p>
					<?php endif; ?>
				</div>

			<?php endif; ?>

			<h3 class="tagline clearfix"><?php echo CFS()->get('tagline'); ?></h3>

			<?php $cvDescription = CFS()->get('cvdescription');
				if ( !empty( $cvDescription ) ) : 
			?>
			<article class="cv">
				<?php echo $cvDescription; ?>
			</article>
			<?php endif; ?>
	</section><!-- #post-## -->