<?php
/* Smarty version 4.5.5, created on 2025-11-18 06:25:02
  from 'C:\wamp64\www\crm_folder\testingCRM\include\utils\recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691c113e2873f6_27263840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8cb1dc26c668ef09eb4242de1ec614c1155c363' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\utils\\recaptcha_disabled.tpl',
      1 => 1762851030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691c113e2873f6_27263840 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
