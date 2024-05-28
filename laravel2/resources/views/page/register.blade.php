@extends('layouts.master')
@section('title')
Halaman Biodata
@endsection
@section('content')
<form method="POST" action="/welcome">
    @csrf
    <label>First Name:</label>
    <br>
    
    <input type="text" name="First">
    <br>
    
    <label>Last Name</label> 
    <br>
    
    <input type="text" name="last">
    <br>
    <br>
    <label>Gender:</label> 
    
    <br>
    <input type="radio" value="male" name="gender"> Male<br>
    <input type="radio" value="female" name="gender"> Female<br>
    <input type="radio" value="other" name="gender"> Other<br>
    <br>
    
    <label>Nationality:</label> 

    <select name="natio"><br>
    <option value="Indonesian">Indonesian</option>
    <option value="Singaporean">Singaporean</option>
    <option value="Malaysian">Malaysian</option>
    <option value="Australian">Australian</option>
    </select>
    <br>
    <br>
    <label>Language Spoken:</label> 
    <br>
    
    <input type="checkbox" value="1" name="lang">Bahasa Indonesia
    <br>
    <input type="checkbox" value="2" name="lang">English
    <br>
    <input type="checkbox" value="3" name="lang">Other
    <br>
    <br>
    <label>Bio:</label>
    <br>
    
    <textarea name="bio" rows="8" cols="30"></textarea>
    <br>
    <br>
    <input type="submit" value="kirim">
</form>
@endsection
        
