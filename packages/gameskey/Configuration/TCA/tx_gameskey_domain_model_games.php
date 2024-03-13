<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,description',
        'iconfile' => 'EXT:gameskey/Resources/Public/Icons/tx_gameskey_domain_model_games.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'title, description, rating, rating_count, rating_sum, image, rel_date, fsk18, action, multiplayer, singleplayer, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_gameskey_domain_model_games',
                'foreign_table_where' => 'AND {#tx_gameskey_domain_model_games}.{#pid}=###CURRENT_PID### AND {#tx_gameskey_domain_model_games}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.title',
            'description' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.title.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.description',
            'description' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.description.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required',
                'default' => ''
            ]
        ],
        'rating' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.rating',
            'description' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.rating.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2,required'
            ]
        ],
        'rating_count' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.rating_count',
            'description' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.rating_count.description',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required',
                'default' => 0
            ]
        ],
        'rating_sum' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.rating_sum',
            'description' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.rating_sum.description',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required',
                'default' => 0
            ]
        ],
        'image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.image',
            'description' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.image.description',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ]
                        ],
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'image',
                        'tablenames' => 'tx_gameskey_domain_model_games',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1,
                    'minitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            
        ],
        'rel_date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.rel_date',
            'description' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.rel_date.description',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date,required',
                'default' => null,
            ],
        ],
        'fsk18' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.fsk18',
            'description' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.fsk18.description',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'action' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.action',
            'description' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.action.description',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'multiplayer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.multiplayer',
            'description' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.multiplayer.description',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'singleplayer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.singleplayer',
            'description' => 'LLL:EXT:gameskey/Resources/Private/Language/locallang_db.xlf:tx_gameskey_domain_model_games.singleplayer.description',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
    
    ],
];
