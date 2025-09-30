<?php include 'config/constants.php';?>
<?php include 'config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> | Teachers</title>
    <meta name="keywords" content="<?php echo $thename?>, Everest Top Group of Schools teachers, Everest Top Academy Sagamu teachers, qualified teachers Ogun State, best schools in Sagamu teachers, private school educators Sagamu, international schools Sagamu faculty, Everest Top Schools teaching staff, dedicated teachers Ogun State, professional educators in Sagamu, Everest Top Academy instructors, top private schools in Ogun State teachers" />
    <meta name="description" content="Meet the dedicated teachers of The Everest Top Group of Schools, Sagamu, Ogun State. Our professional educators are committed to nurturing creativity, critical thinking, and academic excellence." />

    <meta property="og:title" content="<?php echo $thename?> | Teachers" />
    <meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/everesttopacademy.jpg" />
    <meta property="og:description" content="Meet the dedicated teachers of The Everest Top Group of Schools, Sagamu, Ogun State. Our professional educators are committed to nurturing creativity, critical thinking, and academic excellence." />

    <meta name="twitter:title" content="<?php echo $thename?> | Teachers" />
    <meta name="twitter:card" content="<?php echo $thename?>" />
    <meta name="twitter:image" content="<?php echo $website_url?>/all-images/plugin-pix/everesttopacademy.jpg" />
    <meta name="twitter:description" content="Meet the dedicated teachers of The Everest Top Group of Schools, Sagamu, Ogun State. Our professional educators are committed to nurturing creativity, critical thinking, and academic excellence." />
</head>

<body>
    <?php  include 'header.php'?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <div class="div-in">
                    <ul>
                        <a href="<?php echo $website_url?>"><li title="Home">Home <i class="bi-caret-right-fill"></i></li></a>
                        <a href="<?php echo $website_url?>/about"><li title="About Us">Our Teachers</li></a>					
                    </ul>
                </div>			
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Our Teachers</span></h1>
                <p>Welcome to The Everest Top Group Of Schools, where we inspire young minds, foster creativity, and empower students to reach their full potential.</p>                
           
                <?php $callclass->_otherPagesBtn($website_url);?>
            </div>
        </div>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="top-div">
                            <div><span class="top-title">OUR TEACHERS</span></div>
                            <h2>Meet With Our Teachers</h2> 
                            <p>Meet with our dedicated teachers to discuss your child’s progress, ask questions, and explore how we can support their educational journey.</p> 
                        </div> 
                    </div>

                    <div class="teachers-back-div" id="fetchAllTeachers">
                       <script>_fetchAllTeachers();</script>
                    </div>
                </div>
            </div>
        </section>

        <?php $callclass->_statistics($website_url);?>
        <?php include 'footer.php'?>
    </section>
 
</body>
</html>


