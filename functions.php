<?php
// * This file is still in management
// * Right here will all the functions be listed for the backend side 

function DatabaseConnection()
{
    $host = 'localhost';
    $dbname = 'capstone';  // *  SCHEMA TITLE RIGHT HERE
    $user = 'root';
    $password ='';          // ! vulnerable :D
    $dsn = "mysql:dbname=$dbname;host=$host";

    try 
    {
        $conn = new PDO($dsn, $user, $password);
        return $conn;
    } 

    catch (PDOException $e) 
    {   
        echo 'Connection failed: ' . $e->getMessage();
    }
}

function insert_data__user($user_nme, $pw)  //  This is for the Registration page
{
    $conn = DatabaseConnection();
    $stmt = $conn->prepare("INSERT INTO users (username,password) VALUES (?,?)");
    $stmt->execute([$user_nme, $pw]);
}

// * Kra 1 A html page
function insert_data__KRA1A($stdnt, $spvsr) //
{   
    $conn = DatabaseConnection();
    $stmt = $conn->prepare("INSERT INTO kra_1 (Crit_A_student_eval, Crit_A_supervisor_eval) VALUES (?, ?) ");
    $stmt->execute([$stdnt, $spvsr]);
}

// // * Kra 1 B html page
// function insert_data__KRA1BC()   // 
// {
//     $conn = DatabaseConnection();
//     $stmt = $conn->prepare("UPDATE table_name SET column1 = value1, column2 = value2, ... WHERE condition");
//     $stmt->execute([$, $]);
// }

// // * Kra 1 B html page
// function insert_data__KRA2A()    //
// {
//     $conn = DatabaseConnection();
//     $stmt = $conn->prepare("INSERT INTO personal_info ");
//     $stmt->execute([$, $, $, $]);
// }

// function insert_data__KRA2B()   //
// {
//     $conn = DatabaseConnection();
//     $stmt = $conn->prepare("INSERT INTO personal_info ");
//     $stmt->execute([$, $, $, $]);
// }

// function insert_data__KRA2C()   //
// {
//     $conn = DatabaseConnection();
//     $stmt = $conn->prepare("INSERT INTO personal_info ");
//     $stmt->execute([$, $, $, $]);
// }

// function insert_data__()        // * this is for Form 
// {
//     $conn = DatabaseConnection();
//     $stmt = $conn->prepare("INSERT INTO personal_info ");
//     $stmt->execute([$, $, $, $]);
// }  