<?php
namespace Controllers;


class kursoferta extends GlobalController {
    public function showAll() {
      $this->view->setTemplate('kursoferta/showAll');
      $this->view->addCSSSet(array('external/datatables',
                                  'external/dataTables.checkboxes'
                                 ));
     $this->view->addJSSet(array('external/datatables',
                                 'external/dataTables.checkboxes',
                                 'external/validator',
                                 'delete-confirm',
                                 'load-modal',
                                 'kursoferta',
                                 'datatables-custom'
                                ));
      $model = $this->createModel('kursoferta');
      $result['data'] = $model->selectAll();
      $model = $this->createModel('jezyk');
      $result['Idjezykaa'] = $model->transferByColumn($model->selectAll('jezyk'));
      return $result;
    }
    public function showCat($id) {
      $this->view->setTemplate('kursoferta/showAllInCategory');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('kursoferta');
      $result['data'] = $model->selectAllInCategory($id);
      $result['selectedCategory'] = $id;
      $model = $this->createModel('jezyk');
      $result['Idjezykaa'] = $model->transferByColumn($model->selectAll('jezyk'));
      return $result;
    }
    public function showOne($id) {
      $this->view->setTemplate('kursoferta/showOne');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('kursoferta');
      $result['data'] = $model->selectOneById($id);
      $model = $this->createModel('jezyk');
      $result['Idjezykaa'] = $model->transferByColumn($model->selectAll('jezyk'));
      return $result;
    }
    public function delete($id) {
      $this->deleteOne($id);
      \Tools\FlashMessage::addMessage($counter, 'delete');

      $this->redirect('kursoferta/');
    }
    public function ajaxAddForm() {
     $this->view->setTemplate('ajaxModals/addKursOferta');

     $model = $this->createModel('jezyk');
     $result['jezyk'] = $model->transferToSelectable($model->selectAll('jezyk'),['NazwaJezyka']);

    return $result;
   }
   public function ajaxEditForm($id) {
if(isset($id)){
        $this->view->setTemplate('ajaxModals/editKursOferta');

        $model = $this->createModel('jezyk');
        $result['jezyk'] = $model->transferToSelectable($model->selectAll('jezyk'),['NazwaJezyka']);
        $model = $this->createModel('kursoferta');
        $result['data'] = $model->selectOneById($id);
        if(count($result['data']) === 0)
          throw new \Exceptions\Application();
        return $result;
      } else {
        throw new \Exceptions\EmptyValue();
      }
}


    /*public function form() {
      $this->view->setTemplate('kursoferta/addForm');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('jezyk');
      $result['Idjezykaa'] = $model->transferByColumn($model->selectAll('jezyk'));
      return $result;
    }*/

    public function insert() {
       $model = $this->createModel('kursoferta');
       $id = $model->insert($this->getPost('Idjezyka'), $this->getPost('Nazwaoferty'),
                           $this->getPost('PoziomKursu'), $this->getPost('Cena'));
                           \Tools\FlashMessage::addMessage($counter, 'add');
       $this->redirect('kursoferta/');
     }

     public function update() {
      $model = $this->createModel('kursoferta');
      $counter = $model->update($this->getPost('id'),$this->getPost('Idjezyka'), $this->getPost('Nazwaoferty'),
                          $this->getPost('PoziomKursu'), $this->getPost('Cena'));
      \Tools\FlashMessage::addMessage($counter, 'update');
      $this->redirect('kursoferta/');
    }

}
