
    <?php
        $role = "member";
        $pageTitle = "Edit Profile | TasteBuds";
        $extraStyles = [ "edit_profile.css", "../components/breadcrumb.css" ];
        $extraScripts = [ "../scripts/edit_profile.js" ];
        include_once "../components/search_results_cards.php";
        include_once "../components/docHeader.php";
        include_once "../components/nav.php";
        include_once "../components/breadcrumb.php";
    ?>
    <?php drawBreadcrumb(["Profiles", "Jamie Oliver's Profile", "Edit Profile"]); ?>
    <div class="container content-general-margin margin-to-footer">
        <h1 class="mt-5">Edit Profile</h1>

        <div class="card shadow-sm p-2 w-auto h-auto p-5 mt-4 edit-profile-card">
            <div class="row">
                <div class="col profile-photo-area mx-2">
                    <div class="row row-with-image">
                        <div class="col area-title-col">
                            <h6 class="area-title d-inline-block">Profile Photo</h6> <span class='form-required'></span>
                        </div>   
                        <div class="col text-end profile-photo-button-col p-0">                     
                            <div class="dropdown w-20 ms-auto">
                                <button type="button" class="btn edit-photo-button btn-no-shadow" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <ul class="dropdown-menu w-100">
                                    <li>
                                        <a class="dropdown-item file-input"><i class="fas fa-upload me-2"></i>Upload Image</a>
                                        <input type="file" name="myfile"></input>
                                    </li>
                                    <li>
                                        <a class="dropdown-item file-delete"><i class="fas fa-eraser me-2"></i>Clear Image</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img class="rounded-circle z-depth-2 profile-image" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg">
                </div>
                <div class="col cover-photo-area mx-2">
                    <div class="row area-title-row row-with-image">
                        <div class="col area-title-col">
                            <h6 class="area-title">Cover Photo</h6>
                        </div>
                        <div class="col text-end p-0">
                            <div class="dropdown w-20 ms-auto">
                                <button type="button" class="btn edit-photo-button btn-no-shadow" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <ul class="dropdown-menu w-100">
                                    <li>
                                        <a class="dropdown-item file-input"><i class="fas fa-upload me-2"></i>Upload Image</a>
                                        <input type="file" name="myfile"></input>
                                    </li>
                                    <li>
                                        <a class="dropdown-item file-delete"><i class="fas fa-eraser me-2"></i>Clear Image</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img src="https://res.cloudinary.com/sanitarium/image/fetch/q_auto/https://www.sanitarium.com.au/getmedia%2Fae51f174-984f-4a70-ad3d-3f6b517b6da1%2Ffruits-vegetables-healthy-fats.jpg%3Fwidth%3D1180%26height%3D524%26ext%3D.jpg" class="bd-placeholder-img">
                </div>
            </div>

            <h6 class="area-title mt-4">Biography <span class='form-required'></span></h6>
            <div class="form-group">
                <textarea class="form-control mb-4 p-3 edit-profile-text-input" id="exampleFormControlTextarea1" rows="3">Sushi chef | Sushisan</textarea>
            </div>

            <h6 class="area-title">Name <span class='form-required'></span></h6>
            <div class="form-group">
                <textarea class="form-control mb-4 p-3 edit-profile-text-input" id="exampleFormControlTextarea1" rows="1">Jamie Oliver</textarea>
            </div>

            <h6 class="area-title">Country <span class='form-required'></span></h6> 
            <div class="form-group">
                <textarea class="form-control mb-4 p-3 edit-profile-text-input" id="exampleFormControlTextarea1" rows="1">Portugal</textarea>
            </div>

            <h6 class="area-title">City</h6>
            <div class="form-group">
                <textarea class="form-control mb-4 p-3 edit-profile-text-input" id="exampleFormControlTextarea1" rows="1">Ruílhe</textarea>
            </div>

            <h6 class="area-title">Email</h6>
            <div class="form-group">
                <textarea class="form-control mb-4 p-3 edit-profile-text-input" id="exampleFormControlTextarea1" rows="1">jamieoliver@gmail.com</textarea>
            </div>

            <h6 class="area-title">Username</h6>
            <div class="form-group">
                <textarea class="form-control mb-5 p-3 edit-profile-text-input" id="exampleFormControlTextarea1" rows="1">jamieoliver</textarea>
            </div>

            <h6 class="area-title">Profile Visibility <span class='form-required'></span></h6>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Public
                </label>
            </div>
            <div class="form-check mt-2">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Private
                </label>
            </div>
            <div class="row d-flex justify-content-around justify-content-md-between my-5">
                
                    <button class="btn btn-primary submit-button my-2">Submit</button>
                
                    <button class="btn btn-secondary submit-button my-2">
                        <i class="far fa-edit"></i>
                        &nbsp; Change Password
                    </button>
                

                
                    <button class="btn btn-danger submit-button my-2">
                        <i class="fas fa-trash me-3"></i>
                        Delete Profile
                    </button>
                
            </div>
        </div>

    </div>
    
    <?php 
        include_once "../components/footer.php"; 
        include_once "../components/docFooter.php"; 
    ?>
