<!DOCTYPE html>
<html>
<head>
	<title>All Contacts</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">

		<h1>Insert Data</h1>
    
    <form action="{{url('data-update/'$edt->id)}}" method="post">
    	@csrf


    <div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control" value="{{$edt->name}}" >
    </div>


  <div class="form-group">
    <label >Email address</label>
    <input type="email" name="email" class="form-control" value="{{$edt->email}}">
    
  </div>
  <div class="form-group">
    <label >Phone</label>
    <input type="text" name="phone" class="form-control"  value="{{$edt->phone}}">
    </div>
    <div class="form-group">
    <label > Description</label>
    <textarea type="text" name="description" class="form-control" >{{$edt->description}}</textarea>
    
    </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

	</div>

</body>
</html>