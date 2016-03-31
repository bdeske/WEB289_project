 <main>

<ul id="navbar">
        <li><a href="?action=go_to_home">Home</a></li>
        <li><a href="?action=list_products_user">View Products</a></li>
        <li><a  href="?action=go_to_cart">Go to Cart</a></li>
    </ul>

    <ul id="navbar2">
        <li><?php
if($_SESSION["First_Name"]) {
?>
<a href="?action=log_out" tite="Logout">Logout <?php echo $_SESSION["First_Name"]; ?></a>
<?php
}
?>
        
    </ul><br>

        <h1>Add Item</h1>
        <form action="." method="post">
            <input type="hidden" name="action" value="add">

            <label>Plant Name:</label>
            <select name="productkey">
            <?php 
            $products = get_products();
            foreach($products as $key => $product) :
                $cost = number_format($product['Price'], 2);
                $name = $product['Plant_Name'];
                $item = $name . ' ($' . $cost . ')';
            ?>
                <option value="<?php echo "$key"; ?>">
                    <?php echo $item; ?>
                </option>
            <?php endforeach; ?>
            </select><br><br>

            <label>Quantity:</label>
            <select name="itemqty">
            <?php for($i = 1; $i <= 50; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br>

            <label>&nbsp;</label>
            <input class="submit" type="submit" value="Add Item">
        </form>
        <p><a href=".?action=show_cart">View Cart</a></p>    
    </main>