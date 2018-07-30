<html>
<title> New Page </title>
<body>
	<body style="background-color:powderblue;">
	<body style="background-color:powderblue;">
		<center>
			<h1> New Page </h1>
			<a href="{{route('about')}}"> about </a> <br><br>
			<a href="{{route('contact')}}"> contact </a> <br><br>
			<a href="{{route('shoutout', array('text'=> 'a e i u o'))}}"> Shoutout To </a>
			<br><br>



@foreach($names as $name)
<a href="{{route('shoutout', array('text'=>$name))}}">{{$name}}
	</a>
	<br>
	@endforeach

		</center>
	</body>
	</html>