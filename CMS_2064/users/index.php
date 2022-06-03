<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/index.css">
        <title>Document</title>
    </head>
    <body>
        <header>
            <div class="navbar" id="myNavbar">
                <a href="#Accueil" class="active">Home</a>
                <a href="#Annonces">Annonces</a>
                <a href="#Personnel">Personnel</a>
                <a href="#Tourisme">Tourisme</a>
                <a href="#contact">contact</a>
                <a href="#about">FAQ</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div> 
            <div class="leftside">
                <a href="#">&nbsp register &nbsp</a>
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

                <div id="id01" class="modal">
                
                <form class="modal-content animate" action="https://www.w3schools.com/action_page.php">
                    <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="img_avatar2.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                        
                    <button type="submit">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
                </div>
            </div>
        </header>
        <main id="main">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium adipisci error nostrum commodi, perferendis obcaecati animi? Laborum fuga optio cumque possimus, explicabo hic sint itaque odio eligendi ipsum id dolorem iusto, saepe tempore asperiores incidunt, facere tenetur amet distinctio atque aut sequi. Numquam dolore vero sunt officiis tempore incidunt tenetur, illum fuga velit qui, fugiat libero deleniti quo beatae, sapiente iure nulla. Libero reprehenderit veniam asperiores voluptatibus nisi corporis! Explicabo corporis odit, dolorem adipisci fugit assumenda voluptatum aliquam magni, modi eaque sint eveniet porro pariatur saepe rem repellat, eum error! Quaerat officiis earum est tenetur repellendus. Non distinctio officia sed nesciunt quae officiis quod exercitationem quo quisquam quasi dolorum veniam cupiditate excepturi libero, consectetur atque odio. Expedita quibusdam, necessitatibus porro quae corporis sint consectetur adipisci a quasi beatae ipsa numquam, debitis quia, suscipit voluptate. Velit corrupti saepe aut asperiores expedita dolores fugit, libero aspernatur, sint repellat quod unde. Doloremque dolores voluptas molestias explicabo dolore earum consequuntur consectetur, labore iure, delectus accusantium? Saepe, molestiae maxime ipsum sapiente unde natus consectetur praesentium aspernatur facilis, pariatur dolore voluptatum beatae adipisci eos modi nesciunt excepturi eius sit accusantium explicabo? Ad laboriosam fugit minus sit ex eum unde saepe officiis. Iusto laudantium molestiae eaque rem?  
            </p>
        </main>
        <footer class="footer">
            <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores laboriosam reprehenderit consequuntur deleniti labore odit dolor? Commodi, vero alias facilis aut consequuntur recusandae at illo animi similique totam modi laboriosam.</div>
            <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores laboriosam reprehenderit consequuntur deleniti labore odit dolor? Commodi, vero alias facilis aut consequuntur recusandae at illo animi similique totam modi laboriosam.</div>
            <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores laboriosam reprehenderit consequuntur deleniti labore odit dolor? Commodi, vero alias facilis aut consequuntur recusandae at illo animi similique totam modi laboriosam.</div>
            <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores laboriosam reprehenderit consequuntur deleniti labore odit dolor? Commodi, vero alias facilis aut consequuntur recusandae at illo animi similique totam modi laboriosam.</div>
            
        </footer>
        <script src="../js/index.js"></script>
    </body>
</html>