@extends('/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="pull-left">
                    <h2>Update </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-info" href="{{ route('web_blog_index') }}">Back</a>
                    <a class="btn btn-info" href="{{ route('web_blog_create') }}"> Add New</a>

                </div>

            </div>
        </div>
        <div class="well well-lg">
            <form class="form" method="post" action="{{ route('web_blog_update', $blog) }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label > Title </label>
                    <input type="text" class="form-control" name="title" value="{{ old('title', $blog->title) }}">
                </div>

                <div class="form-group">
                    <label > Content </label>
                    <textarea class="form-control" name="content" rows="6">
                        {{ old('content', $blog->content) }}
                    </textarea>
                </div>

                <div class="pull-left">
                    <input name="" type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>


        </div>
    </div>
@endsection