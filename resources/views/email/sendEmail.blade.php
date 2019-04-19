


<h1>To Verify Email Please Type pn the button</h1>

<a href="{{route('sendingEmail',["email" => $user->email,
								"verifyToken" => $user->verifyToken])}}"> 
	Verify Email
 </a>