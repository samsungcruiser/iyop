
        


<div id="right_column" class="heading">
    <?php get_search_form(); ?>
                <h1>Our Sponsors</h1>
                <img src="images/konrad.png">
                <div class = "Social" class="heading">
                    <h1>Find us</h1>
                    <img src="images/facebook-64x64.png">
                    <img src="images/twitter-64x64.png">
                    <img src="images/youtube-64x64.png">

                    
                </div>
                <div class="gallery" class="heading" >
                    <h1>Media Gallery</h1>
                    <div class="inner_gallery">
                        <img src="images/img1.png">
                    </div>

                </div>
                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
            <?php endif; ?>
            </div>