@extends('layouts.app')

@section('content')

<h1>Create page - Add course</h1>

<form method="POST" action="{{ route('book.store') }}">
@csrf
    <div>
        <label for="bookTitle">Title</label>
        <input type="text" name="bookTitle" required>
    </div>
    <div>
        <label for="bookAuthor">Author</label>
        <input type="text" name="bookAuthor" required>
    </div>
    <div>
        <label for="bookDescription">Description</label>
        <textarea name="bookDescription" rows="4" required></textarea>
    </div>
    <div>
        <label for="bookPrice">Price</label>
        <input type="text" name="bookPrice" required>
    </div>
    <button type="submit">Submit</button>
</form>
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
