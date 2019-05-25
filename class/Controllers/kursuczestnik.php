<?php
namespace Controllers;


class kursuczestnik extends GlobalController {
    public function showAll() {
      $this->view->setTemplate('kursuczestnik/showAll');
      $this->view->addCSSSet(array('external/datatables',
                                  'external/dataTables.checkboxes'
                                 ));
     $this->view->addJSSet(array('external/datatables',
                                 'external/dataTables.checkboxes',
                                 'external/validator',
                                 'delete-confirm',
                                 'load-modal',
                                 'kursuczestnik',
                                 'datatables-custom'
                                ));
      $model = $this->createModel('kursuczestnik');
      $result['data'] = $model->selectAll();
      $model = $this->createModel('kurs');
      $result['Idkursuu'] = $model->transferByColumn($model->selectAll('kurs'));
      $model = $this->createModel('uczestnik');
      $result['Iduczestnikaa'] = $model->transferByColumn($model->selectAll('uczestnik'));
      return $result;
    }
    public function showCat($id) {
      $this->view->setTemplate('kursuczestnik/showAllInKurs');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('kursuczestnik');
      $result['data'] = $model->selectAllInKurs($id);
      $result['selectedCategory'] = $id;
      $model = $this->createModel('kurs');
      $result['Idkursuu'] = $model->transferByColumn($model->selectAll('kurs'));
      $model = $this->createModel('uczestnik');
      $result['Iduczestnikaa'] = $model->transferByColumn($model->selectAll('uczestnik'));
      return $result;
    }
    public function showOne($id) {
      $this->view->setTemplate('kursuczestnik/showOne');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('kursuczestnik');
      $result['data'] = $model->selectOneById($id);
      $model = $this->createModel('kurs');
      $result['Idkursuu'] = $model->transferByColumn($model->selectAll('kurs'));
      $model = $this->createModel('uczestnik');
      $result['Iduczestnikaa'] = $model->transferByColumn($model->selectAll('uczestnik'));
      return $result;
    }
    public function delete($id) {
      $this->deleteOne($id);
      \Tools\FlashMessage::addMessage($counter, 'delete');
      $this->redirect('kursuczestnik/');
    }

    public function ajaxEditForm($id) {
  if(isset($id)){
         $this->view->setTemplate('ajaxModals/editKursUczestnik');

         $model = $this->createModel('kurs');
         $result['kurs'] = $model->transferToSelectable($model->selectAll('kurs'),['data_rozpoczecia','data_zakonczenia']);
         $model = $this->createModel('uczestnik');
         $result['uczestnik'] = $model->transferToSelectable($model->selectAll('uczestnik'),['Nazwisko','Imie']);
         $model = $this->createModel('kursuczestnik');
         $result['data'] = $model->selectOneById($id);
         if(count($result['data']) === 0)
           throw new \Exceptions\Application();
         return $result;
       } else {
         throw new \Exceptions\EmptyValue();
       }
  }


    /*public function form() {
      $this->view->setTemplate('kursuczestnik/addForm');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('kurs');
      $result['Idkursuu'] = $model->transferByColumn($model->selectAll('kurs'));
      $model = $this->createModel('uczestnik');
      $result['Iduczestnikaa'] = $model->transferByColumn($model->selectAll('uczestnik'));
      return $result;
    }*/
    public function ajaxAddForm() {
     $this->view->setTemplate('ajaxModals/addKursUczestnik');

     $model = $this->createModel('kurs');
     $result['kurs'] = $model->transferToSelectable($model->selectAll('kurs'),['Idkursuoferta','Idlektora','data_rozpoczecia', 'data_zakonczenia']);

     $model = $this->createModel('uczestnik');
     $result['uczestnik'] = $model->transferToSelectable($model->selectAll('uczestnik'),['Nazwisko','Imie']);
    return $result;
   }
   public function insert() {

      $model = $this->createModel('kursuczestnik');
      $id = $model->insert($this->getPost('Idkursu'), $this->getPost('Iduczestnika'),
                          $this->getPost('Oplacano'), $this->getPost('Opis'));
\Tools\FlashMessage::addMessage($counter, 'add');
      $this->redirect('kursuczestnik/');
    }
    public function update() {
     $model = $this->createModel('kursuczestnik');
     $counter = $model->update($this->getPost('id'),$this->getPost('Idkursu'), $this->getPost('Iduczestnika'),
                         $this->getPost('Oplacano'), $this->getPost('Opis'));
     \Tools\FlashMessage::addMessage($counter, 'update');
     $this->redirect('kursuczestnik/');
    }

}
