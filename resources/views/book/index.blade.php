@extends('layouts.app')

@section('content')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    
    th {
        background-color: #f4f4f4;
    }

    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a, .pagination span {
        padding: 5px 10px;
        border: 1px solid #ddd;
        color: #333;
        text-decoration: none;
    }

    .pagination .active span {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }
</style>

<h1>What is your favorite?</h1>

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
            <td>{{$book->id}}</td>
            <td>{{$book->bookTitle}}</td>
            <td>{{$book->bookAuthor}}</td>
            <td>{{$book->bookDescription}}</td>
            <td>{{$book->bookPrice}}</td>
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

<a href="{{ route('book.create') }}">Add your book here</a>

@if ($books->hasPages())
    <nav aria-label="Page navigation">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($books->onFirstPage())
                <li class="disabled" aria-disabled="true">
                    <span>&laquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $books->previousPageUrl() }}" rel="prev">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($books->getUrlRange(1, $books->lastPage()) as $page => $url)
                @if ($page == $books->currentPage())
                    <li class="active" aria-current="page">
                        <span>{{ $page }}</span>
                    </li>
                @else
                    <li>
                        <a href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($books->hasMorePages())
                <li>
                    <a href="{{ $books->nextPageUrl() }}" rel="next">&raquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true">
                    <span>&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif

@endsection