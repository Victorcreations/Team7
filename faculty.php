<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fac.css">
    <title>Document</title>

    
</head>

<body>



    <div class="bulk-upload">
        <form action="../../file_db_save.php" method="post" enctype="multipart/form-data">
            <p id="paragraph">To Upload Bulk Result...</p> 
            <input type="file" class="choose" name="excelFile" accept=".xlsx, .xls, .csv">
            <button id="file" type="submit">Upload</button>
        </form>
    </div>

    <div class="individual">
        <form action="../../file_db_save.php" method="post">    
            <p>Individual Result Upload... </p>
            <button id="Add" type="submit">Click</button>
        </form>
    </div>

    
        <div class="Result">
            <form action="../../data_presentation.php" method="post">
            <p id="sec">Section Wise Result</p>
            <p id="para1"> Select-Year:</p>
            <select class="year" name="year"> 
                <option></option>
                <option id="one" value="two">2-year</option>
                <option id="one" value="three">3-year</option>
                <option id="one"value="four">4-year</option>
            </select>

            <p id="para2"> Select-Section:</p>

            <select class="opt" name="section">
                <option></option>
                <option id="one" value="asec">A</option>
                <option id="one" value="bsec">B</option>
                <option id="one" value="csec">C</option>
                <option id="one" value="dsec">D</option>
                <option id="one" value="esec">E</option>
                <option id="one" value="fsec">F</option>
                <option id="one" value="gsec">G</option>
                <option id="one" value="hsec">H</option>
                <option id="one" value="isec">I</option>
                <option id="one" value="jsec">J</option>
            </select>
            <button id="view" type="submit">View</button>
        </form>
        </div>
    

    <div class="single-result">
        <form action="../../data_presentation.php" method="post">
            <p>To View Result...</p> 
        <center> <input type="number"  id="regno" placeholder="Reg No" name="single_number">
            <input type="text" id="name" placeholder="Name" name="single_name">
            <button id="toview" type="submit">View</button> </center>
        </form>
    </div>


    
    <section id="updateBloomWord">
        <h2 id="h1">Update Bloom Word</h2>
        <p id="p1">Click Here To Update Bloom word</p>
        <a href="bloomupdate.php"><button></button></a>
    </section>

    <section id="createQuestionPaper">
        <h2 id="h2">Create Question Paper</h2>
        <p id="p2">Click the button below to create a new question paper:</p>
        <a href="questionpaper.php"><button></button></a>
    </section>

    <section id="viewQuestionPaper">
        <h2 id="h3">View Question Paper</h2>
        <p id="p3">Click the button below to view an already created question paper:</p>
        <a href="retrievequestionpaper.html"><button></button></a>
    </section>
     <button  href="faculty.php" id="bac"> Back </button>

</html>