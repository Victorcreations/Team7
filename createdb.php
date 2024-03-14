<?php 

class create_db
{
    public static function make_table($file_to_create_table,$table_name,...$args)
    {
        $file = $file_to_create_table;
        $data = [];
        $params = [];

        $query = "CREATE TABLE $table_name (";

        if(($file_handler = fopen($file,'r')) !== false)
        {
            if(($contents = fgetcsv($file_handler,0)) !== false)
            {
                $data = $contents;
                foreach($args as $a)
                {
                    $params[] = $a;
                }             
            }
        }

        if(count($contents) == count($args))
        {
            for($i=0;$i<count($data)+1;$i++)
            {
                $query .= $data[$i]." ".$params[$i].", ";
            }

            $query = rtrim($query, ", ") . ")"; 
            echo $query;

        }else{
            echo "The no of args and params does not match args = ".count($args)." and count of params = ".count($contents);
        }  
    }
}

create_db::make_table('/home/victor/Documents/internal_marks/intmarks/data/test.csv',"test5",'b','c','d','e','f','g');

































// class create_db
// {
//     public static function table_make($tablename,...$args)
//     {
//         $query = "this is $tablename (\" ";
//         // echo $query;

//         foreach($args as $data)
//         {
//             $query .= " $data varchar(255) not null,";
//         }
//         $query = rtrim($query,",");
//         $query .= "\")";
        
//         echo $query;
//     }
// }

// create_db::table_make("table",'name','num','valu');