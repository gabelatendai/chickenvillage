@extends('layouts.app')

@section('content')  <br>
@include ('layouts.side_bar')

    <div class="col-md-8 pull-right">
<div class="container">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! gabelaa
                </div>
            </div>
        </div>
    </div>
</div></div></div>
@endsection
