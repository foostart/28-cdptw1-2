    <?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
    ?>
    <div class="type-897">
      <div id="menu">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">SHORTCODE</a></li>
          <li><a href="#">CONTACT</a></li>
          <li><a href="#">ABOUTS</a></li>
          <li><a href="#">NOTIFICATION</a></li>
          <div class="input-group col-md-3">
            <input type="text" class="  search-query form-control" placeholder="Search..." />
            <span class="input-group-btn">
              <button class="btn btn-danger" type="button">
                <span class=" glyphicon glyphicon-search"></span>
              </button>
            </span>
          </div>
        </ul>
      </div>
      <br>

      <div class="key_features">
        <div class="container">
          <div class="title-key text-center">
            <h2 class="title">Key Features</h2>
            <h3 class="sub_title">What Makes Our Shopify Theme so Power Full ?</h3>
          </div>
          <div class="box-item">
            <div class="row">
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="box text-center">
                  <div class="icon_box">
                    <img src="images/box-1.png" alt="shopify theme">
                  </div>
                  <div class="text_box">
                    <div class="title">Multi Curency</div>
                    <div class="sub_title">Support Multi Curency</div>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="box text-center">
                  <div class="icon_box">
                    <img src="images/box-2.png" alt="shopify theme">
                  </div>
                  <div class="text_box">
                    <div class="title">Oberlo Compatible</div>
                    <div class="sub_title">Oberlo Drop shipping</div>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="box text-center">
                  <div class="icon_box">
                    <img src="images/box-3.png" alt="Social">
                  </div>
                  <div class="text_box">
                    <div class="title">Custom google font</div>
                    <div class="sub_title">Easily Change Font</div>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="box text-center">
                  <div class="icon_box">
                    <img src="images/box-4.png" alt="Pin Image Lookbook">
                  </div>
                  <div class="text_box">
                    <div class="title">Drag & Drop sections</div>
                    <div class="sub_title">Drag & Drop Sections Page Builder</div>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="box text-center">
                  <div class="icon_box">
                    <img src="images/box-5.png" alt="Bootstrap 4">
                  </div>
                  <div class="text_box">
                    <div class="title">AJAX CART</div>
                    <div class="sub_title">Auto Update Your Cart</div>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="box box-6 text-center">
                  <div class="icon_box">
                    <img src="images/box-6.png" alt="shopify theme">
                  </div>
                  <div class="text_box">
                    <div class="title">RIGHT TO LEFT</div>
                    <div class="sub_title">Right To Left Supported</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   