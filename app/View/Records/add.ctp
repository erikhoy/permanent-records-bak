<div class="main-content">
	<div class="row">
		<div class="col col-xs-offset-1 col-xs-10 page-heading">
			<h1>Add Record</h1>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 records">
			<?php
				echo $this->Form->create('Record');
				echo $this->Form->input('record_title', array('autofocus' => 'autofocus'));
				echo $this->Form->input('format_id', array('label' => 'Format', 'type' => 'select', 'options' => array($formats), 'div' => array('class' => 'two-column')));
				echo $this->Form->input('artist_id', array('label' => 'Artist Name', 'type' => 'select', 'options' => array($artists), 'div' => array('class' => 'two-column')));
				echo $this->Form->input('label_id', array('label' => 'Label Name', 'type' => 'select', 'options' => array($labels), 'empty' => 'Select One', 'div' => array('class' => 'two-column')));
				echo $this->Form->input('year', array('type' => 'text', 'div' => array('class' => 'two-column')));
				echo $this->Form->input('country', array('type' => 'text', 'div' => array('class' => 'two-column')));
				for ($i=0;$i<20;$i++) {
					echo $this->Form->input('Song.song_title.'.$i, array('label' => 'Song Title', 'div' => array('class' => 'two-column')));
				}
				echo $this->Form->input('cover_art', array('type' => 'text', 'div' => array('class' => 'two-column')));
				echo $this->Form->input('purchase_price', array('type' => 'text', 'div' => array('class' => 'two-column')));
				echo $this->Form->end('Save Record');
			?>
		</div>
	</div>
</div>