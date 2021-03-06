<?php /*
 * ###
 * PHR_PhpBlog
 * %%
 * Copyright (C) 1999 - 2012 Photon Infotech Inc.
 * %%
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *      http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ###
 */ ?>
<?php
/*	Author by {phresco} QA Automation Team	*/

require_once 'Dashboard_DeleteTopic.php';
require_once 'Dashboard_CatDelete.php';

class DbDeleteModules extends PHPUnit_Framework_TestSuite
{
	protected function setUp(){
		parent::setUp();
	}
	public static function suite(){
	
		$testSuite = new DbDeleteModules();
		$testSuite->setName('DbDeleteModules');
		$testSuite->addTestSuite('Dashboard_DeleteTopic');
		$testSuite->addTestSuite('Dashboard_CatDelete');
		return $testSuite;
		
    }
    protected function tearDown(){
		
	}
}
?>