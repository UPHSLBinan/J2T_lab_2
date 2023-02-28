<!DOCTYPE HTML>
<html>  
  <head>
  <style>
    form{
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 3px 6px 0 rgba(0,0,0,0.19);
    margin: 20px auto;
    width: 500px;
    font-family: 'Roboto', sans-serif;
}


label {
    color: #7d7d7d;
    font-size: 0.9em;
    font-weight: bold;
    margin-top: 8px; 
    margin-bottom: 8px;
    display: block;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #d3d3d3;
    border-radius: 5px;
    margin-top: 8px;
    margin-bottom: 8px;
}


button {
    background-color: #1c87c9;
    color: white;
    padding: 10px;
    font-size: 1em;
    width: 50%;
    border: none;
    border-radius: 5px;
    margin-top: 8px;
    margin-bottom: 8px;
    cursor: pointer;
}


.container {
    padding: 10px;
    text-align: center;
}
  </style>
</head>
<body>
<a href="index.php">Back</a>
<form action="register.php" method="post">

  <div class="container">
    <label for="username"><b>Username:</b></label>
    <input type="text" placeholder="Enter Username(admin)" name="username" required><br>

    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password(ezreal090500)" name="password" required><br>

    <button type="submit">Login</button><br>    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>

</body>
</html>