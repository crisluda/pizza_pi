<?php
// if(isset($_POST['submit']) && $_POST['submit'] == 'Add Pizza' ? $pizza = new Pizza($_POST) : $pizza = new Pizza());
$errors = array("name"=>"","ingredients"=>"","email"=>"");
if(isset($_POST["submit"])){
    htmlspecialchars($_POST["name"]);
    if(empty($_POST["name"])){
   $errors["name"] = "name is required <br/>";
    }
    else{
        $name = $_POST["name"];
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            // $errors["name"] = "Only letters and white space allowed";
            $errors["name"] =  "Only letters and white space allowed";
        }
        
    }
    if(empty($_POST["ingredients"])){
        $errors["ingredients"] =  "ingredients is required <br/>";
         }
         else{
            $ingredients = $_POST["ingredients"];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
                // $errors["name"] = "Only letters and white space allowed";
                $errors["ingredients"] =  "ingredients must be a comma separated list";
            }
         }
         if(empty($_POST["email"])){
            $errors["email"] =  "email is required <br/>";
             }
             else{
                 $email=$_POST["email"];
                 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $errors["email"] =  "email is not valid email <br/>";
                 }
                 
             }
             if(!array_filter($errors)){
                header("Location: index.php");
            }
            
}

?>
 

<?php
include('templates/header.php');
?>
<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" method="POST" class="white">
        <label>Pizza Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>">
        <div class="red-text"><?php echo $errors['name']; ?></div>
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php
include('templates/footer.php');
?> 
