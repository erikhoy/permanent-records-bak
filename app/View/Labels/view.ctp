<div class="main-content">
    <div class="row">
        <div class="col col-xs-offset-1 col-xs-10 col-sm-7 page-heading">
            <h1><?php echo $this->Html->link('Labels', array('controller' => 'labels', 'action' => 'index')); ?> > <?php echo $label['Label']['name']; ?></h1>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-3 page-buttons">
        	<?php echo $this->Html->link('Edit Label', array('controller' => 'labels', 'action' => 'edit', $label['Label']['id']), array('class' => 'button')); ?>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 labels">
            <?php foreach($records as $record): ?>
                <div class="col col-xs-12 col-sm-6 record">
                    <div class='record-cover-art'>
                        <?php $image = 'http://erikhoy.com/permrecords/img/cover_art/big/Optimized-'.$record['Record']['cover_art'].'.jpg'; ?>
                        <?php echo $this->Html->image($image, array('alt' => $record['Record']['record_title'], 'url' => array('controller' => 'records', 'action' => 'view', $record['Record']['id']))); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>