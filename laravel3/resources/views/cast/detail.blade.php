@extends('layouts.master')

@section('title')
Halaman Detail Cast
@endsection

@section('content')

<h1>{{$cast->nama}}</h1>
<p>Umur: {{$cast->umur}}</p>
<p>Bio: {{$cast->bio}}</p>

<a href="/cast" class="btn btn-secondary btn-sm">Kembali</a>

@endsection
