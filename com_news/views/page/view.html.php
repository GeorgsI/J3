<?php
    defined('_JEXEC') or exit();
    class NewsViewPage extends JViewLegacy{
        protected $pagination;
        protected $items;

        public function display($tpl= null){


            
         /*   $this->form = $this->get('Form');
            $this->item = $this->get('Item');*/

          //  print_r($this->item );

            $this->items = $this->get('Items');
            $this->pagination = $this->get('Pagination');


            print_r($this->items);

            $this->addToolBar();
            parent::display($tpl);
            $this->setDocument();
        }

        protected function addToolBar(){
                JToolBarHelper::title(JText::_('COM_NEWS_MENEGER_ITEM_NEW'));
               /* JToolBarHelper::save('item.save');
                JToolBarHelper::cancel('item.cancel');*/



                JToolBarHelper::addNew('item.add');
                JToolBarHelper::editList('item.edit');
                JToolBarHelper::deleteList('','news.delete');
              
                
        }


        protected function setDocument(){
            $document = JFactory::getDocument(); 
            $document->setTitle(JText::_('COM_NEWS_ADMINISTRTION_Select'));
        //  print_r($document );
        }


    }


?>