<?php
class Developmint_Savedcc_Model_Resource_Savedcreditcards_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
    protected function _construct()
    {
        $this->_init('savedcc/savedcreditcards');
    }
}