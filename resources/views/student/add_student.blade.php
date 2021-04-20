<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



<div class="container-fluid">

<br>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<br>

<form action="{{ url('insert_student') }}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="mb-3">
    <label for="name" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="" name="name">
    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Student Email</label>
    <input type="text" class="form-control" id="" name="email">
  </div>
  
  <div class="mb-3">
    <label for="phone" class="form-label">Student Phone</label>
    
    <input type="text" class="form-control" id="" name="phone">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<table class="table">
  <thead>
    <tr>
     <th scope="row">SL</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @if(!empty($students))
    @foreach($students as $row)
    <tr>
      
      <td>{{ $row->id }}</td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->email }}</td>
      <td>{{ $row->phone }}</td>
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