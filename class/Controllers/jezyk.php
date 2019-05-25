<?php
namespace Controllers;
use \Tools\FlashMessage;

class jezyk extends GlobalController {
    public function showAll() {
      $this->view->setTemplate('jezyk/showAll');
      $this->view->addCSSSet(array('external/datatables',
                                  'external/dataTables.checkboxes'
                                 ));
     $this->view->addJSSet(array('external/datatables',
                                 'external/dataTables.checkboxes',
                                 'external/validator',
                                 'delete-confirm',
                                 'load-modal',
                                 'jezyk',
                                 'datatables-custom'
                                ));
      $model = $this->createModel('jezyk');
      $result['data'] = $model->selectAll();

      return $result;

    }
    public function showOne($id) {
      $this->view->setTemplate('jezyk/showOne');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array('delete-confirm', 'jezyk'));
      $model = $this->createModel('jezyk');
      $result['data'] = $model->selectOneById($id);
      return $result;
    }
    public function delete($id) {
      $counter = $this->deleteOne($id);
      \Tools\FlashMessage::addMessage($id, 'delete');
      //FlashMessage::addMessage($counter, 'delete');
      $this->redirect('jezyk/');
    }
    public function ajaxAddForm() {
      //d("test");
      $this->view->setTemplate('ajaxModals/addJezyk');

    }

    /*public function delete($id) {
      $this->check(['id', 'NazwaJezyka'], $_POST);
      $model = $this->createModel('jezyk_archiwizacja');
      $result = $model->insert($_POST['id'],$_POST['NazwaJezyka']);
      $counter = $this->deleteOne($id);
      //FlashMessage::addMessage($counter, 'delete');
      $this->redirect('jezyk/');

    }*/



    public function ajaxEditForm($id) {
 if(isset($id)){
         $this->view->setTemplate('ajaxModals/editJezyk');
         $model = $this->createModel('jezyk');
         $result['data'] = $model->selectOneById($id);
         if(count($result['data']) === 0)
           throw new \Exceptions\Application();
         return $result;
       } else {
         throw new \Exceptions\EmptyValue();
       }
 }

    public function insert() {
      $model = $this->createModel('jezyk');
      $id = $model->insert($this->getPost('NazwaJezyka'));
      \Tools\FlashMessage::addMessage($id, 'add');


      $this->redirect('jezyk/');
    }
    /*public function update() {
      $model = $this->createModel('jezyk');
      $counter = $model->update($this->getPost('NazwaJezyka'),
      $this->getPost('NazwaJezyka'));
      $this->redirect('jezyk/');
    }
    */

    public function update() {
     $model = $this->createModel('jezyk');
     $counter = $model->update($this->getPost('id'),$this->getPost('NazwaJezyka'));
     \Tools\FlashMessage::addMessage($counter, 'update');
     $this->redirect('jezyk/');
    }


}
