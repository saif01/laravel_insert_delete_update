<!DOCTYPE html>
<html>
<head>
	<title>Contacts</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">

		<h1>View Data</h1>
    


    <div class="form-group">
    <label >Name :</label>
    {{$view->name}}
    </div>


  <div class="form-group">
    <label >Email address :</label>
    {{$view->email}}
    
  </div>
  <div class="form-group">
    <label >Phone :</label>
    {{$view->phone}}
    </div>
    <div class="form-group">
    <label > Description :</label>
    {{$view->description}}
    
    </div>

  
	</div>

</body>
</html>