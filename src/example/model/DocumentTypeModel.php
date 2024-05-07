<?php

namespace klsheng\myinvois\example\model;

use klsheng\myinvois\model\BaseModel;

class DocumentTypeModel extends BaseModel
{
    public $id;
    public $invoiceTypeCode;
    public $description;
    public $activeFrom;
    public $activeTo;
    public $documentTypeVersions = [];
    public $workflowParameters = [];

    public function load($data)
    {
        if(!parent::load($data)) {
            return false;
        }

        $this->loadDocumentTypeVersionModels();
        $this->loadWorkflowParameterModels();

        return true;
    }

    private function loadDocumentTypeVersionModels()
    {
        $models = [];
        if(!empty($this->documentTypeVersions)) {
            foreach($this->documentTypeVersions as $item) {
                $model = new DocumentTypeVersionModel();
                $model->load($item);
                $models[] = $model;
            }
        }

        $this->documentTypeVersions = $models;
    }

    private function loadWorkflowParameterModels()
    {
        $models = [];
        if(!empty($this->workflowParameters)) {
            foreach($this->workflowParameters as $item) {
                $model = new WorkflowParameterModel();
                $model->load($item);
                $models[] = $model;
            }
        }

        $this->workflowParameters = $models;
    }
}
