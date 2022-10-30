<div class="mh-education-deatils">
    <!-- Education Institutes-->
    @foreach ($education as $institute)
    <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
        {{-- {!! $institute->url ? '<h4>'.{{$institute->title }}.'<a href="'.{{$institute->url }} .'">'.{{$institute->institute_name }}.'</a></h4>' : '<h4>'.{{$institute->title }}.'<a href="#">'.{{$institute->institute_name }}.'</a></h4>' !!} --}}
        <h4>{{$institute->title }}<a href="{{ $institute->url }}">{{$institute->institute_name }}</a></h4>
        <div class="mh-eduyear">{{ $institute->start_date }}-{{ $institute->end_date }}</div>
        <p>{{ $institute->description }}</p>
    </div>
    @endforeach
</div>
