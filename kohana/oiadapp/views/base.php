<?php 
	$section = (isset($_GET['section']) && strlen($_GET['section'])) ? $_GET['section'] : 'deal-of-the-day';
?>
<!DOCTYPE html>

<!-- Available class names: deal-of-the-day, coupon-of-the-day, other-deals, black-friday, items-of-the-day  -->
<html lang="en" class="<?php echo $section; ?>"> 
    <head>
        <title>One Item A Day</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <?php echo HTML::style('media/stylesheets/screen.css', array('media'=>'screen, projection'));?>                
  		<?php echo HTML::style('media/stylesheets/print.css', array('media'=>'print'));?>
        <!--[if lt IE 8]><?php echo HTML::style('media/stylesheets/ie.css', array('media'=>'screen, projection'));?><![endif]-->
        <?php echo HTML::style('media/stylesheets/chosen.css', array('media'=>'screen, projection'));?>

        <?php echo HTML::style('media/fancybox/jquery.fancybox-1.3.4.css', array('media'=>'screen, projection'));?>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
        <script>!window.jQuery && document.write('<script src="/media/js/jquery-1.6.4.min.js" type="text/javascript"><\/script>')</script>
        <?php echo HTML::script('media/fancybox/jquery.fancybox-1.3.4.pack.js', array('media'=>'screen, projection'));?>
        <?php echo HTML::script('media/fancybox/jquery.easing-1.3.pack.js', array('media'=>'screen, projection'));?>
        
        <?php echo HTML::script('media/js/chosen.jquery.min.js');?>
    </head>
    
    <body>
        
        <!-- Content -->
        <div id="content" class="cf">
            <div id="inner-content" class="cf">
                <div id="container">
                <?php echo $content; ?> 
                </div>                               
            </div>
            <div id="sidebar">
                <ul>
                    <li<?php echo ((!strcmp($section, 'deal-of-the-day')) ? ' class="active"' : ''); ?>><a href="?section=deal-of-the-day" title="Deal of the day" class="anch-deal-of-the-day">Deal of the day</a></li>
                    <li<?php echo ((!strcmp($section, 'coupon-of-the-day')) ? ' class="active"' : ''); ?>><a href="?section=coupon-of-the-day" title="Coupon of the day" class="anch-coupon-of-the-day">Coupon of the day</a></li>
                    <li<?php echo ((!strcmp($section, 'other-deals')) ? ' class="active"' : ''); ?>><a href="?section=other-deals" title="Other deals" class="anch-other-deals">Other deals</a></li>
                    <li<?php echo ((!strcmp($section, 'black-friday')) ? ' class="active"' : ''); ?>><a href="?section=black-friday" title="Black friday" class="anch-black-friday">Black friday</a></li>
                    <li<?php echo ((!strcmp($section, 'items-of-the-day')) ? ' class="active"' : ''); ?>><a href="?section=items-of-the-day" title="Items of the day" class="anch-items-of-the-day">Items of the day</a></li>
                </ul>
            </div>
        </div>
        <!-- /Content End -->
        
        <!-- Header -->
        <div id="header">
            <a href="/" class="logo" title="One Item A Day Homepage">
                <?php echo HTML::image('media/images/logo-'.$section.'.png', array('alt' => 'One Item A Day Logo'));
                $session = Session::instance();
                $auth = Auth::instance();
                $user =ORM::factory('user', $auth->get_user());
                $role = ORM::factory('role', array('name' => 'admin'));
                ?>
            </a>
            
            <ul id="main-menu">
                <?php if($user->has('roles', $role)){?>
                <li><a href="#" title="View Sports Category">Sports</a></li>
                <li><a href="#" title="View Fashion Category">Fashion</a></li>
                <li><a href="#" title="View Electronics Category">Electronics</a></li>
                <li><a href="#" title="View Automotive Category">Automotive</a></li>
                <li><a href="#" title="View Outdoor Category">Outdoor</a></li>
                <?php } else { ?>
                <li><?php echo HTML::anchor('/sites', 'Sites'); ?></li>        
                <li><?php echo HTML::anchor('/categories', 'Categories'); ?></li>
                <li><?php echo HTML::anchor('/sites/scrapp_expired', 'Scrap Expired'); ?></li>
               	<li><?php echo HTML::anchor('/sites/scrapp', 'Scrap All '); ?></li>
               	<li><?php echo HTML::anchor('/deals', 'Show Today\'s Deals'); ?></li>
                <li><?php echo HTML::anchor('/admin_user', 'User Admin'); ?></li>
                <?php } ?>
            </ul>
            
            <ul id="secondary-menu">
                <li><a href="/" title="One Item A Day Homepage">Home</a></li>
                <li>|</li>
                <li>
                <?php 
                   if($auth->logged_in()!= 0){
                      echo HTML::anchor('/user/profile', $user->username).'<li>|</li><li>'.HTML::anchor('/user/logout', __('Logout')).'</li>';
                   } else {
                      echo HTML::anchor('/user/login', 'Login').'<li>|</li><li>'.HTML::anchor('/user/register', __('Register')).'</li>';
                   }
                ?>
                </li>
                <li>|</li>
                <li><a href="/static/about" title="View Contact">Contact</a></li>
                <li>|</li>
                <li><a href="/static/info" title="View Site Info ">Site Info</a></li>
            </ul>
            
            <form action="#" method="post">
                <div>
                    <input type="text" placeholder="Search oneitemaday.com" class="search-input" />
                    <input type="image" src="/media/images/but-search.png" alt="Search Button" title="Search oneitemaday.com" />
                </div>
            </form>
        </div>
        <!-- /Header End -->
        
        <!-- Footer -->
        <div id="footer">
            <ul id="footer-menu">
                <li><a href="/static/about">About Us</a></li>
                <li><a href="/static/faq">FAQ</a></li>
                <li><a href="/static/link">Link To Us</a></li>
                <li><a href="/static/privacy">Privacy Policy</a></li>
                <li><a href="/static/terms">Terms of Use</a></li>
                <li><a href="/static/info">Site Info</a></li>
                <li><a href="/static/contact">Contact</a></li>
            </ul>
            <ul id="social-menu">
                <li><a href="#"><img src="/media/images/ico-facebook.png" alt="Facebook" title="View our Facebook page" /></a></li>
                <li><a href="#"><img src="/media/images/ico-twitter.png" alt="Twitter" title="View our Twitter page" /></a></li>
                <li><a href="#"><img src="/media/images/ico-rss.png" alt="RSS" title="Subscribe to our RSS feed" /></a></li>
            </ul>
            <p>copyright &copy; 2011 oneitemaday.com. All rights reserved.</p>
        </div>
        <!-- /Footer End -->
    </body>
</html>
