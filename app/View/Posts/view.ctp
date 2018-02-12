<div class="main-content">
	<div class="row">
		<div class="col col-xs-offset-1 col-xs-10 page-heading">
			<h1><?php echo $this->Html->link('Blah-g', array('controller' => 'posts', 'action' => 'index')); ?> > <?php echo $post['Post']['title']; ?></h1>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 posts">
			<h2><?php echo $post['Post']['title']; ?></h2>
			<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
			<p><?php echo $post['Post']['body']; ?></p>
		</div>
	</div>
</div>