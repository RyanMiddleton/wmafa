<html>

	<head>
		<title>WMAFA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/03c75e8945.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="static/css/styles.css">
        <link rel="icon" type="image/png" href="static/images/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="static/images/favicon-16x16.png" sizes="16x16" />
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light rounded" style="background-color:#f2f2f2;">
		<a href="/" id="nameLink">World Martial Arts and Fitness Academy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navCollapse" aria-controls="navCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navCollapse">
            <ul class="navbar-nav nav-ul">
                <li class="nav-li"><a href="/Schedule">Schedule</a></li>
    			<li class="nav-li"><a href="/About">About Us</a></li>
    			<li class="nav-li"><a href="/Contact">Contact</a></li>
    		</ul>
        </div>
    </nav>
    
    <div class="container">
        <form method="post" name="contact_form" action="contact-handler.php">
            Your Name:<input type="text" name="name">
            Email:<input type="text" name="email">
            Message:<textarea name="meassage"></textarea>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
    </div>
    <footer class="footer">

    </footer>
    <script language="Javascript">
        var formvalidator = newValidator("contactForm");
        formvalidator.addValidation("name",'req','Please provdie your name');
        formvalidator.addValidation("name",'req','Please provdie your email');
        formvalidator.addValidation("name",'req','Please enter a valid email address');
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>