    <?php
        include 'includes/headlog.php';

        if (isset($_POST['singin'])) {
            $password = $_POST['password'];
            $Email = $_POST['Email'];
        
            $res = $conn->prepare($req);
            $res->execute();
            while (($row = $res->fetch(PDO::FETCH_ASSOC)) !== false) {
                echo $row['password'] . PHP_EOL;
            }
        }
    ?>