<div class="main-content">
    <div class="row">
        <div class="col col-xs-offset-1 col-xs-10 col-sm-7 page-heading">
            <h1>Labels</h1>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-3 page-buttons">
            <?php echo $this->Html->link('Add Label', array('controller' => 'labels', 'action' => 'add'), array('class' => 'button')); ?>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 labels">
            <?php 
                $letters = range('A', 'Z');
                foreach ($letters as $letter): 
                    echo "<h2>".$letter."</h2>";
                    foreach ($labels as $label):
                        if($label['Label']['name'][0] == $letter) {
                            echo $this->Html->link($label['Label']['name'], array('controller' => 'labels', 'action' => 'view', $label['Label']['id']));
                            echo "  |  ";
                        }
                    endforeach;
                endforeach;
            ?>
        </div>
    </div>
</div>