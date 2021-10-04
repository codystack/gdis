<?php
include "./components/header.php";
include "./components/navbar.php";
?>

    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
      <!-- Hero -->
      <div class="shape-container overflow-hidden">
        <div class="bg-primary-dark position-relative">
          <div class="container content-space-1 content-space-t-md-3 content-space-b-md-4">
            <div class="position-relative w-lg-75 text-center mx-lg-auto">
              <div class="mb-7">
                <h1 class="text-white">Coming Soon!</span></h1>
                <p class="lead text-white-70">Currently we are working on this feature and will be lunching soon. Do not miss it, subscribe below to keep updated.</p>
              </div>

              <div class="js-countdown row">
                <div class="col-3">
                  <h2 class="js-cd-days h1 text-white mb-0"></h2>
                  <h6 class="text-white-70 mb-0">Days</h6>
                </div>
                <!-- End Col -->

                <div class="col-3">
                  <h2 class="js-cd-hours h1 text-white mb-0"></h2>
                  <h6 class="text-white-70 mb-0">Hours</h6>
                </div>
                <!-- End Col -->

                <div class="col-3">
                  <h2 class="js-cd-minutes h1 text-white mb-0"></h2>
                  <h6 class="text-white-70 mb-0">Mins</h6>
                </div>
                <!-- End Col -->

                <div class="col-3">
                  <h2 class="js-cd-seconds h1 text-white mb-0"></h2>
                  <h6 class="text-white-70 mb-0">Secs</h6>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
              
              <!-- Background Shapes -->
              <div class="position-absolute" style="top: -6rem; left: -6rem;">
                <img src="assets/svg/components/shape-1-soft-light.svg" alt="SVG" width="500" style="width: 12rem;">
              </div>
              <div class="position-absolute" style="bottom: -12rem; right: -7rem;">
                <img src="assets/svg/components/shape-7-soft-light.svg" alt="SVG" width="250">
              </div>
              <!-- End Background Shapes -->
            </div>
          </div>
        </div>

        <!-- Shape -->
        <div class="shape shape-bottom zi-1" style="margin-bottom: -.125rem">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
          </svg>
        </div>
        <!-- End Shape -->
      </div>
      <!-- End Hero -->

      <!-- Subscribe -->
      <div class="container content-space-1">
        <!-- Heading -->
        <div class="w-lg-65 text-center mx-lg-auto mb-7">
          <h3>Be the first to know!</h3>
        </div>
        <!-- End Heading -->

        <div class="text-center mx-auto" style="max-width: 32rem;">
          <form>
            <!-- Input Card -->
            <div class="input-card input-card-sm border mb-5">
              <div class="input-card-form">
                <label for="subscribeForm" class="form-label visually-hidden">Enter email</label>
                <input type="text" class="form-control form-control-lg" id="subscribeForm" placeholder="Enter email" aria-label="Enter email">
              </div>
              <button type="button" class="btn btn-primary btn-lg" id="heroNameAddOn">Request early access</button>
            </div>
            <!-- End Input Card -->
          </form>

          <a class="link" href="auth/sign-up">Create a free account <i class="bi-chevron-right small ms-1"></i></a>
        </div>
      </div>
      <!-- End Subscribe -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="container py-4">
      <div class="row align-items-md-center text-center text-md-start">
        <div class="col-md text-center">
          <p class="mb-0">© <script>document.write(new Date().getFullYear());</script> Growing Digital Income Store Agency&trade; | All rights reserved.</p>
        </div>
      </div>
    </footer>
    
    <script src="assets/js/vendor.min.js"></script>
    
    <script src="assets/js/theme.min.js"></script>
    
    <script>
      (function() {


        // INITIALIZATION OF COUNTDOWN
        // =======================================================
        const oneYearFromNow = new Date()

        document.querySelectorAll('.js-countdown').forEach(item => {
          const days = item.querySelector('.js-cd-days'),
            hours = item.querySelector('.js-cd-hours'),
            minutes = item.querySelector('.js-cd-minutes'),
            seconds = item.querySelector('.js-cd-seconds')

          countdown(oneYearFromNow.setFullYear(
            oneYearFromNow.getFullYear() + 1),
            ts => {
              days.innerHTML = ts.days
              hours.innerHTML = ts.hours
              minutes.innerHTML = ts.minutes
              seconds.innerHTML = ts.seconds
            },
            countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS
          )
        })
      })()
    </script>
  </body>
</html>
