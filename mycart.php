<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
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
<style>
*
{
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
        .add {
            color: black;
            padding-top: 1%;
        }

        .add1 {
            position: absolute;
            color: black;
            text-align: center;
            bottom: 0;
            left: 10%;
            width: 80%;
        }

        .col-lg-8 {
            color: black;
            padding-top: 4%;
        }

        table,
        td,
        th {
            color: black;
            text-align: center;
            border: 1px solid;
        }

        table {
            width: 60%;
            color: black;
            border-collapse: collapse;
        }

        .btn.btn-sm.btn-outline-danger {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            border: 1px solid #dc3545;
            color: #dc3545;
            background-color: transparent;
        }

        .btn.btn-sm.btn-outline-danger:hover {
            color: #fff;
            background-color: #dc3545;
        }

        .btn.btn-sm.btn-outline-danger:focus {
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
        }

        .border {
            border: 1px solid #dee2e6;
        }

        .bg-light {
            background-color: #f8f9fa;
        }

        .rounded {
            border-radius: 0.25rem;
        }

        .p-4 {
            padding: 1.5rem;
        }

        .form-check {
            position: relative;
            display: block;
            padding-left: 1.25rem;
        }

        .form-check-input {
            position: absolute;
            margin-top: 0.3rem;
            margin-left: -1.25rem;
        }

        .form-check-label {
            margin-bottom: 0;
            padding-left: 1.25rem;
        }

        .text-center {
            text-align: center;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
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
        <li><a href="wpQR.jpg"><i id="heart" class="fa fa-heart" ></i></a></li>
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
    <div class="container">
        <div class="row">
            <div class="add">
                <center>
                    <h1>MY CART</h1>
                </center>
            </div>
            <div class="col-lg-8">
                <center>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Serial No.</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Item Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                    
                            if(isset($_SESSION['cart'])) {
                                foreach($_SESSION['cart'] as $key => $value) {
                                    $sr = $key + 1;
                                    echo "
                                    <tr>
                                        <td>$sr</td>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'</td>
                                        <td><input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1' max='10' data-key='$key'></td>
                                        <td class='itotal'></td>
                                        <td>
                                            <form action='manage_cart.php' method='POST'>
                                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                            </form>
                                        </td>
                                    </tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </center>
            </div>
            <div class="add1">
                <div class="border bg-light rounded p-4">
                    <h3>Grand Total:</h3>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                     <form action="signup.php" method="POST">
                        <br>
                        <button class="btn btn-primary btn-block">Make Purchase</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script >
var typed = new Typed(".text",
{
    strings: ["FREE SHIPPING ALL OVER INDIA"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});

   var gt=0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');
    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
           
          gt=gt+(iprice[i].value)*(iquantity[i].value);
        
        }
        gtotal.innerText=gt;

    }
subTotal();


</script>



</body>
</html>
