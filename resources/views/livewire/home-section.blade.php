<div class="img-foverlay img-color-overlay">
    <div class="container">
        <div class="row section-separator xs-column-reverse vertical-middle-content home-padding">
            <div class="col-sm-6">
                <div class="mh-header-info">
                    <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        @if ($user->greeting)
                            <span>{{ $user->greeting }}</span>
                        @else
                            <span>Hello I'm</span>
                        @endif
                    </div>
                    @if ($user->name())
                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->name() }}</h2>
                    @else
                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Alex Johnson</h2>
                    @endif

                    @if ($user->profession)
                        <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">{{ $user->profession }}
                        </h4>
                    @else
                        <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">Product Designer</h4>
                    @endif


                    <ul>
                        @if ($user->email)
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i
                                    class="fa fa-envelope"></i><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></li>
                        @else
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i
                                    class="fa fa-envelope"></i><a href="mailto:">getemail@email.com</a></li>
                        @endif

                        @if ($user->phone)
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i
                                    class="fa fa-phone"></i><a href="callto:{{ $user->phone }}">{{ $user->phone }}</a></li>
                        @else
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i
                                    class="fa fa-phone"></i><a href="callto:">+12 986 987 7867</a></li>
                        @endif

                        @if ($user->address)
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i
                                    class="fa fa-map-marker"></i>
                                <address>{{ $user->address }}</address>
                            </li>
                        @else
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i
                                    class="fa fa-map-marker"></i>
                                <address>37, Pollsatnd, New York, United State</address>
                            </li>
                        @endif
                    </ul>

                    <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                        @foreach ($user->social_medias as $social_media)
                            <x-social-media-item :social="$social_media" />
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                    <div class="img-border">
                        @if ($user->profile_photo_path)
                            <img src="{{ $user->profile_picture() }}" alt="" class="img-fluid">
                        @else
                            <img src="{{ asset('assets-portfolio/images/hero.png') }}" alt="" class="img-fluid">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
