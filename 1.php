<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title>Multiplication table</title>
  </head>
  <body>
    <div id="wrapper">
      <nav>
	<div id="menu">
		<a href="index.html">Index</a>
		<a href="1.php" class="active">Multiplication table</a>
		<a href="2.php">Colored multiplication table</a>
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
		<h1>Lesson 1</h1>
    <h2>Multiplication table</h2>
  </header>
  <main>
		<p>
      <table border =1>
        <tr>
      <?php
      for ($i=1; $i <= 5; $i++ ) {
        echo "<td>";
  for ($k=1; $k <= 10; $k++) {
    echo "$i x $k = " . $i * $k;
    echo "</br>";
  }
  echo "</td>";
}
echo "</tr><tr>";
for ($i=6; $i <= 10; $i++ ) {
  echo "<td>";
for ($k=1; $k <= 10; $k++) {
echo "$i x $k = " . $i * $k;
echo "</br>";
}
echo "</td>";
}
?>
</tr>
</table>
		</p>
	</div>
</div>
</main>
<footer>
</footer>
  </body>
</html>
