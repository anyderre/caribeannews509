<?php

function adsb30_home_text_settings_page() {

	global $home_text_settings;
	ob_start(); ?>

  <div class="ninja-container" style="border: 1px solid #cc0000">
      <img class="ninja" src="<?php echo plugins_url('assets/ninja2.png',__FILE__); ?>" alt="">
      <div>
        <h2 style="">
        --HINAKA--
        </h2>
        <h4 style="margin-bottom:0">
        Una letal ninja invisible en tu Home
        </h4>
      </div>
  </div>

  <div style="max-width:680px">
      <form id="adsenseib30_form3" method="post" action="options.php">

        <?php settings_fields('home_text_settings_group'); ?>
        <?php adsenseib30_get_tab3(); ?>

        <p class="submit">
          <input type="submit" class="button -red"  value="<?php _e('Guardar opciones', 'adsensei_domain'); ?>" />
        </p>
      </form>
  </div>

<div class="saveResult"></div>

<?php
    AdSenseiUtils::getDonationBox();
    AdSenseiUtils::getAuthorsSignature();
    adsenseiB30_postJqueryScript();
	  echo ob_get_clean();
}

function adsenseib30_get_tab3(){

    $home_text_settings = get_option('home_text_settings');
    $home_text_id =     "home_text_settings[homeText]";
    $home_text =        $home_text_settings['homeText'];

    ob_start(); ?>

    <div class="rm_title red" style="margin-top:10px">
      <h3>
        <span style="color:#eee">Texto a añadir en home</span>
      </h3>
    </div>

    <?php wp_editor( $home_text, 'hometext', array( 'textarea_id' => $home_text_id, 'textarea_name' => $home_text_id) ); ?>

    <?php echo ob_get_clean();
}



function adsenseiB30_postJqueryScript(){
  ob_start(); ?>
  <script type="text/javascript">

      jQuery(document).ready(function() {
         jQuery('#adsenseib30_form3').submit(function() {

           jQuery(this).find("textarea").html(adbs30_get_tinymce_content())

            jQuery('#adsenseib30_form3').ajaxSubmit({
               success: function(){
                  jQuery('.saveResult').html("<div class='saveMessage successModal'></div>");
                  jQuery('.saveMessage').append("<p><?php echo htmlentities(__('Ajustes guardados','wp'),ENT_QUOTES); ?></p>").slideDown(250);
               },
               error: function(xhr, status, error) {
                  var err = eval("(" + xhr.responseText + ")");
                  alert(err.Message);
                },
               timeout: 3200
            });
            setTimeout("jQuery('.saveMessage').fadeOut(400);", 3200);
            return false;
         });
      });

      function adbs30_get_tinymce_content(){
          if (jQuery("#wp-hometext-wrap").hasClass("tmce-active")){
              return tinyMCE.activeEditor.getContent();
          }else{
              return jQuery('#hometext').val();
          }
      }
    </script>
  <?php echo ob_get_clean();
}
