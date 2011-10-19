<?php
class Model_ATK_Survey extends Model_Table {
    public $entity_code='atk_survey';
    function init(){
        parent::init();

        $this->addField('name');
        $this->addField('descr')->datatype('text');
        $this->addField('model');

        $this->addField('is_public')->type('boolean');
    }
}
