<!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Middenstandsvereniging Streefkerk</strong>
                    </h4>
                    <p>2959BT Kostverloren<br>Streefkerk</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (+31) 0184-785010</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">info@msvstreefkerk.nl</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">
                        Copyright &copy;  Powered by <a href="https://nl.linkedin.com/in/jim-geersinga-2451a9118" target="_blank"> Jim Geersinga </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        SetCustomNav();
        ActivateFixedNav();

        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });

        $(window).scroll(function (event) {
            ActivateFixedNav();
        });

         function SetCustomNav(){
            var page = (window.location.pathname).split("/")[1];
            switch(page){
                case "": $("#default-nonFixed-nav").hide(); break;
                case "index": $("#default-nonFixed-nav").hide(); break;
                default: $("#default-nonFixed-nav").show(); break;
            }            
        }

        function ActivateFixedNav(){           
            var screenwidth = $(window).width();
            var scroll = $(window).scrollTop();

            var scrollnav = $(".navbar-custom").offset();


            if(( !$("#default-nonFixed-nav").is(":visible") && scroll > scrollnav.top) && screenwidth > 768){
                $(".navbar-fixed-top").show();

            }else{
                $(".navbar-fixed-top").hide();
            }

            if($(".navbar-fixed-top").is(":visible")){
                $(document.body).addClass("margin-top-nav");
            } else{
                $(document.body).removeClass("margin-top-nav");
            }
        }
    });
    </script>

</body>

</html>