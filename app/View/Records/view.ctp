<div class="main-content">
	<div class="row">
	    <div class="col col-xs-offset-1 col-xs-10 col-sm-7 page-heading">
	        <h1><?php echo $this->Html->link('Records', array('controller' => 'records', 'action' => 'index')); ?> > <?php echo $record['Record']['record_title']; ?></h1>
	    </div>
	    <div class="col col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-3 page-buttons">
	    	<?php echo $this->Html->link('Edit Record', array('controller' => 'records', 'action' => 'edit', $record['Record']['id']), array('class' => 'button')); ?>
	    </div>
	    <div class="col col-xs-offset-1 col-xs-10 records">
	    	<div class="record-view">
				<div class="record-cover-art">
					<?php $image = 'http://erikhoy.com/permrecords/img/cover_art/big/Optimized-'.$record['Record']['cover_art'].'.jpg'; ?>
					<?php echo $this->Html->image($image, array('alt' => $record['Record']['record_title'])); ?>
				</div>
				<div class="record-desc">
					<?php echo $record['Artist']['name']; ?><br>
					<strong><?php echo h($record['Record']['record_title']); ?></strong><br>
					<?php echo $record['Format']['name']; ?><br>
					<?php echo $record['Label']['name']; ?><br>
					<?php echo $record['Record']['year']; ?><br>
					<?php echo $record['Record']['country']; ?><br>
					<div class="song-list">
						<?php 
							echo '<ul>';
							foreach($record['Song'] as $row) :
								echo '<li>';
								if (!empty($row['song_video'])) {
									echo $this->Html->link($row['song_title'], $row['song_video'], array('target' => '_blank')); 
								} else {
									echo $row['song_title'];
								}
								echo '</li>';
							endforeach;
							echo '</ul>';
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>