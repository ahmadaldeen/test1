

<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<h1>vendor Orders</h1>

<table class="table table-bordered">
  <thead>
    
    <tr>
            <th> Prodcut name</th>
            <th> Make Order</th>

        </tr>
 
  </thead>
  <tbody>
  @foreach($products as $p)
          <tr>
              <td>
               {{$p->name}}
                 </td>
              <td>
                <button
                style="margin:10px;" type="button" class="btn btn-primary" action="'/order/'.$p->id.">
                    <a class="btn btn-primary" href="{{ url('/order/' . $p->id) }}"> Make product </a>
                </button>
              </td>

              

          </tr>
         @endforeach
  </tbody>
</table>



</body>