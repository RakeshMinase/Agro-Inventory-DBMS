<div class="col-9">
                <h3>Sales</h3>
                <hr style="height:2px;color:black; background-color:black;" />
                <h5>Search Inventory</h5>
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="row">
                        <div class="form-group col-5">
                            <label>Product Name</label>
                            <input type="name" name="Product_Name" class="form-control" placeholder="Product Name">
                        </div>
                        <div class="form-group col-5">
                            <label>Customer Name</label>
                            <input type="name" name="Customer_name" class="form-control" placeholder="Customer Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-5">
                            <label>Sold Quantity</label>
                            <input class="form-control" name="Sold_quantity" placeholder="Sold Quantity">
                        </div>
                        <div class="form-group col-5">
                            <label>Product Id</label>
                            <input class="form-control" name="Product_id" placeholder="Product Id">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="form-group col-5">
                            <label>Brand Name</label>
                            <input class="form-control" name="Brand_name" placeholder="Brand Name">
                        </div>
                        <div class="form-group col-5">
                            <label >Selling Rate</label>
                            <input class="form-control" name="Selling_rate" placeholder="Selling Rate">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary bg-dark">Add Sale</button>
                </form>
                <hr style="height:2px;color:black; background-color:black;" />