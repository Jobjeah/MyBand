<?php
/* Smarty version 3.1.30, created on 2017-06-06 10:18:59
  from "C:\Users\jobgr\OneDrive\Documents\Mediacollege Amsterdam\Projecten\myband\MyBandV_M\MyBandV_M\views\news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59368193a89702_31605165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7fec672cdd1abd6bd4af64e6fd7900f2fed2ac0' => 
    array (
      0 => 'C:\\Users\\jobgr\\OneDrive\\Documents\\Mediacollege Amsterdam\\Projecten\\myband\\MyBandV_M\\MyBandV_M\\views\\news.tpl',
      1 => 1496744327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59368193a89702_31605165 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="news">
    <div class="container-news">
<div class="articles">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result_list']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <article>
        <h2><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2>
        <h3 class="thick"><?php echo $_smarty_tpl->tpl_vars['article']->value['headline'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
</p><br />

        <div class="content">
            <div class="read-more">
        <content><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</content> <br />
        <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['alt'];?>
" />
        <br /><br />
            </div>
        </div>

    </article>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</div>

<div id="sidebar">
    <h3>NBA Finals</h3>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result_list2']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
 alt=<?php echo $_smarty_tpl->tpl_vars['image']->value['alt'];?>
" /><br />
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
</div>
</div><?php }
}
