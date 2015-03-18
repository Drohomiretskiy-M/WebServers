<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {
    
    public $template = 'basic';   
    public function before()
    {
        parent::before();
        View::set_global('title', 'TEST');				
        View::set_global('description', 'Сайт');
        $this->template->up = '';
       $this->template->center = ''; 
        $this->template->down = '';
       // $this->template->registred = '';
       // $this->template->mobile = '';
       // $this->template->contact = '';
      //  $this->template->footer = ''; 
        $this->template->styles = array('bootstrap', 'agency','bootstrap.min');   
        $this->template->scripts = array('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','public/js/jquery-1.11.1.js','public/js/bootstrap.js','public/js/bootstrap-hover-dropdown.js','public/js/jquery.backstretch.js','public/js/wow.js','public/js/retina-1.1.0.js','public/js/jquery.magnific-popup.js','public/flexslider/jquery.flexslider.js','public/js/jflickrfeed.js','public/js/masonry.pkgd.js','http://maps.google.com/maps/api/js?sensor=true','public/js/jquery.ui.map.js','public/js/scripts.js','http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js','public/js/npm.js','public/js/jquery.js');
        
       
    }
    
} // End Common
