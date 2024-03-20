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

    public static function getdataby_individual($name,$register_number,$year)
    {
        $conn = db_connection::load_db();

        $query = "SELECT * FROM students WHERE Name = ? AND reg_no = ? AND year = ? ";

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

    public static function user_check($name,$register_number)
    {
        $conn = db_connection::load_db();

        $query = "SELECT COUNT(*) FROM students WHERE Name = ? AND reg_no = ?";

        $stmt = $conn -> prepare($query);

        $stmt -> bind_param("si",$name,$register_number);

        $stmt->execute();

        $result = $stmt->get_result();

        $row = $result->fetch_assoc();

        $count = $row['COUNT(*)'];

        return $count;
    }

    public static function get_serial_number()
    {
        $conn = db_connection::load_db();

        $query = "SELECT sno FROM students ORDER BY sno DESC LIMIT 1";

        $stmt = $conn->execute_query($query);

        $result = $stmt->fetch_assoc();

        return $result['sno'];
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
        $results = [];
        $rank = 1;

        for($i=0;$i<count($total_marks);$i++)
        {
            $results[$total_marks[$i]] = $rank;
            $rank++;
        }
        return $results;
    }
}

