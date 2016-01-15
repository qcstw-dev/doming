<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <h2 class="margin-bottom-20"><?php print $title; ?></h2>
    <div class="col-xs-12 padding-0"><?php
        if ($field_products) {
            $numItems = count($arr);
            $i = 0;
            foreach ($field_products as $field_product) {
                $product = $field_product['taxonomy_term']; ?>
                <div class="col-md-4 thumbnail border block-product">
                    <div class="thumbnail border-none">
                        <img class="" src="<?php print file_create_url($product->field_product_image['und'][0]['uri']) ?>" alt="<?php $product->field_product_image['und'][0]['alt'] ?>" title="<?php $product->field_product_image['und'][0]['title'] ?>"/>
                    </div>
                    <h3 class="text-center"><?php print $product->name ?></h3>
                    <div class="padding">
                        <?php print $product->field_description['und'][0]['value'] ?>
                    </div>
                </div><?php
                if (++$i != $numItems && $i % 3 != 0) { ?>
                    <div class="col-md-1 hidden-xs"></div><?php
                }
            }
        } ?>
    </div>
</div>
