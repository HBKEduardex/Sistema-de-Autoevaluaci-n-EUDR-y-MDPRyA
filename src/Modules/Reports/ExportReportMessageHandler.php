<?php

namespace App\Modules\Reports;

use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Psr\Log\LoggerInterface;

#[AsMessageHandler]
class ExportReportMessageHandler
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(ExportReportMessage $message)
    {
        // 1. Simular proceso largo (ej. consultando base de datos y armando PDF)
        $this->logger->info('Iniciando exportación de reporte...', [
            'evaluation_id' => $message->getEvaluationId(),
            'format' => $message->getFormat()
        ]);

        sleep(5); // Simulando carga pesada de CPU (Worker)

        // 2. Aquí iría la lógica de Flysystem S3 para subir el PDF a MinIO
        // $s3Client->upload(...);

        $this->logger->info('Reporte generado exitosamente en MinIO.');
    }
}
