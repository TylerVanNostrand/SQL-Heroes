<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sqlheroes";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

//     function create()   {
//         print_r($_GET);
//         $SQL = "INSERT INTO heroes(name, about_me, biography) 
//              VALUES ()";



//     }

//     if(isset($_GET['route']))    {
//         $route = $_GET["route"];
//     switch ($route) {
//         case "create":
//             create();
//             break;
//         // case "allHeroes":
//         //     createAllHeroes($_GET["id"], $conn);
//         //     break;
//         // case "read":
//         //     viewAllHeroes($_GET["id"], $conn);
//         //     break;
//         // case "update":
//         //     updateAllHeroes($_Get["id"], $_GET["name"], $conn);
//         //     break;
//         // case "delete":
//         //     deleteHero($_Get["id"], $conn);
//         default:
//             echo 'Error';
//     }        
// }
// // Create
    




// // Read
    



// // Update
    



// // Delete
   





