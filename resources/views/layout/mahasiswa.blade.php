@extends('layout.master')
@section('title','Mahasiswa')
@section('menu2','active')


@section('content')
<div class="container fluid text-center mt-3 p-4 bg-white">
    <h1>Mahasiswa</h1>
    <P>Berikut adalah nama Mahasiswa prodi Teknik Informatika Universitas Singaperbangsa Karawang:</p>
    <ul class="list-group">
        <?php
        foreach ($mahasiswa as $mhs) {
            echo "<ol class='list-group-item'>$mhs</ol>";
        }
        ?>
    </ul>
</div>
@endsection