<div class="main-content">
	<div class="row">
		<div class="col col-xs-offset-1 col-xs-10 page-heading">
			<h1>Edit Label</h1>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 labels">
			<?php
				echo $this->Form->create('Label');
				echo $this->Form->input('name');
				echo $this->Form->input('id', array('type' => 'hidden'));
				echo $this->Form->end('Save Label');
			?>
		</div>
	</div>
</div>