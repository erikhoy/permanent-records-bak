<div class="main-content">
    <div class="row">
        <div class="col col-xs-offset-1 col-xs-10 col-sm-7 page-heading">
            <h1>Records</h1>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-3 page-buttons">
            <?php echo $this->Html->link('Add Record', array('action' => 'add'), array('class' => 'button')); ?>
            <?php //SORT OPTIONS ?>
        </div>
        
        <div class="col col-xs-offset-1 col-xs-10 records">
            <div class="col col-xs-offset-1 col-xs-11 paging">
                <?php 
                    $paginator = $this->Paginator;
            
                    // the 'first' page button
                    echo $paginator->first("First");
                     
                    // 'prev' page button, 
                    // we can check using the paginator hasPrev() method if there's a previous page
                    // save with the 'next' page button
                    if($paginator->hasPrev()){
                        echo $paginator->prev("Prev");
                    }
                         
                    // the 'number' page buttons
                    echo $paginator->numbers(array('modulus' => 5));
                             
                    // for the 'next' button
                    if($paginator->hasNext()){
                        echo $paginator->next("Next");
                    }
                             
                    // the 'last' page button
                    echo $paginator->last("Last");
                ?>
            </div>
            <?php foreach ($records as $record): ?>
                <div class="col col-xs-12 col-sm-6 record">
                    <div class="record-cover-art">
                        <?php $image = 'http://erikhoy.com/permrecords/img/cover_art/big/Optimized-'.$record['Record']['cover_art'].'.jpg'; ?>
                        <?php echo $this->Html->image($image, array('alt' => $record['Record']['record_title'], 'url' => array('controller' => 'records', 'action' => 'view', $record['Record']['id']))); ?>
                    </div>
                        <!--<div class="record-desc hide">
                            <strong><?php //echo $this->Html->link($record['Record']['record_title'], array('controller' => 'records', 'action' => 'view', $record['Record']['id'])); ?></strong>
                            <?php //echo '&nbsp;'.$record['Record']['format_id']; ?><br>
                            <?php //echo $record['Artist']['name']; ?><br>
                            <?php //echo $record['Record']['year']; ?><br>
                            <?php //echo $record['Record']['country']; ?><br>
                            <?php //echo $record['Label']['name']; ?>
                        </div>-->
                </div>
            <?php endforeach; ?>
            <div class='col col-xs-offset-1 col-xs-11 paging'>
                <?php 
                    // the 'first' page button
                    echo $paginator->first("First");
                         
                    // 'prev' page button, 
                    // we can check using the paginator hasPrev() method if there's a previous page
                    // save with the 'next' page button
                    if($paginator->hasPrev()){
                        echo $paginator->prev("Prev");
                    }
                             
                    // the 'number' page buttons
                    echo $paginator->numbers(array('modulus' => 5));
                             
                    // for the 'next' button
                    if($paginator->hasNext()){
                        echo $paginator->next("Next");
                    }
                             
                    // the 'last' page button
                    echo $paginator->last("Last");
                ?>
            </div>
        </div>
        
    </div>
</div>