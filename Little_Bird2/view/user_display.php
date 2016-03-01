
<main>
    <h1>Customer List</h1>


    <ul id="navbar">
        <li><a href="?action=home">Logout</a></li>
    </ul>

    <!-- display a table of customers -->
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            
        </tr>
      <?php 

      $users=get_users();
      foreach ($users as $user) : ?>

        <tr>
            <td><?php echo htmlspecialchars(
				$user['First_Name'] . ' ' .
				$user['Last_Name']); ?></td>
            <td><?php echo htmlspecialchars($user['Email']); ?></td>
            <td><?php echo htmlspecialchars($user['Address']); ?></td>
            <td><?php echo htmlspecialchars($user['City']); ?></td>
            <td><?php echo htmlspecialchars($user['StateID']); ?></td>
            <td><?php echo htmlspecialchars($user['Zip_Code']); ?></td>            
            


            
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="?action=add_user">Add User</a></p>

</main>

