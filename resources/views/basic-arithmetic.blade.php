




@php
$op = "";
$number1 = "";
$number2 = "";
$answer = "";
@endphp
@if($operator == "mul")

	@php
	$op = "MULTIPLIACTION";
	$number1 = "Multiplicand".": ".$n1;
	$number2 = "Multiplier".": ".$n2;
	$answer = "Product".": ".($n1*$n2);
	
	@endphp


@elseif($operator == "add")

	@php
	$op = "ADDITION";
	$number1 = "Addend".": ".$n1;
	$number2 = "Adder".": ".$n2;
	$answer = "Sum".": ".($n1+$n2);
	@endphp	

@elseif($operator == "div")

	@php
	$op = "DIVISION";
	$number1 = "Divident".": ".$n1;
	$number2 = "Divisor".": ".$n2;

	if($n1 == 0 || $n2 == 0)
	{
		$answer = "Quotient".": 0";
	}
	else
	{
		
		$answer = "Quotient".": ".($n1/$n2);
	}
	

	@endphp	

@elseif($operator == "sub")
	
	@php
	$op = "SUBTRACTION";
	$number1 = "Minuend".": ".$n1;
	$number2 = "Subtrahend". ": ".$n2;
	$answer = "Difference".": ".($n1-$n2);
	@endphp	
	
	


@endif

{{ $op }}

	<p>{{ $number1 }}</p>
	<p>{{ $number2 }}</p>
	<p>{{ $answer }}</p>

</html>
