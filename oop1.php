<?php
class Sekolah{
    var $namasekolah;
    var $kepalasekolah;
    var $jurusan;
    var $jumlah_guru;
    
    function tampilkan_nama(){
      $nama="SMK Makmur Pelajar";
        return "Nama Sekolah saya :".$nama."<br/>";
    }
    
    function kepalasekolah(){
    $namakepsek="dadang";
        return "Nama kepala sekolah saya :".$namakepsek."<br/>";
    }
    function tampilkan_jurusan(){
      $n="TKR,TSM,RPL";
        return "Nama Jurusan :".$n."<br/>";
    }
    
    function jumlahguru(){
    $nam="500";
        return "jumlah guru di sekolah saya :".$nam."<br/>";
	    

}
}
$sekolah = new Sekolah();
echo $sekolah->tampilkan_nama();
echo $sekolah->kepalasekolah();
echo $sekolah->tampilkan_jurusan();
echo $sekolah->jumlahguru();
