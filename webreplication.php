<?php
SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Diary Milk</title>
    <link rel="stylesheet" href="webcss.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  </head>
  <body>
    <header class="header">
        <span class="text"></span>
        <ul>
        <li><a href="wpQR.jpg"><i id="heart" class="fa fa-heart" ></i></a></li>
        <?php
  $count=0;
  if(isset($_SESSION['cart']))
  {
    $count=count($_SESSION['cart']);
  }
?>
        <li><a href="mycart.php"><i class="fa fa-cart-plus"></i>My cart(<?php echo $count; ?>)</a></li>
        </ul>
  </header>
  <div id="header1">
        <img src="logo.webp" alt="logo"></img>  
    <ul>
    <li><input role="searchbox" id="search-field-dt" class="search-field js-search-field p-2" aria-label="Search for recipes, ingredients, products" placeholder="Search for chocolates and gifts" value=""><button type="submit"><i class="fa fa-search"></i></button></li>
    <li><a href=#>BLOGS</a></li>
    <li><a href=#>FAQ</a></li>
    <li><a href=#>ABOUT US</a></li>
    </ul>
    </div>
    <div id="header2">
        <h3 id="g1">Occasions</h3>
        <ul>
        <li><a href="webvel.html">Women's Day Gifts</a></li>
        <li><a href="webreplication.php">Personalised Gifts</a></li>
        <li><a href="webmix.html">Pick & Mix Gifts</a></li>
        <li><a href=https://trackcourier.io/>Track My Order</a></li>
        <li><a href=#content1>Gift Cards</a></li>
        <?php
  $count=0;
  if(isset($_SESSION['cart']))
  {
    $count=count($_SESSION['cart']);
  }
?>
        <li><a href="mycart.php"><i class="fa fa-cart-plus"></i>My cart(<?php echo $count; ?>)</a></li>
        <li><a href="signup.php"><i class="fa fa-user-circle-o"></i> LOG IN/REGISTER</a></li>
        </ul>
    </div>
    <div id="content1">
        <img src="dairymilk.png" alt="Poster"></img>
    </div>
    <div class="s-card">
        <div class="s-crd">
           
            <img src="c2.png" alt="">
            </a>
           <div class="inner">
            <h4>Personalised Silk Bar</h4>
            <h4>₹500(Incl. of all taxes)</h>
            <br><br><br>
            <a href="C1.php"><button>Order Now</button></a>
           </div>
        </div>
        <div class="s-crd">
            <img src="dairy1.jpg" alt="">
        </a>
            <div class="inner">
                <h4>Personalised Satin Potli (Large)</h4>
                <h4>₹900(Incl. of all taxes)</h>
                    <br><br><br>
                <a href="C2.php"><button>Order Now</button></a>
            </div>
        </div>
        <div class="s-crd">
            <img src="dairy2.jpg" alt="">
        </a>
            <div class="inner">
                <h4>Personalised Silk Best Mom Gift Box with Photoframe</h4><h4>₹1000(Incl. of all taxes)</h>
                    <br><br>
                <a href="c3.php"><button>Order Now</button></a>
            </div>
        </div>
    </div>
    <div class="s-card">
        <div class="s-crd">
            <img src="c4.png" alt="">
            </a>
           <div class="inner">
            <h4>Personalised Silk Anniversary Heart Box with Photoframe </h4>
            <h4>₹1000(Incl. of all taxes)</h>
                <br><br><br>
                <a href="c4.php"><button>Order Now</button></a>
           </div>
        </div>
        <div class="s-crd">
            <img src="c5.png" alt="">
        </a>
            <div class="inner">
                <h4>Personalised Anniversary Tin Box
                    360g </h4>
                    <h4>₹800(Incl. of all taxes)</h>
                        <br><br><br>
                        <a href="c5.php"><button>Order Now</button></a>
            </div>
        </div>
        <div class="s-crd">
            <img src="c6.png" alt="">
        </a>
            <div class="inner">
                <h4>Happy Birthday Tin Box and Personalised Photo Frame</h4>
                <h4>₹1200(Incl. of all taxes)</h>
                    <br><br><br>
                    <a href="c6.php"><button>Notify Me</button></a>
            </div>
        </div>
    </div>
    <div class="s-card">
        <div class="s-crd">
            <a href="https://cadburygifting.in/personalised-gifts/birthday-tin-box-and-personalised-photo-frame.html?sku=Birthday%20Tin%20Box%20and%20Personalised%20Photo%20Frame">
            <img src="dairy5.jpg" alt="">
            </a>
           <div class="inner">
            <h4>Happy Birthday </h4>
            <button>Order Now</button>
           </div>
        </div>
        <div class="s-crd">
            <a href="https://cadburygifting.in/pick-n-mix-personalised-premium-gift-bag-large.html?sku=Pick_Mix_Personalised_Premium_Gift_Bag_Large">
            <img src="dairy1.jpg" alt="">
        </a>
            <div class="inner">
                <h4>Personalised</h4>
                <button>Order Now</button>
            </div>
        </div>
        <div class="s-crd">
            <a href="https://cadburygifting.in/happy-anniversary-heart-shape-box.html?sku=Happy_Anniversary_Heart_shape_box">
            <img src="dairy2.jpg" alt="">
        </a>
            <div class="inner">
                <h4>Personalised</h4>
                <button>Order Now</button>
            </div>
        </div>
    </div>
    <div id="con2">
        <center>
            <h1>Personalised Gifts</h1>
        </center>
        <div class="card">
            <div class="crd">
                <a href="https://cadburygifting.in/personalised-silk-bar-plain.html?sku=Silk_260_Personalised_Bar">
                <img src="di1.jpg" alt="">
            </a>
                <h3>Personalised Silk Bar</h3>
            </div>
            <div class="crd">
                <img src="di2.jpg" alt="">
                <h3>Cadbury Silk Valentines Dessert Date Box</h3>
            </div>
            <div class="crd">
                <img src="di3.jpg" alt="">
                <h3>Personalised Valentines Tin Box with Photoframe</h3>
            </div>
            <div class="crd">
                <img src="di4.jpg" alt="">
                <h3>Silk Bar with Dessert Date Box</h3>
            </div>
        </div>
        <div class="card">
            <div class="crd">
                <img src="di5.jpg" alt="">
                <h3>Personalised Congrats Gift Box</h3>
            </div>
            <div class="crd">
                <img src="di6.jpg" alt="">
                <h3>Personalised Silk Bar - Best Brother</h3>
            </div>
            <div class="crd">
                <img src="di7.png" alt="">
                <h3>Personalised Anniversary Tin Box</h3>
            </div>
            <div class="crd">
                <img src="di8.jpg" alt="">
                <h3>Personalised Warm Wishes Chocolate Potli with </h3>
            </div>
        </div>    
    </div>
  
<div id="con10">
    <div id="head">
    <center>
        <h1>Recommended for You</h1>
    </center>
    </div>
    <br>
    <br>
    <div id="con1">
        
        <img src="di6.jpg" alt="Chocolate"></img>

        <h3>Cadbury Love Gift Box</h3>
        <br>
        <h4>400g
            <br>
            ₹1050(Incl. of all taxes)</h4>
            <br>
            <a href="https://cadburygifting.in/personalised-love-gift-box.html">
        <b class="t1">Order Now</b>
        </a>
    </div>

    <div id="con3">
        <img src="di7.png" alt="Chocolate"></img>
     <h3>Cadbury Valentines  Box</h3>
        <br>
        <h4>355g
            <br>
            ₹850(Incl. of all taxes)</h4>
            <br>
        <b class="t1">Order Now</b>
    </div>

    <div id="con4">
        <img src="di8.jpg" alt="Chocolate"></img>
        <h3>Cadbury Silk Valentines Box</h3>
        <br>
        <h4>655g
            <br>
            ₹1850(Incl. of all taxes)</h4>
        <br>
        <b class="t1">Order Now</b>
    </div>

    <div id="con5">
        <img src="di4.jpg" alt="Chocolate"></img>
        <h3>Personalised Anniversary Tin Box</h3>
        <br>
        <h4>705g
            <br>
            ₹1100(Incl. of all taxes)</h4>
            <br>
        <b class="t1">Order Now</b>
    </div>
</div>
<div id="detail">
    <br>
    <br>
    <center>
    <h1><i>Personalised Chocolate Gifts Online</i></h1>
</center>
<br>
<br>
    <h3><i>The trend of gifting has changed over time. Today, the idea of personalisation has started trending for every occasion, be it birthdays, anniversaries or festivals.
        Personalised gifts double the joy of gifting and leaves a long-lasting impression on the receiver. 
        With so many gifting occasions coming this year, such as Raksha Bandhan, Diwali, Valentine’s Day, buy personalised gifts for your dear and near ones to make them feel extra special on every occasion.</i></h3>
    <br>
    <center> <h1><i>Why choose Personalised Chocolate Gifts at Cadbury?</i></h1></center>
    <br>
    <h3><i>
        Cadbury personalised chocolate gifts are unique, which offer an array of choices based on everyone’s budget and preference. Besides, Cadbury chocolates are made with love that promises high-quality for a better shopping experience. The usage of qualitative products in the making of Cadbury chocolates is easy on every individual’s pocket that is available in the Indian market at a competitive price.</i></h3>
    <br>
    <a href=""><h1 class="t2">Read More......</h1></a>
    <br>
    <div>
    <img src="poster.png" alt="Poster" usemap="#image-map">
     <map name="image-map"><area target="" alt="" title="" href="weblogin.html" coords="57,380,73,351,107,336,150,334,835,339,866,373,854,349,859,402,837,421,85,421,73,409" shape="poly"></map>
    </div>
</div>
<div class="footer">
    <div class="list">
        <p>POPULAR OCCASIONS</p> <br>
        <p>Birthday</p>
        <p>Anniversary</p><br>
        <p>Kid's Gifts</p><br>
        <p>Valentine's Gifts</p>
        <br>
        <br>
       <p>SELLERS HELPDESK</p>
       <br>
       <p>How To Order</p>
       <br>
        <p>Seller's T&Cs</p>
        <br>
        <br>
        <p>VALENTINE WEEK</p>
        <br><br>
<p>Rose Day - February 7</p><br>
<p>Propose Day - February 8</p><br>
<p>Chocolate Day - February 9</p><br>
<p>Teddy Day - February 10</p><br>
<p>Promise Day - February 11</p><br>
<p>Hug Day - February 12</p><br>
<p>Kiss Day - February 13</p>

    </div>
    <div class="list">
      <p>CADBURY INDIA</p><br>
      <br>
      <p>  Blogs</p><br>
      <p>FAQs</p><br>
      <p>About Us</p><br>
      <br>
      <p>VALENTINE GIFTS</p><br>
      <br>
      <p>Valentine Gift for Husband</p><br>
      <p>Valentine Gift for Wife</p><br>
      <p>Valentine Gift for Boyfriend</p><br>
      <p>Valentine Gift for Girlfriend</p><br>
      <p>Valentine Gift for Him</p><br>
      <p>  Valentines Gift for Her</p><br>
      <p> Valentines Gift for Friends</p>
    </div>
    <div class="list">
        <p>POPULAR OCCASIONS</p>
        <br>
        <br>
        <p>Birthday</p><br>
        <p>Anniversary</p><br>
        <p>Kid's Gifts</p><br>
        <p>Valentine's Gifts</p><br>
        <p>Mother's Day Gifts</p><br>
        <p>Baby Shower</p><br>
        <p>Gift For Self Indulgence</p><br>
        <p>Christmas And New Year</p><br>
        <p>Diwali Gifts</p><br>
        <p>Rakhi Gifts</p><br>
        <p>Holi Gifts</p><br>
        <p>Women's Day Gifts</p><br>
        <p>Father's Day Gifts</p><br>
        <p>Bhai Dooj</p><br>
        <p>Ramadan Gifts</p><br>
        <p>Dussehra Gifts</p><br>
    </div>
    <div class="list">
        <p>CADBURY INDIA</p><br>
        <p>Address: Unit No. 2001, 20th
            <br>
            Floor, Tower - 3 Wing- C, 
            <br>
            One International Center,
            <br> 
            Parel, Mumbai - 400 013
            <br>
            Phone: 1800-227-080</p>
            <br>
            <br>
            <p>Prestige FSSAI License No:<br>
                11521018000273 (Mumbai)<br>
                11221334000184 (Bangalore)<br>
                10822017000057 (Gurgaon)</p>
                <br>
                <a href=""><img src="logo1.png" alt=""></a>

    </div>
</div>

  <script src="webjs.js"></script>
  <script>
        // Function to filter and display images based on search input
        function filterImages() {
            var searchValue = document.querySelector('input[type="text"]').value.toLowerCase();
            var cards = document.querySelectorAll('.card');
            var visibleCardsCount = 0;

            cards.forEach(function(card) {
                var label = card.querySelector('.label').innerText.toLowerCase();

                if (label.includes(searchValue)) {
                    card.style.display = 'block'; // Show the card
                    visibleCardsCount++;
                } else {
                    card.style.display = 'none'; // Hide the card
                }
            });

            // Show or hide the "No results available" message
            var noResultsMessage = document.querySelector('.no-results');
            noResultsMessage.style.display = (visibleCardsCount === 0) ? 'block' : 'none';
        }

        // Add event listener to the search input
        document.querySelector('input[type="text"]').addEventListener('input', filterImages);

        // Call filterImages initially to handle initial filtering
        filterImages();
    </script>


  </body>
</html>

   