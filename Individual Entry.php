<IDOCTYPE html>
    <html>

    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: rgb(255, 255, 255);
            }

            table {
                border-collapse: collapse;
                width: 80%;
                margin: 20px auto;
                background-color: white;
                border: 4px solid black;
            }

            th,
            td {
                border: 1px solid #bab1b1;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }

            input[type="number"] {
                text-align: center;
                border: 1px solid #3b3737;
                cursor: pointer;
                width: 100%;
                height: 100%;
                padding: 10%;
            }

            .center {
                text-align: center;
            }

            .size input[type="number"] {
                width: 100%;
                height: 100%;
                padding: 10%;
            }

            .size2 input[type="number"] {
                width: 100%;
                height: 120px;
                padding: 15%;
            }

            button {
                background-color: #c3d4c4;
                border: none;
                color: rgb(0, 0, 0);
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 5px;
            }

            button:hover {

                background-color: #45a049;
                color: white;
                transition-duration: 0.2s;
                border-top: 3px solid red;
                border-right: 3px solid blue;
                border-bottom: 3px solid rgb(26, 137, 192);
                border-left: 3px solid rgb(209, 15, 163);
            }

            .span_name,.span_reg,.subject_name,.single_year{
                position: relative;
                left: 193px;
            }

            .single_name,.single_reg,.sub_input,.year_input{
                position: relative;
                left: 208px;
            }

        </style>

    </head>

    <body>
        <form action="data_presentation.php" method="post">
            <span class="span_name">Name : </span><input type="text" name="single_name" class="single_name">
            <br><br>
            <span class="span_reg">Register Number : </span><input type="text" name="single_reg" class="single_reg">
            <br><br>
            <span class="single_year">Year : </span><input type="text" name="year_input" class="year_input">
            <br><br>
            <span class="subject_name">Subject Name : </span><input type="text" name="single_subject" class="sub_input">
            <br><br>
            <span class="single_section"></span>
            <center>
                <table border="5">
                    <th colspan="2">PART-A</th>
                    <th colspan="6">PART-B & C</th>
                    <th rowspan="2">Grant Total</th>
                    <tr>
                        <th rowspan="3">Q.NO</th>
                        <th rowspan="3">Marks</th>
                        <th>Q.NO</th>
                        <th>choice</th>
                        <th>i</th>
                        <th>ii</th>
                        <th>iii</th>
                        <th>Total Mark</th>

                    </tr>

                    <tr>

                        <td rowspan="2">11 </td>
                        <td>a</td>
                        <td><input type="number" id="11ai" oninput="disableOther('11ai')" onkeyup="add11()"></td>
                        <td><input type="number" id="11aii" oninput="disableOther('11aii')" onkeyup="add11()"></td>
                        <td><input type="number" id="11aiii" oninput="disableOther('11aiii')" onkeyup="add11()"></td>
                        <td>
                            <p id="11atotal"></p>
                        </td>
                        <td class="center"> <b> PART-A </b> </td>

                    </tr>

                    <tr>
                        <td>b</td>
                        <td><input type="number" id="11bi" oninput="disableOther('11bi')" onkeyup="add11()"></td>
                        <td><input type="number" id="11bii" oninput="disableOther('11bii')" onkeyup="add11()"></td>
                        <td><input type="number" id="11biii" oninput="disableOther('11biii')" onkeyup="add11()"></td>
                        <td>
                            <p id="11btotal"></p>
                        </td>
                        <td rowspan="2" class="size"><input type="number" id="parta" style="height: 100px; font-size: 1rem;"
                                readonly></td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td><input type="number" id="1" onkeyup="add2m()"></td>
                        <td rowspan="2">12</td>
                        <td>a</td>
                        <td><input type="number" id="12ai" oninput="disableOther('12ai')" onkeyup="add12()"></td>
                        <td><input type="number" id="12aii" oninput="disableOther('12aii')" onkeyup="add12()"></td>
                        <td><input type="number" id="12aiii" oninput="disableOther('12aiii')" onkeyup="add12()"></td>
                        <td>
                            <p id="12atotal"></p>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><input type="number" id="2" onkeyup="add2m()"></td>
                        <td>b</td>
                        <td><input type="number" id="12bi" oninput="disableOther('12bi')" onkeyup="add12()"></td>
                        <td><input type="number" id="12bii" oninput="disableOther('12bii')" onkeyup="add12()"></td>
                        <td><input type="number" id="12biii" oninput="disableOther('12biii')" onkeyup="add12()"></td>
                        <td>
                            <p id="12btotal"></p>
                        </td>
                        <td class="center"><b> PART- B & C </b></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td><input type="number" id="3" onkeyup="add2m()"></td>
                        <td rowspan="2">13</td>
                        <td>a</td>
                        <td><input type="number" id="13ai" oninput="disableOther('13ai')" onkeyup="add13()"></td>
                        <td><input type="number" id="13aii" oninput="disableOther('13aii')" onkeyup="add13()"></td>
                        <td><input type="number" id="13aiii" oninput="disableOther('13aiii')" onkeyup="add13()"></td>
                        <td>
                            <p id="13atotal"></p>
                        </td>
                        <td rowspan="2" class="size"><input type="number" id="partb" style="height: 100px;font-size: 1rem; "
                                readonly></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td><input type="number" id="4" onkeyup="add2m()"></td>
                        <td>b</td>
                        <td><input type="number" id="13bi" oninput="disableOther('13bi')" onkeyup="add13()"></td>
                        <td><input type="number" id="13bii" oninput="disableOther('13bii')" onkeyup="add13()"></td>
                        <td><input type="number" id="13biii" oninput="disableOther('13biii')" onkeyup="add13()"></td>
                        <td>
                            <p id="13btotal"></p>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td><input type="number" id="5" onkeyup="add2m()"></td>
                        <td rowspan="2">14</td>
                        <td>a</td>
                        <td><input type="number" id="14ai" oninput="disableOther('14ai')" onkeyup="add14()"></td>
                        <td><input type="number" id="14aii" oninput="disableOther('14aii')" onkeyup="add14()"></td>
                        <td><input type="number" id="14aiii" oninput="disableOther('14aiii')" onkeyup="add14()"></td>
                        <td>
                            <p id="14atotal"></p>
                        </td>
                        <td class="center"> <b>Grant Total </b> </td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td><input type="number" id="6" onkeyup="add2m()"></td>
                        <td>b</td>
                        <td><input type="number" id="14bi" oninput="disableOther('14bi')" onkeyup="add14()"></td>
                        <td><input type="number" id="14bii" oninput="disableOther('14bii')" onkeyup="add14()"></td>
                        <td><input type="number" id="14biii" oninput="disableOther('14biii')" onkeyup="add14()"></td>
                        <td>
                            <p id="14btotal"></p>
                        </td>
                        <td rowspan="5" class="size2"><input type="number" id="total"
                                style="height: 290px;display: inline-block; font-size: 2rem; " readonly></td>

                    <tr>
                        <td>7</td>
                        <td><input type="number" id="7" onkeyup="add2m()"></td>
                        <td rowspan="2">15</td>
                        <td>a</td>
                        <td><input type="number" id="15ai" oninput="disableOther('15ai')" onkeyup="add15()"></td>
                        <td><input type="number" id="15aii" oninput="disableOther('15aii')" onkeyup="add15()"></td>
                        <td><input type="number" id="15aiii" oninput="disableOther('15aiii')" onkeyup="add15()"></td>
                        <td>
                            <p id="15atotal"></p>
                        </td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td><input type="number" id="8" onkeyup="add2m()"></td>
                        <td>b</td>
                        <td><input type="number" id="15bi" oninput="disableOther('15bi')" onkeyup="add15()"></td>
                        <td><input type="number" id="15bii" oninput="disableOther('15bii')" onkeyup="add15()"></td>
                        <td><input type="number" id="15biii" oninput="disableOther('15biii')" onkeyup="add15()"></td>
                        <td>
                            <p id="15btotal"></p>
                        </td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td><input type="number" id="9" onkeyup="add2m()"></td>
                        <td rowspan="2">16</td>
                        <td>a</td>
                        <td><input type="number" id="16ai" oninput="disableOther('16ai')" onkeyup="add16()"></td>
                        <td><input type="number" id="16aii" oninput="disableOther('16aii')" onkeyup="add16()"></td>
                        <td><input type="number" id="16aiii" oninput="disableOther('16aiii')" onkeyup="add16()"></td>
                        <td>
                            <p id="16atotal"></p>
                        </td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td><input type="number" id="10" onkeyup="add2m()"></td>
                        <td>b</td>
                        <td><input type="number" id="16bi" oninput="disableOther('16bi')" onkeyup="add16()"></td>
                        <td><input type="number" id="16bii" oninput="disableOther('16bii')" onkeyup="add16()"></td>
                        <td><input type="number" id="16biii" oninput="disableOther('16biii')" onkeyup="add16()"></td>
                        <td>
                            <p id="16btotal"></p>
                        </td>
                    </tr>

                </table><br><br>
                <button onclick="return validate()">Validate</button>
                <button onclick="return total13m15m(); " style="display: none;" id="check">total</button>
                <button type="submit" style="display: none;" id="insert" onclick="redirectToPHP()">Insert</button>

            </center>
        </form>

        <script>
            function validate() {
                var a1 = document.getElementById("1").value;
                var a2 = document.getElementById("2").value;
                var a3 = document.getElementById("3").value;
                var a4 = document.getElementById("4").value;
                var a5 = document.getElementById("5").value;
                var a6 = document.getElementById("6").value;
                var a7 = document.getElementById("7").value;
                var a8 = document.getElementById("8").value;
                var a9 = document.getElementById("9").value;
                var a10 = document.getElementById("10").value;

                for (let i = 1; i <= 10; i++) {
                    let question = "Part-A Question NO:" + i;
                    if (eval("a" + i) == "") {
                        alert("Please Fill the " + question);
                        return false;
                    }
                }

                var a11i = parseInt(document.getElementById("11ai").value);
                var a11ii = parseInt(document.getElementById("11aii").value);
                var a11iii = parseInt(document.getElementById("11aiii").value);

                var b11i = document.getElementById("11bi").value;
                var b11ii = document.getElementById("11bii").value;
                var b11iii = document.getElementById("11biii").value;

                var a12i = document.getElementById("12ai").value;
                var a12ii = document.getElementById("12aii").value;
                var a12iii = document.getElementById("12aiii").value;

                var b12i = document.getElementById("12bi").value;
                var b12ii = document.getElementById("12bii").value;
                var b12iii = document.getElementById("12biii").value;

                var a13i = document.getElementById("13ai").value;
                var a13ii = document.getElementById("13aii").value;
                var a13iii = document.getElementById("13aiii").value;

                var b13i = document.getElementById("13bi").value;
                var b13ii = document.getElementById("13bii").value;
                var b13iii = document.getElementById("13biii").value;

                var a14i = document.getElementById("14ai").value;
                var a14ii = document.getElementById("14aii").value;
                var a14iii = document.getElementById("14aiii").value;

                var b14i = document.getElementById("14bi").value;
                var b14ii = document.getElementById("14bii").value;
                var b14iii = document.getElementById("14biii").value;

                var a15i = document.getElementById("15ai").value;
                var a15ii = document.getElementById("15aii").value;
                var a15iii = document.getElementById("15aiii").value;

                var b15i = document.getElementById("15bi").value;
                var b15ii = document.getElementById("15bii").value;
                var b15iii = document.getElementById("15biii").value;

                var a16i = document.getElementById("16ai").value;
                var a16ii = document.getElementById("16aii").value;
                var a16iii = document.getElementById("16aiii").value;

                var b16i = document.getElementById("16bi").value;
                var b16ii = document.getElementById("16bii").value;
                var b16iii = document.getElementById("16biii").value;


                if (a11i === "") {
                    alert("Please Fill the Part-B 1st Question i choice");
                    return false;
                }
                if (a11ii === "") {
                    alert("Please Fill the Part-B 1st Question ii choice");
                    return false;
                }
                if (a11iii === "") {
                    alert("Please Fill the Part-B 1st Question iii choice");
                    return false;
                }
                if (b11i === "") {
                    alert("Please Fill the Part-B 1st Question i choice");
                    return false;
                }
                if (b11ii === "") {
                    alert("Please Fill the Part-B 1st Question ii choice");
                    return false;
                }
                if (b11iii === "") {
                    alert("Please Fill the Part-B 1st Question iii choice");
                    return false;
                }


                if (a12i === "") {
                    alert("Please Fill the Part-B 2nd Question i choice");
                    return false;
                }
                if (a12ii === "") {
                    alert("Please Fill the Part-B 2nd Question ii choice");
                    return false;
                }
                if (a12iii === "") {
                    alert("Please Fill the Part-B 2nd Question iii choice");
                    return false;
                }
                if (b12i === "") {
                    alert("Please Fill the Part-B 2nd Question i choice");
                    return false;
                }
                if (b12ii === "") {
                    alert("Please Fill the Part-B 2nd Question ii choice");
                    return false;
                }
                if (b12iii === "") {
                    alert("Please Fill the Part-B 2nd Question iii choice");
                    return false;
                }



                if (a13i === "") {
                    alert("Please Fill the Part-B 13th Question i choice");
                    return false;
                }
                if (a13ii === "") {
                    alert("Please Fill the Part-B 13th Question ii choice");
                    return false;
                }
                if (a13iii === "") {
                    alert("Please Fill the Part-B 13th Question iii choice");
                    return false;
                }
                if (b13i === "") {
                    alert("Please Fill the Part-B 13th Question i choice");
                    return false;
                }
                if (b13ii === "") {
                    alert("Please Fill the Part-B 13th Question ii choice");
                    return false;
                }
                if (b13iii === "") {
                    alert("Please Fill the Part-B 13th Question iii choice");
                    return false;
                }


                if (a14i === "") {
                    alert("Please Fill the Part-B 14th Question i choice");
                    return false;
                }
                if (a14ii === "") {
                    alert("Please Fill the Part-B 14th Question ii choice");
                    return false;
                }
                if (a14iii === "") {
                    alert("Please Fill the Part-B 14th Question iii choice");
                    return false;
                }
                if (b14i === "") {
                    alert("Please Fill the Part-B 14th Question i choice");
                    return false;
                }
                if (b14ii === "") {
                    alert("Please Fill the Part-B 14th Question ii choice");
                    return false;
                }
                if (b14iii === "") {
                    alert("Please Fill the Part-B 14th Question iii choice");
                    return false;
                }


                if (a15i === "") {
                    alert("Please Fill the Part-B 15th Question i choice");
                    return false;
                }
                if (a15ii === "") {
                    alert("Please Fill the Part-B 15th Question ii choice");
                    return false;
                }
                if (a15iii === "") {
                    alert("Please Fill the Part-B 15th Question iii choice");
                    return false;
                }
                if (b15i === "") {
                    alert("Please Fill the Part-B 15th Question i choice");
                    return false;
                }
                if (b15ii === "") {
                    alert("Please Fill the Part-B 15th Question ii choice");
                    return false;
                }
                if (b15iii === "") {
                    alert("Please Fill the Part-B 15th Question iii choice");
                    return false;
                }


                if (a16i === "") {
                    alert("Please Fill the Part-B 16th Question i choice");
                    return false;
                }
                if (a16ii === "") {
                    alert("Please Fill the Part-B 16th Question ii choice");
                    return false;
                }
                if (a16iii === "") {
                    alert("Please Fill the Part-B 16th Question iii choice");
                    return false;
                }
                if (b16i === "") {
                    alert("Please Fill the Part-B 16th Question i choice");
                    return false;
                }
                if (b16ii === "") {
                    alert("Please Fill the Part-B 16th Question ii choice");
                    return false;
                }
                if (b16iii === "") {
                    alert("Please Fill the Part-B 16th Question iii choice");
                    return false;
                }
                if (
                    a11i !== "" && a11ii !== "" && a11iii !== "" && b11i !== "" && b11ii !== "" && b11iii !== "" &&
                    a12i !== "" && a12ii !== "" && a12iii !== "" && b12i !== "" && b12ii !== "" && b12iii !== "" &&
                    a13i !== "" && a13ii !== "" && a13iii !== "" && b13i !== "" && b13ii !== "" && b13iii !== "" &&
                    a14i !== "" && a14ii !== "" && a14iii !== "" && b14i !== "" && b14ii !== "" && b14iii !== "" &&
                    a15i !== "" && a15ii !== "" && a15iii !== "" && b15i !== "" && b15ii !== "" && b15iii !== "" &&
                    a16i !== "" && a16ii !== "" && a16iii !== "" && b16i !== "" && b16ii !== "" && b16iii !== "") {
                    document.getElementById("check").style.display = "inline-block";
                }

            }

            function disableOther(activeInput) {
                if (activeInput === '11ai' || activeInput === '11aii' || activeInput === '11aiii') {
                    document.getElementById('11bi').disabled = true;
                    document.getElementById('11bii').disabled = true;
                    document.getElementById('11biii').disabled = true;
                    document.getElementById('11btotal').disabled = true;
                    document.getElementById('11bi').style.backgroundColor = 'grey';
                    document.getElementById('11bii').style.backgroundColor = 'grey';
                    document.getElementById('11biii').style.backgroundColor = 'grey';
                    document.getElementById('11bi').value = '0';
                    document.getElementById('11bii').value = '0';
                    document.getElementById('11biii').value = '0';
                    document.getElementById('11btotal').value = '0';
                }

                if (activeInput === '11bi' || activeInput === '11bii' || activeInput === '11biii') {
                    document.getElementById('11ai').disabled = true;
                    document.getElementById('11aii').disabled = true;
                    document.getElementById('11aiii').disabled = true;
                    document.getElementById('11atotal').disabled = true;
                    document.getElementById('11ai').style.backgroundColor = 'grey';
                    document.getElementById('11aii').style.backgroundColor = 'grey';
                    document.getElementById('11aiii').style.backgroundColor = 'grey';
                    document.getElementById('11ai').value = '0';
                    document.getElementById('11aii').value = '0';
                    document.getElementById('11aiii').value = '0';
                    document.getElementById('11atotal').value = '0';
                }

                if (activeInput === '12ai' || activeInput === '12aii' || activeInput === '12aiii') {
                    document.getElementById('12bi').disabled = true;
                    document.getElementById('12bii').disabled = true;
                    document.getElementById('12biii').disabled = true;
                    document.getElementById('12btotal').disabled = true;
                    document.getElementById('12bi').style.backgroundColor = 'grey';
                    document.getElementById('12bii').style.backgroundColor = 'grey';
                    document.getElementById('12biii').style.backgroundColor = 'grey';
                    document.getElementById('12bi').value = '0';
                    document.getElementById('12bii').value = '0';
                    document.getElementById('12biii').value = '0';
                    document.getElementById('12btotal').value = '0';



                } if (activeInput === '12bi' || activeInput === '12bii' || activeInput === '12biii') {
                    document.getElementById('12ai').disabled = true;
                    document.getElementById('12aii').disabled = true;
                    document.getElementById('12aiii').disabled = true;
                    document.getElementById('12atotal').disabled = true;
                    document.getElementById('12ai').style.backgroundColor = 'grey';
                    document.getElementById('12aii').style.backgroundColor = 'grey';
                    document.getElementById('12aiii').style.backgroundColor = 'grey';
                    document.getElementById('12ai').value = '0';
                    document.getElementById('12aii').value = '0';
                    document.getElementById('12aiii').value = '0';
                    document.getElementById('12atotal').value = '0';




                }
                if (activeInput === '13ai' || activeInput === '13aii' || activeInput === '13aiii') {
                    document.getElementById('13bi').disabled = true;
                    document.getElementById('13bii').disabled = true;
                    document.getElementById('13biii').disabled = true;
                    document.getElementById('13btotal').disabled = true;
                    document.getElementById('13bi').style.backgroundColor = 'grey';
                    document.getElementById('13bii').style.backgroundColor = 'grey';
                    document.getElementById('13biii').style.backgroundColor = 'grey';
                    document.getElementById('13bi').value = '0';
                    document.getElementById('13bii').value = '0';
                    document.getElementById('13biii').value = '0';
                    document.getElementById('13btotal').value = '0';



                } if (activeInput === '13bi' || activeInput === '13bii' || activeInput === '13biii') {
                    document.getElementById('13ai').disabled = true;
                    document.getElementById('13aii').disabled = true;
                    document.getElementById('13aiii').disabled = true;
                    document.getElementById('13atotal').disabled = true;
                    document.getElementById('13ai').style.backgroundColor = 'grey';
                    document.getElementById('13aii').style.backgroundColor = 'grey';
                    document.getElementById('13aiii').style.backgroundColor = 'grey';
                    document.getElementById('13ai').value = '0';
                    document.getElementById('13aii').value = '0';
                    document.getElementById('13aiii').value = '0';
                    document.getElementById('13atotal').value = '0';

                }
                if (activeInput === '14ai' || activeInput === '14aii' || activeInput === '14aiii') {
                    document.getElementById('14bi').disabled = true;
                    document.getElementById('14bii').disabled = true;
                    document.getElementById('14biii').disabled = true;
                    document.getElementById('14btotal').disabled = true;
                    document.getElementById('14bi').style.backgroundColor = 'grey';
                    document.getElementById('14bii').style.backgroundColor = 'grey';
                    document.getElementById('14biii').style.backgroundColor = 'grey';
                    document.getElementById('14bi').value = '0';
                    document.getElementById('14bii').value = '0';
                    document.getElementById('14biii').value = '0';
                    document.getElementById('14btotal').value = '0';



                } if (activeInput === '14bi' || activeInput === '14bii' || activeInput === '14biii') {
                    document.getElementById('14ai').disabled = true;
                    document.getElementById('14aii').disabled = true;
                    document.getElementById('14aiii').disabled = true;
                    document.getElementById('14atotal').disabled = true;
                    document.getElementById('14ai').style.backgroundColor = 'grey';
                    document.getElementById('14aii').style.backgroundColor = 'grey';
                    document.getElementById('14aiii').style.backgroundColor = 'grey';
                    document.getElementById('14ai').value = '0';
                    document.getElementById('14aii').value = '0';
                    document.getElementById('14aiii').value = '0';
                    document.getElementById('14atotal').value = '0';

                }
                if (activeInput === '15ai' || activeInput === '15aii' || activeInput === '15aiii') {
                    document.getElementById('15bi').disabled = true;
                    document.getElementById('15bii').disabled = true;
                    document.getElementById('15biii').disabled = true;
                    document.getElementById('15btotal').disabled = true;
                    document.getElementById('15bi').style.backgroundColor = 'grey';
                    document.getElementById('15bii').style.backgroundColor = 'grey';
                    document.getElementById('15biii').style.backgroundColor = 'grey';
                    document.getElementById('15bi').value = '0';
                    document.getElementById('15bii').value = '0';
                    document.getElementById('15biii').value = '0';
                    document.getElementById('15btotal').value = '0';



                } if (activeInput === '15bi' || activeInput === '15bii' || activeInput === '15biii') {
                    document.getElementById('15ai').disabled = true;
                    document.getElementById('15aii').disabled = true;
                    document.getElementById('15aiii').disabled = true;
                    document.getElementById('15atotal').disabled = true;
                    document.getElementById('15ai').style.backgroundColor = 'grey';
                    document.getElementById('15aii').style.backgroundColor = 'grey';
                    document.getElementById('15aiii').style.backgroundColor = 'grey';
                    document.getElementById('15ai').value = '0';
                    document.getElementById('15aii').value = '0';
                    document.getElementById('15aiii').value = '0';
                    document.getElementById('15atotal').value = '0';

                }
                if (activeInput === '16ai' || activeInput === '16aii' || activeInput === '16aiii') {
                    document.getElementById('16bi').disabled = true;
                    document.getElementById('16bii').disabled = true;
                    document.getElementById('16biii').disabled = true;
                    document.getElementById('16btotal').disabled = true;
                    document.getElementById('16bi').style.backgroundColor = 'grey';
                    document.getElementById('16bii').style.backgroundColor = 'grey';
                    document.getElementById('16biii').style.backgroundColor = 'grey';
                    document.getElementById('16bi').value = '0';
                    document.getElementById('16bii').value = '0';
                    document.getElementById('16biii').value = '0';
                    document.getElementById('16btotal').value = '0';



                } if (activeInput === '16bi' || activeInput === '16bii' || activeInput === '16biii') {
                    document.getElementById('16ai').disabled = true;
                    document.getElementById('16aii').disabled = true;
                    document.getElementById('16aiii').disabled = true;
                    document.getElementById('16atotal').disabled = true;
                    document.getElementById('16ai').style.backgroundColor = 'grey';
                    document.getElementById('16aii').style.backgroundColor = 'grey';
                    document.getElementById('16aiii').style.backgroundColor = 'grey';
                    document.getElementById('16ai').value = '0';
                    document.getElementById('16aii').value = '0';
                    document.getElementById('16aiii').value = '0';
                    document.getElementById('16atotal').value = '0';

                }

            }

            function add2m() {
                var total = 0;
                for (var i = 1; i <= 10; i++) {
                    var a = parseFloat(document.getElementById(i).value) || 0;
                    total += a;
                }
                var parta = document.getElementById("parta");
                parta.value = total;
            }

            function add11() {
                for (var i = 1; i <= 2; i++) {
                    var prefix = "11a";
                    if (i === 2) {
                        prefix = "11b";
                    }
                    var a = parseInt(document.getElementById(prefix + "i").value);
                    var b = parseInt(document.getElementById(prefix + "ii").value);
                    var c = parseInt(document.getElementById(prefix + "iii").value);
                    var d = document.getElementById(prefix + "total");
                    var e;
                    if (isNaN(a) && isNaN(b) && isNaN(c)) {
                        e = "";
                    }
                    else if (isNaN(b) && isNaN(c)) {
                        e = a;
                    }
                    else if (isNaN(a) && isNaN(c)) {
                        e = b;
                    }
                    else if (isNaN(a) && isNaN(b)) {
                        e = c;
                    }
                    else if (isNaN(c)) {
                        e = a + b;
                    }
                    else if (isNaN(a)) {
                        e = b + c;
                    }
                    else if (isNaN(b)) {
                        e = a + c;
                    } else {
                        e = a + b + c;
                    }
                    d.textContent = e;

                }
            }

            function add12() {
                for (var i = 1; i <= 2; i++) {
                    var prefix = "12a";
                    if (i === 2) {
                        prefix = "12b";
                    }
                    var a = parseInt(document.getElementById(prefix + "i").value);
                    var b = parseInt(document.getElementById(prefix + "ii").value);
                    var c = parseInt(document.getElementById(prefix + "iii").value);
                    var d = document.getElementById(prefix + "total");
                    var e;
                    if (isNaN(a) && isNaN(b) && isNaN(c)) {
                        e = "";
                    }
                    else if (isNaN(b) && isNaN(c)) {
                        e = a;
                    }
                    else if (isNaN(a) && isNaN(c)) {
                        e = b;
                    }
                    else if (isNaN(a) && isNaN(b)) {
                        e = c;
                    }
                    else if (isNaN(c)) {
                        e = a + b;
                    }
                    else if (isNaN(a)) {
                        e = b + c;
                    }
                    else if (isNaN(b)) {
                        e = a + c;
                    } else {
                        e = a + b + c;
                    }
                    d.textContent = e;
                }
            }


            function add13() {
                for (var i = 1; i <= 2; i++) {
                    var prefix = "13a";
                    if (i === 2) {
                        prefix = "13b";
                    }
                    var a = parseInt(document.getElementById(prefix + "i").value);
                    var b = parseInt(document.getElementById(prefix + "ii").value);
                    var c = parseInt(document.getElementById(prefix + "iii").value);
                    var d = document.getElementById(prefix + "total");
                    var e;
                    if (isNaN(a) && isNaN(b) && isNaN(c)) {
                        e = "";
                    }
                    else if (isNaN(b) && isNaN(c)) {
                        e = a;
                    }
                    else if (isNaN(a) && isNaN(c)) {
                        e = b;
                    }
                    else if (isNaN(a) && isNaN(b)) {
                        e = c;
                    }
                    else if (isNaN(c)) {
                        e = a + b;
                    }
                    else if (isNaN(a)) {
                        e = b + c;
                    }
                    else if (isNaN(b)) {
                        e = a + c;
                    } else {
                        e = a + b + c;
                    }
                    d.textContent = e;
                }
            }

            function add14() {
                for (var i = 1; i <= 2; i++) {
                    var prefix = "14a";
                    if (i === 2) {
                        prefix = "14b";
                    }
                    var a = parseInt(document.getElementById(prefix + "i").value);
                    var b = parseInt(document.getElementById(prefix + "ii").value);
                    var c = parseInt(document.getElementById(prefix + "iii").value);
                    var d = document.getElementById(prefix + "total");
                    var e;
                    if (isNaN(a) && isNaN(b) && isNaN(c)) {
                        e = "";
                    }
                    else if (isNaN(b) && isNaN(c)) {
                        e = a;
                    }
                    else if (isNaN(a) && isNaN(c)) {
                        e = b;
                    }
                    else if (isNaN(a) && isNaN(b)) {
                        e = c;
                    }
                    else if (isNaN(c)) {
                        e = a + b;
                    }
                    else if (isNaN(a)) {
                        e = b + c;
                    }
                    else if (isNaN(b)) {
                        e = a + c;
                    } else {
                        e = a + b + c;
                    }
                    d.textContent = e;
                }
            }



            function add15() {
                for (var i = 1; i <= 2; i++) {
                    var prefix = "15a";
                    if (i === 2) {
                        prefix = "15b";
                    }
                    var a = parseInt(document.getElementById(prefix + "i").value);
                    var b = parseInt(document.getElementById(prefix + "ii").value);
                    var c = parseInt(document.getElementById(prefix + "iii").value);
                    var d = document.getElementById(prefix + "total");
                    var e;
                    if (isNaN(a) && isNaN(b) && isNaN(c)) {
                        e = "";
                    }
                    else if (isNaN(b) && isNaN(c)) {
                        e = a;
                    }
                    else if (isNaN(a) && isNaN(c)) {
                        e = b;
                    }
                    else if (isNaN(a) && isNaN(b)) {
                        e = c;
                    }
                    else if (isNaN(c)) {
                        e = a + b;
                    }
                    else if (isNaN(a)) {
                        e = b + c;
                    }
                    else if (isNaN(b)) {
                        e = a + c;
                    } else {
                        e = a + b + c;
                    }
                    d.textContent = e;
                }
            }


            function add16() {
                for (var i = 1; i <= 2; i++) {
                    var prefix = "16a";
                    if (i === 2) {
                        prefix = "16b";
                    }
                    var a = parseInt(document.getElementById(prefix + "i").value);
                    var b = parseInt(document.getElementById(prefix + "ii").value);
                    var c = parseInt(document.getElementById(prefix + "iii").value);
                    var d = document.getElementById(prefix + "total");
                    var e;
                    if (isNaN(a) && isNaN(b) && isNaN(c)) {
                        e = "";
                    }
                    else if (isNaN(b) && isNaN(c)) {
                        e = a;
                    }
                    else if (isNaN(a) && isNaN(c)) {
                        e = b;
                    }
                    else if (isNaN(a) && isNaN(b)) {
                        e = c;
                    }
                    else if (isNaN(c)) {
                        e = a + b;
                    }
                    else if (isNaN(a)) {
                        e = b + c;
                    }
                    else if (isNaN(b)) {
                        e = a + c;
                    } else {
                        e = a + b + c;
                    }
                    d.textContent = e;
                }

            }

            function total13m15m() {
                var a11i = parseInt(document.getElementById("11ai").value);
                var a11ii = parseInt(document.getElementById("11aii").value);
                var a11iii = parseInt(document.getElementById("11aiii").value);
                var b11i = parseInt(document.getElementById("11bi").value);
                var b11ii = parseInt(document.getElementById("11bii").value);
                var b11iii = parseInt(document.getElementById("11biii").value);

                var a12i = parseInt(document.getElementById("12ai").value);
                var a12ii = parseInt(document.getElementById("12aii").value);
                var a12iii = parseInt(document.getElementById("12aiii").value);
                var b12i = parseInt(document.getElementById("12bi").value);
                var b12ii = parseInt(document.getElementById("12bii").value);
                var b12iii = parseInt(document.getElementById("12biii").value);

                var a13i = parseInt(document.getElementById("13ai").value);
                var a13ii = parseInt(document.getElementById("13aii").value);
                var a13iii = parseInt(document.getElementById("13aiii").value);
                var b13i = parseInt(document.getElementById("13bi").value);
                var b13ii = parseInt(document.getElementById("13bii").value);
                var b13iii = parseInt(document.getElementById("13biii").value);

                var a14i = parseInt(document.getElementById("14ai").value);
                var a14ii = parseInt(document.getElementById("14aii").value);
                var a14iii = parseInt(document.getElementById("14aiii").value);
                var b14i = parseInt(document.getElementById("14bi").value);
                var b14ii = parseInt(document.getElementById("14bii").value);
                var b14iii = parseInt(document.getElementById("14biii").value);

                var a15i = parseInt(document.getElementById("15ai").value);
                var a15ii = parseInt(document.getElementById("15aii").value);
                var a15iii = parseInt(document.getElementById("15aiii").value);
                var b15i = parseInt(document.getElementById("15bi").value);
                var b15ii = parseInt(document.getElementById("15bii").value);
                var b15iii = parseInt(document.getElementById("15biii").value);

                var a16i = parseInt(document.getElementById("16ai").value);
                var a16ii = parseInt(document.getElementById("16aii").value);
                var a16iii = parseInt(document.getElementById("16aiii").value);
                var b16i = parseInt(document.getElementById("16bi").value);
                var b16ii = parseInt(document.getElementById("16bii").value);
                var b16iii = parseInt(document.getElementById("16biii").value);

                var totalpartbc = a11i + a11ii + a11iii + b11i + b11ii + b11iii + a12i + a12ii + a12iii + b12i + b12ii + b12iii + a13i + a13ii + a13iii + b13i + b13ii + b13iii + a14i + a14ii + a14iii + b14i + b14ii + b14iii + a15i + a15ii + a15iii + b15i + b15ii + b15iii + a16i + a16ii + a16iii + b16i + b16ii + b16iii;
                var partb = document.getElementById("partb");
                partb.value = totalpartbc;

                var granttotal = document.getElementById("total");
                var parta = parseInt(document.getElementById("parta").value);
                var sum = parta + totalpartbc;
                granttotal.value = sum;

                if (parta <= 20) {
                    if (totalpartbc <= 80) {
                        if (sum <= 100) {
                            document.getElementById("insert").style.display = "inline-block";
                        }
                    }
                    else {
                        alert("PART-B & C Total Mark is 80 \nBut Your PART-B & C Total Mark is " + totalpartbc);
                        return false;

                    }

                }
                else {
                    alert("PART-A Total Mark is 20 \nBut Your PART-A Total Mark is " + parta);
                    return false;
                }



            }
            function redirectToPHP() {
                window.location.href = "sam.php";
            }










        </script>
    </body>

    </html>