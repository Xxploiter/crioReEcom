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
   /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
} 
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header mt-1 p-4">
                        <h4 class="card-title">Products</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <div class="custom-tab-1 ">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#View"><i class="la la-home mr-2"></i>View</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#productSync"><i class="la la-user mr-2"></i>Product Feature-1 </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contact1"><i class="la la-phone mr-2"></i>Product Feature-2 </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#message1"><i class="la la-envelope mr-2"></i>Product Feature-3 </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade " id="View" role="tabpanel">
                                    <!-- <div class="pt-4">
                                        <h4>This is home title</h4>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                        </p>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                        </p>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title m-2">All Products</h4>
                                                </div>
                                                <div class="card-body">
                                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addProductModal">Add New Product</button>
                                                    <!-- Modals Zone -->
                                                    <!-- Add cata Modall here -->
                                                    <div class="modal fade" id="addProductModal">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <form name="productForm">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Add New Product</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="col-xl-12">
                                                                            <div class="card">
                                                                                <!-- <div class="card-header">
                                                                                    <h4 class="card-title"></h4>
                                                                                </div> -->
                                                                                <div class="card-body">
                                                                                    <div class="basic-form">
                                                                                        <div class="form-group">
                                                                                            <input id="productName" type="text" name="product" class="form-control input-default " placeholder="Product Name" require>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input id="productQuantity" type="number" name="product" class="form-control input-default " placeholder="Product Quantity" require>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input id="productPrice" type="number" name="product" class="form-control input-default " placeholder="Product Price" require>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-group">
                                                                                                <!-- <label>Category</label> -->
                                                                                                <select id="productCata" class="form-control default-select" required>
                                                                                                    <option selected="">Choose Product Category...</option>
                                                                                                    <?php if (is_array($categoryListEle)) : ?>
                                                                                                        <?php foreach ($categoryListEle as $option) : ?>
                                                                                                            <option value="<?= $option->id ?>"><?= $option->category ?></option>
                                                                                                        <?php endforeach; ?>
                                                                                                    <?php endif; ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <textarea name="productDescription" class="form-control" rows="4" id="productDescription" placeholder="Product Description..."></textarea>
                                                                                        </div>
                                                                                        <!--  -->
                                                                                        <div class="basic-form custom_file_input">
                                                                                            <div class="input-group mb-3">
                                                                                                <div class="input-group-prepend">
                                                                                                    <span class="input-group-text">Image-1</span>
                                                                                                    <img id="image1AddUrl" src="" class="rounded-lg mr-2" width="24" alt="">
                                                                                                </div>
                                                                                                <div class="custom-file">
                                                                                                    <input id="image1" onchange="displayPreviewAddProduct(this.files[0], this.name)" name="image1" type="file" class="custom-file-input" require>
                                                                                                    <label class="custom-file-label">Choose file</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="input-group mb-3">
                                                                                                <div class="input-group-prepend">
                                                                                                    <span class="input-group-text">Image-2</span>
                                                                                                    <img id="image2AddUrl" src="" class="rounded-lg mr-2" width="24" alt="">
                                                                                                </div>
                                                                                                <div class="custom-file">
                                                                                                    <input id="image2" onchange="displayPreviewAddProduct(this.files[0], this.name)" name="image2" type="file" class="custom-file-input">
                                                                                                    <label class="custom-file-label">Choose file</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="input-group mb-3">
                                                                                                <div class="input-group-prepend">
                                                                                                    <span class="input-group-text">Image-3</span>
                                                                                                    <img id="image3AddUrl" src="" class="rounded-lg mr-2" width="24" alt="">
                                                                                                </div>
                                                                                                <div class="custom-file">
                                                                                                    <input id="image3" onchange="displayPreviewAddProduct(this.files[0], this.name)" name="image3" type="file" class="custom-file-input">
                                                                                                    <label class="custom-file-label">Choose file</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="input-group mb-3">
                                                                                                <div class="input-group-prepend">
                                                                                                    <span class="input-group-text">Image-4</span>
                                                                                                    <img id="image4AddUrl" src="" class="rounded-lg mr-2" width="24" alt="">
                                                                                                </div>
                                                                                                <div class="custom-file">
                                                                                                    <input id="image4" onchange="displayPreviewAddProduct(this.files[0], this.name)" name="image4" type="file" class="custom-file-input">
                                                                                                    <label class="custom-file-label">Choose file</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--  -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                                                        <button id="saveProduct" onclick="collectValidateData(event)" type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Add product Modal ends here -->
                                                    <!-- Edit product Modal starts here -->
                                                    <div class="modal fade" id="editProductModal">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <form name="productForm">

                                                                    <div class="modal-body">

                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h4 class="card-title">Edit Product</h4>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="basic-form">
                                                                                    <div class="form-group">
                                                                                        <input hidden id="productIdEdit" name="id" value="">
                                                                                        <input id="productNameEdit" type="text" name="product" class="form-control input-default " placeholder="Product Name" require>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input id="productQuantityEdit" type="number" name="product" class="form-control input-default " placeholder="Product Quantity" require>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input id="productPriceEdit" type="number" name="product" class="form-control input-default " placeholder="Product Price" require>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="form-group">
                                                                                            <!-- <label>Category</label> -->
                                                                                            <select id="productCataEdit" class="form-control" required>
                                                                                                <option selected="">Choose Product Category...</option>
                                                                                                <?php if (is_array($categoryListEle)) : ?>
                                                                                                    <?php foreach ($categoryListEle as $option) : ?>
                                                                                                        <option value="<?= $option->id ?>"><?= $option->category ?></option>
                                                                                                    <?php endforeach; ?>
                                                                                                <?php endif; ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="productDescription" class="form-control" rows="4" id="productDescriptionEdit" placeholder="Product Description..."></textarea>
                                                                                    </div>
                                                                                    <!--  -->
                                                                                    <div class="basic-form custom_file_input">
                                                                                        <div class="input-group mb-3">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">Image-1</span>
                                                                                                <img id="image1editUrl" src="" class="rounded-lg mr-2" width="24" alt="">
                                                                                            </div>
                                                                                            <div class="custom-file">
                                                                                                <input id="image1Edit" name="image1" onchange="displayPreview(this.files[0], this.name)" name="image1" type="file" class="custom-file-input" require>
                                                                                                <label class="custom-file-label">Choose file</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="input-group mb-3">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">Image-2</span>
                                                                                                <img id="image2editUrl" src="" class="rounded-lg mr-2" width="24" alt="">
                                                                                            </div>
                                                                                            <div class="custom-file">
                                                                                                <input id="image2Edit" name="image2" onchange="displayPreview(this.files[0], this.name)" name="image2" type="file" class="custom-file-input">
                                                                                                <label class="custom-file-label">Choose file</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="input-group mb-3">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">Image-3</span>
                                                                                                <img id="image3editUrl" src="" class="rounded-lg mr-2" width="24" alt="">
                                                                                            </div>
                                                                                            <div class="custom-file">
                                                                                                <input id="image3Edit" name="image3" onchange="displayPreview(this.files[0], this.name)" name="image3" type="file" class="custom-file-input">
                                                                                                <label class="custom-file-label">Choose file</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="input-group mb-3">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">Image-4</span>
                                                                                                <img id="image4editUrl" src="" class="rounded-lg mr-2" width="24" alt="">
                                                                                            </div>
                                                                                            <div class="custom-file">
                                                                                                <input id="image4Edit" name="image4" onchange="displayPreview(this.files[0], this.name)" name="image4" type="file" class="custom-file-input">
                                                                                                <label class="custom-file-label">Choose file</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--  -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cancel</button>
                                                                        <button onclick="saveEditProduct(event)" type="submit" class="btn btn-primary"> Edit Product</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Edit Product Modal ends here -->

                                                    <!-- Modal end -->
                                                    <div class="table-responsive mt-4">
                                                        <table class="table table-responsive-md">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width:80px;"><strong>#</strong></th>
                                                                    <th><strong>PRODUCT</strong></th>
                                                                    <th><strong>IMGS</strong></th>
                                                                    <th><strong>DESC</strong></th>
                                                                    <th><strong>CATEGORY</strong></th>
                                                                    <th><strong>PRICE</strong></th>
                                                                    <th><strong>QTY</strong></th>
                                                                    <th><strong>DATE</strong></th>
                                                                    <th><strong>STATUS</strong></th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="productTableBody">
                                                                <?php
                                                                echo $productRows;
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="productSync">
                                    <div class="pt-4">
                                        <!-- Success Modal -->
                                        <div id="success-modal" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p id="success-message"></p>
                                            </div>
                                        </div>

                                        <!-- Processing Modal -->
                                        <div id="processing-modal" class="modal">
                                            <div class="modal-content">
                                                <p>Processing...</p>
                                            </div>
                                        </div>

                                        <h4>Sync Product</h4>
                                        <button id="startSyncProduct" class="btn light btn-warning">start sync</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact1">
                                    <div class="pt-4">
                                        <h4>This is contact title</h4>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                        </p>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="message1">
                                    <div class="pt-4">
                                        <h4>This is message title</h4>
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        </p>
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->viewAdmin("footer", $data); ?>
<script>
    function collectValidateData(e) {
        console.log('hhere');
        e.preventDefault();


        let formdata = new FormData();
        const productName = document.querySelector('#productName')
        const productQuantity = document.querySelector('#productQuantity').value
        const productPrice = document.querySelector('#productPrice').value
        const productCata = document.querySelector('#productCata').value
        const productDescription = document.querySelector('#productDescription').value
        if (productName.value.trim() == "" || !isNaN(productName.value.trim())) {
            alert("Enter a valid Product")
            return
        }
        // if (productQuantity.trim() != "" || isNaN(productQuantity.trim()) || productQuantity.trim() > 0) {
        //     alert("Enter a valid Product quantity")
        //     return
        // }
        const image1 = document.querySelector('#image1')
        if (image1.files.length == 0) {
            alert("Enter a valid Image")
            return
        }
        const image2 = document.querySelector('#image2')
        if (image2.files.length > 0) {
            formdata.append('image2', image2.files[0])
        }

        const image3 = document.querySelector('#image3')
        if (image3.files.length > 0) {
            formdata.append('image3', image3.files[0])
        }

        const image4 = document.querySelector('#image4')
        if (image4.files.length > 0) {
            formdata.append('image4', image4.files[0])
        }

        formdata.append('data_type', 'add_product')
        formdata.append('description', productDescription)
        formdata.append('quantity', productQuantity)
        formdata.append('price', productPrice)
        formdata.append('category', productCata)
        formdata.append('name', productName.value.trim())
        formdata.append('image1', image1.files[0])

        sendDataFiles(formdata)

    }
    // sendData function to handle the sending of the data using ajax
    function sendData(data = {}) {
        const ajax = new XMLHttpRequest()
        ajax.addEventListener('readystatechange', function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handleResult(ajax.responseText)
            }
        })
        ajax.open("POST", "<?= ROOT ?>ajax_product", true)
        ajax.send(JSON.stringify(data))
    }

    function sendDataFiles(data) {
        const ajax = new XMLHttpRequest()
        ajax.addEventListener('readystatechange', function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handleResult(ajax.responseText)
            }
        })
        ajax.open("POST", "<?= ROOT ?>ajax_product", true)
        ajax.send(data)
    }
    // handleResult for handling all the result from the sendData function
    function handleResult(result) {
        console.log(result);
        if (result != '') {
            const obj = JSON.parse(result)
            if (obj.data_type != 'undefined') {
                if (obj.data_type == 'add_new') {
                    // we check above the type of data recieved if success then we get a message type of info
                    if (obj.message_type == 'info') {
                        // alert(obj.message)
                        $('#addProductModal').modal('hide')
                        const tb = document.querySelector('#productTableBody')
                        tb.innerHTML = obj.data;
                    } else {
                        alert(obj.message)
                    }
                } else if (obj.data_type == 'delete_row') {
                    const tb = document.querySelector('#productTableBody')
                    tb.innerHTML = obj.data;
                } else if (obj.data_type == 'toggled_row') {
                    const tb = document.querySelector('#productTableBody')
                    tb.innerHTML = obj.data;
                } else if (obj.data_type == 'edit_product') {
                    const tb = document.querySelector('#productTableBody')
                    tb.innerHTML = obj.data;
                    $('#editProductModal').modal('hide')
                }
            }
        }
    }

    function toggleStateProduct(props) {
        const {
            event,
            id,
            currentState
        } = props

        sendData({
            data_type: "toggleState_row",
            id: id,
            currentStateValue: currentState
        })
    }

    function editProductModalData(props) {
        console.log(props);
        // converting javascript object of objects to array of objects
        var myData = Object.keys(props).map(key => {
            return props[key];
        })
        const {
            id,
            name,
            description,
            price,
            category,
            quantity,
            image1,
            image2,
            image3,
            image4
        } = myData[0]

        document.querySelector('#productNameEdit').value = name
        document.querySelector('#productIdEdit').value = id
        document.querySelector('#productQuantityEdit').value = quantity
        document.querySelector('#productPriceEdit').value = price
        document.querySelector('#productCataEdit').value = category
        document.querySelector('#productDescriptionEdit').value = description
        document.querySelector('#image1editUrl').src = `<?= ROOT ?>${image1}`
        document.querySelector('#image2editUrl').src = `<?= ROOT ?>${image2}`
        document.querySelector('#image3editUrl').src = `<?= ROOT ?>${image3}`
        document.querySelector('#image4editUrl').src = `<?= ROOT ?>${image4}`
    }

    function saveEditProduct(event) {

        let formdata = new FormData();
        event.preventDefault()
        const productIdEdit = document.querySelector('#productIdEdit').value;
        const productNameEdit = document.querySelector('#productNameEdit').value;
        const productQuantityEdit = document.querySelector('#productQuantityEdit').value;
        const productPriceEdit = document.querySelector('#productPriceEdit').value;
        const productCataEdit = document.querySelector('#productCataEdit').value;
        const productDescriptionEdit = document.querySelector('#productDescriptionEdit').value;

        const image1Edit = document.querySelector('#image1Edit');
        const image2Edit = document.querySelector('#image2Edit');
        const image3Edit = document.querySelector('#image3Edit');
        const image4Edit = document.querySelector('#image4Edit');


        if (image1Edit.files.length > 0) {
            formdata.append('image1', image1Edit.files[0])
        }

        if (image2Edit.files.length > 0) {
            formdata.append('image2', image2Edit.files[0])
        }


        if (image3Edit.files.length > 0) {
            formdata.append('image3', image3Edit.files[0])
        }


        if (image4Edit.files.length > 0) {
            formdata.append('image4', image4Edit.files[0])
        }

        formdata.append('data_type', 'edit_product')
        formdata.append('productIdEdit', productIdEdit)
        formdata.append('productNameEdit', productNameEdit)
        formdata.append('productQuantityEdit', productQuantityEdit)
        formdata.append('productPriceEdit', productPriceEdit)
        formdata.append('productCataEdit', productCataEdit)
        formdata.append('productDescriptionEdit', productDescriptionEdit)


        sendDataFiles(formdata)


        // sendData({
        //     data_type: "edit_row",
        //     id: editProductId,
        //     product: editProductVal
        // })

    }




    function dltProduct(props) {
        // IMP use sendDataFiles instead of sendData then dlt will work
        console.log('here in dlt');
        const {
            event,
            id
        } = props
        console.log(id);
        if (!confirm("Are you sure you want to delete this product")) {
            return
        }
        sendData({
            data_type: "delete_row",
            id: id
        })
    }


    function displayPreview(file, name) {

        if (name == 'image1') {
            const previewImg1 = document.querySelector('#image1editUrl')
            previewImg1.src = URL.createObjectURL(file);

        } else if (name == 'image2') {
            const previewImg2 = document.querySelector('#image2editUrl')
            previewImg2.src = URL.createObjectURL(file);

        } else if (name == 'image3') {
            const previewImg3 = document.querySelector('#image3editUrl')
            previewImg3.src = URL.createObjectURL(file);

        } else if (name == 'image4') {
            const previewImg4 = document.querySelector('#image4editUrl')
            previewImg4.src = URL.createObjectURL(file);

        }
    }

    function displayPreviewAddProduct(file, name) {

        if (name == 'image1') {
            const previewImg1 = document.querySelector('#image1AddUrl')
            previewImg1.src = URL.createObjectURL(file);

        } else if (name == 'image2') {
            const previewImg2 = document.querySelector('#image2AddUrl')
            previewImg2.src = URL.createObjectURL(file);

        } else if (name == 'image3') {
            const previewImg3 = document.querySelector('#image3AddUrl')
            previewImg3.src = URL.createObjectURL(file);

        } else if (name == 'image4') {
            const previewImg4 = document.querySelector('#image4AddUrl')
            previewImg4.src = URL.createObjectURL(file);

        }
    }
</script>
<script>
  // Get the success modal and its message element
  const successModal = document.getElementById("success-modal");
  const successMessage = document.getElementById("success-message");

  // Get the processing modal
  const processingModal = document.getElementById("processing-modal");

  // Function to show the success modal with the given message
  function showSuccessModal(message) {
    // Set the success message
    successMessage.textContent = message;

    // Show the success modal
    successModal.style.display = "block";

    // Hide the success modal after 3 seconds
    setTimeout(function() {
      successModal.style.display = "none";
    }, 4000);
  }

  // Function to show the processing modal
  function showProcessingModal() {
    // Show the processing modal
    processingModal.style.display = "block";
  }

  // Function to hide the processing modal
  function hideProcessingModal() {
    // Hide the processing modal
    processingModal.style.display = "none";
  }


    const syncHandler = document.querySelector('#startSyncProduct')
    syncHandler.addEventListener('click', () => {
        console.log('sync Handler working');
        showProcessingModal();
        sendSyncRequest({
            data_type: "sync",
            sync: "product"
        })
    })

    function sendSyncRequest(data = {}) {
        const ajax = new XMLHttpRequest()
        ajax.addEventListener('readystatechange', function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                hideProcessingModal();
                handleResult(ajax.responseText)
            }
        })
        ajax.open("POST", "<?= ROOT ?>ajax_syncData", true)
        ajax.send(JSON.stringify(data))
    }

    function handleSyncResult(result) {
        console.log(result);
        const obj = JSON.parse(result)
        if (obj.status == success) {
            showSuccessModal(obj.status);
        }
        // if (result != '') {
        //     const obj = JSON.parse(result)
        //     if (obj.data_type != 'undefined') {
        //         if (obj.data_type == 'add_new') {
        //             // we check above the type of data recieved if success then we get a message type of info
        //             if (obj.message_type == 'info') {
        //                 // alert(obj.message)
        //                 $('#addProductModal').modal('hide')
        //                 const tb = document.querySelector('#productTableBody')
        //                 tb.innerHTML = obj.data;
        //             } else {
        //                 alert(obj.message)
        //             }
        //         } else if (obj.data_type == 'delete_row') {
        //             const tb = document.querySelector('#productTableBody')
        //             tb.innerHTML = obj.data;
        //         } else if (obj.data_type == 'toggled_row') {
        //             const tb = document.querySelector('#productTableBody')
        //             tb.innerHTML = obj.data;
        //         } else if (obj.data_type == 'edit_product') {
        //             const tb = document.querySelector('#productTableBody')
        //             tb.innerHTML = obj.data;
        //             $('#editProductModal').modal('hide')
        //         }
        //     }
        // }
    }
</script>