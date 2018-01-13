<!-- next match -->
<div class="row next_match">
  <div class="col s12">
    <div class="card-panel">
      <div class="title-card">
        المباراة القادمة
        <span> البطولة </span>
      </div>
      <span class="content">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/kacm.png" alt="KACM">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/rca.png" alt="RCA">
        <span class="center">
          <p>السبت 26/12/2019</p>
          <p>17h30</p>
          <p>ملعب مراكش الكبير</p>
        </span>
      </span>
    </div>
  </div>
</div>

<!-- Botola -->
<div class="row botola">
  <div class="col s12">
    <div class="content">
      <?php
        $html_botola = file_get_contents("http://frmf.gestfoot.com/classev2.php?tim=12336633&groupe=36&lang=ar");
        $html_botola = str_replace("ajaxphp/","http://frmf.gestfoot.com/ajaxphp/",$html_botola);
        $html_botola = str_replace("#33aa80","#971933",$html_botola);
        echo $html_botola;
      ?>
    </div>
  </div>
</div>


<!-- Sponsors -->
<div class="row sponsors">
  <div class="col s12">
    <div class="content">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/sponsor1.png" alt="sponsor1">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/sponsor2.png" alt="sponsor2">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/sponsor3.png" alt="sponsor3">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/sponsor4.png" alt="sponsor4">
    </div>
  </div>
</div>

<!-- page facebook -->
<div class="row facebook">
  <div class="col s12">
    <div class="fb-page z-depth-1" data-href="https://www.facebook.com/KACMOfficiiel/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/KACMOfficiiel/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/KACMOfficiiel/">KACM - Kawkab Athletic Club Marrakech</a></blockquote></div>
  </div>
</div>
