<?php

	Class extension_library extends Extension{

		/**
		 * Extension information
		 */
		public function about(){
			return array(
				'name' => 'Library',
				'type' => 'Miscellaneous',
				'version' => '1.0',
				'release-date' => '2010-12-31',
				'author' => array(
					'name' => 'Stephen Bau',
					'website' => 'http://github.com/domain7/',
					'email' => 'stephen@domain7.com'
				),
				'description' => 'A library for use with the Members extension',
				'compatibility' => array(
					'2.2' => true
				)
			);
		}
	}
		
