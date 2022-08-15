<?php
require_once('connect.php');

if(isset($_POST["save"])) {
    $tag_data = $_POST['tag'];
    $editor_data = $_POST['editor1'];

    $sql = "INSERT INTO test(tags, txtdescr) VALUES('$tag_data', '$editor_data')";
    setData($sql);
    header("location:../pages/trial.php");
} else {
    echo "Error";
}
?>