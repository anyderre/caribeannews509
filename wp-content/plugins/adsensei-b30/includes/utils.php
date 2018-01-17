<?php

class AdSenseiUtils {

  private function __construct() {}

  public static function register_settings() {
    register_setting('adsenseib30_settings_group', 'adsenseib30_settings');
    register_setting('category_text_settings_group', 'category_text_settings');
    register_setting('home_text_settings_group', 'home_text_settings');
  }

  public static function getDonationBox() {
  echo '
  <div class="rm_opts" style="max-width:90%; margin-top:20px;">
    <div class="rm_section" style="padding:20px; text-align:center; height:200px; padding-top:100px;">
      <div style="padding:10px;"> ¿Te sientes generoso? Invierte en karma, <br /> haz una donación a los desarrolladores:
      </div>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="S5FAA3U89ZPEN">
        <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
        <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
        </form>
    </div>
  </div>';
  }

  public static function getAuthorsSignature() {
    echo'

  <div class="bottom-author">
      <p style="color:#222"><b>Creado con pasión y trabajo duro por:</b></p>
      <div>
        <a href="http://blogger3cero.com" target="_blank">
          <img width=220px src="' . plugins_url("assets/b30.png",__FILE__) .'"/>
          <span>Dean Romero</span>
          <br/>
        </a>
      </div>
      <div>
        <a href="http://mejorhombre.com" target="_blank" >
        <img width=220px style="margin-top:15px" src="' . plugins_url("assets/mejorhombre2.png",__FILE__) .'"/>
          <span>Jaime Sempere</span>
        </div>
      </a>
      <div>
      <div style="margin-top:25px">
        Diseño de Ninjas y Logo de Adsensei:
        <a style="margin-left:8px" href="http://pabloandre.com" target="_blank">
        <span>
          Pablo Andre
        </span>
        </a>
      </div>
  </div>';
  }
}

function log_me($message) {
    if (WP_DEBUG === true) {
        if (is_array($message) || is_object($message)) {
            error_log(print_r($message, true));
        } else {
            error_log($message);
        }
    }
}
