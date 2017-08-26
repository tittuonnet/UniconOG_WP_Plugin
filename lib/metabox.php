<?php function unicon_og_content()
{
  $screens = ['page', 'wporg_cpt'];
  foreach ($screens as $screen) {
    add_meta_box(
      'unicon_og_1XUNI_CON_71',           // Unique ID
      'Open Graph Snippets',  // Box title
      'unicon_og_html',  // Content callback, must be of type callable
      $screen                   // Post type
    );
  }
}

function unicon_og_html($post)
{
  ?>
<main class="uniconMain">
  <h4>Snippet Editor</h4>
  <input id="FacebookOG" type="radio" class="uniconHidden uniconTab" name="tabs">
  <label for="FacebookOG" class="uniconTab">Facebook Open Graph</label>

  <input id="TwitterCard" type="radio" class="uniconHidden uniconTab" name="tabs">
  <label for="TwitterCard" class="uniconTab">Twitter Card</label>

  <section id="FacebookOGContent" class="unicon">
    <div class="row uniconRow">
      <label class="uniconLabel">Facebook OG Title</label>
    	<input class="large-text uniconInputbox" type="text" name="facebook_og_title" placeholder="Facebook Opengraph Title" id="facebook_og_title" spellcheck="true" autocomplete="off">
      <label class="uniconFBTextLimit"><span id="pageFBTitleLimit">0</span> of 25 characters used</label>
    </div>
    <div class="row uniconRow">
      <label class="uniconLabel">Facebook OG Image</label>
      <div class="row">
        <div class="uniconW80">
          <input id="uniconSEO-Facebook-OG-IMG" class="large-text uniconInputbox" type="text" name="facebook_og_image" placeholder="Facebook Opengraph Image URL" id="facebook_og_image" spellcheck="true" autocomplete="off">
        </div>
        <div class="uniconW20">
          <input id="uniconSEO-FB-image_button" class="uniconUploadButton button" type="button" value="Upload Image">
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="row uniconRow">
      <label class="uniconLabel">Facebook OG Description</label>
      <textarea class="large-text uniconTextArea" name="facebook_og_description" placeholder="Facebook OG Description"></textarea>
    </div>
  </section>

  <section id="TwitterCardContent" class="unicon">
    <div class="row uniconRow">
      <label class="uniconLabel">Twitter card Title</label>
    	<input class="large-text uniconInputbox" type="text" name="twitter_card_title" placeholder="Twitter card Title" id="twitter_card_title" spellcheck="true" autocomplete="off">
      <label class="uniconTWTextLimit"><span id="pageTWTitleLimit">0</span> of 25 characters used</label>
    </div>
    <div class="row uniconRow">
      <label class="uniconLabel">Twitter card Image</label>
      <div class="row">
        <div class="uniconW80">
          <input id="uniconSEO-Twitter-Card-IMG" class="large-text uniconInputbox" type="text" name="twitter_card_image" placeholder="Twitter card Image URL" spellcheck="true" autocomplete="off">
        </div>
        <div class="uniconW20">
          <input id="uniconSEO-TW-image_button" class="uniconUploadButton button" type="button" value="Upload Image">
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="row uniconRow">
      <label class="uniconLabel">Twitter card Description</label>
      <textarea class="large-text uniconTextArea" name="twitter_card_description" placeholder="Twitter card Description"></textarea>
    </div>
  </section>

</main>
  <?php
}

# Metabox hook
add_action('add_meta_boxes', 'unicon_og_content');
