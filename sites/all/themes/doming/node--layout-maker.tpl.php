<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
        <div class="component margin-top-20">
            <div class="overlay">
                <div class="overlay-inner">
                    <img class="white-image" src="<?php print path_to_theme().'/images/layout_maker/white.png' ?>" alt="product">
                    <img class="overlay-img" src="<?php print path_to_theme().'/images/layout_maker/product.png' ?>" alt="product">
                </div>
            </div>
            <!-- This image must be on the same domain as the demo or it will not work on a local file system -->
            <!-- http://en.wikipedia.org/wiki/Cross-origin_resource_sharing -->
            <img id="image" class="resize-image" src="<?php print path_to_theme().'/images/layout_maker/image.png' ?>" alt="image for resizing">
            
            <div id="slider-vertical">
                <img class="icon-rotate" src="<?php print path_to_theme().'/images/layout_maker/reload.svg' ?>" alt="rotate">
            </div>
            
            <div class="change-color-product-block">
                <p>Change product's color:</p>
                <img class="change-color-product" src="<?php print path_to_theme().'/images/layout_maker/product.png' ?>" data-src="<?php print path_to_theme().'/images/layout_maker/product.png' ?>" alt="preview product blue" />
                <img class="change-color-product" src="<?php print path_to_theme().'/images/layout_maker/product_2.png' ?>" data-src="<?php print path_to_theme().'/images/layout_maker/product_2.png' ?>" alt="preview product red" />
            </div>
            
            <div class="clear"></div>
            <button class="btn-crop js-crop">Export image<img class="icon-crop" src="<?php print path_to_theme().'/images/layout_maker/crop.svg' ?>"  alt="crop"></button>
        </div>
</div>
