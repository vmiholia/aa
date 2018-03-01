<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Simple and light sign up form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title"><b>Enter your Credentials</b></h1>
    </header>
    
    <form class="form" action="log-in-action.php" method="POST">
        <div class="form__group">
            <input type="text" name="username" placeholder="Username" class="form__input" />
        </div>
        <div class="form__group">
            <input type="password" name="password" placeholder="Password" class="form__input" />
        </div>
        <button class="btn" type="submit" name="submit">Download Report Card</button>
    </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
