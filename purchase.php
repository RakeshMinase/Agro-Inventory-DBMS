<?php 
    require('config/db.php');

    $query1 = 'SELECT * FROM purchase';
    $count = 1;

    $purchase_result = mysqli_query($conn, $query1);
    $purchase_data = mysqli_fetch_all($purchase_result, MYSQLI_ASSOC);

    mysqli_free_result($purchase_result);
    if(isset($_POST['submit'])){

        $product = mysqli_real_escape_string($conn, $_POST['Product_Name']);
        $dealer = mysqli_real_escape_string($conn, $_POST['Dealer_name']);
        $p_quantity = mysqli_real_escape_string($conn, $_POST['Purchased_quantity']);
        $p_id = mysqli_real_escape_string($conn, $_POST['Product_Id']);
        $brand = mysqli_real_escape_string($conn, $_POST['Brand_name']);
        $p_rate = mysqli_real_escape_string($conn, $_POST['Purchase_rate']);

        $query2 = "INSERT INTO purchase(product_name, product_id, dealer_name, purchased_quantity, purchase_rate, brand_name) 
        VALUES('$product', '$p_id', '$dealer', '$p_quantity', '$p_rate', '$brand')";

        $query_insert_to_inventory = "INSERT INTO inventory(product_id, product_name, available_quantity, brand_name, purchase_rate)
        VALUES('$p_id', '$product', '$p_quantity', '$brand','$p_rate')";

        if(mysqli_query($conn, $query2)){
            mysqli_query($conn, $query_insert_to_inventory);
            header('Location: purchase.php');
        }
        else{
            echo '<script>alert("Enter all the required field to add product to purchase list")</script>';
        }
    }
    else{
        echo 'vbn';
    }
    mysqli_close($conn);
?>

<?php include('include/header_all.php'); ?>
<?php include('include/purchase/header_purchase.php'); ?>
<div>
    <table class="table table-dark table-striped w-100">
        <thead>
            <tr>
                <th scope="col">Sr no</th>
                <th scope="col">Order id</th>
                <th scope="col">Product name</th>
                <th scope="col">Dealer name</th>
                <th scope="col">Purchased Quantity</th>
                <th scope="col">Product id</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Purchase Rate</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($purchase_data as $p_data): ?>
            <tr>
                <th scope="row">
                    <?php echo $count++ ?>
                </th>
                <td>
                    <?php echo $p_data['order_id'] ?>
                </td>
                <td>
                    <?php echo $p_data['product_name'] ?>
                </td>
                <td>
                    <?php echo $p_data['dealer_name'] ?>
                </td>
                <td>
                    <?php echo $p_data['purchased_quantity'] ?>
                </td>
                <td>
                    <?php echo $p_data['product_id'] ?>
                </td>
                <td>
                    <?php echo $p_data['brand_name'] ?>
                </td>
                <td>
                    <?php echo $p_data['purchase_rate'] ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include('include/purchase/footer_purchase.php'); ?>
<?php include('include/footer_all.php'); ?>