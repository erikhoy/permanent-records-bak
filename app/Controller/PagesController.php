<?php
class PagesController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    public $uses = array('Post', 'Record');
    public function index() {
        $this->set('randomRecord', $this->Record->getRandomRecord());
        $this->set('recentRecords', $this->Record->getRecentRecords());
        $this->set('posts', $this->Post->getRecentPosts());
    }

    public function about() {
    	
    }

}
?>