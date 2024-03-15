<?php

include "db_connect.php";

class db_objects
{

    public static function get_data()//get data for all the subjects
    {
        $conn = db_connection::load_db();

        $query = "SELECT * FROM students";

        $stmt = $conn->prepare($query);
        $stmt -> execute();
        $result = $stmt -> get_result();

        $data = [];
        
        if($result)
        {
            while($row = $result -> fetch_assoc())
            {
                $data[] = $row;
            }

            return $data;
        }
    }

    public static function getdataby_individual($register_number,$name,$year)
    {
        $conn = db_connection::load_db();

        $query = "SELECT * FROM student WHERE Name = ? AND reg_no = ? AND year = ?";

        $stmt = $conn->prepare($query);

        $stmt -> bind_param("sii",$name,$register_number,$year);

        $stmt -> execute();

        $result = $stmt->get_result();

        $data = [];

        while($row = $result->fetch_assoc())
        {
            $data[] = $row;
        }

        return $data;
    }


    public static function getdataby_section($section) //Get all the data of the subjects usign section
    {
        $conn = db_connection::load_db();

        $query = "SELECT * FROM students WHERE section = ?";

        $stmt = $conn -> prepare($query);
        $stmt->bind_param("s",$section);
        $stmt->execute();

        $result = $stmt->get_result();

        $data = [];

        if($result)
        {
            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }

            return $data;
        }
    }


    public static function getdataby_sec_year($section,$year)//Get data by both sections and subjects
    {
        $conn = db_connection::load_db();

        $query = "SELECT * FROM students WHERE section = ? AND year = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("si",$section,$year);
        $stmt->execute();
        
        $result = $stmt->get_result();

        $data = [];

        if($result)
        {
            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }

            return $data;
        }

    }

    public static function getdataby_subject($subject)
    {
        $conn = db_connection::load_db();

        $query = "SELECT * FROM students WHERE subjects = ?";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('s',$subject);
        $stmt->execute();

        $result = $stmt->get_result();

        $data = [];

        if($result)
        {
            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }

            return $data;
        }

    }

    public static function getdataby_year($year)
    {
        $conn = db_connection::load_db();

        $query = "SELECT * FROM students WHERE year = ?";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('i',$year);
        $stmt->execute();

        $result = $stmt->get_result();

        $data = [];

        if($result)
        {
            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }

            return $data;
        }

    }

    public static function total(...$datas)
    {
        $total = 0;

        foreach($datas as $data)
        {
            $total += $data;
        }
        return $total;
    }


    public static function result_check(...$marks)
    {
        $result = 0;

        foreach($marks as $mark)
        {
            if($mark < 50)
            {
                $result += 1;
            }
        }
        return $result;
    }

    public $total = 0;
    public static function rank_check($total_marks)
    {
        rsort($total_marks);
        // global $total;
        $results = [];

        for($i=0;$i<count($total_marks);$i++)
        {
            $results[$i+1] = $total_marks[$i];
            // $total = $total_marks[$i]; 
        }
        return $results;
    }
}

// $val = db_objects::rank_check([1,55,43,67,98,3,45,33]);
// print_r($val);
// $value = db_objects::getdataby_section("a");
// print_r(count($value));
// echo"<br>";
// db_objects::result_check('a','b','v');
// $value = db_objects::getdataby_section("a");
// for($i=0;$i<7;$i++)
// {
//     print_r($value[$i]);
// }
// echo count($value);
// print_r($value[0])6;
// print_r(round(count($value)/6));

// $value = db_objects::getdataby_year('2');
// print_r($value);