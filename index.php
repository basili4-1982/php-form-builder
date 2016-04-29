<?php

require_once( 'PhpFormBuilder.php' );

/*
Create a new instance
Pass in a URL to set the action
*/
$form = new PhpFormBuilder();


$form->add_input('test');


$form->build_form();