<?php
require_once "crudstart.php";

$id = false;
if ( isset($_GET['id']) ) {
    $id = intval($_GET['id']);
} else if ( isset($_POST['id']) ) {
    $id = intval($_POST['id']);
}

if ( $id >= 1 ) {
    // Groovy
} else {
    die("Bad value for id");
}

require_once "../../db.php";
require_once "../../sqlutil.php";

$sql = "SELECT ";
for($i=0; $i < count($fields); $i++ ) {
    $sql.= $fields[$i].', ';
}
$sql .= "id FROM $table WHERE id=$id";
$row = retrieve_one_row($sql);
if ( $row == false ) {
    $_SESSION['error'] = 'Bad value for id';
    header( "Location: index.php?table=$table" ) ;
    return;
}

?>
<!DOCTYPE html>
<html>
<head>
<?php require_once("../../head.php"); ?>
</head>
<body>
<div class="container">
<h3>View User</h3>
<?php
for($i=0; $i < count($fields); $i++ ) {
    echo('<p><b>'.ucfirst($fields[$i])."</b><br/>\n");
    $value = $row[$i];
    echo(htmlentities($value));
    echo("\n</p>\n");
}
?>
<a href="index.php?table=<?php echo($table); ?>">Done</a></p>
</form>

