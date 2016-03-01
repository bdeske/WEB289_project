
<main>
    <ul id="navbar">
        <li><a href="/WEB289/Little_Bird2/index.php">Home</a></li>
        <li><a href="product_manager/view/index.php">View Products</a></li>
        <li><a href="?action=home">Logout</a></li>
    </ul>
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
