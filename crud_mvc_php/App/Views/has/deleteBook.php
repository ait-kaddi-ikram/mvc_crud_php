<?php include(VIEWS.'inc/header.php'); ?>
  
<h1 class="text-center  mt-5 mb-2 py-3">Delete Bookstore </h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            
                  
                  <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">id_book</th>
                    <th scope="col">id_bookstore</th>
                    <th scope="col">Delete Book</th>
                  
                    </tr>
                </thead>
                <tbody>


                    <?php foreach($has as $row):  ?>
                        <tr>
                            <td> <?php echo $row['id_has']; ?></td>
                            <td><?php echo $row['id_book']; ?></td>
                            <td><?php echo $row['id_bookstore']; ?></td>
                            <td>
                           
                                <a href="<?php url('has/delete/'.$row['id_has'])?>" class="btn btn-info" >delete Book</a>
                            </td>
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>


               
                            
            </div>
        </div>
    </div>



    <?php include(VIEWS.'inc/footer.php'); ?>
