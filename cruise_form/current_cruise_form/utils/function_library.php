<?php
// This file contains functions/methods that are shared across the application

/**
 * Generate HTML for dropdowns based on associative array
 *
 * @param  array $dataArray The associative array which contains id/name values
 * @param bool $addDefaultSelection if true, add the default option at the top (default)
 * @param string $customSelectMessage if provided, a custom message will be used in place of the default 
 * @return string HTML representing options
 */
function generateHTMLDropDownList($dataArray, $addDefaultSelection=true, $customSelectMessage='') {
    // If the array is empty, do not process
    if (empty($dataArray)) return;
    
    // Placeholder for html fragment
    $html = '';
    $selectMessage = '';
    // Create a default select message
    $defaultSelectMessage = 'Please select...';
    // Accomodate custom message
    if (empty($customSelectMessage)) {
        $selectMessage = $defaultSelectMessage;
    } else {
        $selectMessage = $customSelectMessage;
    }
    if ($addDefaultSelection) {
        $html .= "<option value=\"\">$selectMessage</option>";
    }
    foreach($dataArray as $id => $name) {
        $html .= "<option value='$id'>$name</option>";
    }
    return $html;

}

/**
 * Dropdown factory
 *
 * @param  array $dataArray The associative array which contains id/name values
 * @param bool $addDefaultSelection if true, add the default option at the top (default)
 * @param string $customSelectMessage if provided, a custom message will be used in place of the default 
 * @param  mixed $class the css classname to apply to dropdown
 * @param  mixed $id the id of the select element
 * @param  mixed $name the name of the select element
 * @param  bool $isRequired is this element participating in client-side validation (default: false)
 * @return string HTML respresenting dropdown/select tag
 */
function buildDropDown($dataArray, $addDefaultSelection=true, $customSelectMessage='', $class, $id, $name='', $isRequired=false) {
    // placeholder for html tag
    $html = '';
    // if name is empty set name to the same value as the $id
    $useNameOrID = empty($name) ? $id : $name;
    // Handle required param
    $requiredParameter = $isRequired ? 'required' : '';
    // <select class="custom-select d-block w-100" name="preferredCruiseLine" id="preferredDestination" required>
    $html = "<select class=\"$class\" name=\"$useNameOrID\" id=\"$id\" $requiredParameter>";
    // Set the options
    $options = generateHTMLDropDownList($dataArray, $addDefaultSelection, $customSelectMessage);
    // Add the options to the html var
    $html .= $options; 
    // Close the tag
    $html .= '</select>';

    // Return the select tag
    return $html;
}