@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Категории') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @foreach($categories as $category)
                        <ul>
                            <li><a href="{{ route('books', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
                                <ul>
                                    <li> {{ $category->description }} </li>
                                </li>
                            </ul>
                        </ul>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
