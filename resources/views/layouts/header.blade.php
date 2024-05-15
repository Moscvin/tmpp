<header class="header">
    <div class="header--white">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7 col-sm-9">
                    <div class="header__contacts">
                        <ul>
                            <li>
                                <a href="mailto:@settings('site.email')">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 3H15C15.825 3 16.5 3.675 16.5 4.5V13.5C16.5 14.325 15.825 15 15 15H3C2.175 15 1.5 14.325 1.5 13.5V4.5C1.5 3.675 2.175 3 3 3Z"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M16.5 4.5L9 9.75L1.5 4.5" stroke="black" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    @settings('site.email')
                                </a>
                            </li>
                            <li>
                                <a href="tel:@settings('site.phone')">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_109_142)">
                                            <path
                                                d="M16.5001 12.69V14.94C16.5009 15.1488 16.4581 15.3556 16.3745 15.547C16.2908 15.7383 16.168 15.9101 16.0141 16.0513C15.8602 16.1926 15.6785 16.3001 15.4806 16.367C15.2828 16.4339 15.0731 16.4588 14.8651 16.44C12.5572 16.1892 10.3403 15.4006 8.39257 14.1375C6.58044 12.9859 5.04407 11.4496 3.89257 9.63745C2.62506 7.68085 1.83625 5.4532 1.59007 3.13495C1.57133 2.92755 1.59598 2.71852 1.66245 2.52117C1.72892 2.32382 1.83575 2.14247 1.97615 1.98867C2.11654 1.83487 2.28743 1.71198 2.47792 1.62784C2.6684 1.5437 2.87433 1.50015 3.08257 1.49995H5.33257C5.69655 1.49637 6.04942 1.62526 6.32539 1.8626C6.60137 2.09994 6.78163 2.42954 6.83257 2.78995C6.92754 3.51 7.10366 4.217 7.35757 4.89745C7.45848 5.16589 7.48032 5.45764 7.4205 5.73811C7.36069 6.01858 7.22172 6.27603 7.02007 6.47995L6.06757 7.43245C7.13524 9.31011 8.68991 10.8648 10.5676 11.9325L11.5201 10.98C11.724 10.7783 11.9814 10.6393 12.2619 10.5795C12.5424 10.5197 12.8341 10.5415 13.1026 10.6425C13.783 10.8964 14.49 11.0725 15.2101 11.1675C15.5744 11.2188 15.9071 11.4024 16.145 11.6831C16.3828 11.9638 16.5092 12.3221 16.5001 12.69Z"
                                                stroke="black" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_109_142">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    @settings('site.phone')
                                </a>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_109_150)">
                                        <path
                                            d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M9 4.5V9L12 10.5" stroke="black" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_109_150">
                                            <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>
                                    24/24 @settings('guard__unit__phone')
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-3 d-flex justify-content-sm-end d-sm-block d-none">
                    <div class="header__lang-switcher">
                        <ul>
                            @foreach(config('languages.array') as $key => $value)
                                @if($key != app()->getLocale())
                                    <li>
                                        <a href="{{ request()->path() == '' || request()->path() == '/' ? "/$key" : route('set-locale', "$key") }}">
                                            {{ strtoupper($key) }}
                                        </a>
                                    </li>
                                @endif

                                @if($key == app()->getLocale())
                                    <li class="active">
                                        {{ strtoupper($key) }}
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-between header--paddings">
            <div class="col-lg-2 col-6">
                <div class="header__logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-end mobile">
                <div class="header__burger">
                    <span></span>
                </div>
            </div>
            <div class="col-lg-5 desktop">
                <div class="header__nav">
                    <nav>
                        <ul>
                            @include('partials.nav')
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header__menu mobile">
                <div class="container">
                    <nav>
                        <ul>
                            @include('partials.nav')
                            <li>
                                <div class="header__lang-switcher">
                                    <ul>
                                        @foreach(config('languages.array') as $key => $value)
                                            @if($key != app()->getLocale())
                                                <li>
                                                    <a href="{{ request()->path() == '' || request()->path() == '/' ? "/$key" : route('set-locale', "$key") }}">
                                                        {{ strtoupper($key) }}
                                                    </a>
                                                </li>
                                            @endif

                                            @if($key == app()->getLocale())
                                                <li class="active">
                                                    {{ strtoupper($key) }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
