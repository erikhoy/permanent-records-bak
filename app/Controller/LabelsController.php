<?php
class LabelsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

    public function index() {
        $this->set('labels', $this->Label->find('all', array(
            'order' => array('Label.name' => 'asc'))));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid label'));
        }
        $this->loadModel("Record");
        $this->set('label', $this->Label->findById($id));
        $records = $this->Record->find('all', array(
            'conditions' => array('Record.label_id' => $id),
            'order' => array('Artist.name', 'Record.record_title')
        ));
        $this->set('records', $records);
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->Label->create();
            if ($this->Label->save($this->request->data)) {
                $this->Flash->success(__('Label has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your label.'));
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid label'));
        }

        $label = $this->Label->findById($id);
        if (!$label) {
            throw new NotFoundException(__('Invalid label'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Label->id = $id;
            if ($this->Label->save($this->request->data)) {
                $this->Flash->success(__('Label has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update label.'));
        }

        if (!$this->request->data) {
            $this->request->data = $label;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Label->delete($id)) {
            $this->Flash->success(
                __('The label with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The label with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }
}
?>