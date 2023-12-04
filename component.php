
<?php
function component($productid,$productname,$productprice,$productimg,$ancprice,$infoprod,$category)
{
    $element= "
    <div class=\"col-md-3 col-sm-6 my-3 my-md0\">
    <form  method=\"post\">
       <div class=\"cart shadow\">
         <style>
          .h4,.h5,.h6
          {
            font-family: Futura ;
          }
          .img{
            max-width: 100%; height: 220px;
            background: white;
           }
        //    .product:hover {
        //     transform: opacity(0.5);
        //       }

h6{
color:yellow;
}
         </style>
         <div class=\"product\">
           <div >
               <img src=\"$productimg\" alt=\"image1\" class=\"img img-fluid card-img-top\ style=\"height:150px;\" >
           </div>
           <div class=\"cartbody\">
               <h5 class=\"h4 cart-title\">$productname</h5>
               <h6>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"fas fa-star\"></i>
               </h6>
               <p class=\"h6 carttext\">
                $infoprod
               </p>
               <h5>
                   <small><s class=\"h6 text-secondary\"><span class=\"price\">$ancprice MAD</span></s></small>
                   <span class=\"h5 price\">$productprice MAD</span>
               </h5>

               <button type=\"submit\"  class=\"h5 btn btn-warning my-3\" name=\"add\"> ADD TO CART <i class=\"fas fa-shopping-cart\"></i></button>
               <input type=\"hidden\" name=\"id\" value='$productid'>
               <input type=\"hidden\" name=\"category\" value='$category'>

           </div>
        
       </div>
       </div>
    </form>
</div>
    ";

    echo $element;
}

function cartelement($productimag,$productnam,$productprice,$productid)


{

    
    $element="
    <form action=\"panier.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
         <style>
         .h5,.h6
         {
           font-family: Futura ;
         }
         
         </style>
    <div class=\"border rounded\">
        <div class=\"row bg-white\">
            <div class=\"col-md-3 pl-0\">
                <img src=$productimag alt=\"img1\" class=\"img-fluid\" style=\"height:220px;\" >
            </div>
            <div class=\"col-md-6\">
                <h5 class=\"h5 pt-2\">$productnam</h5>
                <small class=\"text-secondary\">Seller: dailytuition</small>
                <h5 class=\"h5 pt-2\">$productprice MAD</h5>
                <button type=\"submit\" class=\"h5 btn btn-warning\" >Save For Later</button>
                <button type=\"submit\" class=\"h5 btn btn-danger \" name=\"remove\">Remove</button>
            </div>
            <div class=\"col-md-3 py-5\">
            <div class=\"cart-quantity\">



            <input type=\"hidden\" name=\"productid\" value=\"$productid\">
   



           
        </div>
        
       
</head>
            </div>
        </div>
    </div>
</form>";

echo $element;
}

