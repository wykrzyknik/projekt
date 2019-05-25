<?php
namespace Controllers;


class lektor extends GlobalController {
    public function showAll() {
      $this->view->setTemplate('lektor/showAll');
      $this->view->addCSSSet(array('external/datatables',
                                  'external/dataTables.checkboxes'
                                 ));
     $this->view->addJSSet(array('external/datatables',
                                 'external/dataTables.checkboxes',
                                 'external/validator',
                                 'delete-confirm',
                                 'load-modal',
                                 'lektor',
                                 'datatables-custom'
                                ));
      $model = $this->createModel('lektor');
      $result['data'] = $model->selectAll();
      /*
        CREATE VIEW `ilosc_produktow` AS
        SELECT `id_kategorii`, count(id) AS `ilosc` FROM produkty GROUP BY `id_kategorii`
      */
      //$result['amount'] = $model->transferToSelectable($model->selectAll('lektor'), ['Nazwisko'], ['Imie'], ['Telefon'], ['Email'], ['Miasto'], ['Ulica'], ['Numerdomu'], ['Numerlokalu'], '', 'Idlektora');
      /*$result['amount'] = $model->transferToSelectable($model->selectAll(['NazwaJezyka'], '', 'Idjezyka');*/
      return $result;

    }

    public function showOne($id) {
      $this->view->setTemplate('lektor/showOne');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array('delete-confirm', 'lektor'));
      $model = $this->createModel('lektor');
      $result['data'] = $model->selectOneById($id);
      return $result;
    }
    public function delete($Idlektora) {
      $this->deleteOne($Idlektora);
      \Tools\FlashMessage::addMessage($counter, 'delete');
      $this->redirect('lektor/');
    }
    public function ajaxAddForm() {
      //d("test");
      $this->view->setTemplate('ajaxModals/addLektor');

    }

    public function updOne($id) {
      $this->view->setTemplate('lektor/addUpd');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('lektor');
      $result['data'] = $model->selectOneById($id);
      return $result;
    }

    public function insert() {
      $model = $this->createModel('lektor');
      $id = $model->insert($this->getPost('Nazwisko'), $this->getPost('Imie'),
                            $this->getPost('Telefon'), $this->getPost('Email'),
                            $this->getPost('Miasto'), $this->getPost('Ulica'),
                            $this->getPost('Numerdomu'), $this->getPost('Numerlokalu'));
                            \Tools\FlashMessage::addMessage($counter, 'add');
      $this->redirect('lektor/');
    }

    public function ajaxEditForm($id) {
  if(isset($id)){
         $this->view->setTemplate('ajaxModals/editLektor');
         $model = $this->createModel('lektor');
         $result['data'] = $model->selectOneById($id);
         if(count($result['data']) === 0)
           throw new \Exceptions\Application();
         return $result;
       } else {
         throw new \Exceptions\EmptyValue();
       }
  }

  public function update() {
   $model = $this->createModel('lektor');
   $counter = $model->update($this->getPost('id'),$this->getPost('Nazwisko'), $this->getPost('Imie'),
                         $this->getPost('Telefon'), $this->getPost('Email'),
                         $this->getPost('Miasto'), $this->getPost('Ulica'),
                         $this->getPost('Numerdomu'), $this->getPost('Numerlokalu'));
   \Tools\FlashMessage::addMessage($counter, 'update');
   $this->redirect('lektor/');
  }
  
    public function archiwizacja() {
      $model = $this->createModel('lektor');
      $model2 = $this->createModel('lektor_archiwizacja');
      $result['data'] = $model->selectOneById($id);

      $id = $model->insert($this->getPost('Nazwisko'), $this->getPost('Imie'),
                            $this->getPost('Telefon'), $this->getPost('Email'),
                            $this->getPost('Miasto'), $this->getPost('Ulica'),
                            $this->getPost('Numerdomu'), $this->getPost('Numerlokalu'));
      $this->redirect('lektor/');
    }

}
