@extends('layouts.app')

@section('content')
<div>
    <div class="container ">
        <h1 class="text-center">Input Data</h1>
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br>
 
        <label for="npm">NPM : </label>
        <input type="text" id="npm" name="npm"><br>

        <label for="foto">foto:</label>
        <input type="file" id="foto" name="foto"><br><br>
        
        <label for="kelas">Kelas :</label>
         <select name="kelas_id" id="kelas_id" class="form-control">
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        <br><br>

        <label for="jurusan">Jurusan : </label>
        <input type="text" id="jurusan" name="jurusan"><br>

        <label for="semester">Semester : </label>
        <input type="text" id="semester" name="semester"><br><br>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection