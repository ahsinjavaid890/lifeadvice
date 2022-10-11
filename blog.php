<?php 
include 'app_url.php';
include 'quote/includes/db_connect.php';

$sql = mysqli_query($db, "SELECT * FROM `blog` WHERE `blog_url`='".$_REQUEST['url']."'");
$fetch = mysqli_fetch_assoc($sql);  
$blog_id = $fetch['id'];
$blog_dated = $fetch['dated'];
$blog_title = $fetch['title'];
$blog_text = $fetch['post_text'];
$blog_img = $fetch['blog_img'];
?>
<!doctype html>
<html lang="zxx">
<head>
<?php include 'include/header.php';?>
<title><?php echo $page_tittle; ?></title>
</head>
<body class="body-five">
<?php include 'include/head.php';?>
<div class="contact-box-wrap-blogs mt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="block-box user-single-blog">
                    <div class="blog-thumbnail">
                        <img style="width: 100%;height: 400px;" src="<?php echo $appurl ?>quote/admin/blog/<?php echo $blog_img; ?>" alt="Blog">
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-entry-header">
                            <h2 class="entry-title"><?php echo $blog_title; ?></h2>
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <ul class="entry-meta">
                                        <li><i class="icofont-calendar"></i> <?php echo date('M d, Y', strtotime($blog_dated));?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <?php echo $blog_text; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-widget fl-wrap">
                   <div class="box-widget-content">
                       <div class="search-widget fl-wrap">
                           <form action="blogs.php?" class="d-flex">
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
</div>


<?php include 'include/footer.php';?>
<div class="go-top go-top-five">
   <i class='bx bx-chevrons-up'></i>
   <i class='bx bx-chevrons-up'></i>
</div>
<!-- End Go Top Area -->
<?php include 'include/scripts.php';?>
</body>
</html>