<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<style media="screen">
body{
  background: url('perpus.jpg');
}
*{
  box-sizing:border-box;
}
[class*="col-"]{
  padding: 10px; float:left; width: 100%;
}
@media only screen and (min-width:600px){
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width:768px){
  /* For tablets: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
.container{
  width:40%;
  margin: 0 auto;
}
.label{
  font-size:25px;
}
.form-control{
  padding:16px;
  font-size:15px;
  width:100%;
  border:2px solid black;
  border-radius:50px;
}
.submit{
  float:right;
  background: #FF2D00; color:white;
  padding:10px;
  border:0px solid black;
  border-radius:25px;
  font-weight:bolder; letter-spacing:2px;
  margin:5 auto;
}
.Judul{
font-weight:bolder; letter-spacing:2px;
font-size:30px;
margin:5 auto;
}
fieldset{
  background:#FFEBCD;
  border-radius:20px;
  border:0px solid black;
}
fieldset legend{
  font-weight:bolder;
}

  </style>
  </head>
  <body>
    <div class="container">
      <form  method="POST" action="proses-login.php">
        <fieldset>
          <legend align="center"><h1><img src="bulat RJRMV kuning.png" alt="!EROR!" style="width:20%"></h1></legend>

          <div align="center" class="Judul">
            Login
            <br>
          </div>
          <div class="col-3 label">
            Username
          </div>
          <div class="col-9">
            <input type="text" class="form-control" name="username" id="">
          </div>
          <button type="submit" class="submit" name="btnlogin" value="Login">
            Login
          </button>
        </fieldset>
      </form>
    </div>
  </body>
</html>
