<?php
    include 'includes/headlog.php';
    include "includes/header.php";
    if (isset($_SESSION['username'])) {
    
?>
            

            <button class="view"><a href="../soft_thème/Projets.php" ><img src="../images/eye.png" width="100%" alt=""></a></button>
            <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Projets de la Mairie</h2> <br>
                        <a href="Add_projet.php" class="btn">Add0ne</a>
                    </div>  

                        <table>
                        <tbody>
                        <?php
                            $req = "SELECT * FROM Projet order by id desc";
                            $res1 = $conn->query($req);
                            if ($res1) {
                                
                                $all = $res1->fetchAll();
                                foreach ($all as $publisher) {
                                            
                        ?>
                        <tr>
                            <td>
                                <div class="imgBx"><img src="../images/<?php echo $publisher['image']; ?>" alt=""></div>
                            </td>
                            <td>
                                <h4><?php echo $publisher['nom']; ?></h4>
                            </td>
                            <td>
                                <h4><?php echo $publisher['debut']; ?></h4>
                            </td>
                            <td>
                                <h4><?php echo $publisher['deroulement']; ?></h4>
                            </td>
                            <td>
                                <h4><?php echo $publisher['fin']; ?></h4>
                            </td>
                            <td>
                                <span class="status inProgress"><a href="MD_projet.php?id=<?php echo $publisher['id']; ?>"><img src="../images/interact.png"  width="30px" alt=""></a></span>
                            </td>
                            <td>
                                 <span class="status return"><a href="Drop_projet.php?id=<?php echo $publisher['id']; ?>"><img src="../images/button_cancel.png"  width="30px" alt=""></a></span>
                            </td>
                        </tr>
                        <?php
                                }                            
                            }
                        ?>
                        </tbody>
                    </table>
                </div>

<?php
     }
     else {
         header('location:login.php');
     }
?>
<?php
    include "includes/footer.php";
?>