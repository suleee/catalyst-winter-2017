<?php ?>

	<section class="board-profile-preview profile-preview">
		<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>
		<?php $name = CFS()->get( 'name' );
		if ( !empty( $name ) ) :?>
		<h4 class="name"><?php echo $name; ?></h4>
		<?php endif; ?>

		<?php $job_title = CFS()->get( 'job_title' );
		if ( !empty( $job_title ) ) :?>
		<p class="job-title"><?php echo $job_title; ?></p>
		<?php endif; ?>
		<!--<h4 class="name"><?php echo CFS()->get('name'); ?></h4>
		<p class="job-title"><?php echo CFS()->get('job_title'); ?></p>-->
		<button class="board-enter-button enter-button" type="button"><span>+</span></button>
	</section>

	<section class="board-profile-popout profile-popout">

			<div class="left-column">
				<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>
					<?php $name = CFS()->get( 'name' );
					if ( !empty( $name ) ) :?>
					<h4 class="name"><?php echo $name; ?></h4>
					<?php endif; ?>

					<?php $job_title = CFS()->get( 'job_title' );
					if ( !empty( $job_title ) ) :?>
					<p class="job-title"><?php echo $job_title; ?></p>
					<?php endif; ?>
				<!--<h4 class="name"><?php echo CFS()->get('name'); ?></h4>
				<p class="job-title"><?php echo CFS()->get('job_title'); ?></p>-->

					<?php $quote = CFS()->get( 'quote' );
					if ( !empty( $quote ) ) :?>
					<p class="quote"><?php echo $quote; ?></p>
					<?php endif; ?>
				<!--<p class="quote"><?php echo CFS()->get('quote'); ?></p>-->
			</div>

			<div class="right-column">
				<!--<h3 class="tagline"><?php echo CFS()->get('tagline'); ?></h3>-->
				<?php $tagline = CFS()->get( 'tagline' );
				if ( !empty( $tagline ) ) :?>
				<h3 class="tagline"><?php echo $tagline; ?></h3>
				<?php endif; ?>

				<?php $cvdescription = CFS()->get( 'cvdescription' );
				if ( !empty( $cvdescription ) ) :?>
				<article class="cv"><?php echo $cvdescription; ?></article>
				<?php endif; ?>
				<!--<article class="cv">
					<?php echo CFS()->get('cvdescription'); ?>
				</article>-->
			</div>

	</section><!-- #post-## -->