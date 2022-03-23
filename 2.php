<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title>Page2</title>
  </head>
  <body>
    <div id="wrapper">
      <nav>
	<div id="menu">
		<a href="index.html">Index</a>
		<a href="1.php">Multiplication table</a>
		<a href="2.php" class="active">Colored multiplication table</a>
		<a href="3.html">Reverse form</a>
		<a href="table.html">Table</a>
    <a href="Lesson1.html">Lesson 1</a>
    <a href="Lesson2.html">Lesson 2</a>
    <a href="Lesson3.html">Lesson 3</a>
    <a href="Lesson4.html">Lesson 4</a>
	</div>
</nav>
  <header>
	<div id="content">
		<h1>Lesson 2</h1>
    <h2>Colorfull Multiplication table</h2>
  </header>
  <main>
    <div>
            <table border="1">
              <tr>
                   <?php
                               function setColor($number){
                                   $arrColor = [0=>'purple',
                                                 1=>'pink',
                                                 2=>'blue',
                                                 3=>'red',
                                                 4=>'yellow',
                                                 5=>'green',
                                                 6=>'blue',
                                                 7=>'red',
                                                 8=>'blue',
                                                 9=>'green'];
                                    $arrNumber = str_split($number);
                                    $a = '';
                                     foreach($arrNumber as $item){
                                         $a .= '<span style="color:' . $arrColor[$item] .';">' . $item .'</span>';
                                        }
                                        return $a;
                                }
                                for($i = 1; $i <6; $i++){
                                    echo '<td>';
                                    for($j = 1; $j < 11; $j++){
                                         $sum = $i * $j;
                                    echo setColor($i) . ' x ' . setColor($j) . ' = ' . setColor($sum) .
                                     '<br>';
                                }
                                echo '</td>';
                                }
                                echo '</tr>';
                                echo'<tr>';
                                for($i = 6; $i <=10; $i++){
                                    echo '<td>';
                                    for($j = 1; $j <=10; $j++){
                                        $sum = $i * $j;
                                        echo setColor($i) . ' x ' . setColor($j) . ' = ' . setColor($sum) . '<br>';
                                    }
                                echo '</td>';
                                }
                        ?>
          </tr>
        </table>
      </div>
		<p>
			...
		</p>
	</div>
</div>
</main>
<footer>
</footer>
  </body>
</html>
