<?php include(VIEWS.'inc/header.php'); ?>
  
<h1 class="text-center  mt-5 mb-2 py-3">Edit Bookstore </h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            
               <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>


                <form class="p-5 border mb-5" method="POST" action="<?php url('bookstore/update/'.$row['id_bookstore']); ?>">
                    
                    <div class="form-group">
                        <label for="auteur">adresse</label>
                        <input type="text" required class="form-control"value="<?php echo $row['adresse']; ?>" name="adresse" id="adresse">
                    </div>

                    <div class="form-group">
                        <label for="annee">email</label>
                        <input type="text" required class="form-control" value="<?php echo $row['email']; ?>" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <label for="annee">telephone</label>
                        <input type="text" required class="form-control" value="<?php echo $row['telephone']; ?>" name="telephone" id="telephone">
                    </div>

                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                            
            </div>
        </div>
    </div>



    <?php include(VIEWS.'inc/footer.php'); ?>
