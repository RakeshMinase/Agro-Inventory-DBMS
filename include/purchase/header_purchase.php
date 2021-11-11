<div class="col-9">
                <h3>Sales</h3>
                <hr style="height:2px;color:black; background-color:black;" />
                <h5>Search Inventory</h5>
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="row">
                        <div class="form-group col-5">
                            <label>Product Name</label>
                            <input type="name" class="form-control" name="Product_Name" placeholder="Product Name">
                        </div>
                        <div class="form-group col-5">
                            <label>Dealer Name</label>
                            <input type="name" class="form-control" name="Dealer_name" placeholder="Dealer Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-5">
                            <label>Purchased Quantity</label>
                            <input class="form-control" name="Purchased_quantity" placeholder="Purchased Quantity">
                        </div>
                        <div class="form-group col-5">
                            <label>Product Id</label>
                            <input class="form-control" name="Product_Id" placeholder="Product Id">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="form-group col-5">
                            <label>Brand Name</label>
                            <input class="form-control" name="Brand_name" placeholder="Brand Name">
                        </div>
                        <div class="form-group col-5">
                            <label >Purchase Rate</label>
                            <input class="form-control" name="Purchase_rate" placeholder="Purchase Rate">
                        </div>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary bg-dark">Add Purchase</button>
                </form>
                <hr style="height:2px;color:black; background-color:black;" />