<div class="main-content">
	<div class="row">
		<div class="col col-xs-offset-1 col-xs-10">
			<?php echo $this->Flash->render('auth'); ?>
			<?php echo $this->Form->create('User'); ?>
				<fieldset>
			        <legend>
			            <?php echo __('Please enter your username and password'); ?>
			        </legend>
			        <?php echo $this->Form->input('username');
				        echo $this->Form->input('password');
				    ?>
				</fieldset>
			<?php echo $this->Form->end(__('Login')); ?>
		</div>
	</div>
</div>