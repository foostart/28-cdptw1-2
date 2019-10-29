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
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- BRAND -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#alignment-example" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Your Brand</a>
                        </div>

                        <!-- COLLAPSIBLE NAVBAR -->
                        <div class="collapse navbar-collapse" id="alignment-example">

                            <!-- Links -->
                            <ul class="nav navbar-nav">
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">SHORTCODE</a></li>
                                <li><a href="#">CONTACT</a></li>
                                <li><a href="#">ABOUTS</a></li>
                                <li><a href="#">NOTIFICATION</a></li>
                            </ul>
                            <form class="navbar-form  navbar-right" role="search">
                                <div class="input-group">
                                    <input type="text" id="input" class="search-query form-control" placeholder="Search..." />
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger" type="button">
                                            <span class=" glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

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