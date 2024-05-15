<li class="{{ Route::is('about') ? 'active' : '' }}">
    <a href="{{ route('about') }}">
        {{ $vars['despre_noi'] }}
    </a>
</li>
<li class="{{ Route::is('services') ? 'active' : '' }}">
    <a href="{{ route('services') }}">
        {{ $vars['serviciile_noastre'] }}
    </a>
</li>
<li class="{{ Route::is('blog') ? 'active' : '' }}">
    <a href="{{ route('blog') }}">
        {{ $vars['blog'] }}
    </a>
</li>
<li class="{{ Route::is('contact') ? 'active' : '' }}">
    <a href="{{ route('contact') }}">
        {{ $vars['contacte'] }}
    </a>
</li>
