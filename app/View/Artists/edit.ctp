<div class="main-content">
	<div class="row">
		<div class="col col-xs-offset-1 col-xs-10 page-heading">
			<h1>Edit Artist</h1>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 artists">
			<?php
				echo $this->Form->create('Artist');
				echo $this->Form->input('artist');
				echo $this->Form->input('id', array('type' => 'hidden'));
				echo $this->Form->end('Save Artist');
			?>
		</div>
	</div>
</div>