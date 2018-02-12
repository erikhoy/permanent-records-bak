<?php
class Record extends AppModel {
    public $validate = array(
        'record_title' => array(
            'rule' => 'notBlank'
        )
    );
    public $hasMany = array('Song');
    public $belongsTo = array('Artist', 'Label', 'Format');

    public function getRandomRecord() {
    	$records = $this->find('all');
    	$low = 0;
    	$high = max(array_keys($records));
    	$rand = mt_rand($low, $high);
    	$randomRecord = $records[$rand];
        return $randomRecord;
    }

    public function getRecentRecords() {
        $recentRecords = $this->find('all', array(
            'limit' => 4,
            'order' => array('Record.date_added' => 'desc')
        ));
        return $recentRecords;
    }

    public function getRecordsByArtistId($artistId = null) {
        if (!$artistId) return false;

        $records = $this->find('all', array(
            'condition' => array('Record.artist_id' => $artistId)
        ));
        return $records;
    }
}
?>