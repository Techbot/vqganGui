<?php

namespace App\Helpers;

class extract {
    
    
static function FrameExtract($data){
    $frame['Id']           = $data->getId();
    $frame['_Name']        = $data->getName();
    $frame['Filename']     = $data->getFilename();
    $frame['TEXT']         = $data->getTEXT();
    $frame['OPTIMISER']    = $data->getOPTIMISER();
    $frame['LR']           = $data->getLR();
    $frame['IMAXEPOCHS']   = $data->getIMAXEPOCHS();
    $frame['eMAXEPOCHS']   = $data->getSeMAXEPOCHS();
    $frame['SEED']         = $data->getSEED();
    $frame['DESTINATION']  = $data->getDESTINATION();

    return $frame;

}
}