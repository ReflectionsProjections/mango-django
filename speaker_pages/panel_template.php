<div class="row">
	<div class="span2">
		<img class="speaker_photo" src="img/speaker_photos/<?php echo $speaker_photo ?>" />
	</div>
	<div class="pull-left span3">
		<h2 class="speaker_name"><?php echo $speaker_name ?></h2>
		<h4 class="speaker_job"><?php echo $speaker_job ?></h4>
	</div>
</div>
<div class="accordian" id="accordian2">
	<div class="accordian-group">
		<div class="accordian-heading">
			<a class="accordian-toggle" data-toggle="collapse" data-parent="#accordian2" href="#<?php echo $speaker_bio_id ?>">
				<h3>More info</h3>
			</a>
		</div>
		<div id="<?php echo $speaker_bio_id ?>" class="accordian-body collapse">
			<div class="accordian-inner speaker_bio"><?php echo $speaker_bio ?></div>
		</div>
	</div>
</div>
<br/>
