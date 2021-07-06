<?php
    $this->title = 'Profile';
?>
<h1>Profile</h1>

<?php if ($user) : ?>

    <h2><?php echo $user->firstname . ' ' . $user->lastname ?></h2>

<?php endif ?>