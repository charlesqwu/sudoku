<?php
include("./db_connection.php");

// get all the game playing steps' data from database
// (currently, not taking care of issues related to user ID, user session, and game #s)
$sql_query = "SELECT time, row, col, number, step_status, game_status FROM steps";
$statement = $conn->prepare($sql_query);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

// Jquery dataTable needs only values (not keys -- that is, column names)
// so, walk through the resulting array and strip off the column names
$results = array_map(function ($row) {return array_values($row);},  $results);    

// send the JSON data in the format as required by the Jquery dataTable
echo json_encode(array("data" => $results));




