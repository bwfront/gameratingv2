<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gameskey_domain_model_games', 'EXT:gameskey/Resources/Private/Language/locallang_csh_tx_gameskey_domain_model_games.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gameskey_domain_model_games');
})();
