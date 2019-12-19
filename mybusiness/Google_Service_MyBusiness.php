<?php
namespace myBusiness;
class Google_Service_MyBusiness extends Google_Service
{
	public $accounts_locations;

	/**
	 * Constructs the internal representation of the MyBusiness service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://mybusiness.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v4';
		$this->serviceName = 'mybusiness';

		$this->accounts_locations = new Google_Service_MyBusiness_AccountsLocations_Resource(
			$this,
			$this->serviceName,
			'locations',
			array(
				'methods' => array(
					'associate' => array(
						'path' => 'v4/{+name}:associate',
						'httpMethod' => 'POST',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),'batchGet' => array(
						'path' => 'v4/{+name}/locations:batchGet',
						'httpMethod' => 'POST',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),'batchGetReviews' => array(
						'path' => 'v4/{+name}/locations:batchGetReviews',
						'httpMethod' => 'POST',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),'clearAssociation' => array(
						'path' => 'v4/{+name}:clearAssociation',
						'httpMethod' => 'POST',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),'create' => array(
						'path' => 'v4/{+parent}/locations',
						'httpMethod' => 'POST',
						'parameters' => array(
							'parent' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
							'validateOnly' => array(
								'location' => 'query',
								'type' => 'boolean',
							),
							'requestId' => array(
								'location' => 'query',
								'type' => 'string',
							),
						),
					),'delete' => array(
						'path' => 'v4/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),'fetchVerificationOptions' => array(
						'path' => 'v4/{+name}:fetchVerificationOptions',
						'httpMethod' => 'POST',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),'findMatches' => array(
						'path' => 'v4/{+name}:findMatches',
						'httpMethod' => 'POST',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),'get' => array(
						'path' => 'v4/{+name}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),'getGoogleUpdated' => array(
						'path' => 'v4/{+name}:googleUpdated',
						'httpMethod' => 'GET',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),'list' => array(
						'path' => 'v4/{+parent}/locations',
						'httpMethod' => 'GET',
						'parameters' => array(
							'parent' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
							'orderBy' => array(
								'location' => 'query',
								'type' => 'string',
							),
							'languageCode' => array(
								'location' => 'query',
								'type' => 'string',
							),
							'pageSize' => array(
								'location' => 'query',
								'type' => 'integer',
							),
							'filter' => array(
								'location' => 'query',
								'type' => 'string',
							),
							'pageToken' => array(
								'location' => 'query',
								'type' => 'string',
							),
						),
					),'patch' => array(
						'path' => 'v4/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
							'validateOnly' => array(
								'location' => 'query',
								'type' => 'boolean',
							),
							'attributeMask' => array(
								'location' => 'query',
								'type' => 'string',
							),
							'updateMask' => array(
								'location' => 'query',
								'type' => 'string',
							),
						),
					),'reportInsights' => array(
						'path' => 'v4/{+name}/locations:reportInsights',
						'httpMethod' => 'POST',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),'transfer' => array(
						'path' => 'v4/{+name}:transfer',
						'httpMethod' => 'POST',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),'verify' => array(
						'path' => 'v4/{+name}:verify',
						'httpMethod' => 'POST',
						'parameters' => array(
							'name' => array(
								'location' => 'path',
								'type' => 'string',
								'required' => true,
							),
						),
					),
				)
			)
		);
	}
}
?>