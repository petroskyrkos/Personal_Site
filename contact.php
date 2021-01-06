<body class="w3-animate-top">
<!------------------------------NavBar Starts------------------------------------------------------------->
<div id='navbar'> 
<?php include "./includes/navBar.php" ?>
</div>
<!------------------------------NavBar Ends------------------------------------------------------------->
<div class="container">
    <br>
    <div class="row">       
        <div class="col-sm-8">
            <!-- Contact Section -->
            <div>
                <h2 class="">Contact Me</h2>
                <hr class="contactHr">
                <div class="">
                    <p><i class="fa fa-map-marker fa-fw inconWidth"></i> Thessaloniki, GR</p>
                    <p><i class="fa fa-phone fa-fw inconWidth"></i> Phone: +30 6989084534</p>
                    <p><i class="fa fa-envelope fa-fw inconWidth"> </i> 
                    <a href = "mailto:it164692@it.teithe.gr">it164692@it.teithe.gr</a>
                    </p>
                </div>
                <br>

                <!-- End Contact Section -->
            </div>
        </div>
        <!----------------------------------Left Side Content---------------------------------------------------->
        <div
            class="sidebar col-sm-4 border bg-light"
            id="sidebar">
            <?php include "./includes/leftSideContent.php" ?>
          </div>
            
        </div>
        <!-------------left side content ends------->
    </div>
</div> 

    <!-- Footer -->
    <?php include "./includes/footer.php" ?>

    </div>

    <script>
        w3.includeHTML();
        </script>
</body>