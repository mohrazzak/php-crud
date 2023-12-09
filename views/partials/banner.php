<h3 class="text-3xl fonst-medium text-gray-700 mt-4 ml-7"><?=$heading?></h3>
<?php if (urlIs('/')) : ?>
    <h4 class="text-3xl fonst-medium text-gray-700 mt-4 ml-7">Welcome <?= $_SESSION['user']['name'] ?></h4>
<?php endif; ?>