<?php
include("./db_connection.php");

// get the game playing step's data from the front-end
// decode from JSON string into PHP array
$step_json_data = @file_get_contents("php://input");
$step_data = json_decode($step_json_data, true);
extract($step_data); // for simplicity, using extrac() here!

// now save the game playing step's data into database
$sql_query = "
INSERT INTO steps
(row, col, number, step_status, game_status)
VALUES
($row, $col, $number, $step_status, $game_status)
";
$statement = $conn->prepare($sql_query);
$statement->execute();

echo "game playing step's data saved!";


