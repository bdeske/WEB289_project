
<main>
    <ul id="navbar">
        <li><a href="?action=go_to_home">Home</a></li>
        <li><a class="here" href="#">View Products</a></li>
        <li><a href="?action=go_to_cart">Go to Cart</a></li>
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

     <h2>Plant Search</h2>
    
    <!-- display a search form -->
    <form action="." method="post">
        <input type="hidden" name="action" value="display_product">
       <label>Plant Name:</label>
       <input type="text" name="Plant_Name"
       value="<?php echo htmlspecialchars($plantname); ?>">
       <input type="submit" value="Search">
    </form>

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
    

</main>
