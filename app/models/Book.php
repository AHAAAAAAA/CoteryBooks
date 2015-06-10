<?php
class Book extends Eloquent{

   protected $fillable = array('author_id', 'title', 'text');
	public function author(){
		return $this->belongsTo("author");
	}
}