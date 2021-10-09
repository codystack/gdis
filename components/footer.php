 <!-- ========== FOOTER ========== -->
 <footer class="bg-primary-dark border-top border-white-10">
      <div class="container">
        <div class="row content-space-1">

          <div class="col-lg-3 col-6 col-sm-4 mb-5 mb-lg-0">
            <span class="text-cap text-primary-light">Resources</span>

            <!-- List -->
            <ul class="list-unstyled list-py-1 mb-0">
              <li><a class="link-sm link-light" href="faq">FAQs</a></li>
              <li><a class="link-sm link-light" href="testimonials">Customer Stories</a></li>
              <li><a class="link-sm link-light" href="#">How it Works</a></li>
            </ul>
            <!-- End List -->
          </div>
          <!-- End Col -->

          <div class="col-lg-3 col-6 col-sm-4 mb-5 mb-lg-0">
            <span class="text-cap text-primary-light">Company</span>

            <!-- List -->
            <ul class="list-unstyled list-py-1 mb-0">
              <li><a class="link-sm link-light" href="about">About</a></li>
              <li><a class="link-sm link-light" href="career">Careers <span class="badge bg-warning text-dark rounded-pill ms-2">We're hiring</span></a></li>
              <li><a class="link-sm link-light" href="contact">Contacts</a></li>
            </ul>
            <!-- End List -->
          </div>
          <!-- End Col -->

          <div class="col-lg-3 col-6 col-sm-4 mb-5 mb-lg-0">
            <span class="text-cap text-primary-light">Platform</span>

            <!-- List -->
            <ul class="list-unstyled list-py-1 mb-0">
              <li><a class="link-sm link-light" href="find-agent">Locate an Agent</a></li>
              <li><a class="link-sm link-light" href="become-an-agent">Become an Agent</a></li>
              <li><a class="link-sm link-light" href="#">Support</a></li>
            </ul>
            <!-- End List -->
          </div>
          <!-- End Col -->

          <div class="col-lg-3 col-6 col-sm-4 mb-5 mb-lg-0">
            <span class="text-cap text-primary-light">Legal</span>

            <!-- List -->
            <ul class="list-unstyled list-py-1 mb-5">
              <li><a class="link-sm link-light" href="terms">Terms of use</a></li>
              <li><a class="link-sm link-light" href="privacy-policy">Privacy policy</a></li>
            </ul>
            <!-- End List -->

          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <div class="border-top border-white-10"></div>

        <div class="row align-items-md-end py-5 mobile-text">
          <div class="col-md mb-3 mb-md-0">
            <p class="text-white small mt-0 mb-0">© <script>document.write(new Date().getFullYear());</script> Growing Digital Income Store Agency&trade; | All rights reserved.</p>
          </div>

          <div class="col-md d-md-flex justify-content-md-end">
            <!-- Socials -->
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                  <i class="bi-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                  <i class="bi-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                  <i class="bi-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                  <i class="bi-whatsapp"></i>
                </a>
              </li>
            </ul>
            <!-- End Socials -->
          </div>
        </div>
      </div>
    </footer>

    <?php include "./components/modals.php"; ?>


    <!-- Go To -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
       data-hs-go-to-options='{
         "offsetTop": 700,
         "position": {
           "init": {
             "right": "2rem"
           },
           "show": {
             "bottom": "2rem"
           },
           "hide": {
             "bottom": "-2rem"
           }
         }
       }'>
      <i class="bi-chevron-up"></i>
    </a>


    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/theme.min.js"></script>

    <script>
      (function() {
        const megaMenu = new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        }).init();


        new HSShowAnimation('.js-animation-link')


        HSBsValidation.init('.js-validate', {
          onSubmit: data => {
            data.event.preventDefault()
            alert('Submited')
          }
        })


        new HSGoTo('.js-go-to')


         new HSToggleSwitch('.js-toggle-switch')
      })()
    </script>

    <script>
      (function() {
        // INITIALIZATION OF MEGA MENU
        // =======================================================
        const megaMenu = new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        }).init();


        // INITIALIZATION OF SHOW ANIMATIONS
        // =======================================================
        new HSShowAnimation('.js-animation-link')


        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
          onSubmit: data => {
            data.event.preventDefault()
            alert('Submited')
          }
        })


        // INITIALIZATION OF GO TO
        // =======================================================
        new HSGoTo('.js-go-to')


        // INITIALIZATION OF HEADER
        // =======================================================
        new HSHeader('#header').init()


        // INITIALIZATION OF PRICING SELECT
        // =======================================================
        const pricingRows = document.querySelectorAll('.js-form-check-row-select')

        pricingRows.forEach($row => {
          $row.addEventListener('click', e => {
            $row.querySelector('[name="pricingRadio"]').checked = true
            pricingRows.forEach(row => row.classList.remove('checked'))
            $row.classList.add('checked')
          })
        })


        // INITIALIZATION OF SWIPER
        // =======================================================
        var swiper = new Swiper('.js-swiper', {
          preloaderClass: 'custom-swiper-lazy-preloader',
          pagination: {
            el: '.js-swiper-pagination',
            clickable: true,
          },
          breakpoints: {
            580: {
              slidesPerView: 1,
              spaceBetween: 15,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 15,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 15,
            },
          },
          on: {
            'imagesReady': function (swiper) {
              const preloader = swiper.el.querySelector('.js-swiper-preloader')
              preloader.parentNode.removeChild(preloader)
            }
          }
        })
      })()
    </script>
    <script>
      (function() {

         new HSStickyBlock('.js-sticky-block', {
          targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
        })



        new bootstrap.ScrollSpy(document.body, {
          target: '#navbarSettings',
          offset: 10
        })

        HSBsValidation.init('.js-validate', {
          onSubmit: data => {
            data.event.preventDefault()
            alert('Submited')
          }
        })

        new HSScrollspy('#navbarVerticalNavMenu', {
          breakpoint: 'lg'
        })
      })()
    </script>
  </body>
</html>
