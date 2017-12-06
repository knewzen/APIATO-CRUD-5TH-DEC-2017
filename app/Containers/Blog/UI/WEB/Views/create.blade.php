@extends('/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="pull-left">
                    <h2>Add New </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-info" href="{{ route('web_blog_index') }}">Back</a>
                </div>

            </div>
        </div>
            <div class="well well-lg">
                <form class="form" method="post" action="{{ route('web_blog_store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> Title </label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"> Content </label>
                        <textarea class="form-control" name="content" rows="6"></textarea>
                    </div>

                    <div class="pull-left">
                        <input name="" type="submit" value="Create" class="btn btn-primary">
                    </div>
                </form>


            </div>
    </div>
@endsection