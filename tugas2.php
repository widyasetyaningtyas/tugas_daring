<?php
//PHP OOP Part 2  Pengertian Class, Object, Property dan Method
//class hewan
class hewan{
    //property
    var $nama;
    var $jumlah_kaki;
    var $warna_kulit;
    
    //method hewan
    function tampilkan_nama(){
        return "Nama hewan ini sapi <br/>";
    }
    
    function tampilkan_jumlah_kaki(){
        return "Jumlah kakinya ada empat <br/>";
    }
    function tampilkan_warna_kulit(){
        return "Warna kulitnya putih <br/>";
    }

    function __construct(){
        echo "HEWAN YANG ADA DI PASAR HEWAN<br/>";
    }
    
}
//instansiasi class hewan
$hewan = new hewan();
 
//memanggil method tampilkan_nama dari class hewan
echo $hewan->tampilkan_nama();
 
//memanggil method jumlah_kaki dari class hewan
echo $hewan->tampilkan_jumlah_kaki();

//memanggil method warna_kulit dari class hewan
echo $hewan->tampilkan_warna_kulit();
?> 