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
            background-color: #d2b48c; /* Mengubah warna background menjadi coklat muda */
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

        table {
            width: 80%;
            border-collapse: collapse; /* Menggabungkan border tabel dan cell */
            margin: 20px auto; /* Pusatkan tabel */
            background-color: #fff; /* Warna latar belakang tabel */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan di sekitar tabel */
            border: 1px solid #000000; /* Garis di sekitar tabel */
        }

        th, td {
            padding: 10px; /* Ruang di dalam sel */
            text-align: center; /* Rata tengah secara horizontal */
            vertical-align: middle; /* Rata tengah secara vertikal */
            border: 1px solid #000000; /* Garis di sekitar setiap sel */
        }

        th {
            background-color: #c8e6c9; /* Warna latar belakang header hijau muda */
            color: #000000; /* Warna teks header */
        }

        tr:hover {
            background-color: #f5f5f5; /* Efek hover untuk baris tabel */
        }

        td {
            color: #000000; /* Warna teks */
        }

        .btn {
            display: inline-block;
            background-color: #a5d6a7; 
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none; 
            font-size: 14px;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 5px;
            border: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
            float: left;
        }

        .btn-warning {
            display: inline-block;
            background-color: #4caf50; /* Hijau untuk tombol detail */
            color: black;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none; /* Menghilangkan garis bawah */
            font-size: 12px;
            border-radius: 4px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        

    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>
