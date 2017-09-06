/* Selecting Immages */
$(".itemNumber").click(function(e){
    var id=e.target.id;     
    var togg=$("#cimg_"+id);
    togg.val(togg.val()==0 ? 1 : 0 );
     $(this).css("background-color",togg.val()== 1 ? "green" : "#979797"); 
                        });
/* Show Enlarged Images */
$(".thumb-link").click(function(e){
    var filename = $(this).data('fn');
     $('#theImage').html('<img src="'+filename+'" />');
    $('#label').html('Image: '+filename);
})