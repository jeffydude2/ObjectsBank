<?php
include 'classes/Account.php';
include 'classes/Customer.php';
// 4 accounts
$accounts = [
    new Account("011526", "Checking", -500),
    new Account("062525", "Savings", 5000),
    new Account("081806", "Joint Account 1", 12000),
    new Account("082505", "Travel Fund", 6350) 
];
 // customer object
$customer = new Customer("Jade", "Abuda", "jca@gmail.com", $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objects & Classes</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <img src="img/logo.png" alt="Neo Bank" class="logo">

    <h2>Name: <?php echo $customer->getFullName(); ?> </h2>

    <table>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
        </tr>

        <?php foreach ($customer->accounts as $account): 

            $balance = $account->getBalance();
            $class = $balance >= 0 ? 'credit' : 'overdrawn';
        ?>
        <tr>
            <td><?= $account->number ?></td>
            <td><?= $account->type ?></td>
            <td class=<?= $class ?>>₱<?=$balance ?></td>
        </tr>
        <?php endforeach; ?>
    </table>    

</body>
</html>
