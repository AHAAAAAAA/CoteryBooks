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


	public function getAjax()
	{	$books = DB::table('books')->get();
		$idz=Input::get("id");
		foreach($books as $book){
			if ($book->id==$idz){ /*matches book id to find info, fix conditional since for loop is redundant*/
				echo $book->text;
			}
		}
		return;
	}

}
