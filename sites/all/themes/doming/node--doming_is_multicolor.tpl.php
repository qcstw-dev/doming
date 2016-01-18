<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-xs-12 col-md-5 padding-left-0">
        <div class="col-xs-12 text-center padding-0">
            <h2><?php print $title ?></h2>
        </div>
        <div class="text-justify">
            <?php print $field_multicolor_text[0]['value']; ?>
        </div>
    </div>
    <div class="col-xs-12 col-md-7 margin-top-20 padding-0">
        <div id="carousel" class="carousel slide" data-ride="carousel"><?php
            $numItems = count($field_multicolor_slideshow); ?>
            <!-- Indicators -->
            <ol class="carousel-indicators"><?php
                for ($j = 0; $j < $numItems; $j++) { ?>
                    <li data-target="#carousel" data-slide-to="<?= $j ?>" <?= ($j == 0 ? 'class="active"' : '') ?>></li><?php
                } ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox"><?php
                $i = 0; 
                foreach ($field_multicolor_slideshow as $slide) { ?>
                    <div class="item <?=($i == 0 ? 'active' : '') ?>">
                        <img src="<?php print file_create_url($slide['uri']); ?>" alt="<?php print $slide['alt']; ?>" title="<?php print $slide['title']; ?>">
                    </div><?php
                    $i++;
                } ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
</div>
<script>
    $('.carousel').carousel();
</script>
