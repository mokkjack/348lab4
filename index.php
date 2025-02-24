<!DOCTYPE html>
<html>
<head>
    <h1>Jack Morice's Website</h1>
</head>
<body>
    <!--Hyperlinks-->
    <link href="style.css" rel="stylesheet" type="text/css">
    <IMG src="https://raw.githubusercontent.com/mokkjack/mokkjack.github.io/refs/heads/main/pfp.jpg" width="256" height="256">
        <h2>Welcome to the website, this is for my Lab 4 assignment.</h2>
    <p>These are very important videos. Watch them.</p>
    <a href="https://www.youtube.com/watch?v=ErDYd6GO16o">2019 Stanley Cup Champions</a> <br>
    <a href="https://www.youtube.com/watch?v=AIMOY6CoQKI">2022 NCAA Basketball National Champions</a> <br>
    </div><br>
    <!--CSS Changer-->
    <div id="paragraph">
        <p>A native of Aurora, Ontario, Thomas played Bantam and AAA ice hockey with the York Simcoe Express before beginning his major junior ice hockey career in the Ontario Hockey League (OHL). He spent three seasons in the OHL with the London Knights and Hamilton Bulldogs. While with the Knights, Thomas won the 2016 Memorial Cup as a rookie and was drafted in the first round, 20th overall, by the Blues in the 2017 NHL Entry Draft. He made his NHL debut on October 4, 2017, against the Winnipeg Jets and recorded his first career NHL goal a month later. As the youngest player on the Blues' roster, Thomas won the Stanley Cup in 2019.</p>
        <style>
            :root{
                --borwidth:12px;
                --clr: rgb(255,0,0);
            }
            #paragraph{
            border-style: solid;
            border-width: var(--borwidth);
            color: var(--clr);
            }
        </style>
    </div>
    <label for="color">Enter a color:</label>
    <input type="color" id="newcolor" oninput="colorchanger()"/><br>
    <label for="width">Enter the width of the border:</label><br>
    <input type="text" id="newwidth"/>
    <input type="button" name="button" value="Change Border" onclick="widthchanger()" />
    <script>
        function widthchanger(){
            var nwidth=document.getElementById('newwidth').value;
            document.documentElement.style.setProperty('--borwidth',nwidth+'px')
        }
        function colorchanger(){
            var colour=document.getElementById('newcolor').value;
            document.documentElement.style.setProperty('--clr',colour)
        }
    </script>
    <!--Password Check Function-->
    <div><br>
    <label for="password">Enter Password (Must be 8 characters long):</label><br>
    <input type="password" id="pass" minlength="8" oninput="passwordChecker()"/><br>
    <label for="vpassword">Verify Password:</label><br>
    <input type="password" id="vpass" minlength="8" oninput="passwordChecker()"/><br>
    <p id="output"></p>
    </div>

    <script>
        function passwordChecker(){
            var pass=document.getElementById("pass").value;
            var pass1=document.getElementById("vpass").value;
            var message=document.getElementById("output");
            if (pass=== pass1 && pass.length>=8){
                message.textContent="Passwords Matching!"
                message.style.color="green"
            }
            else if(pass.length<8){
                message.textContent="Passwords is not long enough"
                message.style.color="red"
            }
            else{
                message.textContent="Passwords do not match."
                message.style.color="red"
            }
        }
    </script>
    <!--PHP Mult table-->
    <h2>PHP Multiplication Table</h2>
    <form method = "POST">
        <label for="multnum"> Enter the number you want to multiply to: </label><br>
        <input type="text" id="multnum" name="multnum"/>
        <input type="submit" value="Generate Table"/>
    </form>
    <table>
        <!--Code below was assisted by ChatGPT, specifically the <tr> and <td> tags to help organize the table, otherwise the for loops and the multiplication parts were done by me-->
        <?php
            $input=$_POST['multnum']; //Gets the input from the input above
            for($i=1; $i<=$input; $i++){ //Iterate from 1 to the input given, increment each time
                echo "<tr>"; //Start a new row
                for($j=1; $j<=$input; $j++){ //iterate again for the columns
                    echo "<td>".$i*$j."</td>"; //Print the product of the two numbers and put it in its own cell
                }
                echo "</tr>"; //End the row
            }
        ?>
    </table>
</body>
</html>