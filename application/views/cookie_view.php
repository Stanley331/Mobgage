<html>
<head>
    <title>cookie eg</title>
</head>

<body>
<form name="form1" method="post">
    <h1 align="centre">login form</h1>
    </br></br></br></br>
    <table align="centre">
        <tr>
            <td>username : &nbsp
                <input 
                type="text" name="name" 
                value="<?php if(isset($_COOKIE["uname"])) echo $_COOKIE["uname"]; ?>"
                />
            </td>
        </tr>
        <tr>
            <td>password : &nbsp
                <input 
                type="password" name="pass" 
                value="<?php if(isset($_COOKIE["pass"])) echo $_COOKIE["pass"]; ?>"
                />
            </td>
        </tr>   
        <tr>
            <td>
                <input type="checkbox" name="box">remember me
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="submit">
            </td>
        </tr>
</form>
</body>
</html>