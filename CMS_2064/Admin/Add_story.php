<?php
    include 'includes/headlog.php';
    require "includes/header.php";
?>

<div class="registerBox form">
        <h2>Set Story</h2>
        <form action="./Add_story.php" method="post">
            <textarea name="story" id="ckeditor" rows="15" placeholder="the story"></textarea><br><br>
            <input type="submit" value="Done" name="Done">
        </form>
</div>
<script src="../js/ckeditor/ckeditor.js"></script>

<?php
    if (isset($_POST['Done'])) {
        $story = $_POST['story'];
        $sql = "INSERT INTO Présentation(storry) VALUES ('$story')";
        $res = $conn->exec($sql);
        if (isset($res)) {
            header("Location:dashboard.php");
            $_SESSION['message'] = "<p style= 'color:green;'>succesful</p>";
        }
        else {
            header("Location:Add_storry.php");
            $_SESSION['message'] = "<p style='color:red;'>error</p>";
        }
    }

    require "includes/footer.php";
?>