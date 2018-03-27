<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="css/menu.js"></script>
    
    <title>Home</title>
</head>
<body>
    
     <div class="topnav" id="myTopnav">
        <a href="index.php" class="active"><i class="fa fa-home" style="font-color:white"></i> Home</a>
    
        <div class="dropdown">
            <button class="dropbtn">Categorie 
             <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <form action="search.php" method="GET">
            <a><input type="text" name="search" placeholder="Search.."></a>
            </form>
                
                 <a href="#">Black Humor</a>
                 <a href="#">Religiose</a>
                 <a href="#">Freddure</a>
            </div>
        </div> 
            <a href="#news">Accedi</a>
            <a href="#registrati">Registrati!</a>
            <a href="javascript:void(0);"style="color :black" class="icon" onclick="myFunction()">&#9776;</a>
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
    </body>
    </html>