<?php
return [
  'database' => [
    'host' => 'db',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espocrm',
    'user' => 'espocrm_user',
    'password' => '992287a89479e49300f979ef91d719f517ffd0e653d660582ddfc4770efc22da',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => NULL,
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => false,
    'sql' => false,
    'sqlFailed' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => true,
  'cleanupAppLogPeriod' => '30 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1779980610.023707,
  'cryptKey' => '085d447991b325ca49d0b1527f0e030e',
  'hashSecretKey' => '803b370a9bbc66d5c41e908d9b35e9c0',
  'defaultPermissions' => [
    'user' => 'www-data',
    'group' => 'www-data'
  ],
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.11.17',
  'instanceId' => 'd7a43dde-7186-4262-93a9-d45fc3b5cf72',
  'webSocketZeroMQSubmissionDsn' => 'tcp://websocket:7777',
  'webSocketZeroMQSubscriberDsn' => 'tcp://*:7777',
  'apiSecretKeys' => (object) []
];
