<?php 

class AddController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Add Controller
	|--------------------------------------------------------------------------
	|  To route to the Add view,
    |  To get da data from DB,  
	|  To pass the datas on.    
	*/

	public function showAdd()
	{
		/*pulls tables from database for use in views*/
		$authors = Author::with('books')->get();
		
		return View::make('add', ['authors' => $authors]);
	}

}
