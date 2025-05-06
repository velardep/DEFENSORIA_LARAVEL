<?php 

namespace App\Http\Controllers;

use App\Models\Denuncia;
use App\Models\Victima;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\StreamedResponse;

// Generación de reportes en formato PDF y CSV del sistema de denuncias.
class ReporteController extends Controller
{
    // Genera un reporte PDF de todas las denuncias marcadas como emblemáticas.
    public function generarReportePDF()
    {
        $denuncias = Denuncia::where('emblematico', 'SI')->get();

        $pdf = Pdf::loadView('reportes.emblematicos_pdf', compact('denuncias'));
        return $pdf->download('emblematicos.pdf');
    }

    // Exporta un listado de todas las víctimas registradas en formato PDF.
    public function victimasPDF()
    {
        $victimas = Victima::all(); // o lo que necesites

        $pdf = \PDF::loadView('reportes.victimas_pdf', compact('victimas'));
        return $pdf->download('victimas.pdf');
    }

    // Genera un reporte PDF completo de una denuncia específica por su ID.
    public function reportePorDenuncia($id)
    {
        $denuncia = \App\Models\Denuncia::with(['victima', 'agresor', 'acciones'])->findOrFail($id);

        $pdf = \PDF::loadView('reportes.denuncia_pdf', compact('denuncia'));
        return $pdf->download('denuncia_' . $denuncia->num_caso . '.pdf');
    }

    //REPORTES EXCEL
    // Genera un archivo CSV con la lista de denuncias emblemáticas para su uso en Excel.
    public function exportarEmblematicos()
    {
        $fileName = 'emblematicos.csv';
        $denuncias = Denuncia::with(['victima', 'agresor'])
            ->where('emblematico', 'SI')
            ->get();

        $headers = [
            "Content-type"        => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['Fecha', 'Número de Caso', 'Cod SLIM', 'Nombre Víctima', 'Nombre Agresor', 'Estado'];

        $callback = function () use ($denuncias, $columns) {
            $file = fopen('php://output', 'w');

            // BOM para que Excel reconozca UTF-8
            echo "\xEF\xBB\xBF";

            // Usar punto y coma como separador para que funcione mejor en Excel en español
            fputcsv($file, $columns, ';');

            foreach ($denuncias as $d) {
                fputcsv($file, [
                    $d->fecha,
                    $d->num_caso,
                    $d->cod_slim,
                    optional($d->victima)->nombre ?? 'N/A',
                    optional($d->agresor)->nombre ?? 'N/A',
                    $d->estado,
                ], ';');
            }

            fclose($file);
        };

        return new StreamedResponse($callback, 200, $headers);
    }
}
