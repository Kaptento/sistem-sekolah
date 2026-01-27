<?php
namespace App\controllers;

class StudentController
{

public function index()
{
 echo '<h1>Daftar Siswa</h1>';
        echo '<p>Menampilkan daftar siswa</p>';
        return;
}

public function create()
{
echo '<h1>Tambah Siswa</h1>';
        echo '<p>Menampilkan form tambah siswa</p>' ;
}


}

?>