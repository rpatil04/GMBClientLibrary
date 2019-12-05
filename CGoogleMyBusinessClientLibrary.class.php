<?php
require_once( 'MyBusiness.php' );

class CGoogleMyBusinessClientLibrary {

	protected $m_objGoogleClient;

	public function __construct( $arrmixParameters ) {
		$this->m_objGoogleClient = new Google_Client();
		$this->m_objGoogleClient->setClientId( $arrmixParameters['client_id'] );
		$this->m_objGoogleClient->setClientSecret( $arrmixParameters['client_secret'] );
	}

	public function setAccessToken( $arrstrAccessToken ) {
		$this->m_objGoogleClient->setAccessToken( $arrstrAccessToken );
	}

	public function executeRequest( $strRequest, $arrmixParameters = [] ) {
		$arrmixResponse = [];
		switch( $strRequest ) {

			case 'generate_access_token':
				$arrmixResponse = $this->m_objGoogleClient->refreshToken( $arrmixParameters['user_token_key'] );
				break;

			case 'load_google_locations':
				try {
					$arrmixResponse = ( new Google_Service_MyBusiness( $this->m_objGoogleClient ) )->accounts_locations->listAccountsLocations( $arrmixParameters['user_account_key'] )->getLocations();
				} catch( Exception $objException ) {
					$arrmixResponse = [ 'error' => true, 'message' => 'Error while getting locations.' ];
				}
				break;

			default:
				$arrmixResponse = [ 'error' => true, 'message' => 'Invalid API request.' ];
				break;
		}

		return $arrmixResponse;
	}

}