@extends('layouts.app')

@section('content')

    <section class="news padding-top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <h1>
                            {{ $vars['noutati'] }}
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row news__wrapper">
                @foreach($articles as $article)
                    @include('components.blogItem', ['article' => $article])
                @endforeach
            </div>
        </div>
    </section>

    {{ $articles->links('layouts.pagination') }}

@endsection
