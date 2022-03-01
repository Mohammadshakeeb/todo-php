<?php
session_start();



?>
<html>
    <head>
        <title>TODO List</title>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <p>
                <form method="POST" action="functions.php">
                <input id="new-task" type="text" name="todo" value="<?php echo $_SESSION['value']?>"><button name="add"><?php 
                if($_SESSION['flag']==0){
                    ?>
                    Add
                <?php
                }else{
                    ?>
                    update
                <?php
                $_SESSION['flag']=0;
                }
                ?> </button>
                </form>
            </p>
    
            <h3>Todo</h3>
            <ul id="incomplete-tasks">
         <?php 
          if(isset($_SESSION['todo'])){
              
                foreach($_SESSION['todo'] as $k=>$v){
               echo '<form method="POST" action="functions.php"><li><input type="checkbox" onchange="this.form.submit()" name="checked"><label>'.$v.'</label><input type="text"><button class="edit" name="editButton">Edit</button><button class="delete" name="deleteButton">Delete</button><input type="text" hidden name="editValue" value="'.$k.'"</li></form>' ;
               } 
            }
                ?>
            </ul>
    
            <h3>Completed</h3>
            <ul id="completed-tasks">
                <?php
                if(isset($_SESSION['completed'])){
                    foreach($_SESSION['completed'] as $key=>$val){
              echo  '<form method="POST" action="functions.php"><li><input type="checkbox" checked><label>"'.$val.'"</label></button><button class="delete" name="delete">Delete</button><input type="text" name="eval" hidden value="'.$key.'"</li>';
                }
            }
            
            ?>
                </ul>
        </div>
    
    </body>
</html>