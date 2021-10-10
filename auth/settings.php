
<?php
$page = "Account";
include "./components/header.php";
?>
	<div class="wrapper">
        <?php include "./components/sidebar.php"; ?>
		<div class="main">

			<main class="content">
				<div class="container-fluid p-0 mt-3">

                    <div class="row">

                        <div class="col-md-9 col-xxl-9 col-sm-12 mx-auto">
                            <div class="row mb-xl-3">
                                <div class="col-12 d-flex">
                    
                                    <div class="me-3">
                                        <a class="d-sm-inline-block" href="settings">
                                            <img src="assets/images/user.svg" class="avatar img-fluid rounded-circle" alt="Users Name" />
                                        </a>
                                    </div>

                                    <div>
                                        <h2 class="text-dark" style="font-weight: bolder;">Emeka</h2>
                                        <!--<h5 class="text-dark mt-0 lead-1" id="greet"></h5>-->
                                    </div>
                                    
                                    <!--<button class="btn btn-primary btn-rounded">
                                        <i class="align-middle" data-feather="power">&nbsp;</i>
                                    </button>-->
                                </div>
                                
                                <div class="col-auto d-sm-block ms-auto text-end mt-n1">
                                    <a class="sidebar-toggle" style="margin-top: -30px;">
                                        <i class="align-self-center text-dark" data-feather="grid" style="height: 28px;width: 28px;"></i>
                                    </a>
                                    <!--<a class="d-sm-inline-block" href="settings">
                                        <img src="assets/images/user.svg" class="avatar img-fluid rounded-circle" alt="Users Name" />
                                    </a>-->
                                </div>
                            
                            </div>
                        </div>

                        <div class="col-md-9 col-xxl-9 col-sm-12 mx-auto mt-5">
                            <div class="row">

                                <div class="col-12 d-sm-block mb-3">
                                    <h3 class="text-dark">Account</h3>
                                </div>

                                <div class="col-md-3 col-xl-3 accountbalance">

                                    <div class="card">
                                        <div class="list-group list-group-flush" role="tablist">
                                            <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#profile" role="tab">
                                                Profile
                                            </a>

                                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password" role="tab">
                                                Password
                                            </a>

                                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#bankAccount" role="tab">
                                                Bank Account
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-9 col-xl-9">
                                    <div class="tab-content">

                                        <div class="tab-pane fade show active" id="profile" role="tabpanel">

                                            <div class="card">
                                                <div class="card-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <div class="text-center">
                                                                    <img alt="Chris Wood" src="assets/images/user.svg" class="rounded-circle img-responsive mt-2" width="118" height="118" />
                                                                    <div class="mt-2">
                                                                        <span class="btn btn-dark"><i class="fas fa-upload"></i> Upload</span>
                                                                    </div>
                                                                    <h1 class="text-dark mt-4" style="font-weight: bolder;">Emeka Odogwu</h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>

                                            <div class="card mt-n4">
                                                <div class="card-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputFirstName" class="form-label">First Name</label>
                                                                <input type="text" class="form-control form-control-lg" id="inputFirstName" placeholder="Enter first name">
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputLastName" class="form-label">Last name</label>
                                                                <input type="text" class="form-control form-control-lg" id="inputLastName" placeholder="Enter last name">
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputEmail" class="form-label">Email</label>
                                                                <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Enter email">
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputPhone" class="form-label">Phone</label>
                                                                <input type="tel" class="form-control form-control-lg" id="inputPhone" placeholder="Enter phone number">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mb-3">
                                                            <label for="inputAddress" class="form-label">Address</label>
                                                            <input type="text" class="form-control form-control-lg" id="inputAddress" placeholder="1234 Main St">
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-3 col-md-5">
                                                                <label for="inputCity" class="form-label">City</label>
                                                                <input type="text" class="form-control form-control-lg" id="inputCity" placeholder="Enter city">
                                                            </div>
                                                            <div class="mb-3 col-md-4">
                                                                <label for="inputState" class="form-label">State</label>
                                                                <select id="inputState" class="form-control form-control-lg">
                                                                <option data-display="Select State">Select State</option>
                                                                <option value="Abia">Abia</option>
                                                                <option value="Adamawa">Adamawa</option>
                                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                                <option value="Anambra">Anambra</option>
                                                                <option value="Bauchi">Bauchi</option>
                                                                <option value="Bayelsa">Bayelsa</option>
                                                                <option value="Benue">Benue</option>
                                                                <option value="Borno">Borno</option>
                                                                <option value="Cross River">Cross River</option>
                                                                <option value="Delta">Delta</option>
                                                                <option value="Ebonyi">Ebonyi</option>
                                                                <option value="Edo">Edo</option>
                                                                <option value="Ekiti">Ekiti</option>
                                                                <option value="Enugu">Enugu</option>
                                                                <option value="Abuja">FCT - Abuja</option>
                                                                <option value="Gombe">Gombe</option>
                                                                <option value="Imo">Imo</option>
                                                                <option value="Jigawa">Jigawa</option>
                                                                <option value="Kaduna">Kaduna</option>
                                                                <option value="Kano">Kano</option>
                                                                <option value="Katsina">Katsina</option>
                                                                <option value="Kebbi">Kebbi</option>
                                                                <option value="Kogi">Kogi</option>
                                                                <option value="Kwara">Kwara</option>
                                                                <option value="Lagos">Lagos</option>
                                                                <option value="Nasarawa">Nasarawa</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Ogun">Ogun</option>
                                                                <option value="Ondo">Ondo</option>
                                                                <option value="Osun">Osun</option>
                                                                <option value="Oyo">Oyo</option>
                                                                <option value="Plateau">Plateau</option>
                                                                <option value="Rivers">Rivers</option>
                                                                <option value="Sokoto">Sokoto</option>
                                                                <option value="Taraba">Taraba</option>
                                                                <option value="Yobe">Yobe</option>
                                                                <option value="Zamfara">Zamfara</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-3">
                                                                <label for="inputZip" class="form-label">Zip Code</label>
                                                                <input type="text" class="form-control form-control-lg" id="inputZip" placeholder="023124">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-dark btn-lg py-3">Update Profile</button>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="password" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">

                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="inputPasswordCurrent" class="form-label">Current password</label>
                                                            <input type="password" class="form-control form-control-lg" id="inputPasswordCurrent">
                                                            <small><a href="password-reset">Forgot your password?</a></small>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputPasswordNew" class="form-label">New password</label>
                                                            <input type="password" class="form-control form-control-lg" id="inputPasswordNew">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputPasswordNew2" class="form-label">Verify password</label>
                                                            <input type="password" class="form-control form-control-lg" id="inputPasswordNew2">
                                                        </div>
                                                        <button type="submit" class="btn btn-dark btn-lg py-3">Save changes</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="bankAccount" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">

                                                    <form>
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputAccountName" class="form-label">Account Name</label>
                                                                <input type="text" class="form-control form-control-lg" id="inputAccountName" placeholder="Enter account name">
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputAccountNumber" class="form-label">Account Number</label>
                                                                <input type="number" class="form-control form-control-lg" id="inputAccountNumber" placeholder="Enter account number">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputBankName" class="form-label">Bank Name</label>
                                                            <select id="inputBankName" class="form-control form-control-lg">
                                                                <option selected="">Select Bank...</option>
                                                                <option value="Access Bank">Access Bank</option>
                                                                <option value="Access Bank (Diamond)">Access Bank (Diamond)</option>
                                                                <option value="ALAT by WEMA">ALAT by WEMA</option>
                                                                <option value="ASO Savings and Loans">ASO Savings and Loans</option>
                                                                <option value="Citibank Nigeria">Citibank Nigeria</option>
                                                                <option value="Ecobank Nigeria">Ecobank Nigeria</option>
                                                                <option value="Ekondo Microfinance Bank">Ekondo Microfinance Bank</option>
                                                                <option value="Fidelity Bank">Fidelity Bank</option>
                                                                <option value="First Bank of Nigeria">First Bank of Nigeria</option>
                                                                <option value="First City Monument Bank">First City Monument Bank</option>
                                                                <option value="Globus Bank">Globus Bank</option>
                                                                <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                                                                <option value="Heritage Bank">Heritage Bank</option>
                                                                <option value="Jaiz Bank">Jaiz Bank</option>
                                                                <option value="Keystone Bank">Keystone Bank</option>
                                                                <option value="Kuda Bank">Kuda Bank</option>
                                                                <option value="Parallex Bank">Parallex Bank</option>
                                                                <option value="Polaris Bank">Polaris Bank</option>
                                                                <option value="Providus Bank">Providus Bank</option>
                                                                <option value="Rubies MFB">Rubies MFB</option>
                                                                <option value="Sparkle Microfinance Bank">Sparkle Microfinance Bank</option>
                                                                <option value="Stanbic IBTC Bank">Stanbic IBTC Bank</option>
                                                                <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                                                <option value="Sterling Bank">Sterling Bank</option>
                                                                <option value="Suntrust Bank">Suntrust Bank</option>
                                                                <option value="TAJ Bank">TAJ Bank</option>
                                                                <option value="Union Bank of Nigeria">Union Bank of Nigeria</option>
                                                                <option value="United Bank For Africa">United Bank For Africa</option>
                                                                <option value="Unity Bank">Unity Bank</option>
                                                                <option value="VFD">VFD</option>
                                                                <option value="Wema Bank">Wema Bank</option>
                                                                <option value="Zenith Bank">Zenith Bank</option>
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-dark btn-lg py-3">Update Bank Details</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

				</div>
			</main>

<?php include "./components/footer.php"; ?>			