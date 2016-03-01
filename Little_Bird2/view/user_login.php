<?php include '../view/header.php'; ?>

<main>
<h1>Customer Login</h1>
<p>You must login before you can register a product</p>
<form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="get_customer">

        <label>Email:</label>
        <input type="text" name="email">

        <input type="submit" value="Login" /><br>
    </form>
</main>
<?php include '../view/footer.php'; ?>