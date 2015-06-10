<?php
class Author extends Eloquent{

	public function books(){
		return $this->hasMany("book");
	}

}