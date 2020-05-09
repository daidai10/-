<?php
class InputType{
    protected $type = '';
    protected $name = '';
    protected $value = '';
    protected $class = '';
    protected $id ='';
    protected $required ='';
    protected $disabled ='';
    protected $label ='';

    function set_attr($attr){
        foreach ($attr as $key => $value) {
            $this->$key = $value;
        }
    }

    function out_attr(){
        return"<label><input type='$this->type' name='$this->name' value='$this->value' required='$this->required'>$this->label</label>";
    }
}
class InputTypeText extends InputType{
    function out_attr(){
        return"<label>$this->label<input type='$this->type' name='$this->name' value='$this->value' required='$this->required'></label>";
    }
}
class InputTypeRadio extends InputType{
    protected $value = [];
    protected $label = [];

    function out_attr(){
        $html = '';
        foreach ($this->value as $key => $val) {
           $html .= "<label><input type='$this->type' name='$this->name' value='$val' required='$this->required'>{$this->label[$key]}</label>";
        }
        return $html;
    }
}
?>