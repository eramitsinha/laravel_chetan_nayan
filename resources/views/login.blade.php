<h1>Login</h1>
<form action="login_check" method="post">
    @csrf
    Email : <input type="email" name="email" id="">
    <br><br>
    Password : <input type="password" name="password">
    <br><br>
    <input type="submit" value="Login">
</form>
