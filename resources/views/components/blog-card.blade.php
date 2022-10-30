<div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
    <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="img-fluid">
    <div class="blog-inner">
        <h2><a href="blog-single.html">{{ $post->title }}</a></h2>
        <div class="mh-blog-post-info">
            <ul>
                <li><strong>Post On</strong><a href="#">{{ $post->updated_at }}</a></li>
                <li><strong>By</strong><a href="#">{{ $user->name }}</a></li>
                <li><strong>Category</strong><a href="#">Categorias</a></li>
            </ul>
        </div>
        <p>{{ $post->excerpt }}</p>
        <a href="#">Read More</a>
    </div>
</div>
