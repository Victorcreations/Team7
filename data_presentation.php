<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/data_rep.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Panimalar engineering college</h2>
    </header>
</body>
</html>

<?php
include "dataget.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')  //This is for 2nd year A SECITON
{
    if(isset($_POST['year']) && isset($_POST['section']))
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'two' && $section === 'asec')
        { 
            $sec_result = db_objects::getdataby_sec_year("a","2");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) // This is for 2nd year b section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'two' && $section === 'bsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("b","2");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) // This is for 2nd year c section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'two' && $section === 'csec')
        { 
            $sec_result = db_objects::getdataby_sec_year("c","2");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) // This is for 2nd year d section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'two' && $section === 'dsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("d","2");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }

    if(isset($_POST['year']) && isset($_POST['section'])) // This is for 2nd year e section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'two' && $section === 'esec')
        { 
            $sec_result = db_objects::getdataby_sec_year("e","2");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) // This is for 2nd year f section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'two' && $section === 'fsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("f","2");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) // This is for 2nd year G section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'two' && $section === 'gsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("g","2");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 2nd year H section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'two' && $section === 'hsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("h","2");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 2nd year I section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'two' && $section === 'isec')
        { 
            $sec_result = db_objects::getdataby_sec_year("i","2");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 2nd year J section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'two' && $section === 'jsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("h","2");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) // This is for 3rd year A section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'three' && $section === 'asec')
        { 
            $sec_result = db_objects::getdataby_sec_year("a","3");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) // This is for 3rd year B section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'three' && $section === 'bsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("b","3");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 3rd year C section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'three' && $section === 'csec')
        { 
            $sec_result = db_objects::getdataby_sec_year("c","3");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }

    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 3rd year D section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'three' && $section === 'dsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("d","3");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 3rd year E section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'three' && $section === 'esec')
        { 
            $sec_result = db_objects::getdataby_sec_year("e","3");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 3rd year F section 
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'three' && $section === 'fsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("f","3");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }

    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 3rd year G section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'three' && $section === 'gsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("g","3");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }

    if(isset($_POST['year']) && isset($_POST['section'])) //This is fro 3rd year H section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'three' && $section === 'hsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("h","3");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is fro 3rd year I section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'three' && $section === 'isec')
        { 
            $sec_result = db_objects::getdataby_sec_year("i","3");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is fro 3rd year J section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'three' && $section === 'jsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("j","3");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 4th year A section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'four' && $section === 'asec')
        { 
            $sec_result = db_objects::getdataby_sec_year("a","4");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 4th year B section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'four' && $section === 'bsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("b","4");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 4th year C  section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'four' && $section === 'csec')
        { 
            $sec_result = db_objects::getdataby_sec_year("c","4");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }

    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 4th year D section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'four' && $section === 'dsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("d","4");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }
    

    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 4th year E section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'four' && $section === 'dsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("d","4");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }

    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 4th year F section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'four' && $section === 'fsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("f","4");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }

    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 4th year G section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'four' && $section === 'gsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("g","4");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 4th year H section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'four' && $section === 'hsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("h","4");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }

    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 4th year I section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'four' && $section === 'isec')
        { 
            $sec_result = db_objects::getdataby_sec_year("i","4");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }

    if(isset($_POST['year']) && isset($_POST['section'])) //This is for 4th year J section
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'four' && $section === 'jsec')
        { 
            $sec_result = db_objects::getdataby_sec_year("j","4");
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Section : <?php echo $sec_result[0]['section'];?></h3>
            <div class="sec-contents">
                <table>
                    <tr>
                        <th>S.no</th>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th><?php echo $sec_result[0]['subject'];?></th>
                        <th><?php echo $sec_result[1]['subject'];?></th>
                        <th><?php echo $sec_result[2]['subject'];?></th>
                        <th><?php echo $sec_result[3]['subject'];?></th>
                        <th><?php echo $sec_result[4]['subject'];?></th>
                        <th><?php echo $sec_result[5]['subject'];?></th>
                        <th>Total</th>
                        <th>Rank</th>
                        <th>Fail</th>
                    </tr>
                    <?php
                    $num = 0;
                    $inner = 0;
                    $pass_total = [];
                    for($j=0;$j<round(count($sec_result)/6);$j++)
                    {
                        $t1 = $sec_result[$inner]['total'];
                        $t2 = $sec_result[$inner+1]['total'];
                        $t3 = $sec_result[$inner+2]['total'];
                        $t4 = $sec_result[$inner+3]['total'];
                        $t5 = $sec_result[$inner+4]['total'];
                        $t6 = $sec_result[$inner+5]['total'];
                        $result_total = db_objects::total($t1,$t2,$t3,$t4,$t5,$t6);
                        $result = db_objects::result_check($t1,$t2,$t3,$t4,$t5,$t6);
                        $inner += 6;

                        if($result != 0)
                        {    
                            continue;
                        }else{
                            $pass_total[] = $result_total;
                        }
                        
                    }
                    
                    $rank = db_objects::rank_check($pass_total);
                    // print_r($rank);
                    $num = 0;
                    $value = 0;
                    // echo $num;
                    // echo count($sec_result);
                    for($i=0;$i<round(count($sec_result)/6);$i++)
                    {
                        ?> 
                    <tr>
                        <td><?php echo$i + 1;?></td>
                        <td><?php echo $sec_result[$num]['reg_no'];?></td>
                        <td><?php echo $sec_result[$num]['Name'];?></td>
                        <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                        <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                        <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                        <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                        <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                        <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                        <?php $value += 6;?>
                        <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                        <?php foreach($rank as $key => $ans){
                            if($total1 === $ans){
                                ?>
                                <td class="rank">1</td>
                                <?php
                                break;
                            }else{
                                ?>
                                <?php $student_rank = array_search($total1,$rank);?>
                                <td class="rank"><?php echo $student_rank;?></td>
                            <?php
                            break;
                                }
                        }
                            ?>
                        <td class="fail"><?php echo db_objects::result_check($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                    </tr>
                    <?php
                    $num += 6;
                    }
                    
                    ?>
                </table>
            </div>
            <a href="/Own/login/faculty.php" class="anchor">Back</a>
        </body>
        <script src="/js/data_representation.js"></script>
        </html>
        <?php
        }
    }


}
