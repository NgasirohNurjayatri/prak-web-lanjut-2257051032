@extends ('layouts.app')

@section ('content')

<div class="container">
    <h1 class="text-center">List Data</h1>
    
    <div class="mb-3 mt-2">
        <a href="{{ route('user.create') }}" class="btn btn-add">Tambah Pengguna Baru</a>
    </div>   

    {{-- <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Foto</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['nama'] }}</td>
                <td>{{ $user['npm'] }}</td>
                <td>{{ $user['nama_kelas'] }}</td>
                <td>
                    <img src="{{ asset('img/'. $user->foto) }}" alt="Foto User" width="100">
                </td>
                <td>{{ $user['jurusan'] }}</td>
                <td>{{ $user['semester'] }}</td>
                <td>
                    <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-edit btn-sm">Edit</a>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-detail btn-sm">Detail</a>
                    <button class="btn btn-delete btn-sm" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus user ini?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }">Delete</button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table><br><br> --}}

    <div class="card-container" style="display: flex; flex-wrap: wrap; gap: 1rem;">
        @foreach ($kelas as $user)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/'. $user->foto) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $user->nama }}</strong></h5>
                    <p class="card-text">
                        NPM: {{ $user->npm }}<br>
                        Kelas: {{ $user->nama_kelas }}<br>
                        Jurusan: {{ $user->jurusan }}<br>
                        Semester: {{ $user->semester }}
                    </p>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
