<!DOCTYPE HTML>
<html>  
    <head>
        <style>
            form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 3px 6px 0 rgba(0,0,0,0.19);
    margin: 20px auto;
    width: 500px;
    font-family: 'Roboto', sans-serif;
}


label {
    color: #7d7d7d;
    font-size: 0.9em;
    font-weight: bold;
    margin-top: 8px; 
    margin-bottom: 8px;
    display: block;
}


input {
    width: 100%;
    padding: 10px;
    border: 1px solid #d3d3d3;
    border-radius: 5px;
    margin-top: 8px;
    margin-bottom: 8px;
}


button {
    background-color: #1c87c9;
    color: white;
    padding: 10px;
    font-size: 1em;
    width: 50%;
    border: none;
    border-radius: 5px;
    margin-top: 8px;
    margin-bottom: 8px;
    cursor: pointer;
}


.container {
    padding: 10px;
    text-align: center;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}


td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


tr:nth-child(even) {
    background-color: #dddddd;
}

        </style>
</head>
<body>
<a href="index.php">Logout</a>
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

