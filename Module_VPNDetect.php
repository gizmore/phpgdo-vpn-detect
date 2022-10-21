<?php
namespace GDO\VPNDetect;

use GDO\Core\GDO_Module;
use GDO\Core\GDT_Checkbox;

/**
 * Detect if a user uses a VPN (probably).
 * 
 * @author gizmore
 * @since 7.0.1
 */
final class Module_VPNDetect extends GDO_Module
{
	/**
	 * Priority should be after country detectors?
	 */
	public int $priority = 80;
	
	public function getConfig(): array
	{
		return [
			GDT_Checkbox::make('proxy_test')->initial('1'),
		];
	}

}
