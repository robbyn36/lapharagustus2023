<!DOCTYPE html>
<html>
<head>
    <title>Data from Database</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.7/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.js"></script>
</head>
<body>
    <h1>Data from Database</h1>

    <?php
    // Your PHP code for database connection and data retrieval remains unchanged
    // ...

    ?>

    <table id="myDataTable" border='1'>
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
                <th>Column 3</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the data and populate the table rows
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["column1"] . "</td>";
                echo "<td>" . $row["column2"] . "</td>";
                echo "<td>" . $row["column3"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#myDataTable').DataTable();
        });
    </script>
</body>
</html>
