<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G')
?>

<?php if($time < 10): ?>
  <p>※　営業時間外です</p>
<?php endif; ?>

<?php
$s = 'あいうえお';
if ($s):
  echo '$sには文字が入っています';
endif;