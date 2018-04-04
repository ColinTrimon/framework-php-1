<?php
$months = array(null, "January","February","March","April","May","June","July","August","September",
"October", "November", "December");

$dag = null;
$maand = null;

foreach($calendar as $birthday){
  if ($maand !== $birthday["month"]) {

?>
<h1><?= $months[$birthday["month"]]; ?></h1>

<?php
$maand = $birthday["month"];
  }
  if ($dag !== $birthday["day"]) {

    ?>

    <h2><?= $birthday["day"]; ?></h2>
<?php
$dag = $birthday["day"];
  }
  echo "<p><a href=\"" . URL . "calendar/edit/" . $birthday['id'] . "\">".$birthday["person"]."
  (".$birthday["year"].")"."</a><a href=\"" . URL . "calendar/delete/"
  . $birthday['id'] . "\"> x</a></p>";
}
?>
<p><a href="<?= URL ?>calendar/create">+ Toevoegen</a></p>
