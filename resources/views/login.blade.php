<h1> login </h1>


<form method="post" action="{{url('login')}}">
	@csrf

	<input type="text" name="name"><br><br>
	<input type="text" name="mobile"><br><br>

	<button type="submit">submit</button>
</form>