<?php

App::uses('AppController', 'Controller');

/**
 * Tours Controller
 *
 * @property Tour $Tour
 */
class ToursController extends AppController {

//    public function isAuthorized($user) {
//        // All registered users can add posts
////        if ($this->action === 'add') {
////            return true;
////        }
//        // The owner of a post can edit and delete it
////        if (in_array($this->action, array('edit', 'delete','view','index','add'))) {
////            $tourId = $this->request->params['pass'][0];
////            if ($this->Tour->isOwnedBy($tourId, $user['id'])) {
//                return true;
////            }
////        }
//        return parent::isAuthorized($user);
//    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Tour->recursive = 0;
        $this->set('tours', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Tour->id = $id;
        if (!$this->Tour->exists()) {
            throw new NotFoundException(__('Invalid tour'));
        }
        $this->set('tour', $this->Tour->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
             $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            $this->Tour->create();
            if ($this->Tour->save($this->request->data)) {
                $this->Session->setFlash(__('The tour has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The tour could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Tour->id = $id;
        if (!$this->Tour->exists()) {
            throw new NotFoundException(__('Invalid tour'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Tour->save($this->request->data)) {
                $this->Session->setFlash(__('The tour has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The tour could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Tour->read(null, $id);
        }
    }

    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Tour->id = $id;
        if (!$this->Tour->exists()) {
            throw new NotFoundException(__('Invalid tour'));
        }
        if ($this->Tour->delete()) {
            $this->Session->setFlash(__('Tour deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Tour was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function tourDetail($id = null) {
        $this->Tour->id = $id;
        if (!$this->Tour->exists()) {
            throw new NotFoundException(__('Invalid tour'));
        }
        $this->set('tour', $this->Tour->read(null, $id));
    }

}