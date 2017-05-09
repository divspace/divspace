<header>
    <div class="top-bar container-fluid">
        <div class="actions">
            <a class="btn hidden-xs" href="mailto:{{ $email }}">
                <i class="fa fa-paper-plane" aria-hidden="true"></i> Hire Me
            </a>
            <a class="btn" href="{{ asset('resume.pdf') }}">
                <i class="fa fa-download" aria-hidden="true"></i> Download My Resume
            </a>
        </div>
        @include('partials.social')
    </div>
    <div class="intro">
        <div class="container text-center">
            <img class="profile-image" src="{{ asset('img/profile-image.png') }}" width="160" height="160" alt="">
            <h1 class="name">Kyle Anderson</h1>
            <div class="title">Web Developer &amp; PHP Programmer</div>
            <div class="profile">
                <p>Multifaceted professional with a passion for the space where technology intersects with human experiences. Offer extensive experience in front- and back-end development, programming, and web design. Leverage a balance of creativity and technical savvy to create elegant code and exceptional user experiences.</p>
            </div>
        </div>
    </div>
    <div class="contact-info">
        <div class="container text-center">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <i class="fa fa-globe"></i>Tempe, AZ</a>
                </li>
                <li class="list-inline-item">
                    <i class="fa fa-envelope"></i><a href="mailto:{{ $email }}">{{ $email }}</a>
                </li>
                <li class="list-inline-item">
                    <i class="fa fa-phone"></i> <a href="tel://{{ $phone }}">{{ $phoneFormatted }}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="page-nav-space-holder hidden-xs">
        <div id="page-nav-wrapper" class="page-nav-wrapper text-center">
            <div class="container">
                <ul id="page-nav" class="nav page-nav list-inline">
                    <li>
                        <a class="scrollto" href="#experience-section">Experience</a>
                    </li>
                    <li>
                        <a class="scrollto" href="#skills-section">Skills</a>
                    </li>
                    <li>
                        <a class="scrollto" href="#contact-section">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
