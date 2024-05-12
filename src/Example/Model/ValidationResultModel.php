<?php

namespace Klsheng\Myinvois\Example\Model;

use Klsheng\Myinvois\Model\AbstractModel;

class ValidationResultModel extends AbstractModel
{
    public $status;
    public $validationSteps = [];

    public function load($data)
    {
        if(!parent::load($data)) {
            return false;
        }

        $this->loadValidationStepModels();

        return true;
    }

    private function loadValidationStepModels()
    {
        $models = [];
        if(!empty($this->validationSteps)) {
            foreach($this->validationSteps as $item) {
                $model = new ValidationStepModel();
                $model->load($item);
                $models[] = $model;
            }
        }

        $this->validationSteps = $models;
    }
}
