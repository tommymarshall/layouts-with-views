<nav class="global-nav">
	<ul>
		<?php if ($show_home): ?>
			<li><a href="<?php $this->route('/'); ?>"<?php echo ($this->matches('/') ? ' class="active"' : ''); ?>>Home</a></li>
		<?php endif; ?>
		<li><a href="<?php $this->route('about'); ?>"<?php echo ($this->matches('about') ? ' class="active"' : ''); ?>>About</a></li>
		<li><a href="<?php $this->route('pages/test'); ?>"<?php echo ($this->matches('pages/test') ? ' class="active"' : ''); ?>>Sub Page</a></li>
	</ul>
</nav>
