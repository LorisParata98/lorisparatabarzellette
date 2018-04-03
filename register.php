<!DOCTYPE html>
 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Registrazione</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content=" Registrazione" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
    <div class="container">
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                        <div id="register" class="animate form">
                            <form  action="" autocomplete="on"> 
                                <h1> Iscrizione </h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u">Your email</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="lamiaemail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
                                <input style="float:left;" type="button" value="&#127968;" action="index.php"/>
									<input type="submit" value="Iscriviti!"/> 
								</p>
                                <p class="change_link">  
									Sei già iscritto?
									<a href="login.php" class="to_register"> Accedi </a>
								</p>
                            </form>
                        </div>
                     </div>
                </div>  
            </section>
        </div>
    </body>
</html>