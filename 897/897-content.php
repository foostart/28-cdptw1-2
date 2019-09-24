    <?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
    ?>
    <div class="type-897">
        <div class="container">
            <div class="row">
                <div id="content">
                    <!-- content 1 -->
                    <div class="content_bg">
                        <div class="category-info">
                            <h2>MESSI</h2>
                            <div class="info_detail">
                                <p>Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl.</p>
                            </div>
                        </div>
                    </div>
                    <!-- content 2 -->
                    <div class="product-filter">
                        <!--thanh 1 -->
                        <div class="sort">
                            <div class="control-label" style="float: left;">Sort By:</div>
                            <div class="arrow" style="float: left; padding-left: 10px;">
                                <select id="input-sort" class="form-control  " onchange="location = this.value;" style="display: none;">
                                    <option value="#">Default</option>
                                    <option value="#">Name (A - Z)</option>
                                    <option value="#">Name (Z - A)</option>
                                    <option value="#">Price (Low &gt; High)</option>
                                    <option value="#">Price (High &gt; Low)</option>
                                    <option value="#">Rating (Highest)</option>
                                    <option value="#">Rating (Lowest)</option>
                                    <option value="#">Model (A - Z)</option>
                                    <option value="#">Model (Z - A)</option>
                                </select>
                                <ul class="btn-group bootstrap-select form-control dropup">
                                    <button type="button" class="btn1 dropdown-toggle   btn-default" data-toggle="dropdown" data-id="input-sort" title="Default">
                                        <span class="filter-option pull-left">Default</span>&nbsp;<span class="caret"></span>
                                    </button>
                                    <!-- button mo khong biet viet-->
                                    <li class="dropdown-menu open">
                                        <ul class="dropdown-menu inner    " role="menu" style="max-height: 185px; overflow-y: auto; min-height: 81px; ">
                                            <li data-original-index="0" class="   ">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">Default</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="1">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">Name (A - Z)</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="2">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">Name (Z - A)</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="3">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">Price (Low &gt; High)</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="4">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">Price (High &gt; Low)</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="5">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">Rating (Highest)</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="6">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">Rating (Lowest)</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="7">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">Model (A - Z)</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="8">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">Model (Z - A)</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--thanh 2 -->
                        <div class="compare-total"><a href="#">Product Compare (0)</a></div>
                        <!--thanh 3 -->
                        <div class="limit">
                            <div class="control-label" style="float: left;">Show:</div>
                            <div class="arrow" style="float: left;">
                                <select id="input-limit" class="form-control  " onchange="location = this.value;" style="display: none;">
                                    <option value="#">9</option>
                                    <option value="#">25</option>
                                    <option value="#">50</option>
                                    <option value="#">75</option>
                                    <option value="#">100</option>
                                </select>
                                <div class="btn-group bootstrap-select form-control">
                                    <button type="button" class="btn1 dropdown-toggle btn-default" data-toggle="dropdown" data-id="input-limit" title="9">
                                        <span class="filter-option pull-left">9</span>&nbsp;<span class="caret"></span>
                                    </button>
                                    <!-- button mo khong biet viet-->
                                    <div class="dropdown-menu open">
                                        <ul class="dropdown-menu inner " role="menu" style="max-height: 185px; overflow-y: auto; min-height: 81px; ">
                                            <li data-original-index="0" class="   ">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">9</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="1">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">25</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="2">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">50</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="3">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">75</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                            <li data-original-index="4">
                                                <a tabindex="0" class="" style="">
                                                    <span class="text">100</span>
                                                    <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------thanh 4 ------------------------>
                        <!--<div class="btn-group">
                                <button type="button" id="grid-view" title="Grid" class="active"><i class="fa fa-th"></i></button>
                                <button type="button" id="list-view" title="List" class=""><i class="fa fa-th-list"></i></button>
                            </div>
                            -->
                        <div id="btnContainer">
                            <button class=" btn btn_Grid" onclick="gridView()"><i class="fa fa-bars"></i> </button>
                            <button class=" btn btn_List" onclick="listView()"><i class="fa fa-th-large"></i> </button>
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
                            <div class="box box-1 text-center">
                              <div class="icon_box">
                                <img src="images/box-1.png" alt="shopify theme">
                              </div>
                              <div class="text_box">
                                <div class="title">Multi Curency</div>
                                <div class="sub_title">Support Multi Curency</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6" >
                            <div class="box box-2 text-center">
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
                            <div class="box box-3 text-center">
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
                            <div class="box box-4 text-center">
                              <div class="icon_box">
                                <img src="images/box-4.png" alt="Pin Image Lookbook">
                              </div>
                              <div class="text_box">
                                <div class="title">Drag & Drop sections</div>
                                <div class="sub_title">Drag & Drop Sections Page Builder</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6" >
                            <div class="box box-5 text-center">
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
                          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="box box-7 text-center">
                              <div class="icon_box">
                                <img src="images/box-7.png" alt="Multi Curency">
                              </div>
                              <div class="text_box">
                                <div class="title">Fast loading</div>
                                <div class="sub_title">Fast Loading Time</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6" >
                            <div class="box box-8 text-center">
                              <div class="icon_box">
                                <img src="images/box-8.png" alt="Multi Language">
                              </div>
                              <div class="text_box">
                                <div class="title">Mega Menu</div>
                                <div class="sub_title">Powelful Mega Menu</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6" >
                            <div class="box box-9 text-center">
                              <div class="icon_box">
                                <img src="images/box-9.png" alt="Custom google font">
                              </div>
                              <div class="text_box">
                                <div class="title">Blog Secsion</div>
                                <div class="sub_title">shopify Blog</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="box box-10 text-center">
                              <div class="icon_box">
                                <img src="images/box-10.png" alt="One Click Sample Data">
                              </div>
                              <div class="text_box">
                                <div class="title">MULTICOLOR</div>
                                <div class="sub_title">Easy to change the main color  in Admin Panel.</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="box box-11 text-center">
                              <div class="icon_box">
                                <img src="images/box-11.png" alt="AJAX CART">
                              </div>
                              <div class="text_box">
                                <div class="title">Deal Countdown</div>
                                <div class="sub_title">Module Countdown Time For Special Product</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="box box-12 text-center">
                              <div class="icon_box">
                                <img src="images/box-12.png" alt="RIGHT TO LEFT">
                              </div>
                              <div class="text_box">
                                <div class="title">FULLY RESPONSIVE</div>
                                <div class="sub_title">Works on all Devices</div>
                              </div>
                            </div>
                          </div>   
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>