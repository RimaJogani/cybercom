<?php
namespace Block\Admin\Attribute;

\Mage::loadFileByClassName("Block\Core\Template");
class Form extends \Block\Core\Template{

       
      
       
        public function __construct(){
            parent::__construct();
          $this->setTemplate('admin/attribute/form.php');

        }

       public function getTabContent(){
        
            $tabBlock = \Mage::getBlock('Block\Admin\Attribute\Edit\Tabs');
            $tabs = $tabBlock->getTabs();
            $tab = $this->getRequest()->getGet('tab',$tabBlock->getDefaultTab());
            if (!array_key_exists($tab, $tabs)) {   
                return NULL;
            }
            $blockClassName = $tabs[$tab]['block'];

            $block = \Mage::getBlock($blockClassName);
            
            echo $block->toHtml();
    
       }
        
        

       
}
?>