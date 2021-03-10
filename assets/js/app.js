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
    }, '-=1500')
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