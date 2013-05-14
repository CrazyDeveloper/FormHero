<?php
require_once('FormHeroMaster.php');

$elements = array(
            //Creation of regular input elements
            array(
                'element' => 'input',
                'type'    => 'text',
                'id'      => 'nekiId',
                'class'   => 'nekaKlasa'
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
            )
    );
$form = new FormHeroMaster($elements);
$form->makeForm();