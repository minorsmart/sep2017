<?php
session_start();

if ($_POST) {
if ($_POST['name'] == 'tamer' & $_POST['pass'] == 'baasje') {
	header('Location: index.php?login=true');
} else {
	header('Location: index.php?login=false');
}
}

?>
<!-- Vind je dat normaal? Zo maar mijn kleren uittrekken? #metoo -->
<?php
if (isset($_GET['login'])) {
if ($_GET['login'] == 'true') {
	$_SESSION['loggedin'] = 'jaaaaa';
}
}

if (isset($_GET['logout'])) {
	unset($_SESSION['loggedin']);
}
?>

<?php
if (!isset($_SESSION['loggedin'])) {
?>
<h1>Alluris Login</h1>
 <form method="POST">
  Username:<br>
  <input type="text" name="name"><br>
  Password:<br>
  <input type="password" name="pass"><br><br>
  <input type="submit" value="Submit">
</form>
<?php
}
?>

<?php
if (isset($_SESSION['loggedin'])) {
?>
<h1>Alluris Login</h1>
<p>Je bent ingelogd! 09fac1f7c1beb4868e640e606bbaec44</p><a href="index.php?logout">Logout</a>
<?php
}
?>

<?php
if (isset($_GET['login'])) {
if ($_GET['login'] == 'false') {
	echo '<span style="color: red;">Er gaat iets fout!</span>';
}
}
?>

