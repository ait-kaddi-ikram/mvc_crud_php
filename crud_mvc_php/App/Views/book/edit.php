<?php include(VIEWS.'inc/header.php'); ?>
  
<h1 class="text-center  mt-5 mb-2 py-3">Edit Books </h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            
               <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>


                <form class="p-5 border mb-5" method="POST" action="<?php url('book/update/'.$row['id']); ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required name="name" value="<?php echo $row['name']; ?>" class="form-control" id="name" >
                    </div>
                    <div class="form-group">
                        <label for="auteur">Auteur</label>
                        <input type="text" required class="form-control"value="<?php echo $row['auteur']; ?>" name="auteur" id="auteur">
                    </div>

                    <div class="form-group">
                        <label for="annee">Annee</label>
                        <input type="text" required class="form-control" value="<?php echo $row['annee']; ?>" name="annee" id="annee">
                    </div>

                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                            
            </div>
        </div>
    </div>



    <?php include(VIEWS.'inc/footer.php'); ?>
