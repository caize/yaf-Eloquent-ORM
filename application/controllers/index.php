<?php
use Illuminate\Database\Capsule\Manager as DB;
class IndexController extends AbstractController {
	public function indexAction() {//Ĭ��Action
		$users = UserModel::all()->toArray();
		print_r($users);die();
		//$user = DB::table('infos')->first();
        //print_r($user);die();
		//$this->getView()->assign("content", "Hello Yaf");
	}
}