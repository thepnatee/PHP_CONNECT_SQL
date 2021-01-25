<?php
$servername = "000.000.000.00";  // IP Server OR Server name
$username = "XXXX";  // username database
$password = "PPPP"; // password database
$dbname = "DATABASE_NAME"; // Database Name


# Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
# Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}   

        $rs = array();
        $sql = "QUERY";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

                $check = TRUE;
            
                $rs = $row;
            
            }
        } else {

             $check = FALSE;

        }

        $response = array();

        if($check === TRUE ){

            echo json_encode($response);


        }else{
            echo json_encode($response);
        }
    
