<?php
//$xs = @$_POST['xs'];
//$s = @$_GET['s'];
//$m = @$_GET['m'];
//$l = @$_GET['l'];
//$xl = @$_GET['xl'];
//
//$con = mysqli_connect("localhost", "root", "", "18323");
//
////if (isset($_POST['xs']) or isset($_GET['s']) or isset($_GET['m'])) {
////    $filtervalues = $_POST['xs'];
////    $query = "SELECT * FROM inventory WHERE CONCAT(name, price, sizes) LIKE '%$filtervalues%' ";
////    $rows = mysqli_query($con, $query);
////
////}
////?>

<div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
    <div class="filter-widget">
        <h4 class="fw-title">Categories</h4>
        <ul class="filter-catagories">
            <li><a href="#">Men</a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Kids</a></li>
        </ul>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Price</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount">
                    <input type="text" id="maxamount">
                </div>
            </div>
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                 data-min="33" data-max="98">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>
        <!--        <a href="#" class="filter-btn">Filter</a>-->
    </div>
    <form action="shop.php" method="post">
        <div class="filter-widget">
            <h4 class="fw-title">Color</h4>
<!--            <select name="category" id="category">-->
<!--    <option value="">All</option>-->
<!--    <option value="black">Black</option>-->
<!--    <option value="violet">Violet</option>-->
<!--    <option value="blue">Blue</option>-->
<!--  </select>-->
            <div class="fw-color-choose">
                <div class="cs-item">
                    <input type="radio" id="cs-black" name="black" value="black">
                    <label class="cs-black" for="cs-black">Black</label>
                </div>
                <div class="cs-item">
                    <input type="radio" id="cs-violet" name="violet" value="violet">
                    <label class="cs-violet" for="cs-violet">Violet</label>
                </div>
                <div class="cs-item">
                    <input type="radio" id="cs-blue" name="blue" value="blue">
                    <label class="cs-blue" for="cs-blue">Blue</label>
                </div>
                <div class="cs-item">
                    <input type="radio" id="cs-yellow" name="yellow" value="yellow">
                    <label class="cs-yellow" for="cs-yellow">Yellow</label>
                </div>
                <div class="cs-item">
                    <input type="radio" id="cs-red" name="red" value="red">
                    <label class="cs-red" for="cs-red">Red</label>
                </div>
                <div class="cs-item">
                    <input type="radio" id="cs-green" name="green" value="green">
                    <label class="cs-green" for="cs-green">Green</label>
                </div>
            </div>
        </div>



    <div class="filter-widget">
        <h4 class="fw-title">Size</h4>
        <div class="filter-widget">
            <div class="fw-size-choose">
                <div class="sc-item">
                    <input type="radio" id="xs-size" name="xs" value="xs">
                    <label for="xs-size">xs</label>
                </div>
                <div class="sc-item">
                    <input type="radio" id="s-size" name="s" value="s">
                    <label for="s-size">s</label>
                </div>
                <div class="sc-item">
                    <input type="radio" id="m-size" name="m" value="m">
                    <label for="m-size">m</label>
                </div>
                <div class="sc-item">
                    <input type="radio" id="l-size" name="l" value="l">
                    <label for="l-size">l</label>
                </div>
                <div class="sc-item">
                    <input type="radio" id="xl-size" name="xl" value="xl">
                    <label for="xl-size">xl</label>
                </div>
                <!--                <div class="button-filter">-->
                <!--                    <input type="button" name="search" >-->
                <!--                    <button type="submit">Filter</button>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
<input class="filter-btn" type="submit" value="Filter">
<input class="filter-btn" type="submit" value="Reset filter">
</div>

</form>
