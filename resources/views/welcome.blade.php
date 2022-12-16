@component ('components.front-app')
@section('title')
მთავარი გვერდი
@endsection
  <!-- slideshow content begin -->
  <div class="uk-section uk-padding-remove-vertical">
    <div class="uk-light in-slideshow uk-background-cover uk-background-top-center" style="background-image: url(img/in-liquid-slide-bg.png);" data-uk-slideshow>
        <ul class="uk-slideshow-items">

            <li>
                <div class="uk-container">
                    <div class="uk-grid-medium" data-uk-grid>
                        <div class="uk-width-1-2@s">
                            <div class="uk-overlay">
                                <h1>საიტის დამზადება</h1>
                                <p class="uk-text-lead uk-visible@m">ბრენდის სტილზე მორგებული ვებ-გვერდი, სწრაფი და მორგებული დიზაინით.</p>
                                <a href="/saitebis-damzadeba/" class="uk-button uk-button-default uk-border-rounded uk-visible@s">გაიგე მეტი..</a>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <img class="in-slide-img" src="img/in-lazy.gif" data-src="{{ asset('img/in-liquid-slide-2.svg') }}" alt="image-slide" width="500" height="400" data-uk-img>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-container">
                    <div class="uk-grid-medium" data-uk-grid>
                        <div class="uk-width-1-2@s">
                            <div class="uk-overlay">
                                <h1>საიტის დამზადება</h1>
                                <p class="uk-text-lead uk-visible@m">ბრენდის სტილზე მორგებული ვებ-გვერდი, სწრაფი და მორგებული დიზაინით.</p>
                                <a href="/saitebis-damzadeba/" class="uk-button uk-button-default uk-border-rounded uk-visible@s">გაიგე მეტი..</a>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <img class="in-slide-img" src="img/in-lazy.gif" data-src="{{ asset('img/in-liquid-slide-2.svg') }}" alt="image-slide" width="500" height="400" data-uk-img>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
        <div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m">
            <div class="uk-container">
                <ul class="uk-grid uk-child-width-1-5@m uk-text-center" data-uk-grid>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- slideshow content end -->

<!-- section content begin -->
<div class="uk-section uk-section-secondary in-liquid-10">
    <div class="uk-container uk-light">
        <div class="uk-grid-medium uk-child-width-1-4@m uk-flex uk-flex-middle" data-uk-grid>
            <div>
                <h2>სერვისები</h2>
                <p class="uk-text-lead">ჩვენ გთავაზობთ საუკეთესო მომსახურებას შემდეგი მიმართულებით</p>
                <a class="uk-button uk-button-default uk-border-rounded uk-margin-top" href="/services/">სრული სერვისები<i class="fas fa-angle-right uk-margin-small-left"></i></a>
            </div>
            <div>
                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-text-center">
                    <img class="uk-margin-small-bottom" src="img/in-lazy.gif" data-src="img/in-liquid-icon-16.svg" alt="wave-award" width="72" height="72" data-uk-img>
                    <h3 class="uk-margin-top">Wordpress</h3>
                    <p>გთავაზობთ ერთ-ერთი საუკეთესო კონტენტის მართვის სისტემის მომსახურებას</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-text-center">
                    <img class="uk-margin-small-bottom" src="img/in-lazy.gif" data-src="img/in-liquid-icon-17.svg" alt="wave-award" width="72" height="72" data-uk-img>
                    <h3 class="uk-margin-top">Options</h3>
                    <p>Excepteur sint cupidatat non proident sunt in culpa quina anim officia</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-text-center">
                    <img class="uk-margin-small-bottom" src="img/in-lazy.gif" data-src="img/in-liquid-icon-18.svg" alt="wave-award" width="72" height="72" data-uk-img>
                    <h3 class="uk-margin-top">Multipliers</h3>
                    <p>Excepteur sint cupidatat non proident sunt in culpa quina anim officia</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->

 <!-- section content begin -->
 <div class="uk-section uk-section-muted uk-padding-large in-liquid-17 in-offset-bottom-40">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-1-1@m uk-text-center">
                <h2>Education for all experience levels.</h2>
            </div>
        </div>
        <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-small uk-grid-collapse" data-uk-grid>
                    <div class="uk-width-auto uk-card-media-left uk-flex uk-flex-middle">
                        <img src="img/in-lazy.gif" data-src="img/in-liquid-17-image-1.jpg" width="100" height="100" alt="sample-image" data-uk-img>
                    </div>
                    <div class="uk-width-expand uk-flex uk-flex-middle">
                        <div class="uk-card-body">
                            <h5 class="uk-margin-remove">Webinars and events</h5>
                            <a class="uk-button uk-button-text uk-margin-small-top" href="#">Sign up now<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-small uk-grid-collapse" data-uk-grid>
                    <div class="uk-width-auto uk-card-media-left uk-flex uk-flex-middle">
                        <img src="img/in-lazy.gif" data-src="img/in-liquid-17-image-2.jpg" width="100" height="100" alt="sample-image" data-uk-img>
                    </div>
                    <div class="uk-width-expand uk-flex uk-flex-middle">
                        <div class="uk-card-body">
                            <h5 class="uk-margin-remove">Trading strategy videos</h5>
                            <a class="uk-button uk-button-text uk-margin-small-top" href="#">Watch now<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-small uk-grid-collapse" data-uk-grid>
                    <div class="uk-width-auto uk-card-media-left uk-flex uk-flex-middle">
                        <img src="img/in-lazy.gif" data-src="img/in-liquid-17-image-3.jpg" width="100" height="100" alt="sample-image" data-uk-img>
                    </div>
                    <div class="uk-width-expand uk-flex uk-flex-middle">
                        <div class="uk-card-body">
                            <h5 class="uk-margin-remove">Platform video guides</h5>
                            <a class="uk-button uk-button-text uk-margin-small-top" href="#">Tour the platform<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1">
                <div class="uk-text-center uk-text-small in-border-text">
                    <p><span>Practice Stocks and CFDs trading in a risk-free environment. <a class="uk-button uk-button-small uk-button-primary uk-border-rounded uk-margin-left" href="#">Create demo account<i class="fas fa-angle-right uk-margin-small-left"></i></a></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->



@endcomponent
