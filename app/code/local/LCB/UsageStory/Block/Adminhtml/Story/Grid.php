<?php

/**
 * Product usage stories plugin
 *
 * @category   LCB
 * @package    LCB_UsageStory
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_UsageStory_Block_Adminhtml_Story_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    public function __construct()
    {
        parent::__construct();
        $this->setId("storyGrid");
        $this->setDefaultSort("id");
        $this->setDefaultDir("DESC");
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel("usagestory/story")->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn("id", array(
            "header" => Mage::helper("usagestory")->__("ID"),
            "align" => "right",
            "width" => "50px",
            "type" => "number",
            "index" => "id",
        ));

        $this->addColumn("name", array(
            "header" => Mage::helper("usagestory")->__("Name"),
            "index" => "name",
        ));
        $this->addColumn("bio", array(
            "header" => Mage::helper("usagestory")->__("Bio"),
            "index" => "bio",
        ));
        $this->addColumn("story", array(
            "header" => Mage::helper("usagestory")->__("Story"),
            "index" => "story",
        ));
        $this->addColumn("result", array(
            "header" => Mage::helper("usagestory")->__("Result"),
            "index" => "result",
        ));
        $this->addColumn("customer", array(
            "header" => Mage::helper("usagestory")->__("Customer"),
            "index" => "customer",
        ));
        $this->addColumn("product", array(
            "header" => Mage::helper("usagestory")->__("Product"),
            "index" => "product",
        ));
        $this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV'));
        $this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl("*/*/edit", array("id" => $row->getId()));
    }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('id');
        $this->getMassactionBlock()->setFormFieldName('ids');
        $this->getMassactionBlock()->setUseSelectAll(true);
        $this->getMassactionBlock()->addItem('remove_story', array(
            'label' => Mage::helper('usagestory')->__('Remove Story'),
            'url' => $this->getUrl('*/adminhtml_story/massRemove'),
            'confirm' => Mage::helper('usagestory')->__('Are you sure?')
        ));
        return $this;
    }

}
