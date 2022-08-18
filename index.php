
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="captcha.php" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
<style>
/* sign in FORM */
#logreg-forms{
    width:412px;
    margin:10vh auto;
    background-color:#f3f3f3;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
#logreg-forms form {
    width: 100%;
    max-width: 410px;
    padding: 15px;
    margin: auto;
}
#logreg-forms .form-control, .g-recaptcha{
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
}
#logreg-forms .form-control:focus, { z-index: 2; }
#logreg-forms .form-signin input[type="text"], capt {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
#logreg-forms .form-signin input[type="password"] {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}


#logreg-forms a{
    display: block;
    padding-top:10px;
    color:lightseagreen;
}

#logreg-form .lines{
    width:200px;
    border:1px solid red;
}


#logreg-forms button[type="submit"]{ margin-top:10px; }

#logreg-forms .form-reset, #logreg-forms .form-signup{ display: none; }


#logreg-forms .form-signup input { margin-bottom: 2px;}


/* Mobile */

@media screen and (max-width:500px){
    #logreg-forms{
        width:300px;
    }
}
    
</style>

<title>ITE 304</title>
</head>
<body>
<body style='background-color:#282C2F '>
    <div id="logreg-forms">
        <form action="captcha.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required="" autofocus="">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            
            <div class="g-recaptcha" id="capt" data-sitekey="6LfI5_geAAAAAPgWlW7yZAAE5MWhEORJPeyEOCjs"></div>
            <button class="btn btn-success btn-block" name="submit" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>

            
    </div> 
   
    
</body>
</html>
