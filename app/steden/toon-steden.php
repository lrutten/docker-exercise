<html>
  <head>
    <title>Connect to database</title>
  </head>
  <body>

    <?php 
      error_reporting(E_ALL);
      ini_set('display_errors', 1);

      print ("<h1>Drivers4</h1>\n");
      print ("<ul>\n");
      foreach (PDO::getAvailableDrivers() as $driver)
      {
        print("<li>$driver</li>\n");
      }
      print ("</ul\n");

      print("<h1>Connect</h1>\n");
     
      $pdo = new PDO("mysql:host=127.0.0.1;dbname=test", "admin", "paswoord");
      
      $stmt    = $pdo->prepare("select * from steden");
      $success = $stmt->execute();
      $aantal  = $stmt->rowCount();
      $stmt->setFetchMode(PDO::FETCH_OBJ);
      print("aantal $aantal\n");
      
      while ($rij = $stmt->fetch())
      {
         print("<p>Stad {$rij->naam} postnummer {$rij->postnummer}</p>\n");
      }
     ?>
  </body>
</html>

