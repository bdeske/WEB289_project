
<main>

    <h2>Customer Search</h2>
    
    <!-- display a search form -->
    <form action="." method="post">
		<input type="hidden" name="action" value="show_users">
       <label>Last Name:</label>
	   <input type="text" name="Last_Name"
	   value="<?php echo htmlspecialchars($lName); ?>">
	   <input type="submit" value="Search">
    </form>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php elseif ($users) : ?>
        <h2>Results</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>City</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($users as $user) : ?>
            <tr>
				<td><?php echo htmlspecialchars(
				$user['First_Name'] . '' .
				$user['Last_Name']); ?></td>
				<td><?php echo htmlspecialchars($user['Email']); ?></td>
				<td><?php echo htmlspecialchars($user['City']); ?></td>
               <!-- 
                   table data code goes here 
                    remember to close the form inside the table row
                -->
				<td><form action="." method="post"/>
				<input type="hidden" name="action" value="display_user"/>
				<input type="hidden" name="UserID"
				value="<?php echo htmlspecialchars($user['UserID']); ?>"/>
				<input type="submit" value="Select"/>
				</form></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</main>
