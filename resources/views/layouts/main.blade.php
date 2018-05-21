<!-- resources\views\layouts\main.blade.php -->

<!DOCTYPE html>
<html lang="ru">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{{csrf_token()}}" />
    
    <title>HoneyHunters</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
    </script>
    <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/post') }}",
                  method: 'post',
                  data: {
                     author: jQuery('#author').val(),
                     email: jQuery('#email').val(),
                     text: jQuery('#text').val()
                  },
                  success: function(result){
                     jQuery("#comments").html(result);
                  }});
               });
               
               
               
            });
    </script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">&copy; HoneyHunters</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
        </div>
      </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="col-md-12" style="color:#ffffff">
           <div class='container'>
            <form action="{{ url('/comment') }}" id='createform' method="post" onsubmit="return false" > <!-- onsubmit="return false" -->
            <div class="row">    
             <div class="col-md-6">
              <div class="form-group">
               <label>Name</label> <b style="color:red">*</b>
               <input type="text" name='author' class="form-control" id="author" placeholder="Name">
               <small id="nameHelp" class="form-text text-muted">Maximum 20 symbols</small>
               <p class="help-block">Example: "Simon"</p>
              </div>
             
             <div class="form-group">
               <label>Email</label> <b style="color:red">*</b>
               <input type="text" name='email' class="form-control" id="email" placeholder="Email">
               <small id="emailHelp" class="form-text text-muted">Maximum 20 symbols</small>
               <p class="help-block">Example: "simon1969@gmail.com"</p>             
              </div>
             </div>
             <div class="col-md-6">
              <div class="form-group">
               <label>Comment text</label> <b style="color:red">*</b>
               <textarea class="form-control" rows="7" id="text" name="text"></textarea>
               <small id="commentHelp" class="form-text text-muted">Maximum 200 symbols</small>
               <p class="help-block">Example: "This morning I heard some weird noises under my bed..."</p>  
              </div>
                 
             </div>
             <div class="col-md-12 text-right">
                <span class='pull-right'><button type="submit" id="ajaxSubmit" class="btn btn-danger">Add comment</button></span>
             </div>
             </div>
            </form>
               </div>
        </div>
        </nav>
    
    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 text-center">Comments</h1>

      <!-- Comments -->
      <div id="comments">
          @yield('content')
      </div>

    </div>

      <!-- Portfolio Section -->
     

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">&copy; HoneyHunters</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
