<div class="container-fluid">

<table class="table">
  <thead>
    <tr>
     <th scope="row">SL</th>
      <th>Category Id</th>
      <th>Title</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @if(!empty($posts))
    @foreach($posts as $row)
    <tr>
      
      <td>{{ $row->id }}</td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->title }}</td>
      <td><img src="{{ URL::to('images/'.$row->image) }}" width ="40px" height="40px"></td>
      <td>
        <a href="{{ URL::to('edit/category/'.$row->id) }}" class="btn btn-sm btn-info">  Edit </a>
        <a href="{{ URL::to('delete/category/'.$row->id) }}" class="btn btn-sm btn-danger">  Delete </a>
        <a href="{{ URL::to('view/category/'.$row->id) }}" class="btn btn-sm btn-success">  View </a>
      </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>

</div>