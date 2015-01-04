<?php 
namespace Authentication;

class AuthController extends \BaseController {

	/**
	 * Display account create
	 *
	 * @return Response
	 */
	public function getAccount()
	{
		return \View::make('auth');
	}
	/**
	 * create account
	 *
	 * @return Response
	 */
	public function postAccount()
	{
		
	}
	/**
	 * display sign in
	 */
	public  function  getSignIn()
	{
		return \View::make('auth');
	}
	/**
	 * sign in
	 */
	public function postSignIn()
	{
		
	}
}
