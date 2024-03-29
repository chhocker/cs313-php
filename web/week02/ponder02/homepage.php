<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Claire Hocker's Home Page</title>
    <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
    <a id="top"></a>
    <header>
        <h1>Welcome to Claire Hocker's Page</h1>
        <h4>Brigham Young University-Idaho&#8212;Computer Science </h4>
    </header>
    <hr />
    <div class="topnav">
        <ul >
            <li>
                <a class="blue" href="assignments.php">Assignments</a>
                <a class="blue" href="#schedule">My Schedule</a>
                <a class="blue" href="https://www.linkedin.com/in/claire-haderlie-hocker-6329a2117/">My LinkedIn</a>
            </li>
        </ul>
    </div>
    <br />
    <div class="a">
        <h2><b>About me</b></h2>
        <img id="profile_photo" src="claire_hocker_bridal.jpg" alt="Photo of Claire Hocker" width="153" height="194" 
        onmouseover="this.src='engagement_photo.jpg'" onmouseout="this.src='claire_hocker_bridal.jpg'">
        <p>
            &#xa1;Hola! Bonjour! Welcome to my webpage. I'm <b>Claire Hocker</b>. I am studying Computer Science
            here at BYU-Idaho, and I <i>love</i> it! Writing code is so fun and I really enjoy the problem solving
            behind it. </p>
        <p> I'm from San Diego, California, and I recently got married to my best friend ever, Alexander Hocker. We
            both are attending school here. This past summer, I interned with FamilySearch on the Tree Foundation team.
            Our project was to create a stats service to keep track of all the things that happen on FamilySearch. The 
            numbers are only for internal use, but just to let you know, the work is moving along! 
        </p>
        <p>This semester at school, my husband and I are both taking 12 credits here,
            and I'm a TA for CS 165. I am on the collegiate clogging team. I love to read books, dance, spend time with my hubby, play games, be outside, run,
            tap dance, and eat ice cream.
        </p>
        <p>Mouse over my profile photo to see my amazing husband!</p>
        <br />
        <br />
    </div>
    <div class="a" id="schedule">
        <h2 id="class_schedule_header"><u>My Class Schedule</u></h2>
        <table class="a">
            <tr>
                <th>Class</th>
                <th>Description</th>
                <th>Time</th>
            </tr>
            <tr class="odd_row">
                <td>MATH 330</td>
                <td>Engineering Statistics</td>
                <td>M/W/F 10:15 - 11:15</td>
            </tr>
            <tr class="even_row">
                <td>CIT 225</td>
                <td>Database Design and Development</td>
                <td>M/W/F 12:45 - 1:45</td>
            </tr>
            <tr class="odd_row">
                <td>CS 470</td>
                <td>Computer Security</td>
                <td>T/Th 12:45 - 2:15</td>
            </tr>
            <tr class="even_row">
                <td>CS 313</td>
                <td>Web Engineering II</td>
                <td>T/Th 2:30 - 4:00</td>
            </tr>
            <tr class="odd_row">
                <td>DANCE 488R</td>
                <td>Collegiate Dancers</td>
                <td>T/Th 4:30 - 5:30</td>
            </tr>
        </table>
        <br>
        <a class="blue button" href="#top" >Top of Page</a>
        <br>
    </div>
    <footer class="footer">
        <a class="blue button" href="assignments.php">Assignments</a>
    </footer>
</body>
</html>
