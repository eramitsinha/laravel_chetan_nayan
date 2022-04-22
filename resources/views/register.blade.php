<h1>Register Form</h1>
<form action="save" method="post">
    @csrf
    Name : <input type="text" name="n1">
    <Br><br>
    Email : <input type="text" name="e1">
    <Br><br>
    Password : <input type="password" name="p1" id="">
    <Br><br>
    Mobile : <input type="text" name="m1">
    <br><br>
    <input type="submit" value="Register">
</form>
