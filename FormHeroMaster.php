<?php
/**
 * Created by Marko Kovacevic
 * Time: 4:09 PM
 * Base class that is wrapper for form elements creation
 */

class FormHeroMaster {

    //TODO insert label on top of each element

    //Passed tru construct
    protected $formElements;
    //String to be echoed once parising of form is complit
    public $form;

    public function __construct ( $formElements = array() ) {
        $this->formElements = $formElements;
    }


    /*
     * Loops tru passed elements in array
     * hits switch statement and calls method for building element
     * @param Array() $formElements
     * @return string
     */
    protected function buildForm() {
        $i = 0;
        while($i < count($this->formElements)) {
            switch ($this->formElements[$i]['element']) {
                case 'input':
                    $this->createInputField($this->formElements[$i]);
                    break;
                case 'select':
                    $this->createSelectElement($this->formElements[$i]);
                    break;
                    case 'submit':
                        $this->createSubmitButton($this->formElements[$i]);
                        break;
                    case 'button':
                        # code...
                        break;
                default:
                    echo "Error passing parametars";
            }
            $i++;
        }
    }

    //TODO add possibility of passing obj
    //TODO wrap everything in try catch
    public function createInputField( $element = array() ) {
        $tempElement = NULL;
        if ( (is_array($element)) )
        {
            if (!isset($element['type'])) {
                $tempElement .= '<input type="text"';
            }else{
                $tempElement .= "<input type='".$element["type"]."'";
            }
            if (isset($element['id'])) {
               $tempElement.= "id='".$element['id']."'";
            }
            if (isset($element['class'])) {
                $tempElement.= "class='".$element['class']."'";
            }
            if (isset($element['value'])) {
                $tempElement.= "value='".$element['value']."'";
            }
            if (isset($element['placeholder'])) {
                $tempElement.= "placeholder='".$element['placeholder']."'";
            }
            //return $tempElement;
            $tempElement.='/>';
            if ( (  $element['type'] === "radio" ) && (isset($element['text'])) ) $tempElement .= $element['text'];
            $this->form .= $tempElement;
        }

        return false;
    }
    public function createSelectElement( $element = NULL ) {
        $tempElement = "<select>";
        $optionTemplateOne = '<option value="';
        $optionTemplateTwo = '">';


        $options = $element['options'];

        if ( !empty( $options ) ) {

            foreach ($options as $key => $value) {
                $tempElement .= $optionTemplateOne.$key.$optionTemplateTwo.$value."</option>";
            }
            $tempElement .= "</select>";
        }
       $this->form .= $tempElement;
    }
    public function createSubmitButton ( $element = NULL ) {

        $tempElement = NULL;
        if ( (is_array($element)) )
        {
            if (!isset($element['type'])) {
                $tempElement .= '<input type="submit"';
            }else{
                $tempElement .= "<input type='".$element["type"]."'";
            }
            if (isset($element['id'])) {
               $tempElement.= "id='".$element['id']."'";
            }
            if (isset($element['class'])) {
                $tempElement.= "class='".$element['class']."'";
            }
            if (isset($element['value'])) {
                $tempElement.= "value='".$element['value']."'";
            }
           
            //return $tempElement;
            $tempElement.='/>';
            $this->form .= $tempElement;
        }

        return false;

    }
    public function makeForm() {
        $this->buildForm();
        echo $this->form;
    }

}