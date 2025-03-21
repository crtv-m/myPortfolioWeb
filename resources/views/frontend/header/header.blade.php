<html lang="en" itemscope="" itemtype="http://schema.org/WebPage">
<body>

        @include('frontend.header.head')

        <!-- Header Section Starts Here -->
        <div class="header active">
            <div class="container--full-width">
                <div class="header__area">
                    <div class="logo">

                        <svg class="logo-svg" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 1190.55 841.89" style="enable-background:new 0 0 1190.55 841.89" xml:space="preserve">
                            <path class="logo-path" d="m846.54 451.96-.17-.42M661.09 565.46l-10.36 25.64-3.07 7.59-19.74 48.9-19.77 48.94-6.32 15.6-5.35 13.25-11.66-28.85-19.77-48.94-12.15-30.06-7.63-18.84-13.63-33.78-6.11-15.12-19.77-48.93-1.76-4.35-18.02-44.55-5.79-14.43-5.84 14.43-19.25 47.65-.49 1.25-19.77 48.93h-130.9l4.42-10.97 15.36-37.96 19.74-48.9 13.8-34.17 5.97-14.73 19.74-48.94 19.77-48.9 3.42-8.46 8.56-21.18 7.76-19.26 19.78-48.94 12.84-31.75 6.93-17.15 17.33-42.86 17.32 42.86L504 176.6l12.42 30.78 19.77 48.94 8.6 21.29 8.11 20.05 3.07 7.56 19.74 48.9 19.77 48.94.8 1.93 5.55 13.77 13.43 33.2 19.74 48.9 15.73 38.96 4.04 9.97zM886.06 549.79H761.44l-12.87-31.85-6.9-17.08-19.78-48.9-7.45-18.5-12.29-30.4-2.52-6.22-17.25-42.72-19.77-48.9-11.88-29.44v-5.62l5.59-13.84 19.78-48.94 19.74-48.9 3.79-9.35 12.29-30.4 16.05 39.75 19.77 48.9.83 2.07 18.91 46.87 9.25 22.88 10.53 26.02 10.21 25.3 9.52 23.6 19.78 48.94 19.6 48.48 19.74 48.9z"/>
                        </svg>

                    </div>

                    <div class="main-menu__wrapper">
                        @include('frontend.header.navigation')
                        <a href="" class="btn">Resume</a>
                        <a href="" class="btn">En</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Header Section Ends Here -->

        {{-- @include('frontend.header.bot') --}}
        @include('frontend.header.additionals')
