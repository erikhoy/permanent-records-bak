<div class="main-content">
    <div class="row">
        <div class="col col-xs-offset-1 col-xs-10 page-heading">
            <h1>Search Records</h1>
        </div>
        <div class="col col-xs-offset-1 col-xs-10 search">
            <?php echo $this->Form->create('Search', array('url' => array('controller' => 'records', 'action' => 'search_results'))); ?>
            <!--<div class="col col-xs-12 col-sm-6">
                <?php //echo $this->Form->input('search_generic', array('label' => 'Search Term', 'autofocus' => 'autofocus')); ?>
            </div>-->
            <div class="col col-xs-12 col-sm-6">
                <?php echo $this->Form->input('search_artist', array('label' => 'Search Artist', 'autofocus' => 'autofocus')); ?>
            </div>
            <div class="col col-xs-12 col-sm-6">
                <?php echo $this->Form->input('search_title', array('label' => 'Search Record Title')); ?>
            </div>
            <div class="col col-xs-12 col-sm-6">
                <?php echo $this->Form->input('search_song', array('label' => 'Search Song')); ?>
            </div>
            <div class="col col-xs-12 col-sm-6">
                <?php echo $this->Form->input('search_label', array('label' => 'Search Label')); ?>
            </div>
            <div class="col col-xs-12 col-sm-6">
                <?php echo $this->Form->input('search_format', array('label' => 'Search By Format', 'type' => 'select', 'options' => array($formats), 'empty' => 'Select One')); ?>
            </div>
            <div class="col col-xs-12">
                <?php echo $this->Form->end(__('Search')); ?>
            </div>
        </div>
        
    </div>
</div>