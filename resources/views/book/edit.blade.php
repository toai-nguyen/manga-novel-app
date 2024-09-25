@extends('layouts.app')
@section('content')

<h1>Create page - Edit course</h1>

<form method="POST" action="{{ route('book.update', $book->id) }}">
@csrf
@method('PUT')
    <div>
        <label for="bookTitle">Title</label>
        <input type="text" name="bookTitle" value="{{$book->bookTitle}}" required>
    </div>
    <div>
        <label for="bookAuthor">Author</label>
        <input type="text" name="bookAuthor" value="{{$book->bookAuthor}}" required>
    </div>
    <div>
        <label for="bookDescription">Description</label>
        <input type="text" name="bookDescription" value="{{$book->bookDescription}}"  required>
    </div>
    <div>
        <label for="bookPrice">Price</label>
        <input type="text" name="bookPrice" value="{{$book->bookPrice}}" required>
    </div>
    <button type="submit">Submit</button>
</form>
<a href="{{route('book.index')}}">Go back</a>
@endsection
<style>
        form {
            max-width: 600px;
            margin: auto;
            padding: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        div {
            margin-bottom: 1em;
        }
        label {
            margin-bottom: .5em;
            color: #333333;
            display: block;
        }
        input, textarea {
            border: 1px solid #CCCCCC;
            padding: .5em;
            font-size: 1em;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            padding: 0.7em;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
</style>
