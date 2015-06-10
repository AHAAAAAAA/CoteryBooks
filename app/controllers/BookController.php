<?php 

class BookController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Books Controller
	|--------------------------------------------------------------------------
	|  To route to the Books view,
    |  To get the data from DB,  
	|  To pass the datas on.    
	*/

	public function showBooks()
	{
		/*pulls tables from database for use in views*/
		$authors = Author::with('books')->get();
		
		return View::make('books', ['authors' => $authors]);
	}

}
