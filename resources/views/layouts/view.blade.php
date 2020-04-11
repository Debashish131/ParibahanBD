<html>
<head>

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>
<div style="padding-top :20px">

    <h2 align="center">Complain BOX Details</h2>
    &nbsp;
    <hr>
    <br>
</div>
<div class="container" style="width:800px; margin:0 auto;">

    <table class="table table-dark table-bordered table-hover">
        <thread>
            <tr>
                <th>No</th>

                <th>Name</th>
                <th>NID</th>
                <th>Location</th>
                <th>Complain Type</th>
                <!-- <th>Details</th> -->
            </tr>
        </thread>
        <tbody>
        @foreach($value ?? '' as $val)
              <td>{{$val['id']}}</td>
            <td>{{$val['name']}}</td>
            <td>{{$val['nid']}}</td>
            <td>{{$val['location']}}</td>
            <td>{{$val['type']}}</td>
            <!-- <td>{{$val['details']}}</td> -->

            <td><button><a href="/delete/{{$val['id']}}"> Delete </button></td>



            </tr>

        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
