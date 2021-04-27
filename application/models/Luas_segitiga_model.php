<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Luas_segitiga_model extends CI_Model {

	private $alas;
	private $tinggi;

	public function set_alas($a)
	{
		$this->alas=$a;
	}

	public function set_tinggi($t)
	{
		$this->tinggi=$t;
	}

	public function get_alas()
	{
		return $this->alas;
	}

	public function get_tinggi()
	{
		return $this->tinggi;
	}

	public function hitung_luas()
	{
		return ($this->alas*$this->tinggi)/2;
	}
 }

