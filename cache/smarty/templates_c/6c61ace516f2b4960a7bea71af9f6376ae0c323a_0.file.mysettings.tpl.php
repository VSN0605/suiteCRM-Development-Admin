<?php
/* Smarty version 4.5.5, created on 2025-11-18 06:23:47
  from 'C:\wamp64\www\crm_folder\testingCRM\custom\modules\Contacts\tpls\mysettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691c10f3bdad96_34014395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c61ace516f2b4960a7bea71af9f6376ae0c323a' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\testingCRM\\custom\\modules\\Contacts\\tpls\\mysettings.tpl',
      1 => 1763025306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691c10f3bdad96_34014395 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="mysettings" action="index.php?module=Contacts&action=mysettings" name="mysettings" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['username']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" required><br><br>

  <label for="password">Password:</label><br>
  <input style="width: 100%" type="password" id="password" name="password" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['password']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" required><br><br>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['email']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
"><br><br>

  <label for="message">Message:</label><br>
  <textarea id="message" name="message" rows="4" cols="50"><?php ob_start();
echo $_smarty_tpl->tpl_vars['message']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</textarea><br><br>

  <input type="submit" id='submitbutton' name='submitbutton' value="Submit">
</form><?php }
}
