@extends('complains.layout')
@section('content')


&nbsp;

<hr>
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <h2>Complain Create</h2>
            </div>
            &nbsp;
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('complains.create') }}"> Create New Complain</a>
                <a class="btn btn-primary" href="{{ route('home') }}"> Home</a>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table table-hover">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($complains as $complain)

        <tr>

             <td>{{ $complain->id }}</td>

            <td>{{ $complain->name }}</td>

            <td><span style="color:Red;">{{ $complain->detail }}</span></td>

            <td>

                <form action="{{ route('complains.destroy',$complain->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('complains.show',$complain->id) }}">Details Info</a>







                    @csrf

                    <!-- @method('DELETE')


                    <button type="submit" class="btn btn-danger">Delete</button> -->

                </form>

            </td>

        </tr>

        @endforeach

    </table>






@endsection
