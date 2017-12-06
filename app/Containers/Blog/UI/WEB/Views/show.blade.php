@extends('/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="pull-left">
                    <a href ="{{ route('web_blog_index') }}" >
                    <h2>Blogs </h2>
                    </a>
                </div>

            </div>
        </div>

            <div class="well well-lg">
                    <h4>{{$blog->title}}</h4>
                <p> {{$blog->content}}</p>
                <div class="pull-left">
                    <a class="btn btn-info" href="{{ route('web_blog_edit', $blog->id) }}"> Edit </a>
                </div>
                <div class="pull-right">
                    <form action="{{ route('web_blog_delete', $blog) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
            </div>
    </div>
@endsection