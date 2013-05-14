<?php
require_once('FormHeroMaster.php');

$elements = array(
            //Creation of regular input elements
            array(
                'element' => 'input',
                'type'    => 'text',
                'id'      => 'userName'
                ),
            //Creation of radio button element
            array(
                'element' => 'input',
                'type'    => 'radio',
                'id'      => 'userName'
                ),
            array(
                'element' => 'input',
                'type'    => 'password',
                'id'      => 'password'
                ),
            //Creation of select element
            array(
                'element' => 'select',
                'id'      => 'nekiId',
                'class'   => 'nekaKlasa',
                'options' =>
                array(
                        'value'  => 'Audi',
                        'value1' => 'BMW',
                        'value2' => 'Mercedes',
                        'value3' => 'Yugo'
                    )
            ),

            //Create submit button
            array(
                'element' => 'submit'
                )
    );
$form = new FormHeroMaster($elements);
$form->makeForm();

