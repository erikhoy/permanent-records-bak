<div class="main-content">
    <div class="row">
        <div class="col col-xs-offset-1 col-xs-10 col-sm-7 page-heading">
            <h1>Blah-g posts</h1>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-3 page-buttons">
            <?php echo $this->Html->link('Add Post', array('action' => 'add'), array('class' => 'button')); ?>
            <div class="paging">
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
                    echo $paginator->numbers(array('modulus' => 10));
                     
                    // for the 'next' button
                    if($paginator->hasNext()){
                        echo $paginator->next("Next");
                    }
                     
                    // the 'last' page button
                    echo $paginator->last("Last");
                ?>
            </div>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 posts">
            <?php foreach($posts as $post): ?>
                <?php $postDate = date("F j, Y, g:i a", strtotime($post['Post']['created'])); ?>
                <div class="post">
                    <div class="post-title">
                        <h2><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></h2>
                    </div>
                    <div class="post-date">
                        <small><?php echo $postDate; ?></small>
                    </div>
                    <div class="post-body clearfix">
                        <?php echo $post['Post']['body']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 page-buttons">
            <div class='paging'>
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
                    echo $paginator->numbers(array('modulus' => 10));
                     
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