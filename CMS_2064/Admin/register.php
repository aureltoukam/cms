<?php
    include 'includes/headlog.php';
    if (isset($_POST['inscript'])) {

        $Username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $password = password_hash($password,PASSWORD_BCRYPT);
        $profile = $_FILES['profile'];
        $Email = $_POST['Email'];
        $ext = explode('.',$_FILES['profile']['name']);
        $ext = end($ext);
        echo $ext;
        $path = '../images/';
        echo $path.$_FILES['profile']['name'],$_FILES['profile']['tmp_name'];
        move_uploaded_file($_FILES['profile']['tmp_name'], $path.$_FILES['profile']['name']);
        /* $req = "SELECT * FROM User WHERE username='$Username' or password='$password'";
        $res1 = $conn->prepare($req);
        $res1->execute();
        $all = $res1->fetchAll();
        if ($all) {
            header("Location:register.php");
            $_SESSION['message'] = "l'utilisateur existe déja ";
        }else {
            $sql = "INSERT INTO User(username, nom,email,password) VALUES ('$Username', '$name', '$Email', '$password')";
            // use exec() because no results are returned
            $res = $conn->exec($sql);
            if (isset($res)) {
                header("Location:login.php");
                $_SESSION['message'] = "<p style= 'color:green;'>succesful</p>";
            }
            else {
                header("Location:register.php");
                $_SESSION['message'] = "<p style='color:red;'>error</p>";
            }
        } */
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="registerBox">
        <img src="../images/vecteezy_button-avatar-profile-icon-suitable-used-for-business_7386229.jpg" alt="" class="user">
        <h2>Register Here</h2>
        <form action="register.php" method="post" enctype="multipart/form-data">
            <p>UserName</p>
            <input type="text" name="username" id="" placeholder="Enter UserName">
            <p>Name</p>
            <input type="text" name="name" id="" placeholder="Enter Name">
            <p>Email</p>
            <input type="text" name="Email" id="" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" id="" placeholder="Enter Password">
            <p>profil</p>
            <input type="file" name="profile" id="" >
            <input type="submit" value="Inscript In" name="inscript">
        </form>
        <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
        ?>
    </div>

</body>
</html>