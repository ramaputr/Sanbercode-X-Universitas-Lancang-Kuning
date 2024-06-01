@extends('layouts.master')

@section('title')
Halaman Edit Cast
@endsection

@section('content')
<form method="POST" action="/cast/{{$cast->id}}"> 
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf 
    @method("put")
    <div class="form-group">
      <label>Nama Cast</label>
      <input type="text" value="{{$cast->nama}}" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Umur Cast</label>
        <br>
        <select name="umur"><br>
            <option value=""></option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            </select>
    </div>
    <div class="form-group">
      <label>Bio Cast</label>
      <textarea name="bio" class="form-control" cols="30" rows="10">{{$cast->bio}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection