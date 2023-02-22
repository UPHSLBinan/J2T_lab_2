<!DOCTYPE HTML>
<html>  
<body>

<form action="add.php" method="post">
Firstname: <input type="text" name="fname"><br>
Lastname <input type="text" name="lname"><br>
age <input type="text" name="age"><br>
details <input type="text" name="details"><br>
emails <input type="text" name="emails"><br>
<input type="submit" name="add">
</form>

<table border = '1'>
    <thead>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Details</th>
        <th>Emails</th>


    </thead>

<tbody>
<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
                    <tr>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['details']; ?></td>
                        <td><?php echo $row['emails']; ?></td>
                        <td>
								<a href="edit.php?id=<?php echo $row['fname']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['fname']; ?>">Delete</a>
							</td>




                    </tr>
                    <?php
                    }
                ?>


</tbody>
                </table>
</body>
</html>

