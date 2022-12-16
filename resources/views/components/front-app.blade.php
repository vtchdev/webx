<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f3f5" />
    <!-- Site Properties -->
    <title>@yield('title') • WEB X</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{ asset('js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{ asset('fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    {{-- Font CDN --}}
    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/alk-sanet/css/alk-sanet.min.css">

    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <!-- header content begin -->
        <div class="uk-section uk-padding-remove-vertical in-header-inner uk-background-cover uk-background-top-center" style="background-image: url({{ asset('img/in-liquid-slide-bg.png') }});">
            <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                            <!-- logo begin -->
                            <a class="uk-logo" href="/">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/in-logo-1.svg') }}" alt="logo" width="160" height="34" data-uk-img>
                            </a>
                            <!-- logo end -->
                            <!-- navigation begin -->
                            <ul class="uk-navbar-nav uk-visible@m">
                                <li><a href="/">მთავარი</a></li>

                                <li><a href="#">სერვისები<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="#">ჰოსტინგი</a></li>
                                            <li><a href="#">ვებ-გვერდის დამზადება</a></li>
                                            <li><a href="#">Wordpress</a></li>
                                            <li><a href="#">ვებ-გვერდის ქირაობა</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="/blog/">ბლოგი</a></li>

                                <li><a href="/about/">ჩვენ შესახებ</a></li>
                                <li><a href="/contact/">კონტაქტი</a></li>

                                <li><a href="#">რესურსი<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li><a href="#">ხელშეკრულება<i class="fas fa-external-link-square-alt fa-sm"></i></a></li>
                                                    <li><a href="#">დახმარება</a></li>
                                                    <li><a href="#">დამკვეთები</a></li>
                                                    <li><a href="#">პარტნიორები</a></li>
                                                    <li><a href="#">დოკუმენტაცია<i class="fas fa-gavel fa-sm"></i></a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li><a class="uk-disabled" href="#">Adipiscing elit sed do eiusmod incididunt ut labore dolore magna lorem ipsum sit dolor amet consectetur</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- navigation end -->
                        </div>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <a href="#" class="uk-button uk-button-primary uk-border-rounded">კონტაქტი</a>
                            <a href="signin.html" class="uk-button uk-button-text"><i class="fas fa-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- header content end -->
    </header>
{{ $slot }}


<footer>
    <!-- footer content begin -->
    <div class="uk-section uk-section-secondary in-footer-feature uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-6@m">
                    <div class="uk-grid uk-child-width-1-3@s" data-uk-grid>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <i class="fas fa-history in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">10 წლინი გამოცდილება</h6>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle uk-flex-center@m">
                            <div class="uk-margin-right">
                                <i class="fas fa-trophy in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">50+ შესრულებული პროექტი</h6>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle uk-flex-right@m">
                            <div class="uk-margin-right">
                                <i class="fas fa-phone-alt in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">24/5 დახმარების ცენტრი</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-background-secondary uk-light">
        <div class="uk-container uk-text-small">
            <div class="uk-child-width-1-2@m" data-uk-grid>
                <div class="in-footer-logo">
                    <img src="img/in-lazy.gif" data-src="{{ asset('img/webx.svg') }}" alt="logo" width="127" height="27" data-uk-img>
                </div>
                <div class="uk-flex uk-flex-right@m">
                    <div class="in-footer-socials">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-telegram-plane"></i></a>
                    </div>
                    <a class="uk-button uk-button-text uk-margin-large-left uk-visible@m" href="#">ბლოგი</a>
                    <a class="uk-button uk-button-text uk-margin-large-left uk-visible@m" href="#">პარტნიორები</a>
                </div>
            </div>
            <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-large-top" data-uk-grid>
                <div>
                    <h5>Markets</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="#">Share CFDs</a></li>
                        <li><a href="#">Forex</a></li>
                        <li><a href="#">Indices</a></li>
                        <li><a href="#">Commodities</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Trading Platforms</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="#">Web platform</a></li>
                        <li><a href="#">Trading apps</a></li>
                        <li><a href="#">MetaTrader 5</a></li>
                        <li><a href="#">Compare features</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Account Types</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="#">Demo account</a></li>
                        <li><a href="#">Standart account</a></li>
                        <li><a href="#">ECN account</a></li>
                        <li><a href="#">Islamic acount</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Learn to Trade</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="#">News and trade ideas</a></li>
                        <li><a href="#">Trading strategy</a></li>
                        <li><a href="#">Forex trading course</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-grid uk-margin-large-top">
                <div class="uk-width-1-1">
                    <p class="uk-heading-line uk-margin-large-bottom"><span>©2023 WEB X ყველა უფლება დაცულია!</span></p>
                    <p class="in-trading-risk">საიტზე გამოქვეყნებული თითოეული გვერდის ინფორმაცია, წარმოადგენს კომპანია WEB X GEORGIA -ს ინტექტუალურ საკუთრებას, მისი დაკოპირება ან ნებისმიერი სხვა დანიშნულებით გამოყენება ნებართვის გარეშე აკრძალულია! </p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content end -->
    <!-- totop begin -->
    <div class="uk-visible@m">
        <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
    </div>
    <!-- totop end -->
</footer>
<!-- Javascript -->
<script src="{{ asset('js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('js/vendors/blockit.min.js') }}"></script>
<script src="{{ asset('js/config-theme.js') }}"></script>
</body>

</html>
