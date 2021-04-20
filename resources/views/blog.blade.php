<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<br>
<br>
<div class="container-fluid">

<a href="{{ route('add_category') }}" class="btn btn-danger">Add Category</a>
<a href="{{ route('add_post') }}" class="btn btn-info">Add Post</a>

<br>

	@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


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
        <a href="{{ URL::to('edit/post/'.$row->id) }}" class="btn btn-sm btn-info">  Edit </a>
        <a href="{{ URL::to('delete/post/'.$row->id) }}" class="btn btn-sm btn-danger">  Delete </a>
        <a href="{{ URL::to('view/post/'.$row->id) }}" class="btn btn-sm btn-success">  View </a>
      </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>

{{ $posts->links() }}

</div>