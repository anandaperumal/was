<div class="clearfix banner-sec">
			<div class="container">
				<div class="banner-content span span8">
					<h2>School System</h2>
					<p>WAS school management solution efficiently developed in php platform to suite the educational institution needs. It is a user-friendly, flexible and competitive tool.</p>
                    <?php echo $this->Html->link(
                                " Read More...",
                                array('controller'=>'products','action' => 'view',1),array('class' => 'btn btn-primary')
                            );
                           ?>
				</div>
				<div class="banner-image span pull-right">
                        <?php echo $this->Html->image('banner-img.png', array('alt' => '[image:Banner-Image]')); ?>
				</div>
			</div>
		</div>
		
		
		<div class="container clearfix">
			<div class="clearfix">
				<div class="mobile-app-sec span15">
					<div class="mobile-app pr">
                        <?php echo $this->Html->image('mobile-app-img.jpg', array('alt' => '[image:mobile-app-img]')); ?>
						<div class="app-content">
							<h3 class="pa">MOBILE APPLICATION</h3>
							<a class="pa" href="#" title="Read More">Read More .......</a>
						</div>
					</div>
					
					<ul class="app-categories unstyled clearfix">
						<li class="span5">
							<h4>MOBILE APPLICATION</h4>
                            <?php echo $this->Html->image('mobile-app.png', array('alt' => '[Image:mobile-app]')); ?>
						</li>
						<li class="span5">
							<h4>SHOPPING CART</h4>
                            <?php echo $this->Html->image('shoping-cart.png', array('alt' => '[Image:shoping-cart]')); ?>
						</li>
						<li class="span5">
							<h4>PAYROLL MANAGEMENT</h4>
                            <?php echo $this->Html->image('payroll.png', array('alt' => '[Image:payroll]')); ?>
						</li>
					</ul>
					
				</div>
				<div class="about-sec span8 pull-right">
					<h2>ABOUT OUR COMPANY</h2>
					<div class="pull-right span3">
                        <?php echo $this->Html->image('about.jpg', array('alt' => '[Image:about]')); ?>
					</div>
					<p>Webappsys is focused on providing Web and Mobile based Business Solutions. We offer range of services in web and mobile applications using the best of technologies and tools available.</p>
                    <div class="prod-list">
                        <p>
                            <?php
                                echo $this->Html->link(
                                    'Read More .......',
                                    array(
                                        'controller' => 'pages',
                                        'action' => 'about_us',
                                        'full_base' => true
                                    )
                                );
                            ?>
                        </p>
                    </div>
					<ul class="about-links unstyled">
						<li class="clearfix">
                            <?php echo $this->Html->image('icon-product.png', array("width" => "22", "class" =>"pull-left", 'alt' => '[Image:icon-product]')); ?>
							<a class="pull-left" href="#" title="PRODUCTS UPDATES">PRODUCTS UPDATES</a>
						</li>
						<li class="clearfix">
                            <?php echo $this->Html->image('icon-development.png', array("width" => "22", "class" =>"pull-left", 'alt' => '[Image:icon-product]', 'title'=>"DEVELOPER BLOGS")); ?>
							<a class="pull-left" href="#" title="DEVELOPER BLOGS">DEVELOPER BLOGS</a>
						</li>
						<li class="clearfix">
                            <?php echo $this->Html->image('icon-news.png', array("width" => "22", "class" =>"pull-left", 'alt' => '[Image:icon-news]')); ?>
							<a class="pull-left" href="#" title="LATEST NEWS">LATEST NEWS</a>
						</li>
					</ul>
				</div>
			</div>
			
			<ul class="social-links unstyled clearfix pull-right">
				<li class="pull-left">
                    <?php echo $this->Html->link(
                            $this->Html->image('icon-facebook.png', array("width"=>"25", "height"=>"25", 'alt' => '[image:Facebook]', 'title' => 'facebook')),
                            'http://www.facebook.com/',
                            array('escape' => false,'target' => '_blank')
                        );
                    ?>
				</li>
				
				<li class="pull-left">
                    <?php echo $this->Html->link(
                            $this->Html->image('icon-twitter.png', array("width"=>"25", "height"=>"25", 'alt' => '[image:Facebook]', 'title' => 'twitter')),
                            'http://www.twitter.com/',
                            array('escape' => false,'target' => '_blank')
                        );
                    ?>
				</li>
				
				<li class="pull-left">
                    <?php echo $this->Html->link(
                            $this->Html->image('icon-google.png', array("width"=>"25", "height"=>"25", 'alt' => '[image:Facebook]', 'title' => 'google')),
                            'http://www.plus.google.com/',
                            array('escape' => false,'target' => '_blank')
                        );
                    ?>
				</li>
			</ul>
		
		</div>