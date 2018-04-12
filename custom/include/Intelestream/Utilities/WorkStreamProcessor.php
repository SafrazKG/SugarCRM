<?php

class WorkStreamProcessor
{
    public function process()
    {
        $wsGenerators = $this->getGenerators();

        foreach ($wsGenerators as $generator) {
            $generator->generate();
        }
    }

    public function delete()
    {
        $db = DBManagerFactory::getInstance();

        $this->deleteFromCstm($db);
        $this->deleteFromDefault($db);
        $this->deleteFromOppRelation($db);
    }


    /**
     * @return INTWG_WorkStreamGenerators[]
     * @throws SugarQueryException
     */
    protected function getGenerators()
    {
        global $db;

        $generatorBean = BeanFactory::retrieveBean('INTWG_WorkStreamGenerators');

        $query = new SugarQuery();
        $query->select();
        $query->from($generatorBean);
        $query->where()->equals('deleted', 0);

        $generators = $generatorBean->fetchFromQuery($query);

        return $generators;
    }

    /**
     * @param $db DBManager
     */
    protected function deleteFromDefault($db)
    {
        $table = 'intws_workstreams';

        $query = "DELETE FROM $table WHERE deleted = 1";

        $db->query($query);
    }

    /**
     * @param $db DBManager
     */
    protected function deleteFromCstm($db)
    {
        $baseTable = 'intws_workstreams';
        $cstmTable = 'intws_workstreams_cstm';

        $query = "DELETE FROM $cstmTable ";
        $query.= "WHERE EXISTS ";
        $query.= "(SELECT $baseTable.deleted FROM $baseTable WHERE $baseTable.id = $cstmTable.id_c AND $baseTable.deleted = 1)";

        $db->query($query);
    }

    /**
     * @param $db DBManager
     */
    protected function deleteFromOppRelation($db)
    {
        $table = 'opportunities_intws_workstreams_1_c';

        $query = "DELETE FROM $table where deleted = 1";

        $db->query($query);
    }
}

