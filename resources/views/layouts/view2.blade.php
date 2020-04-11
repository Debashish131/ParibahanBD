<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

<body>
<div style="padding-top :20px">

    <h2 align="center">Register user Details</h2>
    &nbsp;
    <hr>
    <br>
</div>
<div class="container" style="width:800px; margin:0 auto;">

    <table class="table table table-bordered table-hover" id="customers">
        <thread>
            <tr>
                <th>No</th>

                <th>Name</th>
                <th>NID</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Vehicle Number</th>
                <th>Renewal Date</th>
                <th>Expire Date</th>
                <th>Date of birth</th>
                <!-- <th>Details</th> -->
            </tr>
        </thread>
        <tbody>
        @foreach($value ?? '' as $val)
              <td>{{$val['id']}}</td>
            <td>{{$val['name']}}</td>
            <td>{{$val['nid']}}</td>
            <td>{{$val['fathername']}}</td>
            <td>{{$val['mothername']}}</td>
             <td>{{$val['vehiclenumber']}}</td>
            <td>{{$val['renewaldate']}}</td>
            <td>{{$val['expiredate']}}</td>
            <td>{{$val['dob']}}</td>
            <!-- <td>{{$val['details']}}</td> -->

            <td><button><a href="/delete/{{$val['id']}}"> Delete </button></td>



            </tr>

        @endforeach
        </tbody>
    </table>



</div>

</body>
</html>
