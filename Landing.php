<?php include('server.php') ?>
<html>
<head>
    <title></title>
        
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
   
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
       <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <style>
        .jumbotron{
            background-image: url(https://images.unsplash.com/photo-1507646227500-4d389b0012be?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80);
            height: 540px;
            margin: 5px 0px 60px 0px;
            color:azure;
        }
        #wrk{
            border: 2px solid white;
            color:azure;
        }
        #wrk:hover{
            font-weight: 500;
            text-decoration: none
            
        }
        .card{
            height:250px;
            margin:10px 0px 10px 30px;
            
        }
       
        .bottom{
            background-color: black;
            color: azure;
            margin:0px;
            background-image: url();
                
        }
    
        .cir{
            border-radius: 50%;
            background-color: aqua;
            height:150px;
            width:150px;
            margin-bottom: 20px;
        }    
        .rimg{
            
            width: 170px;
            height: 170px;
            border-radius: 50%;
            
            margin-bottom: 8px;
        }
        .rimg:hover {
                        width:175px;
                        height:175px;
                        
                       
                        border-radius:50%;
}
        
    
    </style>
    

    <script>
    
         $(function(){
                $('#signup').on('submit', function(e){
                    e.preventDefault();
                    $.ajax({
                        url: "Landing.php",
                        type: "POST",
                        data: $("subscribe-email-form").serialize(),
                        success: function(data){
                            alert("Successfully submitted.")
                                                }
                            });
                                                                }); 
                    });
    
    
    
    
    
    
    </script>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ParTimers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="#"  >Keypoints</a>
      </li>
        <li class="nav-item">
        <a class="nav-link " href="#"  >Circular</a>
      </li>
        <li class="nav-item">
        <a class="nav-link " href="#"  >List of types</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <a href="login.php" class="btn  my-2 my-sm-0" role="button">LogIn</a>
        <a href="signup.php" class="btn  my-2 my-sm-0" role="button" >SignUp</a>
         <a href="Postjob.php" class="btn  my-2 my-sm-0 btn-warning" role="button" >Post a Project</a>
    
    </form>
  </div>
        
</nav>
    
<!-- big picture-->
    <div class="jumbotron">
  <h1 class="display-4">ParTimers</h1>
  <p class="lead">TagLine </p>
  <hr class="my-4">
  <p>Background bdl jaega</p>
  <a class="btn btn-warning btn-lg" href="Postjob.php" role="button">I Want to Hire</a>
    <a class="btn btn-link btn-lg" href="login.php" role="button" id="wrk">I Want to Work</a>
</div>
    <!-- text -->
<div class="container">
<div class="row">
    <div class="col-sm-6">
    
   <h2> What is Lorem Ipsum?</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<h2> Why do we use it?</h2>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>


<h2> Where does it come from?</h2>
<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

<h2> Where can I get some?</h2>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model senten
    </p>
    
    
    
    </div>
    </div>
    </div>
    <!-- square -->
    <div class="container">
      <div class="row">
           <div class="card col-sm-3 bg-dark text-white">
  <img src="" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
      
  </div>
</div>
          <div class="card col-sm-3 bg-dark text-white">
  <img src="" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
      
  </div>
</div>
        <div class="card col-sm-3 bg-dark text-white">
  <img src="" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
      
  </div>
</div>
    
    
    </div>
<div class="row">
           <div class="card col-sm-3 bg-dark text-white">
  <img src="" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
      
  </div>
</div>
          <div class="card col-sm-3 bg-dark text-white">
  <img src="" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
      
  </div>
</div>
        <div class="card col-sm-3 bg-dark text-white">
  <img src="" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
      
  </div>
</div>
    
    
    </div>
    
    </div>
    <!-- circle -->
    
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                
                    <img src="webcircle1.jpg" class="rimg">
                       
            </div>
            <div class="col-sm-4">
                <img src="webcircle1.jpg" class="rimg">
            </div>
            <div class="col-sm-4">
                <img src="webcircle1.jpg" class="rimg">
            </div>
  
  
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="webcircle1.jpg" class="rimg">
            </div>
            <div class="col-sm-4">
               <img src="webcircle1.jpg" class="rimg">
            </div>
            <div class="col-sm-4">
               <img src="webcircle1.jpg" class="rimg">
            </div>
  
  
        </div>
    </div>
    
    
<div>
    //list of types</div>
<!-- footer -->
<div class="jumbotron jumbotron-fluid bottom">
  <div class="container">
    <h1 class="display-4">Footer</h1>
    <p class="lead">List aaegi aur socialmedia handle</p>
  </div>
</div>    
    
    
    
</body>
</html>