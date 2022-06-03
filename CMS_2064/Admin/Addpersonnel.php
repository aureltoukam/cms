<?php
    include 'includes/headlog.php';
    require "includes/header.php";
?>

<div class="registerBox form">
        <h2>ADD Personnel</h2>
        <form action="./Addpersonnel.php" method="post">
            <p>firstName</p>
            <input type="text" name="firstname" id="" placeholder="Enter firstName">
            <p>lastName</p>
            <input type="text" name="lastname" id="" placeholder="Enter lastName">
            <p>fonction</p>
            <input type="text" name="fonct" id="" placeholder="the function">
            <input type="submit" value="Done" name="Done">
        </form>
</div>

<?php
    if (isset($_POST['Done'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $fonction = $_POST['fonct'];
    
        $req = "SELECT * FROM personnel WHERE nom='$firstname' and Prenom='$lastname'";
        $res1 = $conn->prepare($req);
        $res1->execute();
        $all = $res1->fetchAll();
        if ($all) {
            header("Location:Addpersonnel.php");
            $_SESSION['message'] = "l'utilisateur existe déja ";
        }else {
            $sql = "INSERT INTO personnel(nom,prenom,fonction) VALUES ('$firstname', '$lastname', '$fonction')";
            // use exec() because no results are returned
            $res = $conn->exec($sql);
            if (isset($res)) {
                header("Location:dashboard.php");
                $_SESSION['message'] = "<p style= 'color:green;'>succesful</p>";
            }
            else {
                header("Location:Addpersonnel.php");
                $_SESSION['message'] = "<p style='color:red;'>error</p>";
            }
        }
    }

    require "includes/footer.php";
?>