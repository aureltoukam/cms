<script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>
<?php
    include 'includes/headlog.php';
    require "includes/header.php";
    if (isset($_GET['id'])){
        $id= $_GET['id'];
        if (isset($_POST['Done'])) {
            $nom = $_POST['name'];
            $story = $_POST['story'];
            $sql = "UPDATE  presentation SET nom_Mairie ='$nom', Story='$story' WHERE id='$id'";
            $res = $conn->prepare($sql);
            echo 'DATA updates'.$id;
            $val= $res->execute();
            echo 'DATA updates';
            if ($val) {
                header("Location:dashboard.php");
            }
            else {
                header("Location:MD_story.php?id=<?php echo $id; ?>");
                $_SESSION['message'] = "une erreur c'est produite ";
            }
    
    
        }
        $req = "SELECT * FROM presentation WHERE id = '$id'";
        $res1 = $conn->query($req);
        if ($res1) {
            $all = $res1->fetchAll();
            foreach ($all as $publisher) {

    
?>
<div class="registerBox form">
        <h2>Mairie UPDATE story</h2>
        <form action="./MD_story.php?id=<?php echo $id; ?>" method="post">
            <p>Name Mairie</p>
            <input type="text" name="name" id="" placeholder="Enter Name" value="<?php echo $publisher['nom_Mairie']; ?>">
            <p>Set Story</p>
            <textarea name="story" id="editor" rows="13"  placeholder="the story"><?php echo $publisher['Story'];?></textarea><br><br>
            <input type="submit" value="Done" name="Done">
        </form>
</div> 
<script type="text/javascript">
    ClassicEditor
    .create( document.querySelector( '#edito' ) )
    .catch( error => {
        console.error( error );
    } );    
</script>

<?php
            }
        }                            
    }
    require "includes/footer.php";
?>