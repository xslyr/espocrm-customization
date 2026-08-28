<?php
return [
  0 => [
    'route' => 'RealEstateMatchingConfiguration',
    'method' => 'put',
    'params' => [
      'controller' => 'RealEstateMatchingConfiguration',
      'action' => 'update'
    ],
    'adjustedRoute' => '/RealEstateMatchingConfiguration'
  ],
  1 => [
    'route' => 'RealEstateProperty/:id/matchingRequests',
    'method' => 'get',
    'actionClassName' => 'Espo\\Modules\\RealEstate\\Tools\\Property\\Api\\GetMatchingRequests',
    'adjustedRoute' => '/RealEstateProperty/{id}/matchingRequests'
  ],
  2 => [
    'route' => 'RealEstateRequest/:id/matchingProperties',
    'method' => 'get',
    'actionClassName' => 'Espo\\Modules\\RealEstate\\Tools\\Request\\Api\\GetMatchingProperties',
    'adjustedRoute' => '/RealEstateRequest/{id}/matchingProperties'
  ],
  3 => [
    'route' => '/Activities/:parentType/:id/composeEmailAddressList',
    'method' => 'get',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\Activities\\Api\\GetComposeAddressList',
    'adjustedRoute' => '/Activities/{parentType}/{id}/composeEmailAddressList'
  ],
  4 => [
    'route' => '/Activities/:parentType/:id/:type',
    'method' => 'get',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\Activities\\Api\\Get',
    'adjustedRoute' => '/Activities/{parentType}/{id}/{type}'
  ],
  5 => [
    'route' => '/Activities/:parentType/:id/:type/list/:targetType',
    'method' => 'get',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\Activities\\Api\\GetListTyped',
    'adjustedRoute' => '/Activities/{parentType}/{id}/{type}/list/{targetType}'
  ],
  6 => [
    'route' => '/Activities/upcoming',
    'method' => 'get',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\Activities\\Api\\GetUpcoming',
    'adjustedRoute' => '/Activities/upcoming'
  ],
  7 => [
    'route' => '/Activities',
    'method' => 'get',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\Calendar\\Api\\GetCalendar',
    'adjustedRoute' => '/Activities'
  ],
  8 => [
    'route' => '/Timeline',
    'method' => 'get',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\Calendar\\Api\\GetTimeline',
    'adjustedRoute' => '/Timeline'
  ],
  9 => [
    'route' => '/Timeline/busyRanges',
    'method' => 'get',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\Calendar\\Api\\GetBusyRanges',
    'adjustedRoute' => '/Timeline/busyRanges'
  ],
  10 => [
    'route' => '/Meeting/:id/attendees',
    'method' => 'get',
    'params' => [
      'controller' => 'Meeting',
      'action' => 'attendees'
    ],
    'adjustedRoute' => '/Meeting/{id}/attendees'
  ],
  11 => [
    'route' => '/Call/:id/attendees',
    'method' => 'get',
    'params' => [
      'controller' => 'Call',
      'action' => 'attendees'
    ],
    'adjustedRoute' => '/Call/{id}/attendees'
  ],
  12 => [
    'route' => '/Campaign/:id/generateMailMerge',
    'method' => 'post',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\Campaign\\Api\\PostGenerateMailMerge',
    'adjustedRoute' => '/Campaign/{id}/generateMailMerge'
  ],
  13 => [
    'route' => '/TargetList/:id/optedOut',
    'method' => 'get',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\TargetList\\Api\\GetOptedOut',
    'adjustedRoute' => '/TargetList/{id}/optedOut'
  ],
  14 => [
    'route' => '/Campaign/unsubscribe/:id',
    'method' => 'post',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\MassEmail\\Api\\PostUnsubscribe',
    'noAuth' => true,
    'adjustedRoute' => '/Campaign/unsubscribe/{id}'
  ],
  15 => [
    'route' => '/Campaign/unsubscribe/:id',
    'method' => 'delete',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\MassEmail\\Api\\DeleteUnsubscribe',
    'noAuth' => true,
    'adjustedRoute' => '/Campaign/unsubscribe/{id}'
  ],
  16 => [
    'route' => '/Campaign/unsubscribe/:emailAddress/:hash',
    'method' => 'post',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\MassEmail\\Api\\PostUnsubscribe',
    'noAuth' => true,
    'adjustedRoute' => '/Campaign/unsubscribe/{emailAddress}/{hash}'
  ],
  17 => [
    'route' => '/Campaign/unsubscribe/:emailAddress/:hash',
    'method' => 'delete',
    'actionClassName' => 'Espo\\Modules\\Crm\\Tools\\MassEmail\\Api\\DeleteUnsubscribe',
    'noAuth' => true,
    'adjustedRoute' => '/Campaign/unsubscribe/{emailAddress}/{hash}'
  ],
  18 => [
    'route' => '/',
    'method' => 'get',
    'params' => [
      'controller' => 'ApiIndex',
      'action' => 'index'
    ],
    'adjustedRoute' => '/'
  ],
  19 => [
    'route' => '/App/user',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\App\\Api\\GetUser',
    'adjustedRoute' => '/App/user'
  ],
  20 => [
    'route' => '/App/destroyAuthToken',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\App\\Api\\PostDestroyAuthToken',
    'adjustedRoute' => '/App/destroyAuthToken'
  ],
  21 => [
    'route' => '/App/about',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\App\\Api\\GetAbout',
    'adjustedRoute' => '/App/about'
  ],
  22 => [
    'route' => '/App/appParams',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\App\\Api\\GetAppParams',
    'adjustedRoute' => '/App/appParams'
  ],
  23 => [
    'route' => '/Metadata',
    'method' => 'get',
    'params' => [
      'controller' => 'Metadata'
    ],
    'adjustedRoute' => '/Metadata'
  ],
  24 => [
    'route' => '/I18n',
    'method' => 'get',
    'params' => [
      'controller' => 'I18n'
    ],
    'noAuth' => true,
    'adjustedRoute' => '/I18n'
  ],
  25 => [
    'route' => '/Settings',
    'method' => 'get',
    'params' => [
      'controller' => 'Settings'
    ],
    'noAuth' => true,
    'adjustedRoute' => '/Settings'
  ],
  26 => [
    'route' => '/Settings',
    'method' => 'patch',
    'params' => [
      'controller' => 'Settings'
    ],
    'adjustedRoute' => '/Settings'
  ],
  27 => [
    'route' => '/Settings',
    'method' => 'put',
    'params' => [
      'controller' => 'Settings'
    ],
    'adjustedRoute' => '/Settings'
  ],
  28 => [
    'route' => '/Stream',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'list',
      'scope' => 'User'
    ],
    'adjustedRoute' => '/Stream'
  ],
  29 => [
    'route' => '/GlobalStream',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Stream\\Api\\GetGlobal',
    'adjustedRoute' => '/GlobalStream'
  ],
  30 => [
    'route' => '/GlobalSearch',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\GlobalSearch\\Api\\Get',
    'adjustedRoute' => '/GlobalSearch'
  ],
  31 => [
    'route' => '/LeadCapture/form/:id',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\LeadCapture\\Api\\PostForm',
    'noAuth' => true,
    'adjustedRoute' => '/LeadCapture/form/{id}'
  ],
  32 => [
    'route' => '/LeadCapture/:apiKey',
    'method' => 'post',
    'params' => [
      'controller' => 'LeadCapture',
      'action' => 'leadCapture',
      'apiKey' => ':apiKey'
    ],
    'noAuth' => true,
    'adjustedRoute' => '/LeadCapture/{apiKey}'
  ],
  33 => [
    'route' => '/LeadCapture/:apiKey',
    'method' => 'options',
    'params' => [
      'controller' => 'LeadCapture',
      'action' => 'leadCapture',
      'apiKey' => ':apiKey'
    ],
    'noAuth' => true,
    'adjustedRoute' => '/LeadCapture/{apiKey}'
  ],
  34 => [
    'route' => '/:controller/action/:action',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ],
    'adjustedRoute' => '/{controller}/action/{action}'
  ],
  35 => [
    'route' => '/:controller/action/:action',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ],
    'adjustedRoute' => '/{controller}/action/{action}'
  ],
  36 => [
    'route' => '/:controller/action/:action',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ],
    'adjustedRoute' => '/{controller}/action/{action}'
  ],
  37 => [
    'route' => '/:controller/layout/:name',
    'method' => 'get',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ],
    'adjustedRoute' => '/{controller}/layout/{name}'
  ],
  38 => [
    'route' => '/:controller/layout/:name',
    'method' => 'put',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ],
    'adjustedRoute' => '/{controller}/layout/{name}'
  ],
  39 => [
    'route' => '/:controller/layout/:name/:setId',
    'method' => 'put',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ],
    'adjustedRoute' => '/{controller}/layout/{name}/{setId}'
  ],
  40 => [
    'route' => '/Admin/rebuild',
    'method' => 'post',
    'params' => [
      'controller' => 'Admin',
      'action' => 'rebuild'
    ],
    'adjustedRoute' => '/Admin/rebuild'
  ],
  41 => [
    'route' => '/Admin/clearCache',
    'method' => 'post',
    'params' => [
      'controller' => 'Admin',
      'action' => 'clearCache'
    ],
    'adjustedRoute' => '/Admin/clearCache'
  ],
  42 => [
    'route' => '/Admin/jobs',
    'method' => 'get',
    'params' => [
      'controller' => 'Admin',
      'action' => 'jobs'
    ],
    'adjustedRoute' => '/Admin/jobs'
  ],
  43 => [
    'route' => '/Admin/fieldManager/:scope/:name',
    'method' => 'get',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'read',
      'scope' => ':scope',
      'name' => ':name'
    ],
    'adjustedRoute' => '/Admin/fieldManager/{scope}/{name}'
  ],
  44 => [
    'route' => '/Admin/fieldManager/:scope',
    'method' => 'post',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'create',
      'scope' => ':scope'
    ],
    'adjustedRoute' => '/Admin/fieldManager/{scope}'
  ],
  45 => [
    'route' => '/Admin/fieldManager/:scope/:name',
    'method' => 'put',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'update',
      'scope' => ':scope',
      'name' => ':name'
    ],
    'adjustedRoute' => '/Admin/fieldManager/{scope}/{name}'
  ],
  46 => [
    'route' => '/Admin/fieldManager/:scope/:name',
    'method' => 'patch',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'update',
      'scope' => ':scope',
      'name' => ':name'
    ],
    'adjustedRoute' => '/Admin/fieldManager/{scope}/{name}'
  ],
  47 => [
    'route' => '/Admin/fieldManager/:scope/:name',
    'method' => 'delete',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'delete',
      'scope' => ':scope',
      'name' => ':name'
    ],
    'adjustedRoute' => '/Admin/fieldManager/{scope}/{name}'
  ],
  48 => [
    'route' => '/CurrencyRate',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Currency\\Api\\Get',
    'adjustedRoute' => '/CurrencyRate'
  ],
  49 => [
    'route' => '/CurrencyRate',
    'method' => 'put',
    'actionClassName' => 'Espo\\Tools\\Currency\\Api\\PutUpdate',
    'adjustedRoute' => '/CurrencyRate'
  ],
  50 => [
    'route' => '/Action',
    'method' => 'post',
    'actionClassName' => 'Espo\\Core\\Action\\Api\\PostProcess',
    'adjustedRoute' => '/Action'
  ],
  51 => [
    'route' => '/MassAction',
    'method' => 'post',
    'actionClassName' => 'Espo\\Core\\MassAction\\Api\\PostProcess',
    'adjustedRoute' => '/MassAction'
  ],
  52 => [
    'route' => '/MassAction/:id/status',
    'method' => 'get',
    'actionClassName' => 'Espo\\Core\\MassAction\\Api\\GetStatus',
    'adjustedRoute' => '/MassAction/{id}/status'
  ],
  53 => [
    'route' => '/MassAction/:id/subscribe',
    'method' => 'post',
    'actionClassName' => 'Espo\\Core\\MassAction\\Api\\PostSubscribe',
    'adjustedRoute' => '/MassAction/{id}/subscribe'
  ],
  54 => [
    'route' => '/Export',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Export\\Api\\PostProcess',
    'adjustedRoute' => '/Export'
  ],
  55 => [
    'route' => '/Export/:id/status',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Export\\Api\\GetStatus',
    'adjustedRoute' => '/Export/{id}/status'
  ],
  56 => [
    'route' => '/Export/:id/subscribe',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Export\\Api\\PostSubscribe',
    'adjustedRoute' => '/Export/{id}/subscribe'
  ],
  57 => [
    'route' => '/Import',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Import\\Api\\Post',
    'adjustedRoute' => '/Import'
  ],
  58 => [
    'route' => '/Import/file',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Import\\Api\\PostFile',
    'adjustedRoute' => '/Import/file'
  ],
  59 => [
    'route' => '/Import/:id/revert',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Import\\Api\\PostRevert',
    'adjustedRoute' => '/Import/{id}/revert'
  ],
  60 => [
    'route' => '/Import/:id/removeDuplicates',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Import\\Api\\PostRemoveDuplicates',
    'adjustedRoute' => '/Import/{id}/removeDuplicates'
  ],
  61 => [
    'route' => '/Import/:id/unmarkDuplicates',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Import\\Api\\PostUnmarkDuplicates',
    'adjustedRoute' => '/Import/{id}/unmarkDuplicates'
  ],
  62 => [
    'route' => '/Import/:id/exportErrors',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Import\\Api\\PostExportErrors',
    'adjustedRoute' => '/Import/{id}/exportErrors'
  ],
  63 => [
    'route' => '/Kanban/order',
    'method' => 'put',
    'actionClassName' => 'Espo\\Tools\\Kanban\\Api\\PutOrder',
    'adjustedRoute' => '/Kanban/order'
  ],
  64 => [
    'route' => '/Kanban/:entityType',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Kanban\\Api\\GetData',
    'adjustedRoute' => '/Kanban/{entityType}'
  ],
  65 => [
    'route' => '/Attachment/file/:id',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Attachment\\Api\\GetFile',
    'adjustedRoute' => '/Attachment/file/{id}'
  ],
  66 => [
    'route' => '/Attachment/chunk/:id',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Attachment\\Api\\PostChunk',
    'adjustedRoute' => '/Attachment/chunk/{id}'
  ],
  67 => [
    'route' => '/Attachment/fromImageUrl',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Attachment\\Api\\PostFromImageUrl',
    'adjustedRoute' => '/Attachment/fromImageUrl'
  ],
  68 => [
    'route' => '/Attachment/copy/:id',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Attachment\\Api\\PostCopy',
    'adjustedRoute' => '/Attachment/copy/{id}'
  ],
  69 => [
    'route' => '/Note/:id/myReactions/:type',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Stream\\Api\\PostMyReactions',
    'adjustedRoute' => '/Note/{id}/myReactions/{type}'
  ],
  70 => [
    'route' => '/Note/:id/myReactions/:type',
    'method' => 'delete',
    'actionClassName' => 'Espo\\Tools\\Stream\\Api\\DeleteMyReactions',
    'adjustedRoute' => '/Note/{id}/myReactions/{type}'
  ],
  71 => [
    'route' => '/Note/:id/reactors/:type',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Stream\\Api\\GetNoteReactors',
    'adjustedRoute' => '/Note/{id}/reactors/{type}'
  ],
  72 => [
    'route' => '/Notification/:id/group',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Notification\\Api\\GetGroup',
    'adjustedRoute' => '/Notification/{id}/group'
  ],
  73 => [
    'route' => '/EmailTemplate/:id/prepare',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\EmailTemplate\\Api\\PostPrepare',
    'adjustedRoute' => '/EmailTemplate/{id}/prepare'
  ],
  74 => [
    'route' => '/Email/:id/attachments/copy',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\PostAttachmentsCopy',
    'adjustedRoute' => '/Email/{id}/attachments/copy'
  ],
  75 => [
    'route' => '/Email/importEml',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\PostImportEml',
    'adjustedRoute' => '/Email/importEml'
  ],
  76 => [
    'route' => '/Email/sendTest',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\PostSendTest',
    'adjustedRoute' => '/Email/sendTest'
  ],
  77 => [
    'route' => '/Email/inbox/read',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\PostInboxRead',
    'adjustedRoute' => '/Email/inbox/read'
  ],
  78 => [
    'route' => '/Email/inbox/read',
    'method' => 'delete',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\DeleteInboxRead',
    'adjustedRoute' => '/Email/inbox/read'
  ],
  79 => [
    'route' => '/Email/inbox/important',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\PostInboxImportant',
    'adjustedRoute' => '/Email/inbox/important'
  ],
  80 => [
    'route' => '/Email/inbox/important',
    'method' => 'delete',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\DeleteInboxImportant',
    'adjustedRoute' => '/Email/inbox/important'
  ],
  81 => [
    'route' => '/Email/inbox/inTrash',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\PostInboxInTrash',
    'adjustedRoute' => '/Email/inbox/inTrash'
  ],
  82 => [
    'route' => '/Email/inbox/inTrash',
    'method' => 'delete',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\DeleteInboxInTrash',
    'adjustedRoute' => '/Email/inbox/inTrash'
  ],
  83 => [
    'route' => '/Email/inbox/folders/:folderId',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\PostFolder',
    'adjustedRoute' => '/Email/inbox/folders/{folderId}'
  ],
  84 => [
    'route' => '/Email/inbox/notReadCounts',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\GetNotReadCounts',
    'adjustedRoute' => '/Email/inbox/notReadCounts'
  ],
  85 => [
    'route' => '/Email/insertFieldData',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\GetInsertFieldData',
    'adjustedRoute' => '/Email/insertFieldData'
  ],
  86 => [
    'route' => '/Email/:id/users',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Email\\Api\\PostUsers',
    'adjustedRoute' => '/Email/{id}/users'
  ],
  87 => [
    'route' => '/EmailAddress/search',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\EmailAddress\\Api\\GetSearch',
    'adjustedRoute' => '/EmailAddress/search'
  ],
  88 => [
    'route' => '/User/:id/stream/own',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Stream\\Api\\GetOwn',
    'adjustedRoute' => '/User/{id}/stream/own'
  ],
  89 => [
    'route' => '/User/:id/acl',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\UserSecurity\\Api\\GetUserAcl',
    'adjustedRoute' => '/User/{id}/acl'
  ],
  90 => [
    'route' => '/UserSecurity/apiKey/generate',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\UserSecurity\\Api\\PostApiKeyGenerate',
    'adjustedRoute' => '/UserSecurity/apiKey/generate'
  ],
  91 => [
    'route' => '/UserSecurity/password',
    'method' => 'put',
    'actionClassName' => 'Espo\\Tools\\UserSecurity\\Api\\PutPassword',
    'adjustedRoute' => '/UserSecurity/password'
  ],
  92 => [
    'route' => '/UserSecurity/password/recovery',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\UserSecurity\\Api\\PostPasswordRecovery',
    'adjustedRoute' => '/UserSecurity/password/recovery'
  ],
  93 => [
    'route' => '/UserSecurity/password/generate',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\UserSecurity\\Api\\PostPasswordGenerate',
    'adjustedRoute' => '/UserSecurity/password/generate'
  ],
  94 => [
    'route' => '/User/passwordChangeRequest',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\UserSecurity\\Api\\PostPasswordChangeRequest',
    'noAuth' => true,
    'adjustedRoute' => '/User/passwordChangeRequest'
  ],
  95 => [
    'route' => '/User/changePasswordByRequest',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\UserSecurity\\Api\\PostChangePasswordByRequest',
    'noAuth' => true,
    'adjustedRoute' => '/User/changePasswordByRequest'
  ],
  96 => [
    'route' => '/Team/:id/userPosition',
    'method' => 'put',
    'actionClassName' => 'Espo\\Tools\\User\\Api\\PutTeamUserPosition',
    'adjustedRoute' => '/Team/{id}/userPosition'
  ],
  97 => [
    'route' => '/Oidc/authorizationData',
    'method' => 'get',
    'params' => [
      'controller' => 'Oidc',
      'action' => 'authorizationData'
    ],
    'noAuth' => true,
    'adjustedRoute' => '/Oidc/authorizationData'
  ],
  98 => [
    'route' => '/Oidc/backchannelLogout',
    'method' => 'post',
    'params' => [
      'controller' => 'Oidc',
      'action' => 'backchannelLogout'
    ],
    'noAuth' => true,
    'adjustedRoute' => '/Oidc/backchannelLogout'
  ],
  99 => [
    'method' => 'post',
    'route' => '/OAuth/:id/connection',
    'actionClassName' => 'Espo\\Tools\\OAuth\\Api\\PostConnection',
    'adjustedRoute' => '/OAuth/{id}/connection'
  ],
  100 => [
    'method' => 'delete',
    'route' => '/OAuth/:id/connection',
    'actionClassName' => 'Espo\\Tools\\OAuth\\Api\\DeleteConnection',
    'adjustedRoute' => '/OAuth/{id}/connection'
  ],
  101 => [
    'method' => 'get',
    'route' => '/OpenApi',
    'actionClassName' => 'Espo\\Tools\\OpenApi\\Api\\GetSpec',
    'adjustedRoute' => '/OpenApi'
  ],
  102 => [
    'route' => '/:controller/:id',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'read',
      'id' => ':id'
    ],
    'adjustedRoute' => '/{controller}/{id}'
  ],
  103 => [
    'route' => '/:controller',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'index'
    ],
    'adjustedRoute' => '/{controller}'
  ],
  104 => [
    'route' => '/:controller',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => 'create'
    ],
    'adjustedRoute' => '/{controller}'
  ],
  105 => [
    'route' => '/:controller/:id',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'action' => 'update',
      'id' => ':id'
    ],
    'adjustedRoute' => '/{controller}/{id}'
  ],
  106 => [
    'route' => '/:controller/:id',
    'method' => 'patch',
    'params' => [
      'controller' => ':controller',
      'action' => 'update',
      'id' => ':id'
    ],
    'adjustedRoute' => '/{controller}/{id}'
  ],
  107 => [
    'route' => '/:controller/:id',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'action' => 'delete',
      'id' => ':id'
    ],
    'adjustedRoute' => '/{controller}/{id}'
  ],
  108 => [
    'route' => '/:entityType/:id/followers',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Stream\\Api\\GetFollowers',
    'adjustedRoute' => '/{entityType}/{id}/followers'
  ],
  109 => [
    'route' => '/:entityType/:id/followers',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Stream\\Api\\PostFollowers',
    'adjustedRoute' => '/{entityType}/{id}/followers'
  ],
  110 => [
    'route' => '/:entityType/:id/followers',
    'method' => 'delete',
    'actionClassName' => 'Espo\\Tools\\Stream\\Api\\DeleteFollowers',
    'adjustedRoute' => '/{entityType}/{id}/followers'
  ],
  111 => [
    'route' => '/:controller/:id/stream',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'list',
      'id' => ':id',
      'scope' => ':controller'
    ],
    'adjustedRoute' => '/{controller}/{id}/stream'
  ],
  112 => [
    'route' => '/:controller/:id/posts',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'listPosts',
      'id' => ':id',
      'scope' => ':controller'
    ],
    'adjustedRoute' => '/{controller}/{id}/posts'
  ],
  113 => [
    'route' => '/:controller/:id/updateStream',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'listUpdates',
      'id' => ':id',
      'scope' => ':controller'
    ],
    'adjustedRoute' => '/{controller}/{id}/updateStream'
  ],
  114 => [
    'route' => '/:controller/:id/subscription',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'id' => ':id',
      'action' => 'follow'
    ],
    'adjustedRoute' => '/{controller}/{id}/subscription'
  ],
  115 => [
    'route' => '/:controller/:id/subscription',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'id' => ':id',
      'action' => 'unfollow'
    ],
    'adjustedRoute' => '/{controller}/{id}/subscription'
  ],
  116 => [
    'route' => '/:entityType/:id/streamAttachments',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\Stream\\Api\\GetStreamAttachments',
    'adjustedRoute' => '/{entityType}/{id}/streamAttachments'
  ],
  117 => [
    'route' => '/:Note/:id/pin',
    'method' => 'post',
    'actionClassName' => 'Espo\\Tools\\Stream\\Api\\PostNotePin',
    'adjustedRoute' => '/{Note}/{id}/pin'
  ],
  118 => [
    'route' => '/:Note/:id/pin',
    'method' => 'delete',
    'actionClassName' => 'Espo\\Tools\\Stream\\Api\\DeleteNotePin',
    'adjustedRoute' => '/{Note}/{id}/pin'
  ],
  119 => [
    'route' => '/:entityType/:id/starSubscription',
    'method' => 'put',
    'actionClassName' => 'Espo\\Tools\\Stars\\Api\\PutStar',
    'adjustedRoute' => '/{entityType}/{id}/starSubscription'
  ],
  120 => [
    'route' => '/:entityType/:id/starSubscription',
    'method' => 'delete',
    'actionClassName' => 'Espo\\Tools\\Stars\\Api\\DeleteUnstar',
    'adjustedRoute' => '/{entityType}/{id}/starSubscription'
  ],
  121 => [
    'route' => '/:entityType/:id/usersAccess',
    'method' => 'get',
    'actionClassName' => 'Espo\\Tools\\User\\Api\\PostRecordUsersAccess',
    'adjustedRoute' => '/{entityType}/{id}/usersAccess'
  ],
  122 => [
    'route' => '/:controller/:id/:link',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'listLinked',
      'id' => ':id',
      'link' => ':link'
    ],
    'adjustedRoute' => '/{controller}/{id}/{link}'
  ],
  123 => [
    'route' => '/:controller/:id/:link',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => 'createLink',
      'id' => ':id',
      'link' => ':link'
    ],
    'adjustedRoute' => '/{controller}/{id}/{link}'
  ],
  124 => [
    'route' => '/:controller/:id/:link',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'action' => 'removeLink',
      'id' => ':id',
      'link' => ':link'
    ],
    'adjustedRoute' => '/{controller}/{id}/{link}'
  ]
];
