<?php
    include 'includes/headlog.php';
    require "includes/header.php";
?>

<div class="registerBox form">
        <h2>Mairie add Site story</h2>
        <form action="./Add_story.php" method="post">
            <p>Name Mairie</p>
            <input type="text" name="nom" id="" placeholder="Enter Name">
            <p>Set Story</p>
            <textarea name="story" rows="13" placeholder="the story"></textarea><br><br>
            <input type="submit" value="Done" name="Done">
        </form>
</div>

<?php
    if (isset($_POST['Done'])) {
        $name = $_POST['nom'];
        $story = $_POST['story'];
        $sql = "INSERT INTO presentation (nom_Mairie,story) VALUES ('$name','$story')";
        echo $sql;
        $res = $conn->exec($sql);
        if (isset($res)) {
            header("Location:dashboard.php");
        }else {
            header("Location:Add_story.php");
        }
    }
    
?>
<?php
    require "includes/footer.php";
?>