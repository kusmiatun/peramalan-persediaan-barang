
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem peramalan persediaan obat</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- start css -->
<link rel="stylesheet" href="pengguna.css">

<!-- start font awesome -->
<script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>
<!-- end font awesome-->



</head>
<body>
    <div class="sidenav">
        <?php include 'sidebar.php'; ?>
    </div>
    <?php
    include "style.css";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM skun_pengguna WHERE id = $id";
        $result = $conn->query($sql);
    }
    if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    } 
    ?>
            <form action="edit_data_penggguna.php" method="POST">  
                <h1>EDIT PENGGUNA</h1>
                <br/>
                <br/>
                Id_pengguna
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                
                Divisi
                <br>
                <input type="text" name="divisi" value="<?php echo $row['divisi'];?>">
                <br><br>
                
                Username
                <br>
                <input type="text" name="username" value="<?php echo $row ['username'];?>">
                <br><br>
                
                Password
                <br>
                <input type="number" name="password" value="<?php echo $row['password'];?>">
                <br><br>
                <button type="submit" name="update" value="update">Update</button>
                <button type="cancel" name="cancel">Kembali</button>
            </form> 
</body>
</html>s