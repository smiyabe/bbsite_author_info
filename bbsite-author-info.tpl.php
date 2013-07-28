<div class="author-info">
  <?php echo theme('user_picture', array('account' => $account)); ?>
  <?php if ($full_name): ?>
    <p class="full-name">
      <span class="label">投稿者:</span>
      <span class="value"><?php echo $full_name; ?></span>
      <?php if ($gplus_id): ?>
        <a href="//plus.google.com/<?php echo $gplus_id; ?>?prsrc=3" rel="author" target="_top" style="text-decoration:none;"><img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;margin:0 0 0 1em;padding:0;"/></a>
      <?php endif; ?>
    </p>
  <?php endif; ?>
  <?php if ($description): ?>
    <div class="author-description"><?php echo $description; ?></div>
  <?php endif; ?>
  <?php if ($gplus_id): ?>
    <div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/<?php echo $gplus_id; ?>" data-rel="author"></div>
  <?php endif; ?>
  <?php if ($facebook_id): ?>
    <div class="fb-follow" data-href="https://www.facebook.com/<?php echo $facebook_id; ?>" data-layout="button_count" data-show-faces="false" data-width="450"></div>
  <?php endif; ?>
  <?php if ($twitter_id): ?>
    <a href="https://twitter.com/<?php echo $twitter_id; ?>" class="twitter-follow-button" data-show-count="false">Follow @<?php echo $twitter_id; ?></a>
  <?php endif; ?>
  <?php if ($app_net_id): ?>
    <a href='https://alpha.app.net/<?php echo $app_net_id; ?>' class='adn-button' target='_blank' data-type='follow' data-width='277' data-height='27' data-user-id='@<?php echo $app_net_id; ?>' data-show-username='1' rel='me'>Follow me on App.net</a>
    <script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//d2zh9g63fcvyrq.cloudfront.net/adn.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'adn-button-js'));</script>
  <?php endif; ?>
</div>
