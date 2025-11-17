<?php
/* Smarty version 4.5.5, created on 2025-11-14 12:35:39
  from 'C:\wamp64\www\crm_folder\testingCRM\cache\modules\AOW_WorkFlow\LeadsEditViewstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6917221b202b05_56207095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d5f3e8fbd6f3ae1b9313b557a8abbc9f620acb' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\testingCRM\\cache\\modules\\AOW_WorkFlow\\LeadsEditViewstatus.tpl',
      1 => 1763123739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6917221b202b05_56207095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>


    <select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
"
            id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
"
            title=''  tabindex="1"              
            >

        <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['status']['value']))) {?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['value']),$_smarty_tpl);?>

        <?php } else { ?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['default']),$_smarty_tpl);?>

        <?php }?>
    </select>


<?php }
}
