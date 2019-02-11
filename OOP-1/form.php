<?php

class Form
{
    public function start()
    {
        return '<form>';
    }

    public function end()
    {
        return '</form>';
    }

    public function input()
    {
        return '<input type="text"><br/>';
    }

    public function selectStart()
    {
        return '<select>';
    }

    public function selectEnd()
    {
        return '</select><br/>';
    }

    public function option($data)
    {
        return '<option value="'.$data.'">'.$data.'</option>';
    }

    public function submitButton()
    {
        return '<button type =" submit ">Submit</button><br/>';
    }

    public function textArea()
    {
        return '<textarea></textarea><br/>';
    }

    public function radioButton($value)
    {
        return '<input type ="radio" value='.$value.'>'.$value.'<br/>';
    }
}
