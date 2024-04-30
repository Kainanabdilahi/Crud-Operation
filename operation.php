<?php

// include the connection file

include("conn.php");


// check if there a subbmited data



if (isset($_POST["addNew"])) {  // insert data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $salary = $_POST["salary"];

    $query = "INSERT INTO employee(name,address,salary) VALUES ('$name','$address','$salary')";
    $result = $conn->query($query);

    if($result){
        echo "Successfully Registred";
        header("location: index.php");
    }else{
        $conn->error;
    }
}else if((isset($_POST['update']))){ // Update data 
    $Id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $salary = $_POST["salary"];

    $query = "UPDATE employee set name= '$name', address= '$address', salary= '$salary' WHERE id='$Id'";
    $result = $conn->query($query);

    if($result){
        echo "Successfully Updated";
        header("location: index.php");
    }else{
        $conn->error;
    }
}



if ((isset($_GET["id"]))) {  // Delete Data
    $id = $_GET['id'];

    $query = "DELETE FROM employee WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Deleted";
        header("location: index.php");
    } else {
        $conn->error;
    }
}





?>