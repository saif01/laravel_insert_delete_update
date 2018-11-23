<!DOCTYPE html>
<html>
<head>
	<title>All Contacts</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">

		<h1> All Contacts</h1>
		
		<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

	<!-- @foreach($allcontact as $row)
    <tr>
      <th scope="row">{{ $row->id}}</th>
      <td>{{ $row->id}}</td>
      <td>{{ $row->name}}</td>
      <td>{{ $row->email}}</td>
      <td>{{ $row->phone}}</td>
     
      <td>
      	<a href="" class="btn btn-info">Edit</a>
      	<a href="" class="btn btn-danger">Delete</a>
      	<a href="" class="btn btn-primary">View</a>
      </td>
    
    </tr>
    @endforeach -->
    
  </tbody>
</table>

	</div>

</body>
</html>