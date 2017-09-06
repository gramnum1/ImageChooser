<?php
$actual_link = "http://$_SERVER[HTTP_HOST]/forms/marketing/index.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Image Chooser</title>
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" >
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
  </head>
  <body>
      

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="label"></h4>
      </div>
      <div class="modal-body" id="theImage">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>
      <div class="row">
          
          <div class="col-md-12">
    <form id='images' action='choose_images.php' method='POST' class="form-inline">  
              <nav class="navbar navbar-default navbar-fixed-top">
   
    <div class="form-group">
      <div class="container">
          <a class="navbar-brand" href="#"><img src="./i/Jacobsen.png"/></a>
          <a class="navbar-brand" href="#"><img src="./i/Ransomes.png"/></a>
        
     <input type='hidden' name='url' value="<?php echo $actual_link; ?>"/>
      <label for='emailTo'>Email type: </label>
      <select class="form-control" name='emailTo'>
          <option value='2'>Send For Review</option>
          <option value='1'>Send Selected Images</option>
      </select>
      <input type='email' class="form-control" name='email' placeholder='Email' /> <input type="submit" value="Send Email" />
  </div>
                  </div>
</nav>
            
      <?php 
        include("./gen_thumbs.php");
      ?>
             <script type="text/javascript" src="./js/script.js"></script>
            
              </form>
          </div>
      </div>
  </body>
</html>
