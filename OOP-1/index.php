<?php

require 'form.php';

$form = new Form();

echo $form->start();
echo $form->input();
echo $form->selectStart();
echo $form->option('option1');
echo $form->option('option2');
echo $form->option('option3');
echo $form->selectEnd();
echo $form->submitButton();
echo $form->textArea();
echo $form->radioButton('option4');
echo $form->radioButton('option5');
echo $form->end();
