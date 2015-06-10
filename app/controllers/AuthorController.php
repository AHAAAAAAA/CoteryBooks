<?php 
/*
	|--------------------------------------------------------------------------
	| Author Controller
	|--------------------------------------------------------------------------
	|  To get variables via AJAX,
    |  Get author data from DB  
	|  To pass the datas on    
	*/
class AuthorController extends BaseController {

	public function getAjax(){
		$idz=Input::get("id");
		foreach(Author::find($idz)->books as $book){
				echo $book->id.'+'.$book->title.'|';
		}
	}

	public function getName(){
		echo Input::get("id");

	}

}
