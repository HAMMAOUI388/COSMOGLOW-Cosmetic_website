<?php
// start session
session_start();
require_once('component.php');
require_once('conn_db.php');
// creat instance of the class
$database= new creatdb("Panier1","product");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CosmoGlow Beauty</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </head>
<body>

<section id="home">
    <div style="width: 1920px;  position: relative; background: white">
      <div style="left: 0px; top: 0px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
        <div style="width: 1920px; height: 1163px; background: #D6BFAE"></div>
        <div style="width: 1920px; height: 811px; left: 0px; top: 260px; position: absolute">
          
          <div style="width: 737px; left: 785px; top: 136px; position: absolute; text-align: center; color: black; font-size: 70px; font-family: Abhaya Libre; font-weight: 700; letter-spacing: 5px; word-wrap: break-word">we offer a wealth of additional resources to support your beauty journey</div>
        
          <div style="width: 380px; height: 80px; left: 770px; top: 731px; position: absolute">
            <div style="width: 380px; height: 80px; left: 0px; top: 0px; position: absolute; background: black"></div>
    
            <div >
              <a href="allproduct.php"  style="left: 99px; top: 21px;text-decoration: none; background: black; position: absolute; color: white; font-size: 25px; font-family: Poppins; font-weight: 700; letter-spacing: 6.25px; word-wrap: break-word">SHOP NOW</a>
          </div>
          
          </div>
          <img style="width:900; height: 555px; left: 365px; background:#D6BFAE; top: 0px; position: absolute; " src="1689868012689-removebg-preview.png" class="product" />
        </div>
      </section>
        <div style="width: 1725px; height: 95px; left: 95px; top: 49px; position: absolute">
          <div style="left: 0px; top: 0px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
            <div><span style="color: #E79D58; font-size: 50px; font-family: The Nautigal; font-weight: 400; letter-spacing: 12.50px; word-wrap: break-word">CO</span><span style="color: black; font-size: 30px; font-family: The Nautigal; font-weight: 400; letter-spacing: 7.50px; word-wrap: break-word">SMO</span></div>
            <div style="color: black; font-size: 30px; font-family: Abhaya Libre; font-weight: 700; letter-spacing: 7.50px; word-wrap: break-word">GLOW</div>
          </div>
          <div style="left: 626px; top: 24px; position: absolute; justify-content: center; align-items: center; gap: 40px; display: inline-flex">
            <div >
              <a href="#home" style="color: black;text-decoration: none; font-size: 16px;border: none;background: #D6BFAE; font-family: Poppins; font-weight: 700; text-decoration: underline; word-wrap: break-word" >Home</a>
             </div>
            <div >
              <a href="moreaboutus.html"  style="color: black; font-size: 16px;text-decoration: none; border: none;background: #D6BFAE;font-family: Poppins; font-weight: 600; word-wrap: break-word" >About US</a>
             </div>
            <div >
              <a href="allproduct.php"  style="color: black;text-decoration: none; font-size: 16px;border: none;background: #D6BFAE; font-family: Poppins; font-weight: 600; word-wrap: break-word" >Product</a>
              </div>
            <div >
              <a href="#trends" style="color: black; font-size: 16px;text-decoration: none; border: none;background: #D6BFAE; font-family: Poppins; font-weight: 600; word-wrap: break-word" >Trends</a>
              </div>
            <div >
              <a href="signup.html"  style="color: black; text-decoration: none; font-size: 16px;border: none; background: #D6BFAE;font-family: Poppins; font-weight: 600; word-wrap: break-word">SIGN UP</a>
             </div>
          </div>
          <div style="width: 227px; left: 1498px; top: 27px; position: absolute; justify-content: center; align-items: center; gap: 40px; display: inline-flex">
            <div style="width: 30px; height: 30px; position: relative">
              <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
               
    
                <div style="width: 30px; height: 30px; position: relative">
                  <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
        
                    <a href="panier.php"><img src="carte (1).png" alt="panier" width="35" height="35" class="product"> </a>
                  
                  </div>
                </div>
    
    
               
              </div>
              
            </div>
            <div style="width: 30px; height: 30px; position: relative">
              <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
    
              <a href="mainaccount.php"> <img src="contact.png" alt="contact" width="35" height="35"class="product" /> </a> 
              
              </div>
            </div>
            <div style="width: 90px; height: 30px; position: relative">
              <div style="width: 90px; height: 30px; left: 0px; top: 0px; position: absolute; border: 0.50px black solid"></div>
              <div >
              <a href="login.html" style="left: 19px; top: 3px;text-decoration: none; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">LOGIN</a>
          </div>  
          </div>
          </div>
        </div>
      </div>
      
      <div style="width: 1920px; height: 1021px; left: 0px; top: 1163px; position: absolute">
        <div style="width: 1718px; height: 703px; left: 101px; top: 308px; position: absolute">
          <div style="height: 147px; left: 168px; top: 441px; position: absolute; flex-direction: column; justify-content: center; align-items: center; gap: 27px; display: inline-flex">
            
            <div style="text-align: center; color: #0C0C0C; font-size: 30px; font-family: Futura; font-weight: 500; word-wrap: break-word">COSMO GLOW Your Destination for Radiant Beauty!</div>
            <div style="width: 380px; height: 80px; position: relative">
              <div style="width: 380px; height: 80px; left: 0px; top: 0px; position: absolute; background: black"></div>
              <div >
                  <a href="moreaboutus.html" style="left: 51px; top: 21px;background: black;text-decoration: none; position: absolute; color: white; font-size: 25px; font-family: Poppins; font-weight: 700; letter-spacing: 6.25px; word-wrap: break-word" >MORE ABOUT US</a> 
                  </div>
            </div>
          </div>
          
          <img style=" max-width: 100%; height:650px; left: 1100px; top: 0px; position: absolute; border-top-left-radius: 150px; border-top-right-radius: 150px" src="1690282639883.jpg" class="product" />
          <div style="width: 971px; height: 352px; left: 62px; top: 22px; position: absolute; text-align: center; color: #0C0C0C; font-size: 40px; font-family: Futura; font-weight: 500; word-wrap: break-word">We understand the importance of self-care and embracing 
          your natural beauty. From the moment you land on our homepage, you'll be captivated by our modern and visually stunning design, guiding you effortlessly towards the products that will unleash your inner radiance.</div>
          <div style="width: 285px; height: 285px; left: 5px; top: -21px; position: absolute; opacity: 0.21; background: #EEDDCC"></div>
        </div>
        <section id="aboutus">
        <div style="left: 846px; top: 109px; position: absolute; text-align: center"><span style="color: black; font-size: 60px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word">About </span><span style="color: #B27C64; font-size: 60px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word">Us</span></div>
      
      </div>
    </section>
      <div style="width: 1900px; height: 1155px; left: 0px; top: 2393px; position: absolute">
        <div style="width: 1780px; height: 1184px; left: 75px;top: 0px; position: absolute; background: #78645D"></div>
        <div style="width: 528px; height: 80px; left: 694px; top: 1046px; position: absolute">
          <div style="width: 528px; height: 80px; left: 0px; top: 0px; position: absolute; background: black"></div>
          <div >
             <a href="allproduct.php"  style="left: 36px;text-decoration: none; top: 21px; position: absolute; color: white; background-color: #0C0C0C; font-size: 25px; font-family: Poppins; font-weight: 700; letter-spacing: 6.25px; word-wrap: break-word" > DISCOVER OUR PRODUCTS</a>
              </div>
        </div>
        <div style="width: 795px; height: 704px; left: 1020px; top: 184px; position: absolute">
          <div style="width: 881px; height: 190px; left: 0px; top: 514px; position: absolute">
            <div style="width: 795px; height: 190px; left: 0px; top: 0px; position: absolute; background: #EEDDCC; border-top-left-radius: 70px"></div>
            <div style="width: 674px; left: 83px; top: 48px; position: absolute; justify-content: center; align-items: center; gap: 22px; display: inline-flex">
              <div style="width: 235px; height: 93px; position: relative">
                <div style="width: 96px; height: 42px; left: 69px; top: 0px; position: absolute; color: black; font-size: 30px; font-family: Abhaya Libre; font-weight: 400; line-height: 45px; word-wrap: break-word">2022</div>
                <div style="width: 241px; left: -3px; top: 48px; position: absolute; color: black; font-size: 20px; font-family: Futura; font-weight: 500; line-height: 45px; word-wrap: break-word">COSMO GLOW Founded</div>
              </div>
              <div style="width: 276px; height: 93px; position: relative">
                <div style="width: 123px; height: 42px; left: 76px; top: 0px; position: absolute; color: black; font-size: 30px; font-family: Abhaya Libre; font-weight: 400; line-height: 45px; word-wrap: break-word">1200+</div>
                <div style="width: 128px; left: 73px; top: 47px; position: absolute; color: black; font-size: 20px; font-family: Futura; font-weight: 500; line-height: 45px; word-wrap: break-word">Product Sold</div>
              </div>
              
              <div style="width: 250px; height: 93px; position: relative">
                <div style="width: 123px; height: 42px; left: 63px; top: 0px; position: absolute; color: black; font-size: 30px; font-family: Abhaya Libre; font-weight: 400; line-height: 45px; word-wrap: break-word">3500+</div>
                <div style="width: 129px; left: 60px; top: 42px; position: absolute; color: black; font-size: 20px; font-family: Futura; font-weight: 500; line-height: 45px; word-wrap: break-word">Best Reviews</div>
              </div>
            </div>
          </div>
           
          <div style="height: 438px; left: 0px; top: 0px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 60px; display: inline-flex">
            <section id="trends">
            <div style="width: 600px; "><span style="color: black; font-size: 60px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word">Our </span><span style="color: #EEDDCC; font-size: 60px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word">Trend</span><span style="color: black; font-size: 60px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word"> Products</span></div>
            <div style="width: 763px; height: 236px; color: black; font-size: 45px; font-family: Futura; font-weight: 500; line-height: 60px; word-wrap: break-word">Discover a world of beauty possibilities as you explore our extensive collection of skincare, makeup, fragrances, and haircare products.</div>
          </div>
        </div>
        <img style="width: 770px; height: 960px; left: 160px; top: 30px; position: absolute; border-top-left-radius: 220px" src="Circumference — Future Forward Skincare.jpeg" class="product"/>
      </div>
    </section>
      <div style="width: 1720px; height: 871px; left: 100px; top: 3670px; position: absolute">
        <div style="width: 375.44px; height: 386.42px; left: 1719.44px; top: 387.06px; position: absolute; transform: rotate(-179.90deg); transform-origin: 0 0; opacity: 0.60; background: linear-gradient(360deg, #D3A17E 0%, rgba(211, 161, 126, 0) 100%)"></div>
        <div style="width: 600px; left: 203px; top: 111px; position: absolute; color: black; font-size: 70px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word">Best Seller Product</div>
        <div style="width: 950px; height: 425px; left: 9px; top: 291px; position: absolute; text-align: center; color: black; font-size: 45px; font-family: Futura; font-weight: 500; word-wrap: break-word">Our exquisite fragrances captivate with a harmonious blend of vibrant top notes, captivating heart notes, and lingering base notes.  Experience the essence of luxury with our irresistible collection of scents.</div>
        <div style="width: 306px; height: 80px; left: 331px; top: 754px; position: absolute">
          <div style="width: 306px; height: 80px; left: 0px; top: 0px; position: absolute; background: black"></div>
          <div >
              <a href="bestseller.html"  style="left: 71px; top: 21px; text-decoration: none; position: absolute; color: white; font-size: 25px; font-family: Poppins; background-color: #0C0C0C; font-weight: 700; letter-spacing: 6.25px; word-wrap: break-word">SEE MORE</a>
              </div>
        </div>
        
        
        <img style="width: 685px; height: 694px; left: 1017px; top: 22px; position: absolute; border-top-left-radius: 225px" src="1689870052841.jpg" class="product"/>
        <div style="height: 175px; padding-left: 41px; padding-right: 41px; padding-top: 14px; padding-bottom: 14px; left: 1017px; top: 716px; position: absolute; background: white; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
          <div style="width: 156px; justify-content: flex-start; align-items: flex-start; gap: 6px; display: inline-flex">
           
            

  

          </div>
          <div style="width: 551px; height: 43px; color: black; font-size: 30px; font-family: Futura; font-weight: 700; word-wrap: break-word">Chanel N°5 Eau De Parfum Spray</div>
          <div style="width: 418px; height: 40px"><span style="color: #7B7B7B; font-size: 25px; font-family: Futura; font-weight: 500; text-decoration: line-through; word-wrap: break-word">330MAD</span><span style="color: black; font-size: 25px; font-family: Futura; font-weight: 500; word-wrap: break-word">   200MAD</span></div>
        </div>
      </div>
      <div style="width: 1820px; height: 1442px; left: 0px; top: 4999px; position: absolute">
        <section id="product">
        <div style="left: 750px; top: -250px; position: absolute; text-align: center; color: black; font-size: 60px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word">Our Products</div>
      </section>
        <div style="left: 820px; top: -100px; position: absolute; justify-content: center; align-items: center; gap: 45px; display: inline-flex ; height:50px;">
          <div >
             <a href="women.php"  style="  color: black; font-size: 16px;text-decoration: none; background:white;border: none; font-family: Poppins; font-weight: 500; word-wrap: break-word" >Women</a>
             </div>
          <div>
              <a href="men.php"  style="color: black; text-decoration: none; font-size: 16px;background:white;border: none; font-family: Poppins; font-weight: 500; word-wrap: break-word" >Men</a>
             </div>
          <div >
              <a href="kids.php"  style="color: black; font-size: 16px;text-decoration: none; background:white;border: none;font-family: Poppins; font-weight: 500; word-wrap: break-word"  >Kids</a>
              </div>
    
         
        </div>
        
          

          
<?php

if(isset($_POST['add']))
{
    // print_r($_POST['product_id']);
    if(isset($_SESSION['cart']))
    {
        $item_array_id = array_column($_SESSION['cart'],"id");
        if(in_array($_POST['id'],$item_array_id))
        {
          echo "<script>alert('Product is already added to the cart !')</script>";
          echo "<script>window.location = 'pageprincipale.php#product' </script>";
        }
        else{
            $count=count($_SESSION['cart']);
            $items_array = array('id' => $_POST['id']);

            $_SESSION['cart'][$count] = $items_array;
            // print_r($_SESSION['cart']);
            echo "<script>alert('Product is added !')</script>";
            echo "<script>window.location = 'pageprincipale.php#product' </script>";
        } 
    }
    else
    {
        $items_array = array('id' => $_POST['id']);
        //create new session variable
        $_SESSION['cart'][0]=$items_array;
        print_r( $_SESSION['cart']);
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


  </head>

  <style>
        /* Style for the header container */
       
        .h3{
    font-family: Futura ;
          }
 
         
          .h44{    font-family: Futura ;
            background-color: #D6BFAE;

          }
          .navbar-nav li {
    margin: 0px 10px; /* Adjust the margin as needed */
}
.nav-link {
    font-size: 22px; /* Adjust the font size as needed */
}


    </style>


    
<div class="header-container">
<header id="header">
    <div class="mx-auto"></div>
    <nav class="navbar navbar-expand-lg navbar-light">
        
            

       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="mx-auto"></div>
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        
        
        
        </div>
        
    </nav>
</header>
</div>

<body>

    <div class="container">
       
  
        <div class="row text-center py-5">
           <?php
          $result = $database->getdatab();
          while($row=mysqli_fetch_assoc($result))
          {
            component($row['id'],$row['nam'], $row['price'],$row['imag'],$row['ancienprice'],$row['infoprod'],$row['categorie']);
          }
           ?>
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        

  </body>
</html>

      <div style="width: 340px; height:80px ; left: 790px; top: 2450px; position: absolute">
        <div style="width: 340px; height: 80px; left: 0px; top: 0px; position: absolute; background: black"></div>
        <div >
          <a href="allproduct.php"  style="left: 44px; top: 21px; background-color: #0C0C0C;text-decoration: none; position: absolute; color: white; font-size: 25px; font-family: Poppins; font-weight: 700; letter-spacing: 6.25px; word-wrap: break-word" >ALL PRODUCTS</a>
          </div>
      </div>
      <div style="width: 1920px; height: 910px; left: 0px; top:2699px; position: absolute">
        <div style="left: 633px; top: 0px; position: absolute; text-align: center"><span style="color: black; font-size: 60px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word">What People Say</span><span style="color: #B27C64; font-size: 60px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word"> About Us</span></div>
        <div style="width: 833px; height: 53px; left: 543px; top: 87px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Futura; font-weight: 500; word-wrap: break-word">CosmoGlow, your premier online destination for all things beauty and radiance!</div>
        <div style="width: 1296px; height: 533px; left: 312px; top: 188px; position: absolute">
          <div style="width: 585px; height: 533px; left: 0px; top: 0px; position: absolute">
            <div style="width: 632px; height: 558px; left: -24px; top: -16px; position: absolute; background: #EEDDCC"></div>
            <div style="width: 558px; height: 133px; left: 13px; top: 145px; position: absolute; text-align: center; color: black; font-size: 28px; font-family: Futura; font-weight: 500; word-wrap: break-word">My friends keep asking me about my glowing complexion, and I happily recommend your skincare line.</div>
            <div style="width: 585px; height: 142px; left: 0px; top: 0px; position: absolute; text-align: center; color: black; font-size: 35px; font-family: Futura; font-weight: 500; word-wrap: break-word">Finally, I've found cosmetics that are gentle on my sensitive skin</div>
            <img style="width: 150px; height: 150px; left: 217px; top: 296px; position: absolute; border-radius: 9999px" src="1689870761947.jpg"class="product" />
            <div style="width: 261px; height: 35px; left: 162px; top: 463px; position: absolute; text-align: center; color: black; font-size: 28px; font-family: Futura; font-weight: 500; word-wrap: break-word">Layla OUYOUSSEF</div>
            <div style="width: 261px; height: 35px; left: 162px; top: 498px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Customer</div>
          </div>
          <div style="width: 585px; height: 533px; left: 711px; top: 0px; position: absolute">
            <div style="width: 632px; height: 558px; left: -24px; top: -16px; position: absolute; background: #EEDDCC"></div>
            <div style="width: 558px; height: 133px; left: 13px; top: 145px; position: absolute; text-align: center; color: black; font-size: 28px; font-family: Futura; font-weight: 500; word-wrap: break-word">I've finally found my holy grail skincare brand. Your products have improved the overall health and appearance of my skin.</div>
            <div style="width: 585px; height: 142px; left: 0px; top: 0px; position: absolute; text-align: center; color: black; font-size: 35px; font-family: Futura; font-weight: 500; word-wrap: break-word">I'm in love with these cosmetics</div>
            <img style="width: 150px; height: 150px; left: 217px; top: 296px; position: absolute; border-radius: 9999px" src="1689870356057.jpg"class="product" />
            <div style="width: 261px; height: 35px; left: 162px; top: 463px; position: absolute; text-align: center; color: black; font-size: 28px; font-family: Futura; font-weight: 500; word-wrap: break-word">Zahra HAMMAOUI</div>
            <div style="width: 261px; height: 35px; left: 162px; top: 498px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Customer</div>
          </div>
        </div>

      </div>
      <div style="width: 1920px; height: 781px; left: -85px; top: 3707px; position: absolute">
        <div style="width: 1920px; left: 0px; top: 0px; position: absolute; justify-content: flex-start; align-items: flex-start; display: inline-flex">
          <img style="width: 337px; height: 445px" src="011b351a-b4ae-43d4-b833-2018f3373a7c.jpeg" class="product"/>
          <img style="width: 278px; height: 445px" src="1689870995822.jpg"class="product" />
          <img style="width: 278px; height: 445px" src="See the Aesthetic Beauty in the world.jpeg" class="product" />
          <img style="width: 278px; height: 445px" src="1689871187982.jpg"class="product" />
          <img style="width: 278px; height: 445px" src="KATIE THOMPSON PHOTOGRAPHY.jpeg"class="product" />
          <img style="width: 278px; height: 445px" src="Download premium image of Happy couple wearing a charcoal mask by McKinsey  about massage couple, clean face, latin woman beauty, massage, and aromatherapy 418137.jpeg" class="product"/>
          <img style="width: 278px; height: 445px" src="Eneko x ROWSE.jpeg" class="product"/>
        </div>
        <div style="width:1920px; height: 399px; left: 85px; top: 382px; position: absolute">
          <div style="width:100%; height: 336px; left: 0px; top: 63px; position: absolute; background: #413531"></div>
          <div style="width: 677px; height: 50px; left: 620px; top: 187px; position: absolute; justify-content: center; align-items: center; gap: 45px; display: inline-flex">
            <div >
              <a href="#home" style="color: white;text-decoration: none; font-size: 25px; background-color:#413531;border: none; font-family: Poppins; font-weight: 700; text-decoration: underline; word-wrap: break-word" >Home</a>
              </div>
            <div >
              <a href="#aboutus"   style="color: white; font-size: 25px;text-decoration: none; background-color:#413531 ;border: none;font-family: Poppins; font-weight: 600; word-wrap: break-word">About US</a>
             </div>
            <div >
              <a href="#product"  style="color: white; font-size: 25px;text-decoration: none; background-color:#413531 ;border: none; font-family: Poppins; font-weight: 600; word-wrap: break-word">products</a>
             </div>
            <div >
              <a href="#trends"  style="width: 88px; color: white;text-decoration: none; background-color:#413531 ;border: none; font-size: 25px; font-family: Poppins; font-weight: 600; word-wrap: break-word" >Trends</a>
              </div>
            <div >
              <a href="signup.html"   style="color: white; font-size: 25px; text-decoration:none ;border: none;font-family: Poppins; font-weight: 600; word-wrap: break-word" >SIGN UP</a>
             </div>
          </div>
          <div style="width: 428px; left: 745px; top: 330px; position: absolute; opacity: 0.67; text-align: center; color: white; font-size: 20px; font-family: Lato; font-weight: 400; text-transform: capitalize; line-height: 32px; word-wrap: break-word">© 2022 COSMO GLOW, All Right Reserved</div>
        </div>
      </div>
      <div style="width: 734px; height: 94px; left: 593px; top: 4099px; position: absolute; border-radius: 30px">
        <div style="width: 734px; height: 94px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 50px"></div>
        <div style="width: 734px; height: 61px; left: 0px; top: 23px; position: absolute; text-align: center">
          <section id="instagram">
          <span style="color: black; font-size: 30px; font-family: Futura; font-weight: 500; word-wrap: break-word">
              <a href="https://www.instagram.com/nnnn.2552/" style="color: black; font-size: 30px;text-decoration: none; font-family: Poppins;background-color:white; border:none;  font-weight: 400; word-wrap: break-word">FOLLOW OUR INSTAGRAM:</a>
              </span>
          <a href="https://www.instagram.com/nnnn.2552/"  style="color: black; font-size: 30px; background-color: white;border: none; font-family: Poppins; font-weight: 600;text-decoration: none; word-wrap: break-word">COSMO_GLOW</a>
        </section>
      </div>
      </div>
    </div>
    
    </body>
    </html>