<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Renewal</title>
  </head>
<style type="text/css">
div.layout {
  text-align: center;
}

div.centre {
  text-align: left;
  width: 200px;
  background-color: #eee;
  display: block;
  margin-left: auto;
  margin-right: auto;
};
}
</style>
  <body>

    <div class="layout">
      <h1 style="color:Tomato;">Welcome to ParibahanBD  </h1><br>
  <h3>Here is your renewal information </h3><br><hr>

          @foreach($value as $val)
      <p> Sir! your driving licence start from : <span style="color:#007f00;">{{$val['renewaldate']}}</span></p><br>
      <p> Your Driving licence will expire : <span style="color:Red;">{{$val['expiredate']}}</p><br>

      @endforeach
           
     
    </div>

  </body>
</html>
