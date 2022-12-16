@component('components.front-app')
    @section('title') კონტაქტი @endsection

    <!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="mybreadcrumb"><a href="/">მთავარი </a> / <a href="/contact/">კონტაქტი</a>  </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb content end -->

  <!-- section content begin -->
  <div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">

            <div class="uk-width-1-1@m uk-margin-large-top">
                <div class="uk-grid uk-grid-large uk-child-width-1-2@m" data-uk-grid>
                    <div>
                        <form id="contact-form" class="uk-form uk-grid-small" data-uk-grid>
                            <div class="uk-width-1-1">
                                <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="სახელი">
                            </div>
                            <div class="uk-width-1-1">
                                <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="ელ. ფოსტა">
                            </div>
                            <div class="uk-width-1-1">
                                <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="თემა">
                            </div>
                            <div class="uk-width-1-1">
                                <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="შეტყობინება"></textarea>
                            </div>
                            <div class="uk-width-1-1">
                                <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" id="sendemail" type="submit" name="submit">გაგზავნა</button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <h4 class="uk-margin-remove-bottom">საკონტაქტო ინფორმაცია</h4>
                        <p class="uk-margin-small-top">_____</p>
                        <div class="uk-flex uk-flex-middle uk-marginf">
                            <div class="uk-margin-small-right">
                                <i class="fas fa-envelope fa-sm in-icon-wrap circle small primary-color"></i>
                            </div>
                            <div>
                                <p class="uk-margin-remove">info@webx.ge</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle uk-margin">
                            <div class="uk-margin-small-right">
                                <i class="fas fa-phone fa-sm in-icon-wrap circle small primary-color"></i>
                            </div>
                            <div>
                                <p class="uk-margin-remove">+995 593 26 26 12</p>
                            </div>
                        </div>
                        <hr class="uk-margin-medium">
                        <h4 class="uk-margin-bottom">Our socials media</h4>
                        <a href="#" class="fab fa-facebook-square fa-lg uk-margin-right"></a>
                        <a href="#" class="fab fa-twitter fa-lg uk-margin-right"></a>
                        <a href="#" class="fab fa-youtube fa-lg uk-margin-right"></a>
                        <a href="#" class="fab fa-instagram fa-lg uk-margin-right"></a>
                        <a href="#" class="fab fa-telegram-plane fa-lg uk-margin-right"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->

@endcomponent
