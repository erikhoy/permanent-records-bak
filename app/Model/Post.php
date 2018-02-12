<?php
class Post extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );

    public function getRecentPosts() {
    	$posts = $this->find('all', array(
    		'limit' => 3,
            'order' => array('created' => 'desc')
    	));
    	return $posts;
    }
}
?>