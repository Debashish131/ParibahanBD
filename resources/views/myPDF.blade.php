<!DOCTYPE html>

<html>

<head>

	<title>Hi</title>

</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>

<body>

	<h1 style="color:Tomato;">Welcome to ParibahanBD - {{$name}} </h1>
	<h3>Here is the online PDF for your temporary Licence </h3>
<hr>
	<div class="bs-example">
    <table class="table" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th>    NID          </th>
                <th> &nbsp;   Name       </th>
                <th>Date Of Birth    </th>
                <th>Email</th>
                <th>Vehicle number</th>
                <th>Renew Date</th>
                 <th>Expire Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $nid }}</td>
                <td>{{$name}}</td>
                <td>{{ $dob }}</td>
                <td>{{ $email }}</td>
                <td>{{ $vehiclenumber }}</td>
                <td>{{ $renewaldate }}</td>
                <td>{{ $expiredate }}</td>
                
            </tr>
                   
        </tbody>
    </table>
</div>
</body>

</html>
