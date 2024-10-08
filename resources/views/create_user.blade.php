@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br>
 
        <label for="npm">NPM : </label>
        <input type="text" id="npm" name="npm"><br>
        
        <label for="kelas">Kelas :</label>
         <select name="kelas_id" id="kelas_id" class="form-control">
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="foto">foto:</label>
        <input type="file" id="foto" name="foto"><br><br>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection