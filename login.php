<?php
    include("db_info.php"); 
?>

<!DOCTYPE html>
 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    </head>
    <body style:"background: linear-gradient(-90deg, darkblue, rgb(0, 140, 255)50%, rgba(0, 255, 242, 0.829) 100%);">
        <div class="container">
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" autocomplete="on" > 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="email" class="uname" data-icon="u" > Your email or email </label>
                                    <input id="email" name="txt_email" required="required" type="text" placeholder="mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="txt_password" required="required" type="password" placeholder="mypassword" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Rimani loggato</label>
								</p>
                                <p class="login button"> 
                                    <input style="float:left;" type="button" value="&#127968;" action="index.php"/>
                                    <input name="sub_login" type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Non sei ancora iscritto?
									<a href="register.php" class="to_register">Iscriviti!</a>
								</p>
                            </form>
                        </div>

                       
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['sub_login'])){
        $username=$_POST['txt_email'];
        $password=$_POST['txt_password'];

        $query_login=mysqli_query($conn, "SELECT idauthor, email, password from author WHERE email='$username' and password=MD5('$password')") or die (mysqli_error($conn));
        if(mysqli_num_rows($query_login)){
            $row_login = mysqli_fetch_assoc($query_login);
            session_start();
            $idAuthor = $row_login['idauthor'];
            $_SESSION['ses_autore'] = $idAuthor;
            header("Location: index.php");
        }
        else{
            echo "<script type='text/javascript'>alert('Controlla le credenziali');</script>";
        }
    }
?>