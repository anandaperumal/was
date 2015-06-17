<div class="container clearfix">
            <div class="product-section clearfix">
                <div class="prod-left ver-mspace span6">
                    <h2 class="">PRODUCTS</h2>                    
                    <ul class="app-categories unstyled clearfix">
						<li class="">
							<h4>MOBILE APPLICATION</h4>
							<img class="pull-right" src="img/mobile-app.png" alt="[Image:mobile-app]"/>
						</li>
						<li class="">
							<h4>SHOPPING CART</h4>
							<img class="pull-right" src="img/shoping-cart.png" alt="[Image:shoping-cart]"/>
						</li>
						<li class="">
							<h4>PAYROLL MANAGEMENT</h4>
							<img class="pull-right" src="img/payroll.png" alt="[Image:payroll]"/>
						</li>
					</ul>
                </div>

                <div class="prod-right span18">
                    <h2 class="">PRODUCTS <span>- Overview</span></h2>
                    <ul class="unstyled prod-list">
                    <?php foreach ($products as $product): ?>
                        <li>
                            <h3><?php echo $this->Html->link($product['Product']['title'], array('action' => 'view', $product['Product']['product_id'])); ?></h3>
                            <div class="clearfix">
                             <?php echo $this->Html->link(                                    $this->Html->image('product/small/'.$product['Product']['product_id'].'.png', array('class' => 'no-mar span', 'alt' => $product['Product']['title'], 'title' => $product['Product']['title'])),
                                    array('controller'=>'products','action' => 'view', $product['Product']['product_id']),
                                    array('escape' => false)
                                );
                            ?>
                            <p class="no-mar text17 span">
                                <?php echo substr($product['Product']['description'], 0, 200); ?>
                                <?php echo $this->Html->link('Read More .....',
                                    array('controller'=>'products','action' => 'view', $product['Product']['product_id']),
                                    array('escape' => false)
                                );
                            ?>
                            </p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
		
            
		</div>