<h1>Login page</h1>
<form action="login" method='POST'>
@csrf
<input type="text" name='User Name' placeholder='user name'/>
<br>
<br>
<input type="password" name='User Password' placeholder='user Password'/>
<br>
<br>
<button type='submit'>Login</button>
</form>