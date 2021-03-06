<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="mdui-card mdui-m-y-3">
  <div class="mdui-card-primary">
    <div class="mdui-card-primary-title mdui-text-color-theme-accent"><?php $this->title(); ?></div>
    <div class="mdui-card-primary-subtitle mdui-text-color-theme-text">
      <?php $this->date(); ?>
      <?php if (in_array('author', $this->options->article)): ?>
        <span> |</span><i class="mdui-icon materiality-icons">&#xe904;</i><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
      <?php endif; ?>
    </div>
  </div>
  <div class="mdui-card-content mdui-typo">
    <?php if ($this->fields->index == "show"): ?>
      <?php getIndex(); ?>
    <?php endif; ?>
    <?php $this->content(); ?>
  </div>
</div>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
