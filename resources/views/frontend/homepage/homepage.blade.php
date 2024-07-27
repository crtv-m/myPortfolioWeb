@include('frontend.header.header')


<section class="hero-block">
    <div class="container">
        <div class="hero-block__hello">Hi, my name is</div>
        <h2>Carataev Michael</h2>
        <h3>I build things for the web.</h3>
        <div class="hero-block__description">
            I’m a software engineer specializing in building (and occasionally designing) exceptional digital
            experiences. Currently, I’m focused on building accessible, human-centered products at Upstatement
        </div>
        <a class="btn btn--big" id="open-modal" data-lightbox="inline">Check out my course!</a>
        <div id="canvas-container"></div>
    </div>
</section>


<section id="about">
    <div class="container">
        <div class="title"><h2>About</h2></div>
        <div class="section-content">
            <div>
                <p>Hello! My name is Michael and I enjoy creating things that live on the internet. My interest in web
                    development started back in 2012 when I decided to try editing custom Tumblr themes — turns out
                    hacking together a custom reblog button taught me a lot about HTML & CSS!</p>
                <p>Fast-forward to today, and I’ve had the privilege of working at
                    <a href="https://us.mullenlowe.com/" rel="noopener noreferrer" target="_blank">an advertising agency</a>,
                    <a href="https://starry.com/" rel="noopener noreferrer" target="_blank">a start-up</a>,
                    <a href="https://www.apple.com/" rel="noopener noreferrer" target="_blank">a huge corporation</a>, and
                    <a href="https://scout.camd.northeastern.edu/" rel="noopener noreferrer" target="_blank">a student-led design studio</a>.
                    My main focus these days is building accessible, inclusive products and digital experiences at
                    <a href="https://upstatement.com/" rel="noopener noreferrer" target="_blank">Upstatement</a> for a
                    variety of clients.</p>
                <p>I also recently <a href="https://www.newline.co/courses/build-a-spotify-connected-app" rel="noopener noreferrer" target="_blank">launched a course</a> that covers
                    everything you need to build a web app with the Spotify API using Node & React.</p>
                <p>Here are a few technologies I’ve been working with recently:</p>
            </div>

            <div class="photo">
                <picture>
                    <source media="(min-width: 800px)"
                            data-lazy-srcset="https://herzl.ru/wp-content/themes/herzl_ru/images/hero-image.webp 1x, https://herzl.ru/wp-content/themes/herzl_ru/images/hero-image@2x.webp 2x"
                            srcset="https://novostipmr.com/sites/default/files/field/image/201510/nhfvg.jpg 1x, https://novostipmr.com/sites/default/files/field/image/201510/nhfvg.jpg 2x">
                    <img width="354" height="354"
                         src="https://novostipmr.com/sites/default/files/field/image/201510/nhfvg.jpg" alt="Герцль"
                         title="Carataev Michael" decoding="async"
                         data-lazy-src="https://novostipmr.com/sites/default/files/field/image/201510/nhfvg.jpg"
                         data-ll-status="loaded" class="entered lazyloaded">
                </picture>
            </div>
        </div>
    </div>
</section>


<section id="experience">
    <div class="container">
        <div class="title"><h2>Where I’ve Worked</h2></div>
        @include('frontend.homepage.tab-list')
    </div>
</section>


<section id="work">
    <div class="container">
        <div class="title"><h2>Projects I’ve Developed</h2></div>
        @include('frontend.homepage.projects-list')

        <div class="title">Projects I’ve Developed</div>
        @include('frontend.homepage.github-calendar')
    </div>
</section>


<section id="contact" class="contacts">
    <div class="container">
        <h2>Get In Touch</h2>
        <div class="contacts__description">
            Although I’m not currently looking for any new opportunities, my inbox is always open. Whether you have a question or just want to say hi, I’ll try my best to get back to you!
        </div>

        <a class="btn btn--big btn--center" href="#">Ask me a question!</a>
    </div>
</section>


@include('frontend.footer.footer')
