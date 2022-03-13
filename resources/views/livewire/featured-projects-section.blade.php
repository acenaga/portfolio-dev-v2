<div class="img-color-overlay">
    <div class="container">
        <div class="row section-separator">
            <div class="section-title col-sm-12">
                <h3>Featured Projects</h3>
            </div>
            <div class="col-sm-12">
                <div class="mh-single-project-slide-by-side row">
                    <!-- Project Items -->
                    @foreach ($projects as $project)
                        <x-featured-project-item :project="$project" />
                    @endforeach
                </div>
            </div>
        </div> <!-- End: .row -->
    </div>
</div>
