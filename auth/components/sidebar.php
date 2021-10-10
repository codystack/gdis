        <nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="dashboard">
					<img src="assets/images/weblogo-white.svg" alt="logo" width="200px">
				</a>

				<ul class="sidebar-nav">

                    <li class="sidebar-item <?php if($page=='Dashboard'){echo 'active';}?> mt-4">
                        <a class="sidebar-link" href="dashboard">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle sidebartxt">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php if($page=='Fund Account'){echo 'active';}?> mt-4">
                        <a class="sidebar-link" href="fund-account">
                            <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle sidebartxt">Fund Account</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php if($page=='Withdraw'){echo 'active';}?> mt-4">
                        <a class="sidebar-link" href="withdraw">
                            <i class="align-middle" data-feather="check-square"></i> <span class="align-middle sidebartxt">Withdraw</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php if($page=='History'){echo 'active';}?> mt-4">
                        <a class="sidebar-link" href="history">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle sidebartxt">Transaction</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php if($page=='Account'){echo 'active';}?> mt-4">
                        <a class="sidebar-link" href="settings">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle sidebartxt">Account</span>
                        </a>
                    </li>

                </ul>

                <ul class="sidebar-nav" id="logout_sidebar_button">

                    <li class="sidebar-item align-items-end mt-4">
                        <a class="sidebar-link align-items-end" href="login">
                            <i class="align-middle" data-feather="power" style="color: #efa705;"></i> <span class="align-middle sidebartxt">Logout</span>
                        </a>
                    </li>
					
				</ul>
			</div>
		</nav>