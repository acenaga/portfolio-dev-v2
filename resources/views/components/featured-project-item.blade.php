<div class="col-sm-12 mh-featured-item">
    <div class="row">
        <div class="col-sm-7">
            <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <img src="{{ $project->image }} " alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-sm-5">
            <div class="mh-featured-project-content">
                <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">{{ $project->category }}</h4>
                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">{{ $project->title }}</h2>
                <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">{{ $project->keyword_sentence }}</span>
                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">{{ $project->description }}</p>
                <a target="_blank" href="{{ $project->link }}" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">{{ $project->link_text }}</a>
                <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                    <blockquote>
                        <q>{{ $project->testimonial }}</q>
                        <cite>- {{ $project->testimonial_author }}</cite>
                    </blockquote>
                    <blockquote>
                        <q>{{ $project->testimonial }}</q>
                        <cite>- {{ $project->testimonial_author }}</cite>
                    </blockquote>
                    <blockquote>
                        <q>{{ $project->testimonial }}</q>
                        <cite>- {{ $project->testimonial_author }}</cite>
                    </blockquote>

                </div>
            </div>
        </div>
    </div>
</div>
