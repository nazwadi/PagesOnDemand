<?php
/*
 * DemoOnDemand.php - An extension 'module' for the PagesOnDemand extension.
 * @author Jim R. Wilson (wilson.jim.r@gmail.com)
 * @version 0.1
 * @copyright Copyright (C) 2007 Jim R. Wilson
 * @license The MIT License - http://www.opensource.org/licenses/mit-license.php 
 
 version 0.2 convert to OO by Jim Hu
 version 0.1 Demo by Jim Wilson
 
 */

if ( ! defined( 'MEDIAWIKI' ) ) die();

# Register hooks ('PagesOnDemand' hook is provided by the PagesOnDemand extension).
$wgHooks['PagesOnDemand'][] = 'DemoOnDemand::wfLoadDemoPageOnDemand';
/**
* Loads a demo page if the title matches a particular pattern.
* @param Title title The Title to check or create.
*/
class DemoOnDemand{

	public static function wfLoadDemoPageOnDemand( $title, $article ){

		# Short-circuit if $title isn't in the MAIN namespace or doesn't match the DEMO pattern.
		if ( $title->getNamespace() != NS_MAIN || !preg_match('/^DEMO:/', $title->getDBkey() ) ) {
			return true;
		}

		# Create the Article's new text - could be more complicated, but this is just a demo
		$text = 'Wow, we just created a page called ' . $title->getDBkey();

		# Create the Article, supplying the new text
		$user = User::newSystemUser( 'SA_Demo', [ 'steal' => true] );
		$page = WikiPage::factory( $title );
		$content = new WikitextContent ( $text );
		$success = $page->doEditContent($content, $text, 0, false, $user);

		# All done (returning false to kill PoD's wfRunHooks stack)
		return false;
	}
}

