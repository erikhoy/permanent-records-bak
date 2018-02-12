<div class="main-content">
    <div class="row">
        <div class="col col-xs-offset-1 col-xs-10 col-sm-7 page-heading">
            <h1>Users</h1>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-3 page-buttons">
            <?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add'), array('class' => 'button')); ?>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 users">
            <?php foreach ($users as $user): ?>
                <?php echo $this->Html->link($user['User']['username'], array('action' => 'view', $user['User']['id']) ); ?>
                <br>
            <?php endforeach; ?>
        </div>
    </div>
</div>