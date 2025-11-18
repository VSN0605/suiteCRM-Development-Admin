<?php
/* Smarty version 4.5.5, created on 2025-11-18 06:25:01
  from 'C:\wamp64\www\crm_folder\testingCRM\include\MVC\View\tpls\displayLoginJS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691c113dcb8052_67949686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6506d5f0a317d99bcb44816b3ca1ed69768db1d' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\MVC\\View\\tpls\\displayLoginJS.tpl',
      1 => 1762851045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691c113dcb8052_67949686 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['MODULE_SUGAR_GRP1']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">var module_sugar_grp1 = '<?php echo $_smarty_tpl->tpl_vars['MODULE_SUGAR_GRP1']->value;?>
';<?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['ACTION_SUGAR_GRP1']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">var action_sugar_grp1 = '<?php echo $_smarty_tpl->tpl_vars['ACTION_SUGAR_GRP1']->value;?>
';<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1_JQUERY']->value;?>
" z><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1_YUI']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['CALENDAR']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    if ( typeof(SUGAR) == 'undefined' ) {SUGAR = {}};
    if ( typeof(SUGAR.themes) == 'undefined' ) SUGAR.themes = {};

<?php echo '</script'; ?>
>

<?php }
}
