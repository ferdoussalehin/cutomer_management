<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">


			<h3> Student Name: {{$student->name}} </h3>
			<p> <b> Student Email: {{ $student->email }} </b> </p>
			
			<p> Student Phone: {{ $student->phone }} </p>

		</div>
	</div>
</div>