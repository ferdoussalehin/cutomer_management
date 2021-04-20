
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



<div class="container-fluid">

<br>

    @if(!empty($posts))
    @foreach($posts as $row)
    	<div>Name: {{ $row->name }}</div>
    	<div>Email: {{ $row->email }}</div>
      

      	
      	@foreach($row->customer_posts as $post)

      		<div>
      			<p> Post No. {{ $post->id }} </p>
      			<p> Title:  {{  $post->title }}  </p>
            <p> Category:  {{  $post->post_category->category_name }}  </p>
      			 <p> Description:  {{  $post->description }} </p>
      		</div>

      		
      	@endforeach
      	
      <hr>
          
    @endforeach
    @endif




</div>