<?php

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 *
 * If a preview is enabled, these keys will be available on the preview page:
 * - $form['preview_message']: The preview message renderable.
 * - $form['preview']: A renderable representing the entire submission preview.
 */
?>
<div class="col-xs-12 margin-bottom-10"><h2>Contact us</h2></div>
<div class="col-xs-12 col-sm-6"><?php
    // Print out the progress bar at the top of the page
    print drupal_render($form['progressbar']);
    // Print out the preview message if on the preview page.
    if (isset($form['preview_message'])) {
        print '<div class="messages warning">';
        print drupal_render($form['preview_message']);
        print '</div>';
    }
    foreach ($form['submitted'] as $key => $field) {
        if (strpos($key, "#") === false) {
            if (in_array($field['#type'], ['textfield', 'webform_email'])) { ?>
                <div class="input-group">
                    <span class="input-group-addon"><?php print $field['#webform_component']['name'].($field['#required'] ? ' *' : '') ?></span>
                    <input type="<?php print ($field['#type'] === 'webform_email' ? 'email' : 'text') ?>" class="form-control" name="<?php print $field['#name'] ?>" />
                </div><?php
            } else if ($field['#type'] === 'textarea') { ?>
                <div class="input-group">
                    <span class="input-group-addon"><?php print $field['#webform_component']['name'].($field['#required'] ? ' *' : '') ?></span>
                    <textarea class="form-control  height-150" name="<?php print $field['#name'] ?>"></textarea>
                </div><?php
            }
        }
    } ?>
    
    <input type="hidden" name="form_build_id" value="<?= $form['form_build_id']['#value'] ?>">
    <input type="hidden" name="form_token" value="<?= $form['form_token']['#value'] ?>">
    <input type="hidden" name="form_id" value="<?= $form['form_id']['#value'] ?>"><?php
    
    if (isset($form['captcha']) && strpos($form['captcha']['#captcha_type'], 'recaptcha') !== false) {
        print $form['captcha']['captcha_widgets']['recaptcha_widget']['#markup'];
    } ?>
    <input type="submit" class="btn btn-primary margin-top-10" value="<?= $form['#node']->webform['submit_text'] ?>"/>
    <?php
        // Print out the main part of the form.
      // Feel free to break this up and move the pieces within the array.
    //  print drupal_render($form['submitted']);

      // Always print out the entire $form. This renders the remaining pieces of the
      // form that haven't yet been rendered above (buttons, hidden elements, etc).
//      print drupal_render_children($form); ?>
    
</div>
