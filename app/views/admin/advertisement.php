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
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
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
                        <h4 class="card-title">Advertisements</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <div class="custom-tab-1 ">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#View"><i class="la la-home mr-2"></i>View</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#advertisementSync"><i class="la la-user mr-2"></i>Advertisement Feature-1 </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contact1"><i class="la la-phone mr-2"></i>Advertisement Feature-2 </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#message1"><i class="la la-envelope mr-2"></i>Advertisement Feature-3 </a>
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
                                                    <h4 class="card-title m-2">All Advertisements</h4>
                                                </div>
                                                <div class="card-body">
                                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addAdvertisementModal">Add New Advertisement</button>
                                                    <!-- Modals Zone -->
                                                    <!-- Add cata Modall here -->
                                                    <!-- Add Advertisement Modal -->
                                                    <div class="modal fade" id="addAdvertisementModal">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <form name="advertisementForm">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Add New Advertisement</h5>
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
                                                                                            <input id="advertisementItemId" type="number" name="advertisement" class="form-control input-default " placeholder="Advertisement itemId" require>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input id="advertisementDescription" type="text" name="advertisement" class="form-control input-default " placeholder="Advertisement Description" require>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input id="advertisementTitle" type="text" name="advertisement" class="form-control input-default " placeholder="Advertisement Title" require>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input id="advertisementDiscount" type="number" name="advertisement" class="form-control input-default " placeholder="Advertisement Discount" require>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input id="advertisementPrice" type="number" name="advertisement" class="form-control input-default " placeholder="Advertisement Price" require>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input id="advertisementAvailability" type="date" name="advertisement" class="form-control input-default " placeholder="Advertisement Availability" require>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input id="advertisementFor" type="text" name="advertisement" class="form-control input-default " placeholder="Advertisement For" require>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input id="advertisementForSubSection" type="text" name="advertisement" class="form-control input-default " placeholder="Advertisement ForSubSection" require>
                                                                                        </div>

                                                                                        <!--  -->
                                                                                        <div class="basic-form custom_file_input">
                                                                                            <div class="input-group mb-3">
                                                                                                <div class="input-group-prepend">
                                                                                                    <span class="input-group-text">Image-1</span>
                                                                                                    <img id="image1AddUrl" src="" class="rounded-lg mr-2" width="24" alt="">
                                                                                                </div>
                                                                                                <div class="custom-file">
                                                                                                    <input id="image1" onchange="displayPreviewAddAdvertisement(this.files[0], this.name)" name="image1" type="file" class="custom-file-input" require>
                                                                                                    <label class="custom-file-label">Choose file</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="input-group mb-3">
                                                                                                <div class="input-group-prepend">
                                                                                                    <span class="input-group-text">Image-2</span>
                                                                                                    <img id="image2AddUrl" src="" class="rounded-lg mr-2" width="24" alt="">
                                                                                                </div>
                                                                                                <div class="custom-file">
                                                                                                    <input id="image2" onchange="displayPreviewAddAdvertisement(this.files[0], this.name)" name="image2" type="file" class="custom-file-input">
                                                                                                    <label class="custom-file-label">Choose file</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="input-group mb-3">
                                                                                                <div class="input-group-prepend">
                                                                                                    <span class="input-group-text">Image-3</span>
                                                                                                    <img id="image3AddUrl" src="" class="rounded-lg mr-2" width="24" alt="">
                                                                                                </div>
                                                                                                <div class="custom-file">
                                                                                                    <input id="image3" onchange="displayPreviewAddAdvertisement(this.files[0], this.name)" name="image3" type="file" class="custom-file-input">
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
                                                                        <button id="saveAdvertisement" onclick="collectValidateData(event)" type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Add advertisement Modal ends here -->
                                                    <!-- Edit advertisement Modal starts here -->
                                                    <div class="modal fade" id="editAdvertisementModal">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <form name="advertisementForm">

                                                                    <div class="modal-body">

                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h4 class="card-title">Edit Advertisement</h4>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="basic-form">
                                                                                    <div class="form-group">
                                                                                        <input hidden id="advertisementIdEdit" name="id" value="">
                                                                                        <input id="advertisementItemIdEdit" type="number" name="advertisement" class="form-control input-default " placeholder="Advertisement ItemId" require>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input id="advertisementDescriptionEdit" type="text" name="advertisement" class="form-control input-default " placeholder="Advertisement Description" require>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input id="advertisementTitleEdit" type="text" name="advertisement" class="form-control input-default " placeholder="Advertisement Title" require>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input id="advertisementDiscountEdit" type="number" name="advertisement" class="form-control input-default " placeholder="Advertisement Discount" require>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input id="advertisementPriceEdit" type="number" name="advertisement" class="form-control input-default " placeholder="Advertisement Price" require>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input id="advertisementAvailabilityEdit" type="date" name="advertisement" class="form-control input-default " placeholder="Advertisement Availability" require>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input id="advertisementForEdit" type="text" name="advertisement" class="form-control input-default " placeholder="Advertisement For" require>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input id="advertisementForSubSectionEdit" type="text" name="advertisement" class="form-control input-default " placeholder="Advertisement ForSubSection" require>
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
                                                                                    </div>
                                                                                    <!--  -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cancel</button>
                                                                        <button onclick="saveEditAdvertisement(event)" type="submit" class="btn btn-primary"> Edit Advertisement</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Edit Advertisement Modal ends here -->

                                                    <!-- Modal end -->
                                                    <!-- Table for viewing all the advertisement -->
                                                    <div class="table-responsive mt-4">
                                                        <table class="table table-responsive-md">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width:80px;"><strong>#</strong></th>
                                                                    <th><strong>ITEM ID</strong></th>
                                                                    <th><strong>IMAGE</strong></th>
                                                                    <th><strong>TITLE</strong></th>
                                                                    <th><strong>DESC</strong></th>
                                                                    <th><strong>DISC</strong></th>
                                                                    <th><strong>PRICE</strong></th>
                                                                    <th><strong>AVAILABILITY</strong></th>
                                                                    <th><strong>FOR</strong></th>
                                                                    <th><strong>FOR SUBSEC</strong></th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="advertisementTableBody">
                                                                <?php
                                                                echo $advertisementRows;
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Table for advertisement ends -->


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="advertisementSync">
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

                                        <h4>Sync Advertisement</h4>
                                        <button id="startSyncAdvertisement" class="btn light btn-warning">start sync</button>
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
    // Function to validate data
    function collectValidateData(e) {

        e.preventDefault();

        let formdata = new FormData();
        const advertisementItemId = parseInt(document.querySelector('#advertisementItemId').value);
        const advertisementDescription = document.querySelector('#advertisementDescription').value
        const advertisementTitle = document.querySelector('#advertisementTitle').value
        const advertisementDiscount = document.querySelector('#advertisementDiscount').value
        const advertisementPrice = document.querySelector('#advertisementPrice').value
        const advertisementAvailability = document.querySelector('#advertisementAvailability').value
        const advertisementFor = document.querySelector('#advertisementFor').value
        const advertisementForSubSection = document.querySelector('#advertisementForSubSection').value

        if (advertisementTitle.trim() == "") {
            alert("Enter a valid Advertisement ")
            return
        }
        // if (advertisementQuantity.trim() != "" || isNaN(advertisementQuantity.trim()) || advertisementQuantity.trim() > 0) {
        //     alert("Enter a valid Advertisement quantity")
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

        formdata.append('data_type', 'add_advertisement')
        formdata.append('itemId', advertisementItemId)
        formdata.append('description', advertisementDescription)
        formdata.append('title', advertisementTitle)
        formdata.append('discount', advertisementDiscount)
        formdata.append('price', advertisementPrice)
        formdata.append('availability', advertisementAvailability)
        formdata.append('for', advertisementFor)
        formdata.append('forSubSection', advertisementForSubSection)
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
        ajax.open("POST", "<?= ROOT ?>ajax_advertisement", true)
        ajax.send(JSON.stringify(data))
    }

    function sendDataFiles(data) {
        const ajax = new XMLHttpRequest()
        ajax.addEventListener('readystatechange', function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handleResult(ajax.responseText)
            }
        })
        ajax.open("POST", "<?= ROOT ?>ajax_advertisement", true)
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
                        $('#addAdvertisementModal').modal('hide')
                        const tb = document.querySelector('#advertisementTableBody')
                        tb.innerHTML = obj.data;
                    } else {
                        alert(obj.message)
                    }
                } else if (obj.data_type == 'delete_row') {
                    const tb = document.querySelector('#advertisementTableBody')
                    tb.innerHTML = obj.data;
                } else if (obj.data_type == 'toggled_row') {
                    const tb = document.querySelector('#advertisementTableBody')
                    tb.innerHTML = obj.data;
                } else if (obj.data_type == 'edit_advertisement') {
                    const tb = document.querySelector('#advertisementTableBody')
                    tb.innerHTML = obj.data;
                    $('#editAdvertisementModal').modal('hide')
                }
            }
        }
    }

    // Function to toggle the row it will deactivate a advertisement if its active and vice-varsa
    function toggleStateAdvertisement(props) {
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

    // Fill the edit modal with current value so that the user can refer the current value in modal before editing
    function editAdvertisementModalData(props) {
        document.querySelector('#advertisementIdEdit').value = props.id;
        document.querySelector('#advertisementItemIdEdit').value = props.itemId;
        document.querySelector('#advertisementDescriptionEdit').value = props.description;
        document.querySelector('#advertisementTitleEdit').value = props.title;
        document.querySelector('#advertisementDiscountEdit').value = props.discount;
        document.querySelector('#advertisementPriceEdit').value = props.price;
        document.querySelector('#advertisementAvailabilityEdit').value = props.availability;
        document.querySelector('#advertisementForEdit').value = props.for;
        document.querySelector('#advertisementForSubSectionEdit').value = props.forSubSection;
        document.querySelector('#image1editUrl').src = `<?= ROOT ?>${image1}`;
        document.querySelector('#image2editUrl').src = `<?= ROOT ?>${image2}`;
        document.querySelector('#image3editUrl').src = `<?= ROOT ?>${image3}`;

    }

    // Saving the updated data in the edit modal before sending it to the ajax
    function saveEditAdvertisement(event) {

        let formdata = new FormData();
        event.preventDefault()
        const advertisementIdEdit = document.querySelector('#advertisementIdEdit').value;
        const advertisementItemIdEdit = document.querySelector('#advertisementItemIdEdit').value;
        const advertisementDescriptionEdit = document.querySelector('#advertisementDescriptionEdit').value;
        const advertisementTitleEdit = document.querySelector('#advertisementTitleEdit').value;
        const advertisementDiscountEdit = document.querySelector('#advertisementDiscountEdit').value;
        const advertisementPriceEdit = document.querySelector('#advertisementPriceEdit').value;
        const advertisementAvailabilityEdit = document.querySelector('#advertisementAvailabilityEdit').value;
        const advertisementForEdit = document.querySelector('#advertisementForEdit').value;
        const advertisementForSubSectionEdit = document.querySelector('#advertisementForSubSectionEdit').value;

        const image1Edit = document.querySelector('#image1Edit');
        const image2Edit = document.querySelector('#image2Edit');
        const image3Edit = document.querySelector('#image3Edit');


        if (image1Edit.files.length > 0) {
            formdata.append('image1', image1Edit.files[0])
        }

        if (image2Edit.files.length > 0) {
            formdata.append('image2', image2Edit.files[0])
        }


        if (image3Edit.files.length > 0) {
            formdata.append('image3', image3Edit.files[0])
        }

        formdata.append('data_type', 'edit_advertisement')
        formdata.append('advertisementIdEdit', advertisementIdEdit)
        formdata.append('advertisementItemIdEdit', advertisementItemIdEdit)
        formdata.append('advertisementDescriptionEdit', advertisementDescriptionEdit)
        formdata.append('advertisementTitleEdit', advertisementTitleEdit)
        formdata.append('advertisementDiscountEdit', advertisementDiscountEdit)
        formdata.append('advertisementPriceEdit', advertisementPriceEdit)
        formdata.append('advertisementAvailabilityEdit', advertisementAvailabilityEdit)
        formdata.append('advertisementForEdit', advertisementForEdit)
        formdata.append('advertisementForSubSectionEdit', advertisementForSubSectionEdit)

        // func to send data to the ajax
        sendDataFiles(formdata)

    }



    // Func to delate advertisement
    function dltAdvertisement(props) {
        // IMP use sendDataFiles instead of sendData then dlt will work
        console.log('here in dlt');
        const {
            event,
            id
        } = props
        console.log(id);
        if (!confirm("Are you sure you want to delete this advertisement")) {
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

    // Function to preview the uploeded image during add data and edit data
    function displayPreviewAddAdvertisement(file, name) {

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

<?php $this->viewAdmin("footer", $data); ?>