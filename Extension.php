<?php

namespace Bolt\Extension\AndyJessop\Facebook;

define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/vendor/facebook/src/Facebook/');
require __DIR__ . '/vendor/facebook/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookRequestException;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{

    public function initialize() {

    	$this->app->get('api/example', array($this, 'example'))
            ->bind('example');
    }

    public function getName()
    {
        return "Facebook";
    }

    public function example()
    {
    	$application = FacebookSession::setDefaultApplication($this->config['app_id'], $this->config['app_secret']);

    	$session = FacebookSession::newAppSession();

		// Get the GraphUser object for the current user:
		// 
		try {
		  $session->validate();
		} catch (FacebookRequestException $ex) {
		  // Session not valid, Graph API returned an exception with the reason.
		  echo $ex->getMessage();
		} catch (\Exception $ex) {
		  // Graph API returned info, but it may mismatch the current app or have expired.
		  echo $ex->getMessage();
		}

			$request = new FacebookRequest(
			  $session,
			  'GET',
			  '/780788985274738'
			);
			$response = $request->execute();
			$graphObject = $response->getGraphObject();
		  	$response = $this->app->json($graphObject->asArray(), 200);
        	return $response;


    }

}






