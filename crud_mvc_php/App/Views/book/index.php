<?php include(VIEWS.'inc/header.php'); ?>
<h1 class="text-center  my-5 py-3">View All Books </h1> 
   <div class="container">
      <div class="row">
         <div class="col-8-mx-auto">
         <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Annee</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i=1; ?>
                    <?php foreach($book as $row):  ?>
                        <tr>
                            <td> <?php echo $i; $i++; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['auteur']; ?> <b class="float-right"> $ </b></td>
                            <td class="text-center"><?php echo $row['annee']; ?></td>
                            <td>
                                <a href="<?php url('book/edit/'.$row['id']) ?>" class="btn btn-info" >Edit</a>
                            </td>
                            <td>
                                <a href="<?php url('book/delete/'.$row['id']) ?>" class="btn btn-danger" >Delete</a>
                            </td>
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>
         </div>
         </div>
         </div>


    <?php include(VIEWS.'inc/footer.php'); ?>