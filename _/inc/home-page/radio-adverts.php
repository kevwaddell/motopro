<?php  
$radio_ads_active = get_field('radio_adverts_active', 'option');	
$radio_ads_title = get_field('radio_adverts_title', 'option');	
$radio_ads = get_field('radio_adverts', 'option');	
$radio_stations = get_field('radio_stations', 'option');	
$radio_ads_total = count($radio_ads);

//echo '<pre>';print_r($radio_stations);echo '</pre>';
?>

<?php if ($radio_ads_active) { ?>
<a name="radio-player" id="radio-player"></a>

<div class="radio-adverts">
	<a href="#radio-player" id="call-2-action-radio" class="c2a-link-btn icon-btn col-green disabled" title="<?php echo $radio_ads_title; ?>"><i class="fa fa-microphone fa-lg animated"></i> <?php echo $radio_ads_title; ?></a>
	
<div class="audio-files closed">
	
	<div class="audio-files-inner">
	
		<button id="close-audio-files" class="btn hidden-xs"><span class="sr-only">Close adverts</span><i class="fa fa-angle-double-up fa-lg"></i></button>

		<?php foreach ($radio_ads as $radio_ad) { ?>
		<dl>
			<dt><i class="fa fa-file-audio-o"></i> <?php echo $radio_ad['advert_title']; ?></dt>
			<dd><?php echo do_shortcode('[sc_embed_player_template1 fileurl="'.$radio_ad['advert_file']  .'"]'); ?></dd>
		</dl>
		<?php } ?>
	
		<?php if (count($radio_stations) > 0) { ?>
		<div class="logos">
		<?php foreach ($radio_stations as $radio_station) { ?>
			<figure class="img-logo">
				<a href="http://<?php echo $radio_station['station_url']; ?>" target="_blank" title="Go to <?php echo $radio_station['station_logo']['alt']; ?> website">
					<img src="<?php echo $radio_station['station_logo']['sizes']['thumbnail']; ?>" alt="<?php echo $radio_station['station_logo']['alt']; ?>">
				</a>
			</figure>
		<?php } ?>
		</div>
		<?php } ?>
	
	</div>
	
</div>

</div>


<?php } ?>
