<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2d9884374a.js" crossorigin="anonymous"></script>
    <title>Document</title>
  <style>
          html{
            background: #ccc;
        }
        .Tasks{
            padding-top: 20px;
            background: #ccc;
            /* padding: 20px;
            margin: 40px auto; */
        }
           .rcidsborder{
         border-bottom: 1px solid black;
         height: 30px;
         display: flex;
         align-items: center;
          }  
          .tits2{
         display: flex;
         align-items: center;
         color: #ffb3b3;
        }
       .gg{
        top: -100%;
            height: 10%;
            width: 50%;
            background: rgb(220, 53, 69, 0.4);
            position: absolute;
           /* right: -100%;*/
           
          left: 50%;
           margin-top: 10px
        }

        .ok100{
          /*top: -100%;*/
            height: 5%;
            width: 50%;
            background: rgb(220, 53, 69, 0.4);
            position: fixed;
            top: -100%;
           
          left: 50%;
           margin-top: 10px
        }

        .ii{
          
          background: rgb(220, 53, 69, 0.4);
          top: 0px;
            transition: all 0.8s ease-in-out;
        }

        .ii1{
          height: 10%;
            width: 50%;
            top: -100%;
            position: relative;
            position: fixed;
            background: rgb(220, 53, 69, 0.4);
            transition: all 1s ease-in-out;
        }
   </style>
</head>
<body>
  <div class="">
  <nav style="box-shadow: 1px 1px 15px black;" class="navbar bg-light fixed-top" id="item">
  <div class=" container-fluid">
    <form class="w-100 d-flex" role="search">

    <h1 class=" h4 text-primary text-center my-1">
    <i class="fa-brands fa-orcid"></i>
                    <span class=" ms-1 d-none d-lg-inline"></span>
                </h1>
    <!-- <a class="navbar-brand bg-light " href="#">
        <b style="color: #0E5FDD">IDS</b> 
    </a> -->

    
    <!-- <button  type="button" class="bg-dark" data-bs-dismiss="offcanvas" aria-label="Close"> -->
   
  <!-- </button> -->
  
  <!--</div>-->
   <!--<div class="offcanvas-body">-->
  
  <input id="" style=" border-radius: 1px; height: 32px; width: 80%;"  class="ms-1 pe-0 form-control text-dark me-1 searchh2 bg-transparent" type="text" placeholder="Rc ids" aria-label="Search">

     
     </div>
  
   <!--</div>-->
   <!-- //<div class="offcanvas offcanvas-end show" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel"> -->

    <div class="parent"></div>
    <div class="gg">

    <div class="rcidsborder Hh" id="1"><i class="bi ms-2 text-danger bi-exclamation-triangle-fill"></i><div class="tits2 ms-2">106433389(2228)</div></div>
    </div>
<!-- </div> -->
   
  <!-- <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.
  </div>
</div> -->
       <!-- <button style="height: 32px;"  class="ms-5 text-white searchb  btn btn-outline-dark"><span><i class="bi bi-search"></i></span></button>-->
      
    </form>
  </div>
</nav>
<div class="Tasks mt-5 mb-3">
<ul id="list" class="list-group mb-5 mx-3 mt-2">
        <li class="list-group-item active col-sm-4 col-lg-6 mb-1">Tasks 
            <span class="badge update bg-danger">0</span>
        </li>
        <li class="list-group-item">
            <h4 class="h5 text-muted "></h4>
            <div class="w-100">
            <div style=" width: 99%; box-shadow: 1px 1px 15px black; background: rgb(0, 0, 0, 0.2) padding-left: 25%;" class=" d-block rcid2 rounded mt-2 mx-1">
            </div>
        </li>
    </ul>
</div>

<script src="rclist.js"></script>
</body>
</html>