@extends('complains.layout')




@section('content')
&nbsp;
<hr>
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Complain</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('complains.index') }}"> Back</a>
              <a class="btn btn-success" href="{{ route('home') }}"> Home</a>

        </div>

    </div>

</div>



@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif



<form action="{{ route('complains.store') }}" method="POST">

    @csrf



     <div class="row">


       <div class="col-xs-12 col-sm-12 col-md-12">

           <div class="form-group">

               <strong>Name:</strong>

               <input type="text" name="name" class="form-control" placeholder="Name" required>

           </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>NID:</strong>

                <input type="text" name="nid" class="form-control" placeholder="NID" required onfocusout="f1()" >
                <input type="hidden" name="creator" class="form-control" value="{{   Auth::user()->name  }}">

            </div>

        </div>




        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>location:</strong>

                <!-- <textarea class="form-control" style="height:150px" name="location" placeholder="Location"></textarea> -->
                <div class="wrap-input100 input100-select">
                  <!-- <span class="label-input100">Location</span> -->
                  <div>
                    <select class="selection-2" name="location">
                      <option>Choose</option>
                      <option>Dhaka</option>
                      <option>Mohammadpur</option>
                      <option>Dhanmondi</option>
                      <option>Sukrabad</option>
                      <option>Mirpur</option>
                    </select>
                  </div>
                  <span class="focus-input100"></span>
                </div>
            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Type:</strong>

                <!-- <textarea class="form-control" style="height:150px" name="type" placeholder="Complain Type"></textarea> -->
                <div class="wrap-input100 input100-select">
                  <!-- <span class="label-input100">Location</span> -->
                  <div>
                    <select class="selection-2" name="type">
                      <option>Choose Complain</option>
                      <option>Wrong parking</option>
                      <option>No licence</option>
                      <option>Rough Driving</option>
                      <option>No helmet</option>
                      <option>Made a accident</option>
                    </select>
                  </div>
                  <span class="focus-input100"></span>
                </div>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Detail:</strong>

                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>

@endsection
