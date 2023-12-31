<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Kelompok</title>
    @vite('resources/sass/app.scss')

    <style>
        .container {
          width: 800px;
          margin: 2px;
        }
        .profile {
          display: flex;
          align-items: center;
          margin-bottom: 20px;
        }
        .profile img {
          width: 100px;
          height: 100px;
          border-radius: 50%;
          margin-right: 20px;
        }
        .profile h3 {
          margin: 0;
        }
      </style>
</head>

@extends('layouts.app')

@section('content')
@include('default')
<body>
    <div class="container">
        <div class="profile">
          <img src="{{ Vite::asset('resources/images/profil1.jpeg') }}" alt="Foto Profil">
          <div>
            <b><p>Anggi Aulia Putri</p></b>
          </div>
        </div>

        <div class="profile">
          <img src="{{ Vite::asset('resources/images/profil2.jpeg') }}" alt="Foto Profil">
          <div>
            <b><p>Dewi Nahrisa Amelia</p></b>
          </div>
        </div>

        <div class="profile">
          <img src="{{ Vite::asset('resources/images/profil3.jpeg') }}" alt="Foto Profil">
          <div>
            <b><p>M. Zhahnur Arif</p></b>
          </div>
        </div>

        <div class="profile">
            <img src="{{ Vite::asset('resources/images/profil4.jpeg') }}" alt="Foto Profil">
            <div>
                <b><p>Ridho Rahmatulloh</p></b>
            </div>
          </div>
      </div>
</body>
@endsection
    @vite('resources/js/app.js')
</html>
