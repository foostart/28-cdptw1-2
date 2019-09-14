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
                        <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> </button>
                        <button class="btn" onclick="gridView()"><i class="fa fa-th-large"></i> </button>
                    </div>
                    <br>

                    <div class="row">
                        <div class="column" style="background-color:#ddd;">
                           <img src="../897/images/messi_1" alt="responsive">
                        </div>
                        <div class="column" style="background-color:#ddd;">
                        <img src="../897/images/messi_2" alt="responsive">
                        </div>
                    </div>

                    <div class="row">
                        <div class="column" style="background-color:#ddd;">
                        <img src="../897/images/messi_3" alt="responsive">
                        </div>
                        <div class="column" style="background-color:#ddd;">
                        <img src="../897/images/messi_4" alt="responsive">
                        </div>
                    </div>

                    <script>
                        // Get the elements with class="column"
                        var elements = document.getElementsByClassName("column");

                        // Declare a loop variable
                        var i;

                        // List View
                        function listView() {
                            for (i = 0; i < elements.length; i++) {
                                elements[i].style.width = "100%";
                            }
                        }

                        // Grid View
                        function gridView() {
                            for (i = 0; i < elements.length; i++) {
                                elements[i].style.width = "50%";
                            }
                        }

                        /* Optional: Add active class to the current button (highlight it) */
                        var container = document.getElementById("btnContainer");
                        var btns = container.getElementsByClassName("btn");
                        for (var i = 0; i < btns.length; i++) {
                            btns[i].addEventListener("click", function() {
                                var current = document.getElementsByClassName("active");
                                current[0].className = current[0].className.replace(" active", "");
                                this.className += " active";
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>