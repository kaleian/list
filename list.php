<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User List</title>
</head>
<body>

<?php
$users = array(
    array(
        'name' => 'Ian Kale',
        'email' => 'kaleian54@gmail.com',
        'role' => 'Admin'
    ),
    array(
        'name' => 'Vanessa Smith',
        'email' => 'vannessa254@gmail.com',
        'role' => 'Moderator'
    ),
    array(
        'name' => 'Samson Will',
        'email' => 'will254@gmail.com',
        'role' => 'User'
    )
);

// Function to generate the table
function generateUserTable($users) {
    echo '<table>';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Role</th>';
    echo '</tr>';
    foreach ($users as $user) {
        echo '<tr>';
        echo '<td>' . $user['name'] . '</td>';
        echo '<td>' . $user['email'] . '</td>';
        echo '<td>' . $user['role'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

// Call the function to display the table
generateUserTable($users);
?>

</body>
</html>

