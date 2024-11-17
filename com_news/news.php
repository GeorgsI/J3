<?php
    defined('_JEXEC') or exit();
    $controller = JControllerLegacy::getInstance('News'); //вызываем NewsController

    $input = JFactory::getApplication()->input;

   //print_r($input->get('task','display')); 
    $controller->execute($input->get('task','display'));
    $controller->redirect();