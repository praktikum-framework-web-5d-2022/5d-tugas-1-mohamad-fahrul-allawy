@extends('layout.master')
@section('title','Mata Kuliah')
@section('menu3','active')

@section('content')
<div class="container text-center bg-white">
    <h1>Mata Kuliah</h1>
    <P>Berikut adalah mata kuliah prodi Teknik Informatika Universitas Singaperbangsa Karawang:</p>
    <ul class="list-group">
        <?php
        foreach ($matakuliah as $matkul) {
            echo "<ol class='list-group-item'>$matkul</ol>";
        }
        ?>
    </ul>
</div>
@endsection