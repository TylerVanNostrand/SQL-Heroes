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
//echo "Connected successfully";

// define function
    function create($name, $about_me, $biography, $conn)   {
        //print_r($_POST);
        $SQL = "INSERT INTO heroes(name, about_me, biography) 
             VALUES ('$name', '$about_me', '$biography')";
        // echo $SQL;
    if ( $name == null)    {
        echo 'Error No Name';
        return;
    }
    if ($conn->query($SQL) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $SQL . "<br>" . $conn->error;
    }
}

    if(isset($_GET['action']))    {
        $route = $_GET["action"];
            switch ($route) {
                case "create":
                    create($_POST['name'], $_POST['about_me'], $_POST['biography'], $conn);
                    showAllHeroes();
                    break;
                case "read":
                    showAllHeroes();
                    break;
                // case "update":
                //     updateAllHeroes($_Get["name"], $_GET["about_me"], $_GET['biography'], $conn);
                //     break;
                case "delete":
                    deleteHero($_GET['name']);
                    break;
                default:
                    echo 'Error 404 Not Found';
                    break;
    }        
} else {
    echo 'Welcome To The Main Page';
}
    
// Read
    
function showAllHeroes()    {

        $SQL = "SELECT * FROM heroes"; 
        global $conn;
        $result = $conn->query($SQL); 
    while ($row = $result->fetch_assoc()) {
        echo '<br >name:' . $row['name'] . '<br >about_me:' . $row['about_me'];
    }
}


// Update
    
// function updateAllHeroes($name, $about_me, $biography)  {

// }


// Delete
function deleteHero($name)   {
    $SQL = "DELETE FROM heroes WHERE name = '$name'";
    global $conn;
    if ($conn->query($SQL) === TRUE) {
        echo "Successfully Deleted";
    } else {
        echo "Error: " . $SQL . "<br>" . $conn->error;
    }
}
