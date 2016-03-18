<main>
    <ul id="navbar">
        <li><a href="?action=go_to_home_admin">Home</a></li>
        <li><a class="here" href="#">View Products</a></li>
        <li><a href="?action=update_products">Update Products</a></li>
    </ul>

    <ul id="navbar2">
        <li><?php
if($_SESSION["First_Name"]) {
?>
Welcome <?php echo $_SESSION["First_Name"]; ?>. Click here to <a href="?action=log_out" tite="Logout">Logout</a>
<?php
}
?>
        
    </ul><br>

    <h1>Product List</h1>

    

    <!-- display a table of products -->
    <table>
        <tr>
            
            <th>ProductID</th>
            <th>Plant Name</th>
            <th>Description</th>
            <th>Size</th>
            <th>In Stock</th>
            <th>Price</th>
            
        </tr>
        <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo htmlspecialchars($product['ProductID']); ?></td>
            <td><?php echo htmlspecialchars($product['Plant_Name']); ?></td>
            <td><?php echo htmlspecialchars($product['Description']); ?></td>
            <td><?php echo htmlspecialchars($product['Size']); ?></td>
            <td><?php echo htmlspecialchars($product['In_Stock']); ?></td>
            <td><?php echo htmlspecialchars($product['Price']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <!-- <p><a href="?action=show_add_form">Add Product</a></p> -->

</main>