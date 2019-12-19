<?php

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

	public function generateAccessToken( $tokenKey ) {
		return $this->m_objGoogleClient->refreshToken( $tokenKey );
	}

	public function loadGoogleLocations( $accountKey ) {
		return ( new Google_Service_MyBusiness( $this->m_objGoogleClient ) )->accounts_locations->listAccountsLocations( $accountKey )->getLocations();
	}

}