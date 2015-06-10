<?php 
/*
	|--------------------------------------------------------------------------
	| Author Controller
	|--------------------------------------------------------------------------
	|  To get variables via AJAX,
    |  Get author data from DB  
	|  To pass the datas on    
	*/
	class DBController extends BaseController {

		public function update(){
			$validator = Validator::make(
				array(
					'author_id' => Input::get("authorid"),
					'title' =>  Input::get("booktitle"),
					'text' => Input::get("bookinfo")
					),
				array(
					'author_id' => 'required|integer',
					'title' => 'required|max:20',
					'text' => 'required|min:5'
					)
				);
			if($validator->passes()){
				$book = Book::create(array('author_id' => Input::get("authorid"), 'title' => Input::get("booktitle"), 'text' => Input::get("bookinfo")));
				return "true";
			}
			else{
				foreach ($validator->messages()->all() as $message){
					echo $message."<br>";
				}
				}

		

	}
}
