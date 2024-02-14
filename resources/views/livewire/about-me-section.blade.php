<div class="container">
    <div class="row section-separator">
        <div class="col-sm-12 col-md-6">
            <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                @if ($user->about_me_picture)
                    <img src="{{ $user->about_me_picture }}" alt="" class="img-fluid">
                @else
                    <img src="{{ 'assets-portfolio/images/ab-img.png' }}" alt="" class="img-fluid">
                @endif
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="mh-about-inner">
                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">About Me</h2>
                @if ($user->about_me)
                    <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->about_me }}</p>
                @else
                    <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Hello, I’m a Patrick, web-developer based on Paris. I have rich experience in web site design & building and customization. Also I am good at</p>
                @endif
                <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <ul>
                        @foreach ($user->technical_skills as $technical_skill)
                            <li><span>{{ $technical_skill->name }}</span></li>
                        @endforeach
                        @foreach ($user->professional_skills as $professional_skill)
                            <li><span>{{ $professional_skill->name }}</span></li>
                        @endforeach
                    </ul>
                </div>
                <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Downlaod CV <i class="fa fa-download"></i></a>
            </div>
        </div>
    </div>
</div>
