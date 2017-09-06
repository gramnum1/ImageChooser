<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>

<script>
  /* Add form tag */
  $("#index").wrap('<form id="images" action="http://txjappazu001:8080/forms/marketing/choose_images.php" method="POST">');

  /* Remove onclick property, so only image can be clicked on */
  $('.thumbnail').prop('onclick',null);
  $('a').prop('onclick',null);

  /* Add checkbox to each image */
  $(".itemNumber").each(function() {
      var i = $(this).text();
      $(this).append($('<input>', { class : "imageCheck", type:"checkbox", name: "cimg_" + i}));
  });

  /* Get the hyperlink and number for each image, save as a hidden field */
  $(".thumbnail").each(function() {
    var href = $(this).find("a").attr('href');
    var href = href.substring(8, href.length - 11);
    var itn = $(this).find(".itemNumber").text();
    $(this).append($('<input>', { type:"hidden", name: "image_" + itn, val: itn + " - " + href}));
  });

  /* Add submit button  */
  var b=$('<input/>').attr({
        type: "submit",
        id: "submit",
        value: 'Submit',
        name: 'Submit'
  });
  $("#index").append(b);
</script>