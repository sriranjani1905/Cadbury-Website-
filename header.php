<?php
SESSION_START();
?>
<html>
<style>
*{
    margin: 0;
    padding:0;
    box-sizing: border-box;
    font-family: 'poppins','sans-serif';
}
body{
    color: #ededed;
    background: #fff;
}
.header
{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 10px 10%;
    background: #472f92;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}
#heart:active {
    color:red;
  }
  #heart:visited {
    color: red;
  }

  #heart:hover {
    color: red;
  }

.header ul
{
float:right;
}
.header ul li
{
display:inline;
margin-right:22px;
}
.header ul li a
{
color:white;
text-decoration:none;
}

#header1
{
    
background-color:#2d006b;
height:110px;
}


#header1 ul
{
float:right;
padding-top:75px
}
#header1 ul li
{
display:inline;
margin-right:32px;
}
#header1 ul li a
{
color:white;
text-decoration:none;
font-size:15px;
}
#header2
{
background-color:#2d006b;
height:25px;
}
#header2 #g1
{
color:white;
font-size:25px;
height:10px;
float:left;
}

#header2 ul
{
float:right;
padding-top:0px
}
#header2 ul li
{
display:inline;
margin-right:32px;
}
#header2 ul li a
{
color:white;
text-decoration:none;
font-size:15px;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>CART</title>
    <link rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  </head>

  <body>
  <header class="header">
        <span class="text"></span>
        <ul>
        <li><a href="wpQR.jpg"><i id="heart" class="fa fa-heart" ></i></a></li>
        <li><a href=""><i class="fa fa-cart-plus"></i></a></li>
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
            <li><a href="webmix.php">Pick & Mix Gifts</a></li>
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
        <li><a href="weblogin.html"><i class="fa fa-user-circle-o"></i> LOG IN/REGISTER</a></li>
        </ul>
    </div>
</body>
</html>
<script >
var typed = new Typed(".text",
{
    strings: ["FREE SHIPPING ALL OVER INDIA"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});
</script>