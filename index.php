<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form | JS For Beginners</title>
    <link rel="stylesheet" href="style.css">
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">    
  </head>
  <body>
    <header><h2 >Registration Form</h2></header>
    <div class="container " >
      <div class="row">
        <div class="col s10 offset-s1 m8 offset-m2 l6 offset-l3">
          <form action="" class="col s12 z-depth-5" id="my-form">
            <div class="row">
              <div class="col s12">
                <h5 class="center-align">Add User</h5>
                <div class="msg"></div>
              </div>
            </div>
            <div class="row">
              <div class="input-field  col s12">
                <label for="name" class="active black-text">Your Name :</label>
                <input type="text" id="name" class="validate" name="name">
                <div class="msg_name"></div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <label for="email" class="active black-text">Your Email :</label>
                <input type="email" id="email" class="validate" name="email">
                <div class="msg_email"></div>
              </div>
            </div>
            <div class="row">
              <div class="col m12 s12">
                <button class="btn waves-effect waves-light " type="submit" value="submit">Submit
                <i class="material-icons right">send</i>
              </button>
              </div>
              
            </div>
            <div class="msg_disp"></div>
            
          </form>
        </div>
      </div>
        
    </div>
    <script src="main.js"></script> 
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
