<?php return array (
  0 => 
  array (
    'PUT' => 
    array (
      '/api/v1/RealEstateMatchingConfiguration' => 'route0',
      '/api/v1/Settings' => 'route27',
      '/api/v1/CurrencyRate' => 'route49',
      '/api/v1/Kanban/order' => 'route63',
      '/api/v1/UserSecurity/password' => 'route91',
    ),
    'GET' => 
    array (
      '/api/v1/Activities/upcoming' => 'route6',
      '/api/v1/Activities' => 'route7',
      '/api/v1/Timeline' => 'route8',
      '/api/v1/Timeline/busyRanges' => 'route9',
      '/api/v1/' => 'route18',
      '/api/v1/App/user' => 'route19',
      '/api/v1/App/about' => 'route21',
      '/api/v1/App/appParams' => 'route22',
      '/api/v1/Metadata' => 'route23',
      '/api/v1/I18n' => 'route24',
      '/api/v1/Settings' => 'route25',
      '/api/v1/Stream' => 'route28',
      '/api/v1/GlobalStream' => 'route29',
      '/api/v1/GlobalSearch' => 'route30',
      '/api/v1/Admin/jobs' => 'route42',
      '/api/v1/CurrencyRate' => 'route48',
      '/api/v1/Email/inbox/notReadCounts' => 'route84',
      '/api/v1/Email/insertFieldData' => 'route85',
      '/api/v1/EmailAddress/search' => 'route87',
      '/api/v1/Oidc/authorizationData' => 'route97',
      '/api/v1/OpenApi' => 'route101',
    ),
    'POST' => 
    array (
      '/api/v1/App/destroyAuthToken' => 'route20',
      '/api/v1/Admin/rebuild' => 'route40',
      '/api/v1/Admin/clearCache' => 'route41',
      '/api/v1/Action' => 'route50',
      '/api/v1/MassAction' => 'route51',
      '/api/v1/Export' => 'route54',
      '/api/v1/Import' => 'route57',
      '/api/v1/Import/file' => 'route58',
      '/api/v1/Attachment/fromImageUrl' => 'route67',
      '/api/v1/Email/importEml' => 'route75',
      '/api/v1/Email/sendTest' => 'route76',
      '/api/v1/Email/inbox/read' => 'route77',
      '/api/v1/Email/inbox/important' => 'route79',
      '/api/v1/Email/inbox/inTrash' => 'route81',
      '/api/v1/UserSecurity/apiKey/generate' => 'route90',
      '/api/v1/UserSecurity/password/recovery' => 'route92',
      '/api/v1/UserSecurity/password/generate' => 'route93',
      '/api/v1/User/passwordChangeRequest' => 'route94',
      '/api/v1/User/changePasswordByRequest' => 'route95',
      '/api/v1/Oidc/backchannelLogout' => 'route98',
    ),
    'PATCH' => 
    array (
      '/api/v1/Settings' => 'route26',
    ),
    'DELETE' => 
    array (
      '/api/v1/Email/inbox/read' => 'route78',
      '/api/v1/Email/inbox/important' => 'route80',
      '/api/v1/Email/inbox/inTrash' => 'route82',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/RealEstateProperty/([^/]+)/matchingRequests|/api/v1/RealEstateRequest/([^/]+)/matchingProperties()|/api/v1/Activities/([^/]+)/([^/]+)/composeEmailAddressList()|/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)()|/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)/list/([^/]+)()|/api/v1/Meeting/([^/]+)/attendees()()()()()|/api/v1/Call/([^/]+)/attendees()()()()()()|/api/v1/TargetList/([^/]+)/optedOut()()()()()()()|/api/v1/([^/]+)/action/([^/]+)()()()()()()()|/api/v1/([^/]+)/layout/([^/]+)()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route1',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route2',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route3',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route4',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          6 => 
          array (
            0 => 'route5',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
              'targetType' => 'targetType',
            ),
          ),
          7 => 
          array (
            0 => 'route10',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route11',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route13',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route36',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          11 => 
          array (
            0 => 'route37',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/api/v1/MassAction/([^/]+)/status()()|/api/v1/Export/([^/]+)/status()()()|/api/v1/Kanban/([^/]+)()()()()|/api/v1/Attachment/file/([^/]+)()()()()()|/api/v1/Note/([^/]+)/reactors/([^/]+)()()()()()|/api/v1/Notification/([^/]+)/group()()()()()()()|/api/v1/User/([^/]+)/stream/own()()()()()()()()|/api/v1/User/([^/]+)/acl()()()()()()()()()|/api/v1/([^/]+)/([^/]+)()()()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route43',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route52',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route55',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route64',
            1 => 
            array (
              'entityType' => 'entityType',
            ),
          ),
          7 => 
          array (
            0 => 'route65',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route71',
            1 => 
            array (
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          9 => 
          array (
            0 => 'route72',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route88',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'route89',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          12 => 
          array (
            0 => 'route102',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'regex' => '~^(?|/api/v1/([^/]+)|/api/v1/([^/]+)/([^/]+)/followers|/api/v1/([^/]+)/([^/]+)/stream()|/api/v1/([^/]+)/([^/]+)/posts()()|/api/v1/([^/]+)/([^/]+)/updateStream()()()|/api/v1/([^/]+)/([^/]+)/streamAttachments()()()()|/api/v1/([^/]+)/([^/]+)/usersAccess()()()()()|/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route103',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          3 => 
          array (
            0 => 'route108',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route111',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route112',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route113',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route116',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route121',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route122',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'POST' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/Campaign/([^/]+)/generateMailMerge|/api/v1/Campaign/unsubscribe/([^/]+)()|/api/v1/Campaign/unsubscribe/([^/]+)/([^/]+)()|/api/v1/LeadCapture/form/([^/]+)()()()|/api/v1/LeadCapture/([^/]+)()()()()|/api/v1/([^/]+)/action/([^/]+)()()()()|/api/v1/Admin/fieldManager/([^/]+)()()()()()()|/api/v1/MassAction/([^/]+)/subscribe()()()()()()()|/api/v1/Export/([^/]+)/subscribe()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route12',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route14',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route16',
            1 => 
            array (
              'emailAddress' => 'emailAddress',
              'hash' => 'hash',
            ),
          ),
          5 => 
          array (
            0 => 'route31',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route32',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
          7 => 
          array (
            0 => 'route34',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          8 => 
          array (
            0 => 'route44',
            1 => 
            array (
              'scope' => 'scope',
            ),
          ),
          9 => 
          array (
            0 => 'route53',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route56',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/api/v1/Import/([^/]+)/revert|/api/v1/Import/([^/]+)/removeDuplicates()|/api/v1/Import/([^/]+)/unmarkDuplicates()()|/api/v1/Import/([^/]+)/exportErrors()()()|/api/v1/Attachment/chunk/([^/]+)()()()()|/api/v1/Attachment/copy/([^/]+)()()()()()|/api/v1/Note/([^/]+)/myReactions/([^/]+)()()()()()|/api/v1/EmailTemplate/([^/]+)/prepare()()()()()()()|/api/v1/Email/([^/]+)/attachments/copy()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route59',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route60',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route61',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route62',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route66',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route68',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route69',
            1 => 
            array (
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          9 => 
          array (
            0 => 'route73',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route74',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'regex' => '~^(?|/api/v1/Email/inbox/folders/([^/]+)|/api/v1/Email/([^/]+)/users()|/api/v1/OAuth/([^/]+)/connection()()|/api/v1/([^/]+)()()()|/api/v1/([^/]+)/([^/]+)/followers()()()|/api/v1/([^/]+)/([^/]+)/pin()()()()|/api/v1/([^/]+)/([^/]+)/([^/]+)()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route83',
            1 => 
            array (
              'folderId' => 'folderId',
            ),
          ),
          3 => 
          array (
            0 => 'route86',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route99',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route104',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          6 => 
          array (
            0 => 'route109',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route117',
            1 => 
            array (
              'Note' => 'Note',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route123',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'DELETE' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/Campaign/unsubscribe/([^/]+)|/api/v1/Campaign/unsubscribe/([^/]+)/([^/]+)|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()|/api/v1/Note/([^/]+)/myReactions/([^/]+)()()|/api/v1/OAuth/([^/]+)/connection()()()()|/api/v1/([^/]+)/([^/]+)()()()()|/api/v1/([^/]+)/([^/]+)/followers()()()()()|/api/v1/([^/]+)/([^/]+)/subscription()()()()()()|/api/v1/([^/]+)/([^/]+)/pin()()()()()()()|/api/v1/([^/]+)/([^/]+)/starSubscription()()()()()()()()|/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route15',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route17',
            1 => 
            array (
              'emailAddress' => 'emailAddress',
              'hash' => 'hash',
            ),
          ),
          4 => 
          array (
            0 => 'route47',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          5 => 
          array (
            0 => 'route70',
            1 => 
            array (
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          6 => 
          array (
            0 => 'route100',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route107',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route110',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route115',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route118',
            1 => 
            array (
              'Note' => 'Note',
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'route120',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          12 => 
          array (
            0 => 'route124',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'OPTIONS' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/LeadCapture/([^/]+))$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route33',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
        ),
      ),
    ),
    'PUT' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/([^/]+)/action/([^/]+)|/api/v1/([^/]+)/layout/([^/]+)()|/api/v1/([^/]+)/layout/([^/]+)/([^/]+)()|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()|/api/v1/Team/([^/]+)/userPosition()()()()()|/api/v1/([^/]+)/([^/]+)()()()()()|/api/v1/([^/]+)/([^/]+)/subscription()()()()()()|/api/v1/([^/]+)/([^/]+)/starSubscription()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route35',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          4 => 
          array (
            0 => 'route38',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          5 => 
          array (
            0 => 'route39',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
              'setId' => 'setId',
            ),
          ),
          6 => 
          array (
            0 => 'route45',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          7 => 
          array (
            0 => 'route96',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route105',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route114',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route119',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'PATCH' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/api/v1/([^/]+)/([^/]+)())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route46',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route106',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
  ),
);