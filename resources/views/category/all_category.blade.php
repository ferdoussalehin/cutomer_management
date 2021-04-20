

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">SL</th>
      <td>Category Name</td>
      <td>Slug</td>
      <td>Created At</td>
    </tr>
    @foreach($categories as $row)
    <tr>
      <th scope="row">2</th>
      <td>{{ $row->id }}</td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->created_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>