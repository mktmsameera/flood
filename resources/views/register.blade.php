<html>
<body>
    <form action="/register" method="post">
    @csrf

    <label for="#fname">Fname</label>
    <input type="text" name="fname" id="fname"><br><br>

    <label for="#fname">lname</label>
    <input type="text" name="lname" id="fname"><br><br>

    <label for="#fname">email</label>
    <input type="text" name="email" id="fname"><br><br>

    <label for="#fname">phone</label>
    <input type="text" name="phone" id="fname"><br><br>

    <label for="#fname">passwprd</label>
    <input type="text" name="password" id="fname"><br><br>

    <label for="#fname">streat</label>
    <input type="text" name="streat" id="fname"><br><br>

    <label for="#fname">Province</label>
    <input type="text" name="province" id="fname"><br><br>

    <label for="#fname">Area</label>
    <input type="text" name="area" id="fname"><br><br>


    <input type="submit" value="register">

    </form>
</body>
</html>