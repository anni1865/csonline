<?php
session_start();
require_once("config.php");

$id = false;
$token = false;
if ( isset($_POST['id']) && isset($_POST['token']) ) {
    $id = $_POST['id'] + 0;
    $token = $_POST['token'];
}

if ( isset($_GET['id']) && isset($_GET['token']) ) {
    $id = $_GET['id'] + 0;
    $token = $_GET['token'];
}

if ( strlen($token) < 1 ) $token = false;

if ( $id === false || $token === false ) {
    error_log("Unsubscribe missing id or token");
    echo("Unsubscribe process requires both a 'id' and 'token parameter.");
    return;
}

require_once("db.php");
require_once("sqlutil.php");

$sql = "SELECT email,first,last,identity FROM Users WHERE id=$id";
$row = retrieve_one_row($sql);
if ( $row === false ) {
    error_log("Unsubscribe user $id missing");
    echo("Sorry, user $id not found");
    return;
}

require_once("mail/maillib.php");
$check = compute_mail_check($row[3]);
if ( $token != $check ) {
    echo("Sorry, token is not valid ");
    error_log("Unsubscribe bad token=$token check=$check");
    if ( isset($_SESSION["admin"]) ) echo($check);
    return;
}

// We are past all the checks...
if ( isset($_POST['id']) ) {
    $sql = "UPDATE Users SET subscribe=-1 WHERE id=$id";
    $result = run_mysql_query($sql);
    echo('You are unsubscribed. Thank you.');
    error_log("Unsubscribed is=$id");
    return;
}

?>
<h2>Unsubscribing from E-Mail online.dr-chuck.com</h2>
<p>If you want to unsubscribe from e-mail from 
<a href="http://online.dr-chuck.com">online.dr-chuck.com</a> press
"Unsubscribe" below.
</p>
<form method="post" action="unsubscribe.php">
  <input type="hidden" name="id" value="<?php echo($id); ?>">
  <input type="hidden" name="token" value="<?php echo(htmlentities($token)); ?>">
  <input type="submit" value="Unsubscribe">
</form>
<p>
You can re-subscribe later in your Profile on online.dr-chuck.com if you lioke.
</p>
