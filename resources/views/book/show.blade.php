@extends('layouts.app')
@section('content')

<h1>Title: {{$book->bookTitle}}</h1>
<p>Author: {{$book->bookAuthor}}</p>
<p>Summary: {{$book->bookDescription}}</p>
<p>Price: {{$book->bookPrice}}</p>

<a href="{{route('book.index')}}">Go back</a>

@endsection