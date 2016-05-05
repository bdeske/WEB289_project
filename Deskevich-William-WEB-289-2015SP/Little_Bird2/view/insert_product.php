<!-- Author William Deskevich
Revision date: 5/4/2016
File name Little_Bird2
Description Insert Product page -->



<main>

        <ul id="navbar">
                <li><a href="?action=go_to_home_admin">Home</a></li>
                <li><a href="?action=list_products">View Products</a></li>
                <li><a href="?action=update_products">Update Products</a></li>
                <li><a class="here" href="#">Insert Products</a></li>
        </ul>

        <ul id="navbar2">
                <li><?php
if (!isset($_SESSION["Level"])){
        header('Location:view/login_error.php');


        }


if($_SESSION["First_Name"]) {
?>
<a href="?action=logout" tite="Logout">Logout <?php echo $_SESSION["First_Name"]; ?></a>
<?php
}
?>
                
        </ul><br>



<h1>Insert New Products</h1>


<form id="formval" action="." method="post" id="aligned">
        <input type="hidden" name="action" value="insert_product">


        <label>Product ID:</label>
        <input type="text" name="ProductID"><br>

        <label>Category ID:</label>
        <input type="text" name="CatID"><br>

        <label>Plant Name:</label>
        <input type="text" name="Plant_Name"><br>
                
                <label>Description:</label>
        <input type="text" name="Description"><br>
                
                <label>Size:</label>
        <input type="text" name="Size"><br>

        <label>In Stock:</label>
        <input type="text" name="In_Stock" ><br>
                
        <label>Price:</label>
        <input type="decimal" name="Price"><br>         
        
                <input class="submit" type="submit" value="Insert Product" /><br>
                </form>
            
                

        </main>