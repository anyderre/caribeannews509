<?php

function adsenseib30_ninjas_page() {


ob_start(); ?>

<style>
#main_wrapper .card{
  border:1px solid #ccc;
  background:white;
  float:left;
  margin:10px;
  text-align:center;
  padding:30px;
  border-radius:3px;
  height:364px;
}
.mybutton{
  padding:8px 5px 5px 5px;
  line-height:15px;
  border-radius:3px;
  text-transform:uppercase;
  font-weight:bold;
  text-decoration:none;
  background-color: #5480ea;
  color:white;
  position: absolute;
  bottom: 30px;
  width:246px;
}
</style>



  <div id="main_wrapper" style="width:98%">
    <div style="padding:30px 30px 30px 10px; text-align:center">
      <img width=450px src="<?php echo plugins_url('assets/adsensei.png',__FILE__); ?>">
    </div>
    <div class="card" style="width:22%">
      <img class="ninja" src="<?php echo plugins_url('assets/ninja1_.png',__FILE__); ?>">
      <h1>Kabuza</h1>
      <p>Rápido y eficaz. Coloca anuncios de Adsensei, Amazon o cualquier tipo de código HTML por toda tu web</p>
      <a style="text-decoration:none" href="<?php echo admin_url('admin.php?page=adsensei-admin');?>">
        <div  class="mybutton" style="">Coloca tus Anuncios</div>
      </a>
    </div>
    <div class="card" style="width:22%">
      <img class="ninja" style="margin-top:92px;" src="<?php echo plugins_url('assets/ninja2.png',__FILE__); ?>">
      <h1>Hinaka</h1>
      <p>Coloca texto en tu página Home a la vez que mantienes tus últimas entradas/posts. Haz una página optimizada para SEO</p>
      <a style="text-decoration:none" href="<?php echo admin_url('admin.php?page=home-text');?>">
        <div  class="mybutton red" style="">Texto en Home</div>
      </a>
    </div>
    <div class="card" style="width:22%">
      <img class="ninja" src="<?php echo plugins_url('assets/ninja3_.png',__FILE__); ?>" alt="Blogger 3.0">
      <h1>Kabuto</h1>
      <p>Coloca textos en tus categorías prar poder rankearlas con mayor facilidad en los buscadores</p>
      <a style="text-decoration:none" href="<?php echo admin_url('admin.php?page=category-text');?>">
        <div  class="mybutton" style="background:#f3c23b; color:#111">Texto en Categorías</div>
      </a>
    </div>
  </div>

<?php AdSenseiUtils::getAuthorsSignature(); ?>


<?php

//php echo admin_url('admin.php?page=bsf-google-font-manager')
  echo ob_get_clean();
}

