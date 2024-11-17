<?php

defined('JPATH_PLATFORM') or die;


class NewsModelNews extends JModelList{

    protected function getListQuery(){
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->select('`id`,`title`,`alias`,`published`' );
        $query->from('#__news');
        //echo  $query;
        return $query;

    }


}
