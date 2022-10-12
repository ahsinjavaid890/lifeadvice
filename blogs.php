<?php 
include 'app_url.php';
include 'quote/includes/db_connect.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
if(isset($_GET['category_id']))
{
    $category = $_GET['category_id'];
    $sql = mysqli_query($db, "SELECT * FROM `blogcategories` where `id`=$category");
    while($fetch = mysqli_fetch_assoc($sql)){
        $page_tittle = $fetch['name'].' Blogs';
    }
}else{
    $page_tittle = 'Our Blogs';
}
?>
<!doctype html>
<html lang="zxx">
<head>
<?php include 'include/header.php';?>
<title><?php echo $page_tittle; ?></title>
</head>
<body class="body-five">
<?php include 'include/head.php';?>
<div class="health-inssurance-hero-banner" style="background-color: #262566;">
   <div class="container">
      <div class="row">
         <div class="col-md-6" style="margin-top: 100px;">
            <div class="herrotexts">
               <h2 style="font-size:3rem;" class="wow fadeInUp text-white product-heading" data-wow-delay=".4s"><?php echo $page_tittle; ?></h2>
            </div>
         </div>
         <div class="col-md-6">
            <div class="hero-image">
               <img src="assets/img/blog/blogsheader.png">
            </div>
         </div>
      </div>
   </div>
</div>
<section class="chooses-blogs choose-us-area-five pb-70">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-9">
            <div class="row">
                <?php

                $srno = 0;
                $per_page = 9;
                $resCount = mysqli_query($db, "SELECT COUNT(*) AS count FROM `blog`");
                $count = $resCount->fetch_assoc()["count"];

                $page = filter_var($page, FILTER_VALIDATE_INT, array(
                                    'options' => array(
                                        'default' => 1
                                    ))
                                );
                $pageCount = ceil($count/$per_page); 
                $limit = ($page - 1)*$per_page;

                if(isset($_GET['category_id']))
                {
                    $sql = mysqli_query($db, "SELECT * FROM `blog` where category_id = $category ORDER BY dated DESC LIMIT $limit, $per_page");
                }else{
                    $sql = mysqli_query($db, "SELECT * FROM `blog` ORDER BY dated DESC LIMIT $limit, $per_page");
                }
                

                while($fetch = mysqli_fetch_assoc($sql)){
                    $srno++;    
                    $blog_id = $fetch['id'];
                    $blog_dated = $fetch['dated'];
                    $blog_title = $fetch['title'];
                    $blog_text = strip_tags($fetch['post_text']);
                    $blog_img = $fetch['blog_img'];
                    $blog_url = $fetch['blog_url'];
                ?>
               <div class="col-md-4">
                  <div class="card blank-card mt-3">
                     <div class="card-body">
                        <div class="blog-image-card">
                           <img src="<?php echo $appurl; ?>quote/admin/blog/<?php echo $blog_img;?>">
                        </div>
                        <div class="card-content">
                            <a href="<?php echo $appurl; ?>blog.php?url=<?php echo $blog_url; ?>">
                                <h3><?php echo $blog_title;?></h3>
                            </a>
                           <p><?php echo substr($blog_text, 0, 400);?>...</p>
                        </div>
                        <div class="blogbutton">
                           <a href="<?php echo $appurl; ?>blog.php?url=<?php echo $blog_url; ?>">Read More..</a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
            <div style="margin-top: 10px;" class="row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">

                        <?php if ($page > 1){ ?>
                        <li class="page-item">
                          <a class="page-link" href="<?php echo "$appurl/blogs.php?page=" .strval($page - 1); ?>">Previous</a>
                        </li>
                        <?php }
                        for($itr=0;$itr<$pageCount;$itr++){
                        ?>
                        <li class="page-item<?php echo $itr+1 == intval($page) ? " disabled" : ""; ?>">
                            <a class="page-link" href="<?php echo "$appurl/blogs.php?page=" .strval($itr+1); ?>"><?php echo $itr+1; ?></a>
                        </li>
                        <?php 
                        }
                        if ($page < $pageCount){ ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo "$appurl/blogs.php?page=" .strval($page + 1); ?>">Next</a>
                        </li>
                        <?php } ?>
                      </ul>
                    </nav>
                </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="box-widget fl-wrap mt-3">
               <div class="box-widget-content">
                   <div class="search-widget fl-wrap">
                       <form action="#" class="d-flex">
                           <input name="se" id="se12" type="text" class="search form-control" placeholder="Search..." value="">
                       </form>
                   </div>
                  <div style="background-color: #262566;"  class="single-widget p-3 mt-3 rounded">
                        <h3 class="text-white">Useful Products<br><hr class="hr-footer"></h3>

                        <ul>
                            <?php 
                              $srno = 0;
                              $sql = mysqli_query($db, "SELECT * FROM `blogcategories`");
                              while($fetch = mysqli_fetch_assoc($sql)){

                                $id = $fetch['id'];
                                $name = $fetch['name'];

                               ?>
                            <li>
                                <a href="<?php echo $appurl; ?>blogs.php?category_id=<?php echo $id; ?>">
                                        <?php echo $name; ?>
                                    </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include 'include/footer.php';?>
<div class="go-top go-top-five">
   <i class='bx bx-chevrons-up'></i>
   <i class='bx bx-chevrons-up'></i>
</div>
<!-- End Go Top Area -->
<?php include 'include/scripts.php';?>
</body>
</html>