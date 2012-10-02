<div class="row">
	<img class="span2 speaker_photo" src="img/speaker_photos/<?php echo $speaker_photo ?>" />
	<div class="accordian span3">
		<div class="accordian-group">
			<div class="accordian-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $talk_abstract_id ?>">
					<div class="speaker_info">
						<h2 class="speaker_name"><?php echo $speaker_name ?></h2>
						<h4 class="speaker_job"><?php echo $speaker_job ?></h4>
					</div>
				</a>
				<div id="<?php echo $talk_abstract_id ?>" class="accordion-body collapse">
      					<div class="accordion-inner talk_abstract">
						<h3><?php echo $talk_title ?></h4>
						<h4><?php echo $talk_time ?></h4>
						<h4><?php echo $talk_location ?></h4>
						<?php echo $talk_abstract ?>
						<h3>Biography:</h3>
						<?php echo $speaker_bio ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br/>
