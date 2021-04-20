<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



<div class="container-fluid">

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif



<form action="{{ url('update_post') }}" method="post" enctype="multipart/form-data">
	@csrf
<input type="hidden" name="post_id" value="{{ $post->id }}">
  <div class="mb-3">
    <label for="post_title" class="form-label">Post Title</label>
    <input type="text" class="form-control" value="{{ $post->title }}" name="post_title">
    
  </div>
  <div class="mb-3">
    <label for="post_title" class="form-label">Category</label>
    <select name="category_id" class="form-control">
      <option value="">Select Category</option>
      @foreach($categories as $row)
      <option value="{{ $row->id }}" <?php if ($row->id == $post->category_id) echo "Selected";?>  >{{ $row->name }}</option>
      @endforeach
      
    </select>    
  </div>
  
  <div class="mb-3">
    <label for="post_detail" class="form-label">Detail</label>
    
    <textarea  name="post_detail" class="form-control">{{ $post->detail }}</textarea>
  </div>
  <div class="mb-3">
    <label for="" class="form-label" >Post Image</label>
    <input type="file" name="image" class="form-control">
    <br>
    <img src="{{ url('images/'.$post->image) }}" width="150px">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>