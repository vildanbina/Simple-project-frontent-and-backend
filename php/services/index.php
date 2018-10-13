<?php
//include config
require_once "../includes/pdoconfig.php";

//if not logged in redirect to login page
//if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if (isset($_GET['delpost'])) {

    $stmt = $db->prepare('DELETE FROM services WHERE id = :id');
    $stmt->execute(array(':id' => $_GET['delpost']));

    header('Location: index.php?action=deleted');
    exit;
}

?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <link rel="stylesheet" href="../style/normalize.css">
        <link rel="stylesheet" href="../style/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

        <script language="JavaScript" type="text/javascript">
            function delpost(id, title) {
                if (confirm("Are you sure you want to delete '" + title + "'")) {
                    window.location.href = 'index.php?delpost=' + id;
                }
            }

        </script>
    </head>

    <body>

        <div id="wrapper">

            <h1 style="display: inline;">Services</h1><?php include "../post/menu.php";?>
            <?php
//show message from add / edit page
if (isset($_GET['action'])) {
    echo '<h3>Post ' . $_GET['action'] . '.</h3> <a href="/Projekti/Services.php">Preview</a>';
}
?>
            <p><a href='add-services.php'>Add Service</a></p>


            <table class="w-100">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                <?php
try {

    $stmt = $db->query('SELECT id, title,description,date,image FROM services ORDER BY id asc');
    while ($row = $stmt->fetch()) {

        echo '<tr>';
        echo '<td>' . $row['title'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '<td>' . $row['date'] . '</td>';
        echo '<td>' . $row['image'] . '</td>';
        ?>

                    <td>
                        <a href="edit-services.php?id=
               <?php echo $row['id']; ?>">Edit</a> |
                        <a href="javascript:delpost('<?php
echo $row['id']; ?>','<?php
echo $row['title']; ?>')">Delete</a>
                    </td>

                    <?php
echo '</tr>';

    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
            </table>


        </div>

    </body>

    </html>
