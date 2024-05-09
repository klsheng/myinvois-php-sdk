<?php

namespace Klsheng\Myinvois\Example\Model;

class SubmissionDocumentModel extends BaseSubmissionDocumentModel
{
    public $documentCount;
    public $dateTimeReceived;
    public $overallStatus;
    public $documentSummary = [];

    public function load($data)
    {
        if(!parent::load($data)) {
            return false;
        }

        $this->loadDocumentSummaryModels();

        return true;
    }

    private function loadDocumentSummaryModels()
    {
        $models = [];
        if(!empty($this->documentSummary)) {
            foreach($this->documentSummary as $item) {
                $model = new DocumentDetailModel();
                $model->load($item);
                $models[] = $model;
            }
        }

        $this->documentSummary = $models;
    }
}
