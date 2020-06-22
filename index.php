<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="sql" action="insert.php" method="POST">
        Name :<input type="text area" name="name" size=20 placeholder="type yourname"><br>
        Password :<input type="password" name="pass" size=20 placeholder="type your password"><br>
        Gender:  Male<input type="radio" name="a" value="Male">  Female<input type="radio" name="a" value="Female"><br>
        Email:<input type="email" name="email" size=20 placeholder="eg s11111@gmai.com"><br>
        PhoneNo :<select name="code">
              <option value="+94">+94</option>
              <option value="+95">+95</option>
              <option value="+96">+96</option>
              <option value="+97">+97</option>
              <option value="+98">+98</option>
              
            </select>
            <input type="phone" name="number" size=20 placeholder="type your number"><br>
<input type="submit">
        </form>
        
</body>
</html>