@extends('/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="pull-left">
                    <h2>Login </h2>
                </div>

            </div>
        </div>
        <div class="well well-lg">
            <form class="form" method="post" action="#">
                <div class="form-group">
                    <label > Email </label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label > Password </label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="pull-left">
                    <input name="" type="submit" value="Login" class="btn btn-primary">
                </div>
            </form>


        </div>
    </div>
@endsection