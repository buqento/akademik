<!--
<form method="post">
            <table>
                <tr>
                    <td>Date From</td>
                    <td>Date To</td>
                </tr>
                <tr>
                    <td><input type="date" name="from" value="<?//=isset($_GET['from']) ? CHtml::encode($_GET['from']) : '' ; ?>" /></td>
                    <td><input type="date" name="until" value="<?//=isset($_GET['until']) ? CHtml::encode($_GET['until']) : '' ; ?>" /></td>
                </tr>
            </table>
        <input type="submit" value="Report to Excel" name="'ExcelReport'">
        <input type="submit" value="Report to Pdf" name="'PdfReport'">
        </form>
 -->       
        
        <?php
$pdf = Yii::createComponent('application.extensions.tcpdf.ETcPdf', 
                            'P', 'cm', 'A4', true, 'UTF-8');
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor("Nicola Asuni");
$pdf->SetTitle("TCPDF Example 002");
$pdf->SetSubject("TCPDF Tutorial");
$pdf->SetKeywords("TCPDF, PDF, example, test, guide");
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("times", "BI", 20);
$pdf->Cell(0,10,"Example 002",1,1,'C');
$pdf->Output("example_002.pdf", "I");
?>