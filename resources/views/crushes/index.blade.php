<center>
<br><br><br><br><br><br><br>
<table border="3" BORDERCOLORLIGHT=YELLOW BORDERCOLORDARK=blue>
<thead>
<tr>
	<td> First Name </td>
	<td> Last Name </td>
	<td> FB Profile </td>
	<td> Contact Number </td>
	<center><td> Actions </td></center>

</thead>
</tbody>
	@foreach($crushes as $crush)
	<tr>
		<td> {{ $crush->first_name       }}</td>
		<td> {{ $crush->last_name        }}</td>
		<td> <a href="https://www.facebook.com/aguilarkarren10">
		     {{ $crush->fb_profile_link  }}</a></td>
		<td> {{ $crush->contact_number   }}</td>
		<td><a href="{{ route('crushes.id.edit', array ('id'=>$crush->id)) }}"> Edit</a>
		<a href="{{ route('crushes.id.destroy', array('id'=>$crush->id)) }}"> Delete</a>
		<a href="{{ route('crushes.id.destroy', array('id'=>$crush->id)) }}"> Show</a></td>

	</tr>
	@endforeach
	<tr>
		<td> </td><td> </td>
		<td> </td><td> </td>
		<td><a href="{{ route('crushes.create') }}"> Add New Crush</a></td>
		
	</tr>
</tbody>
</center>
</table>
