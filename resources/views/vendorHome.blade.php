

<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<h1>vendor Orders</h1>
<button style="margin:10px;" type="button" class="btn btn-primary" action="/vendorLogout"><a class="btn btn-primary" href="{{ url('/vendorLogout') }}"> logout </a></button>
<button style="margin:10px;" type="button" class="btn btn-primary" action="/makeProduct"><a class="btn btn-primary" href="{{ url('/makeProduct') }}"> Make product </a></button>

<table class="table table-bordered">
  <thead>
    
    <tr>
            <th> id</th>
            <th> order name</th>

        </tr>
 
  </thead>
  <tbody>
  @foreach($orderForVendor as $o)
          <tr>
              <td> {{$o->id}} </td>
              <td> {{$o->name}} </td>
          </tr>
         @endforeach
  </tbody>
</table>



</body>