<main>

	<ul id="navbar">
		<li><a href="?action=go_to_home">Home</a></li>
		<li><a href="?action=list_products_user">View Products</a></li>
		<li><a class="here" href="#">Go to Cart</a></li>
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



<main>
        <h1>Your Cart</h1>
        <?php if (empty($_SESSION['cart']) || 
                  count($_SESSION['cart']) == 0) : ?>
            <p>There are no items in your cart.</p><br>
        <?php else: ?>
            <form action="." method="post">
            <input type="hidden" name="action" value="update">
            <table>
                <tr id="cart_header">
                    <th class="left">Item</th>
                    <th class="right">Item Cost</th>
                    <th class="right">Quantity</th>
                    <th class="right">Item Total</th>
                </tr>

            <?php foreach( $_SESSION['cart'] as $key => $item ) :
                $cost  = number_format($item['Price'],  2);
                $total = number_format($item['total'], 2);
                $name = ($item['Plant_Name']);
            ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td class="right">
                        $<?php echo $cost; ?>
                    </td>
                    <td class="right">
                        <input type="text" class="cart_qty"
                            name="newqty[<?php echo $key; ?>]"
                            value="<?php echo $item['qty']; ?>">
                    </td>
                    <td class="right">
                        $<?php echo $total; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
                <tr id="cart_footer">
                    <td colspan="3"><b>Subtotal</b></td>
                    <td>$<?php echo get_subtotal(); ?></td>
                </tr>
                <tr>
                    <td colspan="4" class="right">
                        <input class="submit" type="submit" value="Update Cart">
                    </td>
                </tr>
            </table>
            <h2>Click "Update Cart" to update quantities in your
                cart. Enter a quantity of 0 to remove an item.
            </h2>
            </form><br>
        <?php endif; ?>
        <p><a class="insert" href=".?action=show_add_item">Add Item</a></p><br>
        <p><a class="insert" href=".?action=empty_cart">Empty Cart</a></p>
    </main>