<?php
class AlQuran
{
	public function jenis()
	{
		echo "Jenis Al-Quran Rainbow".PHP_EOL ;
	}
   
	public function harga()
	{
		echo "berharga Rp.90.000,-".PHP_EOL;
	}
}
class Tajwid extends AlQuran
{

	public function harga() 
	{
		echo "berharga Rp.90.000,-".PHP_EOL;
	}
}
$tajwid = new Tajwid();
$tajwid->jenis();
$tajwid->harga();

?>