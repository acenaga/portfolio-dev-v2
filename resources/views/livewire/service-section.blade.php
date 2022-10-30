<div class="container">
    <div class="row section-separator">
        <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <h2>What I do</h2>
        </div>
        @foreach ($services as $service)
            <x-service-item :service="$service"/>
        @endforeach

    </div>
</div>
