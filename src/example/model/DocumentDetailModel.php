<?php

namespace klsheng\myinvois\example\model;

class DocumentDetailModel extends BaseDocumentModel
{
    public $longId;
    public $submissionUid;
    public $validationResults;
    public $dateTimeValidated;

    public function load($data)
    {
        if(!parent::load($data)) {
            return false;
        }

        $this->loadValidationResultModels();

        return true;
    }

    private function loadValidationResultModels()
    {
        if(!empty($this->validationResults)) {
            $model = new ValidationResultModel();
            $model->load($this->validationResults);

            $this->validationResults = $model;
        }
    }
}
