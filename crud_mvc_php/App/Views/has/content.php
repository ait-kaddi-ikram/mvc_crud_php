<?php include(VIEWS.'inc/header.php'); ?>
<h1 class="text-center  my-5 py-3">table has </h1> 
   <div class="container">
      <div class="row">
         <div class="col-8-mx-auto">
       
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">id_book</th>
                    <th scope="col">id_bookstore</th>
                   
                  
                    </tr>
                </thead>
                <tbody>

                    <?php $i=1; ?>
                    <?php foreach($has as $row):  ?>
                        <tr>
                            <td> <?php echo $i; $i++; ?></td>
                            <td><?php echo $row['id_book']; ?></td>
                            <td><?php echo $row['id_bookstore']; ?> <b class="float-right"> $ </b></td>
                
                            
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>
         </div>
         </div>
         </div>


    <?php include(VIEWS.'inc/footer.php'); ?>