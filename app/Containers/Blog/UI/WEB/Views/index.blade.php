@extends('/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="pull-left">
                    <h2>Blogs </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-info" href="{{ route('web_blog_create') }}"> Add New</a>
                </div>
            </div>
        </div>
            @foreach($blogs as $blog)

                <div class="well well-lg">
                        <h4>{{$blog->title}}</h4>
                        <p> {{$blog->content}}</p>
                        <div class="pull-left">
                            <a class="btn btn-info" href="{{ route('web_blog_show', $blog->id) }}"> View </a>
                        </div>

                </div>
            @endforeach
    </div>
@endsection