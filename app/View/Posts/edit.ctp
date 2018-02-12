<div class="main-content">
	<div class="row">
		<div class="col col-xs-offset-1 col-xs-10 page-heading">
			<h1>Edit Post</h1>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 posts">
			<?php
				echo $this->Form->create('Post');
				echo $this->Form->input('title');
				echo $this->Form->input('body', array('rows' => '3'));
				echo $this->Form->input('id', array('type' => 'hidden'));
				echo $this->Form->end('Save Post');
			?>
		</div>
	</div>
</div>