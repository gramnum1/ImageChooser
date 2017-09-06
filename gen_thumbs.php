<?php
  /* gen_thumbs.php
  ** Grabs thumnails and creates
  ** Tiles
  */


  $directory="./images/thumb/"; //directory of thumbnails
  $images = glob($directory."*.jpg");  //Grab all thumbnails
  $colCount=0;
  $itemNumber=1;
  /* For Each Image in the 
  ** Thumnail directory print out appropriate
  ** tile and inputs
  ** Code will print out 6 tiles 
  ** per row
  */
  foreach($images as $i){
    //URL for enlarged picture  
    $large=str_replace("thumb", "large", $i);
    //strip image name of path for display  
    $simpleName=str_replace("./images/thumb/", "", $i);
    //at the start of column count insert new row  
    echo ($colCount==0 ? "<div class='row'>" : ""); 
    //Hiden input used to toggle selections
    echo "<input id='cimg_{$itemNumber}' type='hidden' name='cimg_{$itemNumber}' value='0'/>";
    // hidden inputs value is item number - filename
    echo "<input  type='hidden' name='image_{$itemNumber}' value='{$itemNumber} - {$i}'/>";
    //echo out the tile
    echo "<div class='col-md-2'><div class='itemNumber' id='{$itemNumber}'>{$itemNumber}.  {$simpleName}</div><a class='thumb-link' href='#' data-fn='{$large}' data-toggle='modal' data-target='#imageModal'><img class='img-thumbnail center-block' src='".$i."'/></a></div>";
    //after 6 tiles close row and reset colCount
    echo ($colCount==5 ? "</div><hr/>" : "");
    $colCount= ($colCount==5 ? 0 : $colCount+1 );
    $itemNumber++;
  }
?>
