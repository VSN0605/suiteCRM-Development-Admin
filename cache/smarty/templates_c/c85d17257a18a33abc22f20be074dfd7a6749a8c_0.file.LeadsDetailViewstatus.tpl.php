<?php
/* Smarty version 4.5.5, created on 2025-11-14 12:35:24
  from 'C:\wamp64\www\crm_folder\testingCRM\cache\modules\AOW_WorkFlow\LeadsDetailViewstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6917220cd40871_32332888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c85d17257a18a33abc22f20be074dfd7a6749a8c' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\testingCRM\\cache\\modules\\AOW_WorkFlow\\LeadsDetailViewstatus.tpl',
      1 => 1763123724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6917220cd40871_32332888 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['status']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['options'][$_smarty_tpl->tpl_vars['fields']->value['status']['value']];?>

<?php }
}
}
