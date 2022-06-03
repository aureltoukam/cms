<?php
    include 'includes/headlog.php';
    require "includes/header.php";
?>

<div class="registerBox form">
        <h2>Conseil Member</h2>
        <form action="./Add_cons.php" method="post">
            <p>firstName</p>
            <input type="text" name="firstname" id="" placeholder="Enter firstName">
            <p>lastName</p>
            <input type="text" name="lastname" id="" placeholder="Enter lastName">
            <p>Qualification</p>
            <input type="text" name="qualif" id="" placeholder="The Qualification">
            <input type="submit" value="Done" name="Done">
        </form>
</div>

<?php
    if (isset($_POST['Done'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $qualif = $_POST['qualif'];
    
        $req = "SELECT * FROM conseil WHERE nom='$firstname' and prenom='$lastname'";
        $res1 = $conn->prepare($req);
        $res1->execute();
        $all = $res1->fetchAll();
        if ($all) {
            header("Location:Add_cons.php");
            $_SESSION['message'] = "l'utilisateur existe déja ";
        }else {
            $sql = "INSERT INTO conseil(nom,prenom,qualification) VALUES ('$firstname', '$lastname', '$qualif')";
            // use exec() because no results are returned
            $res = $conn->exec($sql);
            if (isset($res)) {
                header("Location:dashboard.php");
                $_SESSION['message'] = "<p style= 'color:green;'>succesful</p>";
            }
            else {
                header("Location:Add_cons.php");
                $_SESSION['message'] = "<p style='color:red;'>error</p>";
            }
        }
    }

    require "includes/footer.php";
?>