<?php $this->viewAdmin("header", $data); ?>
<?php $this->viewAdmin("sidebar", $data); ?>


<style>
    #main-wrapper>div.content-body>div>div {
        margin-top: -36px;
    }

    .card-title {
        font-size: 14px;
    }

    .form-control {
        font-size: 0.675rem;
    }

    .dropdown-menu .dropdown-item {
        font-size: 9px;
    }

    .input-group-text {
        font-size: 0.675rem;
    }

    #popup {
        position: absolute;
        left: -100%;
        width: 300px;
        height: 50px;
        background: #57cd57;
        padding: 20px;
        transition: left 0.5s;
        bottom: 0;
        border-radius: 4px;
        color: black;
    }
</style>

<div class="content-body">

    <div class="container-fluid">
        <div class="row">

            <!-- here -->
            <div class="col-xl-12 col-lg-12">
                <div class="card">

                    <div class="card-header mt-1 p-4">
                        <h4 class="card-title">Retailers Section</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <div class="custom-tab-1 ">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#addRetailer"><i class="la la-home mr-2"></i>Add</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#allRetailersAdded"><i class="la la-user mr-2"></i>View Added Retailers</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="addRetailer" role="tabpanel">
                                    <!-- <div class="pt-4">
                                        <h4>This is home title</h4>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                        </p>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                        </p>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card mt-lg-4">
                                                <div class="card-header mt-lg-2 mb-lg-3">
                                                    <h4 class="card-title">Add Retailer to The Crio-Re Environment</h4>
                                                </div>
                                                <div class="card-body ">
                                                    <div class="basic-form">
                                                        <form method="post">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label>Select a Retailer</label>
                                                                    <select name="crioRetailerId" id="inputState" class="form-control default-select">
                                                                        <option selected="">Choose Retailer...</option>
                                                                        <?php foreach ($allRetailersApiData as $singleRetailerDetails) : ?>
                                                                            <?php if (!in_array($singleRetailerDetails->id, $retailerAllIds)) {
                                                                                echo "<option value=" . $singleRetailerDetails->id . " >" . $singleRetailerDetails->name . "</option> ";  //sending the data to another component where the html is build 
                                                                            } ?>

                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                                <!-- <div class="form-group col-md-2">
                                                                    <label>Zip</label>
                                                                    <input type="text" class="form-control">
                                                                </div> -->
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Secondary username of the retailer</label>
                                                                    <input name="crioReUserName" type="text" class="form-control" placeholder="Username of the retailer">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Secondary-Email</label>
                                                                    <input name="crioReEmail" type="email" class="form-control" placeholder="Email" required>
                                                                </div>
                                                                <!-- <div class="form-group col-md-6">
                                                                    <label>Password</label>
                                                                    <input type="password" class="form-control" placeholder="Password">
                                                                </div> -->
                                                                <!-- <div class="form-group col-md-6">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control">
                                                                </div> -->
                                                            </div>

                                                            <div class="form-group">
                                                                <!-- <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox">
                                                                    <label class="form-check-label">
                                                                        Check me out
                                                                    </label>
                                                                </div> -->
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Add Retailer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="allRetailersAdded">
                                    <div class="pt-4">
                                        <div class="table-responsive mt-4">
                                            <table class="table table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th style="width:80px;"><strong>#</strong></th>
                                                        <th><strong>NAME</strong></th>
                                                        <th><strong>GST</strong></th>
                                                        <th><strong>BRANCH</strong></th>
                                                        <th><strong>OWNER</strong></th>
                                                        <th><strong>DIST</strong></th>
                                                        <th><strong>OPEN</strong></th>
                                                        <th><strong>CLOSE</strong></th>
                                                        <th><strong>CONTACT</strong></th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody id="productTableBody">
                                                    <?php if (is_array($retailerAlldata)) : ?>
                                                        <?php foreach ($retailerAlldata as $singleRetailerAllData) : ?>
                                                            <?php $this->viewAdmin("singleRetailerTable.inc", $singleRetailerAllData); ?>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?php
                if (isset($_SESSION['LastRetailerAdded']) && $_SESSION['LastRetailerAdded'] != "") {
                    echo ' <div id="popup">
                    <p>' . $_SESSION['LastRetailerAdded'] . '!</p>
                  </div>';
                    unset($_SESSION['LastRetailerAdded']);
                }
                ?>



            </div>

            <!-- end -->
        </div>
    </div>

</div>
<script>
    var popup = document.getElementById("popup");
    popup.style.left = "0";
    setTimeout(function() {
        popup.style.left = "-100%";
    }, 3000);
</script>

<?php $this->viewAdmin("footer", $data); ?>