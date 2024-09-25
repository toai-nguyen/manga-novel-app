@extends('layouts.app')

@section('content')

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f4f4f4;
    }
</style>

<h1>
    What is your favorite ?
</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Price</th>
            <th>More</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$book -> id}}</td>
            <td>{{$book -> bookTitle}}</td>
            <td>{{$book -> bookAuthor}}</td>
            <td>{{$book -> bookDescription}}</td>
            <td>{{$book -> bookPrice}}</td>
            <td>
                <a href="{{ route('book.show', $book->id) }}">View</a>
                <a href="{{ route('book.edit', $book->id) }}">Update</a>
                <form method="POST" action="{{ route('book.destroy', $book->id) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{  route('book.create') }}">Add your book here</a>
@endsection