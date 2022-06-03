<?php
    include 'includes/headlog.php';
    require "includes/header.php";
    if (isset($_GET['id'])){
        $id= $_GET['id'];
        if (isset($_POST['Done'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['Prenom'];
            $fonction = $_POST['fonction'];
            $sql = "UPDATE  personnel SET nom='$nom', Prenom='$prenom', fonction='$fonction' WHERE id='$id'";
            $res = $conn->prepare($sql);
            echo 'DATA updates'.$id;
            $val= $res->execute();
            echo 'DATA updates';
            if ($val) {
                header("Location:dashboard.php");
            }
            else {
                header("Location:MD_personnel.php?id=<?php echo $id; ?>");
                $_SESSION['message'] = "une erreur c'est produite ";
            }
    
    
        }
        $req = "SELECT * FROM personnel WHERE id = '$id'";
        $res1 = $conn->query($req);
        if ($res1) {
            $all = $res1->fetchAll();
            foreach ($all as $publisher) {

    
?>
<div class="registerBox form">
        <h2>UPDATE Personnel</h2>
        <form action="./MD_personnel.php?id=<?php echo $id; ?>" method="post">
            <p>firstName</p>
            <input type="text" name="nom" id="" placeholder="Enter firstName"  value="<?php echo $publisher['nom']; ?>">
            <p>lastName</p>
            <input type="text" name="Prenom" id="" placeholder="Enter lastName" value="<?php echo $publisher['Prenom']; ?>">
            <p>fonction</p>
            <input type="text" name="fonction" id="" placeholder="the function" value="<?php echo $publisher['fonction']; ?>">
            <input type="submit" value="Done" name="Done">
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