<?php
//class hewan
class hewan{
	//property
	var $nama;
	var $kaki;

	//method construct di jalankan pertama kali
	function __construct(){
		echo "ini adalah isi menthod construct atau di jalankan pertama kali <br/>";
	}

	//menthod construct di jalankan terakhir
	function __destruct(){
		echo "ini adalah isi menthod destruct atau di jalankan terakhir <br/>";
	}

	//menthod hewan
	function tampilkan_nama(){
		return "nama saya sapi <br/>";
	}
 }
//instansiasi class hewan
$hewan = new hewan();

//memanggil menthod tampilkan_nama dari class manusia
echo $hewan->tampilkan_nama();
?>