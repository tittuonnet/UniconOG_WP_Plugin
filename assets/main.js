jQuery(document).ready(function($){
  // Media Upload Button
    $('#uniconSEO-FB-image_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#uniconSEO-Facebook-OG-IMG').val(image_url);
        });
    });
    // Media Upload Button
      $('#uniconSEO-TW-image_button').click(function(e) {
          e.preventDefault();
          var image = wp.media({
              title: 'Upload Image',
              // mutiple: true if you want to upload multiple files at once
              multiple: false
          }).open()
          .on('select', function(e){
              // This will return the selected image from the Media Uploader, the result is an object
              var uploaded_image = image.state().get('selection').first();
              // We convert uploaded_image to a JSON object to make accessing it easier
              // Output to the console uploaded_image
              console.log(uploaded_image);
              var image_url = uploaded_image.toJSON().url;
              // Let's assign the url value to the input field
              $('#uniconSEO-Twitter-Card-IMG').val(image_url);
          });
      });
    // Character Remaining - Page Title
    $('#facebook_og_title').keyup(function () {
      remaining = 25 - $(this).val().length;
      if(remaining <= 0){
        $("#facebook_og_title").addClass("uniconRed");
      } else {
        $("#facebook_og_title").removeClass("uniconRed");
      }
      $("#pageFBTitleLimit").text(remaining);
    });
    // Character Remaining - Page Description
    $('#twitter_card_title').keyup(function () {
      remaining = 25 - $(this).val().length;
      if(remaining <= 0){
        $("#twitter_card_title").addClass("uniconRed");
      } else {
        $("#twitter_card_title").removeClass("uniconRed");
      }
      $("#pageTWTitleLimit").text(remaining);
    });
});
