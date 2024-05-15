<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer__logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="footer__desc">
                    <p>
                        {{ $vars['footer__text'] }}
                    </p>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-2 offset-md-2 col-md-4">
                <div class="footer__nav">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">
                                {{ $vars['acasa'] }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">
                                {{ $vars['despre_noi'] }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}">
                                {{ $vars['serviciile_noastre'] }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}">
                                {{ $vars['blog'] }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">
                                {{ $vars['contacte'] }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="offset-lg-2 col-lg-2">
                <div class="footer__socials">
                    <h4>
                        {{ $vars['follow'] }}
                    </h4>
                    <ul>
                        <li>
                            <a href="@settings('socials.facebook')">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.0003 3.3335H25.0003C22.7902 3.3335 20.6706 4.21147 19.1078 5.77427C17.545 7.33708 16.667 9.45669 16.667 11.6668V16.6668H11.667V23.3335H16.667V36.6668H23.3337V23.3335H28.3337L30.0003 16.6668H23.3337V11.6668C23.3337 11.2248 23.5093 10.8009 23.8218 10.4883C24.1344 10.1758 24.5583 10.0002 25.0003 10.0002H30.0003V3.3335Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>

                            </a>
                        </li>
                        <li>
                            <a href="@settings('socials.instagram')">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.333 3.3335H11.6663C7.06397 3.3335 3.33301 7.06446 3.33301 11.6668V28.3335C3.33301 32.9359 7.06397 36.6668 11.6663 36.6668H28.333C32.9354 36.6668 36.6663 32.9359 36.6663 28.3335V11.6668C36.6663 7.06446 32.9354 3.3335 28.333 3.3335Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M26.6665 18.95C26.8722 20.3371 26.6353 21.7537 25.9894 22.9984C25.3436 24.243 24.3217 25.2524 23.0692 25.8828C21.8167 26.5132 20.3972 26.7327 19.0128 26.5099C17.6284 26.2871 16.3494 25.6335 15.3579 24.6419C14.3664 23.6504 13.7127 22.3715 13.4899 20.987C13.2672 19.6026 13.4866 18.1832 14.117 16.9306C14.7475 15.6781 15.7568 14.6562 17.0015 14.0104C18.2461 13.3646 19.6628 13.1277 21.0498 13.3333C22.4647 13.5432 23.7746 14.2025 24.786 15.2139C25.7974 16.2253 26.4567 17.5351 26.6665 18.95Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M29.167 10.8335H29.1837" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="@settings('socials.tiktok')">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.333 3.3335H11.6663C7.06397 3.3335 3.33301 7.06446 3.33301 11.6668V28.3335C3.33301 32.9359 7.06397 36.6668 11.6663 36.6668H28.333C32.9354 36.6668 36.6663 32.9359 36.6663 28.3335V11.6668C36.6663 7.06446 32.9354 3.3335 28.333 3.3335Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M26.6665 18.95C26.8722 20.3371 26.6353 21.7537 25.9894 22.9984C25.3436 24.243 24.3217 25.2524 23.0692 25.8828C21.8167 26.5132 20.3972 26.7327 19.0128 26.5099C17.6284 26.2871 16.3494 25.6335 15.3579 24.6419C14.3664 23.6504 13.7127 22.3715 13.4899 20.987C13.2672 19.6026 13.4866 18.1832 14.117 16.9306C14.7475 15.6781 15.7568 14.6562 17.0015 14.0104C18.2461 13.3646 19.6628 13.1277 21.0498 13.3333C22.4647 13.5432 23.7746 14.2025 24.786 15.2139C25.7974 16.2253 26.4567 17.5351 26.6665 18.95Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M29.167 10.8335H29.1837" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="footer__cpry text-start">
                    <p>
                        <span>© Library - Grup 2024.</span> {{ $vars['toate_drepturile_rezervate'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
