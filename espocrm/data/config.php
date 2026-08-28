<?php
return [
  'useCache' => true,
  'jobMaxPortion' => 15,
  'jobRunInParallel' => true,
  'jobPoolConcurrencyNumber' => 8,
  'daemonMaxProcessNumber' => 5,
  'daemonInterval' => 10,
  'daemonProcessTimeout' => 36000,
  'jobForceUtc' => false,
  'recordsPerPage' => 20,
  'recordsPerPageSmall' => 5,
  'recordsPerPageSelect' => 10,
  'recordsPerPageKanban' => 5,
  'applicationName' => 'JuImóveis',
  'timeZone' => 'America/Sao_Paulo',
  'dateFormat' => 'DD.MM.YYYY',
  'timeFormat' => 'HH:mm',
  'weekStart' => 0,
  'thousandSeparator' => '.',
  'decimalMark' => ',',
  'exportDelimiter' => ',',
  'currencyList' => [
    0 => 'BRL'
  ],
  'defaultCurrency' => 'BRL',
  'baseCurrency' => 'BRL',
  'currencyNoJoinMode' => false,
  'outboundEmailIsShared' => true,
  'outboundEmailFromName' => 'Juliana Carneiro',
  'outboundEmailFromAddress' => 'contato@juimoveis.com.br',
  'smtpServer' => NULL,
  'smtpPort' => 587,
  'smtpAuth' => true,
  'smtpSecurity' => 'TLS',
  'smtpUsername' => NULL,
  'language' => 'pt_BR',
  'authenticationMethod' => 'Espo',
  'tabQuickSearch' => true,
  'globalSearchEntityList' => [
    0 => 'RealEstateProperty',
    1 => 'RealEstateRequest',
    2 => 'Account',
    3 => 'Contact',
    4 => 'Lead',
    5 => 'Opportunity'
  ],
  'tabList' => [
    0 => 'RealEstateProperty',
    1 => 'CCondominium',
    2 => (object) [
      'type' => 'divider',
      'id' => '342567',
      'text' => '$CRM'
    ],
    3 => 'Lead',
    4 => 'Contact',
    5 => 'RealEstateRequest',
    6 => 'Opportunity',
    7 => (object) [
      'type' => 'divider',
      'text' => '$Atividades',
      'id' => '219419'
    ],
    8 => 'Email',
    9 => 'Meeting',
    10 => 'Call',
    11 => 'Calendar',
    12 => (object) [
      'type' => 'divider',
      'id' => '655187',
      'text' => '$Suporte'
    ],
    13 => 'User',
    14 => 'Case',
    15 => 'Task',
    16 => 'KnowledgeBaseArticle',
    17 => 'Document',
    18 => '_delimiter_',
    19 => (object) [
      'type' => 'divider',
      'text' => '$Marketing',
      'id' => '463280'
    ],
    20 => 'Campaign',
    21 => 'TargetList',
    22 => (object) [
      'type' => 'divider',
      'text' => '$Organization',
      'id' => '566592'
    ],
    23 => 'Team',
    24 => 'EmailTemplate',
    25 => 'WorkingTimeCalendar',
    26 => 'Import',
    27 => '_delimiter-ext_'
  ],
  'quickCreateList' => [
    0 => 'RealEstateRequest',
    1 => 'RealEstateProperty',
    2 => 'CCondominium',
    3 => 'Account',
    4 => 'Contact',
    5 => 'Lead',
    6 => 'Opportunity',
    7 => 'Meeting',
    8 => 'Call',
    9 => 'Task',
    10 => 'Email',
    11 => 'Case'
  ],
  'exportDisabled' => false,
  'adminNotifications' => true,
  'adminNotificationsNewVersion' => true,
  'adminNotificationsCronIsNotConfigured' => true,
  'adminNotificationsNewExtensionVersion' => true,
  'assignmentEmailNotifications' => false,
  'assignmentEmailNotificationsEntityList' => [
    0 => 'Lead',
    1 => 'Opportunity',
    2 => 'Task',
    3 => 'Case'
  ],
  'assignmentNotificationsEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Email'
  ],
  'portalStreamEmailNotifications' => true,
  'streamEmailNotificationsEntityList' => [
    0 => 'Case'
  ],
  'streamEmailNotificationsTypeList' => [
    0 => 'Post',
    1 => 'Status',
    2 => 'EmailReceived'
  ],
  'emailNotificationsDelay' => 30,
  'emailMessageMaxSize' => 25,
  'emailRecipientAddressMaxCount' => 100,
  'notificationsCheckInterval' => 10,
  'notificationGrouping' => true,
  'popupNotificationsCheckInterval' => 15,
  'maxEmailAccountCount' => 2,
  'followCreatedEntities' => false,
  'b2cMode' => true,
  'theme' => 'Espo',
  'themeParams' => (object) [
    'navbar' => 'side'
  ],
  'massEmailMaxPerHourCount' => 100,
  'massEmailMaxPerBatchCount' => 20,
  'massEmailVerp' => false,
  'personalEmailMaxPortionSize' => 50,
  'inboundEmailMaxPortionSize' => 50,
  'emailAddressLookupEntityTypeList' => [
    0 => 'User'
  ],
  'emailAddressSelectEntityTypeList' => [
    0 => 'User',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Account'
  ],
  'emailAddressEntityLookupDefaultOrder' => [
    0 => 'User',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Account'
  ],
  'phoneNumberEntityLookupDefaultOrder' => [
    0 => 'User',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Account'
  ],
  'authTokenLifetime' => 0,
  'authTokenMaxIdleTime' => 48,
  'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
  'addressFormat' => 1,
  'displayListViewRecordCount' => true,
  'dashboardLayout' => [
    0 => (object) [
      'name' => 'Atividades do Mês',
      'layout' => [
        0 => (object) [
          'id' => 'd913571',
          'name' => 'Calendar',
          'x' => 0,
          'y' => 0,
          'width' => 2.6666666666666665,
          'height' => 3
        ],
        1 => (object) [
          'id' => 'd827615',
          'name' => 'Activities',
          'x' => 2.6666666666666665,
          'y' => 0,
          'width' => 1.3333333333333333,
          'height' => 5.25
        ],
        2 => (object) [
          'id' => 'd425608',
          'name' => 'Emails',
          'x' => 0,
          'y' => 3,
          'width' => 2.6666666666666665,
          'height' => 2.25
        ]
      ],
      'id' => '7665209'
    ],
    1 => (object) [
      'name' => 'Visão Geral',
      'layout' => [
        0 => (object) [
          'id' => 'd375808',
          'name' => 'SalesByMonth',
          'x' => 0,
          'y' => 0,
          'width' => 2.6666666666666665,
          'height' => 2.5
        ],
        1 => (object) [
          'id' => 'd785916',
          'name' => 'Stream',
          'x' => 2.6666666666666665,
          'y' => 0,
          'width' => 1.3333333333333333,
          'height' => 5
        ],
        2 => (object) [
          'id' => 'd418637',
          'name' => 'SalesPipeline',
          'x' => 0,
          'y' => 2.5,
          'width' => 2.6666666666666665,
          'height' => 2.25
        ]
      ]
    ]
  ],
  'calendarEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Task'
  ],
  'activitiesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'historyEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Email'
  ],
  'busyRangesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'emailAutoReplySuppressPeriod' => '2 hours',
  'emailAutoReplyLimit' => 5,
  'cleanupJobPeriod' => '1 month',
  'cleanupActionHistoryPeriod' => '15 days',
  'cleanupAuthTokenPeriod' => '1 month',
  'cleanupSubscribers' => true,
  'cleanupAudit' => true,
  'cleanupAuditPeriod' => '3 months',
  'appLogAdminAllowed' => false,
  'currencyFormat' => 2,
  'currencyDecimalPlaces' => 2,
  'aclAllowDeleteCreated' => false,
  'aclAllowDeleteCreatedThresholdPeriod' => '24 hours',
  'attachmentAvailableStorageList' => NULL,
  'attachmentUploadMaxSize' => 256,
  'attachmentUploadChunkSize' => 5,
  'inlineAttachmentUploadMaxSize' => 20,
  'textFilterUseContainsForVarchar' => true,
  'tabColorsDisabled' => false,
  'massPrintPdfMaxCount' => 50,
  'emailKeepParentTeamsEntityList' => [
    0 => 'Case'
  ],
  'streamEmailWithContentEntityTypeList' => [
    0 => 'Case'
  ],
  'recordListMaxSizeLimit' => 200,
  'noteDeleteThresholdPeriod' => '1 month',
  'noteEditThresholdPeriod' => '7 days',
  'notePinnedMaxCount' => 5,
  'emailForceUseExternalClient' => false,
  'useWebSocket' => true,
  'auth2FAMethodList' => [
    0 => 'Totp'
  ],
  'auth2FAInPortal' => false,
  'personNameFormat' => 'firstLast',
  'newNotificationCountInTitle' => false,
  'pdfEngine' => 'Dompdf',
  'smsProvider' => NULL,
  'mapProvider' => 'Google',
  'defaultFileStorage' => 'EspoUploadDir',
  'ldapUserNameAttribute' => 'sAMAccountName',
  'ldapUserFirstNameAttribute' => 'givenName',
  'ldapUserLastNameAttribute' => 'sn',
  'ldapUserTitleAttribute' => 'title',
  'ldapUserEmailAddressAttribute' => 'mail',
  'ldapUserPhoneNumberAttribute' => 'telephoneNumber',
  'ldapUserObjectClass' => 'person',
  'ldapPortalUserLdapAuth' => false,
  'passwordGenerateLength' => 10,
  'passwordStrengthLength' => NULL,
  'passwordStrengthLetterCount' => NULL,
  'passwordStrengthNumberCount' => NULL,
  'passwordStrengthBothCases' => false,
  'passwordStrengthSpecialCharacterCount' => NULL,
  'massActionIdleCountThreshold' => 100,
  'exportIdleCountThreshold' => 1000,
  'oidcJwtSignatureAlgorithmList' => [
    0 => 'RS256'
  ],
  'oidcUsernameClaim' => 'sub',
  'oidcFallback' => true,
  'oidcScopes' => [
    0 => 'profile',
    1 => 'email',
    2 => 'phone'
  ],
  'oidcAuthorizationPrompt' => 'consent',
  'listViewSettingsDisabled' => false,
  'cleanupDeletedRecords' => true,
  'phoneNumberNumericSearch' => true,
  'phoneNumberInternational' => true,
  'phoneNumberExtensions' => false,
  'phoneNumberPreferredCountryList' => [
    0 => 'br'
  ],
  'wysiwygCodeEditorDisabled' => false,
  'customPrefixDisabled' => false,
  'listPagination' => true,
  'starsLimit' => 500,
  'quickSearchFullTextAppendWildcard' => false,
  'authIpAddressCheck' => false,
  'authIpAddressWhitelist' => [],
  'authIpAddressCheckExcludedUsersIds' => [],
  'authIpAddressCheckExcludedUsersNames' => (object) [],
  'availableReactions' => [
    0 => 'Like'
  ],
  'streamReactionsCheckMaxSize' => 50,
  'emailScheduledBatchCount' => 20,
  'emailAddressMaxCount' => 10,
  'phoneNumberMaxCount' => 10,
  'iframeSandboxExcludeDomainList' => [
    0 => 'youtube.com',
    1 => 'google.com'
  ],
  'microtime' => 1785852189.732332,
  'siteUrl' => 'https://crm.juimoveis.com.br',
  'fullTextSearchMinLength' => 4,
  'webSocketUrl' => 'ws://localhost:8081',
  'companyLogoId' => '6a18575fcf067044e',
  'companyLogoName' => 'banner-horizontal-003-T.webp',
  'userThemesDisabled' => false,
  'avatarsDisabled' => false,
  'scopeColorsDisabled' => false,
  'tabIconsDisabled' => false,
  'dashletsOptions' => (object) [
    'd418637' => (object) [
      'title' => 'Funil de Vendas',
      'dateFilter' => 'currentFiscalYear',
      'useLastStage' => false,
      'teamName' => NULL,
      'teamId' => NULL
    ],
    'd913571' => (object) [
      'title' => 'Calendário',
      'autorefreshInterval' => 0.5,
      'mode' => 'month',
      'enabledScopeList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task'
      ],
      'teamsIds' => [],
      'teamsNames' => (object) []
    ]
  ],
  'maintenanceMode' => false,
  'cronDisabled' => false,
  'fiscalYearShift' => 0,
  'addressCityList' => [],
  'addressStateList' => [],
  'emailAddressIsOptedOutByDefault' => false,
  'workingTimeCalendarName' => NULL,
  'workingTimeCalendarId' => NULL,
  'baselineRoleName' => NULL,
  'baselineRoleId' => NULL,
  'saleMarkup' => 6,
  'rentMarkup' => 50,
  'dashboardLayoutBeforeRealEstate' => [
    0 => (object) [
      'name' => 'My Espo',
      'layout' => [
        0 => (object) [
          'id' => 'default-stream',
          'name' => 'Stream',
          'x' => 0,
          'y' => 0,
          'width' => 2,
          'height' => 4
        ],
        1 => (object) [
          'id' => 'default-activities',
          'name' => 'Activities',
          'x' => 2,
          'y' => 2,
          'width' => 2,
          'height' => 4
        ]
      ]
    ]
  ],
  'massEmailOpenTracking' => true,
  'outboundEmailBccAddress' => NULL,
  'massEmailDisableMandatoryOptOutLink' => false,
  'realEstateEmailSending' => false,
  'googleMapsApiKey' => 'AIzaSyCIXctMDra7CaNeoNDfcraF7axIFoi74WQ',
  'googleMapsMapId' => NULL,
  'integrations' => (object) [
    'GoogleMaps' => true,
    'GoogleReCaptcha' => true
  ]
];
