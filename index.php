<?php
/**
 * 一款简洁并专注于显示文字内容的Material Design风格Typecho 主题，基于<a href="https://www.mdui.org/">MDUI</a>
 *
 * @package materiality-typecho-theme
 * @author EAimTY
 * @version 4.1.1
 * @link https://www.eaimty.com/
 */
?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php while ($this->next()): ?>
  <div class="mdui-card mdui-hoverable mdui-m-y-3">
    <div class="mdui-card-primary">
      <div class="mdui-card-primary-title"><a class="mdui-text-color-theme-accent" href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></div>
      <div class="mdui-card-primary-subtitle mdui-text-color-theme-text">
        <?php $this->date(); ?>
        <?php if (in_array('author', $this->options->article)): ?>
          <span> |</span><i class="mdui-icon materiality-icons">&#xe904;</i><a href="<?php $this->author->permalink(); ?>"><?php if (in_array('pangu', $this->options->feature)) echo "<nopangu>"; ?><?php $this->author(); ?><?php if (in_array('pangu', $this->options->feature)) echo "</nopangu>"; ?></a>
        <?php endif; ?>
        <?php if ($this->category && in_array('category', $this->options->article)): ?>
          <span> | </span><i class="mdui-icon materiality-icons">&#xe907;</i><?php $this->category(', '); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="mdui-card-content mdui-typo"><?php $this->content(); ?></div>
    <div class="mdui-card-actions">
      <a class="mdui-btn mdui-ripple mdui-text-color-theme-accent" href="<?php $this->permalink(); ?>">继续阅读</a>
    </div>
  </div>
<?php endwhile; ?>
<div class="mdui-m-y-3" id="pagenav">
  <?php $this->pageNav('&#xe913;', '&#xe914;', 2, '...', [
    'itemTag'      => '',
    'textTag'      => 'div class="mdui-btn mdui-ripple mdui-text-color-theme-accent" mdui-tooltip="{content: \'共有' . ceil($this->getTotal()) . '篇文章\'}"',
    'currentClass' => 'mdui-btn-active',
    'prevClass'    => 'mdui-icon materiality-icons',
    'nextClass'    => 'mdui-icon materiality-icons',
    'wrapTag'      => 'div',
    'wrapClass'    => 'mdui-btn-group'
  ]); ?>
</div>
<?php $this->need('footer.php'); ?>
