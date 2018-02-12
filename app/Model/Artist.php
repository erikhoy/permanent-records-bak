<?php
class Artist extends AppModel {
    public $validate = array(
        'artist' => array(
            'rule' => 'notBlank'
        )
    );

    public $hasMany = array('Record');
}
?>