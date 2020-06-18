@extends('layouts.layout_last_header')
@section('content')	
<div class="all-title-box">
		<div class="container text-center">
			<h1>Blog Single<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div>
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">  
                    @if(Count($posts)>0)                     
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                    <div class="col-md-8 offset-md-2">                    
                    @if(isset( $countPosts))    
                    <p class="lead">Posts found {{$countPosts}}</p>
                                    @endif

                    </div>

                    @else 
                                           <p class="lead">Not found</p>
                                           <a href="/blog" class="btn btn-success">Back to blog</a>

                        @endif
                </div>
            </div><!-- end title -->

            <hr class="invis">

            <div class="row">
                 @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
                        <div class="image-blog">
                            <img src="{{Voyager::image( $post->image ) ?? asset('images/blog_1.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="meta-info-blog">
                            <span><i class="fa fa-calendar"></i> <a href="#">{{date('F j, y', strtotime($post->created_at)) }}</a> </span>
                            <span><i class="fa fa-tag"></i> <a href="#">{{$post->name}}</a> </span>
                        </div>
                        <div class="blog-title">
                            <h2><a href="#" title="">{{$post->title}}</a></h2>
                        </div>
                        <div class="blog-desc">
                            <p>{{$post->excerpt}}</p>
                        </div>
                        <div class="blog-button">
							<a class="hover-btn-new orange" href="{{ route('post.show', ['id'=> $post->id]) }}"><span>Read More<span></a>
                        </div>

                    </div>
                </div><!-- end col -->
                @endforeach 




            </div><!-- end row -->
                     

 		
            @if(Count($posts)>0)           
             {{$posts->links()}}
            @endif

        </div><!-- end container -->
    </div><!-- end section -->

 @include("layouts.paralax")
 @endsection