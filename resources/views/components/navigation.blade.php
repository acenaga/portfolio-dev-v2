<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg mh-nav nav-btn">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#mh-home">Home</a>
                    </li>
                    @foreach ($sections as $section)
                        @if ($section->id === 1 && $section->isActive)
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-about">About</a>
                            </li>
                        @endif

                        @if ($section->id === 2 && $section->isActive)
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-service">Services</a>
                            </li>
                        @endif

                        @if ($section->id === 3 && $section->isActive)
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-featured-project">Featured Project</a>
                            </li>
                        @endif

                        @if ($section->id === 4 && $section->isActive)
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-skills">Skills</a>
                            </li>
                        @endif

                        @if ($section->id === 5 && $section->isActive)
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-experience">Experiences</a>
                            </li>
                        @endif

                        @if ($section->id === 6 && $section->isActive)
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-portfolio">Portfolio</a>
                            </li>
                        @endif

                        @if ($section->id === 7 && $section->isActive)
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-blog">Blog</a>
                            </li>
                        @endif

                        @if ($section->id === 8 && $section->isActive)
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-testimonial">Testimonials</a>
                            </li>
                        @endif

                        @if ($section->id === 9 && $section->isActive)
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-contact">Contact</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</div>
