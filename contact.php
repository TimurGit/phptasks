<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Главная страница</title>
</head>
<body>

<header>
<?php

//$subdomain = explode('.', $_SERVER['HTTP_HOST'])[0];
$subdomain = explode('.', 'msk.example.com')[0];
  function getContactPhone($subdomain) {
    $phones = [
      'default' => '8 800 000 00 00',
      'msk'     => '8 800 100 00 00',
      'spb'     => '8 800 200 00 00',
      'ekt'     => '8 800 300 00 00',
      'prm'     => '8 800 400 00 00'
    ];

    return $phones[$subdomain] ?? $phones['default'];
  }
  echo getContactPhone($subdomain);
?>
</header>


<footer>
  <?php echo getContactPhone($subdomain); ?>
</footer>
</body>
</html>