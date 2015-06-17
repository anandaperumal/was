        <div class="navigation nav-collapse collapse">
				<div class="container">
					<ul class="no-mar clearfix unstyled">
						  <li class="">
                          <?php echo $this->Html->link(
                                "HOME",
                                array('controller'=>'pages','action' => 'home')
                            );
                           ?>
						  </li>
						  <li class="">
								<?php echo $this->Html->link(
                                "PRODUCT",
                                array('controller'=>'products','action' => 'index')
                            );
                           ?>
						  </li>
						  <li class="">
                                <?php echo $this->Html->link(
                                    "SERVICE",
                                    array('controller'=>'pages','action' => 'under_construction')
                                );
                               ?>
						  </li>
						  <li class="">
                                <?php echo $this->Html->link(
                                    "TECHNOLOGY",
                                    array('controller'=>'pages','action' => 'under_construction')
                                );
                               ?>
						  </li>
						  <li class="">
                                <?php echo $this->Html->link(
                                    "CONTACT US",
                                    array('controller'=>'contacts','action' => 'add')
                                );
                               ?>
						  </li>
					</ul>
					</div>
			</div>