<?php
require_once('FormHeroMaster.php');

$elements = array(
            array(
                'element' => 'input',
                'type'    => 'text',
                'id'      => 'nekiId',
                'class'   => 'nekaKlasa'
                ),
            array(
                'element' => 'input',
                'type'    => 'password',
                'id'      => 'nekiId',
                'class'   => 'nekaKlasa'
            )
    );
$form = new FormHeroMaster($elements);
$form->makeForm();