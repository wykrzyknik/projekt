<?php
	namespace Controllers;

	use \Tools\FlashMessage;
	class Access extends Controller {
		// formularz logowania
		public function logForm(){
      $this->view->setTemplate('Access/logForm');
		}
		// loguje do systemu
		public function login(){
			$model = $this->createModel('Access');
			$loginModel = $this->createModel('uzytkownik');
			$admin=false;
			$uczestnik=false;
			if($this->getPost('login')  !== null && $this->getPost('haslo') !== null ) {
				if($model->login($this->getPost('login'),$this->getPost('haslo'))){
						$id = $_SESSION['id'];
						$ranga=$loginModel->getRanga($id);
						if($ranga==5) {$this->redirect('razdwarzy');
							$admin=true;
						}
						else if($ranga==1) {$this->redirect('razdwarzycztery');
							$uczestnik=true;
						}
					}
					}

			\Tools\FlashMessage::addWarning('Login lub hasło jest nie poprawne');
			$this->redirect('formularz-logowania/');

		}




		public function editPassword(){
			$model = $this->createModel('Access');
			$loginModel = $this->createModel('uzytkownik');

			if($this->getPost('haslo') !== null) {
				$id = $_SESSION['id'];

				$login = $loginModel->getLogin($id);

				if($model->editPassword($id, md5($login.md5($this->getPost('haslo')))))
					$this->redirect('');
					\Tools\FlashMessage::addMessage(1, 'haslo');
			}
			$this->redirect('');

		}
		// wylogowywuje z systemu
		public function logout(){
			$this->createModel('Access')->logout();
			$this->redirect('formularz-logowania/');
		}

		public function showOne($id) {
      $this->view->setTemplate('Access/showOne');
      $this->view->addCSSSet(array());
      //$this->view->addJSSet(array('delete-confirm', 'Access'));
      $model = $this->createModel('Access');
      $result['data'] = $model->selectOneById($id);
      return $result;
    }

		public function ajaxEditForm($id) {
 				if(isset($id)){
				 $this->view->setTemplate('ajaxModals/editAccess');
				 $model = $this->createModel('Access');
				 $result['data'] = $model->selectOneById($id);
				 if(count($result['data']) === 0)
					 throw new \Exceptions\Application();
				 return $result;
			 } else {
				 throw new \Exceptions\EmptyValue();
			 }
 }

 public function update() {
  $model = $this->createModel('Access');
  $counter = $model->update($this->getPost('id'),$this->getPost('login'),$this->getPost('name'),$this->getPost('surname'),$this->getPost('password'));
  \Tools\FlashMessage::addMessage($counter, 'update');
  $this->redirect('');
 }

	}
