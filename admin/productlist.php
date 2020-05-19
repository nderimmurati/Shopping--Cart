 <?php
session_start();
include("../db.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$product_id=$_GET['product_id'];
<<<<<<< HEAD
///////picture delete/////////
=======

>>>>>>> fbcaff97179837ed391d58918dd58dc593da9a76
$result=mysqli_query($con,"select product_image from products where product_id='$product_id'")
or die("query is incorrect...");

list($picture)=mysqli_fetch_array($result);
$path="../product_images/$picture";

if(file_exists($path)==true)
{
  unlink($path);
}
else
{}
<<<<<<< HEAD
/*this is delet query*/
mysqli_query($con,"delete from products where product_id='$product_id'")or die("query is incorrect...");
}

///pagination
=======

mysqli_query($con,"delete from products where product_id='$product_id'")or die("query is incorrect...");
}


>>>>>>> fbcaff97179837ed391d58918dd58dc593da9a76

$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
} 
include "sidenav.php";
include "topheader.php";
?>
<<<<<<< HEAD
      <!-- End Navbar -->
=======

>>>>>>> fbcaff97179837ed391d58918dd58dc593da9a76
      <div class="content">
        <div class="container-fluid">
        
        
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
<<<<<<< HEAD
                <h4 class="card-title"> Lista e Produktit</h4>
=======
                <h4 class="card-title"> Products List</h4>
>>>>>>> fbcaff97179837ed391d58918dd58dc593da9a76
                
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " id="page1">
                    <thead class=" text-primary">
<<<<<<< HEAD
                      <tr><th>Foto</th><th>Emri</th><th>Çmimi</th><th>
	<a class=" btn btn-primary" href="addproduct.php">Shto te re</a></th></tr></thead>
=======
                      <tr><th>Image</th><th>Name</th><th>Price</th><th>
	<a class=" btn btn-primary" href="addproduct.php">Add New</a></th></tr></thead>
>>>>>>> fbcaff97179837ed391d58918dd58dc593da9a76
                    <tbody>
                      <?php 

                        $result=mysqli_query($con,"select product_id,product_image, product_title,product_price from products  where  product_cat=2 or product_cat=3 or product_cat=4 Limit $page1,12")or die ("query 1 incorrect.....");

                        while(list($product_id,$image,$product_name,$price)=mysqli_fetch_array($result))
                        {
                        echo "<tr><td><img src='../product_images/$image' style='width:50px; height:50px; border:groove #000'></td><td>$product_name</td>
                        <td>$price</td>
                        <td>

                        <a class=' btn btn-success' href='clothes_list.php?product_id=$product_id&action=delete'>Delete</a>
                        </td></tr>";
                        }

                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
<<<<<<< HEAD
                    <span class="sr-only">Prapa</span>
                  </a>
                </li>
                 <?php 
//counting paging
=======
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                 <?php 

>>>>>>> fbcaff97179837ed391d58918dd58dc593da9a76

                $paging=mysqli_query($con,"select product_id,product_image, product_title,product_price from products");
                $count=mysqli_num_rows($paging);

                $a=$count/10;
                $a=ceil($a);
                
                for($b=1; $b<=$a;$b++)
                {
                ?> 
                <li class="page-item"><a class="page-link" href="productlist.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li>
                <?php	
}
?>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
<<<<<<< HEAD
                    <span class="sr-only">Vazhdo</span>
=======
                    <span class="sr-only">Next</span>
>>>>>>> fbcaff97179837ed391d58918dd58dc593da9a76
                  </a>
                </li>
              </ul>
            </nav>
            
           

          </div>
          
          
        </div>
      </div>
      <?php
include "footer.php";
?>