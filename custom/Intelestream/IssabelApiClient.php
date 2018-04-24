<?php

use Guzzle\Common\Event;
use Guzzle\Http\Client;

class IssabelApiClient
{

    /**
     * Handle API reponse
     * @param type $response
     * @return type
     * @throws \RuntimeException
     */
    protected static function handleResponse($response)
    {
        if ($response['status'] == 'ERROR') {
            throw new \RuntimeException($response['message']);
        }

        return $response;
    }


    /**
     * Get the credentials for Issabel auth
     * @global array $sugar_config
     * @return array
     */
    protected static function getIssabelCredentials()
    {
        global $sugar_config;

        $user = isset($sugar_config['issabel_user']) ? $sugar_config['issabel_user'] : 'admin';
        $pass = isset($sugar_config['issabel_pass']) ? $sugar_config['issabel_pass'] : 'admin';

        return [
            'user' => $user,
            'pass' => $pass
        ];
    }


    /**
     * Factory method
     * @global array $sugar_config
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
        } catch (\Exception $ex) {
            throw new \RuntimeException($ex->getMessage());
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
        $creds     = static::getIssabelCredentials();
        $request->setAuth($creds['user'], $creds['pass']);
        $campaigns = $request->send()->json();
        return static::handleResponse($campaigns);
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
        $creds   = static::getIssabelCredentials();
        $request->setAuth($creds['user'], $creds['pass']);
        $result  = $request->send()->json();
        return static::handleResponse($result);
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
        $creds   = static::getIssabelCredentials();
        $request->setAuth($creds['user'], $creds['pass']);
        $result  = $request->send()->json();
        return static::handleResponse($result);
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
        $creds   = static::getIssabelCredentials();
        $request->setAuth($creds['user'], $creds['pass']);
        $result  = $request->send()->json();
        return static::handleResponse($result);
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
        $creds   = static::getIssabelCredentials();
        $request->setAuth($creds['user'], $creds['pass']);
        $result  = $request->send()->json();
        return static::handleResponse($result);
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
        $creds   = static::getIssabelCredentials();
        $request->setAuth($creds['user'], $creds['pass']);
        $result  = $request->send()->json();
        return static::handleResponse($result);
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
        $creds   = static::getIssabelCredentials();
        $request->setAuth($creds['user'], $creds['pass']);
        $result  = $request->send()->json();
        return static::handleResponse($result);
    }
}
