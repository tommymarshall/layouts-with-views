<nav class="global-nav">
  <ul>
    <?php if ($show_home): ?>
      <li><a href="<?= $this->route('/'); ?>"<?= ($this->matches('/') ? ' class="active"' : ''); ?>>Home</a></li>
    <?php endif; ?>
    <li><a href="<?= $this->route('about'); ?>"<?= ($this->matches('about') ? ' class="active"' : ''); ?>>About</a></li>
    <li><a href="<?= $this->route('pages/test'); ?>"<?= ($this->matches('pages/test') ? ' class="active"' : ''); ?>>Sub Page</a></li>
  </ul>
</nav>
