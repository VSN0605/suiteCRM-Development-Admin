<?php
/* Smarty version 4.5.5, created on 2025-11-11 12:46:53
  from 'C:\wamp64\www\crm_folder\testingCRM\modules\Campaigns\WizardMarketing.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6913303def6f89_67102316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3db12ffa349daecdf4d6a55edde7016304df30db' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\testingCRM\\modules\\Campaigns\\WizardMarketing.html',
      1 => 1762850991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6913303def6f89_67102316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\Smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),2=>array('file'=>'C:\\wamp64\\www\\crm_folder\\testingCRM\\include\\Smarty\\plugins\\function.sugar_getscript.php','function'=>'smarty_function_sugar_getscript',),));
?>
<!--
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

/**

 */
-->
<?php if ($_smarty_tpl->tpl_vars['hideScreen']->value) {?><div style="display:none;"><?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		$('#wiz_stage').show();
	});
<?php echo '</script'; ?>
>

<div id='wiz_stage' style="display:none;">
<form  id="wizform" name="wizform" method="POST" action="index.php" enctype="multipart/form-data">
	<input type="hidden" name="module" value="Campaigns">
	<input type="hidden" id="record" name="record" value="<?php echo $_smarty_tpl->tpl_vars['MRKT_ID']->value;?>
">
	<input type="hidden" name="campaign_id" value="<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
">
	<input type="hidden" id='action' name="action">
	<input type="hidden" id="return_module" name="return_module" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_MODULE']->value;?>
">
	<input type="hidden" id="return_id" name="return_id" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ID']->value;?>
">
	<input type="hidden" id="return_action" name="return_action" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ACTION']->value;?>
">
	<input type="hidden" id="direct_step" name="direct_step" value='4'>
	<input type="hidden" id="wiz_total_steps" name="totalsteps" value="3">
	<input type="hidden" id="wiz_current_step" name="currentstep" value='0'>
	<input type="hidden" id="wiz_back" name="wiz_back" value='none'>
	<input type="hidden" id="wiz_next" name="wiz_next" value='2'>
	<input type="hidden" id="direction" name="wiz_direction" value='exit'>
	<input type="hidden" id="show_wizard_summary" name="show_wizard_summary" value='0'>
	<input type="hidden" id="sendMarketingEmailTest" name="sendMarketingEmailTest" value="0">
	<input type="hidden" id="sendMarketingEmailSchedule" name="sendMarketingEmailSchedule" value="0">

	<?php echo $_smarty_tpl->tpl_vars['WIZMENU']->value;?>


<p>
<div id ='buttons'>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" >
		<tr>
			<td align="left" width='30%'>
				<table border="0" cellspacing="0" cellpadding="0" ><tr>

					<tr>
						<td><div id="back_button_div2"><input id="wiz_back_button" type='hidden' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BACK'];?>
" class="button" onclick="determine_back();"  name="back" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BACK'];?>
"></div></td>

						<td<?php if ($_smarty_tpl->tpl_vars['campaign_type']->value != 'NewsLetter' || $_smarty_tpl->tpl_vars['campaign_type']->value == 'Email') {?> style="display:none;"<?php }?>><div id="back_button_div"><input id="wiz_back_button" type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BACK'];?>
" class="button" onclick="determine_back();"  name="back" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BACK'];?>
"></div></td>


						<td><div id="cancel_button_div"><input id="wiz_cancel_button" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button"

															   type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
">

							<?php echo '<script'; ?>
>
								
								$(function(){
									$('#wiz_cancel_button').click(function(){
										this.form.action.value='WizardHome';
										this.form.module.value='Campaigns';
										this.form.record.value='<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
';

										// if mail box is not set up you can't cancel out of the wizard
										<?php if ($_smarty_tpl->tpl_vars['campaign_type']->value == 'NewsLetter' || $_smarty_tpl->tpl_vars['campaign_type']->value == 'Email') {?>
										var current = document.getElementById('wiz_current_step').value;
										if(current == 1 || current == 2) {
											var total = document.getElementById('wiz_total_steps').value;
											document.getElementById('wiz_current_step').value = document.getElementById('wiz_total_steps').value;
											$('#step' + current).hide();
											$('#step' + total).show();
											return false;
										}
										<?php }?>

										$(this).closest('form').submit();
									});
								});
								
							<?php echo '</script'; ?>
>

						</div></td>

						<td><div id="save_button_div"><input id="wiz_submit_button" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button" onclick="this.form.action.value='WizardMarketingSave'; this.form.module.value='Campaigns'; $('#show_wizard_summary').val('1'); " type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NEXT_BUTTON_LABEL'];?>
" ></div>
						</td>

						<td><div id="next_button_div"><input id="wiz_next_button" type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NEXT_BUTTON_LABEL'];?>
" class="button" onclick="javascript:onNextClick();" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NEXT_BUTTON_LABEL'];?>
"></div></td>
					</tr>
				</table>
			</td>
			<td  align="right" width='40%'><div id='wiz_location_message'></td>
		</tr>
	</table>
</div>
</p>

	<?php echo '<script'; ?>
 type="text/javascript">
		


		var uploadFormCallback = function() {
			console.log('override this..');
		};

		$(function(){
			$('#upload_form').submit(function(){
				var formData = new FormData($(this)[0]);
				$.post($(this).attr('action'), formData, function(data){
					uploadFormCallback(data);
				});
				return false;
			});
		});

		var hasNewAttachments = function() {
			return $('#upload_form input[type=file]').length > 1;
		};

		var submitMarketingEmailAttachments = function(callback) {
			$('#attach_to_template_id').val($('#template_id').val());
			///$('#attach_to_marketing_id').val($('#record').val());


			if(typeof callback != 'undefined') {
				uploadFormCallback = callback;
			}

			$('#upload_form input[type="submit"]').click();

		};

		// validations

		var emailTemplateFormValidationRules = [
			{id: 'template_id', rules: ['required'], dependency: function() {
				return !$('input[name="update_exists_template"]').prop('checked');
			}},
			{id: 'template_name', rules: ['required']},
			//{id: 'template_subject', rules: ['required']},
		];

		var ruleMessages = {
			required: '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
'
		};

		var hideEmailTemplateFormErrors = function() {
			var fields = emailTemplateFormValidationRules;
			for(var i=0; i<fields.length; i++) {
				var field = fields[i];
				$('#' + field.id).css('background-color', 'initial');
				var errorElem = $('#' + field.id).next();
				if(errorElem.hasClass('required') && errorElem.hasClass('validation-message')) {
					errorElem.remove();
				}
			}
		};

		var showEmailTemplateFormErrors = function(errors) {
			hideEmailTemplateFormErrors();
			for(var i=0; i<errors.length; i++) {
				var error = errors[i];
				$('#' + error.field.id).css('background-color', 'red');
				$('#' + error.field.id).animate({'background-color': 'white'}, 1500);
				$('#' + error.field.id).after('<div class="required validation-message">' + error.message + '</div>');
			}
		};

		var isValidEmailTemplateFormAndShowErrors = function() {
			var errors = [];

			var fields = emailTemplateFormValidationRules;


			for(var i=0; i<fields.length; i++) {
				var field = fields[i];
				for(var j=0; j<field.rules.length; j++) {
					var rule = field.rules[j];
					switch(rule) {
						default: case 'required':
							if(typeof field.dependency != 'undefined') {
								if(field.dependency()) {
									rule = 'none';
								}
							}
						break;
					}
					switch(rule) {
						case 'none': break;
						default: case 'required':
							if(!$('#' + field.id).val()) {
								errors.push({
									'field': field,
									'rule': rule,
									'message': ruleMessages[rule],
								});
							}
							break;
					}

				}
			}

			if(errors.length) {
				showEmailTemplateFormErrors(errors);
				return false;
			}
			return true;
		};

		function onNextClick() {
			switch(document.getElementById('wiz_current_step').value) {
				case '1':
						var updateChecked = $('input[name="update_exists_template"]').prop('checked');

						if($('#template_id').val() == '') {
							alert(SUGAR.language.translate('Campaigns', 'LBL_STEP_INFO_EMAIL_TEMPLATE'));
							return false;
						}

//						if(!updateChecked) {
							// validate email template form before save
							if (isValidEmailTemplateFormAndShowErrors()) {
								onSaveCopyMarketingEmailTemplate(function () {
									onSaveMarketingEmail(function(){
										if (hasNewAttachments()) {
											submitMarketingEmailAttachments(function(){
												onNext();
												wizardMenuSetStepLink(4);
											});
										}
										else {
											onNext();
											wizardMenuSetStepLink(4);
										}
									});
								});
							}
//						} else {
//							onNext();
//							wizardMenuSetStepLink(4);
//						}
					break;

				case '2':
					// save/create marketing email first
					onSaveMarketingEmail(function(){
						onNext();
						refreshMarketingSelect();
					});
					break;

				default:
					onNext();
					break;

			}
		}

		var emailTemplateCopyId = null;

		function onSaveCopyMarketingEmailTemplate(callback) {



			var func = emailTemplateCopyId || $('input[name="update_exists_template"]').prop('checked') ? 'update': 'createCopy';

			var getAttachmentsForRemove = function() {
				var attachmentsForRemove = [];
				$('#step1_uploader input[type="checkbox"]').each(function(){
					if($(this).attr('name') == 'remove_attachment[]' && $(this).prop('checked')) {
						attachmentsForRemove.push($(this).val());
					}
				});
				return attachmentsForRemove;
			};

			$.post('index.php?entryPoint=emailTemplateData&rand='+Math.random(), {
				'func': func,
				'campaignId': $('input[name="campaign_id"]').val(),
				'emailTemplateId' : emailTemplateCopyId ? emailTemplateCopyId : $('#template_id').val(),
				'body_html': SuiteEditor.getValue(),
				'name': $('#template_name').val(),
				'subject': $('#template_subject').val(),
//				'attachmentsAdd': getAttachmentsForAdd(),
				'attachmentsRemove': getAttachmentsForRemove()
			}, function(resp){
				// todo: hide preloader or loading message..
				resp = JSON.parse(resp);
				if(resp.error) {
					// todo: show error
					console.error(resp.error);
				}
				else {
					if(!emailTemplateCopyId && func == 'createCopy') {
						emailTemplateCopyId = resp.data.id;
						$('#template_id').append('<option value="' + resp.data.id + '">' + resp.data.name + '</option>');
						$('#template_id').val(resp.data.id);

						$('input[name="update_exists_template"]').prop('checked', true);
					}
					callback();
				}
			});
			// todo: show preloader or loading message...
		}

		function onSaveMarketingEmail(callback) {
			var data = $('#wizform').serialize();
			if(emailTemplateCopyId) {
				data = data.replace(/&template_id=[^&]+&/, '&template_id='+emailTemplateCopyId+'&');
			}
			$.post('index.php?entryPoint=emailMarketingData&func=wizardUpdate&rand='+Math.random(), data, function(resp){
				// todo: hide preloader or loading message..
				resp = JSON.parse(resp);
				if(resp.error) {
					// todo: show error
					console.error(resp.error);
				}
				else {
					resp.data = JSON.parse(resp.data);
					//$('#record').replaceWith('<input type="hidden" id="record" value="' + resp.data.id + '">');
					document.getElementById('record').value = resp.data.id;
					callback();
				}
			});
			// todo: show preloader or loading message...
		}

		function onNext() {
			navigate('next', false, true);
			if(document.getElementById('wiz_current_step').value == document.getElementById('wiz_total_steps').value) {
				wizardMenuFillAll();
			}
			changeNextBtnLabel();
			saveMarketingAndTemplate('getTemplateValidation');
		}

		function changeNextBtnLabel() {
			if(document.getElementById('wiz_current_step').value == '2') {
				$('#wiz_next_button').val('<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CREATE_MARKETING_RECORD'];?>
');
			}
			else {
				$('#wiz_next_button').val('<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NEXT_BUTTON_LABEL'];?>
');
			}
		}

		//returns a js date

		function toDate(datestr) {
			var $format = "", $splitformat = ["","",""], $dbformat = ["","",""];
			// Get user preferences date format
			$format = cal_date_format
			$format = $format.toUpperCase();
			$format = $format.replace('%D', 'DD')
			$format = $format.replace('%M', 'MM')
			$format = $format.replace('%Y', 'YYYY')

			// return js date
			return moment(datestr, $format).toDate()
		}

		$(document).ready(function(){

			YAHOO.util.Event.addListener(YAHOO.util.Selector.query('#date_start_date'), "change", function(){
				var $date = toDate(YAHOO.util.Selector.query('#date_start_date')[0].value);
				if($date == 'Invalid Date') {
					$('#date_start_date').val('')
				}
			});

			$('#date_start_date').change(function() {
				var $date = toDate(YAHOO.util.Selector.query('#date_start_date')[0].value);
				if($date == 'Invalid Date') {
					$('#date_start_date').val('')
				}
			})
		});
		
	<?php echo '</script'; ?>
>


<table class='other view' cellspacing="1">
<tr>


<td  rowspan='2' width='100%' style="padding: 0;">
<div id="wiz_message"></div>
	<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

<div id=wizard class="wizard-unique-elem">
	<div id='step1' class="edit view" style="display:none;  margin-top: 8px;">
		<div id="templateManager" class="template-panel">
			<div id="templateManagerDialog">
				<div id="emailTemplateDialog" class="hidden">

				</div>

				<div id="emailTrackerDialog" class="hidden">
					<h2 class="header-2"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TRACKER_TITLE'];?>
</h2>
					<div class="clear"></div>
					<div class="template-container-full">
						<div class="hidden">
							<label><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TRACKER_KEY'];?>
</label>
							<input type="text" size="100" tabindex='1' name="tracker_name" id="tracker_name" value="<?php echo $_smarty_tpl->tpl_vars['TRACKER_NAME']->value;?>
" class="errorable form-control input-sm" placeholder="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EDIT_TRACKER_NAME'];?>
">
							<span id="tracker_name_error" style="display: none;" class="error_message" for="tracker_name"></span>
						</div>
						<div class="clear"></div>
						<div class="form-group">
							<label><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TRACKER_TEXT'];?>
</label>
							<input type="text" size="100" maxlength="255" id="url_text" name="url_text" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_URL_TEXT']->value;?>
" class="form-control input-sm" />
						</div>
						<div class="clear"></div>
						<div class="form-group">
							<label><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TRACKER_URL'];?>
:</label>
							<input type="text" maxlength='255' size="100" tabindex='3' <?php echo $_smarty_tpl->tpl_vars['TRACKER_URL_DISABLED']->value;?>
 name="tracker_url_add" id="tracker_url_add" value="<?php echo $_smarty_tpl->tpl_vars['TRACKER_URL']->value;?>
" class="errorable form-control input-sm" placeholder="http://" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EDIT_TRACKER_URL'];?>
">
							<span id="tracker_url_error" style="display: none;" class="error_message" for="tracker_url"></span>
						</div>
						<div class="clear"></div>
						<div class="form-group">
							<span><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['MOD']->value['LBL_EDIT_OPT_OUT'],' ','&nbsp');?>
</span><input onclick="toggle_tracker_url(this);" name="is_optout" id="is_optout" tabindex='2' type="checkbox" <?php echo $_smarty_tpl->tpl_vars['IS_OPTOUT_CHECKED']->value;?>
/>
							<input type='button' tabindex="0" onclick='<?php echo $_smarty_tpl->tpl_vars['INSERT_URL_ONCLICK']->value;?>
' class='button hidden' value='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INSERT_URL_REF'];?>
'>
						</div>
					</div>
				</div>
				<div id="templateManagerDialogActions" class="form-group hidden">
					<input type="button" id="templateManagerActionOK" value="OK">
					<input type="button" id="templateManagerActionCancel" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
">
				</div>
			</div>

			<div class="template-panel-container panel">
				<div class="template-container-full ">
					<h4 class="header-4" style="border-bottom: solid 1px #eee;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TEMPLATE'];?>
</h4>
					<div class="clear">&nbsp;</div>
					<div><label class="wizard-step-info"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PLEASE_SELECT_OPTION'];?>
</label></div>
					<style>
						
						ul.template_option_list {list-style-type: none; padding-left: 0; margin-bottom: 8px;}
						ul.template_option_list input {position: relative; top: -6px;}
						ul.template_option_list label {font-weight: normal;}
						
					</style>
					<ul class="template_option_list">
						<li><input type="radio" name="template_option_radio" id="template_option_select"> <label for="template_option_select"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OPTION_SELECT_TEMPLATE'];?>
</label></li>
						<li><input type="radio" name="template_option_radio" id="template_option_create"> <label for="template_option_create"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OPTION_CREATE_TEMPLATE'];?>
</label></li>
						<li><input type="radio" name="template_option_radio" id="template_option_copy"  > <label for="template_option_copy"  ><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OPTION_COPY_TEMPLATE'];?>
</label></li>
					</ul>
					<?php echo '<script'; ?>
>
						
						$(function(){

							$('#template_option_select').click(function(){
								$('#template_id_select_frm').show();
								$('#template_name_input_frm').hide();
								$('#template_id_name_space_separator').hide();
								$('#LBL_SAVE_EMAIL_TEMPLATE_BTN').show();
								$('#LBL_CREATE_EMAIL_TEMPLATE_BTN').hide();
								$('input[name="update_exists_template"]').prop('checked', true);
							});

							$('#template_option_create').click(function(){
								$('#template_id_select_frm').hide();
								$('#template_name_input_frm').show();
								$('#template_id_name_space_separator').hide();
								$('#LBL_SAVE_EMAIL_TEMPLATE_BTN').hide();
								$('#LBL_CREATE_EMAIL_TEMPLATE_BTN').show();
								$('input[name="update_exists_template"]').prop('checked', false);
								emailTemplateCopyId = null;
							});

							$('#template_option_copy').click(function(){
								$('#template_id_select_frm').show();
								$('#template_name_input_frm').show();
								$('#template_id_name_space_separator').show();
								$('#LBL_SAVE_EMAIL_TEMPLATE_BTN').hide();
								$('#LBL_CREATE_EMAIL_TEMPLATE_BTN').show();
								$('input[name="update_exists_template"]').prop('checked', false);
							});


							$('#template_id_select_frm').hide();
							$('#template_name_input_frm').hide();
							$('#template_id_name_space_separator').hide();
							$('#LBL_SAVE_EMAIL_TEMPLATE_BTN').hide();
							$('#LBL_CREATE_EMAIL_TEMPLATE_BTN').hide();

							if($('#template_id').val()) {
								$('#template_option_select').click();
							}
							else {
								$('#template_option_select').click();
							}

							// fix lost buttons
							$('#show_buttons_frm').removeClass('hidden');

						});
						
					<?php echo '</script'; ?>
>
					<div class="form-group clear-block">
						<!--<label><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['MOD']->value['LBL_TEMPLATE'],' ','&nbsp');?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></label>-->
						<div id="template_id_select_frm">
							<label><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TEMPLATE_FIELD'];?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></label>
							<select  class="form-control input-sm" id="template_id" name='template_id' tabindex='2' onchange="onEmailTemplateChange(this, '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_COPY_OF'];?>
');" title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TEMPLATE'];?>
'><?php echo $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE_OPTIONS']->value;?>
</select>
						</div>
						<div class="clear">&nbsp;</div>
						<br style="disply:none;" id="template_id_name_space_separator">
						<div id="template_name_input_frm">
							<label><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAME'];?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></label>
							<input type="text" class="form-control input-sm" id="template_name" name="template_name" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
" maxlength="255" size="100">
							<span class="form-group hidden">
								<label><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['MOD']->value['LBL_UPDATE_TEMPLATE'],' ','&nbsp');?>
</label>
								<input type="checkbox" name="update_exists_template" class="form-checkbox input-sm hidden">
							</span>
						</div>
						<?php if (!$_smarty_tpl->tpl_vars['hide_width_set']->value) {?>
						<?php echo '<script'; ?>
>
							
							$(function(){
								if(document.getElementById('template_id').value) {
									onEmailTemplateChange(document.getElementById('template_id'), '{$MOD.LBL_COPY_OF}');
								}
							});
							
                        <?php echo '</script'; ?>
>
						<?php }?>
						<?php echo '<script'; ?>
>
							
							function loadtemplate() {
									if (document.getElementById('template_id').value) {
										onEmailTemplateChange(document.getElementById('template_id'), '{$MOD.LBL_COPY_OF}');
									}
							}
							
						<?php echo '</script'; ?>
>
					</div>
					<div id="template_messages"></div>
					<div class="button-group" id="show_buttons_frm">
						<input type="button" id="LBL_SAVE_EMAIL_TEMPLATE_BTN" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_EMAIL_TEMPLATE_BTN'];?>
" onclick="EmailTemplateController('save')">
					<!-- </div> -->
					<!-- <div class="button-group-separator"></div> -->
					<!-- <div class="button-group"> -->
						<input type="button" id="LBL_CREATE_EMAIL_TEMPLATE_BTN" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CREATE_EMAIL_TEMPLATE_BTN'];?>
" onclick="EmailTemplateController('create')" class="">
					</div>
				</div>
			</div>
			<div class="template-panel-container panel-toolbar ">
				<div class="template-container">
					<h2 class="header-2"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TRACKED_URLS'];?>
</h2>
					<div class="clear"></div>

					<div class="form-group clear-block">
						<select class="form-control input-sm" tabindex='0' id="trackerUrlSelect" name='tracker_url' onchange='setTrackerUrlSelectVisibility();'>
							<option value="-1"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CREATE_TRACKER_URL'];?>
</option>
							<?php echo $_smarty_tpl->tpl_vars['TRACKER_KEY_OPTIONS']->value;?>

						</select>
					</div>

					<div class="button-group">
						<input type="button" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INSERT_TRACKER_BTN'];?>
" onclick="EmailTrackerController('insert', '<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
');">
					</div>
					<div class="button-group-separator"></div>
					<div class="button-group">
						<input type='button' id="LBL_CREATE_TRACKER_BTN" tabindex="0" class='button' value='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CREATE_TRACKER_BTN'];?>
' onclick="EmailTrackerController('create', '<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
')">
						<input type='button' id="LBL_EDIT_TRACKER_BTN" tabindex="0" class='button' value='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EDIT_TRACKER_BTN'];?>
' onclick="EmailTrackerController('edit', '<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
')">
					</div>

				</div>
				<div class="template-container">
					<h2 class="header-2"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_VARIABLES'];?>
</h2>
					<div class="clear"></div>
					<?php echo '<script'; ?>
 src="modules/EmailTemplates/EmailTemplate.js"><?php echo '</script'; ?>
>
					<?php echo '<script'; ?>
 type="text/javascript">
						<?php echo $_smarty_tpl->tpl_vars['FIELD_DEFS_JS']->value;?>

					<?php echo '</script'; ?>
>


					
					<?php echo '<script'; ?>
 type="text/javascript">
						$(function(){
							addVariables(document.wizform.variable_name,document.wizform.variable_module.options[document.wizform.variable_module.selectedIndex].value, 'wizform');
						});
					<?php echo '</script'; ?>
>
					

					<div class="form-group clear-block">

						<select class="form-control input-sm" name='variable_module' tabindex="0" onchange="addVariables(document.wizform.variable_name,this.options[this.selectedIndex].value, 'wizform');">
							<?php echo $_smarty_tpl->tpl_vars['DROPDOWN']->value;?>

						</select>
						<div class="pad">&nbsp;</div>

						<select class="form-control input-sm" name='variable_name' tabindex="0" onchange="showVariable('wizform');">
						</select>
					</div>

					<div class="hidden">
						<span scope="row">
							<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USE'];?>

						</span>
						<input type="text" size="30" tabindex="0" name="variable_text" />
					</div>

					<!-- BEGIN: variable_button -->
					<div class="button-group">
						<input id="insert_variable_to_body_btn" type='button' tabindex="0" onclick='<?php echo $_smarty_tpl->tpl_vars['INSERT_VARIABLE_ONCLICK']->value;?>
' class='button' value='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INSERT_VARIABLE_BTN'];?>
' style="display: none;">
						<input id="insert_variable_to_subject_btn" type='button' tabindex="0" onclick='insert_variable(document.wizform.variable_text.value, "template_subject")' class='button' value='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INSERT_VARIABLE_SUBJECT_BTN'];?>
'>
					</div>
					<!-- END: variable_button -->
				</div>

			</div>
			<div class="template-panel-container">
				<div class="">
					<div>
						
						<?php echo '<script'; ?>
 type="text/javascript">

							var setTrackerUrlSelectVisibility = function(){

								if($('select[name="tracker_url"]').val()=='-1') {
									$('#insert_tracker_div').hide();
									$('#create_tracker_div').show();
								}
								else {
									$('#insert_tracker_div').show();
									$('#create_tracker_div').hide();
								}
							};
							$(function(){
								setTrackerUrlSelectVisibility();
							});

						<?php echo '</script'; ?>
>
						<?php echo '<script'; ?>
 type="text/javascript">
							function toggle_tracker_url(isoptout) {
								tracker_url = document.getElementById('tracker_url_add');
								if (isoptout.checked) {
									tracker_url.disabled=true;
									tracker_url.value="index.php?entryPoint=removeme";
								} else {
									tracker_url.disabled=false;
								}
							}

							var setFieldErrorMessage = function(field, message) {
								$('#' + field).css('background-color', 'red');
								$('#' + field).css({'background-color': 'white'}, 1500);
								$('#' + field + '_error').html(message).show();
							};

							var hideFieldErrorMessages = function() {
								$('.error_message').each(function(i,e){
									$('#' + $(e).attr('for')).css('background-color', 'initial');
									$(e).html('').hide();
								});
							};

							var onCampaignTrackerSaveClick = function() {

								var trackerName = $('#tracker_name').val();
								var trackerURL = $('#tracker_url_add').val();

								// validate elements fisrt

								var errors = [];
								if(!trackerName) {
									errors.push({field: 'tracker_name', message: '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_REQUIRED_TRACKER_NAME'];?>
'});
								}
								if(!trackerURL) {
									errors.push({field: 'tracker_url', message: '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_REQUIRED_TRACKER_URL'];?>
'});
								}
								hideFieldErrorMessages();
								if(errors.length) {
									for(var i=0; i<errors.length; i++) {
										setFieldErrorMessage(errors[i].field, errors[i].message);
									}
								}
								else {

									$.post('index.php?entryPoint=campaignTrackerSave', {
										module: 'CampaignTrackers',
										record: '', // TODO .. campaign tracker ID on update
										action: 'Save',
										campaign_id: '<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
',
										tracker_name: trackerName,
										tracker_url: trackerURL,
										is_optout: $('#is_optout').prop('checked') ? 'on' : '',
										response_json: true
									}, function (resp) {
										resp = JSON.parse(resp);
										if (resp.data.id) {
											// TODO do it only when user want to create a new one as "copy and save.." function
											$('select[name="tracker_url"]').append('<option value="{' + trackerName + '}">' + trackerName + ' : ' + trackerURL + '</option>');
											$('select[name="tracker_url"]').val('{' + trackerName + '}');
											$('#url_text').val('{' + trackerName + '}');
										}
										setTrackerUrlSelectVisibility();
										//insert_variable_html_link(document.wizform.tracker_url.value);
									});

								}
							};

							$(function(){
								$('.errorable').focus(function(){
									$(this).css('background-color', 'initial');
								});
							});
						<?php echo '</script'; ?>
>
						
						<div class="panel-toolbar">
							<div class="template-container-full">
								<h2 class="header-2"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUBJECT'];?>
</h2>
								<div class="form-group clear-block">
									<input type="text" id="template_subject" name="template_subject" value="<?php echo $_smarty_tpl->tpl_vars['template_subject']->value;?>
" class="form-control input-sm"  maxlength="255" size="100" onclick="onClickTemplateSubject(this);">
								</div>
							</div>
						</div>

						<?php if (!$_smarty_tpl->tpl_vars['hide_width_set']->value) {?>
						<div class="panel-toolbar">
							<div class="template-container">
								<h2 class="header-2"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIDTH'];?>
</h2>
								<input type="number" class="form-control input-sm" id="mozaik_width_set" onkeyup="mozaik.setWidth(parseInt(this.value)+'px');" onmouseup="mozaik.setWidth(parseInt(this.value)+'px'); "value="<?php echo $_smarty_tpl->tpl_vars['template_width']->value;?>
" >
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="step2" class="step2" style="display: none;">

		<div class="template-panel">
			<div class="template-panel-container panel">
				<div class="template-container-full">
		<table border="0" cellpadding="0" cellspacing="0" width="100%" class='edit view'>

			<tr>
				<td colspan="4">
					<h4 class="header-4"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MRKT_NAME'];?>
</h4>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<label class="wizard-step-info"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_STEP_INFO_MARKETING'];?>
</label>
				</td>
			</tr>
			<tr>

				<td scope="col" NOWRAP valign="top"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MRKT_NAME_FIELD'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></span></td>
				<td ><span><input id='marketing_name' name='wiz_step3_name' title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MRKT_NAME'];?>
' size='25' maxlength='255' type="text" value="<?php echo $_smarty_tpl->tpl_vars['MRKT_NAME']->value;?>
"></span></td>
			</tr>


			<tr>
				<td scope="col" NOWRAP valign="top"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FROM_MAILBOX_NAME'];?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></span></td>
				<td>
					<span>
						<select  title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FROM_MAILBOX_TITLE'];?>
' id='inbound_email_id' name='wiz_step3_inbound_email_id' onchange='set_from_reply_info(this);'><?php echo $_smarty_tpl->tpl_vars['MAILBOXES']->value;?>
</select>
					</span>
					<!--
					<br>
					<a href="index.php?module=InboundEmail&action=index" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_SETTINGS_TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_SETTINGS'];?>
</a>
					<img border="0" class="inlineHelpTip" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_SETTINGS_TITLE'];?>
','','','dialogHelpPopup')" src="index.php?entryPoint=getImage&amp;themeName=SuiteR&amp;imageName=helpInline.gif">
					<br>
					<a href="index.php?module=InboundEmail&action=EditView&mailbox_type=bounce" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_CREATE_TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_CREATE'];?>
</a>
					<img border="0" class="inlineHelpTip" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_CREATE_TITLE'];?>
','','','dialogHelpPopup')" src="index.php?entryPoint=getImage&amp;themeName=SuiteR&amp;imageName=helpInline.gif">
					-->
				</td>

				<td style="display: none;" scope="col" NOWRAP valign="top"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_STATUS_TEXT'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></span></td>
				<td style="display: none;"><span><select tabindex='2' id='status' title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_STATUS_TEXT'];?>
' name='wiz_step3_status'><?php echo $_smarty_tpl->tpl_vars['STATUS_OPTIONS']->value;?>
</select></span></td>

			</tr>

			<tr>
				<td scope="col" NOWRAP valign="top"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OUTBOUND_MAILBOX_NAME'];?>
</span></td>
				<td>
					<span>
						<select  title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OUTBOUND_MAILBOX_NAME'];?>
' id='outbound_email_id' name='wiz_step3_outbound_email_id' onchange='set_from_reply_info(this);'><?php echo $_smarty_tpl->tpl_vars['OUTBOUND_MAILBOXES']->value;?>
</select>
					</span>
					<!--
					<br>
					<a href="index.php?module=InboundEmail&action=index" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_SETTINGS_TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_SETTINGS'];?>
</a>
					<img border="0" class="inlineHelpTip" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_SETTINGS_TITLE'];?>
','','','dialogHelpPopup')" src="index.php?entryPoint=getImage&amp;themeName=SuiteR&amp;imageName=helpInline.gif">
					<br>
					<a href="index.php?module=InboundEmail&action=EditView&mailbox_type=bounce" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_CREATE_TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_CREATE'];?>
</a>
					<img border="0" class="inlineHelpTip" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_INBOUND_EMAIL_CREATE_TITLE'];?>
','','','dialogHelpPopup')" src="index.php?entryPoint=getImage&amp;themeName=SuiteR&amp;imageName=helpInline.gif">
					-->
				</td>

			</tr>


			<tr>

				<td scope="col" NOWRAP valign="top"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_START_DATE_TIME'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></span></td>
				<td  style="display:none;" class="datafield"><span><table  cellpadding="0" cellspacing="0"><tr><td nowrap><input title ='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_START_DATE_TIME'];?>
' id='date_start' name='wiz_step3_date_start' onblur="parseDate(this, '<?php echo $_smarty_tpl->tpl_vars['CALENDAR_DATEFORMAT']->value;?>
');" size='11' tabindex='1' maxlength='10' type="text" value="<?php echo $_smarty_tpl->tpl_vars['MRKT_DATE_START']->value;?>
"> <span class="suitepicon suitepicon-module-calendar" alt="<?php echo $_smarty_tpl->tpl_vars['CALENDAR_DATEFORMAT']->value;?>
"  id="jscal_trigger"></span>&nbsp;</td>
				<td  style="display:none;" nowrap><input type="text" size='5' maxlength='5' id='time_start'  name='wiz_step3_time_start' tabindex="1" value="<?php echo $_smarty_tpl->tpl_vars['MRKT_TIME_START']->value;?>
"/><?php echo $_smarty_tpl->tpl_vars['TIME_MERIDIEM']->value;?>
</td></tr><tr><td nowrap><span class="dateFormat"><?php echo $_smarty_tpl->tpl_vars['USER_DATEFORMAT']->value;?>
</span></td><td nowrap><span class="dateFormat"><?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
</span></td></tr></table></span>
					<?php echo '<script'; ?>
 type="text/javascript">
						
						$(function(){
							if($('#date_start_meridiem').length) {
								$('#date_start_hours option').each(function(i,e){
									if(parseInt($(e).attr('value'))>12) {
										$(e).hide();
									}
								});
							}
						});
						
					<?php echo '</script'; ?>
>
				</td>

				<td>



					<!-- ------------------------------ -->
					<!-- ------------------------------ -->
					<!-- DATE TIME COMBO FOR START DATE -->
					<!-- ------------------------------ -->
					<!-- ------------------------------ -->

					<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
						<tr valign="middle">
							<td nowrap class="datafield" style="width:150px;">
								<input type="hidden" id="userTimeFormat" value="<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
">
								<input autocomplete="off" type="text" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_date" value="<?php echo $_smarty_tpl->tpl_vars['MRKT_DATE_START']->value;?>
" xxx="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_start']['name']]['value'];?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
.update(); parseDate(this, '<?php echo $_smarty_tpl->tpl_vars['CALENDAR_DATEFORMAT']->value;?>
');" onchange="combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
.update();parseDate(this, '<?php echo $_smarty_tpl->tpl_vars['CALENDAR_DATEFORMAT']->value;?>
'); "    >
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "other_attributes", null);?>alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
" style="position:relative; top:6px" border="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_trigger"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_trigger" class="btn btn-danger" onclick="return false;" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span></button>
							</td>
							<td nowrap colspan="5" style="width:200px;">
								
								<?php echo '<script'; ?>
 type="text/javascript">
									setInterval(function(){
										$('input[name="wiz_step3_date_start"]').val($('#date_start_date').val());
										$('input[name="wiz_step3_time_start"]').val($('#date_start_hours').val() + $('#userTimeFormat').val()[3] + $('#date_start_minutes').val());
										$('select[name="meridiem"]').val($('#date_start_meridiem').val());
										if(parseInt($('#date_start_hours').val())>12) {
											$('#date_start_meridiem').val('PM');
										}
									},100);
								<?php echo '</script'; ?>
>
								
								<div id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_time_section"></div>
								<?php echo '<script'; ?>
 type="text/javascript">
									function set_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_values(form) {
									if(form.<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_flag.checked)  {
									form.<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_flag.value=1;
									form.<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
.value="";
									form.<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
.readOnly=true;
									} else  {
									form.<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_flag.value=0;
									form.<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
.readOnly=false;
									}
									}
								<?php echo '</script'; ?>
>
							</td>
						</tr>
						<tr valign="middle">
							<td nowrap>
								<span class="dateFormat"><?php echo $_smarty_tpl->tpl_vars['USER_DATEFORMAT']->value;?>
</span>
							</td>
							<td nowrap>
								<span class="dateFormat"><?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
</span>
							</td>
						</tr>
					</table>
					<input type="hidden" class="DateTimeCombo" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_start']['name']]['value'];?>
">
					<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
					<?php echo '<script'; ?>
 type="text/javascript">
						var combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
 = new Datetimecombo("<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_start']['name']]['value'];?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
", "0", '1', false, true);
						//Render the remaining widget fields
						combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
.timeseparator = $('#userTimeFormat').val()[3];
						text = combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
.html('');
						document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_time_section').innerHTML = text;

						//Call eval on the update function to handle updates to calendar picker object
						eval(combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
.jsscript(''));

						//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
						//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
						//addToValidate('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
',"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_date",'date',false,"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
");
						addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
',"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_hours", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_HOURS'];?>
" ,"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_date");
						addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_minutes", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MINUTES'];?>
" ,"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_date");
						addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_meridiem", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MERIDIEM'];?>
","<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_date");

						YAHOO.util.Event.onDOMReady(function()
						{

						Calendar.setup ({
						onClose : update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
,
						inputField : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_date",
								form : "<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
",
								ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_DATEFORMAT']->value;?>
",
								daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_DATEFORMAT']->value;?>
",
								button : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
_trigger",
								singleClick : true,
								step : 1,
								weekNumbers: false,
								startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
						comboObject: combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
,
						form: '<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
'
						});

						//Call update for first time to round hours and minute values
						combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['name'];?>
.update(false);

						});
					<?php echo '</script'; ?>
>

					<!-- ------------------------------------- -->
					<!-- ------------------------------------- -->
					<!-- END OF DATE TIME COMBO FOR START DATE -->
					<!-- ------------------------------------- -->
					<!-- ------------------------------------- -->




				</td>


			</tr>


		</table>






		<div class="wizard-box">
			<label><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FROM_NAME'];?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></label><br>
			<input name='wiz_step3_from_name' id='from_name' title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FROM_NAME'];?>
' tabindex='2' size='25' maxlength='<?php echo $_smarty_tpl->tpl_vars['MRKT_FROM_NAME_LEN']->value;?>
' type="text" value="<?php echo $_smarty_tpl->tpl_vars['MRKT_FROM_NAME']->value;?>
"><br>
			<span class="helpmsg"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FROM_NAME_HELP'];?>
</span>
		</div>

		<div class="wizard-box">
			<label><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FROM_ADDR'];?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></label><br>
			<input name='wiz_step3_from_addr' id='from_addr' title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FROM_ADDR'];?>
' tabindex='2' size='25' maxlength='<?php echo $_smarty_tpl->tpl_vars['MRKT_FROM_NAME_LEN']->value;?>
' type="text" value="<?php echo $_smarty_tpl->tpl_vars['MRKT_FROM_ADDR']->value;?>
"><br>
			<span class="helpmsg"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FROM_ADDR_HELP'];?>
</span>
		</div>

		<div class="clear"></div>

		<div class="wizard-box">
			<label><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REPLY_NAME'];?>
</label><br>
			<input name='wiz_step3_reply_to_name' id='reply_name' title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REPLY_NAME'];?>
' tabindex='2' size='25' maxlength='<?php echo $_smarty_tpl->tpl_vars['MRKT_REPLY_NAME_LEN']->value;?>
' type="text" value="<?php echo $_smarty_tpl->tpl_vars['MRKT_REPLY_NAME']->value;?>
"><br>
			<span class="helpmsg"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REPLY_TO_NAME_HELP'];?>
</span>
		</div>

		<div class="wizard-box">
			<label><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REPLY_ADDR'];?>
</label><br>
			<input name='wiz_step3_reply_to_addr' id='reply_addr' title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REPLY_ADDR'];?>
' tabindex='2' size='25' maxlength='<?php echo $_smarty_tpl->tpl_vars['MRKT_REPLY_ADDR_LEN']->value;?>
' type="text" value="<?php echo $_smarty_tpl->tpl_vars['MRKT_REPLY_ADDR']->value;?>
"><br>
			<span class="helpmsg"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REPLY_TO_ADDR_HELP'];?>
</span>
		</div>

				</div>
			</div>
		</div>


		<table border="0" cellpadding="0" cellspacing="0" width="100%" class='edit view'>

			<tr style="display: none;">
				<td scope="col" NOWRAP valign="top"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MESSAGE_FOR'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></span></td>
				<td class="datafield"><span><input type="checkbox"  tabindex='1' onclick="toggle_message_for(this);" id="all_prospect_lists" <?php echo $_smarty_tpl->tpl_vars['ALL_PROSPECT_LISTS_CHECKED']->value;?>
 name='all_prospect_lists' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MESSAGE_FOR'];?>
"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALL_PROSPECT_LISTS'];?>
</span></td>

			</tr>
			<tr style="display: none;">
				<td  NOWRAP valign="top"><span>&nbsp;</span></td>
				<td width="35%" class="datafield"><span><select <?php echo $_smarty_tpl->tpl_vars['MESSAGE_FOR_DISABLED']->value;?>
  tabindex='1' multiple size="5" id="message_for" name='message_for[]' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MESSAGE_FOR'];?>
"><?php echo $_smarty_tpl->tpl_vars['SCOPE_OPTIONS']->value;?>
</select></span></td>
				<td  NOWRAP valign="top"><span>&nbsp;</span></td>
				<td><span>&nbsp;</span></td>
			</tr>
		</table>


		
		<?php echo '<script'; ?>
 type="text/javascript">
                    $(document).ready(function(){
                       $('#inbound_email_id').change();
                       $('#outbound_email_id').change();
                    });
/*
			Calendar.setup ({
				inputField : "date_start", ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_DATEFORMAT']->value;?>
", showsTime : false, button : "jscal_trigger", singleClick : true, step : 1
			});
*/

//		function show_edit_template_link(field) {
//
//			var field1=document.getElementById('edit_template');
//			if (field.selectedIndex == 0) {
//				field1.style.visibility="hidden";
//			}
//			else {
//				field1.style.visibility="visible";
//			}
//		}

		function refresh_email_template_list(template_id, template_name) {
			var field=document.getElementById('template_id');
			var bfound=0;
			for (var i=0; i < field.options.length; i++) {
					if (field.options[i].value == template_id) {
						if (field.options[i].selected==false) {
							field.options[i].selected=true;
						}
						field.options[i].text = template_name;
						bfound=1;
					}
			}
			//add item to selection list.
			if (bfound == 0) {
				var newElement=document.createElement('option');
				newElement.text=template_name;
				newElement.value=template_id;
				field.options.add(newElement);
				newElement.selected=true;
			}

			//enable the edit button.
			var field1=document.getElementById('edit_template');
			field1.style.visibility="visible";
		}

		function open_email_template_form() {
		
			URL="index.php?module=EmailTemplates&action=EditView&campaign_id=<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
";
			URL+="&sugar_body_only=1";
		
			windowName = 'email_template';
			windowFeatures = 'width=800' + ',height=600' 	+ ',resizable=1,scrollbars=1';

			win = window.open(URL, windowName, windowFeatures);
			if(window.focus)
			{
				// put the focus on the popup if the browser supports the focus() method
				win.focus();
			}
		}
		function edit_email_template_form() {
		
			var field=document.getElementById('template_id');
			URL="index.php?module=EmailTemplates&action=EditView&campaign_id=<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
";
			URL+="&sugar_body_only=1";
			
			if (field.options[field.selectedIndex].value != 'undefined') {
				URL+="&record="+field.options[field.selectedIndex].value;
			}
			windowName = 'email_template';
			windowFeatures = 'width=800' + ',height=600' 	+ ',resizable=1,scrollbars=1';

			win = window.open(URL, windowName, windowFeatures);
			if(window.focus)
			{
				// put the focus on the popup if the browser supports the focus() method
				win.focus();
			}
		}

		function toggle_message_for(all_prospects_checkbox) {
			message_for = document.getElementById('message_for');
			if (all_prospects_checkbox.checked) {
				message_for.disabled=true;
			} else {
				message_for.disabled=false;
			}
		}
		
		var from_emails=new Array(<?php echo $_smarty_tpl->tpl_vars['FROM_EMAILS']->value;?>
);
		
		function set_from_email_and_name(mailbox) {
			from_email_span = document.getElementById('from_email');
			from_name = document.getElementById('from_name');
			for (i=0; i<=from_emails.length; i++) {
				if ((mailbox.value == '' &&  from_emails[i] =='EMPTY') || from_emails[i] == mailbox.value) {
					var j=i+1;
					from_email_span.innerHTML=from_emails[j+1];
					if (from_name.value=='') {
						from_name.value=from_emails[j];
					}
					return;
				}
			}
		}

		
		// cn: bug 12587 - allow setting of Reply-to X from campaigns
		var ie_stored_options = <?php echo $_smarty_tpl->tpl_vars['IEStoredOptions']->value;?>
;
		var oe_stored_options = <?php echo $_smarty_tpl->tpl_vars['OEStoredOptions']->value;?>
;
		

		function set_from_reply_info(mailbox) {
			var fn = document.getElementById('from_name');
			var fa = document.getElementById('from_addr');
			var rn = document.getElementById('reply_name');
			var ra = document.getElementById('reply_addr');

			if(mailbox.value != '') {
				if(oe_stored_options[mailbox.value]) {
					var focusOe = oe_stored_options[mailbox.value];
					// from name

                                        if(!fn.value) {
                                            var fromName = focusOe.smtp_from_name ? focusOe.smtp_from_name : (
                                                focusOe.from_name ? focusOe.from_name : (
                                                    focusOe.name ? focusOe.name : ''
                                                ));
                                            if (fromName && fromName != "") {
                                                fn.value = fromName;
                                            } else {
                                                fn.value = '';
                                            }
                                        }

					// from addr
                                        if(!fa.value) {
                                            var fromAddr = focusOe.smtp_from_addr ? focusOe.smtp_from_addr : (
                                                focusOe.from_addr ? focusOe.from_addr : (
                                                    focusOe.mail_smtpuser ? focusOe.mail_smtpuser : ''
                                                ));
                                            if (fromAddr && fromAddr != "") {
                                                fa.value = fromAddr;
                                            } else {
                                                fa.value = '';
                                            }
                                        }
                                }
				if(ie_stored_options[mailbox.value]) {
					var focusIe = ie_stored_options[mailbox.value];
					// reply name
                                        if (!rn.value) {
                                            if (focusIe.from_name && focusIe.from_name != "") {
                                                rn.value = focusIe.from_name;
                                            } else {
                                                rn.value = '';
                                            }
                                        }

                                        // reply add
                                        if (!ra.value) {
                                            if(focusIe.from_addr && focusIe.from_addr != "") {
                                                ra.value = focusIe.from_addr;
                                            } else {
                                                ra.value = '';
                                            }
                                        }
				}
			} else {
				fn.value = '';
				fa.value = '';
				rn.value = '';
				ra.value = '';
			}
		}


		<?php echo '</script'; ?>
>
		

		<?php if ($_smarty_tpl->tpl_vars['MAILBOXES_DEAULT']->value) {?>
		<?php echo '<script'; ?>
 type="text/javascript">
			set_from_reply_info({value:"<?php echo $_smarty_tpl->tpl_vars['MAILBOXES_DEAULT']->value;?>
"});
		<?php echo '</script'; ?>
>
		<?php }?>

		</div>
	<div id='step3' data="summary-page" class="template-panel step3">
		<div class="template-panel-container panel">
			<div class="template-container-full">
				<h4 class="header-4" style="border-bottom: solid 1px #eee;padding-bottom: 8px"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUMMARY'];?>
</h4>
				<div class="clear">&nbsp;</div>
				<?php if ($_smarty_tpl->tpl_vars['campaign_type']->value == 'NewsLetter' || $_smarty_tpl->tpl_vars['campaign_type']->value == 'Email') {?>
					<div class="form-group">
						<label><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZ_SENDMAIL_TITLE'];?>
</label>
							<select id="marketing_select" class="form-control input-sm"></select>
														
							<?php echo '<script'; ?>
 type="text/javascript">
								var refreshMarketingSelect = function() {
									var marketingSelectValue = '<?php echo $_smarty_tpl->tpl_vars['EmailMarketingId']->value;?>
';
									if($('#marketing_select').val()){
										marketingSelectValue = $('#marketing_select').val();
									}
									$.get('index.php?entryPoint=emailMarketingList&campaign_id=<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
', function(resp){
										resp = JSON.parse(resp);
										if(resp.error) {
											// todo: show error
											console.log(error);
										}
										else {
											$('#marketing_select').html('');
											if(marketingSelectValue == '' && typeof resp.selectedId != 'undefined' && resp.selectedId) {
												marketingSelectValue = resp.selectedId;
											}
											for(var i=0; i<resp.data.length; i++) {
												var elem = resp.data[i];
												var selected = '';
												if(elem.id == marketingSelectValue) {
													selected = ' selected="selected"';

												}
												$('#marketing_select').append('<option value="' + elem.id + '"' + selected + '>' + elem.name + '</option>');
											}
											saveMarketingAndTemplate('getTemplateValidation');
										}
									});

								};

								var saveMarketingAndTemplate = function(func) {
									if(typeof func == 'undefined') {
										func = null;
									}
									var campaignId = '<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
';
									var marketingId = $('#marketing_select').val();
									//var templateId = $('#template_select').val();
									$.post('index.php?entryPoint=setCampaignMarketingAndTemplate', {
										'campaignId': campaignId,
										'marketingId': marketingId,
										'func': func
										//'templateId': templateId
									}, function(resp){
										resp = JSON.parse(resp);
										$('#alert_messages').html('');
										$.each(resp.templateValidationMessages, function(i, msg){
											$('#alert_messages').append('<font color="red">' + SUGAR.language.translate('Campaigns', msg) + '</forn><br>');
										});

										$('#marketing_status_lnk').removeAttr('title');
										$('#marketing_status_btn').removeClass('fail');
										if(!$('#marketing_status_btn').hasClass('ok')) {
											$('#marketing_status_btn').addClass('ok');
										}

										if(!$.isEmptyObject(resp.marketingValidationMessages)) {
											$('#marketing_status_lnk').attr(SUGAR.language.translate('EmailMarketing', 'LBL_ERROR_ON_MARKETING'));
											$('#marketing_status_btn').removeClass('ok');
											if(!$('#marketing_status_btn').hasClass('fail')) {
												$('#marketing_status_btn').addClass('fail');
											}
										}

										$('#marketing_errors').html('');
										$.each(resp.marketingValidationMessages, function(i, msg){
											$('#marketing_errors').append(SUGAR.language.translate('Campaigns', msg) + '<br>');
										});

									});
								};

								$(function(){
									refreshMarketingSelect();
									$('#marketing_select').change(function(){
										saveMarketingAndTemplate('getTemplateValidation');
									});
									/*
									 $('#template_select').change(function(){
									 saveMarketingAndTemplate();
									 });
									 */
								});
							<?php echo '</script'; ?>
>
							
					</div>
				<?php }?>
			</div>
		</div>
		<div class="template-panel-container panel-toolbar ">
			<div class="template-container-full">
				<h4 class="header-4" style="border-bottom: solid 1px #eee;padding-bottom: 8px"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CAMPAIGN_CHECKLIST'];?>
</h4>
				<div class="clear">&nbsp;</div>
				<div style="margin-bottom: 16px;">
					<?php if ($_smarty_tpl->tpl_vars['WARNING_MESSAGE']->value) {?>
					<div id='target_message' class="target_messege"><font color='red'><b><?php echo $_smarty_tpl->tpl_vars['WARNING_MESSAGE']->value;?>
</b></font></div>
					<br class="emptyRow">
					<?php }?>
					<div id="alert_messages" class="alert_message"></div>
					<?php if ($_smarty_tpl->tpl_vars['diagnose']->value) {?>
					<?php echo $_smarty_tpl->tpl_vars['diagnose']->value;?>

					<br class="emptyRow">
					<?php }?>
					<div id="marketing_errors" class="error">
						<?php if ($_smarty_tpl->tpl_vars['error_on_marketing_name']->value) {
echo $_smarty_tpl->tpl_vars['error_on_marketing_name']->value;?>
<br><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['error_on_marketing_inbound_email_id']->value) {
echo $_smarty_tpl->tpl_vars['error_on_marketing_inbound_email_id']->value;?>
<br><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['error_on_marketing_date_start']->value) {
echo $_smarty_tpl->tpl_vars['error_on_marketing_date_start']->value;?>
<br><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['error_on_marketing_from_name']->value) {
echo $_smarty_tpl->tpl_vars['error_on_marketing_from_name']->value;?>
<br><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['error_on_marketing_from_addr']->value) {
echo $_smarty_tpl->tpl_vars['error_on_marketing_from_addr']->value;?>
<br><?php }?>
					</div>
				</div>
				<ul>
					<li class="li-tick"><span class="suitepicon suitepicon-action-confirm"></span><a href="<?php echo $_smarty_tpl->tpl_vars['link_to_campaign_header']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CAMPAIGN_DETAILS_AND_CONDITIONS'];?>
</a></li>
					<li class="li-tick"><?php if ($_smarty_tpl->tpl_vars['error_on_target_list']->value) {?><span class="suitepicon suitepicon-action-clear"></span> <?php } else { ?><span class="suitepicon suitepicon-action-confirm"></span><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['link_to_target_list']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHOOSE_TARGETS'];?>
</a></li>
					<?php if ($_smarty_tpl->tpl_vars['campaign_type']->value == 'NewsLetter' || $_smarty_tpl->tpl_vars['campaign_type']->value == 'Email') {?>
					<li class="li-tick"><?php if ($_smarty_tpl->tpl_vars['error_on_templates']->value) {?><span class="suitepicon suitepicon-action-clear"></span> <?php } else { ?><span class="suitepicon suitepicon-action-confirm"></span><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['link_to_choose_template']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHOOSE_TEMPLATES'];?>
</a></li>
					<li class="li-tick"><?php if ($_smarty_tpl->tpl_vars['error_on_marketing']->value) {?><span class="suitepicon suitepicon-action-clear"></span> <?php } else { ?><span class="suitepicon suitepicon-action-confirm"></span><?php }?><a id="marketing_status_lnk" href="<?php echo $_smarty_tpl->tpl_vars['link_to_sender_details']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SENDER_DETAILS'];?>
</a></li>
					<li class="li-tick"><?php if ($_smarty_tpl->tpl_vars['error_on_scheduler2']->value || $_smarty_tpl->tpl_vars['error_on_mailbox2']->value) {?><span class="suitepicon suitepicon-action-clear"></span> <?php } else { ?><span class="suitepicon suitepicon-action-confirm"></span><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['link_to_scheduler']->value;
if (!$_smarty_tpl->tpl_vars['link_to_scheduler']->value) {
echo $_smarty_tpl->tpl_vars['link_to_email']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PROCESS_CAMPAIGN_EMAILS'];?>
</a></li>
					<li class="li-tick"><?php if ($_smarty_tpl->tpl_vars['error_on_scheduler1']->value || $_smarty_tpl->tpl_vars['error_on_mailbox1']->value) {?><span class="suitepicon suitepicon-action-clear"></span> <?php } else { ?><span class="suitepicon suitepicon-action-confirm"></span><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['link_to_scheduler']->value;
if (!$_smarty_tpl->tpl_vars['link_to_scheduler']->value) {
echo $_smarty_tpl->tpl_vars['link_to_email']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PROCESS_BOUNCED_EMAILS'];?>
</a></li>
					<?php }?>
				</ul>
			</div>
		</div>
		<div class="template-panel-container panel-toolbar ">
			<div class="template-container-full">
				<div class="button-group">
					<input type="hidden" name="wiz_home_next_step" value="1" />

					<a class="btn <?php if ($_smarty_tpl->tpl_vars['PL_DISABLED']->value) {?>btn-default<?php } else { ?>btn-primary<?php }?> btn-sm" style="border-radius: 0px;" <?php if ($_smarty_tpl->tpl_vars['PL_DISABLED']->value) {?> <?php } else { ?>href="javascript:;" onclick="onScheduleClick(this, '<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
', $('#marketing_select').val());"<?php }?>>
						<span class="suitepicon suitepicon-action-schedule"></span> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SEND_EMAIL'];?>

					</a>

					<a class="btn <?php if ($_smarty_tpl->tpl_vars['PL_DISABLED_TEST']->value) {?>btn-default<?php } else { ?>btn-primary<?php }?> btn-sm" style="border-radius: 0px;" <?php if ($_smarty_tpl->tpl_vars['PL_DISABLED_TEST']->value) {?> <?php } else { ?>href="javascript:;"  onclick="onSendAsTestClick(this, '<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
', $('#marketing_select').val());"<?php }?>>
					<span class="suitepicon suitepicon-module-emails"></span> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SEND_AS_TEST'];?>

					</a>
				</div>
				<div class="button-group-separator"></div>
				<div class="button-group">
					<a class="btn btn-primary btn-sm" href="index.php?module=Campaigns&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
" style="border-radius: 0px;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TODETAIL_BUTTON_TITLE'];?>
</a>
				</div>
				<?php if (!$_smarty_tpl->tpl_vars['PL_DISABLED']->value) {?>
				<div class="button-group">
					<a class="btn btn-primary btn-sm" href="index.php?module=Campaigns&action=TrackDetailView&record=<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
" style="border-radius: 0px;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TRACK_BUTTON_LABEL'];?>
</a>
					<a class="btn btn-primary btn-sm" href="index.php?module=Campaigns&action=RoiDetailView&record=<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
" style="border-radius: 0px;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TRACK_ROI_BUTTON_LABEL'];?>
</a>

				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>

</td>
</tr>
</table>

<div class="template-panel-container panel" id="step1_editor">
	<div class="template-container-full">
		<?php if (!$_smarty_tpl->tpl_vars['hide_width_set']->value) {?>
		<label><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CLICK_TO_ADD'];?>
</label>
		<br>
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['BODY_EDITOR']->value;?>

	</div>
</div>


<?php echo '<script'; ?>
 language="javascript">
function determine_back(){

	var current_step = document.getElementById('wiz_current_step').value;
    var total_steps = document.getElementById('wiz_total_steps').value;

	if(current_step == 1){

		document.getElementById('action').value='WizardNewsletter';
		document.getElementById('record').value='<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
';
		document.getElementById('return_id').value='<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
';
		document.getElementById('direct_step').value='4';
		document.getElementById('wizform').submit();

	}else{
		if (current_step == 2) {
			document.getElementById('wiz_current_step').value = 1;
			navigate('direct');
		}
		else {
			navigate('back');
		}
	}

	changeNextBtnLabel();
}
<?php echo '</script'; ?>
>

</form>

	<div id="step1_uploader" style="display: none;">
		<div class="template-container-attachment panel">


		<table>
			<!-- BEGIN: NoInbound2 -->
			<tr>
				<td valign="top" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ATTACHMENTS'];?>
:
				</td>
				<td colspan="2" nowrap id="attachments_container">
					<?php echo $_smarty_tpl->tpl_vars['ATTACHMENTS']->value;?>

				</td>
			</tr>
			<!-- END: NoInbound2 -->
		</table>
		<?php echo $_smarty_tpl->tpl_vars['ATTACHMENTS_JAVASCRIPT']->value;?>


		<!-- BEGIN: NoInbound3 -->
		<form id="upload_form" name="upload_form" method="POST" action="index.php?entryPoint=emailTemplateData&func=uploadAttachments" enctype="multipart/form-data"> <!-- action='AttachDocuments.php' -->
			<input type="submit" style="display:none;">
			<div id="upload_div">
				<input type="button" name="add_doc" id="add_doc" onclick="selectDoc();" value='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUITE_DOCUMENT'];?>
' class="button" />
				<label class="button">
					<input type="file" id="my_file" name="file_1" size="40" style="display: none" />
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_UPLOAD_FILE'];?>

				</label>
				<input type="hidden" id="documentName" name="uploaddoc" onchange="docUpload(); form_reset_doc();" size="1" />
				<input type="hidden" id="documentId" name="seldoc" tabindex="0" />
				<input type="hidden" id="docRevId" name="seldoc" tabindex="0" />
				<input type="hidden" id="documentType" name="seldoc" tabindex="0" />


				<input type="hidden" name="attach_to_template_id" id="attach_to_template_id" value="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_ID']->value;?>
">
				<input type="hidden" name="campaign_id" value="<?php echo $_smarty_tpl->tpl_vars['CAMPAIGN_ID']->value;?>
">
				<!-- <input type="hidden" name="attach_to_marketing_id" id="attach_to_marketing_id" value="<?php echo $_smarty_tpl->tpl_vars['MRKT_ID']->value;?>
"> -->

			</div>
			<div id="attachments_div">
			</div>
		</form>

		</div>
		<!-- END: NoInbound3 -->
	</div>
	<?php echo '<script'; ?>
 type="text/javascript" src="modules/Emails/javascript/Email.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function(){
			setInterval(function(){

				// show uploader form below template form only

				$('#step1_uploader').css('display', $('#step1').css('display'));

				// only show the template editor below step 1
				$('#step1_editor').css('display', $('#step1').css('display'));

				// hide cancel and save button on summary page

				$('#wiz_cancel_button').css('display', $('#step3').css('display') == 'block' ? 'none' : 'block');
				$('#wiz_submit_button').css('display', $('#step3').css('display') == 'block' ? 'none' : 'block');

			}, 300);
		});

		var multi_selector = new multiFiles(document.getElementById('upload_div'));
		multi_selector.addElement( document.getElementById('my_file'));

	<?php echo '</script'; ?>
>
	

</div>

<?php echo smarty_function_sugar_getscript(array('file'=>"modules/Campaigns/wizard.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->tpl_vars['WIZ_JAVASCRIPT']->value;?>

<?php echo $_smarty_tpl->tpl_vars['DIV_JAVASCRIPT']->value;?>

<?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>

<?php echo '<script'; ?>
 language="javascript">
//	link_navs();
//addToValidate('wizform', 'name', 'alphanumeric', true,  document.getElementById('name').title);
addToValidate('wizform', 'marketing_name', 'alphanumeric', true,  document.getElementById('marketing_name').title);
//addToValidate('wizform', 'date_start', 'alphanumeric', true,  document.getElementById('date_start').title);
addToValidate('wizform', 'inbound_email_id', 'alphanumeric', true,  document.getElementById('inbound_email_id').title);



function getParameterByName(name, url) {
	if (!url) url = window.location.href;
	name = name.replace(/[\[\]]/g, "\\$&");
	var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
			results = regex.exec(url);
	if (!results) return null;
	if (!results[2]) return '';
	return decodeURIComponent(results[2].replace(/\+/g, " "));
}



var jumpToPageByURL = function() {

	var jump = getParameterByName('jump');

	var func = getParameterByName('func');

	if(func == 'createEmailMarketing') {
		jump = 1;
	}


	var jumpToPage = function(jump, noValidation) {
		if(typeof noValidation == 'undefined') {
			noValidation = false;
		}
		var i=0;
		while (jump != document.getElementById('wiz_current_step').value && i<100) {
			var currentStep = document.getElementById('wiz_current_step').value;
			if(document.getElementById('wiz_current_step').value > document.getElementById('wiz_total_steps').value) {
				break;
			}
			navigate('next', noValidation, true);
			i++;
			if(document.getElementById('wiz_current_step').value == currentStep) {
				break;
			}
		}
		changeNextBtnLabel();
	};

	if(jump != null) {

		var campaignType = getParameterByName('campaign_type');
		var showWizardMarketing = getParameterByName('show_wizard_marketing');

		if(jump == 1 && func == 'createEmailMarketing') {
			jumpToPage(jump, true);
		}
		else if(jump == 3 && showWizardMarketing && campaignType != 'Email') {
			jumpToPage(jump, true);
		}
		else {

			if (jump == 2) {
				var templateId = getParameterByName('template_id');
				onEmailTemplateChange(document.getElementById('template_id'), '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_COPY_OF'];?>
', templateId, function () {
					jumpToPage(jump);
				});
			}
			else {
				jumpToPage(jump);
			}
		}
//		while (jump != document.getElementById('wiz_current_step').value && i<100) {
//			if(document.getElementById('wiz_current_step').value > document.getElementById('wiz_total_steps').value) {
//				break;
//			}
//			navigate('next');
//			i++;
//		}
	}
	else {
		$('#step1').show();
	}
};

var createEmptyMarketing = function(){
	saveMarketingAndTemplate('createEmailMarketing');
};

$(function(){
	jumpToPageByURL();

	if($('#func').val() == "createEmailMarketing" && parseInt($('.nav-steps.selected').attr('data-nav-step')) == 3) {
		createEmptyMarketing();
//		setTimeout(function() {
//			onSaveCopyMarketingEmailTemplate(function () {
//				if (hasNewAttachments()) {
//					submitMarketingEmailAttachments(function(){
//						onNext();
//						wizardMenuSetStepLink(4);
//					});
//				}
////				else {
////					onNext();
////					wizardMenuSetStepLink(4);
////				}
//			});
//		}, 300);
	};
});



<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['hideScreen']->value) {?></div><?php }?>
<link rel="stylesheet" type="text/css" href="modules/EmailTemplates/EmailTemplate.css">
<?php echo '<script'; ?>
 src="include/javascript/moment.min.js"><?php echo '</script'; ?>
>
<?php }
}
