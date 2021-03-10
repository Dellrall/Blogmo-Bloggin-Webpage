<div class="error">
<?php if (count($error) > 0): ?>
  <?php foreach ($errors as $error); ?>
  <p> <?php echo $error; ?> </p>
</div>
<?php endif ?>
