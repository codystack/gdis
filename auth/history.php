<?php
$page = "History";
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
                                    <h3 class="text-dark">Transaction History</h3>
                                </div>

                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                        <th class="text-end">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar/savings.png" width="28" height="28" class="rounded-circle me-2" alt="Avatar"> Account credited.
                                                        </td>
                                                        <td>₦5,000.00</td>
                                                        <td class="text-end">December 21, 2020</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar/savings.png" width="28" height="28" class="rounded-circle me-2" alt="Avatar"> Account credited.
                                                        </td>
                                                        <td>₦50,000.00</td>
                                                        <td class="text-end">January 21, 2021</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar/savings.png" width="28" height="28" class="rounded-circle me-2" alt="Avatar"> Account credited.
                                                        </td>
                                                        <td>₦1,000.00</td>
                                                        <td class="text-end">February 10, 2021</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar/points.png" width="28" height="28" class="rounded-circle me-2" alt="Avatar"> Saving Point
                                                        </td>
                                                        <td>₦100.00</td>
                                                        <td class="text-end">March 11, 2021</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar/withdrawal.png" width="28" height="28" class="rounded-circle me-2" alt="Avatar"> Account debited
                                                        </td>
                                                        <td>₦100,000.00</td>
                                                        <td class="text-end">March 1, 2021</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar/transfer.png" width="28" height="28" class="rounded-circle me-2" alt="Avatar"> Transfer to agent
                                                        </td>
                                                        <td>₦10,000.00</td>
                                                        <td class="text-end">June 1, 2021</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
						        </div>

                            </div>
                        </div>

                    </div>

				</div>
			</main>

<?php include "./components/footer.php"; ?>			