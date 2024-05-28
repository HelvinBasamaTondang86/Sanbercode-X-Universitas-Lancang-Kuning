@extends('layout.master')


@section('title')
Halaman Welcome
@endsection
   
@section('content')
<h1>Selamat Datang {{ $fname }} {{ $lname }}</h1>
    
<h2>You {{ $gender }}  berbangsa {{ $nasional }} dan berbahasa yang satu {{ implode(', ', $bahasa) }}  {{ $bio }}</h2>


@endsection
 