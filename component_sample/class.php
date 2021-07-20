<?php
namespace Components\Crm\SampleComponent;

use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Engine\ActionFilter;

class SampleComponent extends \CBitrixComponent implements Controllerable
{

    public function configureActions()
    {
        return [
            'getSampleData' => [
                'prefilters' => [
                    new ActionFilter\Authentication,
                ],
            ],
        ];
    }

    public function getSampleDataAction($post){
    	var_dump($post);
        return 'Some data to return';
    }

    public function executeComponent()
    {
        //$this->arParams['SAMPLE_AR_PARAMS'];
        //$this->arResult['SAMPLE_AR_RESULT'];

        $this->includeComponentTemplate();
    }

}