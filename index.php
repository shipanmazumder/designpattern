<?php
require "vendor/autoload.php";
use SM\adapter\Book;
use SM\adapter\BookInterface;
use SM\adapter\eReaderAdapter;
use SM\adapter\Kindle;
/**
 * adapter parttern
 */
class Person
{
	public function read(BookInterface $book)
	{
		$book->open();
		$book->turnPage();
	}
}

(new Person)->read(new eReaderAdapter(new Kindle));