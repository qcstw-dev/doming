<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    
    <div class="col-xs-12 padding-0 margin-top-20">
        <div class="hidden-text-area">
            <div class="change-product col-md-2 margin-bottom-0 thumbnail border-none cursor-pointer" data-product-ref="lyb">
                <img class="col-xs-10 margin-auto border" src="<?php print path_to_theme().'/images/layout_maker/products/lyb/1.png' ?>" alt="LYB"/>
                <p class="subtitle-pic">Lanyard’s button & badge #LYB206</p>
            </div>
            <div class="change-product col-md-2 margin-bottom-0 thumbnail border-none cursor-pointer" data-product-ref="zmr">
                <img class="col-xs-10 margin-auto border" src="<?php print path_to_theme().'/images/layout_maker/products/zmr/1.png' ?>" alt="ZMR"/>
                <p class="subtitle-pic">Zamac multi-ring keychain #ZMR205</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="btn-show-hide-text-area"><span class="glyphicon glyphicon-menu-down"></span> Shapes available in layout maker <span class="glyphicon glyphicon-menu-down"></span></div>
    </div>
    
    <div class="col-xs-12 margin-top-20">
        <span class="btn btn-primary fileinput-button">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Add files...</span>
            <input id="fileupload" type="file" name="files[]" >
        </span>
        <div id="files" class="files"></div>
    </div>
    <div class="col-xs-12 margin-top-20">
        <div class="component">
            <div class="overlay">
                <div class="overlay-inner">
                    <img class="white-image" src="" alt="">
                    <img class="overlay-img" src="" alt="">
                </div>
            </div>
            <img id="image" class="resize-image" src="<?php print path_to_theme().'/images/layout_maker/drag-and-drop.png' ?>" alt="image for resizing">
            <div id="slider-vertical">
                <img class="icon-rotate" src="<?php print path_to_theme().'/images/layout_maker/reload.svg' ?>" alt="rotate">
            </div>

            <div class="change-color-product-block">
                <p>Change product's color:</p>
                <div class="preview-color lyb">
                    <img class="change-color-product" src="<?php print path_to_theme().'/images/layout_maker/products/lyb/1.png' ?>" alt="preview product green" />
                    <img class="change-color-product" src="<?php print path_to_theme().'/images/layout_maker/products/lyb/2.png' ?>" alt="preview product red" />
                    <img class="custom-white-image" src="<?php print path_to_theme().'/images/layout_maker/products/lyb/white.png' ?>" alt="">
                </div>
                <div class="preview-color zmr">
                    <img class="change-color-product" src="<?php print path_to_theme().'/images/layout_maker/products/zmr/1.png' ?>" alt="preview product" />
                    <img class="custom-white-image" src="<?php print path_to_theme().'/images/layout_maker/products/zmr/white.png' ?>" alt="">
                </div>
            </div>

            <div class="clear"></div>
            <button class="btn btn-primary btn-crop js-crop">Export image<img class="icon-crop" src="<?php print path_to_theme().'/images/layout_maker/crop.svg' ?>"  alt="crop"></button>
        </div>
    </div>
</div>