<?php
class Sekolah{
    var $namasekolah;
    var $kepalasekolah;
    var $jurusan;
    var $jumlah_guru;
    
    function tampilkan_nama(){
      $nama="SMK Makmur Pelajar";
        return "Nama Sekolah saya :".$nama."<br/>";
    $namakepsek="dadang";
        return "Nama kepala sekolah saya :".$namakepsek."<br/>";
      $n="TKR,TSM,RPL";
        return "Nama Jurusan :".$n."<br/>";
    $nam="500";
        return "jumlah guru di sekolah saya :".$nam."<br/>";
    

}
}
$sekolah = new Sekolah();
echo $sekolah->tampilkan_nama();
