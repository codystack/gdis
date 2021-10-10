<?php
$page = "Withdraw";
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
                                    <h3 class="text-dark">Withdraw</h3>
                                </div>

                                <div class="col-md-3 col-xl-3 accountbalance">

                                    <div class="card">
                                        <div class="list-group list-group-flush" role="tablist">
                                            <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account" role="tab">
                                            Bank
                                            </a>
                                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#agent" role="tab">
                                            Agent
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-9 col-xl-9 mb-3">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="account" role="tabpanel">

                                            <div class="card">
                                                <div class="card-body">
                                                <h5 class="card-title">Withdraw to Bank</h5>

                                                    <form>
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputAccountNumber" class="form-label">Account Number</label>
                                                                <input type="number" class="form-control form-control-lg" id="inputAccountNumber" placeholder="0123456789">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
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
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputAccountName" class="form-label">Account Name</label>
                                                            <input type="text" class="form-control form-control-lg" id="inputAccountName" placeholder="Enter account name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputWithdrawalAmount" class="form-label">Withdrawal Amount</label>
                                                            <input type="number" class="form-control form-control-lg" id="inputWithdrawalAmount" placeholder="Enter amount minimum of ₦1000">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputAccountPin" class="form-label">Account Pin</label>
                                                            <input type="number" class="form-control form-control-lg" id="inputAccountPin" placeholder="Enter pin to withdraw">
                                                        </div>
                                                        <button type="submit" class="btn btn-dark btn-lg py-3">Withdraw Cash</button>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="agent" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                <h5 class="card-title">Withdraw to Agent</h5>

                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="inputAgentID" class="form-label">Agent ID</label>
                                                            <input type="number" class="form-control form-control-lg" id="inputAgentID" placeholder="Enter agent ID">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputWithdrawalAmount" class="form-label">Withdrawal Amount</label>
                                                            <input type="number" class="form-control form-control-lg" id="inputWithdrawalAmount" placeholder="Enter amount minimum of ₦1000">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputAccountPin" class="form-label">Account Pin</label>
                                                            <input type="number" class="form-control form-control-lg" id="inputAccountPin" placeholder="Enter pin to withdraw">
                                                        </div>
                                                        <button type="submit" class="btn btn-dark btn-lg py-3">Withdraw Cash</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-xxl-12 d-flex">
                                    <div class="card accountbalance border-1 flex-fill">
                                        <div class="card-body py-4">
                                            <div class="d-flex mt-3">
                                                <div class="flex-grow-1 text-center">
                                                    <h4 class="text-dark">Account Balance</h4>
                                                    <p class="lead balanceamount mb-0">₦109,350.00</p>
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