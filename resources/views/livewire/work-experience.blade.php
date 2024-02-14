<div class="mh-experience-deatils">
    <!-- Worked Enterprises-->
    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
        @foreach ($experiences as $experience)
            <h4>{{ $experience->position }} // <a href="{{ $experience->url }}">{{ $experience->company_name }}</a></h4>
            <div class="mh-eduyear">{{ $experience->start_date }} -- {{ $experience->end_date }}</div>
            <span>Responsibility :</span>
            <ul class="work-responsibility">
                @foreach ($experience->responsibilities as $responsibility)
                    <li><i class="fa fa-circle"></i>{{ $responsibility->description }}</li>
                @endforeach
            </ul>
            <p>{{ $experience->description }}</p>

        @endforeach
    </div>
</div>
