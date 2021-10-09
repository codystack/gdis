<?php
include "./components/header.php";
?>
	<div class="wrapper">
		<div class="main">

			<main class="content">
				<div class="container-fluid p-0 mt-3">

                    <div class="col-md-9 col-xxl-9 col-sm-12 mx-auto">
                        <div class="row mb-4 mb-xl-3">
                            <div class="col-12 d-flex">
                
                                <div class="me-3">
                                    <a class="d-sm-inline-block" href="settings">
                                        <img src="assets/images/user.svg" class="avatar img-fluid rounded-circle" alt="Users Name" />
                                    </a>
                                </div>

                                <div>
                                    <h2 class="text-dark" style="font-weight: bolder;">Emeka</h2>
                                </div>
                                <!--<h5 class="text-dark lead-1" id="greet"></h5>-->
                                <!--<button class="btn btn-primary btn-rounded">
                                    <i class="align-middle" data-feather="power">&nbsp;</i>
                                </button>-->
                            </div>
                            <!--
                            <div class="col-auto d-none d-sm-block ms-auto text-end mt-n1">
                                <a class="d-sm-inline-block" href="settings">
                                    <img src="assets/images/user.svg" class="avatar img-fluid rounded-circle" alt="Users Name" />
                                </a>
                            </div>
                            -->
                        </div>
                    </div>

					<div class="col-md-9 col-xxl-9 col-sm-12 mx-auto mt-5">
						<div class="row">

                            <div class="col-12 col-sm-12 col-xxl-12 d-flex">
                                <div class="card accountbalance border-1 flex-fill">
                                    <div class="card-body py-4">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 text-center">
                                                <h4 class="text-dark">Account Balance</h4>
                                                <p class="lead balanceamount mb-0">₦109,350.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xxl-6 d-flex">
                                <div class="card fundwallet flex-fill" style="background: url('./assets/images/fund.png');background-repeat: no-repeat, repeat;background-position: right;background-size: contain;background-color: #ccf0fa;">
                                    <a href="fund-account">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1 mt-3">
                                                    <h2 class="mb-3" style="font-weight: bold;color: #0d60d8;">Fund Account</h2>
                                                    <p class="mb-3">Total Earnings</p>
                                                    <div class="mb-3 align-items-end">
                                                        <span class="text-dark">Add funds to account <i class="align-middle" style="color: #0d60d8;" data-feather="arrow-right-circle"></i></span>
                                                    </div>
                                                </div>
                                                <!--<div class="col-6 align-self-end text-end">
                                                    <img src="assets/images/account.png" alt="Customer Support" class="img-fluid illustration-img">
                                                </div>-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xxl-6 d-flex">
                                <div class="card withdraw flex-fill" style="background: url('./assets/images/withdraw.png');background-repeat: no-repeat, repeat;background-position: right;background-size: contain;background-color: #feeaf3;">
                                    <a href="withdrawal">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1 mt-3 mb-3">
                                                    <h2 class="mb-3" style="font-weight: bold;color: #e7439c;">Withdraw</h2>
                                                    <p class="mb-3">Total Earnings</p>
                                                    <div class="mb-0">
                                                        <span class="text-dark">Make withdrawal <i class="align-middle" style="color: #e7439c;" data-feather="arrow-right-circle"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xxl-6 d-flex">
                                
                                <div class="card transfer flex-fill" style="background: url('./assets/images/History.png');background-repeat: no-repeat, repeat;background-position: right;background-size: contain;background-color: #dcffea;">
                                    <a href="fund-account">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1 mt-3 mb-3">
                                                    <h2 class="mb-3" style="font-weight: bold;color: #27ae60;">Activities</h2>
                                                    <p class="mb-3">Total Earnings</p>
                                                    <div class="mb-0">
                                                        <span class="text-dark">View all transactions <i class="align-middle" style="color: #27ae60;" data-feather="arrow-right-circle"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-6 col-xxl-6 d-flex">
                                <div class="card illustration flex-fill" style="background: url('./assets/images/account.png');background-repeat: no-repeat, repeat;background-position: right;background-size: contain;background-color: #e0eafc;">
                                    <a href="settings">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1 mt-3 mb-3">
                                                    <h2 class="mb-3" style="font-weight: bold;color: #2295f2;">My Account</h2>
                                                    <p class="mb-3">Total Earnings</p>
                                                    <div class="mb-0">
                                                        <span class="text-dark">Make withdrawal <i class="align-middle" style="color: #2295f2;" data-feather="arrow-right-circle"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-12 col-xxl-12 d-flex">
                                <div class="card illustration flex-fill" style="border-radius: 30px">
                                    <img src="./assets/images/ad21.png">
                                </div>
                            </div>
                        </div>
					</div>

				</div>
			</main>

<?php include "./components/footer.php"; ?>			