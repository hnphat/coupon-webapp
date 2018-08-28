<?php 
	include "top.php";
?>
<title>Sale 4 mùa giá giảm mỗi ngày</title>
<meta name="googlebot" content="code" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="keywords" content="mã giảm giá, big sale, mua hàng giá rẻ, counpon, ma giam gia" />
<meta name="description" content="Sale 4 mùa cung cấp mã giảm giá, các chương trình khuyến mãi, tổng hợp nhanh và chính xác." />
<?php
	include "top2.php";
?>
<!-- Body -->
<div class="w3-sidebar w3-bar w3-card w3-animate-left" style="display:none" id="search">
  <button class="w3-bar-item w3-button sale-h1-size w3-center" onclick="closesearch()">&times;</button>	
  <form class="w3-container">
	  <p class="w3-center"><label><strong>TÌM KIẾM</strong></label>
	  <input class="w3-input w3-border" type="text" placeholder="Nhập nội dung tìm kiếm" /></p>	  
	  <input class="w3-input w3-button w3-green" type="submit" value="TÌM" />
  </form>
</div>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button class="w3-bar-item w3-button sale-h1-size w3-center" onclick="closeleft()">&times;</button>
	<a href="#" class="w3-bar-item w3-mobile"><img class="sale-logo" src="sale4mua.png" alt="logo sale 4 mua"></a>	
	<a href="#" class="w3-bar-item w3-button w3-hover-black w3-hover-text-red"><span class="fa fa-certificate sale-bt-size"></span> COUNPON</a>
	<a href="#" class="w3-bar-item w3-button w3-hover-black w3-hover-text-red"><span class="fa fa-codiepie sale-bt-size"></span> HOT DEAL</a>
	<a href="#" class="w3-bar-item w3-button w3-hover-black w3-hover-text-red"><span class="fa fa-compass sale-bt-size"></span> SO SANH</a>
	<a href="#" class="w3-bar-item w3-button w3-hover-black w3-hover-text-red"><span class="fa fa-cube sale-bt-size"></span> INTERVIEW</a>
	<a href="#" class="w3-bar-item w3-button w3-hover-black w3-hover-text-red"><span class="fa fa-database sale-bt-size"></span> INFORMATION</a>
</div>
<div class="w3-container w3-black sale-sticky sale-bar-min">	  	
	<div class="w3-bar w3-black main">
		<button class="w3-button w3-black sale-bt-size w3-xlarge w3-hide-large" onclick="openleft()">&#9776;</button>
		<a href="#" class="w3-button w3-black"><img class="sale-logo" src="sale4mua.png" alt="logo sale 4 mua"></a>
		<button class="w3-button w3-black sale-bt-size w3-xlarge w3-hide-large w3-right" onclick="opensearch()"><span class="fa fa-search"></span></button>
	</div>		
</div>
<div class="w3-container w3-black sale-sticky sale-bar-max">	  	
	<nav class="w3-bar w3-black main">
		<a href="#" class="w3-bar-item w3-mobile"><img class="sale-logo" src="sale4mua.png" alt="logo sale 4 mua"></a>		
		<a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-black w3-hover-text-red"><span class="fa fa-certificate sale-bt-size"></span> COUNPON</a>
		<a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-black w3-hover-text-red"><span class="fa fa-codiepie sale-bt-size"></span> HOT DEAL</a>
		<a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-black w3-hover-text-red"><span class="fa fa-compass sale-bt-size"></span> SO SANH</a>
		<a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-black w3-hover-text-red"><span class="fa fa-cube sale-bt-size"></span> INTERVIEW</a>
		<a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-black w3-hover-text-red"><span class="fa fa-database sale-bt-size"></span> INFORMATION</a>
	</nav>		
</div>
<div class="main">	
	<!-- 
    <header>
    	<h1 class="w3-center">This is a title for saling</h1>
    	<p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </header>
    -->
    <section class="w3-row">
    	<div class="w3-third sale-center w3-padding">
    		<a href="#"><img class="w3-image" src="image/topsale/test.jpg" alt="demo test1"></a>
    	</div>
    	<div class="w3-third sale-center w3-padding">
    		<a href="#"><img class="w3-image" src="image/topsale/test5.jpg" alt="demo test1"></a>
    	</div>
    	<div class="w3-third sale-center w3-padding">
    		<div class="sale-center">
    		<a href="#"><img class="w3-image" src="image/topsale/test3.jpg" alt="demo test"></a>
    		</div><br/>
    		<div class="sale-center">
    		<a href="#"><img class="w3-image" src="image/topsale/test3.png" alt="demo test"></a>
    		</div>
    	</div>
    </section>
    <section class="w3-row">
    	<div class="w3-twothird w3-padding">
    		<a href="#"><img class="w3-image" src="image/topsale/test4.jpg" alt="demo test"></a>
    	</div>
    	<div class="w3-third w3-padding">
    		<a href="#"><img class="w3-image" src="image/topsale/test2.jpg" alt="demo test"></a>
    	</div>
    </section>
    <hr class="sale-set-color-hr" />
    <h1 class="w3-green sale-h1-size w3-center"><strong>Mã giảm giá</strong></h1>
    <h2 class="sale-h1-size-low w3-center w3-text-orange"><strong>(Mã giảm giá Tiki, Lazada, shopee, sendo, nguyễn kim,....)</strong></h2>
    <section class="w3-row">
      <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/tiki.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá Grab</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
       <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/lotte.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá Lotte</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
        <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/shopee.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá Adayroi</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
        <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/lazada.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá 25h</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
    </section>
    <section class="w3-row">
        <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/adayroi.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá Adayroi</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
       <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/lazada.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá Lazada</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
        <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/shopee.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá Shopee</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
       <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/tiki.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá Tiki</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
    </section>
    <section class="w3-row">
      <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/tiki.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá Grab</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
       <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/lotte.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá Lotte</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
        <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/shopee.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá Adayroi</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
        <article class="w3-quarter sale-padding-min">
            <div  class="w3-card sale-padding-min">
                <a href="#" class="sale-link"><img class="w3-image sale-center" src="image/mgg/lazada.png" alt="demo" />
                <h1 class="sale-reset sale-h1-size-low"><strong>Mã giảm giá 25h</strong></h1></a>
                <p class="sale-reset">Tổng hợp khuyến mãi và mã giảm giá Lazada cập nhật liên tục</p>
            </div>
        </article>
    </section>
    <hr class="sale-set-color-hr" />
    <h1 class="w3-green sale-h1-size w3-center"><strong>Review sản phẩm</strong></h1>
    <main class="w3-row">
    	<section class="w3-twothird w3-padding">
    		<div class="w3-row">
    			<article class="w3-twothird sale-padding-min">
    				<a href="#"><img class="w3-image" src="image/topcontent/test1.jpg" alt="demotest" /></a>
    				<a class="sale-link" href="#"><h1 class="sale-h1-size"><strong>Trên tay Pocophone F1 chính hãng: 7.99 triệu có Snapdragon 845, pin 4000mAh, tai thỏ, camera kép</strong></h1></a>
    				<p>Là sản phẩm đầu tiên của thương hiệu con của Xiaomi, Pocophone F1 là chiếc máy tầm trung nhưng với hiệu năng ngang ngửa các sản phẩm cao cấp.</p>
    			</article>
    			<article class="w3-third sale-padding-min">
    				<a href="#"><img class="w3-image" src="image/topcontent/test2.jpg" alt="demotest" /></a>
    				<a class="sale-link" href="#"><h1 class="sale-h1-size-low"><strong>Dùng thử Bluetooth Receiver vô danh giá 40.000 đồng: Của rẻ mà không hề ôi!</strong></h1></a>
    			</article>
    		</div>    		
    	</section>
    	<aside class="w3-third w3-padding">
    		
    	</aside>
    </main>
</div>
<!-- Body -->
<?php
	include "bot.php"
?>