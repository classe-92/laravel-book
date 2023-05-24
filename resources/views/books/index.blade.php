@extends('layouts.app')

@section('content')
    <section class="container" id="page">
        <h1>Books</h1>
        <div class="row gy-4">
            @foreach ($books as $book)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $book->cover_image }}" alt="{{ $book->title }}" class="card-image-top">
                        <div class="card-body">
                            <h3 class="card-title">
                                {{ $book->title }}
                            </h3>
                            <a href="{{ route('books.show', ['id' => $book->id]) }}" class="btn btn-primary">Go to the
                                book</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



        </ul>
    </section>
@endsection
