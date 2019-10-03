<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <title>Colori</title>
</head>
<body>
    <h3>Menu</h3>
    <div id="rosso">
        <a href="rosso.html">Rosso</a>
            <div id="blocco_rosso">
                #ff0000
            </div>
    </div>
        <br>
    <div id="blu">        
        <a href="blu.html">Blu</a>
            <div id="blocco_blu">
                #0000ff
            </div>
    </div>
        <br>
    <div id="verde">       
        <a href="verde.html">Verde</a> 
            <div id="blocco_verde">
                #00ff00
            </div>
    </div>   
    
    <br>

<div>
    <form action="form.php" method="POST">
    <label>Username</label>  <input name="us" type="text">
        <br> <br>
    <label>Password</label> <input name="pass" type="password">
        <br> <br>
    <input type="submit" value="Invia">
    <input type="submit" value="Cancella">
    </form>

</div>

</body>

</html>