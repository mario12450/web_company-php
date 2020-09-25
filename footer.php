<!-- Start Footer -->
    <!-- <div class="card-header" style="margin-top:50px;background-color:#B0C4DE;color:black;"> -->
    <div class="navbar navbar-expand-md navbar-dark fixed-down bg-success mt-5">        
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <?php foreach  
                    ($results4 as $result) 
                    : ?>
                    
                        <!-- <div class="card mt-4"> -->
                            <div class="card-body">
                                <center><h3> <?php echo $result['footer_content'] ?></h3></center>
                            </div>
                        <!-- </div> -->
                    <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!-- End Footer -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/libs/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/libs/bootstrap-4.5.0-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html> 