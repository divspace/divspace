<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ config('app.name') }}</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" charset="utf-8">
    </head>
    <body>
        <header>
            <div class="top-bar container-fluid">
                <div class="actions">
                    <a class="btn hidden-xs" href="mailto:kyle@divspace.com">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i> Hire Me
                    </a>
                    <a class="btn" href="{{ asset('resume.pdf') }}">
                        <i class="fa fa-download" aria-hidden="true"></i> Download My Resume
                    </a>
                </div>
                <ul class="social list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/divspace/">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com/divspace">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="http://stackoverflow.com/cv/kyle-anderson">
                            <i class="fa fa-stack-overflow" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/divspace">
                            <i class="fa fa-github-alt" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
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
                            <i class="fa fa-envelope"></i><a href="mailto:kyle@divspace.com">kyle@divspace.com</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-phone"></i> <a href="tel://+14804344675">+1 480 434 4675</a>
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
        <div class="wrapper container">
            <section id="experience-section" class="experiences-section section">
                <h2 class="section-title">Professional Experience</h2>
                <div class="timeline">
                    <div class="item">
                        <div class="work-place">
                            <h3 class="place">Privoro</h3>
                            <div class="location">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>Tempe, AZ
                            </div>
                        </div>
                        <div class="job-meta">
                            <div class="title">PHP Programmer</div>
                            <div class="time">July 2016 &ndash; April 2017</div>
                        </div>
                        <div class="job-desc">
                            <ul>
                                <li>Increased security and reduced development time by converting existing website to Laravel</li>
                                <li>Reduced page load time from 6.9 to 2.1 seconds by switching the server stack from Apache, MySQL, and PHP 5.4 on HTTP/1.1 to Nginx, MariaDB, and PHP 7.1 on HTTP/2</li>
                                <li>Provided instant updates and easier management for non-systems administrators by adding Laravel Forge for server management and Laravel Envoyer for zero downtime deployment</li>
                                <li>Reduced server and support costs by migrating from Amazon Web Services (AWS) to DigitalOcean</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work-place">
                            <h3 class="place">Moses, Inc.</h3>
                            <div class="location">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>Phoenix, AZ
                            </div>
                        </div>
                        <div class="job-meta">
                            <div class="title">Web Developer</div>
                            <div class="time">January 2016 &ndash; May 2016</div>
                        </div>
                        <div class="job-desc">
                            <ul>
                                <li>Reduced initial setup time for new projects from 3-5 days to 4 hours by creating a custom WordPress boilerplate framework, theme, and auto-deploying virtual environment</li>
                                <li>Created the development and deployment process by adding task automation, unit and style testing, and Continuous Integration (CI)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work-place">
                            <h3 class="place">Media Solutions</h3>
                            <div class="location">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>Chandler, AZ
                            </div>
                        </div>
                        <div class="job-meta">
                            <div class="title">Programmer</div>
                            <div class="time">July 2015 &ndash; November 2015</div>
                        </div>
                        <div class="job-desc">
                            <ul>
                                <li>Increased productivity for existing development team by introducing Gulp for task automation, Bower for managing JavaScript libraries, and Sass for improved readability and organization for CSS</li>
                                <li>Reduced development time and errors by refactoring the existing codebase using the DRY principle, creating repositories, transformers, presenters, decorators, and view composers</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work-place">
                            <h3 class="place">SmartSource</h3>
                            <div class="location">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>New York, NY
                            </div>
                        </div>
                        <div class="job-meta">
                            <div class="title">Chief Technology Officer</div>
                            <div class="time">September 2014 &ndash; April 2015</div>
                        </div>
                        <div class="job-desc">
                            <ul>
                                <li>Designed the web hosting department's technical infrastructure using Amazon Web Services (AWS), implementing server hardening and security and identifying a billing / payment processing solution</li>
                                <li>Established a social media presence and high-ROI digital marketing strategy, including PPC, SEM, SMM, SEO, and email campaign, averaging a 28% open rate and 16% click-through rate</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work-place">
                            <h3 class="place">Crucial Hosting</h3>
                            <div class="location">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>Queen Creek, AZ
                            </div>
                        </div>
                        <div class="job-meta">
                            <div class="title">Co-Founder</div>
                            <div class="time">May 2006 &ndash; August 2014</div>
                        </div>
                        <div class="job-desc">
                            <ul>
                                <li>Established and managed daily business aspects, from infrastructure development and maintenance to customer acquisition, web design and development, and technical support</li>
                                <li>Grew Crucial into $1MM+ in annual revenues through targeted marketing, consistent infrastructure modernization, and providing outstanding user experiences</li>
                                <li>Wrote blog and knowledgebase articles to help clients and increase online presence, earning prominent placement in search and industry publications, such as <em>Smashing Magazine</em> and <em>A List Apart</em></li>
                                <li>Established Crucial as the industry's most prominent hosting provider for Magento, serving as a technical product expert and benchmark for performance and optimization</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work-place">
                            <h3 class="place">B&amp;D Litho</h3>
                            <div class="location">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>Phoenix, AZ
                            </div>
                        </div>
                        <div class="job-meta">
                            <div class="title">IT Manager</div>
                            <div class="time">August 2001 &ndash; May 2002</div>
                        </div>
                        <div class="job-desc">
                            <ul>
                                <li>Increased efficiency for the creative department by developing an online presence that allowed clients to upload media files directly via the website</li>
                                <li>Reduced time spent from the accounting department by allowing employees in satellite offices to connect directly to the Phoenix office via VPN to clock in and out and directly access the mainframe</li>
                                <li>Provided general technical support, such as wiring buildings with CAT5, rebuilding computers, and fixing common software and hardware issues</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="skills-section" class="skills-section section text-center">
                <h2 class="section-title">Select Technical Skills</h2>
                <div class="top-skills">
                    <h3 class="subtitle">Top Skills</h3>
                    <div class="row">
                        <div class="item col-xs-12 col-sm-4">
                            <div class="item-inner">
                                <h4 class="skill-name">PHP / HTML / CSS</h4>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-sm-4">
                            <div class="item-inner">
                                <h4 class="skill-name">Laravel / jQuery / Bootstrap</h4>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-sm-4">
                            <div class="item-inner">
                                <h4 class="skill-name">Systems Administration</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="other-skills">
                    <h3 class="subtitle">Other Skills</h3>
                    <div class="misc-skills">
                        <span class="skill-tag">Bash</span>
                        <span class="skill-tag">Bower</span>
                        <span class="skill-tag">Git</span>
                        <span class="skill-tag">Gulp</span>
                        <br>
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">Perl</span>
                        <span class="skill-tag">SCSS</span>
                        <span class="skill-tag">WordPress</span>
                    </div>
                </div>
            </section>
            <section id="contact-section" class="contact-section section">
                <h2 class="section-title">Get In Touch</h2>
                <div class="intro">
                    <img class="profile-image" src="{{ asset('img/profile-image.png') }}" width="160" height="160" alt="">
                    <div class="dialog">
                        <p>I am currently taking on freelance work, contract-to-hire, or a full time position.</p>
                        <p><strong>I can help with the following:</strong></p>
                        <ul class="list-unstyled service-list">
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i> Back-end development with PHP and Laravel
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i> Front-end development with Bootstrap and jQuery
                            </li>
                        </ul>
                        <p>Drop me a line at <a href="mailto:kyle@divspace.com">kyle@divspace.com</a> or call me at <a href="tel://+14804344675">+1 480 434 4675</a></p>
                        <ul class="social list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/in/divspace/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/divspace">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://stackoverflow.com/cv/kyle-anderson">
                                    <i class="fa fa-stack-overflow" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://github.com/divspace">
                                    <i class="fa fa-github-alt" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="container">
                <small class="copyright">Copyright &copy; {{ date('Y') }}</small>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}" type="text/javascript" charset="utf-8" async defer></script>
    </body>
</html>
