<a href="{{ route('blog.show', $article) }}" class="col-lg-3 col-md-4 col-sm-6 col-12">
    <article class="news__item">
        <div class="news__image">
            <img src="{{ url('storage/' . $article->image) }}" alt="{{ $article->title }}">
        </div>
        <time class="news__date" datetime="{{ $article->created_at->format('Y-m-d') }}">
            {{ $article->created_at->format('d.m.Y') }}
        </time>
        <div class="news__content">
            <p>
                {{ $article->short_description }}
            </p>
        </div>
        <div class="news__arrow">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M4 12H18" stroke="black" stroke-width="2" stroke-linecap="square"
                      stroke-linejoin="round"/>
                <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2"
                      stroke-linecap="square" stroke-linejoin="round"/>
            </svg>
        </div>
    </article>
</a>
