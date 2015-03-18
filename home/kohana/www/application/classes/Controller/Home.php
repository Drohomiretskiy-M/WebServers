<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Home extends Controller_Common {
 
   
	
 	 public function action_index()
    {
        
         
         
       $up = View::factory('up');
       $this->template->up = $up; 
       
       $center = View::factory('center');
       $this->template->center = $center; 
       
       $down = View::factory('down');
       $this->template->down = $down; 
    }
}