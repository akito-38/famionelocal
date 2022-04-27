<?php

	$prev_facilityText=getFacilityType($post->ID);
	//空室状況
	$facility_status=getFacilityStatus($post->ID);
	//金額
	$prices=getPrice($post->ID);
	//住所
	$address=getAddress($post->ID);
	?>
<div class="bl_card01">
	<a class="bl_card01_inner" href="<?php the_permalink() ?>">
		<div class="bl_card01_imgWrapper">
			<div class="bl_label"><?php print $prev_facilityText; ?></div>
			<?php
				$card_facility_photo_top=(int) get_post_meta($post->ID , 'facility_photo_top' ,true);
				$card_facility_photo_top_image = scf::get('facility_photo_item'.$card_facility_photo_top.'_image');
				if(	$card_facility_photo_top_image):
			?>
			<img src="<?php print getImageFile($card_facility_photo_top_image,333,176)['adjustment']; ?>" alt="" width="333" height="176" loading="lazy">
			<?php
				endif;
			?>

		</div>
		<div class="bl_card01_data">
			<div class="bl_card01_ttl"><?php the_title(); ?></div>
			<dl class="bl_card01_list">

				<?php if($facility_status['single']!=''||$facility_status['double']!=''):?>
				<div>
					<dt>空室状況</dt>
					<dd><span class="el_label02">残り<?php print $facility_status['status']; ?></span>
						<time datetime="<?php print the_modified_date("Y-m-d") ?>">※<?php print the_modified_date("Y/m/d") ?>
							時点</time>
					</dd>
				</div>
				<?php endif; ?>
				<?php if(!empty($prices['initial'])): ?>
				<div>
					<dt>入居費用</dt>
					<dd class="h-secondaryColor h_fontBold">
						<span class="bl_card01_txt01"><?php echo min($prices['initial'])/10000; ?></b> 〜
							<?php echo max($prices['initial'])/10000; ?></span>
						<span class="bl_card01_txt02">万円</span>
					</dd>
				</div>
				<?php endif; ?>
				<?php if(!empty($prices['monthly'])): ?>
				<div>
					<dt>月額費用</dt>
					<dd class="h-secondaryColor h_fontBold">
						<span class="bl_card01_txt03"><?php echo min($prices['monthly'])/10000; ?> 〜
							<?php echo max($prices['monthly'])/10000; ?></span> 万円
					</dd>
				</div>
				<?php endif; ?>
			</dl>

			<?php if(!empty($address['is_address'])): ?>
			<div class="bl_card01_address">
				<?php
											print $address['state'];
											print $address['city'];
											print $address['street'];
											print $address['building'];
									?>
			</div>
			<?php endif; ?>
		</div>
	</a>
</div>
