@extends('layouts.front')
@section('title', 'Actualités')
@section('content')

    <div class="page-title page-title-style-02 bkg-img09">
        <div class="pt-mask-light"></div>

        <!-- .container start -->
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <!-- .pt-heading start -->
                    <div class="pt-heading">
                        <h1>Company News</h1>
                    </div><!-- .pt-heading end -->
                </div><!-- .col-md-6 end -->

                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <!-- breadcrumbs start -->
                    <div class="breadcrumb-container clearfix">
                        <ul class="breadcrumb">
                            <li>You are here: </li>

                            <li>
                                <a href="management-index.html">Home</a>
                            </li>

                            <li>
                                <span class="active">News Grid</span>
                            </li>
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style-01 end -->

    <!-- .page-content start -->
    <div class="page-content">

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <ul class="col-md-12 blog-posts blog-grid">

                    @forelse ($blogs as $item)
                    <li class="post-container clearfix">
                        <div class="post-media">
                            <a href="/blog/post/{{ $item->id }}">
                                <img src="/uploads/{{$item->image }}"
                                    alt="{{ $item->nom }}" />
                            </a>
                        </div><!-- .post-media end -->

                        <div class="post-body">
                            <span class="date">{{ $item->created_at }}</span>

                            <a href="/blog/post/{{ $item->id }}">
                                <h3>{{ $item->nom}}</h3>
                            </a>

                            <a href="/blog/post/{{ $item->id }}" class="read-more">
                                Read more
                            </a><!-- .read-more end -->
                        </div><!-- .post-body end -->
                    </li><!-- .post-container end -->
                    @empty

                    @endforelse

                </ul><!-- .col-md-12.blog-posts end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection
