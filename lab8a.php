<!-- Develop a PHP program (with HTML/CSS) to keep track of the number of visitors visiting 
the web page and to display this count of visitors, with relevant headings.  -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Visitor Counter</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 20px;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
      text-align: center;
    }

    .counter {
      font-size: 24px;
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Welcome to Our Website</h1>
    <div class="counter">
      <?php
      $counterFile = 'visitor_count.txt';
      if (!file_exists($counterFile)) {
        $count = (int)file_get_contents($counterFile);
      } else {
        $count = 0; //it creates the file and put 0 to it
      }
      $count++; //count will be incremented on each refresh
      file_put_contents($counterFile, $count); //saving counter value to the file
      echo '<h2>Visitor Count</h2>';
      echo "<p>You are visitor number: $count</p>";
      ?>
    </div>
  </div>
</body>


<!-- PHP-hypertext preprocessor -->

</html>