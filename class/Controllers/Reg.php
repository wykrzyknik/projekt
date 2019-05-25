<?php
	namespace Controllers;

	use \Tools\FlashMessage;

	class Reg extends Controller {
		// formularz rejestracji
		public function regForm(){
      $this->view->setTemplate('Access/regForm');
		}

    public function register(){
			$model = $this->createModel('Reg');
			if($this->getPost('login')  !== null && $this->getPost('name') !== null && $this->getPost('surname') !== null && $this->getPost('password') !== null) {
				if($model->register($this->getPost('login'),$this->getPost('name'),$this->getPost('surname'),$this->getPost('password')))
				\Tools\FlashMessage::addMessage($counter, 'Zarejestrowany');
					$this->redirect('');

			}
			$this->redirect('formularz-rejestracji/');
		}

		function haslo($password, $dlugosc){
		$password= md5($password);
		$hasło = substr($password,0,$dlugosc);
		echo $potem;
		}


	}
