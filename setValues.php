<?php

require "conn.php";

if (isset($_POST['Save'])) {
    $value1 = mysqli_real_escape_string($conn, $_POST['value1']);
    $value2 = mysqli_real_escape_string($conn, $_POST['value2']);
    $value3 = mysqli_real_escape_string($conn, $_POST['value3']);
    $value4 = mysqli_real_escape_string($conn, $_POST['value4']);
    $value5 = mysqli_real_escape_string($conn, $_POST['value5']);
    $value6 = mysqli_real_escape_string($conn, $_POST['value6']);
    $Engine1 = mysqli_real_escape_string($conn, 'Engine1');
    $Engine2 = mysqli_real_escape_string($conn, 'Engine2');
    $Engine3 = mysqli_real_escape_string($conn, 'Engine3');
    $Engine4 = mysqli_real_escape_string($conn, 'Engine4');
    $Engine5 = mysqli_real_escape_string($conn, 'Engine5');
    $Engine6 = mysqli_real_escape_string($conn, 'Engine6');

        $query = "UPDATE engines
        SET
            value = '".$value1."'
        WHERE
            Engine = '".$Engine1."';
            ";
        $query2 = "UPDATE engines
            SET
                value = '".$value2."'
            WHERE
            Engine = '".$Engine2."';
                ";
        $query3 = "UPDATE engines
                SET
                    value = '".$value3."'
                WHERE
                Engine = '".$Engine3."';
                ";
        $query4 = "UPDATE engines
                     SET
                        value = '".$value4."'
                    WHERE
                    Engine = '".$Engine4."';
                    ";   
        $query5 = "UPDATE engines
                        SET
                            value = '".$value5."'
                        WHERE
                        Engine = '".$Engine5."';
                        ";       
        $query6 = "UPDATE engines
                            SET
                                value = '".$value6."'
                            WHERE
                            Engine = '".$Engine6."';
                            ";           
        mysqli_query($conn, $query);
        mysqli_query($conn, $query2);
        mysqli_query($conn, $query3);
        mysqli_query($conn, $query4);
        mysqli_query($conn, $query5);
        mysqli_query($conn, $query6);
     header('location: Control.html');
    }

    
 else if (isset($_POST['Run'])) {
    $value1 = mysqli_real_escape_string($conn, $_POST['value1']);
    $value2 = mysqli_real_escape_string($conn, $_POST['value2']);
    $value3 = mysqli_real_escape_string($conn, $_POST['value3']);
    $value4 = mysqli_real_escape_string($conn, $_POST['value4']);
    $value5 = mysqli_real_escape_string($conn, $_POST['value5']);
    $value6 = mysqli_real_escape_string($conn, $_POST['value6']);
    $Engine1 = mysqli_real_escape_string($conn, 'Engine1');
    $Engine2 = mysqli_real_escape_string($conn, 'Engine2');
    $Engine3 = mysqli_real_escape_string($conn, 'Engine3');
    $Engine4 = mysqli_real_escape_string($conn, 'Engine4');
    $Engine5 = mysqli_real_escape_string($conn, 'Engine5');
    $Engine6 = mysqli_real_escape_string($conn, 'Engine6');

        $query = "UPDATE engines
        SET
            value = '".$value1."'
        WHERE
            Engine = '".$Engine1."';
            ";
        $query2 = "UPDATE engines
            SET
                value = '".$value2."'
            WHERE
            Engine = '".$Engine2."';
                ";
        $query3 = "UPDATE engines
                SET
                    value = '".$value3."'
                WHERE
                Engine = '".$Engine3."';
                ";
        $query4 = "UPDATE engines
                     SET
                        value = '".$value4."'
                    WHERE
                    Engine = '".$Engine4."';
                    ";   
        $query5 = "UPDATE engines
                        SET
                            value = '".$value5."'
                        WHERE
                        Engine = '".$Engine5."';
                        ";       
        $query6 = "UPDATE engines
                            SET
                                value = '".$value6."'
                            WHERE
                            Engine = '".$Engine6."';
                            ";           
        mysqli_query($conn, $query);
        mysqli_query($conn, $query2);
        mysqli_query($conn, $query3);
        mysqli_query($conn, $query4);
        mysqli_query($conn, $query5);
        mysqli_query($conn, $query6);
     header('location: values.php');
    }
?>