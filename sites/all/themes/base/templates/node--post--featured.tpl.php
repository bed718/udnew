
<div class="post featured">
	<div class="main">
		<span class="label">featured article</span>
		<div class="image image-teaser"><?php print $cover_image; ?></div>
	</div>
	
	<div class="side">
		<div class="header">
			<h2><?php print $title_link; ?></h2>
			<div class="meta"><?php print $created; ?> by <a href="">Megan</a></div>
		</div>
		<div class="body">
			<?php print $summary; ?>
			<div class="read-more">
				<a href="<?php echo $path ?>">Read More</a>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="inner">
			<div class="social-icons">
				<?php echo $service_links; ?>
			</div>
			<div class="tags">
				<?php echo $section; ?>
				<?php if(isset($tags)): ?>
					<?php echo $tags; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

