
<?php
 
$con = new mysqli("localhost", "root" ,"", "school");
$q = "select * from teach";
$rs = $con->query($q);
 
?>
 
<table border=1>
    <tr>
        <th>ID</th>    
        <th>Reg No.</th>
        <th>Password</th>
        <th>fname</th>
        <th>lname</th>
        <th>email</th>
        <th>cell</th>
        <th>Gender</th>
        <th>City</th>
        <th>Operation</th>
    </tr>
    <h1>Teacher Record</h1>
    <?php
    while($r = $rs->fetch_assoc()){
        echo "<tr>";
        $id = $r["id"];
            echo "<td>" . $r["id"] ."</td>";
            echo "<td>" .$r["regno"] ."</td>";
            echo "<td>" . $r["password"] ."</td>";
            echo "<td>" . $r["fname"] ."</td>";
            echo "<td>" . $r["lname"] ."</td>";
            echo "<td>" . $r["email"] ."</td>";
            echo "<td>" . $r["cell"] ."</td>";
            echo "<td>" . $r["Gender"] ."</td>";
            echo "<td>" . $r["City"] ."</td>";

            echo "<td><a href='DT.php?i=$id'> Delete </a> </td>";
        echo "</tr>";
      }
    ?>
</table>
<a  href="admin_profile.php"><button style="margin-top: 10px;">Back to Admin Profile</button></a>
<body>
</html>