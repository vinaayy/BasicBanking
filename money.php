<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>SPARKS BANK</title>
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


<style>
*{
  font-family: 'Poppins', sans-serif;
}

.welcome h2{
    margin: 10px;
    padding: 5px;
    text-align: center;
    color:midnightblue;
    font-size:30px;
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


  
</style>
<body>

    <?php
    include 'connect.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>


    <!-- Nav bar -->
      <nav class="navbar py-2 navbar-expand-lg navbar-dark" style="background-color:#101e4d ; ">
        <div class="container"><a class="nav-link" aria-current="page" href="index.php"><img src="bank.png" width="20%"><center>
            <a class="navbar-brand" href="#" style="font-size:30px ;">THE BANK </a> <br><p style="color: grey">A Basic Banking System</p>
           </a> </center>
        </div>

     
    </nav>

    <class class="welcome">
        <h2>
           <strong>Money
                Transfer</strong>
                <hr>
        </h2>

    </class>

    <!-- options -->
  
    </div>


    <div class="container">
        <div class="row text-center">
            <div class="col text-center">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-striped table-sm" >
                        <thead style="color :midnightblue;" class="table-danger" >
                            <tr >
                                <th scope="col" class="text-center py-2">S.No.</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Amount</th>
                                <th scope="col" class="text-center py-2">Transfer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : black;">
                                    <td class="text-center py-2">
                                        <?php echo $rows['id'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['name'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['email'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['balance'] ?>
                                    </td>
                                    <td><a href="users.php?id= <?php echo $rows['id']; ?>"> <button class="btn btn-oun" style="background-color:red; color:snow;">Transfer</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="d-grip gap-2 col-6 mx-auto text-center p-3 mb-2">
        <a href="history.php"><button type="button" class="btn btn-primary btn-lg mb-3">Transaction History</button></a>
    </div>

    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
