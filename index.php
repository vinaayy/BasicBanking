<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>THE BANK</title>
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<style>

*{
  font-family: 'Poppins', sans-serif;
}
.container h2{
    text-align:center;
    background-color: rgb(238, 255, 0);
    border-radius: 5px;
    margin: 5px;
    padding: 7px;
}




h3{
  margin: 28px;
  padding: 5px;
  text-align: center;
  background-color: rgba(230, 230, 136, 0.945);
  border-radius: 10px;
}

h3:hover{
  transform: scale(1.01);
  background-color: yellow;
}

#hover1{
  width: 200px;
  font-weight:bolder;
   background-color: rgba(243, 224, 117, 0.945);
   border-radius: 5px;
   text-align: center;
   height: 100px;
   line-height: 100px;
 
   
}
#hover1:hover{
  transform: scale(1.1);
  background-color: gold;

}
#hover2{
  width: 200px;
  font-weight:bolder;
  background-color:rgba(115, 247, 115, 0.849);
  border-radius: 5px;
  text-align: center;
  height: 100px;
  line-height: 100px;

}
#hover2:hover{
  transform: scale(1.1);
  background-color: chartreuse;
}

.form-control{
  height: 40px;
  width: 250px;
}
#menu{
    text-decoration:none;
    color:darkblue;
}
#menus:hover{
     transform:scale(1.1);
}
#menus{
    margin: 50px 20px 0 0;
    text:align:center;

}
#menu:hover{
  color:red;
}


.main-container {
    max-width: 1950px;
    width: 100%;
    margin: 0 auto;
    overflow: hidden;
}
.inside-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
}
.row-spc{
    margin: 0 auto!important;
    font-family: 'Roboto Slab', serif;
    font-size: 18px;
   
}
i:hover{
    color: #f65aa7;
    cursor: pointer;
}
.icon-scp{
    font-size: 12px;
    color: white;
    margin: 5px 5px;
    
}
.icon-scp .left-side {
    display: flex;
}
.icon-scp .left-side .link-head {
    margin: 0 5px;
}
.icon-scp .left-side .link-head i {
    margin: 0 5px 0 0;
}
.contact-color{
    background-color:red;
    min-height: 50px;
}

.col-disp{
    margin: 10px;
    display: flex; 
}

.link-head{
    color: red;
}
.link-head:hover{
    text-decoration: none;
    color: #f65aa7;
    cursor: pointer;
}

.nav-bg-color{

background-color: white;

}
.nav-contain{
margin-top: -10px;
margin-bottom: -5px;

}
.navbar img{
    width: 200px;
}
.nav-list .menu {
    color: #333333;
    font-family: 'Roboto Slab', serif;
    font-size: 13px;
    line-height: 26px;
    padding: 0 20px;
    text-decoration: none;        
}
.nav-list .menu:hover {
    color: #f65aa7;
}
.color-line{
    color: #999999!important;
}
.last-spc{
    padding: 0 10px;
}
.carousel-height img{

    max-height: 800px;
}
.icon-color {
    color: #f65aa7!important;
    margin: 1px auto
}

@media (max-width: 1200px){
    .nav-list .menu, .menu-last{
        text-align: center;
        padding: 0px 16px;
    }
    .last-spc{
        padding: 0 10px!important;
    }
}
@media (max-width: 992px){
    .nav-list .menu, .menu-last{
        text-align: center;
        padding: 10px 10px!important;
    }
    .navbar-nav .color-line {
        display: none;
    }
     
    
}
@media (max-width: 575.98px) { 
    .icon-scp .left-side  {
        display: grid;
    }
    .icon-scp .left-side .link-head {
        margin: 3px 0; 
    }
    .icon-scp .left-side  span {
        display: none;
     }
      .col-disp{
        margin: 5px;
        display: unset;
        text-align: center;
    }
}

.text-carousel{
    color: white;
}
.first-slider {
    min-height: 800px;
    
    background-image: url('../max-image/bussines-2.jpg');
    background-size: cover;
}

@media (max-width: 991.98px) { 
    .carousel-control-prev, 
    .carousel-control-next {
        display: none;
    }

}
@media (max-width: 576px ) {
    .carousel-inner {
        max-height: 700px;
    }
    .carousel-text {
        padding-top: 200px!important;
    }
    .carousel-text span{
        font-size: 20px!important;

    }
    .carousel-text h1 {
        font-size: 20px!important;
    }
}
.carousel-text h1 {
    font-family: 'Roboto Slab', serif;
    font-size: 42px;
    text-transform: uppercase;
    text-align: center;
    color: #ffffff;
    font-weight: bold;
    text-shadow: 3px 3px 5px #000;
}
.carousel-text span {
    font-family: 'Roboto Slab', serif;
    font-size: 42px;
    text-transform: uppercase;
    text-align: center;
    color: #ffffff;
    font-weight: bold;
    text-shadow: 3px 3px 5px #000;
}
.carousel-text{

    padding-top:260px;
    text-align: center;
}
.carousel-text p {
    font-family: 'Open Sans', sans-serif;
    padding-top:40px;
    font-size: 14px;
    color: #ffffff;
    text-shadow: 3px 3px 5px #000;

}
.butns{
    padding-left: 400px;
    padding-top: 30px;
    align-content: center;
}
.about-btn{  
    color: #333333;
    border-radius: 8px;
     margin: 20px;
     padding: 15px 40px;
    background-color: #90ee90;
    text-transform: uppercase;
    text-decoration: none;
    font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    font-weight: bolder;
    border: none;

}
.about-btn:hover{
    background-color:#90ee90; 
    color: #ffffff;
    text-decoration: none;
}
.work-btn:hover{
    background-color:#90ee90; 
    color: #ffffff;
    text-decoration: none;
}
.work-btn{
    border-radius: 8px;
    padding: 15px 40px;
    margin: 10px;
    background-color: #90ee90;
    text-transform: uppercase;
    text-decoration: none;
    font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    font-weight: bolder;
    color: #333333;
    border: none;
}

.our-header h2{
    text-transform: uppercase;
    text-decoration: none;
    font-size: 32px;
    font-weight: bold;
    text-align: center;
    font-family: 'Roboto Slab', serif;
    margin-top: 140px;
}
.our-header hr{
   height: 5px;
   border-color:#c0bfbf;
   margin-left: 15px;
    display: inline-flex;
    margin-right: 15px;
    width: 65px;
}
.row-pad{
    padding: 35px;
}
.rotate-45{
    transform: rotate(45deg);
    margin-right: -5px;
    margin-left: -5px;
    margin-top: 10px;
}
.rounded-circle{
    border: 1px dashed #f65aa7;
    margin-bottom: 25px;
    color: #f65aa7;
    padding: 35px 0;
    font-size: 45px;
}
.rounded-circle:hover{
    background-color: #f65aa7;
    color: #ffffff;
}
.first-slider {
    min-height: 800px;
    
    background-image: url('banking.jpg'); opacity:1;
    background-size: cover;
}
.our-header h2{
    text-transform: uppercase;
    text-decoration: none;
    font-size: 32px;
    font-weight: bold;
    text-align: center;
    font-family: 'Roboto Slab', serif;
    margin-top: 140px;
    color: #000000;
}
h2{    text-transform: uppercase;
    text-decoration: none;
    font-size: 32px;
    font-weight: bold;
    text-align: center;
    font-family: 'Roboto Slab', serif;
    margin-top: 140px;
    background-color: #ffffff;
}
p{
    margin-top: 30px;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    color: #000000;
    font-family: 'Open Sans', serif;
}
.our-header hr{
   height: 5px;
   border-color:#000000;
   margin-left: 15px;
    display: inline-flex;
    margin-right: 15px;
    width: 65px;
}

</style>


</head>

<body>

    <!-- Nav bar -->
    <nav class="navbar py-2 navbar-expand-lg navbar-dark" style="background-color:#101e4d ; ">
        <div class="container"><img src="bank.png" width="20%"><center>
            <a class="navbar-brand" href="#" style="font-size:30px ;">THE BANK </a> <br><p style="color: grey">A Basic Banking System</p>
            </center>
        </div>

  
        
    </nav>
  
       <b style="color:midnightblue;font-size:30px ; margin:30px 0 0 10px "> SERVICES   <hr style="color:darkblue"></b>
  

    <!-- Carousel -->
    <div style="margin:auto ; padding:0 100px 0 100px;">
        <div  style="float:left" id="menus"> <a href="money.php" id="menu">
        <img src="user.jpg"  style=" margin-left:100px"><h4  style="text-align:center ;">ACCOUNTS</h4></a>
        </div>
        <div  style="float:left" id="menus" > <a href="money.php" id="menu">
        <img src="transfer.jpg" style="margin-top: 100px; margin-left:100px" ><h4 style="text-align:center">MONEY TRANSFER</h4></a>
        </div>
         <div  style="float:left" id="menus"> <a href="history.php" id="menu">
        <img src="history.jpg"  style=" margin-left:100px"><h4 style="text-align:center">HISTORY</h4></a>
        </div>
    </div>
       </div> 

       
    </div></div></div>

     <!-- footer -->

    <footer id="foot" style=" background-color:lightgrey; padding:30px; width: 100% ;float:left; margin-top:100px">
      <img src="bank_about.jpg" width="40%" style="float:left">
      <div style="float:left ; margin-left:30px; font-size:20px; width:40%">
      <b style="font-size:30px"> ABOUT </b> <br>
      <p>A Basic Banking System is Task1 of Web Development Internship under The Sparks Foundation</p> </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>