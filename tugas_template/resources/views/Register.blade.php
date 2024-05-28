@extends('layout.master')

@section('title')
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
@endsection

@section('content')
<form action="{{ route('welcome') }}" method="post">
    @csrf
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname"><br><br>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname"><br><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" id="man" name="gender" value="Man">
    <label for="man">Man</label><br>
    <input type="radio" id="woman" name="gender" value="Woman">
    <label for="woman">Woman</label><br>
    <input type="radio" id="other" name="gender" value="Other">
    <label for="other">Other</label><br><br>

    <label for="nasional">Nationality:</label>
    <select id="nasional" name="nasional">
        <option value="Indonesian">Indonesian</option>
        <option value="Malaysian">Malaysian</option>
        <option value="Singaporean">Singaporean</option>
    </select><br><br>

    <label for="bahasa">Language speaking:</label><br>
    <input type="checkbox" id="bike" name="bahasa[]" value="Bahasa Indonesia">
    <label for="bike">Bahasa Indonesia</label><br>
    <input type="checkbox" id="car" name="bahasa[]" value="English">
    <label for="car">English</label><br>
    <input type="checkbox" id="boat" name="bahasa[]" value="Arabic">
    <label for="boat">Arabic</label><br>
    <input type="checkbox" id="japanese" name="bahasa[]" value="Japanese">
    <label for="japanese">Japanese</label><br><br>

    <label for="bio">Bio:</label><br>
    <textarea id="bio" name="bio" rows="6" cols="25"></textarea><br><br>

    <button type="submit">Submit</button>
</form>   
@endsection
