<?php include(VIEWS.'inc/header.php'); ?>
  
<h1 class="text-center  mt-5 mb-2 py-3">Delete Books </h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            
               <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>
                  
                  <div class="alert alert-danger text-center">Deleted Success</div>

               
                            
            </div>
        </div>
    </div>



    <?php include(VIEWS.'inc/footer.php'); ?>
