<?php
 
$con = new mysqli("localhost", "root" ,"", "school");
$q = "select * from stud";
$rs = $con->query($q);
 
?>
 
<table border=1>
    <tr>
        <th>ID</th>    
        <th>Reg No.</th>
        <th>fname</th>
        <th>lname</th>
        <th>Semester</th>
        <th>Quiz1</th>
        <th>Quiz2</th>
        <th>Assignment</th>
        <th>Mid term</th>
        <th>Final Term</th>
        <th>Operation</th>
    </tr>
    <h1>Students Record</h1>
    <?php
    while($r = $rs->fetch_assoc()){
        echo "<tr>";
        $id = $r["id"];
            echo "<td>" . $r["id"] ."</td>";
            echo "<td>" .$r["regno"] ."</td>";
            echo "<td>" . $r["fname"] ."</td>";
            echo "<td>" . $r["lname"] ."</td>";
            echo "<td>" . $r["semester"] ."</td>";
            echo "<td>" . $r["quiz1"] ."</td>";
            echo "<td>" . $r["quiz2"] ."</td>";
            echo "<td>" . $r["Assignment"] ."</td>";
            echo "<td>" . $r["midTerm"] ."</td>";
            echo "<td>" . $r["finalTerm"] ."</td>";

            echo "<td><a href='add_record.php?i=$id'> Click here </a> </td>";
        echo "</tr>";
      }
    ?>
</table>
<a  href="teacher_profile.php"><button style="margin-top: 10px;">Back to Teacher Profile</button></a>
<body>
</html>