<div class="col-9 px-5">
                <h3>Inventory List</h1>
                    <hr style="height:2px;color:black; background-color:black;" />
                    <h5>Search Inventory</h5>
                    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="pt-3">
                        <!-- Email input -->
                        <div class="form-outline mb-1">
                            <input type="name" name="Product_name" class="form-control form-control-lg"
                                placeholder="Enter a Product Name" />
                            <label class="form-label text-dark h6" for="form3Example3">Product Name</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-1">
                            <input type="name" name="Brand_name" class="form-control form-control-lg" placeholder="Enter Brand Name" />
                            <label class="form-label text-dark h6" for="form3Example4">Brand Name</label>
                        </div>

                        <div class="text-center text-lg-start my-4 pt-2">
                            <button type="search" name="search"
                                class="btn bg-dark btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem">
                                Search
                            </button>
                            <button type="show_all" name="show_all"
                                class="btn bg-dark btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem">
                                Show All
                            </button>
                        </div>
                    </form>
                    <hr style="height:2px;color:black; background-color:black;" />