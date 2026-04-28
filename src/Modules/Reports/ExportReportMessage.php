<?php

namespace App\Modules\Reports;

class ExportReportMessage
{
    private int $evaluationId;
    private string $format;

    public function __construct(int $evaluationId, string $format = 'pdf')
    {
        $this->evaluationId = $evaluationId;
        $this->format = $format;
    }

    public function getEvaluationId(): int
    {
        return $this->evaluationId;
    }

    public function getFormat(): string
    {
        return $this->format;
    }
}
