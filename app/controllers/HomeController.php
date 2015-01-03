<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		Mail::send('emails.auth.reminder',array('name'=>'Hi,163 owner'),function($message){
			$message->to('fabulous_php@163.com','163')->subject('Test Mail');
		});
		return View::make('home');
	}
}
