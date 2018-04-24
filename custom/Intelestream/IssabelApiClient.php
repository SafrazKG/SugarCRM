<?php

use Guzzle\Common\Event;
use Guzzle\Http\Client;

class IssabelApiClient
{

    /**
     * Factory method
     * @global string $sugar_config
     * @return Client
     */
    protected static function getClient()
    {
        global $sugar_config;

        if (!isset($sugar_config['issabel_url'])) {
            $sugar_config['issabel_url'] = 'https://192.168.1.151/rest.php/campaign_out/';
        }
        try {
            $client = new Client($sugar_config['issabel_url']);

            //workaround for cURL SSL certificate validation errors on OSX
            $client->setSslVerification(false, false, false);
        }
        catch (\Exception $ex) {
            
        }

        return $client;

    }


    /**
     * Retrieve a list of campaigns 
     * @return string
     */
    public static function getCampaignsList()
    {
        $client    = static::getClient();
        $request   = $client->get('CampaignList', ['content-type' => 'application/json']);
        $request->setAuth('admin', 'admin');
        $campaigns = $request->send()->json();
        return $campaigns;

    }


    /**
     * Activate a campaign
     * @param int $campaignId
     * @return string
     */
    public static function activateCampaign($campaignId)
    {
        $client  = static::getClient();
        $request = $client->get(sprintf('CampaignActivate/%d', intval($campaignId)));
        $request->setAuth('admin', 'admin');
        $result  = $request->send()->json();
        return $result;

    }


    /**
     * Deactivate a campaign
     * @param int $campaignId
     * @return string
     */
    public static function deactivateCampaign($campaignId)
    {
        $client  = static::getClient();
        $request = $client->get(sprintf('CampaignDeactivate/%d', intval($campaignId)));
        $request->setAuth('admin', 'admin');
        $result  = $request->send()->json();
        return $result;

    }


    /**
     * Get the given campaigns current call list 
     * @param int $campaignId
     * @return string
     */
    public static function getCampaignCallList($campaignId)
    {
        $client  = static::getClient();
        $request = $client->get(sprintf('CallList/%d', intval($campaignId)));
        $request->setAuth('admin', 'admin');
        $result  = $request->send()->json();
        return $result;

    }


    /**
     * Add a number to the given campaign
     * @param int $campaignId
     * @param string $number
     * @return string
     */
    public static function callListAddNumber($campaignId, $number)
    {
        $client  = static::getClient();
        $request = $client->post(sprintf('CallListAddNumber/%d', intval($campaignId)), ['content-type' => 'application/json'], json_encode(['phone' => $number . '']));
        $request->setAuth('admin', 'admin');
        $result  = $request->send()->json();
        return $result;

    }


    /**
     * Remove a number from the given campaign
     * @param int $campaignId
     * @param string $number
     * @return string
     */
    public static function callListDelNumber($campaignId, $number)
    {
        $client  = static::getClient();
        $request = $client->post(sprintf('CallListDelNumber/%d', intval($campaignId)), ['content-type' => 'application/json'], json_encode(['phone' => $number . '']));
        $request->setAuth('admin', 'admin');
        $result  = $request->send()->json();
        return $result;

    }


    /**
     * Purge and re-set the full call list for a given campaign
     * @param int $campaignId
     * @param array $numbers
     * @return string
     */
    public static function callListSetNumbers($campaignId, $numbers)
    {
        $client  = static::getClient();
        $request = $client->post(sprintf('CallListSetNumbers/%d', intval($campaignId)), ['content-type' => 'application/json'], json_encode(['phones' => $numbers]));
        $request->setAuth('admin', 'admin');
        $result  = $request->send()->json();
        return $result;

    }


}
