<?php
    include 'includes/headlog.php';
    require "includes/header.php";
    if (isset($_GET['id'])){
        $id= $_GET['id'];
        if (isset($_POST['Done'])) {
            $nom = $_POST['firstname'];
            $prenom = $_POST['lastname'];
            $qualif = $_POST['qualif'];
            $sql = "UPDATE  conseil SET nom='$nom', prenom='$prenom', qualification='$qualif' WHERE id='$id'";
            $res = $conn->prepare($sql);
            echo 'DATA updates'.$id;
            $val= $res->execute();
            echo 'DATA updates';
            if ($val) {
                header("Location:dashboard.php");
            }
            else {
                header("Location:MD_cons.php?id=<?php echo $id; ?>");
                $_SESSION['message'] = "une erreur c'est produite ";
            }
    
    
        }
        $req = "SELECT * FROM conseil WHERE id = '$id'";
        $res1 = $conn->query($req);
        if ($res1) {
            $all = $res1->fetchAll();
            foreach ($all as $publisher) {

    
?>
<div class="registerBox form">
        <h2>Conseil Member</h2>
        <form action="./MD_cons.php?id=<?php echo $id; ?>" method="post">
            <p>firstName</p>
            <input type="text" name="firstname" id="" placeholder="Enter firstName" value="<?php echo $publisher['nom']; ?>">
            <p>lastName</p>
            <input type="text" name="lastname" id="" placeholder="Enter lastName" value="<?php echo $publisher['prenom']; ?>">
            <p>Qualification</p>
            <input type="text" name="qualif" id="" placeholder="The Qualification" value="<?php echo $publisher['qualification']; ?>">
            <input type="submit" value="Done" name="Done">
        </form>
            <?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
            ?>
        </form>
</div> 


<?php
            }
        }                            
    }
    require "includes/footer.php";
?>