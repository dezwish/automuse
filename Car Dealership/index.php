<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include('./server/connection.php'); ?>
<?php include('./server/code.php'); ?>
<?php include('./server/featured.php'); ?>


    <div class="navbar">
        <div class="nav">
            
            <div class="logo"><img src="./automuse.png" alt="" width="120px"></div>
    
            <div class="vert">
                     
                <div class="vert1">
                    <ul>
                        <li><a href="#">Vehicles<i class="fa-solid fa-angle-down"></i></a></li>
                        <li><a href="#">Auction<i class="fa-solid fa-angle-down"></i></a></li>
                        <li><a href="#">Buying<i class="fa-solid fa-angle-down"></i></a></li>
                        <li><a href="#">Selling<i class="fa-solid fa-angle-down"></i></a></li>
                        <li><a href="#">Company<i class="fa-solid fa-angle-down"></i></a></li>
                        <li><a href="#">Help<i class="fa-solid fa-angle-down"></i></a></li>
                    </ul>
                </div>
    
    
            </div>
            
            <div class="userButtonsContainer">
                <button type="button" class="userButtons">Register</button>
                <button type="button" class="userButtons">Sign in</button>
            </div>
    
        </div>
    
    </div>
    <div class="searchbar">
        <input type="text" placeholder="Looking for something?">
        <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>

    <section class="hero">
        <div class="heroContent">
            <h1 style="font-size: 5rem;">Used Cars, Smart Choices</h1>
            <!-- <h2 style="font-size: 2rem;">Find your next adventure on four wheels.</h2> -->
            <h2 style="font-size: 2rem;"><span id="typewriter"></span> <span id="cursor" style="color: #BE3144;">|</span></h2>
            <h2>Explore our vast selection of pre-owned vehicles, all ready to hit the road.</h2>
        </div>

        <div class="heroButtons">
            <button><span>See What's Hot</span></button>
            <button><span>Start Browsing</span></button>
            <button><span>Sell Your Car</span></button>
        </div>

    </section>

    <div class="stats">
        <span>Listings Online: </span>
        <span>Registered Users: </span>
        <span>Live Auctions: <?php echo $count ?></span>
        <span id="time"></span> 
    </div>

    <section class="hotPicks">

            <span style="color: #0F0F0F; font-weight: bolder; font-size: 2.5rem;">FEATURED INVENTORY</span>
           
            <div class="hotPicksSlide" draggable="false">
                <i class="fa-solid fa-circle-arrow-left" id="left-arrow"></i>
                
                

                <?php while($row = $featured->fetch_assoc()){ ?>

                    <div class="contentSlide">
                    <div class="imgCont"><img class="product-image" style="border-radius: 25px 25px 0px 0px;" src="<?php echo $row['vehicle_img1'] ?>" alt=""></div>
                    <div class="contSlideText">
                        <strong class="product-name" style="padding: 10px 0 5px 0;"><?php echo $row['vehicle_name'] ?></strong>
                        <span class="product-title">id # <span class="product-id" style="color: blue;"><?php echo $row['vehicle_id'] ?></span></span>
                        <span class="product-title">Current bid: <span class="bid-amount" style="color: green; font-size: 20px; font-weight: bold;">$<?php echo $row['vehicle_buy_price']?></span><span style="font-weight: 400; color: #0F0F0F;"> USD</span></span>
                        <span class="product-title">Location: <span class="product-location" style="font-weight: 400; color: #0F0F0F;"><?php echo $row['vehicle_location'] ?></span></span>
                    </div>
                    <div class="content-slide-buttons">
                        <button type="button" style="padding: 10px 40px; cursor: pointer; background-color: #BE3144; color: whitesmoke; border-radius: 20px; border: none;">View details</button>
                        <button type="button" style="color: #BE3144; background: none; border: none; cursor: pointer; font-weight: bold; font-size: 16px;"><i class="fa-regular fa-star" style=" font-size: 18px;"></i> Save</button>
                    </div>
                </div>
                
                <?php } ?>
                
                <div class="seemore">
                    <h3>See More</h3>
                </div>

                <i class="fa-solid fa-circle-arrow-right" id="right-arrow"></i>
            </div>


            

    </section>
<!-- 
    <section class="preFooter">

        <div class="imgSlide"></div>

        <div class="preFooterCont">
            <h1 class="reveal-type">Why AutoMuse</h1>
            <ul>
                <li class="reveal-type"><span><i class="fa-regular fa-square-check"></i> Wide Selection</span></li>
                <p class="reveal-type">- Hundereds of different cars evey week. <br>
                    - Cars and commercial vehicles.</p>
                <li class="reveal-type"><span><i class="fa-regular fa-square-check"></i> Lowest Price Guarantee</span></li>
                <p class="reveal-type"> - Clear pricing - there are no surprises. <br>
                    -You only pay for the car, its transportation and documents.</p>
                <li class="reveal-type"><span><i class="fa-regular fa-square-check"></i> Logistic Services</span></li>
                <p class="reveal-type">- Transportation monitoring and document logistics. <br>
                    - Reliable carriers.</p>
            </ul>
        </div>

    </section> -->
    
   
    <section class="why-automuse">
        <h1 style="font-size: 2rem;">Why Automuse?</h1>
        <div class="why-cards-cont">
            <div class="why-card">
                <img width="20%" src="./car-key (1).png" alt="">
            <h2>Flexible Financing Options</h2>
                <p>Quick, flexible and online! Get instant approvals for monthly installment plans</p>
            </div>
            <div class="why-card">
                <img width="20%" src="./sedan.png" alt="">
                <h2>Wide Selection</h2>
                <p>Hundereds of different cars every week, Cars and comercial vehicles</p>
            </div>
            <div class="why-card">
                <img width="20%" src="./car-insurance.png" alt="">
                <h2>Fixed Price Assurance</h2>
                <p>Get a fair and fixed price that saves you from the unnecessary haggles and negotiations</p>
            </div>
            <div class="why-card">
                <img width="20%" src="./maintenance.png" alt="">
                <h2>Logistic Services</h2>
                <p>Transportation monitoring and document logistics, Reliable carriers</p>
            </div>
            <div class="why-card">
                <img width="20%" src="./rental-car.png" alt="">
                <h2>Delivered at your Doorstep</h2>
                <p>Your car will be delivered at the comfort of your home, or pick-it up from our Automuse Hub</p>
            </div>
            <div class="why-card">
                <img width="20%" src="./car-wash.png" alt="">
                <h2>Lowest Price Guarantee</h2>
                <p>You only pay for the car, its transportation and documents</p>
            </div>


        </div>
    </section>

    <section class="registerSec">
        <h1 style="font-size: 2rem; padding: 20px;">Why Automuse?</h1>
        <div class="cardsCont">
            <div class="card" id="card1">
                <h3>Create your account</h3>
                <p>Easy sign up process, unlock lots of features including</p>
                <ul style="list-style: none; text-align: left; font-size: 13.4px;">
                    <li>-Save listings you like</li>
                    <li>-List your vehicles for sale</li>
                    <li>-Get weekly updates and recommendations</li>
                </ul>
                <button><span>Sign Up</span></button>
            </div>

            <div class="card" id="card2">
                <h3>Find the perfect choice</h3>
                <p>Look through thousands of vehicles using our search filters to help you find what you're looking for.</p>
            </div>

            <div class="card" id="card3">
                <h3>Place your bid</h3>
                <p>Bid on daily auctions</p>
            </div>

            <div class="card" id="card4"><h3>Still need help?</h3>
                <p>check out our <a href="#">FQA</a> section or <a href="#">contact</a> us for more help.</p>
            </div>
        </div>
    </section>
 
    <section class="sell-car">
        <div class="sell-car-cont">
            <div class="sell-car-text"><h1>Want to sell your car?</h1>
        <p>We have everything that makes it easier for you to sell your car on our platform quickly</p></div>
        <div class="sell-car-img"><img src="./honda-car-honda-incentives-specials-offers-avon-29.png" alt=""></div>
        <div class="graphics">
            <div class="sell-car-shape"></div>
            <div class="sell-car-shape s2"></div>
        </div>
        </div>
    </section>

    <section class="browse">
    <?php include('./server/code.php'); ?>

        <h3 style="font-size: 2rem; font-weight:bold;">Browse most common vehicles</h3>

        <div class="browse_vehicles">
            <?php while($row = $bom->fetch_assoc()){
                $manufacture = $row['vehicle_manufacture'];
                echo '<a href="">' . $manufacture . "</a>";
            }?>
            </div>
    </section>
    <footer>
        <div class="footerCol">
            <div class="footerCol2" style="gap: 50px;">

                <img src="./automuse.png" width="200px" alt="">

                <div>
                    <h4>Follow us</h4>
                    <div class="icon">
                        <i class="fa-brands fa-square-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-square-twitter"></i>
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-square-youtube"></i>
                    </div>
                </div>
            </div>

            <div class="footerCol2">
                <h4>Get to know us</h4>
                <a href="">Careers</a>
                <a href="">About us</a>
                <a href="">Locations</a>
                <a href="">Community</a>
            </div>

            <div class="footerCol2">
                <h4>Find a vehicle</h4>
                <a href="">Search filters</a>
                <a href="">Watchlist</a>
                <a href="">Featured listings</a>
            </div>

            <div class="footerCol2">
                <h4>Auctions</h4>
                <a href="">Today's auctions</a>
                <a href="">Auctions calendar</a>
                <a href="">Join auctions</a>
                <a href="">Community</a>
            </div>
            
            <div class="footerCol2">
                <h4>Support</h4>
                <a href="">How to buy</a>
                <a href="">FAQ</a>
                <a href="">Contact us</a>
            </div>
            
            <div class="footerCol2" style="gap: 30px;">
                <div>
                    <h4>Download our app</h4>
                    <p>Available now on App Store and Google Play</p>
                </div>
                <div>
                    <a href=""><img style="border-radius: 25px;" src="./app.jpg" alt=""></a>
                    <a href=""><img style="border-radius: 25px;" src="./play.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div style="text-align: center; color: #FCF5ED;">Copyright 2024 AUTOMUSE. All Rights Reserved.</div>
    </footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/TextPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/split-type"></script>
<script src="https://cdn.jsdelivr.net/gh/studio-feight/lenis@1.0.19/bundled/lenis.min.js"></script>
<script src="https://unpkg.com/@studio-freight/lenis@1.0.35/dist/lenis.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    gsap.registerPlugin(ScrollTrigger)

    const splitTypes = document.querySelectorAll('.seemore')

    splitTypes.forEach((char, i) => {

        const text = new SplitType(char, {types: 'chars, words'})

        gsap.from(text.chars, {
            scrollTrigger: {
                trigger: char,
                start: 'x 0px',
                end: 'x 10px',
                scrub: true,
            },
            // y:20,
            opacity: 0,
            stagger: 0.1
        })
    })

    const lenis = new Lenis()

    lenis.on('scroll', (e) => {
    console.log(e)
    })

    function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)
    
</script>

<script src="./script.js"></script>

</body>
</html>