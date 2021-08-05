<h1>Login page</h1>

@if ($errors->any())
    @foreach ($errors->all() as $err )
        <li>{{$err}}</li>
    @endforeach
@endif
<form action="login" method='POST'>
@csrf
<input type="text" name='UserName' placeholder='user name'/>
<br>
<br>
<input type="password" name='UserPassword' placeholder='user Password'/>
<br>
<br>
<button type='submit'>Login</button>
</form>