<div class="container clearfix">
            <div class="clearfix">
                <div class="contact-form span24">
                        <h2 class="tc">Contact Form</h2>
                    <p align="center">For enquiries reach us at <br>
Email: sales@webappsys.in<br>
Phone: +91-7299401100
                    </p>
                    
                    <?php echo $this->Form->create('Contact', array('class'=>'form-horizontal', 'inputDefaults'=>array('div' => false, 'label' => false)));?>
                      <div class="form-group clearfix">
                          <div class="control-label">
                          <label for="inputEmail3" class="">Full Name</label>
                          <span class="required"><?php echo $this->Html->image('required-star.png', array('alt' => '[Image:required-star]')); ?></span>
                        </div>
                        <div class="ver-smspace span">
                          <?php echo $this->Form->input('name'); ?>
                        </div>
                      </div>
                      <div class="form-group clearfix">
                          <div class="control-label">
                        <label for="inputPassword3" class="">Company</label>
                          <span class="required"><?php echo $this->Html->image('required-star.png', array('alt' => '[Image:required-star]')); ?></span>
                          </div>
                        <div class="ver-smspace span">
                          <?php echo $this->Form->input('company'); ?>
                        </div>
                      </div>
                      <div class="form-group clearfix">
                          <div class="control-label">
                        <label for="inputPassword3" class="">Address</label>
                          <span class="required"><?php echo $this->Html->image('required-star.png', array('alt' => '[Image:required-star]')); ?></span>
                          </div>
                        <div class="ver-smspace span">
                          <?php echo $this->Form->input('address'); ?>
                        </div>
                      </div>
                      <div class="form-group clearfix">
                          <div class="control-label">
                        <label for="inputPassword3" class="">Phone</label>
                          <span class="required"><?php echo $this->Html->image('required-star.png', array('alt' => '[Image:required-star]')); ?></span>
                          </div>
                        <div class="ver-smspace span">
                          <?php echo $this->Form->input('phone'); ?>
                        </div>
                      </div>
                      <div class="form-group clearfix">
                          <div class="control-label">
                        <label for="inputPassword3" class="">Email</label>
                          <span class="required"><?php echo $this->Html->image('required-star.png', array('alt' => '[Image:required-star]')); ?></span>
                          </div>
                        <div class="ver-smspace span">
                          <?php echo $this->Form->input('email'); ?>
                        </div>
                      </div>
                      <div class="form-group clearfix">
                          <div class="control-label">
                        <label for="inputPassword3" class="">Message</label>
                          <span class="required"><?php echo $this->Html->image('required-star.png', array('alt' => '[Image:required-star]')); ?></span>
                          </div>
                        <div class="ver-smspace span">
                          <?php echo $this->Form->input('message'); ?>
                        </div>
                      </div>
                        <div class="form-group clearfix">
                            <div>
                              <?php echo $this->Form->submit('Submit', array('div'=>false)); ?>
                              <?php echo $this->Form->end(); ?>
                            </div>
                      </div>
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
