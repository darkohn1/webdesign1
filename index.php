<?php
    $selectedNavPoint = 'home';
    include 'head.php';
?>

    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide card" style="background-image: url('./img/fruit.jpg');">
                <div class="undercard">
                    <p style="color:red">5% OFF</p>
                    <p><b>Buy More & Save More</b> </p>
                    <p style="color:gray">Fresh Friuts</p>
                </div>
                <a href="#" class="btn btn-danger button">Shop Now!</a>
            </div>
            <div class="swiper-slide card" style="background-image: url('./img/vegetables.jpg');">
                <div class="undercard">
                    <p style="color:red">5% OFF</p>
                    <p><b>Buy More & Save More</b> </p>
                    <p style="color:gray">Fresh Vegetables</p>
                </div>
                <a href="#" class="btn btn-danger button">Shop Now!</a>
            </div>
            <div class="swiper-slide card" style="background-image: url('./img/eggs.jpg');">
                <div class="undercard">
                    <p style="color:red">3% OFF</p>
                    <p><b>Hot deals on new items</b> </p>
                    <p style="color:gray">Daily Essentials Eggs </p>
                </div>
                <a href="#" class="btn btn-danger button">Shop Now!</a>
            </div>
            <div class="swiper-slide card" style="background-image: url('./img/nuts.jpg');">
                <div class="undercard">
                    <p style="color:red">3% OFF</p>
                    <p><b>Buy More & Save More</b> </p>
                    <p style="color:gray">Nuts & Snacks</p>
                </div>
                <a href="#" class="btn btn-danger button">Shop Now!</a>
            </div>
            <div class="swiper-slide card" style="background-image: url('./img/juice.jpg');">
                <div class="undercard">
                    <p style="color:red">5% OFF</p>
                    <p><b>Buy More & Save More</b> </p>
                    <p style="color:gray">Fresh Vegetables</p>
                </div>
                <a href="#" class="btn btn-danger button">Shop Now!</a>
            </div>
            <div class="swiper-slide card" style="background-image: url('./img/fruit.jpg');">
                <div class="undercard">
                    <p style="color:red">2% OFF</p>
                    <p><b>Buy More & Save More</b> </p>
                    <p style="color:gray">Beverages</p>
                </div>
                <a href="#" class="btn btn-danger button">Shop Now!</a>
            </div>
            <div class="swiper-slide card" style="background-image: url('./img/vegetables.jpg');">
                <div class="undercard">
                    <p style="color:red">5% OFF</p>
                    <p><b>Buy More & Save More</b> </p>
                    <p style="color:gray">Fresh vegetables</p>
                </div>
                <a href="#" class="btn btn-danger button">Shop Now!</a>
            </div>
            <div class="swiper-slide card" style="background-image: url('./img/eggs.jpg');">
                <div class="undercard">
                    <p style="color:red">3% OFF</p>
                    <p><b>Hot deals on new items</b> </p>
                    <p style="color:gray">Daily Essentials Eggs </p>
                </div>
                <a href="#" class="btn btn-danger button">Shop Now!</a>
            </div>
            <div class="swiper-slide card" style="background-image: url('./img/nuts.jpg');">
                <div class="undercard">
                    <p style="color:red">3% OFF</p>
                    <p><b>Buy More & Save More</b> </p>
                    <p style="color:gray">Nuts & Snacks</p>
                </div>
                <a href="#" class="btn btn-danger button">Shop Now!</a>
            </div>
            <div class="swiper-slide card" style="background-image: url('./img/fruit.jpg');">
                <div class="undercard">
                    <p style="color:red">2% OFF</p>
                    <p><b>Buy More & Save More</b> </p>
                    <p style="color:gray">Beverages</p>
                </div>
                <a href="#" class="btn btn-danger button">Shop Now!</a>
            </div>
        </div>
    </div>

    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 5,
            spaceBetween: 30,
            loop: true
        });
    </script>
    <div class="card-offers">
        <p class="offers"><b>Offers</b></p>
        <h3><b>Best Value</b></h3><br>


        <div class="undercard-offers">
            <h2 style="color:white"><b>Daily Essentials</b></h2>
            <h4 style="color:white">minimum 20% of everyday</h4>
            <img src="./img/offers.png" alt="" class="img1">

        </div>
        <div class="undercard-getup">
            <h2 style="color:white"><b>GET UP TO</b></h2>
            <h2 style="color:white"><b>30% OFF</b></h2>
            <a href="#" class="btn btn-dark button-offers">Shop Now</a>
            <img src="./img/vb1.png" alt="" class="img2">

        </div>
        <div class="undercard-discount">
            <h3 style="color:white">Special Discount for All Items</h3>
            <a href="#" class="btn btn-danger button-discount">Shop Now</a>
            <p id="demo"></p>
        </div>

    </div>
    <div class="undercard-cashback">
        <h4 style="color:white">Get $2 Cashback! Min Order of $22</h4>
        <a href="#" class="btn btn-danger button-cashback">USE CODE:GAMBOSUPER2 </a>
    </div>

<?php
    include 'footer.php';
?>