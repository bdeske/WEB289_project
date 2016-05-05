<!-- Author William Deskevich
Revision date: 5/4/2016
File name Little_Bird2
Description product list page for GP view-->




<main>
    <ul id="navbar">
        <li><a href="?action=home">Home</a></li>
        <li><a class="here" href="#">View Products</a></li>
    
        
    </ul>

    <ul id="navbar2">
        <li><a href="?action=sign_up">Sign Up</a></li>
        <li><a href="?action=log_in">Login</a></li>
        
    </ul>
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