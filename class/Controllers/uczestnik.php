<?php
namespace Controllers;


class uczestnik extends GlobalController {
    public function showAll() {
      $this->view->setTemplate('uczestnik/showAll');
      $this->view->addCSSSet(array('external/datatables',
                                  'external/dataTables.checkboxes'
                                 ));
     $this->view->addJSSet(array('external/datatables',
                                 'external/dataTables.checkboxes',
                                 'external/validator',
                                 'delete-confirm',
                                 'load-modal',
                                 'uczestnik',
                                 'datatables-custom'
                                ));
      $model = $this->createModel('uczestnik');
      $result['data'] = $model->selectAll();
      /*
        CREATE VIEW `ilosc_produktow` AS
        SELECT `id_kategorii`, count(id) AS `ilosc` FROM produkty GROUP BY `id_kategorii`
      */
      //$result['amount'] = $model->transferToSelectable($model->selectAll('uczestnik'), ['Nazwisko'], ['Imie'], ['Data_ur'], ['PESEL'], ['Kod_pocztowy'],['Miasto'], ['Ulica'], ['Numerlokalu'],['Telefon'],['Email'], '', 'Iduczestnika');
      /*$result['amount'] = $model->transferToSelectable($model->selectAll(['NazwaJezyka'], '', 'Idjezyka');*/
      return $result;

    }

    public function showOne($id) {
      $this->view->setTemplate('uczestnik/showOne');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('uczestnik');
      $result['data'] = $model->selectOneById($id);
      return $result;
    }
    public function delete($Iduczestnika) {
      $this->deleteOne($Iduczestnika);
      \Tools\FlashMessage::addMessage($counter, 'delete');
      $this->redirect('uczestnik/');
    }
    public function ajaxAddForm() {
      //d("test");
      $this->view->setTemplate('ajaxModals/addUczestnik');

    }

    public function ajaxEditForm($id) {
  if(isset($id)){
         $this->view->setTemplate('ajaxModals/editUczestnik');
         $model = $this->createModel('uczestnik');
         $result['data'] = $model->selectOneById($id);
         if(count($result['data']) === 0)
           throw new \Exceptions\Application();
         return $result;
       } else {
         throw new \Exceptions\EmptyValue();
       }
  }

  public function update() {
   $model = $this->createModel('uczestnik');
   $counter = $model->update($this->getPost('id'),$this->getPost('Nazwisko'), $this->getPost('Imie'),
                         $this->getPost('Data_ur'), $this->getPost('PESEL'), $this->getPost('Kod_pocztowy'),
                         $this->getPost('Miasto'), $this->getPost('Ulica'), $this->getPost('Numerlokalu'),$this->getPost('Telefon'), $this->getPost('Email'));
   \Tools\FlashMessage::addMessage($counter, 'update');
   $this->redirect('uczestnik/');
  }


    public function insert() {
      $model = $this->createModel('uczestnik');
      $id = $model->insert($this->getPost('Nazwisko'), $this->getPost('Imie'),
                            $this->getPost('Data_ur'), $this->getPost('PESEL'), $this->getPost('Kod_pocztowy'),
                            $this->getPost('Miasto'), $this->getPost('Ulica'), $this->getPost('Numerlokalu'),$this->getPost('Telefon'), $this->getPost('Email'));
                            \Tools\FlashMessage::addMessage($counter, 'add');
      $this->redirect('uczestnik/');
    }



}
