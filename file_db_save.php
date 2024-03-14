<?php

include "db_connect.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(isset($_FILES['excelFile']['name'])) {
        if($_FILES['excelFile']['error'] !== 0){
            ?>
            <script>
                window.alert("Some error occured");
            </script>
            <?php
        }else{
            $file_to_open = $_FILES['excelFile']['tmp_name'];

            if (($file = fopen($file_to_open,"r")) !== FALSE) {
                $con = db_connection::load_db();

                $query = "INSERT INTO `students` (sno, subject, reg_no, Name, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, a_11_i, a_11_ii,a_11_iii, b_11_i, b_11_ii, b_11_iii, a_12_i, a_12_ii, a_12_iii, b_12_i, b_12_ii, b_12_iii, a_13_i, a_13_ii, a_13_iii, b_13_i, b_13_ii, b_13_iii, a_14_i, a_14_ii, a_14_iii, b_14_i, b_14_ii, b_14_iii, a_15_i, a_15_ii, a_15_iii, b_15_i, b_15_ii, b_15_iii, a_16_i, a_16_ii, a_16_iii, b_16_i, b_16_ii, b_16_iii, c01, c02, c03, c04, c05, c06,total,section,year)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

                $stmt = $con->prepare($query);

                while(($contents = fgetcsv($file)) !== FALSE) {
                    $types = '';
                    $values = [];
                    foreach($contents as $key)
                    {
                        if(is_numeric($key)){
                            $types .= "i";
                        }else{
                            $types .= "s";
                        }
                        $values[] = $key;
                        // echo $types;

                    }  
                    // print_r($types);
                    // print($values);
                    $stmt->bind_param($types,...$values);
                    $stmt->execute();
                }
                if($stmt->execute()) {
                    ?>
                    <script>
                        window.alert("Files saved Successfully.")
                        window.location.href = "/Own/login/faculty.php";
                    </script>
                <?php
                }else{
                    ?>
                    <script>
                        window.alert("Oops file has not saved.")
                        window.location.href = "/Own/login/faculty.php";
                    </script>
                    <?php
                }
            }
        }
    }
}else{
    ?>
    <script>
        window.alert("Oops some error occured")
        window.location.href = "/Own/login/faculty.php";
    </script>
    <?php
}