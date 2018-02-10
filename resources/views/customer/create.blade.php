@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New customer</div>
                    <div class="panel-body">
                        <a href="{{ url('/customer') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/customer') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('customer.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
