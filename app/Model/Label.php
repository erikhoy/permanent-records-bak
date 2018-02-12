<?php
class Label extends AppModel {
    public $validate = array(
        'label_name' => array(
            'rule' => 'notBlank'
        )
    );

    public $hasMany = array('Record');
}
?>