<div class="container clearfix">
            <div class="product-details clearfix">
                <div class="product-details-left ver-mspace span16">
                    <div class="clearfix">
                        <h2 class="title-block"><?php echo h($product['Product']['title']); ?></h2>
                    </div>
                    <div class="product-image">
                        <?php echo $this->Html->image('product/large/'.$product['Product']['product_id'].'.png', array('class' => 'no-mar span', 'alt' => $product['Product']['title'], 'title' => $product['Product']['title']));?>
                    </div>
                    <?php echo $product['Product']['description']; ?>
                </div>
                
                <div class="product-details-right span9">
                    <a href="#" class="db tc">
                    <?php echo $this->Html->image('arrow-top.png', array('alt' => 'top'));?>
                    </a>
                    <ul class="detail-list unstyled">
                    <?php foreach ($products as $product): ?>
                        <li>
                            <h3 class="tc"><?php echo substr($product['Product']['title'],0,13); ?></h3>
                            
					<div class="image-sec pull-right">
						<?php echo $this->Html->link(
                                    $this->Html->image('product/small/'.$product['Product']['product_id'].'.png', array('class' => 'no-mar span', 'alt' => $product['Product']['title'], 'title' => $product['Product']['title'])),
                                    array('controller'=>'products','action' => 'view', $product['Product']['product_id']),
                                    array('escape' => false)
                                );
                            ?>
					</div>
                            <?php echo substr($product['Product']['description'], 0, 200); ?>
                           <div class="more-link clearfix"><span class="pull-left bg-repeat"></span> 
                           <?php
                                echo $this->Html->link(
                                    'Read More .......',
                                    array(
                                        'controller' => 'products',
                                        'action' => 'view',
                                        $product['Product']['product_id'],
                                        'full_base' => true
                                    ),array('class'=>'pull-left')
                                );
                            ?></div>
                        </li>
                    <?php endforeach; ?>    
                    </ul>
                    <a href="#" class="db tc"><?php echo $this->Html->image('arrow-bottom.png', array('alt' => 'bottom'));?></a>
                </div>
            </div>
		
            
		</div>