@extends('layouts.portfolio')

@section('content')

    {{-- Navigation --}}
    <header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav" id="mh-header">
        <div class="overlay"></div>

        <x-navigation :sections="$sections"/>
    </header>

    {{-- Home --}}
    <section class="mh-home image-bg home-2-img" id="mh-home">
        <livewire:home-section>
    </section>

    @foreach ($sections as $section)
        @if ($section->id === 1 && $section->isActive)
            {{-- About --}}
            <section class="mh-about" id="mh-about">
                <livewire:about-me-section>
            </section>

        @endif

        @if ($section->id === 2 && $section->isActive)
            {{-- Service --}}
            <section class="mh-service" id="mh-service">
                <livewire:service-section>
            </section>
        @endif


        @if ($section->id === 3 && $section->isActive)
            {{-- Featured Projects --}}
            <section class="mh-featured-project image-bg featured-img-one" id="mh-featured-project" >
                <livewire:featured-projects-section>
            </section>
        @endif

        @if ($section->id === 4 && $section->isActive)
            {{-- Skills --}}
            <section class="mh-skills" id="mh-skills">
                <livewire:skills>
            </section>
        @endif

        @if ($section->id === 5 && $section->isActive)
            {{-- Experiences --}}
            <section class="mh-experince image-bg featured-img-one" id="mh-experience">
                <div class="img-color-overlay">
                    <div class="container">
                        <div class="row section-separator">
                            <div class="col-sm-12 col-md-6">
                                <div class="mh-education">
                                    <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Education</h3>
                                    <livewire:education-experience>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="mh-work">
                                    <h3>Work Experience</h3>
                                    <livewire:work-experience>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if ($section->id === 6 && $section->isActive)
            {{-- Portfolio --}}
            <section class="mh-portfolio" id="mh-portfolio">
                <livewire:portfolio-section>
            </section>
        @endif

        @if ($section->id === 7 && $section->isActive)
            {{-- Blog --}}
            <section class="mh-blog image-bg featured-img-two" id="mh-blog">
                <div class="img-color-overlay">
                    <div class="container">
                        <div class="row section-separator">
                            <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <h3>Featured Posts</h3>
                            </div>
                            <livewire:featured-post>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if ($section->id === 8 && $section->isActive)
            {{-- Testimonials --}}
            <section class="mh-testimonial" id="mh-testimonial">
                <div class="home-v-img">
                    <div class="container">
                        <div class="row section-separator">
                            <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <h3>Client Reviews</h3>
                            </div>
                            <livewire:clients-reviews>
                        </div>
                    </div>
                </div>
            </section>

        @endif

        @if ($section->id === 9 && $section->isActive)
            {{-- Footer --}}
            <footer class="mh-footer mh-footer-3" id="mh-contact">
                <div class="container-fluid">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Contact Me</h3>
                        </div>
                        <div class="map-image image-bg col-sm-12">
                            <div class="container mt-30">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 mh-footer-address">
                                        <div class="col-sm-12 xs-no-padding">
                                            <div class="mh-address-footer-item dark-bg shadow-1 media wow fadeInUp"
                                                data-wow-duration="0.8s" data-wow-delay="0.2s">
                                                <div class="each-icon">
                                                    <i class="fa fa-location-arrow"></i>
                                                </div>
                                                <div class="each-info media-body">
                                                    <h4>Address</h4>
                                                    <address>
                                                        {{ $user->address }}
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 xs-no-padding">
                                            <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp"
                                                data-wow-duration="0.8s" data-wow-delay="0.4s">
                                                <div class="each-icon">
                                                    <i class="fa fa-envelope-o"></i>
                                                </div>
                                                <div class="each-info media-body">
                                                    <h4>Email</h4>
                                                    <a href="mailto:{{ $user->email }}">{{ $user->email }}</a><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 xs-no-padding">
                                            <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp"
                                                data-wow-duration="0.8s" data-wow-delay="0.6s">
                                                <div class="each-icon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <div class="each-info media-body">
                                                    <h4>Phone</h4>
                                                    <a href="callto:{{ $user->phone }}">{{ $user->phone }}</a><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <form id="contactForm" class="single-form quate-form wow fadeInUp" data-toggle="validator">
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input name="name" class="contact-name form-control" id="name"
                                                        type="text" placeholder="First Name" required>
                                                </div>

                                                <div class="col-sm-12">
                                                    <input name="name" class="contact-email form-control" id="L_name"
                                                        type="text" placeholder="Last Name" required>
                                                </div>

                                                <div class="col-sm-12">
                                                    <input name="name" class="contact-subject form-control" id="email"
                                                        type="email" placeholder="Your Email" required>
                                                </div>

                                                <div class="col-sm-12">
                                                    <textarea class="contact-message" id="message" rows="6" placeholder="Your Message" required></textarea>
                                                </div>

                                                <!-- Subject Button -->
                                                <div class="btn-form col-sm-12">
                                                    <button type="submit" class="btn btn-fill btn-block" id="form-submit">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s"
                                        data-wow-delay="0.2s">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="text-left text-xs-center">
                                                    <p><a target="_blank" href="templateshub.net">Templates Hub</a></p>
                                                    <p><a target="_blank" href="https://laravel.com">Powered by Laravel <i class="fab fa-laravel fa-lg"></i></p>
                                                    <p><a target="_blank" href="https://digitalocean.com">Powered by Digital Ocean <i class="fab fa-digital-ocean fa-lg"></i></p>
                                                    <p><a target="_blank" href="https://cloudflare.com">Powered by Cloudflare <i class="fab fa-cloudflare fa-lg"></i></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="social-icon">
                                                    @foreach ($user->social_medias as $social_media)
                                                        <x-social-media-item :social="$social_media" />
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        @endif

    @endforeach
@endsection
