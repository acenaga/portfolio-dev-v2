<div>
    <div class="container">
        <div class="row section-separator">
            <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <h3>Recent Portfolio</h3>
            </div>
            <div class="part col-sm-12">
                <div class="portfolio-nav col-sm-12" id="filter-button">
                    <ul>
                        <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                            <span>All Categories</span>
                        </li>
                        @foreach ($categories as $category)
                            <li data-filter=".{{ $category->name }}" class="wow fadeInUp" data-wow-duration="0.8s"
                                data-wow-delay="0.1s">
                                <span>{{ $category->name }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s"
                    data-wow-delay="0.5s">
                    <div class="portfolioContainer row">
                        @foreach ($portfolio as $item)
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 {{ $item->category->name }}">
                                <figure>
                                    @if(strpos($item->image, "via"))
                                        <img src="{{ $item->image }} " alt="{{ $item->caption }}">
                                    @else
                                    <img src="{{ $item->get_image }} " alt="{{ $item->caption }}">
                                    @endif
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">{{ $item->title }}</h5>
                                        <span class="sub-title">{{ $item->sub_title }}</span>
                                        <a data-fancybox data-src="#{{ $item->category->name }}"></a>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div> <!-- End: .grid .project-gallery -->
                </div> <!-- End: .grid .project-gallery -->
            </div> <!-- End: .part -->
        </div> <!-- End: .row -->
    </div>
    @foreach ($portfolio as $item)
        <div class="mh-portfolio-modal" id="{{ $item->category->name }}">
            <div class="container">
                <div class="row mh-portfolio-modal-inner">
                    <div class="col-sm-5">
                        <h2>{{ $item->title }}</h2>
                        <p>{{ $item->sub_title }}</p>
                        <p>{{ $item->description }}</p>
                        <div class="mh-about-tag">
                            <ul>
                                @foreach ($item->keywords_skills() as $skill)
                                    <li><span>{{ $skill }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <a target="__blank" href="{{ $item->link }}" class="btn btn-fill">Live Demo</a>
                    </div>
                    <div class="col-sm-7">
                        <div class="mh-portfolio-modal-img">
                            @if(strpos($item->image, "via"))
                                <img src="{{ $item->image }}" alt="{{ $item->title }}" class="img-fluid">
                            @else
                                <img src="{{ $item->get_image }}" alt="{{ $item->title }}" class="img-fluid">
                            @endif
                            <p>{{ $item->caption_image }}</p>
                            @foreach ($item->portfolio_images as $img)
                                @if(strpos($item->image, "via"))
                                    <img src="{{ $img->image }} " alt="{{ $item->title }}" class="img-fluid">
                                @else
                                    <img src="{{ $img->get_image }} " alt="{{ $item->title }}" class="img-fluid">
                                @endif
                                <p>{{ $img->caption_image }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
