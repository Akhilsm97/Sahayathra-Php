<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
    <style>
body {
    background-color: #eee
}

div.stars {
    width: 270px;
    display: inline-block
}

.mt-200 {
    margin-top: 200px
}

input.star {
    display: none
}

label.star {
    float: right;
    padding: 10px;
    font-size: 36px;
    color: #4A148C;
    transition: all .2s
}

input.star:checked~label.star:before {
    content: '\f005';
    color: #FD4;
    transition: all .25s
}

input.star-5:checked~label.star:before {
    color: #FE7;
    text-shadow: 0 0 20px #952
}

input.star-1:checked~label.star:before {
    color: #F62
}

label.star:hover {
    transform: rotate(-15deg) scale(1.3)
}

label.star:before {
    content: '\f006';
    font-family: FontAwesome
}
   </style>
  </head>
  <body>
  <div class="container d-flex justify-content-center mt-200">
    <div class="row">
        <div class="col-md-12">
            <div class="stars">
                <form action="">
                     <input class="star star-5" id="star-5" type="radio" name="star" /> 
                     <label class="star star-5" for="star-5">
                         
                     </label> <input class="star star-4" id="star-4" type="radio" name="star" /> 
                     <label class="star star-4" for="star-4"></label> 
                     <input class="star star-3" id="star-3" type="radio" name="star" />
                     <label class="star star-3" for="star-3"></label> 
                     <input class="star star-2" id="star-2" type="radio" name="star" />
                     <label class="star star-2" for="star-2"></label> 
                     <input class="star star-1" id="star-1" type="radio" name="star" /> 
                     <label class="star star-1" for="star-1"></label> </form>
            </div>
        </div>
    </div>
</div>

   
  </body>
</html>