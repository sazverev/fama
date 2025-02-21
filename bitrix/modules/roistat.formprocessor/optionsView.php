<form novalidate="novalidate" method="POST" action="<? echo $APPLICATION->GetCurPage() ?>?mid=<?= htmlspecialcharsbx($mid) ?>&lang=<? echo LANGUAGE_ID ?>" name="ara" id="optionsForm">
    <? echo bitrix_sessid_post();
    $tabControl->BeginNextTab(); ?>
        <tr class='heading' id='check_default_type_block'>
            <td colspan='2'><?= GetMessage('ROISTAT_CUSTOM_SETTINGS_TITLE') ?></td>
        </tr>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('INTEGRATION_CODE') ?></b>
                <br>
                <div><i><?= GetMessage('INTEGRATION_CODE_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <input type="password" name="INTEGRATION_CODE" value="<?= $options['accessKey'] ?>">
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('LEAD_NAME') ?></b>
                <br>
                <div><i><?= GetMessage('LEAD_NAME_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <input type="text" name="LEAD_NAME" value="<?= $options['leadName'] ?>">
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('EXCLUDED_FORMS') ?></b>
                <br>
                <div><i><?= GetMessage('EXCLUDED_FORMS_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <select name="EXCLUDED_FORMS[]" multiple="multiple">
                    <? foreach($options['excludedForms'] as $key => $form) : ?>
                        <option value="<?= $form['ID'] ?>"<?= $form['ACTION'] == 'Y' ? 'selected="selected"' : '' ?>><?= $form['NAME'] ?></option>
                    <? endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('MATCHING_TITLE') ?></b>
                <br>
                <div><i><?= GetMessage('MATCHING_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <select name="MATCHING_FORMS[]" multiple="multiple">
                    <? foreach($options['matchingForms'] as $key => $form) : ?>
                        <option value="<?= $form['ID'] ?>"<?= $form['ACTION'] == 'Y' ? 'selected="selected"' : '' ?>><?= $form['NAME'] ?></option>
                    <? endforeach; ?>
                </select>
            </td>
        </tr>
        <? foreach($options['contactFields'] as $field) : ?>
            <tr>
                <td valign="top" width="50%">
                    <b><?= GetMessage($field['name'] . '_FIELD_VALUES_HEADER') ?></b>
                    <br>
                    <div><i><?= GetMessage($field['name'] . '_FIELD_VALUES_PROMPT') ?></i></div>
                </td>
                <td valign="top" width="50%">
                        <div>
                            <div valign="top" width="50%">
                                <select multiple="multiple" name="<?= $field['name'] ?>_FIELD_VALUES[]">
                                    <? foreach ($field['value'] as $k => $fld) : ?>
                                            <option value="<?= $fld['ID'] ?>"<?= $fld['ACTION'] == 'Y' ? 'selected="selected"' : '' ?>><?= $fld['NAME'] ?></option>
                                    <? endforeach; ?>
                                </select>
                            </div>
                        </div>
                </td>
            </tr>
        <? endforeach; ?>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('ORDER_CREATION_TITLE') ?></b>
                <br>
                <div><i><?= GetMessage('ORDER_CREATION_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <input type="text" name="ORDER_CREATION_VALUE" value="<?= $options['orderCreationValue'] ?>">
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('CALLBACK_TITLE') ?></b>
                <br>
                <div><i><?= GetMessage('CALLBACK_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <input type="checkbox" name="CALLBACK_VALUE" <?= $options['callbackValue'] ? 'checked="checked"' : '' ?>>
                <?= GetMessage('ON') ?>
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('CALLBACK_PHONE_TITLE') ?></b>
                <br>
                <div><i><?= GetMessage('CALLBACK_PHONE_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <input type="text" name="CALLBACK_PHONE_VALUE" value="<?= $options['callbackPhoneValue'] ?>">
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('DOUBLE_TITLE') ?></b>
                <br>
                <div><i><?= GetMessage('DOUBLE_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <input type="checkbox" name="DOUBLE_VALUE" <?= $options['doubleValue'] ? 'checked="checked"' : '' ?>>
                <?= GetMessage('ON') ?>
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('DOUBLE_APPEND_TITLE') ?></b>
                <br>
                <div><i><?= GetMessage('DOUBLE_APPEND_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <input type="checkbox" name="DOUBLE_APPEND_VALUE" <?= $options['doubleAppendValue'] ? 'checked="checked"' : '' ?>>
                <?= GetMessage('ON') ?>
            </td>
        </tr>
    <? $tabControl->BeginNextTab(); ?>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('ADDITIONAL_FIELDS') ?></b>
                <br>
                <div><i><?= GetMessage('ADDITIONAL_FIELDS_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <? foreach ($options['additionalFields'] as $key => $field) : ?>
                    <div class="additional_field additional_field_<?= $key ?>">
                        <div>
                            <b><i class="additional_field_header_<?= $key ?>"><?= GetMessage('ADDITIONAL_FIELD_HEADER') ?> №<span class="additional_field_header_value"><?= $key+1 ?></span></i></b>
                        </div>
                        <div valign="top" width="50%">
                            <?= GetMessage('ADDITIONAL_FIELD_ID') ?>
                        </div>
                        <div valign="top" width="50%">
                            <input type="text" name="ADDITIONAL_FIELD_IDS[<?= $key ?>]" value="<?= $field[0] ?>" class="additional_field_input">
                        </div>
                    </div>
                    <div class="additional_field additional_field_<?= $key ?>">
                        <div valign="top" width="50%">
                            <?= GetMessage('ADDITIONAL_FIELD_VALUE') ?>
                        </div>
                        <div valign="top" width="50%">
                            <input type="text" name="ADDITIONAL_FIELD_VALUES[<?= $key ?>]" value="<?= $field[1] ?>" class="additional_field_input" list="ADDITIONAL_FIELD_VALUES[<?= $key ?>]">
                            <datalist id="ADDITIONAL_FIELD_VALUES[<?= $key ?>]">
                                <option value="{source}"></option>
                                <option value="{utmSource}"></option>
                                <option value="{utmMedium}"></option>
                                <option value="{utmCampaign}"></option>
                                <option value="{utmTerm}"></option>
                                <option value="{utmContent}"></option>
                                <option value="{landingPage}"></option>
                                <option value="{city}"></option>
                                <option value="{agent}"></option>
                                <option value="{country}"></option>
                                <option value="{date}"></option>
                                <option value="{domain}"></option>
                                <option value="{email}"></option>
                                <option value="{facebookClientId}"></option>
                                <option value="{firstVisit}"></option>
                                <option value="{googleClientId}"></option>
                                <option value="{ip}"></option>
                                <option value="{markerSource}"></option>
                                <option value="{metrikaClientId}"></option>
                                <option value="{name}"></option>
                                <option value="{os}"></option>
                                <option value="{phone}"></option>
                                <option value="{referrer}"></option>
                                <option value="{region}"></option>
                                <option value="{roistatParam1}"></option>
                                <option value="{roistatParam2}"></option>
                                <option value="{roistatParam3}"></option>
                                <option value="{roistatParam4}"></option>
                                <option value="{roistatParam5}"></option>
                                <option value="{sourceAliasLevel1}"></option>
                                <option value="{sourceAliasLevel2}"></option>
                                <option value="{sourceAliasLevel3}"></option>
                                <option value="{sourceAliasLevel4}"></option>
                                <option value="{sourceAliasLevel5}"></option>
                                <option value="{sourceAliasLevel6}"></option>
                                <option value="{sourceAliasLevel7}"></option>
                                <option value="{sourceLevel1}"></option>
                                <option value="{sourceLevel2}"></option>
                                <option value="{sourceLevel3}"></option>
                                <option value="{sourceLevel4}"></option>
                                <option value="{sourceLevel5}"></option>
                                <option value="{sourceLevel6}"></option>
                                <option value="{sourceLevel7}"></option>
                                <option value="{visit}"></option>
                                <option value="{visitor_uid}"></option>
                            </datalist>
                            <button class="additionalFieldRemover" data-key="<?= $key ?>"><?= GetMessage('DELETE_FIELD') ?></button>
                        </div>
                    </div>
                <? endforeach; ?>
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%"></td>
            <td valign="top" width="50%">
                <button id="afAdder"><?= GetMessage('FIELD_ADD') ?></button>
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('ADDITIONAL_FORM_FIELD_IDS') ?></b>
                <br>
                <div><i><?= GetMessage('ADDITIONAL_FORM_FIELD_IDS_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <? foreach ($options['additionalFormFieldIds'] as $key => $id) : ?>
                    <div class="additional_form_field additional_form_field_<?= $key ?>">
                        <div>
                            <b><i class="additional_form_field_header_<?= $key ?>"><?= GetMessage('ADDITIONAL_FORM_FIELD_IDS_HEADER') ?> №<span class="additional_form_field_header_value"><?= $key + 1 ?></span></i></b>
                        </div>
                        <div valign="top" width="50%">
                            <?= GetMessage('ADDITIONAL_FORM_FIELD') ?>
                        </div>
                        <div valign="top" width="50%">
                            <input type="text" name="ADDITIONAL_FORM_FIELD_IDS[<?= $key ?>]" value="<?= $id ?>" class="additional_form_field_input">
                        </div>
                    </div>
                    <div class="additional_form_field additional_form_field_<?= $key ?>">
                        <div valign="top" width="50%">
                            <?= GetMessage('ADDITIONAL_FORM_FIELD_VALUES') ?>
                        </div>
                        <div valign="top" width="50%">
                            <select multiple="multiple" name="ADDITIONAL_FORM_FIELD_VALUES[<?= $key ?>][]" class="additional_form_field_select">
                                <? foreach ($options['additionalFormFieldValues'][$key] as $k => $field) : ?>
                                    <option value="<?= $field['ID'] ?>"<?= $field['ACTION'] == 'Y' ? 'selected="selected"' : '' ?>><?= $field['NAME'] ?></option>
                                <? endforeach; ?>
                            </select>
                            <button class="additionalFormFieldRemover" data-key="<?= $key ?>"><?= GetMessage('DELETE_FIELD') ?></button>
                        </div>
                    </div>
                <? endforeach; ?>
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%"></td>
            <td valign="top" width="50%">
                <button id="affAdder"><?= GetMessage('FIELD_ADD') ?></button>
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%">
                <b><?= GetMessage('EXCLUDED_COMMENT_FIELDS_TITLE') ?></b>
                <br>
                <div><i><?= GetMessage('EXCLUDED_COMMENT_FIELDS_PROMPT') ?></i></div>
            </td>
            <td valign="top" width="50%">
                <select name="EXCLUDED_COMMENT_FIELDS[]" multiple="multiple">
                    <? foreach ($options['excludedCommentFields'] as $key => $field) : ?>
                            <option value="<?= $field['ID'] ?>"<?= $field['ACTION'] == 'Y' ? 'selected="selected"' : '' ?>><?= $field['NAME'] ?></option>
                    <? endforeach; ?>
                </select>
            </td>
        </tr>
    <? $tabControl->BeginNextTab();

    require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/admin/group_rights.php');

    $tabControl->Buttons();?>

    <input type='submit' <? if ($CAT_RIGHT < 'W') echo 'disabled' ?> name='Update' value='<?= GetMessage('MAIN_SAVE') ?>'>
    <input type='hidden' name='Update' value='Y'>
    <input type='reset' name='reset' value='<? echo GetMessage('MAIN_RESET') ?>'>
    <input type='button' <? if ($CAT_RIGHT < 'W') echo 'disabled' ?> title='<?= GetMessage('MAIN_HINT_RESTORE_DEFAULTS') ?>' OnClick='RestoreDefaults();' value='<?= GetMessage('MAIN_RESTORE_DEFAULTS') ?>'>
    <? $tabControl->End(); ?>
</form>


<style>
    #edit1 div,
    #edit2 div {
        margin-bottom: 5px;
    }
    #edit1, #edit2 {
        max-width: 900px;
    }
    #edit2 select,
    #edit1 select {
        width: 61%;
    }
    #edit2 input,
    #edit1 input {
        width: 248px;
    }
    #edit2 b i,
    #edit1 b i {
        color: rgb(150, 150, 150);
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var additionalFormFieldData = {
            prefix     : 'additional_form',
            fieldKey   : 'ADDITIONAL_FORM_FIELD_IDS',
            fieldValue : 'ADDITIONAL_FORM_FIELD_VALUES',
            firstInput : 'input',
            secondInput: 'select',
            array      : true,
        };
        var additionalFieldAddData = {
            prefix     : 'additional',
            fieldKey   : 'ADDITIONAL_FIELD_IDS',
            fieldValue : 'ADDITIONAL_FIELD_VALUES',
            firstInput : 'input',
            secondInput: 'input',
            array      : false,
        };
        var additionalFieldRemoveData = {
            prefix     : 'additional',
            fieldKey   : 'ADDITIONAL_FIELD_VALUES',
            fieldValue : 'ADDITIONAL_FIELD_IDS',
            firstInput : 'input',
            secondInput: 'input',
            array      : false,
        };

        $('#afAdder').on('click', function() {
            fieldAdd(additionalFieldAddData);

            return false;
        });
        $('.additionalFieldRemover').on('click', function() {
            fieldRemove(additionalFieldRemoveData, $(this));

            return false;
        });
        $('#affAdder').on('click', function() {
            fieldAdd(additionalFormFieldData);

            return false;
        });
        $('.additionalFormFieldRemover').on('click', function() {
            fieldRemove(additionalFormFieldData, $(this));

            return false;
        });
        $('#optionsForm').submit(function() {
            processForm($(this));

            return false;
        });
    });
</script>
<script>
    function fieldAdd(data) {
        var lastElem = $($('.' + data.prefix + '_field')[$('.' + data.prefix + '_field').length - 1]);
        var copyElem = $($('.' + data.prefix + '_field')[$('.' + data.prefix + '_field').length - 2]);
        var key      = $('.' + data.prefix + '_field').length / 2;

        copyElem = copyElem
            .clone(true)
            .insertAfter(lastElem)
            .removeClass(data.prefix + '_field_' + (key - 1))
            .addClass(data.prefix + '_field_' + key);
        copyElem
            .find(data.firstInput)
            .val('')
            .attr('name', data.fieldKey + '[' + key + ']');
        copyElem
            .find('.' + data.prefix + '_field_header_value')
            .text(key + 1);
        copyElem
            .find('[name*=".' + data.prefix + '_field_header_"]')
            .removeClass()
            .addClass(data.prefix + '_field_header_' + key);
        lastElem = lastElem
            .clone(true)
            .insertAfter($($('.' + data.prefix + '_field')[$('.' + data.prefix + '_field').length - 1]))
            .removeClass(data.prefix + '_field_' + (key - 1))
            .addClass(data.prefix + '_field_' + key);
        lastElem
            .find(data.secondInput)
            .val('');    
        lastElem
            .find('button').attr('data-key', key);

        if (data.array) {
            lastElem
                .find(data.secondInput)
                .attr('name', data.fieldValue + '[' + key + '][]');
        } else {
            lastElem
                .find(data.secondInput)
                .attr('name', data.fieldValue + '[' + key + ']');
        }

        return false;
    }
    function fieldRemove(data, ob) {
        if ($('.' + data.prefix + '_field').length == 2)
            return false;

        var key = ob.attr('data-key');
        var i   = 0;

        $('.' + data.prefix + '_field_' + key).remove();
        $('.' + data.prefix + '_field').each(function(index, value) {
            var fieldBlock = $(value);
            console.log(fieldBlock.find('input').val());
            if (index % 2) {
                fieldBlock
                    .find(data.firstInput)
                    .attr('name', data.fieldKey + '[' + i + ']');
                fieldBlock
                    .find('button')
                    .attr('data-key', i);
                fieldBlock
                    .removeClass()
                    .addClass(data.prefix + '_field')
                    .addClass(data.prefix + '_field_' + i);
                i++;
            } else {
                fieldBlock
                    .find('[class*="_field_header_value"]')
                    .text(i + 1);
                fieldBlock
                    .removeClass()
                    .addClass(data.prefix + '_field')
                    .addClass(data.prefix + '_field_' + i);

                if (data.array) {
                    fieldBlock
                        .find(data.secondInput)
                        .attr('name', data.fieldValue + '[' + i + '][]');
                } else {
                    fieldBlock
                        .find(data.secondInput)
                        .attr('name', data.fieldValue + '[' + i + ']');
                }
            }
        });

        return false;
    }
    function processForm(form) {
        var button = form.find('[type="submit"]');
        var params = form.serialize() + '&mid=<?= CRoistatFormProcessor::MODULE_ID ?>&lang=<?= LANGUAGE_ID ?>';
        var data   = {
            method: 'POST',
            url: '/bitrix/admin/settings.php',
            data: params,
            success: function(data) {
                alert('<?= GetMessage('MAIN_SAVED') ?>');
            }
        };

        $.ajax(data);
    }
</script>
<script type='text/javascript'>
    function RestoreDefaults() {
        if (confirm('<?= GetMessageJS('MAIN_HINT_RESTORE_DEFAULTS_WARNING'); ?>'))
            window.location = '<?echo $APPLICATION->GetCurPage()?>?RestoreDefaults=Y&lang=<?echo LANGUAGE_ID; ?>&mid=<?echo urlencode($mid)?>&<?=bitrix_sessid_get()?>';
    }
</script>
<?php

// Author Bondar Artem bondar.a@roistat.com artembondar1991@gmail.com 
