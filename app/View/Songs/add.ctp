<div class="main-content">
	<div class="row">
		<div class="col col-xs-offset-1 col-xs-10 page-heading">
			<h1>Add Artist</h1>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 artists">
			<?php
				echo $this->Form->create('Song');
				echo $this->Form->input('song_title', array('label' => 'Title', 'autofocus' => 'autofocus'));
				echo $this->Form->input('song_mp3', array('label' => 'MP3'));
				echo $this->Form->input('song_video', array('label' => 'Video'));
				echo $this->Form->end('Save Song');
			?>
		</div>
	</div>
</div>