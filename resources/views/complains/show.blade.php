@extends('complains.layout')


@section('content')
&nbsp;
<hr>


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Complain</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('complains.index') }}"> Back</a>
                <a class="btn btn-success" href="{{ route('home') }}"> Home</a>

            </div>

        </div>

    </div>



    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">

          <div class="form-group">

              <strong>Name:</strong>

              {{ $complain->name }}

          </div>

      </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>NID:</strong>

                {{ $complain->nid }}

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Location:</strong>

                <span style="color:blue;">{{ $complain->location }}</span>

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Complain type:</strong>

              <span style="color:Red;">{{ $complain->type }}</span>

            </div>

        </div>


                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Details:</strong>
<!-- 
                   <h5 style="color:Tomato;">{{ $complain->detail }}</h5> -->
                   <span style="color:Red;">{{ $complain->detail }}</span>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>#Stay Home #Stay Safe</strong>
                        <br>
                         <strong>We care about <span style="color:Green;">YOU</span></strong>

                           
                    </div>

                </div>

</div>

</div>
    </div>

@endsection
