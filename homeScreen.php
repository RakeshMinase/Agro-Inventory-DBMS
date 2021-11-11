<?php 
    require('config/db.php');

    $query1 = 'SELECT * FROM inventory';

    $result = mysqli_query($conn, $query1);
    $count = 1;
    $inventory_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(isset($_POST['search'])){
        $product = mysqli_real_escape_string($conn, $_POST['Product_name']);
        $brand = mysqli_real_escape_string($conn, $_POST['Brand_name']);

        $search_query = "SELECT * FROM inventory WHERE product_name = '$product' AND brand_name = '$brand'";

        if(mysqli_query($conn, $search_query)){
            $search_result = mysqli_query($conn, $search_query);
            $inventory_data = mysqli_fetch_all($search_result, MYSQLI_ASSOC);
            if(count($inventory_data) == 0){
                echo '<script>alert("No such Product available in the inventory")</script>';
            }
        }else{
            echo '<script>alert("Enter proper search details")</script>';
        }
    }
    else{
        echo 'Error';
    }

    if(isset($_POST['show_all'])){
        $query1 = 'SELECT * FROM inventory';

        $result = mysqli_query($conn, $query1);
        $count = 1;
        $inventory_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else{
        echo 'Error';
    }

    

    mysqli_free_result($result);

    mysqli_close($conn);
?>

<?php include('include/header_all.php'); ?>
<?php include('include/inventory/header_inventory.php'); ?>
<div>
    <table class="table table-dark table-striped w-100">
        <thead>
            <tr>
                <th scope="col">Sr no</th>
                <th scope="col">Product id</th>
                <th scope="col">Product name</th>
                <th scope="col">Available Quantity</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Purchase Rate</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($inventory_data as $data): ?>
            <tr>
                <th scope="row">
                    <?php echo $count++ ?>
                </th>
                <td>
                    <?php echo $data['product_id'] ?>
                </td>
                <td>
                    <?php echo $data['product_name'] ?>
                </td>
                <td>
                    <?php echo $data['available_quantity'] ?>
                </td>
                <td>
                    <?php echo $data['brand_name'] ?>
                </td>
                <td>
                    <?php echo $data['purchase_rate'] ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include('include/inventory/footer_inventory.php'); ?>
<?php include('include/footer_all.php'); ?>