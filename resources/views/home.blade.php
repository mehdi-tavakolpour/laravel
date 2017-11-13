<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{ 'convert' }}" method="POST">
	    <input type="hidden" name="_method" value="POST">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	    
		<div >
			<label for="usr">Please enter your Text:</label>
			<input type="text" class="form-control" id="usr" name="orgText" >
		</div>

		<div >
			<label for="usr">Enter names in above text, split them by comma(,):</label>
			<input type="text" class="form-control" id="usr" name="namesText" >
		</div>
				
	 
		<button type="submit" class="btn btn-primary">Send</button>
	</form>
	<br><br><br>
	<span>Result: </span>
	@if(session()->has('message'))

      <span >
          {{ session()->get('message') }}
      </span>
    @endif
</body>
</html>