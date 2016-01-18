<div id="homepage" class="node-home <?php print $classes; ?> clearfix"<?php print $attributes; ?>> 
    <div class="col-xs-12 padding-0">
        <div class="col-md-6 visible-md visible-lg padding-left-0">
            <div id="carousel" class="carousel slide" data-ride="carousel"><?php
                $numItems = count($field_home_slideshow); ?>
                <!-- Indicators -->
                <ol class="carousel-indicators"><?php
                     for ($j = 0; $j < $numItems; $j++) { ?>
                        <li data-target="#carousel" data-slide-to="<?= $j ?>" <?= ($j == 0 ? 'class="active"' : '') ?>></li><?php
                     } ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox"><?php
                    $i = 0; 
                    foreach ($field_home_slideshow as $slide) { ?>
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
        <div class="col-md-6 padding-0 text-center">
            <?php print $field_youtube_video[0]['value']; ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-xs-12 padding-0 blocks">
        <hr class="separation" /><?php
        $list_item_ids = [];
        foreach ($field_blocks as $item_id) {
            $list_item_ids[] = $item_id['value']; 
        }
        $blocks = entity_load('field_collection_item', $list_item_ids);
        $i = 0;
        foreach ($blocks as $block) { ?>
            <a href="<?php print url($block->field_block_link['und'][0]['url']) ?>" title="<?php print $block->field_block_link['und'][0]['title'] ?>">
                <div class="block block-<?= ($i % 2 == 0 ? 'left' : 'right') ?> col-xs-12 col-md-6 border">
                    <div class="col-xs-12>"><h2><?php print $block->field_block_title['und'][0]['value']; ?></h2></div>
                    <div class="col-xs-12 col-sm-5 text-center thumbnail border-none">
                        <img class="margin-bottom-10" src="<?php print file_create_url($block->field_block_image['und'][0]['uri']); ?>" alt="<?php print $block->field_block_image['und'][0]['alt']; ?>" title="<?php print $block->field_block_image['und'][0]['title']; ?>" />
                    </div>
                    <div  class="col-xs-12 col-sm-7 margin-top-10-xs padding-0">
                        <div class="text-block"> 
                            <?php print $block->field_block_text['und'][0]['value']; ?>
                        </div>
                        <p class="pull-right"><span class="glyphicon glyphicon-plus-sign"></span> <span class="link-read-more"><?php print $field_label_link_blocks[0]['value'] ?></span></p>
                    </div>
                </div>
            </a><?php
            $i++;
        } ?>
    </div>
        <?php
    $response_xml_data = file_get_contents("https://www.qcsasia.com/rss-posts/");
    $posts = simplexml_load_string($response_xml_data) or die("Error: Cannot create object");
    if ($posts) { ?>
        <div class="col-xs-12 padding-0">
            <h3><?php print $field_home_tile_qcs_asia_posts[0]['value'] ?></h3>
        </div>
        <div class="col-xs-12 padding-0 blocks qcs-news-block"><?php
            $i = 0;
            foreach ($posts as $post) { ?>
                <a href="<?= $post->url ?>" title="<?= $post->title ?>" >
                    <div class="col-sm-3">
                        <div class="col-xs-12 thumbnail">
                            <img src="<?= $post->thumbnail_url ?>" alt="<?= $post->title ?>" title="<?= $post->title ?>" />
                        </div>
                        <div class="subtitle-pic"><?= $post->title ?></div>
                    </div>
                </a><?php
                $i++;
                if ($i == 4) { break; }
            } ?>
        </div><?php
    } ?>
</div>
<script>
    $('.carousel').carousel();
</script>