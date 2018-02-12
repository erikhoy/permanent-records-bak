<div class="main-content">
    <div class="row">
        <div class="col col-xs-offset-1 col-xs-10 col-sm-7 page-heading">
            <h1>Songs</h1>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-3 page-buttons">
            <?php echo $this->Html->link('Add Song', array('controller' => 'songs', 'action' => 'add'), array('class' => 'button')); ?>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 songs">
            <?php 
                $letters = range('A', 'Z');
                foreach ($letters as $letter): 
                    echo "<h2>".$letter."</h2>";

                    foreach ($songs as $row):
                        if($row['Song']['song_title'][0] == $letter) {
                            if (!empty($row['Song']['song_video'])) {
                                echo $this->Html->link($row['Song']['song_title'], $row['Song']['song_video'], array('target' => '_blank')); 
                            } else {
                                echo $row['Song']['song_title'];
                            }
                            echo "  |  ";
                        }
                    endforeach;
                endforeach;
            ?>
        </div>
    </div>
</div>