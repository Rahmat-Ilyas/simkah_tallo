<footer>
    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex">
                <p class="col-lg-12 footer-text text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Direktorat Jenderal Bimbingan Masyarakat Islam | All rights reserved by <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://www.instagram.com/auliaulfiana/?hl=id" target="_blank">VIVI</a>
                </p>
            </div>
        </div>
    </div>
</footer>


    <!--===============================================================================================-->
<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="login/vendor/bootstrap/js/popper.js"></script>
<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="login/vendor/daterangepicker/moment.min.js"></script>
<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="login/js/main.js"></script>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src=""></script>
    <script>
        $('.next').click(function(){
            var nextId = $(this).parents('.tab-pane').next().attr("id");
            $('[href="#'+nextId+'"]').tab('show');
            return false;
        })

        $('.back').click(function(){
            var prevId = $(this).parents('.tab-pane').prev().attr("id");
            $('[href="#'+prevId+'"]').tab('show');
            return false;
        })

        $('.tab-head-this').on('shown.bs.tab', function (e) {
        //update progress
        var step = $(e.target).data('step');
        var percent = (parseInt(step) / 3) * 100;

        $('.progress-bar').css({width: percent + '%'});
        $('.progress-bar').text("Step " + step + " of 3");
        //e.relatedTarget // previous tab
    })

        $('.first').click(function(){
            $('#myWizard a:first').tab('show')
        })

        $('#myTabs a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
      })

        // hitung umur

        $(function() {
            $( ".umur" ).datepicker();
        });

        window.onload=function(){
            $('.umur').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('.result').val(age);
            });
        }
        
      //   @-moz-document url-prefix() {
      //     fieldset { display: table-cell; }
      // }

      /*
 * Change Navbar color while scrolling
*/

$(window).scroll(function(){
    handleTopNavAnimation();
});

$(window).load(function(){
    handleTopNavAnimation();
});

function handleTopNavAnimation() {
    var top=$(window).scrollTop();

    if(top>10){
        $('#site-nav').addClass('navbar-solid'); 
    }
    else{
        $('#site-nav').removeClass('navbar-solid'); 
    }
}

  </script>
</body>
</html>