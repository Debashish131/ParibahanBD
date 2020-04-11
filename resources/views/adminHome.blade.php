@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hi ! {{ Auth::user()->name }} <br><hr>



                    <a href="/adminview">Show All complain</a><br>
                    <a class="button" href="/adminregview">Show All Register user</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
