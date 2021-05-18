<?php include(VIEWS.'inc/header.php'); ?>
<h1 class="text-center  my-5 py-3">View All Books </h1> 
   <div class="container">
      <div class="row">
         <div class="col-8-mx-auto">
    
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Annee</th>
                    <th scope="col">Add</th>
                    
                    </tr>
                </thead>
                <tbody>

                    <?php $i=1; ?>
                    <?php foreach($book as $row):  ?>
                        <tr>
                            <td> <?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['auteur']; ?> <b class="float-right"> $ </b></td>
                            <td class="text-center"><?php echo $row['annee']; ?></td>
                            <td>
                            <?php $url= $_SERVER['REQUEST_URI'];
                       $url = trim($url,"/");
                       $url = explode('/',$url);
                          unset($url[0],$url[1]);?>
                                 <a href="<?php url('has/store/'.$row['id'].'/'.$url[2]) ?>" class="btn btn-info" >Add Book</a>
                            </td>
                           
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>
         </div>
         </div>
         </div>


    <?php include(VIEWS.'inc/footer.php'); ?>