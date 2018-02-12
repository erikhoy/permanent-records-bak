<div class="nav">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="navbar-header">
          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
       			<span class="icon-bar"></span>
     			<span class="icon-bar"></span>
       		</button>
   			<span class="navbar-brand"><?php echo $this->Html->link('Permanent Records', array('controller' => 'pages', 'action' => 'index')); ?></span>
       	</div>
       	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul id="bs-example-navbar-collapse-1" class="nav navbar-nav navbar-right">
				<li><a href="#">Music</a>
					<ul>
						<li><?php echo $this->Html->link('Records', array('controller' => 'records', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Artists', array('controller' => 'artists', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Labels', array('controller' => 'labels', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Songs', array('controller' => 'songs', 'action' => 'index'));	?></li>	
					</ul>
				</li>
				<li><?php echo $this->Html->link('Blah-g', array('controller' => 'posts', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Search', array('controller' => 'records', 'action' => 'search')); ?></li>
				<li><?php echo $this->Html->link('About', array('controller' => 'pages', 'action' => 'about')); ?></li>
			</ul>
		</div>
	</nav>
</div>