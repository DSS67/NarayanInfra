
    <section class="footer_sec">
      <footer class="footersection" id="footerdiv">
        <div class="container-fluid pt-3 pb-0 mb-0">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 footer-div">
              <div data-aos="zoom-in" data-aos-duration="1200">
                <h3>NARAYAN INFRA & PROJECTS</h3>
                <div class="social mb-2">
                  <a href="#"><span class="fab fa-facebook-f"></span></a>
                  <a href="#"><span class="fab fa-twitter"></span></a>
                  <a href="#"><span class="fab fa-instagram"></span></a>
                  <a href="#"><span class="fab fa-linkedin"></span></a>
                </div> 

                <p>We have recruited a team of industry experts and professionals for timely completing the projects in an efficient manner. These individuals are recruited on the basis of their qualifications, domain knowledge and past experience.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 footer-div">
              
            </div>

            <div class="col-lg-4 col-md-4 col-12 footer-div">
              <div data-aos="zoom-in" data-aos-duration="1200">
                <h3>CONTACT</h3>
                <p class="text-capitalize">R8/ 31 , rama valley township, raipur road, bodri,bilaspur (c.g.)495220.</p>
                <p><strong>Email : </strong><a href="mailto:narayaninfranprojects211@gmail.com">narayaninfranprojects211@gmail.com</a></p>
                <p><strong>Phone : </strong><a href="tel:+917000957638" data-toggle="tooltip" title="Click Here To Make A Call">7000957638</a>, <a href="tel:+918120050062" data-toggle="tooltip" title="Click Here To Make A Call">8120050062</a> </p>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-5 text-center">
          <p class="copyright_line text-center">© 2021 Narayan Infra & Projects All rights reserved | This Website is made <!-- with <span style="color: red;">❤️</span> --> by <span><a href="https://dakshsoftwaresolution.com/" target="url">Daksh Software Solution</a></span></p>
        </div>

        <div class="scrolltop float-right">
          <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
        </div>

      </footer>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Owl-Carousel CDN file -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <!-- SweetAleart CDN file -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- GSAP ScrollTrigger CDN file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 
    <!-- <script src="assets/js/app.js"></script> -->
    <script src="assets/library/anime.min.js"></script>
    <script src="assets/library/owl-carousel.js"></script>
    <script src="assets/library/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


    <script>

      $('.owl-carousel').owlCarousel({
          loop:false,
          margin:10,
          dots:false,
          nav:true,
          mouseDrag:true,
          autoplay:true,
          animateOut: 'slideOutUp',
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }
          }
      });

    /*********************** owl carousel js ends here ***********************/

      $(document).ready(function(){
          $('.customer-logos').slick({
              slidesToShow: 6,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 1500,
              arrows: false,
              dots: false,
              pauseOnHover: false,
              responsive: [{
                  breakpoint: 768,
                  settings: {
                      slidesToShow: 4
                  }
              }, {
                  breakpoint: 520,
                  settings: {
                      slidesToShow: 3
                  }
              }]
          });
      });

/*********************** client logo carousel js ends here ***********************/
      jQuery('#frmContactus').on('submit', function(e){
        jQuery('#success_msg').html('');
        jQuery('#submit').html('Please Wait');
        jQuery('#submit').attr('disabled',true);
        jQuery.ajax({
          url : 'ajax/submit.php',
          type : 'post',
          data : jQuery('#frmContactus').serialize(),
          success : function(result){
            swal("Thank You", "Message Has Been Successfully Sent!", "success")
            jQuery('#submit').html('Send');
            jQuery('#submit').attr('disabled',false);
            jQuery('#frmContactus')[0].reset();
            
          }
        });
        e.preventDefault();
      });

// ************* scrolltop btn js starts file *************

      //Get the Button:
      mybutton = document.getElementById('myBtn');

      //When the user scrolls down 50px from the top of the document show the button:
      window.onscroll = function() {scrollFunction()};

      function scrollFunction(){
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
          mybutton.style.display = "block";
        }
        else{
          mybutton.style.display = "none"
        }
      };

      //When the user clicks on the scroll button, scroll to the top of the document:
      function topFunction(){
        document.body.scrolltop = 0; //for Safari
        document.documentElement.scrollTop = 0; //for Chrome, Firefox, IE and Opera
      };

 // ************* scrolltop btn js ends file *************

    let t1 = anime.timeline({
      easing: 'easeOutExpo',
      duration: 750
    })

    t1.add({
      targets: '.anime_item',
      width: '100%',
      backgroundColor: '#1cc6cf',
      delay: anime.stagger(100)
    })

    t1.add({
      targets: '.anime_item',
      width: '90%',
      backgroundColor: '#c6f0f3'
    })

    t1.add({
      targets: '.contact_title',
      fontSize: '60px',
      FontWeight: '600',
      marginBottom: '60px',
      opacity: 1,
      duration: 4000,
    }, '-=1200')

    t1.add({
      targets: '.contact_subtitle',
      fontSize: '20px',
      FontWeight: '400',
      marginTop: '30px',
      opacity: 1,
      duration: 3000,
    }, '-=1800')
  // ************* contact us header animation js ends file *************
    // AOS.init();

    $(function() {
      AOS.init();
    });
  // ************* AOS ScrollTrigger animation js ends file *************

    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });

  // ************* ToolTips js ends file *************

    </script>


  </body>
</html>