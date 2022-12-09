<?php
$conn = new mysqli('localhost', 'root', '', 'xtechstore');
// if (mysqli_connect_error()) {
//   echo mysqli_connect_error();
//   exit();
// } else {
//   echo "connected";
// }
// $sql = "SELECT * FROM products WHERE featured = 1";
// $featured = $conn->query($sql);
function title()
{
    $db = mysqli_connect('localhost', 'root', '', 'xtechstore');

    // Create connection
    // $db = new mysqli($servername, $username, $password, $dbname); //variables can be used
    $sql = "SELECT title FROM products WHERE featured=1";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['title'];
        }
    }
    ;
}

function image()
{
    $db = mysqli_connect('localhost', 'root', '', 'xtechstore');

    // Create connection
    // $db = new mysqli($servername, $username, $password, $dbname); //variables can be used
    $sql = "SELECT image FROM products WHERE featured=1";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['image'];
        }
    }
    ;
}
function price()
{
    $db = mysqli_connect('localhost', 'root', '', 'xtechstore');

    // Create connection
    // $db = new mysqli($servername, $username, $password, $dbname); //variables can be used
    $sql = "SELECT price FROM products WHERE featured=1";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['price'];
        }
    }
    ;
}
function description()
{
    $db = mysqli_connect('localhost', 'root', '', 'xtechstore');

    // Create connection
    // $db = new mysqli($servername, $username, $password, $dbname); //variables can be used
    $sql = "SELECT description FROM products WHERE featured=1";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['description'];
        }
    }
    ;
}
function brandname()
{
    $db = mysqli_connect('localhost', 'root', '', 'xtechstore');

    // Create connection
    // $db = new mysqli($servername, $username, $password, $dbname); //variables can be used
    $sql = "SELECT brandname FROM products WHERE featured=1";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['brandname'];
        }
    }
    ;
}
; ?>