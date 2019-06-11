<?php
	namespace Tools;
	use PhpRbac\Rbac;

	/**
	 * Klasa do obsługi sesji z logowaniem
	 */
	class Access extends Session {
		// klucze sesji
		public static 	$login 			= 'user';
		public static 	$name 			= 'name';
		public static 	$id 				= 'id';
		public static 	$ranga				= 'ranga';
		private static 	$loginTime 	= 'logintime';
		// czas, po którym nastapi wylogowanie [sek]
		private static $sessionTime = 10;



		public static $user = array(
				'admin' => 5,
				'sekretariat' => 3 ,
				'lektor' => 2 ,
				'uczestnik' => 1 ,
			 );


		public function sprawdzRange(){

		return 	$this->user[$_SESSION['ranga']];

	}


	  private function __construct() {}

		public static function init() {
				self::$sessionTime = \Config\Application\Session::$sessionTime;
		}
		/**
		 * Logowanie
		 * @param  string $login 				login użytkownika
		 * @param  string $name  				nazwisko użytkownika
		 * @param  int $id    					identyfikator użytkownika
		 */
		public static function login($login, $name, $id,$ranga) {
			// sprawdzenie istniejącej sesji
			if(parent::check() === true)
			{
				// zmieniając poziom dostępu regenerujemy sesję
				parent::regenerate();
				parent::set(self::$login, $login);
				parent::set(self::$name, $name);
				parent::set(self::$id, $id);
				parent::set(self::$ranga, $ranga);
				parent::set(self::$loginTime, time());

			}

		}
		// wyloguj
		public static function logout() {
			parent::clear(self::$login);
			parent::clear(self::$name);
			parent::clear(self::$id);
			parent::clear(self::$ranga);
			parent::clear(self::$loginTime);
			parent::regenerate();
		}
		// sprawdź czy jest zalogowany
		public static function islogin() {
			if(parent::is(self::$login) === true) {

				if(time() > parent::get(self::$loginTime) + self::$sessionTime) {
					// przekroczono czas sesji, wyloguj
					self::logout();
					return false;
				}
				parent::set(self::$loginTime, time());
				return true;
			}
			return false;
		}

	}
	Access::init();
