<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #d2b48c; /* Background coklat muda */
    }

    .container {
        max-width: 1200px;
        margin: 20px auto;
    }

    .mb-3 {
        margin-bottom: 15px;
    }

    .mt-2 {
        margin-top: 20px;
    }

    form {
        background: white;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="submit"],
    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #90caf9;
        color: white;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #80caf7;
    }

    h2 {
        text-align: center;
    }

    /* Tombol tambah pengguna di atas tabel */
    .btn-add {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        border-radius: 5px;
        display: inline-block;
        transition: background-color 0.3s ease;
        float: left; /* Ubah dari right ke left */
        margin-bottom: 10px;
    }

    .btn-add:hover {
        background-color: #0069d9;
    }
    h1 {
        text-align: center;  
        margin-top: 20px;    
        font-size: 24px;     
        color: #333;         
    }

    /* Optional: Jika ingin memberi jarak lebih banyak di atas */
    .container {
        margin-top: 40px;    /* Memberi jarak lebih banyak dari atas */
    }



    /* Styling tabel */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px; /* Jarak antara tombol dan tabel */
        background-color: #fff; /* Latar belakang tabel */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan tabel */
        border: 1px solid #000000; /* Garis di sekeliling tabel */
    }

    th, td {
        padding: 10px; /* Ruang di dalam sel */
        text-align: center; /* Rata tengah secara horizontal */
        vertical-align: middle; /* Rata tengah secara vertikal */
        border: 1px solid #000000; /* Garis di setiap sel */
    }

    th {
        background-color: #c8e6c9; /* Latar belakang header hijau muda */
        color: #000000; /* Warna teks header */
    }

    tr:hover {
        background-color: #f5f5f5; /* Efek hover baris */
    }

    td {
        color: #000000; /* Warna teks */
    }

    /* Tombol aksi di dalam tabel */
    .btn {
        display: inline-block;
        padding: 5px 10px;
        text-align: center;
        font-size: 12px;
        border-radius: 4px;
        border: none;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Warna tombol edit */
    .btn-edit {
        background-color: #007bff;
        color: white;
    }

    .btn-edit:hover {
        background-color: #0069d9;
    }

    /* Warna tombol detail */
    .btn-detail {
        background-color: #ffc107;
        color: white;
    }

    .btn-detail:hover {
        background-color: #e0a800;
    }

    /* Warna tombol delete */
    .btn-delete {
        background-color: #dc3545;
        color: white;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    td > .btn {
        margin: 2px; /* Jarak antar tombol */
    }

    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>
