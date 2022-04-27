<?php
	$prevId=$args['newHistory'][1];
	$args = Array(
		'post_type' => 'facility',
		'post__in' => array($prevId),
	);
	$the_query = new WP_Query($args);
	if($the_query -> have_posts()):
		while($the_query -> have_posts()): $the_query -> the_post();
		$prev_address=getAddress($post->ID);
		$prev_facilityText=getFacilityType($post->ID);
		$prev_facility_status=getFacilityStatus($post->ID);
		$prev_prices=getPrice($post->ID);
	?>
<div class="bl_sideBox">
	<h2 class="bl_sideBox_Heading01">最近閲覧した施設</h2>
	<div class="bl_sideBox_inner01">
		<?php
		$prev_facility_photo_top=(int) get_post_meta($post->ID , 'facility_photo_top' ,true);
		$prev_facility_photo_top_image = scf::get('facility_photo_item'.$prev_facility_photo_top.'_image');
		if(	$prev_facility_photo_top_image):
		?>
		<img src="<?php print getImageFile($prev_facility_photo_top_image,245,91)['adjustment']; ?>" alt="" width="245" height="91" loading="lazy">
		<?
	?>
		<?php endif; ?>
		<h3 class="bl_sideBox_Heading02">
			<a href="<?php the_permalink() ?>">
				<?php the_title(); ?>
			</a>
		</h3>
		<p class="bl_sideBox_txt01">
			<?php echo $prev_address['state']; ?><?php echo $prev_address['city']; ?>／<?php print $prev_facilityText; ?>
		</p>
		<div class="bl_sideBoxList">
			<?php if($prev_facility_status['single']!=''||$prev_facility_status['double']!=''): ?>
			<div>
				<dt>空室状況</dt>
				<dd class="h-secondaryColor">
					<?php print $prev_facility_status['status']; ?><small>※<?php print the_modified_date("Y/m/d") ?></small>
				</dd>
			</div>
			<?php endif; ?>
			<?php if(!empty($prev_prices['initial'])): ?>
			<div>
				<dt>入居時費用</dt>
				<dd class="h-secondaryColor"><?php echo min($prev_prices['initial'])/10000; ?>万円〜</dd>
			</div>
			<?php endif; ?>
			<?php if(!empty($prev_prices['monthly'])): ?>
			<div>
				<dt>月額費用</dt>
				<dd class="h-secondaryColor"><?php echo min($prev_prices['monthly'])/10000; ?>万円〜</dd>
			</div>
			<?php endif; ?>
		</div>
		<a class="bl_circle_link" href="#">
			<span class="material-icons-outlined">arrow_circle_right</span>閲覧履歴を見る
		</a>
	</div>
</div>
<?php
	endwhile;
	endif;
	wp_reset_postdata();
?>
