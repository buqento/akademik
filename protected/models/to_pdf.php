<?php
Yii::import('application.extensions.dompdf.dompdf.*');
require_once(dirname(__FILE__) . '/dompdf/dompdf_config.inc.php');
spl_autoload_unregister(array('YiiBase', 'autoload'));
spl_autoload_register('DOMPDF_autoload');
class to_pdf {
 
    private $_dompdf;
    private $_html;
 
    public function __construct() {
        $this->_dompdf = new DOMPDF;
        $this->_dompdf->base_path = Yii::app()->request->baseUrl;
    }
 
    public function setSize($size, $orientation='portrait') {
        $this->_dompdf->set_paper($size, $orientation);
        return $this;
    }
 
    public function renderPartial($view, $params) {
        $html = Yii::app()->controller->renderPartial($view, $params, true, true);
        $this->_html .= $html;
        return $this;
    }
}
 
    public function stream($name) {
        $this->_dompdf->load_html($this->_html);
        $this->_dompdf->render();
        $this->_dompdf->stream($name, array("Attachment" => '0'));
    }
}
?>

