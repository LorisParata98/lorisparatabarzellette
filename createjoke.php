<!DOCTYPE html>
 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Crea barzelletta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content=" Crea barzelletta" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        

    </head>
    <body>

<body onload="loadAuthors()">
    
    
    <div class="topnav" id="myTopnav">
       <a href="index.php" class="active"><i class="fa fa-home" style="font-color:white"></i> Home</a>
   
       <div class="dropdown">
           <button class="dropbtn">Categorie 
            <i class="fa fa-caret-down"></i>
           </button>
           <div class="dropdown-content">
           <form action="categories.php?category=".$category method="GET">
           <a><input type="text" name="category" placeholder="Cerca.." method="get"></a>
           </form>
               
                <a href="#">Black Humor</a>
                <a href="#">Religiose</a>
                <a href="#">Freddure</a>
           </div>
       </div> 
           <a href="login.php">Accedi</a>
           <a href="register.php">Registrati!</a>
         
           <a href="javascript:void(0);"style="color :black" class="icon" onclick="myFunction()">&#9776;</a>

       <a class="searchbar">
                   <form action="authors.php?author=".$nameauthor>
                       <input type="text" placeholder="Cerca un autore"
                       method="get" id="autocomplete" list="json-datalist" name=nameauthor>
                   </form>
       </a>
               <datalist id="json-datalist"></datalist>
     </div>



    <div class="container">
            <section>				
                <div id="container_demo" style="padding-top:5%;" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                        <div id="register" class="animate form">
                            <form  action="setJoke.php?idauthor=".$idauthor."&joketext=".$joketext autocomplete="on"> 
                                <h1> Crea la tua barzelletta! </h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u">Username</label>
                                    <input id="username" name="idauthor" required="required" type="text" placeholder="myusername" />
                                </p>
                                <p> 
                                    <label for="joketext" class="uname" data-icon="s">Testo barzelletta</label>
                                    <textarea style="resize:none;" id="joketext" name="joketext" required="required" type="textarea" rows="4"cols="50" placeholder="Inserisci il testo della barzelletta" ></textarea>
                                </p>
                              
                                
                                <p class="signin button"> 
                                <input style="float:left;" type="button" value="&#127968;" action="index.php"/>
									<input type="submit" value="Crea!"/> 
								</p>
                                <p class="change_link">  
									Non hai ancora effettuato l'accesso?
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