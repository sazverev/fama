<?php

// @codingStandardsIgnoreStart

IncludeModuleLangFile(__FILE__);

class CRoistatFormProcessor
{
    const MODULE_ID         = 'roistat.formprocessor';
    const NAME              = 'name';
    const EMAIL             = 'email';
    const PHONE             = 'phone';
    const SPACE             = ' ';
    const DELIMITER         = ',';
    const COMMENT_DELIMITER = ':';
    const FIELD_DELIMITER   = ';';
    const INNER_DELIMITER   = ':::';
    const OUTER_DELIMITER   = ';;;';

    private static $name                   = null;
    private static $email                  = null;
    private static $phone                  = null;
    private static $leadName               = null;
    private static $resultId               = null;
    private static $webFormId              = null;
    private static $accessKey              = null;
    private static $formFields             = null;
    private static $nameFields             = null;
    private static $emailFields            = null;
    private static $phoneFields            = null;
    private static $formAnswers            = null;
    private static $doubleValue            = null;
    private static $excludedForms          = null;
    private static $matchingForms          = null;
    private static $callbackValue          = null;
    private static $additionalFields       = null;
    private static $doubleAppendValue      = null;
    private static $orderCreationValue     = null;
    private static $callbackPhoneValue     = null;
    private static $additionalFormFields   = null;
    private static $additionalFormFieldIds = null;

    private static $allFormFields             = array();
    private static $strVarsExtractor          = array();
    private static $contactDataParams         = array();
    private static $contactFieldsArray        = array();
    private static $excludedCommentFields     = array();
    private static $clearContactDataParams    = array();
    private static $additionalFormFieldValues = array();

    public static function onAfterResultAddHandler($WEB_FORM_ID, $RESULT_ID)
    {
        static::$webFormId = $WEB_FORM_ID;
        static::$resultId  = $RESULT_ID;

        static::setAfterResultAddHandlerVars();
        static::setContactData();

        if (static::isValidHandle())
            static::putProxyLead();
    }

    private static function setAfterResultAddHandlerVars()
    {
        CForm::GetResultAnswerArray(
            static::$webFormId,
            static::$formFields,
            static::$formAnswers,
            $trash = null,
            array('RESULT_ID' => static::$resultId)
        );
        static::$matchingForms                = static::getFieldsArray('MATCHING_FORMS');
        static::$excludedForms                = static::getFieldsArray('EXCLUDED_FORMS');
        static::$nameFields                   = static::getFieldsArray('NAME_FIELD_VALUES');
        static::$emailFields                  = static::getFieldsArray('EMAIL_FIELD_VALUES');
        static::$phoneFields                  = static::getFieldsArray('PHONE_FIELD_VALUES');
        static::$accessKey                    = static::getFieldsString('INTEGRATION_CODE');
        static::$allFormFields                = static::getAllFormFields();
        static::$excludedCommentFields        = static::getExcludedCommentFields();
        static::$additionalFormFieldIds       = static::getAdditionalFormFieldIds();
        static::$additionalFormFieldValues    = static::getAdditionalFormFieldValues();
        static::$additionalFormFields         = static::getAdditionalFormFields();
        static::$contactFieldsArray           = static::getContactFieldsArray();
        static::$contactDataParams            = static::getClearContactDataParams();
        static::$strVarsExtractor['formname'] = static::getFormName(static::$webFormId);
    }

    public static function setOptions()
    {
        static::setOptionStringValue('LEAD_NAME');
        static::setOptionStringValue('DOUBLE_VALUE');
        static::setOptionStringValue('CALLBACK_VALUE');
        static::setOptionStringValue('INTEGRATION_CODE');
        static::setOptionStringValue('DOUBLE_APPEND_VALUE');
        static::setOptionStringValue('CALLBACK_PHONE_VALUE');
        static::setOptionStringValue('ORDER_CREATION_VALUE');
        static::setOptionArrayValue('NAME_FIELD_VALUES');
        static::setOptionArrayValue('EMAIL_FIELD_VALUES');
        static::setOptionArrayValue('PHONE_FIELD_VALUES');
        static::setOptionArrayValue('MATCHING_FORMS');
        static::setOptionArrayValue('EXCLUDED_FORMS');
        static::setOptionArrayValue('EXCLUDED_COMMENT_FIELDS');
        static::setOptionArrayValue('ADDITIONAL_FORM_FIELD_IDS');
        static::setOptionDeepArrayValue('ADDITIONAL_FIELD_IDS', 'ADDITIONAL_FIELD_VALUES');
        static::setOptionDeepArrayValue('ADDITIONAL_FORM_FIELD_IDS', 'ADDITIONAL_FORM_FIELD_VALUES', $deep = true);
    }

    public static function getViewVars()
    {
        static::setViewVars();

        return array(
            'leadName'                  => static::$leadName,
            'accessKey'                 => static::$accessKey,
            'doubleValue'               => static::$doubleValue,
            'matchingForms'             => static::$matchingForms,
            'excludedForms'             => static::$excludedForms,
            'callbackValue'             => static::$callbackValue,
            'contactFields'             => static::$contactFieldsArray,
            'additionalFields'          => static::$additionalFields,
            'doubleAppendValue'         => static::$doubleAppendValue,
            'orderCreationValue'        => static::$orderCreationValue,
            'callbackPhoneValue'        => static::$callbackPhoneValue,
            'excludedCommentFields'     => static::$excludedCommentFields,
            'additionalFormFieldIds'    => static::$additionalFormFieldIds,
            'additionalFormFieldValues' => static::$additionalFormFieldValues,
        );
    }

    private static function setViewVars()
    {
        static::$leadName                  = static::getFieldsString('LEAD_NAME');
        static::$accessKey                 = static::getFieldsString('INTEGRATION_CODE');
        static::$doubleValue               = static::getFieldsString('DOUBLE_VALUE');
        static::$callbackValue             = static::getFieldsString('CALLBACK_VALUE');
        static::$doubleAppendValue         = static::getFieldsString('DOUBLE_APPEND_VALUE');
        static::$orderCreationValue        = static::getFieldsString('ORDER_CREATION_VALUE');
        static::$callbackPhoneValue        = static::getFieldsString('CALLBACK_PHONE_VALUE');
        static::$matchingForms             = static::getMatchingForms();
        static::$excludedForms             = static::getExcludedForms();
        static::$allFormFields             = static::getAllFormFields();
        static::$additionalFormFieldIds    = static::getAdditionalFormFieldIds();
        static::$additionalFormFieldValues = static::getAdditionalFormFieldValues();
        static::$excludedCommentFields     = static::getExcludedCommentFields();
        static::$contactFieldsArray        = static::getContactFieldsArray();
        static::$additionalFields          = static::getAdditionalFieldsArr();
    }

    private static function getProxyLeadQueryFields()
    {
        return array(
            'roistat'                                  => !empty($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie',
            'name'                                     => static::$name,
            'email'                                    => static::$email,
            'phone'                                    => static::$phone,
            'key'                                      => static::$accessKey,
            'comment'                                  => static::getComment(),
            'title'                                    => static::getLeadName(),
            'is_skip_sending'                          => static::isSkipSending(),
            'fields'                                   => static::getAdditionalFields(),
            'is_need_check_order_in_processing_append' => static::getCheckboxIntValue('DOUBLE_APPEND_VALUE'),
            'is_need_check_order_in_processing'        => static::getCheckboxIntValue('DOUBLE_VALUE'),
            'is_need_callback'                         => static::getCheckboxIntValue('CALLBACK_VALUE'),
            'callback_phone'                           => static::getFieldsString('CALLBACK_PHONE_VALUE'),
            'order_creation_method'                    => static::getFieldsString('ORDER_CREATION_VALUE'),
        );
    }

    private static function getCheckboxIntValue($fieldName)
    {
        return (int) !empty(static::getFieldsString($fieldName));
    }

    private static function isSkipSending()
    {
        return (int) in_array(static::$webFormId, static::$matchingForms);
    }

    private static function getFieldsArray($fieldName)
    {
        return explode(static::DELIMITER, COption::GetOptionString(static::MODULE_ID, $fieldName));
    }

    private static function getFieldsString($fieldName)
    {
        return COption::GetOptionString(static::MODULE_ID, $fieldName);
    }

    private static function getFieldsArrayString($fieldValues)
    {
        return implode(static::DELIMITER, $fieldValues);
    }

    private static function getExcludedForms()
    {
        return static::getChosenForms(static::$excludedForms, 'EXCLUDED_FORMS');
    }

    private static function getMatchingForms()
    {
        return static::getChosenForms(static::$matchingForms, 'MATCHING_FORMS');
    }

    private static function setOptionStringValue($fieldName)
    {
        COption::SetOptionString(static::MODULE_ID, $fieldName, htmlspecialchars($_REQUEST[$fieldName]));
    }

    private static function setOptionArrayValue($fieldName)
    {
        COption::SetOptionString(static::MODULE_ID, $fieldName, static::getFieldsArrayString($_REQUEST[$fieldName]));
    }

    private static function setOptionDeepArrayValue($fieldId, $fieldValue, $deep = false)
    {
        COption::SetOptionString(static::MODULE_ID, $deep ? $fieldValue : $fieldId, static::getFieldsStringValues($fieldId, $fieldValue, $deep));
    }

    private static function setContactData()
    {
        static::$name  = static::getContactField(static::$nameFields,  static::NAME);
        static::$email = static::getContactField(static::$emailFields, static::EMAIL);
        static::$phone = static::getContactField(static::$phoneFields, static::PHONE);
    }

    private static function getContactField($fields, $name)
    {
        static::setContactDataParams($fields, $name);

        $result = static::getContactFieldValue($fields, $name);

        static::$contactDataParams = static::getClearContactDataParams();

        return $result; 

    }

    private static function getContactFieldValue($fields, $name)
    {
        foreach ($fields as $fieldId)
            foreach (static::$formAnswers[static::$resultId][$fieldId] as $answer)
                if (static::$contactDataParams[$answer['TITLE']] == $name
                    && !empty(static::$contactDataParams[$answer['TITLE']]))
                        return $answer['USER_TEXT'];

        return null;
    }

    private static function setContactDataParams($fields, $name)
    {
        foreach (static::$allFormFields as $field) {
            static::setContactDataParam($fields, $field, $name);
        }
    }

    private static function setContactDataParam($fieldsArr, $field, $name)
    {
        foreach ($fieldsArr as $fieldId)
            if ($fieldId == $field['ID'])
                static::$contactDataParams[$field['TITLE']] = $name;
    }

    private static function getContactFieldsArray()
    {
        static::$contactFieldsArray = static::getClearContactFieldsArray();

        $contactFieldValues = array();

        foreach (static::$contactFieldsArray as $key => $field) {
            $values = explode(static::DELIMITER, COption::GetOptionString(static::MODULE_ID, $field['name'] . '_FIELD_VALUES'));

            foreach ($values as $value) {
                if (empty($value))
                    continue;
                $contactFieldValues[$key][] = $value;
            }
            foreach ($contactFieldValues as $chooseArr)
                foreach (static::$allFormFields as $field)
                    static::setItemInArray($field, $chooseArr, static::$contactFieldsArray[$key]['value']);

            if (empty($contactFieldValues))
                foreach (static::$allFormFields as $field)
                    static::setItemInArray($field, array(), static::$contactFieldsArray[$key]['value']);
        }
        return static::$contactFieldsArray;
    }

    private static function getClearContactDataParams()
    {
        return static::$clearContactDataParams;
    }

    private static function getClearContactFieldsArray()
    {
        return array(
            array(
                'name' => 'NAME',
            ),
            array(
                'name' => 'EMAIL',
            ),
            array(
                'name' => 'PHONE',
            ),
        );
    }

    private static function getAdditionalFields()
    {
        $result = static::$additionalFormFields;

        $additionalFieldIds = explode(static::OUTER_DELIMITER, COption::GetOptionString(static::MODULE_ID, 'ADDITIONAL_FIELD_IDS'));
        foreach ($additionalFieldIds as $key => $value) {
            if (empty($value))
                continue;

            $additionalFieldIds[$key] = explode(static::INNER_DELIMITER, $value);

            if (!empty($additionalFieldIds[$key][1]))
                $result[$additionalFieldIds[$key][0]] = static::getExtractedString($additionalFieldIds[$key][1]);
        }

        return $result;
    }

    private static function getAdditionalFieldsArr()
    {
        $additionalFields = explode(static::OUTER_DELIMITER, COption::GetOptionString(static::MODULE_ID, 'ADDITIONAL_FIELD_IDS'));

        foreach ($additionalFields as $key => $field)
            $additionalFields[$key] = explode(static::INNER_DELIMITER, $field);

        return $additionalFields;
    }

    private static function getAdditionalFormFieldIds()
    {
        return explode(static::DELIMITER, COption::GetOptionString(static::MODULE_ID, 'ADDITIONAL_FORM_FIELD_IDS'));
    }

    private static function getAdditionalFormFields()
    {
        $result = array();

        foreach (static::$additionalFormFieldValues as $key => $values) {
            $string = null;
            foreach ($values as $field) {
                if (empty($field))
                    continue;

                if ($field['ACTION'] != 'Y')
                    continue;

                foreach (static::$formAnswers[static::$resultId] as $k => $answer) {
                        $emptyFieldFlag = false;

                        foreach ($answer as $i => $item) {
                            if (!in_array($item['FIELD_ID'], $field))
                                continue;
                            if (empty($item['MESSAGE']) && empty($item['USER_TEXT'])) 
                                continue;

                            $delimiter      = static::DELIMITER . static::SPACE;
                            $fieldValueStr  = static::getFieldValueString($item, $delimiter);
                            $emptyFieldFlag = !empty($fieldValueStr);

                            $string .= $fieldValueStr;
                        }
                        
                        if ($emptyFieldFlag) {
                            while (mb_substr($string, -2) == static::DELIMITER . static::SPACE)
                                $string = mb_substr($string, 0, -2);
                            $string .= static::FIELD_DELIMITER . static::SPACE;
                        }
                }

                $result[static::$additionalFormFieldIds[$key]] = $string;
            }
        }

        return $result;
    }

    private static function getFieldValueString($item, $delimiter) {
        $basicFields = array(
            'text',
            'textarea',
            'date',
            'email',
            'url',
            'password',
            'hidden',
        );
        
        if (in_array($item['FIELD_TYPE'], $basicFields))
            $string = $item['USER_TEXT'];
        else
            $string = $item['MESSAGE'];

        $string .= $delimiter;

        return $string;
    }

    private static function getAdditionalFormFieldValues()
    {
        $valuesArr = array();
        $values    = COption::GetOptionString(static::MODULE_ID, 'ADDITIONAL_FORM_FIELD_VALUES');

        foreach (static::$additionalFormFieldIds as $id)
            $values = str_replace($id, null, $values);

        $values = explode(static::INNER_DELIMITER, $values);

        foreach ($values as $value) {
            if (empty($value))
                continue;
            $valuesArr[] = explode(static::OUTER_DELIMITER, $value);
        }

        foreach (static::$additionalFormFieldIds as $key => $id)
            foreach (static::$allFormFields as $field)
                static::setItemInArray($field, $valuesArr[$key], static::$additionalFormFieldValues[$key]);

        return static::$additionalFormFieldValues;
    }

    private static function getChosenForms($forms, $name)
    {
        $by           = 's_id';
        $sort         = 'desc';
        $arFilter     = array();
        $arForm       = CForm::GetList($by, $sort, $arFilter, $isFiltered);
        $chosenForms = explode(static::DELIMITER, COption::GetOptionString(static::MODULE_ID, $name));

        while ($form  = $arForm->Fetch())
            static::setItemInArray($form, $chosenForms, $forms, $nameKey = 'NAME');

        return $forms;
    }

    private static function getExcludedCommentFields()
    {
        $excludedCommentFields = explode(static::DELIMITER, COption::GetOptionString(static::MODULE_ID, 'EXCLUDED_COMMENT_FIELDS'));

        foreach (static::$allFormFields as $field)
            static::setItemInArray($field, $excludedCommentFields, static::$excludedCommentFields);

        return static::$excludedCommentFields;
    }

    private static function getAllFormFields()
    {
        $by       = 's_id';
        $sort     = 'desc';
        $arFilter = array();

        $forms    = CForm::GetList($by, $sort, $arFilter, $isFiltered = null);
        
        while ($form = $forms->Fetch()) {
            $fields   = CFormField::GetList(
                $form['ID'],
                'ALL',
                $by    = 's_sort',
                $order = 'asc',
                array('ACTIVE' => 'Y'),
                $isFiltered
            );
            
            while ($field = $fields->Fetch())
                static::$allFormFields[$field['ID']] = $field;
        }

        return static::$allFormFields;
    }

    private static function setItemInArray($item, $chooseArr, &$result, $nameKey = 'TITLE')
    {
        $result[$item['ID']] = array(
            'ID'      => $item['ID'],
            'NAME'    => $item[$nameKey],
            'ACTION'  => (is_array($chooseArr) && in_array($item['ID'], $chooseArr)) ? 'Y' : 'N',
        );

        return $result;
    }

    private static function getExtractedString($str)
    {
        if (empty(static::$strVarsExtractor) || empty($str))
            return null;

        preg_match_all('/\{.{4,12}\}/', $str, $matches, PREG_SET_ORDER, 0);
        
        foreach ($matches as $match) {
            $key = str_replace(['{', '}'], null, $match[0]);

            if (!array_key_exists($key, static::$strVarsExtractor))
                continue;

            $str = str_replace($match[0], static::$strVarsExtractor[$key], $str);
        }

        return $str;
    }

    private static function putProxyLead()
    {
        $proxyLeadQueryFields = static::getProxyLeadQueryFields();

        return static::hitRoistat($proxyLeadQueryFields);
    }

    private static function hitRoistat($roistatData)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://cloud.roistat.com/api/proxy/1.0/leads/add?' . http_build_query($roistatData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;
    }

    private static function getLeadName()
    {
        $leadName = COption::GetOptionString(static::MODULE_ID, 'LEAD_NAME');

        return $leadName ? static::getExtractedString($leadName) : GetMessage('NEW_LEAD_TITLE');
    }

    private static function getFormName($webFormId)
    {
        $arFilter  = array(
            'ID'   => $webFormId,
            'SITE' => SITE_ID
        );
        $rsForms   = CForm::GetList($by = 's_id', $order = 'desc', $arFilter, $isFiltered);

        if ($arForm = $rsForms->Fetch())
            return $arForm['NAME'];

        return null;
    }

    private static function getComment()
    {
        $comment    = null;
        $excludeArr = array();

        foreach (static::$excludedCommentFields as $field)
            if ($field['ACTION'] == 'Y')
                $excludeArr[] = $field['ID'];

        foreach (static::$formAnswers[static::$resultId] as $answer) {
            $emptyFieldFlag = null;

            foreach ($answer as $key => $item) {
                if (in_array($item['FIELD_ID'], $excludeArr))
                    continue;
                if (empty($item['MESSAGE']) && empty($item['USER_TEXT']))
                    continue;
                if (array_key_first($answer) == $key) {
                    $comment .= $item['TITLE'];
                    $comment .= static::COMMENT_DELIMITER . static::SPACE;

                    if (count($answer) > 1)
                        $comment .= PHP_EOL;
                }

                $delimiter      = PHP_EOL;
                $fieldValueStr  = static::getFieldValueString($item, $delimiter);
                $emptyFieldFlag = empty($fieldValueStr);

                $comment .= $fieldValueStr;
            }

            if (!$emptyFieldFlag)
                $comment .= PHP_EOL;
        }

        return static::getExtractedString($comment);
    }

    private static function getFieldsStringValues($titleKey, $valueKey, $deep = false)
    {
        $str = null;

        foreach ($_REQUEST[$titleKey] as $key => $value) {
            if (empty($value) || empty($_REQUEST[$valueKey][$key]))
                continue;
            $str .= static::getFieldString($value, $_REQUEST[$valueKey][$key], $deep);
        }

        return $str;
    }

    private static function getFieldString($value, $field, $deep = null)
    {
        if (!$deep)
            return $value . static::INNER_DELIMITER . $field . static::OUTER_DELIMITER;
        
        $str = $value . static::INNER_DELIMITER;

        foreach ($field as $value) {
            $str .= $value . static::OUTER_DELIMITER;
        }

        return $str;
    }

    private static function isValidHandle()
    {
        if (empty(static::$accessKey))
            return null;

        if (empty(static::$phone) && empty(static::$email))
            return null;

        if (in_array(static::$webFormId, static::$excludedForms))
            return null;

        return true;
    }
}

// @codingStandardsIgnoreEnd

// Author Bondar Artem bondar.a@roistat.com artembondar1991@gmail.com
