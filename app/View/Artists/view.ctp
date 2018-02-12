<div class="main-content">
    <div class="row">
        <div class="col col-xs-offset-1 col-xs-10 col-sm-7 page-heading">
            <h1><?php echo $this->Html->link('Artists', array('controller' => 'artists', 'action' => 'index')); ?> > <?php echo $artist['Artist']['name']; ?></h1>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-3 page-buttons">
        	<?php echo $this->Html->link('Edit Artist', array('controller' => 'artists', 'action' => 'edit', $artist['Artist']['id']), array('class' => 'button')); ?>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 artists">
            <?php foreach($records as $record): ?>
                <div class="col col-xs-12 col-sm-6 record">
                    <div class="record-cover-art">
                        <?php $image = 'http://erikhoy.com/permrecords/img/cover_art/big/Optimized-'.$record['Record']['cover_art'].'.jpg'; ?>
                        <?php echo $this->Html->image($image, array('alt' => $record['Record']['record_title'], 'url' => array('controller' => 'records', 'action' => 'view', $record['Record']['id']))); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>