<?php
class ArtistsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    //public $uses = array('Record');

    public function index() {
        $this->set('artists', $this->Artist->find('all', array(
            'order' => array('Artist.name' => 'asc'))));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid artist'));
        }
        $this->set('artist', $this->Artist->findById($id));
        $this->loadModel('Record');
        $this->set('records', $this->Record->find('all', array(
            'conditions' => array('Record.artist_id' => $id)
        )));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Artist->create();
            if ($this->Artist->save($this->request->data)) {
                $this->Flash->success(__('Artist has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid artist'));
        }

        $artist = $this->Artist->findById($id);
        if (!$artist) {
            throw new NotFoundException(__('Invalid artist'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Artist->id = $id;
            if ($this->Artist->save($this->request->data)) {
                $this->Flash->success(__('Artist has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update artist.'));
        }

        if (!$this->request->data) {
            $this->request->data = $artist;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Artist->delete($id)) {
            $this->Flash->success(
                __('The artist with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The artist with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }
}
?>