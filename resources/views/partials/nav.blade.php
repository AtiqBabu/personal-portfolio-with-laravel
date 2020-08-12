<button class="hamberger">
    <img src="{{ asset('images/hamberger.svg') }}" alt="">
</button>

<div class="mobile-nav">
    <button class="times"><img src="./images/times.svg" alt=""></button>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#blog">Blog</a></li>
    </ul>
</div>
<header>
    <div class="container">
        <nav id ="main-nav" class="flex items-center justify-between">
            <div class="left flex items-center">
                <div class="branding">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('about') }}">About</a>
                    <a href="{{ url('services') }}">Service</a>
                    <a href="{{ url('work') }}">Work</a>
                    <a href="{{ url('blog') }}">Blog</a>
                    <a href="{{ url('feedback') }}">Reviews</a>
                </div>
            </div>
            <div class="right">
                <a href="{{ url('contact') }}">
                    <button class="btn btn-primary">Contact</button>
                </a>
            </div>
        </nav>
        <div class="hero flex items-center justify-between">
            <div class="left flex-1 flex justify-center">
                <img src="{{ asset('images/hero.jpg') }}" alt="">
            </div>
            <div class="right flex-1">
                <h6>Atiqur Rahman</h6>
                <h1>I'm a Web Application <span>Developer</span></h1>
                <p>Heartiest Welcome to visit my site. In every phases of my life, I always Wis that, "Experience is the best teacher for human". And my motto is try to keep the mind in horizon to learn new thing and gather new experience.                        </p>
                <div>
                    <a target="_blank" href="https://atiq.hiya-it.com/cv/file/download/atiqur-rahman_2020-05-24%2023:01:39_1590339699.pdf">
                        <button class="btn btn-secondary">DOWNLOAD CV</button>
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>
