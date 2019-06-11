<?php
    namespace Config\Application;

    use Config\Config as Conf;
	 	/**
     * Klasa konfiguracyjna aplikacji internetowej
   	 */
    final class Config extends Conf {
        public static $name             = '';     // nazwa aplikacji
        public static $subdir           = '';     // podfolder projektu
        public static $protocol         = '';     // protokół aplikacji
        public static $adminEmail       = '';     // email administratora
        public static $port       = '';     // email administratora
    }
    Config::init('Application');
