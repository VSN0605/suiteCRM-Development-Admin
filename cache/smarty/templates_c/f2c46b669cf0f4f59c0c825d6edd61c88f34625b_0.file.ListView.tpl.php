<?php
/* Smarty version 4.5.5, created on 2025-11-14 12:22:42
  from 'C:\wamp64\www\crm_folder\testingCRM\include\SugarFields\Fields\Base\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69171f12e1abd8_47647741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2c46b669cf0f4f59c0c825d6edd61c88f34625b' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\SugarFields\\Fields\\Base\\ListView.tpl',
      1 => 1762851050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69171f12e1abd8_47647741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
