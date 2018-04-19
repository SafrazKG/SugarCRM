<?php

class IntWorkStreamHelperApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'deleteAllWorkStreams' => array(
                'reqType' => 'DELETE',
                'path' => array('INTWG_WorkStreamGenerators', 'deleteAllWorkStreams'),
                'pathVars' => array(''),
                'method' => 'deleteAllWorkStreams',
                'shortHelp' => 'Deletes All Work Streams',
                'longHelp' => '',
            ),
            'recreateAllWorkStreams' => array(
                'reqType' => 'POST',
                'path' => array('INTWG_WorkStreamGenerators', 'recreateAllWorkStreams'),
                'pathVars' => array(''),
                'method' => 'recreateAllWorkStreams',
                'shortHelp' => 'Recreates All Work Streams',
                'longHelp' => '',
            ),
        );
    }

    public function deleteAllWorkStreams(ServiceBase $api, $args)
    {
        $workStreamBean = BeanFactory::retrieveBean('INTWS_WorkStreams');

        $query = new SugarQuery();
        $query->select([]);
        $query->from($workStreamBean);

        /**
         * @var $workStreams INTWS_WorkStreams[]
         */
        $workStreams = $workStreamBean->fetchFromQuery($query);

        if (empty($workStreams)) { return; }

        foreach ($workStreams as $workStream) {
            $workStream->mark_deleted($workStream->id);
        }
    }

    public function recreateAllWorkStreams(ServiceBase $api, $args)
    {
        $this->deleteAllWorkStreams($api, $args);

        $generators = $this->getGenerators();

        if (empty($generators)) {
            return;
        }

        foreach ($generators as $generator) {
            $generator->generate();
        }
    }

    /**
     * @return array | INTWG_WorkStreamGenerators[]
     */
    protected function getGenerators()
    {
        $generatorBean = BeanFactory::retrieveBean('INTWG_WorkStreamGenerators');

        $query = new SugarQuery();
        $query->select([]);
        $query->from($generatorBean);

        /**
         * @var $generators INTWG_WorkStreamGenerators[] | array | null
         */
        $generators = $generatorBean->fetchFromQuery($query);

        if (empty($generators)) {
            return [];
        }

        return $generators;
    }
}