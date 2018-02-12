<?php
class RecordsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $uses = array('Format', 'Song');
    public $components = array('Paginator');
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'view');
    }

    public function isAuthorized($user) {
    // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return false;
    }
    
    public function index() {
        //$order = "'Artist.name' => 'asc', 'Record_title' => 'asc'";
        /*if ($this->request->is('post')) {
            if (!empty($this->request->data['sort_order'])) {
                $sortOrder = $this->request->data['sort_order'];
                switch($sortOrder) {
                    case $artistName:
                        $order = "'Artist.name' => 'asc', 'Record.record_title' => 'asc'";
                        break;
                    case $recordTitle:
                        $order = "'Record.record_title' => 'asc', 'Artist.name' => 'asc'";
                        break;
                    case $year:
                        $order = "'Record.year' => 'asc', 'Artist.name' => 'asc', 'Record.record_title' => 'asc'";
                        break;
                    case $format:
                        //
                        break;
                }
            }
        }*/
        $this->Paginator->settings = array(
            'limit' => 50,
            'order' => array('Artist.name' => 'asc')
        );
        $records = $this->Paginator->paginate('Record');
        $this->set('records', $records);
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid record'));
        }

        $record = $this->Record->findById($id);
        if (!$record) {
            throw new NotFoundException(__('Invalid record'));
        }
        $this->set('record', $record);
    }

	public function add() {
        $artists = $this->Artist->find('list', array('order' => array('Artist.name' => 'asc')));
        $this->set('artists', $artists);
        $labels = $this->Label->find('list', array('order' => array('Label.name' => 'asc')));
        $this->set('labels', $labels);
        //$song[] = null;
        if ($this->request->is('post')) {
            $this->Record->create();
            if ($this->Record->save($this->request->data)) {
                $id = $this->Record->id;
                foreach ($this->request->data['Song']['song_title'] as $row):
                    if (!empty($row)) {
                        $this->Song->create();
                        $this->Song->set(array('song_title' => $row, 'record_id' => $id));
                        $this->Song->save();
                    }
                endforeach;
                $this->Flash->success(__('Record has been saved.'));    
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add record.'));
        }
    }

    
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid record'));
        }
        $artists = $this->Artist->find('list', array('order' => array('Artist.name' => 'asc')));
        $this->set('artists', $artists);
        $labels = $this->Label->find('list', array('order' => array('Label.name' => 'asc')));
        $this->set('labels', $labels);
        $record = $this->Record->findById($id);
/*        $songs = $this->Song->find('all', array('conditions' => array('Song.record_id' => $id)));
        $this->set->('songs', $songs);
  */      $recordSongs[] = 0;
        $formats = $this->Format->find('list', array('order' => array('Format.name' => 'desc')));
        $this->set('formats', $formats);
        if (!$record) {
            throw new NotFoundException(__('Invalid record'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Record->id = $id;
            if ($this->Record->save($this->request->data)) {
                $this->Flash->success(__('Record has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update record.'));
        }
        if (!$this->request->data) {
            $this->request->data = $record;
        }
    }

    public function search() {
        $formats = $this->Format->find('list', array('order' => array('Format.name' => 'desc')));
        $this->set('formats', $formats);
    }

    public function search_results() {
        //$conditions = null;
        if ($this->request->is('post')) {
            /*if(!empty($this->request->data['Search']['search'])) {
                $search = $this->request->data['Search']['search'];
                $conditions['or'][] = array('Record.record_title LIKE' => "%$search%");
                $conditions['or'][] = array('Artist.name LIKE' => "%$search%");
                $conditions['or'][] = array('Song.song_title LIKE' => "%$search%");
                $conditions['or'][] = array('Label.name LIKE' => "%$search%");
                $this->paginate = array(
                    'conditions' => $conditions,
                    'limit' => 50,
                    'order' => array('Artist.name' => 'asc', 'Record.record_title' => 'asc')
                );
                $records = $this->paginate('Record');
                $this->set('records', $records);
            }*/
            if(!empty($this->request->data['Search']['search_artist'])) {
                $search = $this->request->data['Search']['search_artist'];
                $conditions = array('Artist.name LIKE' => "%$search%");
            }/*
                $this->Paginator->settings = array(
                    'conditions' => $conditions,
                    'order' => array('Artist.name' => 'asc', 'Record.record_title' => 'asc')
                );
                $records = $this->Paginator->paginate('Record');
                $this->set('records', $records);
            }*/
            if(!empty($this->request->data['Search']['search_title'])) {
                $search = $this->request->data['Search']['search_title'];
                $conditions = array('Record.record_title LIKE' => "%$search%");
               /* $this->Paginator->settings = array(
                    'conditions' => $conditions,
                    'order' => array('Artist.name' => 'asc', 'Record.record_title' => 'asc')
                );
                $records = $this->Paginator->paginate('Record');
                $this->set('records', $records);
            */}
            if(!empty($this->request->data['Search']['search_song'])) {
                $search = $this->request->data['Search']['search_song'];
                $conditions = array('Song.song_title LIKE' => "%$search%");
              /*  $this->Paginator->settings = array(
                    'conditions' => $conditions,
                    'group' => array('Record.record_title'),
                    'order' => array('Artist.name' => 'asc', 'Record.record_title' => 'asc')
                );
                $records = $this->Paginator->paginate('Song');
                $this->set('records', $records);
            */}
            if(!empty($this->request->data['Search']['search_label'])) {
                $search = $this->request->data['Search']['search_label'];
                $conditions = array('Label.name LIKE' => "%$search%");
            }
            if(!empty($this->request->data['Search']['search_format'])) {
                $search = $this->request->data['Search']['search_format'];
                $conditions = array('Record.format_id LIKE' => "%$search%");
/*                $records = $this->Paginator->settings = array(
                    'conditions' => $conditions,
                    'order' => array('Artist.name' => 'asc', 'Record.record_title' => 'asc')
                );
                $records = $this->Paginator->paginate('Record');
  */          }
                $records = $this->Record->find('all', array(
                    'conditions' => $conditions,
                    'order' => array('Artist.name' => 'asc', 'Record.record_title' => 'asc')
                ));
                $this->set('records', $records);
        }
        
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Record->delete($id)) {
            $this->Flash->success(
                __('The record with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The record with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }
}
?>