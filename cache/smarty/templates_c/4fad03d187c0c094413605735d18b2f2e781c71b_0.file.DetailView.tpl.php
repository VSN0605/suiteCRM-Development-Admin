<?php
/* Smarty version 4.5.5, created on 2025-11-14 12:22:37
  from 'C:\wamp64\www\crm_folder\testingCRM\cache\themes\SuiteP\modules\Schedulers\DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69171f0dc5b587_35645275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fad03d187c0c094413605735d18b2f2e781c71b' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\testingCRM\\cache\\themes\\SuiteP\\modules\\Schedulers\\DetailView.tpl',
      1 => 1763122957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69171f0dc5b587_35645275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\Smarty\\plugins\\function.sugar_include.php','function'=>'smarty_function_sugar_include',),1=>array('file'=>'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),2=>array('file'=>'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\Smarty\\plugins\\modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),3=>array('file'=>'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>


<?php echo '<script'; ?>
 language="javascript">
    
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['enable_action_menu']) {?>
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
" id="duplicate_button"><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> 
</div>
<?php }?>
</form>
</div>
</td>
<td align="right" width="20%" class="buttons"><?php echo $_smarty_tpl->tpl_vars['ADMIN_EDIT']->value;?>

</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div class="detail-view">
<div class="mobile-pagination"><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
</div>

<ul class="nav nav-tabs">

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'Schedulers'),$_smarty_tpl);?>

</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'Schedulers'),$_smarty_tpl);?>

</a>
</li>
<?php }
if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">ACTIONS<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"><?php }?> </li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
" id="duplicate_button"><?php }?> </li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> </li>
</ul>
</li>
<li class="tab-inline-pagination">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</li>
<?php }?>
</ul>
<div class="clearfix"></div>

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>

<div class="tab-content">
<?php } else { ?>

<div class="tab-content" style="padding: 0; border: 0;">
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="name" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="status">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="status" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['status']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



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
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_time_start">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_TIME_START','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="datetimecombo" field="date_time_start" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_time_start']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['date_time_start']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="time_from">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_FROM','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="time" field="time_from" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['time_from']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="time_from" class="sugar_field"><?php echo (($tmp = $_smarty_tpl->tpl_vars['fields']->value['time_from']['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALWAYS'] ?? null : $tmp);?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_time_end">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_TIME_END','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="datetimecombo" field="date_time_end" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_time_end']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['date_time_end']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="time_to">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_TO','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="time" field="time_to" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['time_to']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="time_to" class="sugar_field"><?php echo (($tmp = $_smarty_tpl->tpl_vars['fields']->value['time_to']['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALWAYS'] ?? null : $tmp);?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="last_run">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LAST_RUN','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="datetime" field="last_run" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['last_run']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="last_run" class="sugar_field"><?php echo (($tmp = $_smarty_tpl->tpl_vars['fields']->value['last_run']['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEVER'] ?? null : $tmp);?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="job_interval">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_INTERVAL','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="job_interval" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['job_interval']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="job_interval" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['JOB_INTERVAL']->value;?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="catch_up">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CATCH_UP','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="bool" field="catch_up" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['catch_up']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" value="$fields.catch_up.value" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="job">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_JOB','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="job" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['job']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['job']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['job']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_entered">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_ENTERED','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="datetime" field="date_entered" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_entered']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="date_entered" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_entered']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['created_by_name']['value'];?>
&nbsp;</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_modified">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_MODIFIED','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="datetime" field="date_modified" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_modified']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="date_modified" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_modified']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['modified_by_name']['value'];?>
&nbsp;</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>

</div>
<?php } else { ?>

<div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
<?php }?>
</div>

<div class="panel-content">
<div>&nbsp;</div>





<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>

<?php } else { ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel--1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'Schedulers'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="DEFAULT">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="name" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="status">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="status" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['status']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



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
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_time_start">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_TIME_START','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="datetimecombo" field="date_time_start" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_time_start']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['date_time_start']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="time_from">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_FROM','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="time" field="time_from" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['time_from']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="time_from" class="sugar_field"><?php echo (($tmp = $_smarty_tpl->tpl_vars['fields']->value['time_from']['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALWAYS'] ?? null : $tmp);?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_time_end">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_TIME_END','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="datetimecombo" field="date_time_end" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_time_end']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['date_time_end']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="time_to">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_TO','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="time" field="time_to" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['time_to']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="time_to" class="sugar_field"><?php echo (($tmp = $_smarty_tpl->tpl_vars['fields']->value['time_to']['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALWAYS'] ?? null : $tmp);?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="last_run">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LAST_RUN','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="datetime" field="last_run" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['last_run']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="last_run" class="sugar_field"><?php echo (($tmp = $_smarty_tpl->tpl_vars['fields']->value['last_run']['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEVER'] ?? null : $tmp);?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="job_interval">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_INTERVAL','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="job_interval" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['job_interval']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="job_interval" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['JOB_INTERVAL']->value;?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="catch_up">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CATCH_UP','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="bool" field="catch_up" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['catch_up']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" value="$fields.catch_up.value" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="job">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_JOB','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="job" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['job']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['job']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['job']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_entered">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_ENTERED','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="datetime" field="date_entered" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_entered']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="date_entered" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_entered']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['created_by_name']['value'];?>
&nbsp;</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_modified">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_MODIFIED','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="datetime" field="date_modified" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_modified']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="date_modified" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_modified']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['modified_by_name']['value'];?>
&nbsp;</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>

</div>
</div>
</div>
<?php }?>
</div>
</div>

</form>
<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>            <?php echo '<script'; ?>
 type="text/javascript" src="include/InlineEditing/inlineEditing.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="modules/Favorites/favorites.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

                    let selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                        $('#content div.detail-view div.panel-content div.panel.panel').hide();
                        $('#content div.panel-content div.panel.tab-panel-' + tab).show();
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                <?php echo '</script'; ?>
>
<?php }
}
