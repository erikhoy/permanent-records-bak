<div class="main-content">
	<div class="row">
		<div class="col col-xs-offset-1 col-xs-10 page-heading">
			<h1>Add Artist</h1>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 artists">
			<?php
				echo $this->Form->create('Artist');
				echo $this->Form->input('name', array('autofocus' => 'autofocus'));
				echo $this->Form->end('Save Artist');
			?>
		</div>
	</div>
</div>