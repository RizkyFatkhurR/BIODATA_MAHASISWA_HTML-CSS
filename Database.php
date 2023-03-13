<?php
$conn = mysqli_connect("localhost", "root", "", "classicmodels");
$employees_data = "SELECT * FROM employees;";
$employees_result = $conn->query($employees_data);
$products_data = "SELECT * FROM products;";
$products_result = $conn->query($products_data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE</title>
</head>

<body>
    <table border="1">
        <tr bgcolor="#498986" >
            <td>
                employeeNumber
            </td>
            <td>
                lastName
            </td>
            <td>
                firstName
            </td>
            <td>
                extension
            </td>
            <td>
                email
            </td>
            <td>
                officeCode
            </td>
            <td>
                reportsTo
            </td>
            <td>
                jobTitle
            </td>
        </tr>

        <?php
        if ($employees_result->num_rows>0){
            while ($row = $employees_result->fetch_assoc()){
                echo "<tr>
                <td>"
                    .$row ["employeeNumber"].
                "</td>
                    <td>"
                    .$row ["lastName"].
                "</td>
                <td>"
                    .$row ["firstName"].
                    "</td>
                <td>"
                    .$row ["extension"].
                    "</td>
                <td>"
                    .$row ["email"].
                    "</td>
                <td>"
                    .$row ["officeCode"].
                    "</td>
                <td>"
                    .$row ["reportsTo"].
                    "</td>
                <td>"
                    .$row ["jobTitle"].
                    "</td>
            <tr>";
            }
        } else {
            echo "No Results";
        }
        ?>
    </table>

    <hr>
    <hr>
    <table border="1">
        <tr bgcolor="#498986">
            <td>
                productCode
            </td>
            <td>
                productName
            </td>
            <td>
                productLine
            </td>
            <td>
                productScale
            </td>
            <td>
                productVendor
            </td>
            <td>
                productDescription
            </td>
            <td>
                productInStock
            </td>
            <td>
                buyPrice
            </td>
            <td>
                MSRP
            </td>
        </tr>
        <?php
        if ($employees_result->num_rows > 0) {
            while ($row = $products_result->fetch_assoc()) {
                echo "<tr>
            <td>"
                    . $row["productCode"] .
                    "</td>
            <td>"
                    . $row["productName"] .
                    "</td>
            <td>"
                    . $row["productLine"] .
                    "</td>
            <td>"
                    . $row["productScale"] .
                    "</td>
            <td>"
                    . $row["productVendor"] .
                    "</td>
            <td>"
                    . $row["productDescription"] .
                    "</td>
            <td>"
                    . $row["quantityInStock"] .
                    "</td>
            <td>"
                    . $row["buyPrice"] .
                    "</td>
            <td>"
                    . $row["MSRP"] .
                    "</td>
        </tr>";
            }
        } else {
            echo "No Results";
        }
        ?>
    </table>
</body>

</html>