<section id="contact-section" class="contact-section section">
    <h2 class="section-title">Get In Touch</h2>
    <div class="intro">
        <img class="profile-image" src="{{ asset('img/profile-image.png') }}" width="160" height="160" alt="">
        <div class="dialog">
            <p>I am currently taking on freelance work, contract-to-hire, or a full time position.</p>
            <p><strong>I can help with the following:</strong></p>
            <ul class="list-unstyled service-list">
                <li>
                    <i class="fa fa-check" aria-hidden="true"></i> Backend development with PHP and Laravel
                </li>
                <li>
                    <i class="fa fa-check" aria-hidden="true"></i> Frontend development with jQuery and Bootstrap
                </li>
                <li>
                    <i class="fa fa-check" aria-hidden="true"></i> Server management, hardening, optimization, and upgrades
                </li>
            </ul>
            <p>Drop me a line at <a href="mailto:{{ $email }}">{{ $email }}</a> or call me at <a href="tel://{{ $phone }}">{{ $phoneFormatted }}</a></p>
            @include('partials.social')
        </div>
    </div>
</section>
