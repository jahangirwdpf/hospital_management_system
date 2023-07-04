<?php
require_once("./../includes/function.php");
getHeader();

    session_start(); //Start the session.
        $conn = new mysqli("localhost","root","","bbirdshospital");
          if(isset($_POST['login'])){
                $email = $_POST['email']??null;
                $password = $_POST['password']??null;

                $sql="SELECT * FROM doctor WHERE email='$email' AND password='$password'";
                    
                  $q=$conn->query($sql);
                    if($q->num_rows>0){
                        $row = $q-> fetch_assoc();
                        if($row['email']==$email && $row['password']==$password){
                          header("location:index_doc.php");
                          }
                          else{
                              echo 'no data';
                          }    
                      }
                      else{
                      echo 'login error';        
                      }
                }
 ?>                 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
body {
  background:#2C74B3 ;
}
.login {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
  font-family: 'Comfortaa', cursive;
  border-radius: 50px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  border-radius: 10px;
  max-width: 600px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  border-radius: 20px;
  background: #e0e0e0;
  box-shadow:  -11px 11px 22px #bebebe
}
.form input {
  outline: 0;
  background: #FFFFFF;
  width: 100%;
  border: 0;
  border-radius: 5px;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: 'Comfortaa', cursive;
}
.form input:focus {
  background: #fff;
}
.form button {
  font-family: 'Comfortaa', cursive;
  text-transform: uppercase;
  outline: 0;
  width: 100%;
  border: 0;
  border-radius: 5px;
  padding: 15px;
  color: Black;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:active {
  background: #395591;
}
</style>
</head>
<body>
    <div class="login">
      <div class="form">
        <p>Welcome to Doctor login Page</p>
        <form class="login-form" method="post">
            <input type="text" placeholder="email" name="email" />
            <input type="password" placeholder="password" name="password"/>

          <button type="submit" name="login" class="btn btn-primary "><strong>Login</strong></button>
        </form>  
      </div>
    </div>
</body>
</html>