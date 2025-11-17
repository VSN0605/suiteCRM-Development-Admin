<?php
/* Smarty version 4.5.5, created on 2025-11-14 12:30:34
  from 'C:\wamp64\www\crm_folder\testingCRM\include\ListView\ListViewColumnsFilterLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691720eac29e17_42974478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fddabe433ced77ff81867a4983c63d3b242941b4' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\ListView\\ListViewColumnsFilterLink.tpl',
      1 => 1762851051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691720eac29e17_42974478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>
<ul class="clickMenu selectmenu SugarActionMenu columnsFilterLink listViewLinkButton listViewLinkButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
" onclick="columnsFilter.onOpen();">
    <li class="sugar_action_button">
        <a href="#" class="glyphicon glyphicon-th-list" data-toggle="modal" data-target=".modal-columns-filter" title='<?php echo smarty_function_sugar_translate(array('label'=>"LBL_COLUMN_CHOOSER"),$_smarty_tpl);?>
'></a>
    </li>
</ul>
<?php }
}
