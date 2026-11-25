<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

(static function (): void {
    // -----------------------------------------------------------------------------------------------------------------
    // Felder aus ps14_foundation, die erst in dessen TCA-Overrides entstehen und deshalb nicht per useExistingField in
    // den Content Blocks bzw. Basics stehen koennen. Content Blocks benennt die Paletten der Basics <CType>_<Palette>.
    foreach (['ps14_accordion', 'ps14_tabs', 'ps14_timeline'] as $type) {
        // Ueberschriften-Typ der Items (Basic Ps14/Header)
        ExtensionManagementUtility::addFieldsToPalette('tt_content', $type . '_headers', 'tx_foundation_elements_header', 'after:subheader');

        // Titel im Abschnittsmenue (Basic TYPO3/Links in Ps14/Appearance)
        ExtensionManagementUtility::addFieldsToPalette('tt_content', $type . '_links_palette', 'tx_foundation_section_menu_title, --linebreak--', 'after:sectionIndex');
    }
})();
