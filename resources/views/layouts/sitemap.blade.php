<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ route('home') }}</loc>
        <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ route('about') }}</loc>
        <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('projects') }}</loc>
        <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('blog') }}</loc>
        <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('contact') }}</loc>
        <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('services') }}</loc>
        <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    @foreach($projects as $project)
        <url>
            <loc>{{ route('project.show', $project->slug) }}</loc>
            <lastmod>{{ $project->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach($services as $service)
        <url>
            <loc>{{ route('service.show', $service->slug) }}</loc>
            <lastmod>{{ $service->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>1</priority>
        </url>
    @endforeach

    @foreach($articles as $article)
        <url>
            <loc>{{ route('blog.show', $article->slug) }}</loc>
            <lastmod>{{ $article->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.7</priority>
        </url>
    @endforeach

{{--    @foreach(config('languages.array') as $key => $language)--}}
{{--        <url>--}}
{{--            <loc>{{ $controller->addLanguage($key, route('home')) }}</loc>--}}
{{--            <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>--}}
{{--            <changefreq>weekly</changefreq>--}}
{{--            <priority>1</priority>--}}
{{--        </url>--}}
{{--        <url>--}}
{{--            <loc>{{ $controller->addLanguage($key, route('about')) }}</loc>--}}
{{--            <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>--}}
{{--            <changefreq>weekly</changefreq>--}}
{{--            <priority>0.9</priority>--}}
{{--        </url>--}}
{{--        <url>--}}
{{--            <loc>{{ $controller->addLanguage($key, route('projects')) }}</loc>--}}
{{--            <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>--}}
{{--            <changefreq>weekly</changefreq>--}}
{{--            <priority>0.9</priority>--}}
{{--        </url>--}}
{{--        <url>--}}
{{--            <loc>{{ $controller->addLanguage($key, route('blog')) }}</loc>--}}
{{--            <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>--}}
{{--            <changefreq>weekly</changefreq>--}}
{{--            <priority>0.9</priority>--}}
{{--        </url>--}}
{{--        <url>--}}
{{--            <loc>{{ $controller->addLanguage($key, route('contact')) }}</loc>--}}
{{--            <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>--}}
{{--            <changefreq>weekly</changefreq>--}}
{{--            <priority>0.9</priority>--}}
{{--        </url>--}}
{{--        <url>--}}
{{--            <loc>{{ $controller->addLanguage($key, route('services')) }}</loc>--}}
{{--            <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>--}}
{{--            <changefreq>weekly</changefreq>--}}
{{--            <priority>0.9</priority>--}}
{{--        </url>--}}

{{--        @foreach($projects as $project)--}}
{{--            <url>--}}
{{--                <loc>{{ $controller->addLanguage($key, route('project.show', $project->slug)) }}</loc>--}}
{{--                <lastmod>{{ $project->updated_at->tz('UTC')->toAtomString() }}</lastmod>--}}
{{--                <changefreq>weekly</changefreq>--}}
{{--                <priority>0.8</priority>--}}
{{--            </url>--}}
{{--        @endforeach--}}

{{--        @foreach($services as $service)--}}
{{--            <url>--}}
{{--                <loc>{{ $controller->addLanguage($key, route('service.show', $service->slug)) }}</loc>--}}
{{--                <lastmod>{{ $service->updated_at->tz('UTC')->toAtomString() }}</lastmod>--}}
{{--                <changefreq>weekly</changefreq>--}}
{{--                <priority>1</priority>--}}
{{--            </url>--}}
{{--        @endforeach--}}

{{--        @foreach($articles as $article)--}}
{{--            <url>--}}
{{--                <loc>{{ $controller->addLanguage($key, route('blog.show', $article->slug)) }}</loc>--}}
{{--                <lastmod>{{ $article->updated_at->tz('UTC')->toAtomString() }}</lastmod>--}}
{{--                <changefreq>weekly</changefreq>--}}
{{--                <priority>0.7</priority>--}}
{{--            </url>--}}
{{--        @endforeach--}}

{{--    @endforeach--}}


</urlset>
