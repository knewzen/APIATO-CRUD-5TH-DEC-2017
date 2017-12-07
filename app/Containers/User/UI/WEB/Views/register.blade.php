@extends('/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="pull-left">
                    <h2>Register </h2>
                </div>

            </div>
        </div>
        <div class="well well-lg">
            <form class="form" method="post" action="{{ route('save_user') }}">
                {{csrf_field()}}
                <div class="form-group">
                    <label > Name </label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label > Email </label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label > Password </label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="pull-left">
                    <input name="" type="submit" value="Register" class="btn btn-primary">
                </div>
            </form>


        </div>
    </div>
@endsection