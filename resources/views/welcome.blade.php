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
                            <img class="in-slide-img" src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/in-liquid-slide-2.svg') }}" alt="image-slide" width="500" height="400" data-uk-img>
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
                            <img class="in-slide-img" src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/in-liquid-slide-2.svg') }}" alt="image-slide" width="500" height="400" data-uk-img>
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
                    <h3 class="uk-margin-top">საიტის დამზადება</h3>
                    <p>თანამედროვე, ბრენდზე მორგებული, ოპტმიზირებული ვებ-გვერდის დამზადება </p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-text-center">
                    <img class="uk-margin-small-bottom" src="img/in-lazy.gif" data-src="img/in-liquid-icon-17.svg" alt="wave-award" width="72" height="72" data-uk-img>
                    <h3 class="uk-margin-top">SEO ოპტიმიზაცია</h3>
                    <p>თანამედროვე, ბრენდზე მორგებული, ოპტმიზირებული ვებ-გვერდის დამზადება </p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-text-center">
                    <img class="uk-margin-small-bottom" src="img/in-lazy.gif" data-src="img/in-liquid-icon-18.svg" alt="wave-award" width="72" height="72" data-uk-img>
                    <h3 class="uk-margin-top">ჰოსტინგი</h3>
                    <p>WEB X თქვენს საიტს გაუწევს ჰოსტინგით უზრუნველყოფას და უსაფრთხოებას </p>
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
                <h2>საინტერესო სტატიები ბლოგიდან</h2>
            </div>
        </div>
        <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-medium-top" data-uk-grid>

     <!-- Blog -->   @foreach ($blogs as $blog)

  <div class="uk-width-1-2@s">
            <div class="uk-inline-clip">
                <a href="/post/{{ $blog->id }}/{{ $blog->slug }}">
                    <img class="uk-border-rounded" src="img/in-lazy.gif" data-src="/storage/{{ $blog->photo }}" alt="sample-image" data-width data-height data-uk-img>
                    <div class="uk-position-bottom uk-overlay uk-overlay-primary">
                        <h4 class="uk-margin-remove">{{ $blog->title }}</h4>
                        <p class="uk-margin-remove uk-text-muted">{{ $blog->Blogcategory->name }}</p>
                    </div>
                </a>
            </div> </div>
            @endforeach
<!-- Blog -->


        </div>
{{-- Blog Place --}}



            </div>
        </div>
    </div>
</div>
<!-- section content end -->


<!-- section content begin -->
<div class="uk-section uk-section-muted in-liquid-5 uk-background-contain uk-background-top-center in-offset-bottom-40" style="background-image: url(img/in-liquid-5-bg.png);">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-5-6@m">
                <div class="uk-text-center">
                    <h4>ტექნოლოგიები, რომლებსაც ვიყენებთ</h4>
                </div>
                <div class="uk-grid-collapse uk-child-width-1-2@s uk-child-width-1-6@m uk-text-center uk-margin-medium in-client-logo-6" data-uk-grid>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{ asset('img/1.png') }}" data-src="{{ asset('img/1.png') }}" alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{ asset('img/code.png') }}" data-src="{{ asset('img/code.png') }}" alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{ asset('img/lara.png') }}" data-src="{{ asset('img/lara.png') }}" alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{ asset('img/shopify.png') }}" data-src="{{ asset('img/shopify.png') }}" alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{ asset('img/sql.png') }}" data-src="{{ asset('img/sql.png') }}" width="50px" alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{ asset('img/open.png') }}" data-src="{{ asset('img/open.png') }}" alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- section content end -->
@endcomponent
