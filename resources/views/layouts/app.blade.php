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

    /* Form Styling */
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

    /* Heading */
    h1, h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    /* Container utama */
    .container {
        margin-top: 30px;
        max-width: 1200px;
        margin: 20px auto;
    }

    /* Tombol Tambah Pengguna */
    .add-btn-container {
        margin-bottom: 20px;
    }

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
        margin-bottom: 10px;
    }

    .btn-add:hover {
        background-color: #0056b3;
    }

    /* Tabel Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border: 1px solid #000000;
    }

    th, td {
        padding: 10px;
        text-align: center;
        vertical-align: middle;
        border: 1px solid #000000;
    }

    th {
        background-color: #c8e6c9;
        color: #000000;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    td {
        color: #000000;
    }

    /* Tombol dalam tabel */
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

    .btn-edit {
        background-color: #007bff;
        color: white;
    }

    .btn-edit:hover {
        background-color: #0069d9;
    }

    .btn-detail {
        background-color: #ffc107;
        color: white;
    }

    .btn-detail:hover {
        background-color: #e0a800;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    td > .btn {
        margin: 2px;
    }

    /* Card Layout */
    .card {
        margin: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        background-color: white;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-img-top {
        width: 95%;
        height: 250px;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
    }

    .card-body {
        padding: 15px;
    }

    .card-text {
        font-size: 1rem;
        color: #333;
        line-height: 1.5;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        margin-right: 10px;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    /* Layout grid untuk card */
    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .col-md-4 {
        flex: 0 0 calc(33.333% - 30px);
        max-width: calc(33.333% - 30px);
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .col-md-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>
