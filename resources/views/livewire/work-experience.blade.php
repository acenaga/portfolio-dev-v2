<div class="mh-experience-deatils">
    <!-- Worked Enterprises-->
    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
        @foreach ($experiences as $experience)

        @endforeach
        <h4>{{ $experience->position }} <a href="{{ $experience->url }}">{{ $experience->company_name }}</a></h4>
        <div class="mh-eduyear">{{ $experience->start_date }}-{{ $experience->end_date }}</div>
        <span>Responsibility :</span>
        <ul class="work-responsibility">
            @foreach ($experience->responsa as $item)

            @endforeach
            <li><i class="fa fa-circle"></i>Validate CSS</li>
            <li><i class="fa fa-circle"></i>Project Management</li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod consectetur cumque, minus ex praesentium saepe exercitationem numquam ratione alias facere sit perspiciatis veniam eligendi quis dolores iste natus quae laboriosam.</p>
    </div>
</div>
