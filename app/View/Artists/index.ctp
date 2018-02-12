<div class="main-content">
    <div class="row">
        <div class="col col-xs-offset-1 col-xs-10 col-sm-7 page-heading">
            <h1>Artists</h1>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-3 page-buttons">
            <?php echo $this->Html->link('Add Artist', array('controller' => 'artists', 'action' => 'add'), array('class' => 'button')); ?>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 artists">
            <?php 
                $letters = range('A', 'Z');
                foreach ($letters as $letter): 
                    echo "<h2>".$letter."</h2>";
                    foreach ($artists as $artist):
                        if($artist['Artist']['name'][0] == $letter) {
                            echo $this->Html->link($artist['Artist']['name'], array('controller' => 'artists', 'action' => 'view', $artist['Artist']['id']));
                            echo "  |  ";
                        }
                    endforeach;
                endforeach;
            ?>
        </div>
    </div>
</div>