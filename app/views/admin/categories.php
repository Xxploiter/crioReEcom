<?php $this->viewAdmin("header", $data); ?>
<!-- Datatable -->

<?php $this->viewAdmin("sidebar", $data); ?>
<style>
    #main-wrapper>div.content-body>div>div {
        margin-top: -36px;
    }

    .card-title {
        font-size: 14px;
    }

    .form-control {
        font-size: 0.775rem;
    }
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header mt-1 p-4">
                        <h4 class="card-title">Categories</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <div class="custom-tab-1 ">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#View"><i class="la la-home mr-2"></i>View</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile1"><i class="la la-user mr-2"></i> Add Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contact1"><i class="la la-phone mr-2"></i> Edit Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#message1"><i class="la la-envelope mr-2"></i> Delete Category</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="View" role="tabpanel">
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
                                                    <h4 class="card-title m-2">All Product Categories</h4>
                                                </div>
                                                <div class="card-body">
                                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addCataModal">Add New Category</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="addCataModal">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <form name="categoryForm">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">*</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h4 class="card-title">Add New Category</h4>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="basic-form">
                                                                                    <div class="form-group">
                                                                                        <input id="categoryName" type="text" name="category" class="form-control input-default " placeholder="Category Name" require>
                                                                                    </div>
                                                                                    <!-- <div class="form-group">
                                                                                            <input type="text" class="form-control input-rounded" placeholder="input-rounded">
                                                                                        </div> -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                                                        <button id="saveCata" onclick="collectValidateData(event)" type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal end -->
                                                    <div class="table-responsive mt-4">
                                                        <table class="table table-responsive-md">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width:80px;"><strong>#</strong></th>
                                                                    <th><strong>CATEGORY</strong></th>
                                                                    <!-- <th><strong>DR NAME</strong></th>
                                                                    <th><strong>DATE</strong></th>
                                                                    <th><strong>PRICE</strong></th> -->
                                                                    <th><strong>STATUS</strong></th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="categoryTableBody">
                                                                <?php 
                                                                $db = Database::newInstance();
                                                                $categories = $db->read("SELECT * FROM categories ORDER BY id DESC");
                                                                $category = $this->load_model("Category");
                                                                $cataRows = $category->make_table($categories);
                                                                echo $cataRows;
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile1">
                                    <div class="pt-4">
                                        <h4>This is profile title</h4>
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        </p>
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        </p>
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
        e.preventDefault();
        // let CataModal = document.getElementById('addCataModal')
        // var addCataModal = bootstrap.Modal.getOrCreateInstance(CataModal)
        const cataData = document.querySelector('#categoryName')
        if (cataData.value.trim() == "" || !isNaN(cataData.value.trim())) {
            alert("Enter a valid Category")
        }
        const data = cataData.value.trim()
        sendData({
            data:data,
            data_type:'add_category'
        })
    }

    function sendData(data = {}) {
        const ajax = new XMLHttpRequest()
        ajax.addEventListener('readystatechange', function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handleResult(ajax.responseText)
            }
        })
        ajax.open("POST", "<?= ROOT ?>ajax", true)
        ajax.send(JSON.stringify(data))
    }

    function handleResult(result) {
        console.log(result);
        if(result != ''){
            const obj = JSON.parse(result)
            console.log(obj.message_type + 'message type') 
            if (typeof obj.message_type != 'undefined') {
                if(obj.message_type == 'info'){
                    alert(obj.message)
                    $('#addCataModal').modal('toggle')
                    const tb = document.querySelector('#categoryTableBody')
                    tb.innerHTML = obj.data;
                }else{
                    alert(obj.message)
                }
            }
        }
        // alert(result)
      
    }

    const tb = document.querySelector('#categoryTableBody')














    // creating a universal function for getting all form data and sending it using fetch and promise

    async function postData(url = '', data = {}) {
        const response = await fetch(url, {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            credentials: 'same-origin',
            headers: {
                'Content-Type': 'application/json'

            },
            redirect: 'follow',
            referrerPolicy: 'no-referrer',
            body: JSON.stringify(data)
        });

        return response.json();
    }

    // $("#saveCata").click(function(e) {
    //     e.preventDefault();

    //     form = document.forms.namedItem('categoryForm');
    //     formData = new FormData(form);

    //     postData("ajax", formData)
    //         .then((data) => {
    //             console.log(data);
    //         });
    // });
</script>