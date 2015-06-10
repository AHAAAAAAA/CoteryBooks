<?php 

/*
	|--------------------------------------------------------------------------
	| Info Controller
	|--------------------------------------------------------------------------
	|  To get variable via AJAX,
    |  Get book data from DB,  
	|  To pass the data on    
	*/

class InfoController extends BaseController {

	public function getAjax(){

		$idz=Input::get("id");
		echo Book::find($idz)->text;
		}
	}


