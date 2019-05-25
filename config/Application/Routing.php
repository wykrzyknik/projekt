<?php
    namespace Config\Application;

	 	/**
     * Klasa konfiguracyjna przyjaznych adresów
   	 */
    final class Routing {
        public static $routes = [

          ['GET','/', array('controller' => 'jezyk', 'action' => 'showAll'), 'home'],

         ['GET','/jezyk/?', array('controller' => 'jezyk', 'action' => 'showAll'), 'jezyk'],
         ['GET','/jezyk/[i:id]/?', array('controller' => 'jezyk', 'action' => 'showOne'), 'jezyk_showOne'],
         ['GET','/jezyk/usun/[i:id]/?', array('controller' => 'jezyk', 'action' => 'delete'), 'jezyk_delete'],
         ['GET','/jezyk/formularz/?', array('controller' => 'jezyk', 'action' => 'ajaxAddForm'), 'jezyk_form'],
         ['POST','/jezyk/dodaj/?', array('controller' => 'jezyk', 'action' => 'insert'), 'jezyk_insert'],
         ['GET','/jezyk/formularz-edycja/[i:id]/?', array('controller' => 'jezyk', 'action' => 'ajaxEditForm'), 'jezyk_form_edit'],
         ['POST','/jezyk/aktualizuj/?', array('controller' => 'jezyk', 'action' => 'update'), 'jezyk_update'],

         ['GET','/lektor/?', array('controller' => 'lektor', 'action' => 'showAll'), 'lektor'],
         ['GET','/lektor/[i:id]/?', array('controller' => 'lektor', 'action' => 'showOne'), 'lektor_showOne'],
         ['GET','/lektor/usun/[i:id]/?', array('controller' => 'lektor', 'action' => 'delete'), 'lektor_delete'],
         ['GET','/lektor/formularz/?', array('controller' => 'lektor', 'action' => 'ajaxAddForm'), 'lektor_form'],
         ['POST','/lektor/dodaj/?', array('controller' => 'lektor', 'action' => 'insert'), 'lektor_insert'],
         ['GET','/lektor/formularz-edycja/[i:id]/?', array('controller' => 'lektor', 'action' => 'ajaxEditForm'), 'lektor_form_edit'],
          ['POST','/lektor/aktualizuj/?', array('controller' => 'lektor', 'action' => 'update'), 'lektor_update'],


         ['GET','/uczestnik/?', array('controller' => 'uczestnik', 'action' => 'showAll'), 'uczestnik'],
         ['GET','/uczestnik/[i:id]/?', array('controller' => 'uczestnik', 'action' => 'showOne'), 'uczestnik_showOne'],
         ['GET','/uczestnik/usun/[i:id]/?', array('controller' => 'uczestnik', 'action' => 'delete'), 'uczestnik_delete'],
         ['GET','/uczestnik/formularz/?', array('controller' => 'uczestnik', 'action' => 'ajaxAddForm'), 'uczestnik_form'],
         ['POST','/uczestnik/dodaj/?', array('controller' => 'uczestnik', 'action' => 'insert'), 'uczestnik_insert'],
         ['GET','/uczestnik/formularz-edycja/[i:id]/?', array('controller' => 'uczestnik', 'action' => 'ajaxEditForm'), 'uczestnik_form_edit'],
          ['POST','/uczestnik/aktualizuj/?', array('controller' => 'uczestnik', 'action' => 'update'), 'uczestnik_update'],

          ['GET','/kurs/?', array('controller' => 'kurs', 'action' => 'showAll'), 'kurs'],
          ['GET','/kurs/[i:id]/?', array('controller' => 'kurs', 'action' => 'showOne'), 'kurs_showOne'],
          ['GET','/kurs/usun/[i:id]/?', array('controller' => 'kurs', 'action' => 'delete'), 'kurs_delete'],
          ['GET','/kurs/formularz/?', array('controller' => 'kurs', 'action' => 'ajaxAddForm'), 'kurs_form'],
          ['POST','/kurs/dodaj/?', array('controller' => 'kurs', 'action' => 'insert'), 'kurs_insert'],
          ['GET','/kurs/formularz-edycja/[i:id]/?', array('controller' => 'kurs', 'action' => 'ajaxEditForm'), 'kurs_form_edit'],
          ['POST','/kurs/aktualizuj/?', array('controller' => 'kurs', 'action' => 'update'), 'kurs_update'],

          ['GET','/kursuczestnik/?', array('controller' => 'kursuczestnik', 'action' => 'showAll'), 'kursuczestnik'],
          ['GET','/kursuczestnik/[i:id]/?', array('controller' => 'kursuczestnik', 'action' => 'showOne'), 'kursuczestnik_showOne'],
          ['GET','/kursuczestnik/usun/[i:id]/?', array('controller' => 'kursuczestnik', 'action' => 'delete'), 'kursuczestnik_delete'],
          ['GET','/kursuczestnik/formularz/?', array('controller' => 'kursuczestnik', 'action' => 'ajaxAddForm'), 'kursuczestnik_form'],
          ['POST','/kursuczestnik/dodaj/?', array('controller' => 'kursuczestnik', 'action' => 'insert'), 'kursuczestnik_insert'],
          ['GET','/kursuczestnik/formularz-edycja/[i:id]/?', array('controller' => 'kursuczestnik', 'action' => 'ajaxEditForm'), 'kursuczestnik_form_edit'],
          ['POST','/kursuczestnik/aktualizuj/?', array('controller' => 'kursuczestnik', 'action' => 'update'), 'kursuczestnik_update'],

          ['GET','/kursoferta/?', array('controller' => 'kursoferta', 'action' => 'showAll'), 'kursoferta'],
          ['GET','/kursoferta/[i:id]/?', array('controller' => 'kursoferta', 'action' => 'showOne'), 'kursoferta_showOne'],
          ['GET','/kursoferta/usun/[i:id]/?', array('controller' => 'kursoferta', 'action' => 'delete'), 'kursoferta_delete'],
          ['GET','/kursoferta/formularz/?', array('controller' => 'kursoferta', 'action' => 'ajaxAddForm'), 'kursoferta_form'],
          ['POST','/kursoferta/dodaj/?', array('controller' => 'kursoferta', 'action' => 'insert'), 'kursoferta_insert'],
          ['GET','/kursoferta/formularz-edycja/[i:id]/?', array('controller' => 'kursoferta', 'action' => 'ajaxEditForm'), 'kursoferta_form_edit'],
          ['POST','/kursoferta/aktualizuj/?', array('controller' => 'kursoferta', 'action' => 'update'), 'kursoferta_update'],

           //konfiguracja logowania
           ['GET','/formularz-logowania/?', array('controller' => 'Access', 'action' => 'logForm'), 'login_form'],
             ['GET','/formularz-rejestracji/?', array('controller' => 'Reg', 'action' => 'regForm'), 'register_form'],
             ['POST','/zarejestruj/?', array('controller' => 'Reg', 'action' => 'register'), 'Reg_register'],
             ['POST','/zaloguj/?', array('controller' => 'Access', 'action' => 'login'), 'login'],
             ['GET','/wyloguj/?', array('controller' => 'Access', 'action' => 'logout'), 'logout'],
            ['GET','/formularz-zmiany-hasla/?', array('controller' => 'Access', 'action' => 'editPasswordForm'), 'edit_password_form'],
            ['POST','/zmienHaslo/?', array('controller' => 'Access', 'action' => 'editPassword'), 'edit_password']
    ];
}
