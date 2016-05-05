<!-- Author William Deskevich
Revision date: 5/4/2016
File name Little_Bird2
Description product list page for admin B view-->



<main>
     <ul id="navbar">
        <li><a href="?action=go_to_home_admin_B">Home</a></li>
        <li><a class="here" href="#">View Products</a></li>
        <li><a href="?action=update_products_B">Update Products</a></li>
        <li><a href="?action=insert_product_B">Insert Products</a></li>
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




    <h1>Product List</h1>

    

    <!-- display a table of products -->
    <table>
        <tr>
            
            <th class="hide">ProductID</th>
            <th>Plant Name</th>
            <th>Description</th>
            <th>Size</th>
            <th>In Stock</th>
            <th>Price</th>
            
        </tr>
        <?php foreach ($products as $product) : ?>
        <tr>
            <td class="hide"><?php echo htmlspecialchars($product['ProductID']); ?></td>
            <td><?php echo htmlspecialchars($product['Plant_Name']); ?></td>
            <td><?php echo htmlspecialchars($product['Description']); ?></td>
            <td><?php echo htmlspecialchars($product['Size']); ?></td>
            <td><?php echo htmlspecialchars($product['In_Stock']); ?></td>
            <td><?php echo htmlspecialchars($product['Price']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    

</main>

