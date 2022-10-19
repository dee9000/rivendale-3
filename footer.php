<!-- FOOTER -->
<footer class="footer">
   <button type="button" class="btn" id="btn-back-to-top"><span> &uarr; <span></button>
   <div class="container p-5">
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <h3>Contact Us</h3>
            <ul class="list-unstyled medium">
               <li class="pb-2">The Derwent Campus, Bracknell Drive, DE24 0BT.</li>
               <li class="pb-2">+ 01 234 567 89</li>
               <li class="pb-2">contact@example.com</li>
            </ul>
            <ul class="list-unstyled social-list">
               <a class="text-white px-2" href="#!"><i class="fa fa-twitter" style="font-size:24px"></i></a>
               <a class="text-white px-2" href="#!"><i class="fa fa-instagram" style="font-size:24px"></i></a>
               <a class="text-white px-2" href="#!"><i class="fa fa-youtube" style="font-size:24px"></i></a>
               <a class="text-white px-2" href="#!"><i class="fa fa-linkedin" style="font-size:24px"></i></a>
            </ul>
            <br>
            <h2 class="footer-logo-text">Rivendale</h2>
         </div>
         <div class="col-lg-4 col-md-6">
            <h3>Quick Links</h3>
            <div class="media">
               <div class="media-body">
                  <h4 class="media-heading">General information</h4>
               </div>
            </div>
            <div class="media">
               <div class="media-body">
                  <h4 class="media-heading">After School Clubs</h4>
               </div>
            </div>
            <div class="media">
               <div class="media-body">
                  <h4 class="media-heading">Newsletter</h4>
               </div>
            </div>
            <div class="media">
               <div class="media-body">
                  <h4 class="media-heading">Complaints Procedure</h4>
               </div>
            </div>
            <div class="media">
               <div class="media-body">
                  <h4 class="media-heading">Family Support</h4>
               </div>
            </div>
            <div class="media">
               <div class="media-body">
                  <h4 class="media-heading">COVID Information</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 h-100">
            <h3>Gallery</h3>
            <a href="gallery2.php"><img class="img-thumbnail" src="img/sample4.png" alt="" /></a>
            <a href="gallery2.php"><img class="img-thumbnail" src="img/sample17.png" alt="" /></a>
            <a href="gallery2.php"><img class="img-thumbnail" src="img/sample19.png" alt="" /></a>
            <a href="gallery2.php"><img class="img-thumbnail" src="img/sample7.png" alt="" /></a>
         </div>
      </div>
   </div>
   <div class="copyright text-center">
      Copyright &copy; 2023 <span>Rivendale</span>
   </div>
</footer>
</main>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>function reveal() {
var reveals = document.querySelectorAll(".reveal");

for (var i = 0; i < reveals.length; i++) {
  var windowHeight = window.innerHeight;
  var elementTop = reveals[i].getBoundingClientRect().top;
  var elementVisible = 150;

  if (elementTop < windowHeight - elementVisible) {
    reveals[i].classList.add("active");
  } else {
    reveals[i].classList.remove("active");
  }
}
}

window.addEventListener("scroll", reveal);
</script>
<script>
//Get the button fast button to take you to top of screen
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script>
//slick slider
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
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</body>
</html>
