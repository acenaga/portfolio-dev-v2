@foreach ($user->posts as $post)
    <div class="col-sm-12 col-md-4">
        <x-blog-card :post="$post" :user="$user" />
    </div>
@endforeach
