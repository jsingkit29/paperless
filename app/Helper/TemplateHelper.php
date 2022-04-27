<?php


namespace App\Helper;

class TemplateHelper
{
    public static function generateDynamicDropdown($selections = [], $parameters = [])
    {
        $createdDropDown="";
        $createdDropDown.="<select";

        if (isset($parameters["attributes"])) {
            foreach ($parameters["attributes"] as $key => $value) {
                $createdDropDown.=" $key='" . $value . "' ";
            }
        }

        $createdDropDown.=">";

        $createdDropDown.="<option value=''> Please Select </option>";

        foreach ($selections as $value) {
            $createdDropDown.="<option value=" . $value["value"];
            if (isset($parameters["selected"])
                && $parameters["selected"] == $value["value"]
            ) {
                $createdDropDown.=" selected='selected' ";
            }
            $createdDropDown.=">" . $value["description"] . "</option>";
        }
        $createdDropDown.="</select>";
        return $createdDropDown;
    }
}