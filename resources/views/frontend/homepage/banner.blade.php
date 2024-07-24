<!-- Banner Section Starts Here -->
<section class="banner-section" style="background: url({{ asset('assets/frontend/img/frontend/banner/61f118f07f1151643190512.png') }}) repeat-x bottom;">
    <div class="container">
        <div class="banner-wrapper">
            <div class="banner-content">
                <h1 class="title">Get Your Ticket Online, Easy and Safely</h1>
                <a href="/tickets" class="cmn--btn">Get ticket now</a>
            </div>
            <div class="ticket-form-wrapper">
                <div class="ticket-header nav-tabs nav border-0">
                    <h4 class="title">Choose Your Ticket</h4>
                </div>

                @include('frontend.homepage.filter')

            </div>
        </div>
    </div>
    <div class="shape">
        <img src="{{ asset('assets/frontend/img/frontend/banner/busimg-v2@2x.webp') }}" alt="bg">
    </div>
</section>
<!-- Banner Section Ends Here -->
