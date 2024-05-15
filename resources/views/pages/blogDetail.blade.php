@extends('layouts.app')


@section('content')

    <section class="news-detail padding-top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news-detail__banner">
                        <img src="{{ url('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="news-detail__content">
                        <time datetime="{{ $blog->created_at->format('Y-m-d') }}" class="news-detail__date">
                            {{ $blog->created_at->format('d.m.Y') }}
                        </time>

                        <br>

                        {!! $blog->text !!}
                    </div>
                </div>
                <div class="col-12">
                    <div class="row news-detail__wrapper justify-content-center">

                        @if($blog?->images?->count() > 0)

                            @foreach($blog->images->chunk(3) as $chunk)

                                @foreach($chunk as $image)

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="news-detail__image">
                                            <img src="{{ url('storage/' . $image) }}"
                                                 alt="{{ $blog->title }} Image {{ $loop->iteration }}">
                                        </div>
                                    </div>

                                @endforeach

                            @endforeach

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-detail-others">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <h2>
                            <span>{{ $vars['citeste'] }}</span> {{ $vars['alte_noutati'] }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row news-detail__wrapper">
                @foreach($articles as $article)
                    @include('components.blogItem', ['article' => $article])
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="arrow-btn">
                        <a href="{{ route('blog') }}">
                            {{ $vars['vezi_toate_noutatile'] }}
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12.4976H19" stroke="black" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M12 5.49756L19 12.4976L12 19.4976" stroke="black" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
