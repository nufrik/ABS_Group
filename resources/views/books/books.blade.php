@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Список книг') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            @foreach($books as $book)
                                <ul>
                                    <li><a href ="#">{{ $book->title }}</a></li>
                                </ul>
                            @endforeach
                    </div>
                </div>
                <div class="mt-2">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

