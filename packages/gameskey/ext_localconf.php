<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Gameskey',
        'Gamesfrontkey',
        [
            \Bennet\Gameskey\Controller\GamesController::class => 'list, show, new, create, edit, update, delete, rate, test, search, reset'
        ],
        // non-cacheable actions
        [
            \Bennet\Gameskey\Controller\GamesController::class => 'create, update, delete, list, show'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    gamesfrontkey {
                        iconIdentifier = gameskey-plugin-gamesfrontkey
                        title = LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_gamesfrontkey.name
                        description = LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_gamesfrontkey.description
                        tt_content_defValues {
                            CType = list
                            list_type = gameskey_gamesfrontkey
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
