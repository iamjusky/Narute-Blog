<?php
include ('filterCategories.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>MY WEB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/fonts/font-awesome.min.css" text="txt/css">
    <link rel="stylesheet" href="vendors/css/bootstrap.min.css" text="txt/css">
    <link rel="stylesheet" href="resources/css/blog.css" text="txt/css">
    <link rel="stylesheet" href="resources/css/form-post.css" text="txt/css">


    <script src="slide.js"></script>
</head>

<body>
    <div class="blog-con">
        <!-- navbar -->
        <nav class="nav-cus-bgcolor-opacity navbar navbar-expand-lg navbar-light bg-light">
            <div class="container contaner-cus-padding">
                <a class="navbar-brand" href="index.html"><img src="resources/img/logo.PNG" width="120px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="store.php">Store</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-j">
            
            <h1>BLOG</h1>
            <div class="container-wrapper-j">
                <div class="share-com-j">
                    <a href="#" class="share-icon"><i class="fa fa-share-alt" aria-hidden="true"> share</i></a>
                    <div class="icon-share-j">
                        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <?php
                if(isset($_GET['id']))
                {
                    // $connection = mysqli_connect("localhost","root","","jimkhan"); 
                    $id_post=$_GET['id'];
                    $query="SELECT * FROM blogmanager WHERE id='$id_post'" ;
                    $query_run=mysqli_query($connection,$query);
                    $row=mysqli_fetch_assoc($query_run);
                }
                ?>
                <div class="post-j">
                    <div class="head-form-post">
                        <h2><?php echo $row['title'] ?></h2>
                        <p class="author-j"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['author'] ?></p>
                        <p class="day-post-j"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $row['date'] ?></p>
                    </div>
                    <div class="content-f-p">
                         <?php echo $row['description'] ?>
                    </div>
                    <div class="info-author-j">

                    </div>
                    <div class="comment-j">

                    </div>
                </div>
                <div class="filter">
                    <p>FILTER BY</p>
                    <form action="blog.php" method="post">
                            <button type="submit" name="all">ALL</button>
                            <button type="submit" name="ocean">OCEAN</button>
                            <button type="submit" name="forest">FOREST</button>
                            <button type="submit" name="animals">ANIMALS</button>
                    </form>
                    <!-- <ul>
                        <li><a href="#all">All</li>
                        <li><a href="#news">Articles</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
        <div class="footer-j">
            <div class="content-footer">
                <a href="">PROTECT A FOREST</a>
                <a href="">WHY IT MATTERS</a>
                <a href="">SUPPORTERS</a>
                <a href="">FAQS</a>
                <a href="">SUPPORTERS</a>
                <a href="">FAQS</a>
                <a href="">SUPPORTERS</a>
                <a href="">FAQS</a>
                <a href="">SUPPORTERS</a>
            </div>
            <div class="design-j">
                <div class="community-j">
                    <p>FOLLOW US: </p>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
                <div class="sign-web">
                        <p>©2015 STAND FOR TREES | Site design by JK</p>
                </div>
            </div>
        </div>
</body>

</html>