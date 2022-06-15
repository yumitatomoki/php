<?php
$fruits = [
  'apple' => 'りんご',
  'grape' => 'ぶどう',
  'lemon' => 'レモン',
  'tomato' => 'トマト',
  'peach' => 'もも'
];
?>
<dl>
  <?php foreach ($fruits as $english => $japanese): ?>
    <dd><?php echo $english; ?></dd>
    <dd><?php echo $japanese; ?></dd>
  <?php endforeach; ?>
</dl>