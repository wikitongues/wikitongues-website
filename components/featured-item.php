<?php
/* The following variables may be defined for this template:
	$featured_item_link (required)
	$featured_item_title
	$featured_item_text
	$featured_item_image
	*/ ?>

<div class="wt_featured-item">
	<a href="<?php echo $featured_item_link ?>" target="_blank">
	<?php if ( is_front_page() ): ?>
    <div class="wt_featured-item-image" style="background:url('<?php echo $match[1]; ?>') center center no-repeat;"></div>
    <?php else: ?>
    <div class="wt_featured-item-image" style="background:url('<?php echo $featured_item_image; ?>') center center no-repeat;"></div>
	<?php endif; ?>
    <h2><?php echo $featured_item_title; ?></h2>
    <p><?php echo $featured_item_text; ?></p>
  </a>
</div>
