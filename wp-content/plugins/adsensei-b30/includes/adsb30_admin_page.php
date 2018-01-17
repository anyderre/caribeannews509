<?php

function adsenseib30_settings_page() {

	global $adsenseib30_settings;


	ob_start(); ?>

  <div class="ninja-container" style="max-width:767px; padding-top:20px;">
      <img class="ninja" src="<?php echo plugins_url('assets/ninja1_.png',__FILE__); ?>" alt="">
      <div>
        <h2>
        KABUZA
        </h2>
        <h4 style="margin-bottom:0">
        Anuncios ninja a golpe de katana allá dónde quieras
        </h4>
      </div>
  </div>


	<div class="wrap rm_wrap">
    <div class="rm_opts">
      <form id="adsenseib30_form" method="post" action="options.php">
        <?php settings_fields('adsenseib30_settings_group'); ?>

        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Guardar opciones', 'adsensei_domain'); ?>" />
          <a style="margin-left:30px" href="#shortcodes"> <?php echo __('VER SHORTCODES','adsensei_domain') ?></a>
          <div class="saveResult"></div>
        </p>

          <?php

          $categories = get_categories(array('hide_empty' => false));
          $catIds = array_map(create_function('$o', 'return $o->cat_ID;'), $categories);
          $catNames = array_map(create_function('$o', 'return $o->name;'), $categories);
          array_unshift($catIds, -1);
          array_unshift($catNames, 'Aplicar a todas');

          adsenseib30_get_tab(1, $catIds, $catNames);
          adsenseib30_get_tab(2, $catIds, $catNames);
          adsenseib30_get_tab(3, $catIds, $catNames);
          adsenseib30_get_tab(4, $catIds, $catNames);
          adsenseib30_get_tab(5, $catIds, $catNames);
          adsenseib30_get_tab(6, $catIds, $catNames);
          adsenseib30_get_tab(7, $catIds, $catNames);
          adsenseib30_get_tab(8, $catIds, $catNames);
          adsenseib30_get_tab(9, $catIds, $catNames);
          adsenseib30_get_tab(10, $catIds, $catNames);

          ?>

        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Guardar Opciones', 'adsensei_domain'); ?>" />
        </p>
      </form>

<div class="saveResult"></div>

<script type="text/javascript">
jQuery(document).ready(function() {
   jQuery('#adsenseib30_form').submit(function() {
      jQuery(this).ajaxSubmit({
         success: function(){
            jQuery('.saveResult').html("<div class='saveMessage successModal'></div>");
            jQuery('.saveMessage').append("<p><?php echo htmlentities(__('Ajustes guardados','wp'),ENT_QUOTES); ?></p>").slideDown(250);
         },
         timeout: 3200
      });
      setTimeout("jQuery('.saveMessage').fadeOut(400);", 3200);
      return false;
   });
});
</script>

	  </div>


  <a style="margin-top:50px" target="_blank" href="http://blogger3cero.com" class="signature">powered by Blogger3cero</a>
	</div>

  <a name="shortcodes"></a>
    <div class="rm_opts" style="max-width:480px">
			<div class="rm_section" style="padding:10px; margin-top:20px;margin-right:20px; height:300px;">
        <h2>SHORTCODES</h2>
        <p>Puedes insertar cualquier anuncio, en la posición que quieras, mediante su shortcode:</p>
        <p><b>[sin_anuncios_b30]</b>: Desactiva el uso de AdSensei en un post/página en concreto</p>
        <p><b>[anuncio_b30 id=x]</b>:  Inserta el anuncio x en el lugar dónde pongas el shortcode</p>
        <p> Ejemplo: </p>
        <p><b>[anuncio_b30 id=2]</b>:  Inserta el anuncio 2 dónde hayas escrito el shortcode.</p>
	    </div>
    </div>
	<?php
  AdSenseiUtils::getDonationBox();
  AdSenseiUtils::getAuthorsSignature();
	echo ob_get_clean();
  }

function adsenseib30_get_tab($numAd, $catIds, $catNames){

      $adsenseib30_settings = get_option('adsenseib30_settings');

      $html_idCode = "adsenseib30_settings[adCode".$numAd."]";
      $html_idPosition = "adsenseib30_settings[adPosition".$numAd."]";
      $html_idDevice = "adsenseib30_settings[adDevice".$numAd."]";
      $html_idMargin = "adsenseib30_settings[adMargin".$numAd."]";
      $html_idAdName = "adsenseib30_settings[adName".$numAd."]";
      $html_idAdEnabled = "adsenseib30_settings[adEnabled".$numAd."]";
      $html_idAlign = "adsenseib30_settings[adAlign".$numAd."]";
      $html_idShowOn = "adsenseib30_settings[showOn".$numAd."]";
      $html_idCategory = "adsenseib30_settings[adCategory".$numAd."]";

      $adCode = $adsenseib30_settings['adCode'.$numAd];
      $adPossition = $adsenseib30_settings['adPosition'.$numAd];
      $adMargin = $adsenseib30_settings['adMargin'.$numAd];
      $adAlign = $adsenseib30_settings['adAlign'.$numAd];
      $adEnabled = $adsenseib30_settings['adEnabled'.$numAd];
      $adName = $adsenseib30_settings['adName'.$numAd];
      $showOn = $adsenseib30_settings['showOn'.$numAd];
      $device = $adsenseib30_settings['adDevice'.$numAd];
      $category = $adsenseib30_settings['adCategory'.$numAd];

      $deviceValues = array('desktop and mobile', 'mobile', 'desktop');
      $positionValues = array('0','middle','end', '1','2', '3','4', '5','6', '7', '8', '9', '10', 'before end', 'H2 first', 'H2 second', 'H2 third', 'H3 first', 'H3 second', 'H3 third');
      $aftpar = "Después del párrafo ";
      $positionDisplayvalues = array('Antes del primer párrafo','A mitad del contenido','Al final del contenido',$aftpar.'1', $aftpar.'2', $aftpar.'3',$aftpar.'4', $aftpar.'5',$aftpar.'6', $aftpar.'7', $aftpar.'8',$aftpar.'9' ,$aftpar.'10' , 'Antes del último párrafo','Después del primer H2', 'Después del segundo H2', 'Después del tercer H2', 'Después del primer H3',  'Después del segundo H3',  'Después del tercer H3' );
      $deviceDisplayValues = array('Dispositivos móviles y PCs','Sólo dispositivos móviles','Sólo PCs');


      $alignValues = array('left','wrapleft','center','right','wrapright');
      $alignDisplayvalues = array('Izquierda','Izquierda envuelto','Centrado','Derecha','Derecha envuelto');

      /*
      $showOnValues = array('post_page_and_custom_post_type','posts','pages','both', 'shortcode');
      $showOnDisplayvalues = array('Posts, páginas y custom posts', 'Posts','Páginas','Posts y páginas', 'Usar sólo como shortcode');
      */
      $showOnValues = array('posts','pages','both', 'shortcode');
      $showOnDisplayvalues = array('Posts','Páginas','Posts y páginas', 'Usar sólo como shortcode');

      $categoryValues = $catIds;
      $categoryDisplayvalues = $catNames;


      ob_start(); ?>

    <div class="rm_title <?php echo "ad".$numAd;
      if (($adsenseib30_settings['adEnabled'.$numAd])=='false'){
        echo " titleDisabled";
      } ?>

      " >
          <h3>
            <span id="adTitle<?php echo $numAd; ?>" style="color:#eee">

            <?php if (($adsenseib30_settings['adName'.$numAd])==null){
                echo 'Anuncio ' . $numAd ;
              } else {
                echo ($adsenseib30_settings['adName'.$numAd]);
              }
            ?>
            </span>
            <a href="#ad" name="#ad'.$numAd.'" id="editAd" onclick="newName(<?php echo $numAd ?>)">(Editar nombre</a>
              <?php

            if (($adsenseib30_settings['adEnabled'.$numAd])=='true'){
              echo '<a href="#ad'.$numAd.'" name="#ad'.$numAd.'" id="disableAd'.$numAd.'" class="disableAd" onclick="disableAd('. $numAd .')"> |  Desactivar)</a>';
              echo '<a href="#ad'.$numAd.'" name="#ad'.$numAd.'" id="enableAd'.$numAd.'" class="enableAd" style="display:none" onclick="enableAd('. $numAd .')"> |  Activar)</a>';
            } else {
              echo '<a href="#ad'.$numAd.'" name="#ad'.$numAd.'" id="disableAd'.$numAd.'" class="disableAd" style="display:none" onclick="disableAd('. $numAd .')"> |  Desactivar)</a>';
              echo '<a href="#ad'.$numAd.'" name="#ad'.$numAd.'" id="enableAd'.$numAd.'" class="enableAd" onclick="enableAd('. $numAd .')"> |  Activar)</a>';
            }
          ?>

            <span class="shortcode" style="text-transform:lowercase; float:right; padding-right:20px;">  [anuncio_b30 id=<?php echo $numAd?>] &nbsp; &nbsp;</span>

          </h3>
      </div>

			<div class="rm_section  <?php echo "ad" . $numAd;

      if (($adsenseib30_settings['adEnabled'.$numAd])=='false'){
        echo " sectionDisabled";
      }

      ?>">


            <div class="rm_input rm_textarea">
                <label>Código adsense </label>
                <textarea id="<?php echo $html_idCode ?>" name="<?php echo $html_idCode ?>" type="text" ><?php echo $adsenseib30_settings['adCode'.$numAd]?></textarea>
                <small>Inserta aquí el código adsense</small>
                <div class="clearfix"></div>
            </div>

            <div class="rm_input rm_select">
              <label><?php _e('Colocar anuncio: ', 'adsensei_domain'); ?></label>
              <?php adsenseib30_loadselect($positionValues, $positionDisplayvalues, $adPossition,$html_idPosition); ?>
              <small>Posición dónde saldrá el anuncio</small>
              <div class="clearfix"></div>
            </div>

            <div class="rm_input rm_select">
              <label><?php _e('Alineación anuncio: ', 'adsensei_domain'); ?></label>
              <?php adsenseib30_loadselect($alignValues, $alignDisplayvalues, $adAlign,$html_idAlign); ?>
                <small><a href="https://wordpress.org/plugins/adsensei-b30/screenshots/" target="_blank">Ver ejemplos</a></small>
              <div class="clearfix"></div>
            </div>

            <div class="rm_input rm_text">

              <label>Margen</label>
              <input class=""  style="width:40px" id="<?php echo $html_idMargin ?>" name="<?php echo $html_idMargin ?>" type="text" value="<?php if (($adsenseib30_settings['adMargin'.$numAd])==null){
                echo '12';
              } else {
                echo ($adsenseib30_settings['adMargin'.$numAd]);
              }
            ?>"/>&nbsp;píxeles
              <small>El margen que quieras (de 0 a 100)</small>
              <div class="clearfix"></div>

            </div>


            <div class="rm_input rm_select">
              <label><?php _e('Mostrar anuncio en:', 'adsensei_domain'); ?></label>
              <?php adsenseib30_loadselect($showOnValues, $showOnDisplayvalues, $showOn,$html_idShowOn); ?>
              <small>Posts / Páginas / Posts + Páginas</small>
              <div class="clearfix"></div>
            </div>

            <div class="rm_input rm_select">
              <label><?php _e('Dispositivos visualización', 'adsensei_domain'); ?></label>
              <?php adsenseib30_loadselect($deviceValues, $deviceDisplayValues, $device,$html_idDevice); ?>
              <small>Tipo de dispositivos en los que se visualizará el anuncio</small>
              <div class="clearfix"></div>
            </div>

            <div class="rm_input rm_select">
              <label><?php _e('Categoria', 'adsensei_domain'); ?></label>
              <?php adsenseib30_loadselect($categoryValues, $categoryDisplayvalues, $category,$html_idCategory); ?>
              <small>Categoría en la que se mostrará el anuncio</small>
              <div class="clearfix"></div>
            </div>


              <input class="" id="<?php echo $html_idAdName ?>" name="<?php echo $html_idAdName ?>" type="hidden" value="<?php if (($adsenseib30_settings['adName'.$numAd])==null){
                echo 'Anuncio ' . $numAd ;
              } else {
                echo ($adsenseib30_settings['adName'.$numAd]);
              }
            ?>"/>

              <input class="" id="<?php echo $html_idAdEnabled ?>" name="<?php echo $html_idAdEnabled ?>" type="hidden" value="<?php if (($adsenseib30_settings['adEnabled'.$numAd])==null){
                echo 'true';
              } else {
                echo ($adsenseib30_settings['adEnabled'.$numAd]);
              }
            ?>"/>

			</div>

	    <?php
	    echo ob_get_clean();
  }

function adsenseib30_loadselect($values, $displayvalues, $adPossition, $html_idPosition){
      ?>
        <select class="" name="<?php echo $html_idPosition ?>" id="<?php echo $html_idPosition ?>">
          <?php $index= 0;
            foreach($values as $value) {
            if($adPossition == $value) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
            <option value="<?php echo $value; ?>" <?php echo $selected; ?>><?php echo $displayvalues[$index]; ?></option>
          <?php $index++;} ?>
        </select>
      <?php
}

