<?php

class IndexController extends Controller{

	public function __construct()
	{
		
	}

	public function index()
	{
		$user = $this->loadModel('User');
		$user->getUser(3);
		$data['user'] = $user->first();
		$this->loadView('index', $data);

	}

}
