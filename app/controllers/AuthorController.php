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


	public function getAjax()
	{	$books = DB::table('books')->get();
		$idz=Input::get("id");
		foreach($books as $book){
			if ($book->author_id==$idz){
				echo $book->id.'+'.$book->title.'|';
			}
		}
		return;
	}

}
