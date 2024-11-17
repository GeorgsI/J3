<?php
    defined('_JEXEC') or exit();
    class NewsViewItem extends JViewLegacy{
        protected $form;
        protected $item;

        public function display($tpl= null){


            
            $this->form = $this->get('Form');
            $this->item = $this->get('Item');

          //  print_r($this->item );


            $this->addToolBar();
            parent::display($tpl);
            $this->setDocument();
        }

        protected function addToolBar(){
                JToolBarHelper::title(JText::_('COM_NEWS_MENEGER_ITEM_NEW'));
                JToolBarHelper::save('item.save');
                JToolBarHelper::cancel('item.cancel');


              
              
                
        }


        protected function setDocument(){
            $document = JFactory::getDocument(); 
            $document->setTitle(JText::_('COM_NEWS_ADMINISTRTION'));
        //  print_r($document );
        }


    }


?>