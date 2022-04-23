<?php
$conn = mysqli_connect("sql108.epizy.com", "epiz_31207170", "kOxGG0sexLBmsAu", "epiz_31207170_hamid");

if (isset($_POST["submit"])) {
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];
    $query = "INSERT INTO test(id, mail, pass) VALUES('NULL', '$mail', '$pass')";
    $run = mysqli_query($conn, $query);
    if ($run) {
        print "Data inserted Successfully";
    } else {
        print "Data not inserted";
    }
}
