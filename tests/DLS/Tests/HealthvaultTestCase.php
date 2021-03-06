<?php
namespace DLS\Tests;

use PHPUnit_Framework_TestCase;

use DLS\Healthvault\Driver;
use DLS\Healthvault\Configurations\HealthvaultROWConfiguration;
use DLS\Healthvault\Configurations\HealthvaultUSDevelopmentConfiguration;
use DLS\Tests\Mocks\TargetOverrideConfiguration;

class HealthvaultTestCase extends PHPUnit_Framework_TestCase {
	protected $applicationId = '05a059c9-c309-46af-9b86-b06d42510550';
	protected $thumbprint = '50054D4FAEE16F69AAF66B7596ED30F9922B949E';
	
	
	public function getMockConfiguration() {
		$mockConfiguration = new TargetOverrideConfiguration($this->applicationId, __DIR__ .'/../../../samples/app.pem', $this->thumbprint, 'bar.baz');
		
		return $mockConfiguration;
	}

	public function getRowConfiguration() {
		$rowConfiguration = new HealthvaultRowConfiguration($this->applicationId, __DIR__ . '/../../../samples/app.pem', $this->thumbprint);
		
		return $rowConfiguration;
	}
	
	public function getUSDevelopmentConfiguration() {
		$rowConfiguration = new HealthvaultUSDevelopmentConfiguration($this->applicationId, __DIR__ . '/../../../samples/app.pem', $this->thumbprint);
		
		$rowConfiguration->setToken('ASAAAJGYk+KvXOtFkwBwUMtHaBbV+OQRYBPm6fn92vWAT7P53CYP8/TqZqaXE3UWOhaoPwkayQXGFzu2J1HVATwVfeV/xavess6DzEp/bH3E9A1Hd3dIJuIK+HWz2DUv21u20u02bfYMHDtRDRqMW/MMD0nnxDFIcwg+KBFhyKSK9j+vBAuFLAcZdTOVDKKkJFmipw==');
		
		return $rowConfiguration;
	}
	
	public function getDriverWithMockConfiguration()
	{
		$mockConfiguration = $this->getMockConfiguration();
		
		return new Driver($mockConfiguration);
	}
	
	public function getDriverWithRowConfiguration()
	{
		$rowConfiguration = $this->getRowConfiguration();
		
		return new Driver($rowConfiguration);
	}

	public function getDriverWithUSDevelopmentConfiguration()
	{
		$rowConfiguration = $this->getUSDevelopmentConfiguration();
		
		return new Driver($rowConfiguration);
	}
}
