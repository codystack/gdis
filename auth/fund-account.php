<?php
$page = "Fund Account";
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
                                    <h3 class="text-dark">Fund Account</h3>
                                </div>

                                <div class="col-12 col-sm-12 col-xxl-4 d-flex">
                                    <div class="card accountbalance border-1 flex-fill">
                                        <div class="card-body py-4">
                                            <div class="d-flex mt-3">
                                                <div class="flex-grow-1 text-center">
                                                    <h4 class="text-dark">Account Balance</h4>
                                                    <p class="lead balanceamount1 mb-0">₦109,350.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-xxl-8 d-flex">
                                    <div class="card accountfunding border-1 flex-fill">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1 text-center">
                                                    <h4 class="text-dark mb-3">Enter Card Digits</h4>

                                                    <div class="row">
                                                        <form>
                                                            <div class="col-md-10 mx-auto">
                                                                <div class="mb-3">
                                                                    <div class="input-group">
                                                                        <input type="number" class="form-control form-control-lg" placeholder="Enter pin here">
                                                                        <button class="btn btn-dark" type="submit">Add Fund</button>
                                                                    </div>
                                                                </div>
                                                            </div>
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

				</div>
			</main>

<?php include "./components/footer.php"; ?>			