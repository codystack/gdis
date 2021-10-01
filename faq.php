<?php
include "./components/header.php";
include "./components/navbar.php";
?>


    <main id="content" role="main">
      <!-- Hero -->
      <div class="bg-primary-dark overflow-hidden">
        <div class="container position-relative content-space-1">
          <div class="w-lg-65 text-center mx-lg-auto">
            <h1 class="h2 text-white mb-3">Frequently Asked Questions</h1>

            <form>
              <!-- Input Card -->
              <div class="input-card mb-sm-3">
                <div class="input-card-form">
                  <label for="searchAnswersForm" class="form-label visually-hidden">Search for answers</label>
                  <input type="text" class="form-control" id="searchAnswersForm" placeholder="Search for answers" aria-label="Search for answers">
                </div>
                <button type="button" class="btn btn-primary btn-icon">
                  <i class="bi-search"></i>
                </button>
              </div>
              <!-- End Input Card -->
            </form>
          </div>

          <!-- Background Shapes -->
          <div class="position-absolute" style="top: -6rem; left: -6rem;">
            <img src="assets/svg/components/shape-1-soft-light.svg" alt="SVG" width="500" style="width: 12rem;">
          </div>
          <div class="position-absolute" style="bottom: -6rem; right: -7rem;">
            <img src="assets/svg/components/shape-7-soft-light.svg" alt="SVG" width="250">
          </div>
          <!-- End Background Shapes -->
        </div>
      </div>
      <!-- End Hero -->

     
      <div class="container content-space-1 content-space-md-3">
        
        <!-- Accordion -->
        <div class="w-lg-85 mx-lg-auto mb-7">
          <div class="accordion accordion-flush" id="accordionFAQ">
            <!-- Accordion Item -->
            <div class="accordion-item">
              <div class="accordion-header" id="headingOne">
                <a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  What methods of payments are supported?
                </a>
              </div>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec erat tortor. Duis faucibus turpis eget diam rutrum, id ultrices elit rutrum. Pellentesque ut venenatis eros. Sed mattis fringilla viverra. Suspendisse tristique magna a leo mattis fermentum. Donec dolor arcu, vestibulum ut ornare vel, sodales et nulla. Suspendisse euismod lorem vel est accumsan, et gravida nisl suscipit. Sed sed orci et mi molestie scelerisque. Quisque gravida ipsum quam, ac malesuada mauris facilisis non. Aenean ullamcorper sem non dapibus finibus. Curabitur at accumsan metus, eu varius ante.
                </div>
              </div>
            </div>
            <!-- End Accordion Item -->

            <!-- Accordion Item -->
            <div class="accordion-item">
              <div class="accordion-header" id="headingTwo">
                <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Can I cancel at anytime?
                </a>
              </div>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec erat tortor. Duis faucibus turpis eget diam rutrum, id ultrices elit rutrum. Pellentesque ut venenatis eros. Sed mattis fringilla viverra. Suspendisse tristique magna a leo mattis fermentum. Donec dolor arcu, vestibulum ut ornare vel, sodales et nulla. Suspendisse euismod lorem vel est accumsan, et gravida nisl suscipit. Sed sed orci et mi molestie scelerisque. Quisque gravida ipsum quam, ac malesuada mauris facilisis non. Aenean ullamcorper sem non dapibus finibus. Curabitur at accumsan metus, eu varius ante.
                </div>
              </div>
            </div>
            <!-- End Accordion Item -->

            <!-- Accordion Item -->
            <div class="accordion-item">
              <div class="accordion-header" id="headingThree">
                <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  How do I get a receipt for my transactions?
                </a>
              </div>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec erat tortor. Duis faucibus turpis eget diam rutrum, id ultrices elit rutrum. Pellentesque ut venenatis eros. Sed mattis fringilla viverra. Suspendisse tristique magna a leo mattis fermentum. Donec dolor arcu, vestibulum ut ornare vel, sodales et nulla. Suspendisse euismod lorem vel est accumsan, et gravida nisl suscipit. Sed sed orci et mi molestie scelerisque. Quisque gravida ipsum quam, ac malesuada mauris facilisis non. Aenean ullamcorper sem non dapibus finibus. Curabitur at accumsan metus, eu varius ante.
                </div>
              </div>
            </div>
            <!-- End Accordion Item -->

            <!-- Accordion Item -->
            <div class="accordion-item">
              <div class="accordion-header" id="headingFour">
                <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Do i need BVN?
                </a>
              </div>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec erat tortor. Duis faucibus turpis eget diam rutrum, id ultrices elit rutrum. Pellentesque ut venenatis eros. Sed mattis fringilla viverra. Suspendisse tristique magna a leo mattis fermentum. Donec dolor arcu, vestibulum ut ornare vel, sodales et nulla. Suspendisse euismod lorem vel est accumsan, et gravida nisl suscipit. Sed sed orci et mi molestie scelerisque. Quisque gravida ipsum quam, ac malesuada mauris facilisis non. Aenean ullamcorper sem non dapibus finibus. Curabitur at accumsan metus, eu varius ante.
                </div>
              </div>
            </div>
            <!-- End Accordion Item -->

            <!-- Accordion Item -->
            <div class="accordion-item">
              <div class="accordion-header" id="headingFive">
                <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  How do I get access to an agent?
                </a>
              </div>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec erat tortor. Duis faucibus turpis eget diam rutrum, id ultrices elit rutrum. Pellentesque ut venenatis eros. Sed mattis fringilla viverra. Suspendisse tristique magna a leo mattis fermentum. Donec dolor arcu, vestibulum ut ornare vel, sodales et nulla. Suspendisse euismod lorem vel est accumsan, et gravida nisl suscipit. Sed sed orci et mi molestie scelerisque. Quisque gravida ipsum quam, ac malesuada mauris facilisis non. Aenean ullamcorper sem non dapibus finibus. Curabitur at accumsan metus, eu varius ante.
                </div>
              </div>
            </div>
            <!-- End Accordion Item -->

            <!-- Accordion Item -->
            <div class="accordion-item">
              <div class="accordion-header" id="headingSix">
                <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  How can i fund my wallet?
                </a>
              </div>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec erat tortor. Duis faucibus turpis eget diam rutrum, id ultrices elit rutrum. Pellentesque ut venenatis eros. Sed mattis fringilla viverra. Suspendisse tristique magna a leo mattis fermentum. Donec dolor arcu, vestibulum ut ornare vel, sodales et nulla. Suspendisse euismod lorem vel est accumsan, et gravida nisl suscipit. Sed sed orci et mi molestie scelerisque. Quisque gravida ipsum quam, ac malesuada mauris facilisis non. Aenean ullamcorper sem non dapibus finibus. Curabitur at accumsan metus, eu varius ante.
                </div>
              </div>
            </div>
            <!-- End Accordion Item -->
          </div>
        </div>
        <!-- End Accordion -->

        <!-- Info -->
        <div class="text-center">
          <p class="mb-0">Still have questions?</p>
          <a class="link" href="contact">Contact our friendly support team <i class="bi-chevron-right small ms-1"></i></a>
        </div>
        <!-- End Info -->
      </div>



      <div class="bg-soft-primary-light">
        <div class="container content-space-1 content-space-md-3">
          <div class="row">
            <div class="col-md-5 col-lg-6 mb-5 mb-lg-0">
              <h3>Ready to get started?</h3>
              <p class="fs-6">The easiest way to save money in few seconds.<br> Secured & No hidden charges</p>
            </div>
            <!-- End Col -->

            <div class="col-md-7 col-lg-6">
              <form>
                <!-- Input Card -->
                <div class="input-card input-card-sm mb-3">
                  <div class="input-card-form">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter email" aria-label="Enter email">
                  </div>
                  <button type="button" class="btn btn-primary btn-lg">Get Started</button>
                </div>
                <!-- End Input Card -->
              </form>

              <a class="link" href="auth/sign-up">Create a free account <i class="bi-chevron-right small ms-1"></i></a>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
      </div>

    </main>

<?php include "./components/footer.php"; ?>