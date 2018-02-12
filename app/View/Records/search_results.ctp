<div class="main-content">
    <div class="row">
        <div class="col col-xs-offset-1 col-xs-10 page-heading">
            <h1><?php echo $this->Html->link('Search', array('controller' => 'records', 'action' => 'search')); ?> > Search Results</h1>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 results">
            <?php foreach ($records as $record): ?>
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