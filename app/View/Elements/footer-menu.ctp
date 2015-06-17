<footer>
		
		<div class="footer-section">
			<div class="container row">
				<ul class="no-mar clearfix unstyled">
					<li class="pull-left">
                        <?php echo $this->Html->link(
                            "Home",
                            array('controller'=>'pages','action' => 'home')
                        );
                       ?>
                    </li>
					<li class="pull-left">
                         <?php echo $this->Html->link(
                            "Site Map",
                            array('controller'=>'pages','action' => 'under_construction')
                        );
                       ?></li>
					<li class="pull-left">
                        <?php echo $this->Html->link(
                            "Contact",
                            array('controller'=>'contacts','action' => 'add')
                        );
                       ?>
                    </li>
					<li class="pull-left">
                        <?php echo $this->Html->link(
                            "Blog",
                            array('controller'=>'pages','action' => 'under_construction')
                        );
                       ?>
                    </li>
					<li class="pull-left">
                        <?php echo $this->Html->link(
                            "Privacy Policy",
                            array('controller'=>'pages','action' => 'privacy-policy')
                        );
                       ?>
                    </li>
					<li class="pull-left">
                        <?php echo $this->Html->link(
                            "Disclaimer",
                            array('controller'=>'pages','action' => 'disclaimer')
                        );
                       ?>
                    </li>
				</ul>
				<p class="tc no-mar">&#169; 2015 WebAppSys</p>
			</div>
		</div>
	</footer>