<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #d2b48c;
    }

    .profile-container {
        text-align: left;
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        width: 250px;
    }

    .profile-picture {
        margin-bottom: 20px;
    }

    .profile-picture img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 4px solid #d2b48c;
        display: block;
        margin: 0 auto;
    }

    .profile-info {
        display: flex;
        flex-direction: column;
    }

    .info-item {
        background-color: #90caf9;
        color: #ffffff;
        padding: 10px 15px;
        border-radius: 5px;
        font-weight: bold;
        text-align: left;
        margin: 5px 0; 
    }
    </style>
</head>
<body>
<div class="profile-container">
    <div class="profile-picture">
        <img src="https://i.pinimg.com/originals/20/04/ea/2004ea445bed8d58a9ab9b6a338c9500.jpg" alt="Profil Kartun Wanita">
    </div>
    <div class="info">

        <div class="profile-info">
            <h1>Profil User</h1>
            <p>Nama: {{ $nama }}</p>
            <p>NPM: {{$npm}}</p>
            <p>Kelas: {{ $nama_kelas ?? 'Kelas tidak ditemukan'}}</p>
        </div>
    </div>
</div>
</body>
</html>
