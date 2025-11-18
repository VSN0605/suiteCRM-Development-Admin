<?php
/* Smarty version 4.5.5, created on 2025-11-18 05:36:58
  from 'C:\wamp64\www\crm_folder\testingCRM\themes\SuiteP\include\ListView\ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691c05fa3e23a9_91953630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdf0465d0b53dd84488213d3879717491487a156' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\testingCRM\\themes\\SuiteP\\include\\ListView\\ListViewSelectObjects.tpl',
      1 => 1762851058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691c05fa3e23a9_91953630 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
