<?php
include "dataget.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')  //This is for 2nd year A SECITON
{
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['year']) && isset($_POST['section']))
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
            <link rel="stylesheet" href="/css/data_rep.css">
        </head>
        <body>
        <h2>Panimalar engineering college</h2>
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
            
                    $num = 0;
                    $value = 0;
        
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
            <a href="faculty.php" class="anchor">Back</a>
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
            <link rel="stylesheet" href="/css/data_rep.css">
        </head>
        <body>
            <h2>Panimalar engineering college</h2>
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
                    
                    $num = 0;
                    $value = 0;
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
        
                    $num = 0;
                    $value = 0;
            
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
            
                    $num = 0;
                    $value = 0;
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                
                    $num = 0;
                    $value = 0;
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                    
                    $num = 0;
                    $value = 0;
                
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                
                    $num = 0;
                    $value = 0;
            
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
    
                    $num = 0;
                    $value = 0;
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                    
                    $num = 0;
                    $value = 0;
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                    
                    $num = 0;
                    $value = 0;
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                    
                    $num = 0;
                    $value = 0;
                
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                
                    $num = 0;
                    $value = 0;
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
        
                    $num = 0;
                    $value = 0;
                
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                    
                    $num = 0;
                    $value = 0;
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
        
                    $num = 0;
                    $value = 0;
                
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                    
                    $num = 0;
                    $value = 0;
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                
                    $num = 0;
                    $value = 0;
                
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                    
                    $num = 0;
                    $value = 0;
                
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                
                    $num = 0;
                    $value = 0;
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
            
                    $num = 0;
                    $value = 0;
                
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                
                    $num = 0;
                    $value = 0;
            
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
    
                    $num = 0;
                    $value = 0;
                
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
            
                    $num = 0;
                    $value = 0;
                
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
        
                    $num = 0;
                    $value = 0;
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
        
                    $num = 0;
                    $value = 0;
            
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
            
                    $num = 0;
                    $value = 0;
                
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                    
                    $num = 0;
                    $value = 0;
                    
                    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                    
                    $num = 0;
                    $value = 0;
    
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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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
                    
                    $num = 0;
                    $value = 0;

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
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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

    if(isset($_POST['year']) && isset($_POST['section'])) //This is to show the data for all the 2nd years
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'two' && $section === 'all')
        {
            $sec_result = db_objects::getdataby_year('2');
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </head>
            <body>
                <h3>Year : <?php echo $sec_result[0]['year'];?></h3>
                <div class="sec-contents">
                    <table>
                        <tr>
                            <th>S.no</th>
                            <th>Register Number</th>
                            <th>Name</th>
                            <th>Section</th>
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
                        
                        $rank2 = db_objects::rank_check($pass_total);
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
                            <td><?php echo $sec_result[$num]['section'];?></td>
                            <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                            <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                            <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                            <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                            <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                            <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                            <?php $value += 6;?>
                            <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                            <?php foreach($rank2 as $key => $ans){
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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

    if(isset($_POST['year']) && isset($_POST['section'])) //This is to show the data for all the 3rd years
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'three' && $section === 'all')
        {
            $sec_result = db_objects::getdataby_year('3');
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </head>
            <body>
                <h3>Year : <?php echo $sec_result[0]['year'];?></h3>
                <div class="sec-contents">
                    <table>
                        <tr>
                            <th>S.no</th>
                            <th>Register Number</th>
                            <th>Name</th>
                            <th>Section</th>
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
                        
                        $rank3 = db_objects::rank_check($pass_total);
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
                            <td><?php echo $sec_result[$num]['section'];?></td>
                            <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                            <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                            <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                            <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                            <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                            <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                            <?php $value += 6;?>
                            <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                            <?php foreach($rank3 as $key => $ans){
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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


    if(isset($_POST['year']) && isset($_POST['section'])) //This is to show the data for all the 4th years
    {
        @$year = $_POST['year'];
        @$section = $_POST['section'];

        if($year === 'four' && $section === 'all')
        {
            $sec_result = db_objects::getdataby_year('4');
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </head>
            <body>
                <h3>Year : <?php echo $sec_result[0]['year'];?></h3>
                <div class="sec-contents">
                    <table>
                        <tr>
                            <th>S.no</th>
                            <th>Register Number</th>
                            <th>Name</th>
                            <th>Section</th>
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
                        
                        $rank4 = db_objects::rank_check($pass_total);
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
                            <td><?php echo $sec_result[$num]['section'];?></td>
                            <td><?php echo $t11 = $sec_result[$value]['total'];?></td>
                            <td><?php echo $t12 = $sec_result[$value+1]['total'];?></td>
                            <td><?php echo $t13 = $sec_result[$value+2]['total'];?></td>
                            <td><?php echo $t14 = $sec_result[$value+3]['total'];?></td>
                            <td><?php echo $t15 = $sec_result[$value+4]['total'];?></td>
                            <td><?php echo $t16 = $sec_result[$value+5]['total'];?></td>
                            <?php $value += 6;?>
                            <td><?php echo $total1 = db_objects::total($t11,$t12,$t13,$t14,$t15,$t16);?></td>
                            <?php foreach($rank4 as $key => $ans){
                            if($total1 === $key){
                                ?>
                                <td class="rank"><?php echo $ans;?></td>
                                <?php
                                break;
                            }
                        }

                        if($total1 !== $key){
                            ?>
                            <td></td>
                            <?php
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

    if(isset($_POST['single_number']) && isset($_POST['single_name']))
    {
        @$register_number = $_POST['single_number'];
        @$name = $_POST['single_name'];
        @$year = $_POST['single_year'];

        $year_data = 0;

        if($year === 'two'){
            $year_data += 2;
        }if($year === 'three'){
            $year_data += 3;
        }if($year === 'four'){
            $year_data += 4;
        }

        $result = db_objects::getdataby_individual($name,$register_number,$year_data);

        $stud_mark1 = $result[0]['total'];
        $stud_mark2 = $result[1]['total'];
        $stud_mark3 = $result[2]['total'];
        $stud_mark4 = $result[3]['total'];
        $stud_mark5 = $result[4]['total'];
        $stud_mark6 = $result[5]['total'];

        $candidate_total = db_objects::total($stud_mark1,$stud_mark2,$stud_mark3,$stud_mark4,$stud_mark5,$stud_mark6);

        $rank_arr = [];
        $count = 0;
        $rank_result = 0;
        
        if($year === 'two'){
            $res = db_objects::getdataby_year('2');
            for($totals=0;$totals<round(count($res)/6);$totals++){
                $mark1 = $res[$count]['total'];
                $mark2 = $res[$count+1]['total'];
                $mark3 = $res[$count+2]['total'];
                $mark4 = $res[$count+3]['total'];
                $mark5 = $res[$count+4]['total'];
                $mark6 = $res[$count+5]['total'];
                $count += 6;

                $mark_total = db_objects::total($mark1,$mark2,$mark3,$mark4,$mark5,$mark6);
                $check = db_objects::result_check($mark1,$mark2,$mark3,$mark4,$mark5,$mark6);

                if($check > 0){
                    continue;
                }else{
                    $rank_arr [] = $mark_total; 
                }
            }
            $final_rank = db_objects::rank_check($rank_arr);

            foreach($final_rank as $key => $value){
                if($candidate_total === $key)
                {
                    $rank_result = $value;
                }
            }
        }

        if($year === 'three'){
            $res = db_objects::getdataby_year('3');
            // $rank_result = 0;
            for($totals=0;$totals<round(count($res)/6);$totals++){
                $mark1 = $res[$count]['total'];
                $mark2 = $res[$count+1]['total'];
                $mark3 = $res[$count+2]['total'];
                $mark4 = $res[$count+3]['total'];
                $mark5 = $res[$count+4]['total'];
                $mark6 = $res[$count+5]['total'];
                $count += 6;

                $mark_total = db_objects::total($mark1,$mark2,$mark3,$mark4,$mark5,$mark6);
                $check = db_objects::result_check($mark1,$mark2,$mark3,$mark4,$mark5,$mark6);

                if($check > 0){
                }else{
                    $rank_arr [] = $mark_total; 
                }
            }

            $final_rank = db_objects::rank_check($rank_arr);

            foreach($final_rank as $key => $value){
                if($candidate_total === $key)
                {
                    $rank_result = $value;
                }
            }
        }

        if($year === 'four'){
            $res = db_objects::getdataby_year('4');
            // $rank_result = 0;
            for($totals=0;$totals<round(count($res)/6);$totals++){
                $mark1 = $res[$count]['total'];
                $mark2 = $res[$count+1]['total'];
                $mark3 = $res[$count+2]['total'];
                $mark4 = $res[$count+3]['total'];
                $mark5 = $res[$count+4]['total'];
                $mark6 = $res[$count+5]['total'];
                $count += 6;

                $mark_total = db_objects::total($mark1,$mark2,$mark3,$mark4,$mark5,$mark6);
                $check = db_objects::result_check($mark1,$mark2,$mark3,$mark4,$mark5,$mark6);

                if($check > 0){
                }else{
                    $rank_arr [] = $mark_total; 
                }
            }

            foreach($rank_arr as $key => $value){
                if($candidate_total === $key)
                {
                    $rank_result = $value;
                }
            }    
        }

        if($result){
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Student Result Page</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
                        margin: 0;
                        padding: 0;
                        animation: fadeInAnimation ease 3s;
                        animation-iteration-count: 1;
                        animation-fill-mode: forwards;
                    }
                    @keyframes fadeInAnimation {
                        0% {
                            opacity: 0;
                        }
                        100% {
                            opacity: 1;
                        }
                    }
                    .container {
                        max-width: 800px;
                        margin: 20px auto;
                        padding: 20px;
                        background-color: #fff;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        overflow: hidden;
                    }
                    h1 {
                        text-align: center;
                        margin-top: 0;
                        margin-bottom: 20px;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        border-radius: 5px;
                        overflow: hidden;
                    }
                    th, td {
                        padding: 10px;
                        text-align: left;
                        border-bottom: 1px solid #ddd;
                    }
                    th {
                        background-color: #f2f2f2;
                    }
                    tr:nth-child(even) {
                        background-color: #f9f9f9;
                    }
                    tr:hover {
                        background-color: #f2f2f2;
                    }
                    img.logo {
                        float: left;
                        margin-right: 20px;
                        width: 100px;
                        height: auto;
                    }
                    .logo-container {
                        overflow: hidden;
                    }
                    .grade {
                        font-weight: bold;
                    }
                    .print-button, .back-button {
                        text-align: center;
                        margin-top: 20px;
                    }
                    .button-container {
                        text-align: center; /* Center align the buttons */
                    }
                    .print-button button, .back-button button {
                        padding: 10px 20px;
                        background-color: #008CBA;
                        color: white;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                        transition: background-color 0.3s ease;
                        margin: 0 5px;
                    }
                    .print-button button:hover, .back-button button:hover {
                        background-color: #005f7a;
                    }
                    @media screen and (max-width: 600px) {
                        .container {
                            margin: 10px;
                            padding: 10px;
                        }
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <div class="logo-container">
                        <img class="logo" src="loGO.jpeg" alt="Logo">
                    </div>
                    <h1>Internal 1  Result</h1>
                    <div class="info">
                        <p><strong>Name:</strong><?php echo $result[0]['Name'];?></p>
                        <p><strong>Register Number:</strong><?php echo $result[0]['reg_no'];?></p>
                        <p><strong>Semester:</strong> 5</p>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Marks</th>
                                <th>Result</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $result[0]['subject'];?></td>
                                <td><?php echo $result[0]['total'];?></td>
                                <td class="result"></td>
                                <td class="grade"></td>
                            </tr>
                                <td><?php echo $result[1]['subject'];?></td>
                                <td><?php echo $result[1]['total'];?></td>
                                <td class="result"></td>
                                <td class="grade"></td>
                            </tr>
                            <tr>
                                <td><?php echo $result[2]['subject'];?></td>
                                <td><?php echo $result[2]['total'];?></td>
                                <td class="result"></td>
                                <td class="grade"></td>
                            </tr>
                            <tr>
                                <td><?php echo $result[3]['subject'];?></td>
                                <td><?php echo $result[3]['total'];?></td>
                                <td class="result"></td>
                                <td class="grade"></td>
                            </tr>
                            <tr>
                                <td><?php echo $result[4]['subject'];?></td>
                                <td><?php echo $result[4]['total'];?></td>
                                <td class="result"></td>
                                <td class="grade"></td>
                            </tr>
                            <tr>
                                <td><?php echo $result[5]['subject'];?></td>
                                <td><?php echo $result[5]['total'];?></td>
                                <td class="result"></td>
                                <td class="grade"></td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td class="total"></td>
                                <td colspan="2">Rank : <?php echo $rank_result;?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="button-container">
                        <div class="print-button">
                            <button onclick="window.print()">Print</button>
                        </div>
                        <div class="back-button">
                            <button onclick="window.history.back()">Back</button>
                        </div>
                    </div>
                </div>
                <script>
                    // Grades and pass/fail status calculation
                    var subjects = document.querySelectorAll('tbody tr:not(:last-child)');
                    var totalMarks = 0;

                    subjects.forEach(function(subjectRow) {
                        var marksCell = subjectRow.querySelector('td:nth-child(2)');
                        var resultCell = subjectRow.querySelector('.result');
                        var gradeCell = subjectRow.querySelector('.grade');
                        var marks = parseInt(marksCell.textContent);
                        totalMarks += marks;

                        if (marks >= 40) {
                            resultCell.textContent = 'Pass';
                        } else {
                            resultCell.textContent = 'Fail';
                        }

                        if (marks >= 90) {
                            gradeCell.textContent = 'O';
                        } else if (marks >= 80) {
                            gradeCell.textContent = 'A+';
                        } else if (marks >= 70) {
                            gradeCell.textContent = 'A';
                        } else if (marks >= 65) {
                            gradeCell.textContent = 'B+';
                        } else if (marks >= 50) {
                            gradeCell.textContent = 'B';
                        } else {
                            gradeCell.textContent = 'C';
                        }
                    });

                    
                    var totalCell = document.querySelector('.total');
                    totalCell.textContent = totalMarks;
                </script>
            </body>
            </html>
        <?php
        }else{
            echo "No fetched data";
        }
    }

    //name = gokul
    //if name === gokul
    //sno = 1

    if(isset($_POST['single_name']) && isset($_POST['single_reg']) && isset($_POST['year_input']) && isset($_POST['single_subject']))
    {
        @$name = $_POST['single_name'];
        @$register_number = $_POST['single_reg'];
        @$year = $_POST['year_input'];
        @$subject = $_POST['single_subject'];

        $serial_number = db_objects::get_serial_number();
        $student_existense = db_objects::user_check($name,$register_number);

        if($student_existense > 0)
        {

        }
        else{
            
        }
    }
}