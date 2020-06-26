<?php
namespace SM\adapter;
use SM\adapter\BookInterface;
use SM\adapter\eReaderInterface;
/**
 * 
 */
class eReaderAdapter implements BookInterface
{
	private $reader="";
	public function __construct(eReaderInterface $reader)
	{
		$this->reader=$reader;
	}
	public function open()
	{
		$this->reader->turnOn();
	}
	public function turnPage()
	{
		$this->reader->pressNextButton();
	}
}