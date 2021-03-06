<?php
    session_start();


    if(isset($_POST['btn_logout'])){
        session_destroy();
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/menu.js"></script>
    <style>
        .btn_logout{
            visibility: hidden;
        }
        .btn_login{
            visibility: visible;
        }
        .btn_reg{
            visibility: visible;
        }
    </style>
    
    <title>Home</title>
</head>
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
            <?php

            if(isset($_SESSION['ses_autore'])){
                echo "<form method='post' action='".$_SERVER['PHP_SELF']."'><input type='submit' name='btn_logout' value='VA BANNE!'/></form>";
            }
            else{
                echo '<a href="login.php" >Accedi</a>';
                echo '<a href="register.php">Registrati!</a>';
            }
                
            ?>
            <a href="createjoke.php">Crea barzelletta!</a>

            <?php 
                if(isset($_SESSION['ses_autore'])){
                    echo $_SESSION['ses_autore']; 
                }        
            ?>
            
            <a href="javascript:void(0);"style="color :black" class="icon" onclick="myFunction()">&#9776;</a>

        <a class="searchbar">
                    <form action="authors.php?author=".$nameauthor>
                        <input type="text" placeholder="Cerca un autore"
                        method="get" id="autocomplete" list="json-datalist" name=nameauthor>
                    </form>
        </a>
                <datalist id="json-datalist"></datalist>
      </div>

    <div class="intestazione"><h1> Benvenuto! Ecco a voi tutte le nostre barzellette!</h1>  
    </div>
    <hr style="color: black;"> 

    <div class="sinistra">
        <h1> Categorie : </h1>
        <?php 

        include("db_info.php"); 

        $sql = 
        "SELECT *
         FROM category c
         order by c.name;";
     
        $result = $conn->query($sql);
         if($result->num_rows > 0)
        {

        if($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td><a class='listacategorie' href='categories.php?category=".
                  $row['name']."'>"."<br>".
                  $row['name'].
                  "</a></td></tr>";
            }
        }
         ?>

    </div>

    <?php

       
        $conn->query("Set names UTF8;");
        $sql = 
        "SELECT j.joketext, j.jokedate, a.name, j.likes, j.idjoke
         FROM joke j , author a
         where a.idauthor = j.idauthor
         order by j.idjoke;";
     
     $result = $conn->query($sql);
    if($result->num_rows > 0)
     {
        echo "<div class='elenco'>";
        echo "<table>";
        $likesconta = 0;}
     while($row = $result->fetch_assoc())
     {
        $joketext = strip_tags($row["joketext"]);
        if (strlen($joketext) > 100) {
        
            
            $stringCut = substr($joketext, 0, 100);
            $endPoint = strrpos($stringCut, ' ');
          
            $joketext = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
            $joketext .= "... <br><a href='/lorisparatabarzellette/joke.php?idjoke=".$row['idjoke']."'>Continua a leggere..</a>";
        }
        
        
         echo  "<tr><td style='border:5px solid rgb(".
         rand(0,255).",".rand(0,255).",".rand(0,255).
         ")' >". $joketext . "<br>" ."Autore : " . $row["name"]  . "<div name='div_likes".$likesconta."'style='text-align: right'>Likes :  " . $row["likes"]. "</div>" ."Data : ". $row["jokedate"] . "<br>";        
          ?>
          <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
          <?php
          
          echo "<button class='like' type='submit'  name='sub_likes".$likesconta."' /><i class='fa fa-thumbs-o-up'>Like</i></button>";
   
          echo "</form></td></tr>";
          
          if(isset($_POST['sub_likes'.$likesconta.''])){
              mysqli_query($conn, "Update joke set likes=likes + 1 where idjoke=".$row["idjoke"]."") or die(mysqli_error($conn));
              header("Location: /lorisparatabarzellette/index.php");
          }
          $likesconta++;  
        }
        echo "</table>";
        echo"</div>";
        }
        else{
        echo "Nessun risultato";
        }
        $conn->close();
    ?>
</body>

</html>