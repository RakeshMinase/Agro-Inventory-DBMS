<?php 
    require('config/db.php');

    $query1 = 'SELECT * FROM sales';
    $count = 1;

    $sales_result = mysqli_query($conn, $query1);
    $sales_data = mysqli_fetch_all($sales_result, MYSQLI_ASSOC);

    mysqli_free_result($sales_result);
    if(isset($_POST['submit']) AND !empty($_POST['Product_Name'])){

        $product = mysqli_real_escape_string($conn, $_POST['Product_Name']);
        $customer = mysqli_real_escape_string($conn, $_POST['Customer_name']);
        $s_quantity = mysqli_real_escape_string($conn, $_POST['Sold_quantity']);
        $pro_id = mysqli_real_escape_string($conn, $_POST['Product_id']);
        $brand = mysqli_real_escape_string($conn, $_POST['Brand_name']);
        $s_rate = mysqli_real_escape_string($conn, $_POST['Selling_rate']);

        $query3 = "SELECT available_quantity FROM inventory WHERE product_id = '$pro_id'";
        
        if(mysqli_query($conn, $query3)){
            $query3_result = mysqli_query($conn, $query3);
            $selling_Quantity = mysqli_fetch_all($query3_result, MYSQLI_ASSOC);
            if(!empty($selling_Quantity)){
                if($selling_Quantity[0]['available_quantity'] >= $s_quantity){
                    $diff = $selling_Quantity[0]['available_quantity'] - $s_quantity;
                    if($diff >0){
                        $update_inventory_query = "UPDATE inventory SET available_quantity = $diff WHERE product_id = '$pro_id'";
                        mysqli_query($conn, $update_inventory_query);
                    }
                    else{
                        $remove_from_inventory_query = "DELETE FROM inventory WHERE product_id = '$pro_id'";
                        mysqli_query($conn, $remove_from_inventory_query);
                    }
    
                    $update_inventory_query = "UPDATE inventory SET available_quantity = ";
    
                    $query2 = "INSERT INTO sales(product_name,  Customer_name, Sold_quantity, Product_id, Brand_name, Selling_rate) 
                    VALUES('$product', '$customer', '$s_quantity', '$pro_id',  '$brand' , '$s_rate')";
        
                    if(mysqli_query($conn, $query2)){
                        header('Location: sales.php');
                    }
                    else{
                        echo '<script>alert("Enter all the required field to add product to purchase list")</script>';
                    }
                }
                else{
                    echo '<script>alert("Required quantity of given product not available")</script>';
                }
            }
            else{
                echo '<script>alert("Required quantity of given product not available")</script>';
            }
        }
        else{
            echo '<script>alert("No such product available in inventory")</script>';
        }
    }
    else{
        echo '';
    }
    
    mysqli_close($conn);
?>

<?php include('include/header_all.php'); ?>
<?php include('include/sales/header_sales.php'); ?>
                <div>
                    <table class="table table-dark table-striped w-100">
                        <thead>
                            <tr>
                                <th scope="col">Sr no</th>
                                <th scope="col">Selling id</th>
                                <th scope="col">Product name</th>
                                <th scope="col">Customer name</th>
                                <th scope="col">Sold Quantity</th>
                                <th scope="col">Product id</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Selling Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($sales_data as $data): ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $count++ ?>
                                </th>
                                <td><?php echo $data['Selling_id'] ?></td>
                                <td><?php echo $data['product_name'] ?></td>
                                <td><?php echo $data['Customer_name'] ?></td>
                                <td><?php echo $data['Sold_quantity'] ?></td>
                                <td><?php echo $data['Product_id'] ?></td>
                                <td><?php echo $data['Brand_name'] ?></td>
                                <td><?php echo $data['Selling_rate'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
<?php include('include/sales/footer_sales.php'); ?>
<?php include('include/footer_all.php'); ?>