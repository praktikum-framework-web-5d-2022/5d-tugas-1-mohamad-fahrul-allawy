@extends('layout.master')
@section('title','Dosen')
@section('menu1','active')

@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1>Dosen</h1>
    <P>Berikut adalah nama Dosen prodi Teknik Informatika Universitas Singaperbangsa Karawang:</p>
    <ul class="list-group">
        <?php
        foreach ($dosen as $dsn) {
            echo "<ol class='list-group-item'>$dsn</ol>";
        }
        ?>
    </ul>
</div>
@endsection