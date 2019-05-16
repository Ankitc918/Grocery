<?php 
include('include/conn.php');
?>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Trade+Winds" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script>new WOW().init();</script>
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script>
                        document.getElementById("submit").addEventListener("click",go);
                        function go(){
                            alert("Your request accepted! Please login to continue.");
                        }
   
    
</script>
</head>

<body>
   
    <div class="container">
        

        <!-- new main content  -->

        <section class="wrap100">
            <div class="row">
               
                     <form class="inputform" action="" onsubmit="result()" id="productcart" method="post">
                       <div class="center"><i class="fa fa-shopping-cart" style="font-size:50px;"></i></div>
                      <br>
                        <div class="form-group">
                           <label>Source</label>
                              
                               <input class="form-control input-group" type="text" maxlength="6" pattern="[0-9]{6}" name="source" id="source" placeholder="source pin code" required>
                            
                        </div>

                        <div class="form-group">
                           <label>Destination</label>
                            <input class="form-control" type="text" maxlength="6" pattern="[0-9]{6}" name="destination" id="destination" placeholder="destination pin code" required>
                        </div>

                        <div class="form-group">
                           <label>Quantity</label>
                            <input class="form-control" type="number" min="0" step="1" name="quantity" id="quantity" placeholder="quantity" required>
                        </div>
                        
                        <div class="form-group">
                           <label>Weight</label>
                            
                            
                            <div class="input-group">
                                <input class="form-control input-group" type="number" name="weight" id="weight" placeholder="weight" required>
                                <div class="input-group-append">
                                    <select class="form-control" name="unit" id="unit" style="background-color:#eee;" onchange="result();"  required>
                                       <option selected value="" disabled>--select unit--</option>
                                       <option value="grams">
                                            grams
                                        </option>
                                        <option value="kilograms">
                                            kilograms
                                        </option>
                                    </select>
                                  
                                </div>
                              </div>
                        </div>
                        <div class="form-group">
                           <label>Price</label>
                           <div class="input-group">
                            <input class="form-control" type="text" min="0" step="1" name="price" id="price" placeholder="price" value="" readonly>
                            <div class="input-group-append">
                                <button class="btn btn-primary" id="getprice" name="getprice" type="button" onclick="result();">Get Price</button>
                            </div>
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="btn btn-light" id="submit" type="submit"> 
                                Submit
                            </button>
                            <script>
                                function result(){
                                    var quan = document.getElementById("quantity").value;
                                    var weight = document.getElementById("weight").value;
                                    var unit = document.getElementById("unit").value;
                                    
                                    var price = document.getElementById("price");
                                    var pri=0;
                                    if(unit=="grams"){
                                        pri=quan*weight;
                                    }
                                    else if(unit=="kilograms"){
                                        pri=quan*weight*1000;
                                    }
                                    else{
                                        pri="please select unit";
                                    }
                                    
                                    price.value=pri;
                                }
                            </script>
                        </div>
                 
   
                    </form>
                   
         
            </div>
            
        </section>
    </div>
</body>

</html>


