<div class="main-content">
	<div class="row">
		<div class="col col-xs-offset-1 col-xs-10">
			<div class="page-heading">
				<h1>About</h1>
			</div>
			<div class="col col-xs-12 about-summary">
				<div class="col col-xs-12 col-sm-10">
					<p>I have been buying and playing records for as far back as my memories can recall. One of my earliest memories is playing ‘Hey Jude’ by The Beatles on the large console turntable my folks owned. As soon as the song would end, I would pick up the stylus arm, set it at the beginning of the song, and listen to it again, ad nauseum. I listened to my own records on my plastic, Fisher Price record player, that folded up like a suitcase, and could be carried around the&nbsp;house&hellip;</p>
				</div>
				<div class="col col-xs-12 col-sm-2">
					<p><?php echo $this->Html->link('Read More', array('controller' => 'pages', 'action' => 'about'), array('class'=> 'button')); ?></p>
				</div>	
			</div>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-6">
			<div class="page-heading">
				<h1>Random Record</h1>
			</div>
			<div class="random-record clearfix">	
				<div class="col col-xs-12 col-sm-7 random-record-image">
					<?php $image = 'http://erikhoy.com/permrecords/img/cover_art/big/Optimized-'.$randomRecord['Record']['cover_art'].'.jpg'; ?>
					<?php echo $this->Html->image($image, array('alt' => $randomRecord['Record']['record_title'], 'url' => array('controller' => 'records', 'action' => 'view', $randomRecord['Record']['id']))); ?>
				</div>
				<div class="col col-xs-12 col-sm-5 random-record-desc">
					<?php echo $randomRecord['Artist']['name']; ?><br>
					<strong><?php echo h($randomRecord['Record']['record_title']); ?></strong><br>
					<?php echo $randomRecord['Format']['name']; ?><br>
					<?php echo $randomRecord['Label']['name']; ?><br>
					<?php echo $randomRecord['Record']['year']; ?><br>
					<?php echo $randomRecord['Record']['country']; ?><br>
					<div class="song-list">
						<?php 
							echo '<ul>';
							foreach($randomRecord['Song'] as $row) :
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
			<div class="page-heading">
				<h1>Recent Purchases</h1>
			</div>
			<div class="col col-xs-12 recent-purchases clearfix">
				<?php foreach($recentRecords as $recentRecord) : ?>
					<div class="recent-purchase">
						<div class="col col-xs-12 col-sm-7 recent-purchase-image">
							<?php $image = 'http://erikhoy.com/permrecords/img/cover_art/big/Optimized-'.$recentRecord['Record']['cover_art'].'.jpg'; ?>
							<?php echo $this->Html->image($image, array('alt' => $recentRecord['Record']['record_title'])); ?>
						</div>
						<div class="col col-xs-12 col-sm-5 recent-purchase-desc">
							<strong><?php echo h($recentRecord['Record']['record_title']); ?></strong><br>
							<?php echo $recentRecord['Format']['name']; ?><br>
							<?php echo $recentRecord['Artist']['name']; ?><br>
							<?php echo $recentRecord['Label']['name']; ?><br>
							<?php echo $recentRecord['Record']['year']; ?><br>
							<?php echo $recentRecord['Record']['country']; ?>
							<div class="song-list">
								<?php 
									echo '<ul>';
									foreach($recentRecord['Song'] as $row) :
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
				<?php endforeach; ?>
			</div>
		</div>
		<div class="col col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-4">
			<div class="page-heading">
				<h1>Recent Posts</h1>
			</div>
			<div class="col col-xs-12 recent-posts clearfix">	
				<?php foreach ($posts as $post): ?>
					<div class="recent-post clearfix">
						<?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?><br>
						<?php $postBody = $post['Post']['body']; ?>
						<?php 	
							// strip tags to avoid breaking any html
							$postBody = strip_tags($postBody);

							if (strlen($postBody) > 200) {

								// truncate string
								$postBodyCut = substr($postBody, 0, 200);

								// make sure it ends in a word so assassinate doesn't become ass...
								$postBody = substr($postBodyCut, 0, strrpos($postBodyCut, ' ')).'... <p>'.$this->Html->link('Read More', array('controller' => 'posts', 'action' => 'view', $post['Post']['id']), array('class' => 'button')).'</p>'; 
							}
							echo $postBody;
						?>
					</div>
				<?php endforeach; ?>
			</div>		
		</div>
	</div>
</div>