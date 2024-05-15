<meta name="description" content="{{ $seo->getDescription() ?? '' }}">
<meta name="keywords" content="{{ $seo->getKeywords() ?? '' }}">

<meta name="author" content="Bercut.MD">

<meta property="og:locale" content="{{ app()->getLocale() == 'en' ? 'en_EN' : 'ro_RO' }}">
<meta property="og:locale:alternate" content="{{ app()->getLocale() != 'en' ? 'ro_RO' : 'en_EN' }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $seo->getTitle() ?? settings('site.title') }}">
<meta property="og:description" content="{{ $seo->getDescription() ?? '' }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="@settings('site.title')">
<meta property="og:fb:admins" content="{{ url()->current() }}">
<meta property="og:image" content="{{ $seo->getImage() ?? '' }}">

<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="{{ $seo->getDescription() ?? '' }}">
<meta name="twitter:title" content="{{ $seo->getTitle() ?? settings('site.title') }}">
<meta name="twitter:image" content="{{ $seo->getImage() ?? '' }}">


<meta property="business:contact_data:street_address" content="@settings('site.street_address')">
<meta property="business:contact_data:country_name" content="@settings('site.country')">
<meta property="business:contact_data:locality" content="@settings('site.locality')">
<meta property="business:contact_data:email" content="@settings('site.email')">
<meta property="business:contact_data:phone_number" content="@settings('site.phone')">
<meta property="business:contact_data:website" content="{{ url('') }}">
<meta property="business:contact_data:city" content="@settings('site.city')">

<link rel="canonical" href="{{ url()->current() }}">
<link rel="alternate" hreflang="ro" href="{{ url()->current() }}">

<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="bingbot" content="index, follow">
<meta name="apple-mobile-web-app-title" content="{{ $seo->getTitle() ?? settings('site.title') }}">
<meta name="application-name" content="{{ $seo->getTitle() ?? settings('site.title') }}">

<title>{{ $seo->getTitle() ?? settings('site.title') }}</title>

{!! $seo->getSchema()->resolve() !!}
