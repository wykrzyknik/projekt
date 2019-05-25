<?php

namespace Views;

class AppView extends View {
		/**
		 * kolekcja plików js
		 */
    protected $js = array();
		/**
		 * kolekcja plików CSS
		 */
    protected $css = array();
		/**
		 * kolekcja globalnych plików dołączanych do każdego szablonu
		 */
    protected $globalJS = array('external/jquery',
																'external/bootstrap',
                                'environment'
															 );
    protected $globalCSS = array('external/bootstrap',
																 'custom');

		public function  __construct() {
			parent::__construct();
      $this->setAssets();
		}

    //Funkcje obsługi zasobów JS/CSS
    public function setAssets(){
      foreach ($this->globalJS as $file)
        $this->addJSFile($file);

      foreach ($this->globalCSS as $file)
        $this->addCSSFile($file);
    }
    public function addJSFile($file){
      if(file_exists('./js/'.$file.'.js'))
        $this->js[] = $file.'.js';
      else if(file_exists('./js/'.$file.'.min.js'))
        $this->js[] = $file.'.min.js';
    }
    public function addJSSet($files){
      foreach($files as $file)
	       $this->addJSFile($file);
	  }
    public function addCSSFile($file){
      if(file_exists('./css/'.$file.'.css'))
        $this->css[] = $file.'.css';
      else if(file_exists('./css/'.$file.'.min.css'))
        $this->css[] = $file.'.min.css';
    }
    public function addCSSSet($files){
      foreach($files as $file)
	       $this->addCSSFile($file);
	  }
}
