@component('components.front-app')

@section('title') ბლოგი @endsection

<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb"></ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb content end -->


 <!-- section content begin -->
 <div class="uk-section uk-margin-small-top">
    <div class="uk-container">


        <div class="uk-grid" data-uk-grid>
            <div class="uk-width-2-3@m">
                <div class="uk-child-width-1-2@m in-blog-1" data-uk-grid>
                   <!--content blog left--> <div class="uk-width-1-1">

@foreach ($blogs as $blog)


<!--blog article form--> <article class="uk-card uk-card-default uk-border-rounded">
    <div class="uk-card-media-top">
        <img src="/storage/{{ $blog->photo }}" alt="sample-image">
    </div>
    <div class="uk-card-body">
        <h3>
            <a href="/post/{{ $blog->id }}/{{ $blog->slug }}">{{ $blog->title }}</a>
        </h3>
        <p>{!! Str::limit($blog->description, 120) !!}
        </p>
        <div class="uk-flex uk-flex-middle">
            <div class="uk-margin-small-right">
                <img class="uk-border-pill uk-background-muted" src="{{ asset('img/in-team-5.png') }}" alt="image-team" width="24" height="24">
            </div>
            <div>
                <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">
                    <a>admin</a>
                    <span class="uk-margin-small-left uk-margin-small-right">•</span>
                    {{ $blog->updated_at }}
                </p>
            </div>
        </div>
    </div>
    <div class="uk-card-footer uk-clearfix">
        <div class="uk-float-left">
            <a href="#"><span class="uk-label uk-label-success uk-text-small uk-border-pill">{{ optional($blog->blogcategory)->name }}</span></a>
        </div>
        <div class="uk-float-right">
            <a href="/post/{{ $blog->id }}/{{ $blog->slug }}" class="uk-button uk-button-text">დაწვრილებით...<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
        </div>
    </div>
</article> <br>@endforeach<!--blog article form-->


                    </div> <!--content blog left-->





                </div>

                <!-- module pagination begin -->
                <ul class="uk-pagination uk-flex-center uk-margin-medium-top">
                    {{ $blogs->links('pagination::bootstrap-4') }}
                </ul>




                <!-- module pagination end -->
            </div>


            <div class="uk-width-expand@m">
            {{-- SIDEBAR HERE --}}

<!-- widget content begin -->
<aside class="uk-margin-medium-bottom">
    <form class="uk-search uk-search-default uk-width-1-1">
        <a href="" class="uk-search-icon-flip" data-uk-search-icon></a>
        <input class="uk-input uk-border-pill" type="search" placeholder="Search here...">
    </form>
</aside>
<!-- widget content end -->

 <!-- widget content begin -->
 <aside class="uk-margin-medium-bottom">
    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
        <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Categories</h5>
        <ul class="uk-list in-widget-category">
            <li><a href="#">Top stories<span class="uk-label uk-label-success uk-text-small uk-border-pill uk-float-right">2</span></a></li>
            <li><a href="#">Investments<span class="uk-label uk-label-success uk-text-small uk-border-pill uk-float-right">6</span></a></li>
            <li><a href="#">Opinions<span class="uk-label uk-label-success uk-text-small uk-border-pill uk-float-right">3</span></a></li>
            <li><a href="#">Community<span class="uk-label uk-label-success uk-text-small uk-border-pill uk-float-right">4</span></a></li>
            <li><a href="#">News<span class="uk-label uk-label-success uk-text-small uk-border-pill uk-float-right">7</span></a></li>
        </ul>
    </div>
</aside>
<!-- widget content end -->
<!-- widget content begin -->
<aside class="uk-margin-medium-bottom">
    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
        <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Popular</h5>
        <ul class="uk-list in-widget-popular">
            <li>
                <div class="uk-grid-collapse uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-auto">
                        <img class="uk-border-rounded" src="{{ asset('img/in-widget-image-1.jpg') }}" alt="sample-image" width="74" height="74">
                    </div>
                    <div class="uk-width-expand uk-margin-left">
                        <a href="#">Brexit effects may reflect in business ...
                            <span class="uk-article-meta uk-text-small"><br><i class="fas fa-clock fa-sm uk-margin-small-right"></i>Wed Apr 5, 2019</span>
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-grid-collapse uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-auto">
                        <img class="uk-border-rounded" src="{{ asset('img/in-widget-image-2.jpg') }}" alt="sample-image" width="74" height="74">
                    </div>
                    <div class="uk-width-expand uk-margin-left">
                        <a href="#">Investors bet on a quiet tech revolu ...
                            <span class="uk-article-meta uk-text-small"><br><i class="fas fa-clock fa-sm uk-margin-small-right"></i>Tue Apr 15, 2019</span>
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-grid-collapse uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-auto">
                        <img class="uk-border-rounded" src="{{ asset('img/in-widget-image-3.jpg') }}" alt="sample-image" width="74" height="74">
                    </div>
                    <div class="uk-width-expand uk-margin-left">
                        <a href="#">Destructive weed threatens U.S. corn ...
                            <span class="uk-article-meta uk-text-small"><br><i class="fas fa-clock fa-sm uk-margin-small-right"></i>Mon Apr 4, 2019</span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<!-- widget content end -->
            </div>
        </div>
    </div>
</div>

@endcomponent
