
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



<div class="container-fluid">

<br>
<table class="table">
  <thead>
    <tr>
     <th scope="row">SL</th>
      <th>Phone</th>
      <th>Customer</th>
     
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @if(!empty($phones))
    @foreach($phones as $row)
    <tr>
      
      <td>{{ $row->id }}</td>
      <td>{{ $row->phone }}</td>
      <td>{{ $row->customer->name }}</td>
      
      
      <td>
        <a href="{{ URL::to('edit/student/'.$row->id) }}" class="btn btn-sm btn-info">  Edit </a>
        <a href="{{ URL::to('delete/student/'.$row->id) }}" class="btn btn-sm btn-danger">  Delete </a>
        <a href="{{ URL::to('view/student/'.$row->id) }}" class="btn btn-sm btn-success">  View </a>
      </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>


</div>