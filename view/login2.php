<?php
$fb = new Facebook\Facebook([
  'app_id' => '{1515550475147431}', // Replace {app-id} with your app id
  'app_secret' => '{2d888780ead7f45544ee5cef0f528ddd}',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';