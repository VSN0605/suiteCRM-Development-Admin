<?php
/* Smarty version 4.5.5, created on 2025-11-17 04:49:21
  from 'C:\wamp64\www\crm_folder\testingCRM\modules\Emails\templates\displayIndicatorField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691aa951497274_18466277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c019a914683df51499cb0ac519a14c54568d0de' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\testingCRM\\modules\\Emails\\templates\\displayIndicatorField.tpl',
      1 => 1762850988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691aa951497274_18466277 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="email-indicator">
    <?php if ($_smarty_tpl->tpl_vars['bean']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['status'] == 'unread') {?>
            <div class="email-new"></div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['is_imported'] == true && $_smarty_tpl->tpl_vars['bean']->value['inbound_email_record'] == $_REQUEST['inbound_email_record']) {?>
            <div class="email-imported"><span class="glyphicon glyphicon-ok"></span></div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['flagged'] == 1) {?>
            <span class="email-flagged">!</span>
        <?php }?>
    <?php }?>
</div>
<?php }
}
