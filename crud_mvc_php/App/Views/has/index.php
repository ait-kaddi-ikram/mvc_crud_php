<?php include(VIEWS.'inc/header.php'); ?>
<h1 class="text-center  my-5 py-3">Store of books </h1> 
   <div class="container">
      <div class="row">
         <div class="col-8-mx-auto">
       
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">delete</th>
                    <th scope="col">Add</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i=1; ?>
                    <?php foreach($bookstore as $row):  ?>
                        <tr>
                            <td> <?php echo $row['id_bookstore'];?></td>
                            <td><?php echo $row['adresse']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['telephone']; ?> <b class="float-right">  </b></td>
                            
                            <td>
                                <a href="<?php url('has/deleteBook/'.$row['id_bookstore']) ?>" class="btn btn-info" >delete Book</a>
                            </td>
                            <td>
                            
                        <a href="<?php url('has/add/'.$row['id_bookstore']) ?>" class="btn btn-danger" >add book</a>
                            </td>
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>
         </div>
         </div>
         </div>


    <?php include(VIEWS.'inc/footer.php'); ?>