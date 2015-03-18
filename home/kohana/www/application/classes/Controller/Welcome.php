<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Page extends Controller_Template {
 
    // Определяем шаблон по умолчанию
    public $template = 'main';
	
 	 public function action_main()
    {
        $content = View::factory('/pages/mainp');
        $this->template->title = 'Головна';
        $this->template->description = 'Головна сторінка';
        $this->template->content = $content;
    }
}