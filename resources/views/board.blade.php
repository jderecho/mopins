<b>Input username and pinterest board</b>
<form action="{{ url('pins')}}" method="POST">
	{{ csrf_field() }}
	<input type="text" name="username" placeholder="Username">
	<input type="text" name="board" placeholder="Boards">
	<button type="submit">Submit</button>
</form>