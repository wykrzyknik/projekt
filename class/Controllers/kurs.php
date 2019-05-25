<?php
namespace Controllers;


class kurs extends GlobalController {
    public function showAll() {
      $this->view->setTemplate('kurs/showAll');
      $this->view->addCSSSet(array('external/datatables',
                                  'external/dataTables.checkboxes'
                                 ));
     $this->view->addJSSet(array('external/datatables',
                                 'external/dataTables.checkboxes',
                                 'external/validator',
                                 'delete-confirm',
                                 'load-modal',
                                 'kurs',
                                 'datatables-custom'
                                ));
      $model = $this->createModel('kurs');
      $result['data'] = $model->selectAll();
      $model = $this->createModel('kursoferta');
      $result['Idkursofertaa'] = $model->transferByColumn($model->selectAll('kursoferta'));
      $model = $this->createModel('lektor');
      $result['Idlektoraa'] = $model->transferByColumn($model->selectAll('lektor'));
      return $result;
    }
    public function showCat($id) {
      $this->view->setTemplate('kurs/showAllInKursOferta');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('kurs');
      $result['data'] = $model->selectAllInKursOferta($id);
      $result['Idjezykaa'] = $id;
      $model = $this->createModel('kursoferta');
      $result['Idkursofertaa'] = $model->transferByColumn($model->selectAll('kursoferta'));
      $model = $this->createModel('lektor');
      $result['Idlektoraa'] = $model->transferByColumn($model->selectAll('lektor'));

      return $result;
    }
    public function showOne($id) {
      $this->view->setTemplate('kurs/showOne');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('kurs');
      $result['data'] = $model->selectOneById($id);
      $model = $this->createModel('kursoferta');
      $result['Idkursofertaa'] = $model->transferByColumn($model->selectAll('kursoferta'));
      $model = $this->createModel('lektor');
      $result['Idlektoraa'] = $model->transferByColumn($model->selectAll('lektor'));

      return $result;
    }

    public function showAllInKurs($id) {
      $this->view->setTemplate('kurs/showAllInKurs');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('kurs');
      $result['data'] = $model->selectOneById($id);
      $model = $this->createModel('kursoferta');
      $result['Idkursofertaa'] = $model->transferByColumn($model->selectAll('kursoferta'));
      $model = $this->createModel('jezyk');
      $result['Idjezykaa'] = $model->transferByColumn($model->selectAll('jezyk'));
      $model = $this->createModel('lektor');
      $result['Idlektoraa'] = $model->transferByColumn($model->selectAll('lektor'));

      return $result;
    }
    public function delete($id) {
      $counter = $this->deleteOne($id);
      \Tools\FlashMessage::addMessage($counter, 'delete');
      $this->redirect('kurs/');
    }
    public function ajaxAddForm() {
     $this->view->setTemplate('ajaxModals/addKurs');

     $model = $this->createModel('kursoferta');
     $result['kursoferta'] = $model->transferToSelectable($model->selectAll('kursoferta'),['Nazwaoferty']);

     $model = $this->createModel('lektor');
     $result['lektor'] = $model->transferToSelectable($model->selectAll('lektor'),['Nazwisko','Imie']);
    return $result;
   }
   public function ajaxEditForm($id) {

     if(isset($id)){
       $this->view->setTemplate('ajaxModals/editKurs');

       $model = $this->createModel('kursoferta');
       $result['kursoferta'] = $model->transferToSelectable($model->selectAll('kursoferta'),['Nazwaoferty','PoziomKursu']);

       $model = $this->createModel('lektor');
       $result['lektor'] = $model->transferToSelectable($model->selectAll('lektor'),['Nazwisko','Imie']);

       $model = $this->createModel('kurs');
       $result['data'] = $model->selectOneById($id);
       if(count($result['data']) === 0)
         throw new \Exceptions\Application();
       return $result;
     } else {
       throw new \Exceptions\EmptyValue();
     }

  }

    public function form() {
      $this->view->setTemplate('kurs/addForm');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('kursoferta');
      $result['Idkursofertaa'] = $model->transferByColumn($model->selectAll('kursoferta'));
      $model = $this->createModel('lektor');
      $result['Idlektoraa'] = $model->transferByColumn($model->selectAll('lektor'));
      return $result;
    }
    public function insert() {
       //$this->check(['IdRachunek','IdLokataStatus','DataZakonczenia','Kapitalizacja','Odnawialna','NazwaLokaty','Odsetki'], $_POST);
       $model = $this->createModel('kurs');
       //$model->insert($_POST['IdRachunek'],$_POST['IdLokataStatus'],$_POST['DataZakonczenia'],$_POST['Kapitalizacja'],$_POST['Odnawialna'],$_POST['NazwaLokaty'],$_POST['Odsetki']);

       $id = $model->insert($this->getPost('Idkursuoferta'), $this->getPost('Idlektora'),
                           $this->getPost('Maksymalna_liczba_os'), $this->getPost('Nrsali'),
                           $this->getPost('data_rozpoczecia'), $this->getPost('data_zakonczenia'));
\Tools\FlashMessage::addMessage($id, 'add');
       $this->redirect('kurs/');
     }

     public function update() {
       $model = $this->createModel('kurs');

       $counter = $model->update($this->getPost('id'),
                           $this->getPost('Idkursuoferta'), $this->getPost('Idlektora'),
                           $this->getPost('Maksymalna_liczba_os'), $this->getPost('Nrsali'),
                           $this->getPost('data_rozpoczecia'), $this->getPost('data_zakonczenia'));
       \Tools\FlashMessage::addMessage($counter, 'update');
       $this->redirect('kurs/');
     }
}
