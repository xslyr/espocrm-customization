<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'user' => 'Usuário',
      'action' => 'Ação',
      'createdAt' => 'Data',
      'userType' => 'Tipo de Usuário',
      'target' => 'Alvo',
      'targetType' => 'Tipo de Alvo',
      'authToken' => 'Token de Autenticação',
      'ipAddress' => 'Endereço IP',
      'authLogRecord' => 'Registro de Log de Autorização'
    ],
    'links' => [
      'authToken' => 'Token de Autenticação',
      'authLogRecord' => 'Registro de Log de Autorização',
      'user' => 'Usuário',
      'target' => 'Alvo'
    ],
    'presetFilters' => [
      'onlyMy' => 'Apenas Meu'
    ],
    'options' => [
      'action' => [
        'read' => 'Ler',
        'update' => 'Atualizar',
        'delete' => 'Excluir',
        'create' => 'Criar'
      ]
    ]
  ],
  'AddressCountry' => [
    'labels' => [
      'Create AddressCountry' => 'Create Address Country',
      'Populate' => 'Populate'
    ],
    'fields' => [
      'code' => 'Code',
      'isPreferred' => 'Is Preferred'
    ],
    'tooltips' => [
      'code' => 'ISO 3166-1 alpha-2 code.',
      'isPreferred' => 'Preferred countries appear first in the picklist.'
    ],
    'messages' => [
      'confirmPopulateDefaults' => 'All existing countries will be deleted, the default country list will be created. It won\'t be possible to revert the operation.

Are you sure?'
    ],
    'strings' => [
      'populateDefaults' => 'Populate with default country list'
    ]
  ],
  'Admin' => [
    'labels' => [
      'Enabled' => 'Habilitado',
      'Disabled' => 'Desabilitado',
      'System' => 'Sistema',
      'Users' => 'Usuários',
      'Email' => 'E-mail',
      'Messaging' => 'Mensagem',
      'Data' => 'Data',
      'Misc' => 'Misc',
      'Setup' => 'Setup',
      'Customization' => 'Personalização',
      'Available Fields' => 'Campos Disponíveis',
      'Layout' => 'Layout',
      'Entity Manager' => 'Gerenciador de Entidades',
      'Add Panel' => 'Adicionar Painel',
      'Add Field' => 'Adicionar Campo',
      'Settings' => 'Preferências',
      'Scheduled Jobs' => 'Tarefas agendadas',
      'Upgrade' => 'Atualização',
      'Clear Cache' => 'Limpar Cache',
      'Rebuild' => 'Reconstruir',
      'Teams' => 'Times',
      'Roles' => 'Regras',
      'Portal' => 'Portal',
      'Portals' => 'Portais',
      'Portal Roles' => 'Regras de Portal',
      'Portal Users' => 'Usuários do Portal',
      'API Users' => 'Usuários da API',
      'Outbound Emails' => 'E-mails de Saída',
      'Group Email Accounts' => 'Contas de Email de Grupo',
      'Personal Email Accounts' => 'Contas de Emails Pessoais',
      'Inbound Emails' => 'E-mails de Entrada',
      'Email Templates' => 'Templates dos E-mails',
      'Import' => 'Importar',
      'Layout Manager' => 'Gerenciar Layout',
      'User Interface' => 'Interface do Usuário',
      'Auth Tokens' => 'Tokens de Autenticação',
      'Auth Log' => 'Log de Autorização',
      'App Log' => 'App Log',
      'App Secrets' => 'App Secrets',
      'Authentication' => 'Autenticação',
      'Currency' => 'Moeda',
      'Integrations' => 'Integrações',
      'Extensions' => 'Extensões',
      'Webhooks' => 'Webhooks',
      'Dashboard Templates' => 'Modelos de Dashboard',
      'Upload' => 'Upload',
      'Installing...' => 'Instalando...',
      'Upgrading...' => 'Atualizando...',
      'Upgraded successfully' => 'Atualizado com sucesso',
      'Installed successfully' => 'Instalado com sucesso',
      'Ready for upgrade' => 'Pronto para a atualização',
      'Run Upgrade' => 'Rodar atualização',
      'Install' => 'Instalar',
      'Ready for installation' => 'Pronto para a instalação',
      'Uninstalling...' => 'Desinstalando...',
      'Uninstalled' => 'Desinstalado',
      'Create Entity' => 'Criar Entidade',
      'Edit Entity' => 'Editar Entidade',
      'Create Link' => 'Criar Link',
      'Edit Link' => 'Editar Link',
      'Notifications' => 'Notificações',
      'Jobs' => 'Tarefas',
      'Job Settings' => 'Config. de Trabalho',
      'Reset to Default' => 'Redefinir para Padrão',
      'Email Filters' => 'Filtros de Email',
      'Action History' => 'Histórico de Ações',
      'Label Manager' => 'Gerenciador de Rótulos',
      'Template Manager' => 'Gerenciador de Modelos',
      'Lead Capture' => 'Captura de Lead',
      'Attachments' => 'Anexos',
      'System Requirements' => 'Requisitos de sistema',
      'PDF Templates' => 'Modelos PDF',
      'PHP Settings' => 'Configurações do PHP',
      'Database Settings' => 'Configurações do banco de dados',
      'Permissions' => 'Permissões',
      'Email Addresses' => 'Endereço de Email',
      'Phone Numbers' => 'Números de Telefone',
      'Layout Sets' => 'Conjunto de Layouts',
      'Working Time Calendars' => 'Working Time Calendars',
      'Group Email Folders' => 'Group Email Folders',
      'Authentication Providers' => 'Authentication Providers',
      'Address Countries' => 'Address Countries',
      'OAuth Providers' => 'OAuth Providers',
      'Success' => 'Sucesso',
      'Fail' => 'Falha',
      'Configuration Instructions' => 'Instruções de Configuração',
      'Formula Sandbox' => 'Sandbox de Fórmula',
      'is recommended' => 'é recomendado',
      'extension is missing' => 'faltando extensão',
      'Real Estate' => 'Real Estate',
      'Locations' => 'Locations',
      'Property Matching' => 'Property Matching'
    ],
    'layouts' => [
      'list' => 'Lista',
      'detail' => 'Detalhe',
      'listSmall' => 'Lista (Pequeno)',
      'detailSmall' => 'Detalhe (Pequeno)',
      'detailPortal' => 'Detalhe (Portal)',
      'detailSmallPortal' => 'Detalhe (Pequeno, Portal)',
      'listSmallPortal' => 'Lista (Pequena, Portal)',
      'listPortal' => 'Lista (Portal)',
      'relationshipsPortal' => 'Painéis de Relacionamento (Portal)',
      'filters' => 'Filtros de Busca',
      'massUpdate' => 'Atualização em massa',
      'relationships' => 'Relacionamentos',
      'defaultSidePanel' => 'Painéis Laterais (Campos)',
      'bottomPanelsDetail' => 'Painéis Inferiores',
      'bottomPanelsEdit' => 'Painéis Inferiores (Editar)',
      'bottomPanelsDetailSmall' => 'Painéis Inferiores (Detalhe Pequeno)',
      'bottomPanelsEditSmall' => 'Painéis Inferiores (Editar Pequeno)',
      'sidePanelsDetail' => 'Painéis Laterais (Pequeno)',
      'sidePanelsEdit' => 'Painéis Laterais (Editar)',
      'sidePanelsDetailSmall' => 'Painéis Laterais (Detalhe Pequeno)',
      'sidePanelsEditSmall' => 'Painéis Laterais (Editar Pequeno)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Converter Lead',
      'listForAccount' => 'Lista (para Contas)',
      'listForContact' => 'Lista (para Contato)',
      'listForProperty' => 'List (for Property)',
      'listForRequest' => 'List (for Request)'
    ],
    'fieldTypes' => [
      'base' => 'Base',
      'address' => 'Endereço',
      'array' => 'Matriz',
      'foreign' => 'Relacionamento',
      'duration' => 'Duração',
      'password' => 'Senha',
      'personName' => 'Nome da Pessoa',
      'autoincrement' => 'Auto-incremento',
      'bool' => 'Booleano',
      'decimal' => 'Decimal',
      'currency' => 'Moeda',
      'currencyConverted' => 'Moeda (Convertida)',
      'date' => 'Data',
      'datetime' => 'Data e Hora',
      'datetimeOptional' => 'Data/Data e Hora',
      'email' => 'E-mail',
      'enum' => 'Lista',
      'enumInt' => 'Lista (Número)',
      'enumFloat' => 'Lista (Float)',
      'float' => 'Float',
      'int' => 'Número',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiplo',
      'linkParent' => 'Link Pai',
      'linkOne' => 'Link One',
      'phone' => 'Telefone',
      'text' => 'Texto',
      'url' => 'Url',
      'urlMultiple' => 'Url Multiple',
      'varchar' => 'Varchar',
      'file' => 'Arquivo',
      'image' => 'Imagem',
      'multiEnum' => 'Lista múltipla',
      'attachmentMultiple' => 'Múltiplos Anexos',
      'rangeInt' => 'Variação de Integer',
      'rangeFloat' => 'Variação de Float',
      'rangeCurrency' => 'Variação de Moeda',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Mapa',
      'number' => 'Número (incremento automático)',
      'colorpicker' => 'Selecionador de Cor',
      'checklist' => 'Checklist',
      'barcode' => 'Código de Barras',
      'jsonArray' => 'Matriz Json',
      'jsonObject' => 'Objeto Json'
    ],
    'fields' => [
      'type' => 'Tipo',
      'name' => 'Nome',
      'label' => 'Rótulo',
      'tooltipText' => 'Texto Tooltip',
      'required' => 'Obrigatório',
      'default' => 'Padrão',
      'maxLength' => 'Tamanho máximo',
      'options' => 'Opções (valores raw, não traduzíveis)',
      'optionsReference' => 'Options Reference',
      'after' => 'Antes (field)',
      'before' => 'Após (field)',
      'link' => 'Link',
      'field' => 'Campo',
      'min' => 'Mín',
      'max' => 'Máx',
      'translation' => 'Tradução',
      'previewSize' => 'Tamanho do Preview',
      'listPreviewSize' => 'Tam. da Pré-visualização na Lista de Visualização',
      'noEmptyString' => 'Nenhuma seqüência de caracteres vazia',
      'defaultType' => 'Tipo Padrão',
      'seeMoreDisabled' => 'Desativar corte de texto.',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => 'Lista de Entidades',
      'isSorted' => 'Ordenado (alfabeticamente)',
      'audited' => 'Auditado',
      'trim' => 'Aparar',
      'height' => 'Altura (px)',
      'minHeight' => 'Altura Mín (px)',
      'provider' => 'Provedor',
      'typeList' => 'Lista de Tipo',
      'rows' => 'Número de linhas da áreadetexto',
      'lengthOfCut' => 'Extensão do corte',
      'sourceList' => 'Lista fonte',
      'prefix' => 'Prefixo',
      'nextNumber' => 'Próximo Número',
      'padLength' => 'Pad Length',
      'disableFormatting' => 'Desativar formatação',
      'dynamicLogicVisible' => 'Condições que tornam o campo visível',
      'dynamicLogicReadOnly' => 'Condições que tornam o campo somente leitura',
      'dynamicLogicRequired' => 'Condições que tornam o campo obrigatório',
      'dynamicLogicOptions' => 'Opções condicionais',
      'dynamicLogicInvalid' => 'Condições que tornam o campo inválido',
      'dynamicLogicReadOnlySaved' => 'Saved state conditions making field read-only',
      'probabilityMap' => 'Probabilidades do Estágio (%)',
      'notActualOptions' => 'Not Actual Options',
      'activeOptions' => 'Active Options',
      'readOnly' => 'Somente de Leitura',
      'readOnlyAfterCreate' => 'Read-only After Create',
      'preview' => 'Preview',
      'attachmentField' => 'Attachment Field',
      'maxFileSize' => 'Tam. máximo do arquivo (Mb)',
      'isPersonalData' => 'É Dado Pessoal',
      'useIframe' => 'Usar Iframe',
      'useNumericFormat' => 'Usar formato numérico',
      'strip' => 'Strip',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Desativar Edição em linha',
      'allowCustomOptions' => 'Permitir opções Personalizadas',
      'displayAsLabel' => 'Mostrar como Rótulo',
      'displayAsList' => 'Mostrar como Lista',
      'labelType' => 'Label Type',
      'maxCount' => 'Contagem máxima de itens',
      'accept' => 'Aceitar',
      'viewMap' => 'View Map Button',
      'codeType' => 'Tipo de Código',
      'lastChar' => 'Último Caractere',
      'onlyDefaultCurrency' => 'Apenas moeda padrão',
      'decimal' => 'Decimal',
      'displayRawText' => 'Exibir texto puro (sem markdown)',
      'conversionDisabled' => 'Desativar Conversão',
      'decimalPlaces' => 'Casas Decimais',
      'pattern' => 'Pattern',
      'globalRestrictions' => 'Global Restrictions',
      'copyToClipboard' => 'Copy to clipboard button',
      'createButton' => 'Create Button',
      'autocompleteOnEmpty' => 'Autocomplete on empty input',
      'relateOnImport' => 'Relate on Import',
      'aclScope' => 'ACL Scope',
      'onlyAdmin' => 'Only for Admin',
      'notStorable' => 'Not Storable',
      'itemsEditable' => 'Items Editable'
    ],
    'strings' => [
      'rebuildRequired' => 'Reconstrução é necessária'
    ],
    'messages' => [
      'cacheIsDisabled' => 'Cache is disabled, the application will run slow. Enable cache in the [settings](#Admin/settings).',
      'formulaFunctions' => 'Mais funções podem ser encontradas em [documentação]({documentationUrl}).',
      'rebuildRequired' => 'Você precisa executar a reconstrução da CLI.',
      'upgradeVersion' => 'EspoCRM será atualizado para a versão **{version}**. Seja paciente, pois isso pode demorar um pouco.',
      'upgradeDone' => 'EspoCRM foi atualizado para a versão **{version}**.',
      'upgradeBackup' => 'Nós recomendamos que você faça um backup dos arquivos e dados do EspoCRM antes de atualizar.',
      'thousandSeparatorEqualsDecimalMark' => 'O separador de milhar não pode ser o mesmo do separador decimal',
      'userHasNoEmailAddress' => 'Usuário não possui endereço de e-mail.',
      'selectEntityType' => 'Escolha o tipo de entidade no menu a esquerda.',
      'selectUpgradePackage' => 'Selecione o pacote de atualização',
      'downloadUpgradePackage' => 'Baixe o(s) pacote(s) de atualização [aqui]({url}).',
      'selectLayout' => 'Selecione o layout necessário no meu a esquerda e edite ele.',
      'selectExtensionPackage' => 'Selecione o pacote de extensão',
      'extensionInstalled' => 'A extensão {name} {version} foi instalada.',
      'installExtension' => 'A extensão {name} {version} está pronta para instalação.',
      'cronIsDisabled' => 'Cron is disabled, the application is not fully functional. Enable cron in the [settings](#Admin/settings).',
      'cronIsNotConfigured' => 'Os trabalhos agendados não estão em execução. Portanto, e-mails de entrada, notificações e lembretes não estão funcionando. Siga as [instruções](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) para configurar o cron job.',
      'newVersionIsAvailable' => 'A nova versão do EspoCRM {latestVersion} está disponível. Siga as [instruções](https://www.espocrm.com/documentation/administration/upgrading/) para atualizar sua instância.',
      'newExtensionVersionIsAvailable' => 'A nova versão de {extensionName} {latestVersion} está disponível.',
      'uninstallConfirmation' => 'Tem certeza de que deseja desinstalar a extensão?',
      'upgradeInfo' => 'Verifique a [documentação]({url}) sobre como atualizar sua instância EspoCRM.',
      'upgradeRecommendation' => 'Esta forma de atualização não é recomendada. É melhor atualizar do CLI.'
    ],
    'descriptions' => [
      'settings' => 'Configurações gerais do aplicativo.',
      'scheduledJob' => 'Tarefas agendadas que serão executadas pelo cron.',
      'jobs' => 'Trabalhos executam tarefas em segundo plano.',
      'upgrade' => 'Atualizar o EspoCRM.',
      'clearCache' => 'Limpar todo o cache do backend.',
      'rebuild' => 'Reconstruir o backend e limpar o cache.',
      'users' => 'Manutenção de usuários.',
      'teams' => 'Manutenção de Times.',
      'roles' => 'Manutenção de Regras.',
      'portals' => 'Gerenciar Portais.',
      'portalRoles' => 'Regras para portal.',
      'portalUsers' => 'Usuários do portal.',
      'outboundEmails' => 'Configuração SMTP para envio de e-mails.',
      'groupEmailAccounts' => 'Agrupe contas de email IMAP. Importação de email e Email-to-Case.',
      'personalEmailAccounts' => 'Contas de email de usuários.',
      'emailTemplates' => 'Templates para envio de e-mails.',
      'import' => 'Importar dados de arquivo CSV.',
      'layoutManager' => 'Personalizar layouts (listas, detalhes, edição, busca, atualização em massa).',
      'entityManager' => 'Crie e edite entidades personalizadas. Gerencie campos e relacionamentos.',
      'userInterface' => 'Configurar a interface gráfica.',
      'authTokens' => 'Sessões autenticadas ativas. Endereço de IP e última data de acesso.',
      'authentication' => 'Configurações de autenticação.',
      'currency' => 'Configurações de moeda e taxas.',
      'extensions' => 'Instalar ou desinstalar extensões.',
      'integrations' => 'Integração com serviços de terceiros.',
      'notifications' => 'Configurações de notificações "in-app" e e-mail.',
      'inboundEmails' => 'Grupo de contas de e-mail IMAP. Importação de e-mail Email-to-Case.',
      'emailFilters' => 'As mensagens de email que correspondem ao filtro especificado não serão importadas.',
      'groupEmailFolders' => 'Email folders shared for teams.',
      'actionHistory' => 'Log de ações do usuário.',
      'labelManager' => 'Personalizar os rótulos da aplicação.',
      'templateManager' => 'Personalizar os modelos de mensagens.',
      'authLog' => 'Histórico de Login.',
      'appLog' => 'Application log.',
      'appSecrets' => 'Store sensitive information like API keys, passwords, and other secrets.',
      'leadCapture' => 'Pontos de entrada da API para Web-to-Lead.',
      'attachments' => 'Todos os anexos de arquivo armazenados no sistema.',
      'systemRequirements' => 'Requisitos de sistema para EspoCRM',
      'apiUsers' => 'Separe os usuários para fins de integração.',
      'webhooks' => 'Gerenciar webhooks.',
      'authenticationProviders' => 'Additional authentication providers for portals.',
      'emailAddresses' => 'Todos os endereços de email armazenados no sistema.',
      'phoneNumbers' => 'Todos os números de telefone armazenados no sistema.',
      'dashboardTemplates' => 'Implante painéis para usuários.',
      'layoutSets' => 'Coleções de layouts que podem ser atribuídos a times e portais.',
      'workingTimeCalendars' => 'Working schedule.',
      'jobsSettings' => 'Configurações de processamento de trabalho. Os trabalhos executam tarefas em segundo plano.',
      'sms' => 'Configurações de SMS.',
      'pdfTemplates' => 'Modelos para impressão em PDF.',
      'formulaSandbox' => 'Escreva e teste scripts de fórmula.',
      'addressCountries' => 'Countries available for address fields.',
      'oAuthProviders' => 'OAuth providers for integrations.',
      'realEstateSettings' => 'Parameters for Real Estate extension.',
      'realEstateLocations' => 'Manage Locations for Real Estate.',
      'propertyMatching' => 'Matching configuration.'
    ],
    'keywords' => [
      'settings' => 'sistema',
      'userInterface' => 'ui,tema,guias,logotipo,painel',
      'authentication' => 'senha,segurança,ldap',
      'scheduledJob' => 'cron,tarefas (jobs)',
      'integrations' => 'google,mapas,google maps',
      'authLog' => 'log,histórico',
      'authTokens' => 'histórico,acesso,log',
      'entityManager' => 'campos,relações,relacionamentos',
      'templateManager' => 'notificações',
      'jobs' => 'cron',
      'labelManager' => 'language,translation',
      'appSecrets' => 'key,keys,password',
      'leadCapture' => 'web forms'
    ],
    'options' => [
      'previewSize' => [
        '' => 'Padrão',
        'x-small' => 'Mínimo',
        'small' => 'Pequeno',
        'medium' => 'Médio',
        'large' => 'Grande'
      ],
      'labelType' => [
        'state' => 'State',
        'regular' => 'Regular'
      ]
    ],
    'logicalOperators' => [
      'and' => 'E',
      'or' => 'OU',
      'not' => 'NÃO'
    ],
    'systemRequirements' => [
      'requiredPhpVersion' => 'Versão do PHP',
      'requiredMysqlVersion' => 'Versão do MySQL',
      'requiredMariadbVersion' => 'Versão MariaDB',
      'requiredPostgresqlVersion' => 'PostgreSQL version',
      'host' => 'Nome de anfitrião',
      'dbname' => 'Nome do banco de dados',
      'user' => 'Nome de Usuário',
      'writable' => 'Permite Gravação',
      'readable' => 'Permite Leitura'
    ],
    'templates' => [
      'twoFactorCode' => 'Código 2FA',
      'accessInfo' => 'Informações de acesso',
      'accessInfoPortal' => 'Informações de Acesso para Portais',
      'assignment' => 'Assignment',
      'mention' => 'Menção',
      'noteEmailReceived' => 'Nota sobre Email Recebido',
      'notePost' => 'Nota sobre a Postagem',
      'notePostNoParent' => 'Nota sobre a Postagem (sem Pai)',
      'noteStatus' => 'Nota sobre a Atualização de Status',
      'passwordChangeLink' => 'Link para alteração de senha',
      'invitation' => 'Convite',
      'cancellation' => 'Cancellation',
      'reminder' => 'Lembrete'
    ],
    'tooltips' => [
      'tabUrl' => 'Can start with `#` to navigate to an application page.',
      'tabUrlAclScope' => 'The tab will be available for users who have access to the specified scope.'
    ]
  ],
  'ApiUser' => [
    'labels' => [
      'Create ApiUser' => 'Criar API de usuário',
      'OpenAPI spec' => 'OpenAPI spec'
    ]
  ],
  'AppLogRecord' => [
    'fields' => [
      'message' => 'Message',
      'code' => 'Code',
      'level' => 'Level',
      'exceptionClass' => 'Exception Class',
      'file' => 'File',
      'line' => 'Line',
      'requestMethod' => 'Request Method',
      'requestResourcePath' => 'Request Resource Path'
    ],
    'presetFilters' => [
      'errors' => 'Errors'
    ]
  ],
  'AppSecret' => [
    'labels' => [
      'Create AppSecret' => 'Create Secret'
    ],
    'fields' => [
      'value' => 'Value'
    ],
    'tooltips' => [
      'name' => 'Allowed characters:
* `[a-z]`
* `[A-Z]`
* `[0-9]`
* `_`'
    ]
  ],
  'Attachment' => [
    'fields' => [
      'role' => 'Regra',
      'related' => 'Related',
      'file' => 'Arquivo',
      'type' => 'Tipo',
      'field' => 'Campo',
      'sourceId' => 'Source ID',
      'storage' => 'Armazenamento',
      'size' => 'Tam. (bytes)',
      'isBeingUploaded' => 'Is Being Uploaded'
    ],
    'options' => [
      'role' => [
        'Attachment' => 'Anexo',
        'Inline Attachment' => 'Anexo Inline',
        'Import File' => 'Importar Arquivo',
        'Export File' => 'Exportar Arquivo',
        'Mail Merge' => 'Mala Direta',
        'Mass Pdf' => 'PDF em Massa'
      ]
    ],
    'insertFromSourceLabels' => [
      'Document' => 'Inserir Documento'
    ],
    'presetFilters' => [
      'orphan' => 'Órfão'
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'username' => 'Username',
      'ipAddress' => 'Endereço IP',
      'requestTime' => 'Hora da Solicitação',
      'createdAt' => 'Requisitado Em',
      'isDenied' => 'Negado',
      'denialReason' => 'Motivo da Negação',
      'portal' => 'Portal',
      'user' => 'Usuário',
      'authToken' => 'Token de autenticação criado',
      'requestUrl' => 'URL de Solicitação',
      'requestMethod' => 'Método de Requisição',
      'authTokenIsActive' => 'Token de Autenticação está Ativo',
      'authenticationMethod' => 'Método de autenticação'
    ],
    'links' => [
      'authToken' => 'Token de Autenticação Criado',
      'user' => 'Usuário',
      'portal' => 'Portal',
      'actionHistoryRecords' => 'Histórico de Ações'
    ],
    'presetFilters' => [
      'denied' => 'Negado',
      'accepted' => 'Aceito'
    ],
    'options' => [
      'denialReason' => [
        'CREDENTIALS' => 'Credenciais inválidas',
        'WRONG_CODE' => 'Wrong code',
        'INACTIVE_USER' => 'Usuário inativo',
        'IS_PORTAL_USER' => 'Usuário do Portal',
        'IS_NOT_PORTAL_USER' => 'Não um Usuário do Portal',
        'USER_IS_NOT_IN_PORTAL' => 'Usuário não está relacionado ao portal',
        'IS_SYSTEM_USER' => 'Is system user',
        'FORBIDDEN' => 'Forbidden'
      ]
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'user' => 'Usuário',
      'ipAddress' => 'Endereço de IP',
      'lastAccess' => 'Último acesso',
      'createdAt' => 'Data do login',
      'isActive' => 'Está Ativo',
      'portal' => 'Portal'
    ],
    'links' => [
      'actionHistoryRecords' => 'Histórico de Ações'
    ],
    'presetFilters' => [
      'active' => 'Ativo',
      'inactive' => 'Inativo'
    ],
    'labels' => [
      'Set Inactive' => 'Definir Inativo'
    ],
    'massActions' => [
      'setInactive' => 'Definir Inativo'
    ]
  ],
  'AuthenticationProvider' => [
    'fields' => [
      'method' => 'Method'
    ],
    'labels' => [
      'Create AuthenticationProvider' => 'Create Provider'
    ]
  ],
  'Currency' => [
    'names' => [
      'AED' => 'Dirham dos Emirados Árabes Unidos',
      'AFN' => 'Afegane Afegão',
      'ALL' => 'Lek Albanês',
      'AMD' => 'Dram Armênio',
      'ANG' => 'Guilder das Antilhas Holandesas',
      'AOA' => 'Kwanza Angolano',
      'ARS' => 'Peso Argentino',
      'AUD' => 'Dólar Australiano',
      'AWG' => 'Florim Arubano',
      'AZN' => 'Manat Azerbaijano',
      'BAM' => 'Marco Conversível da Bósnia-Herzegovina',
      'BBD' => 'Dólar Barbadence',
      'BDT' => 'Taka Bengali',
      'BGN' => 'Lev Búlgaro',
      'BHD' => 'Dinar Bareinita',
      'BIF' => 'Franco Burundinese',
      'BMD' => 'Dólar Bermudense',
      'BND' => 'Dólar Bruneano',
      'BOB' => 'Boliviano da Bolívia',
      'BOV' => 'Mvdol Boliviano',
      'BRL' => 'Real Brasileiro',
      'BSD' => 'Dólar Bahamense',
      'BTN' => 'Ngultrum Butanês',
      'BWP' => 'Pula Botsuanesa',
      'BYN' => 'Rublo Bielorrusso',
      'BZD' => 'Dólar Belizenho',
      'CAD' => 'Dólar Canadense',
      'CDF' => 'Franco Congolês',
      'CHE' => 'WIR Euro',
      'CHF' => 'Franco Suíço',
      'CHW' => 'WIR Franc',
      'CLF' => 'Chilean Unit of Account (UF)',
      'CLP' => 'Peso Chileno',
      'CNH' => 'Yuan Chinês (offshore)',
      'CNY' => 'Yuan Chinês',
      'COP' => 'Peso Colombiano',
      'COU' => 'Unidade de Valor Real Colombiano',
      'CRC' => 'Costa Costarriquenho',
      'CUC' => 'Peso Cubano Conversível',
      'CUP' => 'Peso Cubano',
      'CVE' => 'Escudo Cabo-verdiano',
      'CZK' => 'Coroa Tcheca',
      'DJF' => 'Franco do Djibouti',
      'DKK' => 'Coroa Dinamarquesa',
      'DOP' => 'Peso Dominicano',
      'DZD' => 'Dinar Argelino',
      'EGP' => 'Libra Egípicia',
      'ERN' => 'Nakfa da Eritreia',
      'ETB' => 'Birr Etíope',
      'EUR' => 'Euro',
      'FJD' => 'Dólar Figiano',
      'FKP' => 'Libra das Ilhas Malvinas',
      'GBP' => 'Libra Esterlina',
      'GEL' => 'Lari Georgiano',
      'GHS' => 'Cedi Ganês',
      'GIP' => 'Libra de Gibraltar',
      'GMD' => 'Dalasi Gambiano',
      'GNF' => 'Franco Guineano',
      'GTQ' => 'Quetzal Guatemalteco',
      'GYD' => 'Dólar Guianense',
      'HKD' => 'Dólar de Hong Kong',
      'HNL' => 'Lempira Hondurenha',
      'HRK' => 'Kuna Kroata',
      'HTG' => 'Gourde Haitiano',
      'HUF' => 'Florim Húngaro',
      'IDR' => 'Rupia Indonésia',
      'ILS' => 'Novo Shekel Israelense',
      'INR' => 'Rupia Indiana',
      'IQD' => 'Dinar Iraquiano',
      'IRR' => 'Rial Iraniano',
      'ISK' => 'Coroa Islandesa',
      'JMD' => 'Dólar Jamaicano',
      'JOD' => 'Dinar Jordaniano',
      'JPY' => 'Yen Japonês',
      'KES' => 'Xelim Queniano',
      'KGS' => 'Som Quirguiz',
      'KHR' => 'Riel Cambojano',
      'KMF' => 'Franco Comoriano',
      'KPW' => 'Won Norte-Coreano',
      'KRW' => 'Won Sul-Coreano',
      'KWD' => 'Dinar Kuwaitiano',
      'KYD' => 'Dólar das Ilhas Cayman',
      'KZT' => 'Tenge Cazaque',
      'LAK' => 'Kip Laosiano',
      'LBP' => 'Libra Libanesa',
      'LKR' => 'Rupia do Sri Lanka',
      'LRD' => 'Dólar Liberiano',
      'LSL' => 'Loti Lesotiano',
      'LYD' => 'Dinar Líbio',
      'MAD' => 'Dirham Marroquino',
      'MDL' => 'Leu Moldávio',
      'MGA' => 'Ariary Malgaxe',
      'MKD' => 'Dinar Macedônio',
      'MMK' => 'Kyat de Mianmar',
      'MNT' => 'Tugrik da Mongólia',
      'MOP' => 'Pataca Macaense',
      'MRO' => 'Mauritanian Ouguiya',
      'MUR' => 'Rupia Mauriciana',
      'MWK' => 'Kwacha do Malawi',
      'MXN' => 'Peso Mexicano',
      'MXV' => 'Unidade de Investimento Mexicana',
      'MYR' => 'Ringgit Malaio',
      'MZN' => 'Metical Moçambicano',
      'NAD' => 'Dólar Namibiano',
      'NGN' => 'Naira Nigeriana',
      'NIO' => 'Córdoba da Nicarágua',
      'NOK' => 'Coroa Norueguesa',
      'NPR' => 'Rupia Nepalesa',
      'NZD' => 'Dólar da Nova Zelândia',
      'OMR' => 'Rial de Omã',
      'PAB' => 'Balboa Panamenho',
      'PEN' => 'Sol Peruano',
      'PGK' => 'Papua Nova Guiné Kina',
      'PHP' => 'Piso Filipino',
      'PKR' => 'Rupia Paquistanesa',
      'PLN' => 'Zloty Polonês',
      'PYG' => 'Guarani Paraguaio',
      'QAR' => 'Rial Catarense',
      'RON' => 'Leu Romeno',
      'RSD' => 'Dinar Sérvio',
      'RUB' => 'Rublo Russo',
      'RWF' => 'Franco Ruandês',
      'SAR' => 'Rial Saudita',
      'SBD' => 'Dólar das Ilhas Salomão',
      'SCR' => 'Rúpia Seichelense',
      'SDG' => 'Libra Sudanesa',
      'SEK' => 'Coroa Sueca',
      'SGD' => 'Dólar de Singapura',
      'SHP' => 'Libra de Santa Helena',
      'SLL' => 'Leone de Serra Leoa',
      'SOS' => 'Xelim da Somália',
      'SRD' => 'Dólar do Suriname',
      'SSP' => 'Libra Sul-Sudanesa',
      'STN' => 'São Tomé e Príncipe Dobra (2018)',
      'SYP' => 'Libra Síria',
      'SZL' => 'Suazi Lilangeni',
      'SVC' => 'Colón Salvadorenho',
      'THB' => 'Baht Tailandês',
      'TJS' => 'Tajiquistão Somoni',
      'TND' => 'Dinar Tunisiano',
      'TOP' => 'Tonga Pa\'anga',
      'TRY' => 'Lira Turca',
      'TTD' => 'Dólar de Trinidad e Tobago',
      'TWD' => 'Novo Dólar Taiwanês',
      'TZS' => 'Xelim da Tanzânia',
      'UAH' => 'Hryvnia Ucraniano',
      'UGX' => 'Xelim de Uganda',
      'USD' => 'Dólar Americano',
      'USN' => 'Dólar Americano (Dia seguinte)',
      'UYI' => 'Peso Uruguaio (Unidades Indexadas)',
      'UYU' => 'Peso Uruguaio',
      'UZS' => 'Som do Uzbequistão',
      'VEF' => 'Bolívar Venezuelano',
      'VND' => 'Dong Vietnamita',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Tala Samoano',
      'XAF' => 'Franco CFA da África Central',
      'XCD' => 'Dólar do Caribe Oriental',
      'XOF' => 'Franco CFA da África Ocidental',
      'XPF' => 'Franco CFP',
      'YER' => 'Rial Iemenita',
      'ZAR' => 'Rand Sul-Africano',
      'ZMW' => 'Kwacha da Zâmbia',
      'ZWL' => 'Dólar do Zimbábue'
    ],
    'messages' => [
      'rateOnDateAlreadyExists' => 'A rate on this date already exists.'
    ]
  ],
  'CurrencyRecord' => [
    'fields' => [
      'code' => 'Code',
      'status' => 'Status',
      'label' => 'Label',
      'symbol' => 'Symbol',
      'isBase' => 'Is Base',
      'rate' => 'Rate',
      'rateDate' => 'Rate Date'
    ],
    'links' => [
      'rates' => 'Rates'
    ],
    'options' => [
      'status' => [
        'Active' => 'Active',
        'Inactive' => 'Inactive'
      ]
    ]
  ],
  'CurrencyRecordRate' => [
    'labels' => [
      'Create CurrencyRecordRate' => 'Create Exchange Rate'
    ],
    'fields' => [
      'record' => 'Currency',
      'baseCode' => 'Base',
      'date' => 'Date',
      'rate' => 'Rate',
      'number' => 'Number'
    ],
    'links' => [
      'record' => 'Currency'
    ]
  ],
  'DashboardTemplate' => [
    'fields' => [
      'layout' => 'Layout',
      'append' => 'Append (don\'t remove user\'s tabs)'
    ],
    'links' => [],
    'labels' => [
      'Create DashboardTemplate' => 'Criar Modelo',
      'Deploy to Users' => 'Distribuir para Usuários',
      'Deploy to Team' => 'Distribuir para o Time'
    ]
  ],
  'DashletOptions' => [
    'fields' => [
      'title' => 'Título',
      'dateFrom' => 'Desde',
      'dateTo' => 'Até a data',
      'autorefreshInterval' => 'Intervalo para auto-atualização',
      'displayRecords' => 'Exibir Registros',
      'isDoubleHeight' => 'Altura 2x',
      'mode' => 'Modo',
      'enabledScopeList' => 'O que exibir',
      'users' => 'Usuários',
      'entityType' => 'Tipo da Entidade',
      'primaryFilter' => 'Filtro Primário',
      'boolFilterList' => 'Filtros Adicionais',
      'sortBy' => 'Ordem (campo)',
      'sortDirection' => 'Ordem (direção)',
      'expandedLayout' => 'Layout',
      'skipOwn' => 'Não mostrar os próprios registros',
      'url' => 'URL',
      'dateFilter' => 'Filtro por Data',
      'text' => 'Text',
      'folder' => 'Folder',
      'includeShared' => 'Include Shared',
      'team' => 'Time',
      'futureDays' => 'Próximos X Dias',
      'useLastStage' => 'Agrupar por último estágio alcançado'
    ],
    'options' => [
      'mode' => [
        'agendaWeek' => 'Semana (agenda)',
        'basicWeek' => 'Semana',
        'month' => 'Mês',
        'basicDay' => 'Dia',
        'agendaDay' => 'Dia (agenda)',
        'timeline' => 'Linha do Tempo'
      ],
      'sortDirection' => [
        'asc' => 'Ascending',
        'desc' => 'Descending'
      ]
    ],
    'messages' => [
      'selectEntityType' => 'Selecione Tipo de Entidade nas opções do painel.'
    ],
    'tooltips' => [
      'skipOwn' => 'As ações feitas pela sua conta de usuário não serão exibidas.'
    ],
    'otherFields' => [
      'soft' => 'Soft Color',
      'small' => 'Small Font'
    ]
  ],
  'DynamicLogic' => [
    'labels' => [
      'Field' => 'Campo'
    ],
    'options' => [
      'operators' => [
        'equals' => 'Igual',
        'notEquals' => 'Não igual',
        'greaterThan' => 'Maior que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Maior que ou Igual',
        'lessThanOrEquals' => 'Menor ou igual',
        'in' => 'Em',
        'notIn' => 'Não em',
        'inPast' => 'No passado',
        'inFuture' => 'É Futuro',
        'isToday' => 'É Hoje',
        'isTrue' => 'É verdadeiro',
        'isFalse' => 'É falso',
        'isEmpty' => 'É vazio',
        'isNotEmpty' => 'Não Está Vazio',
        'contains' => 'Contém',
        'notContains' => 'Não contém',
        'has' => 'Contém',
        'notHas' => 'Não contém',
        'startsWith' => 'Começa Com',
        'endsWith' => 'Termina Com',
        'matches' => 'Correspondências (regex)'
      ]
    ]
  ],
  'Email' => [
    'fields' => [
      'name' => 'Assunto',
      'parent' => 'Origem',
      'status' => 'Status',
      'dateSent' => 'Data do envio',
      'from' => 'De',
      'to' => 'Para',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Responder Para',
      'replyToString' => 'Responder Para (String)',
      'personStringData' => 'Dados do String da Pessoa',
      'isHtml' => 'Html',
      'body' => 'Corpo',
      'bodyPlain' => 'Corpo (Plano)',
      'subject' => 'Assunto',
      'attachments' => 'Anexos',
      'selectTemplate' => 'Escolher Template',
      'fromEmailAddress' => 'Do Endereço (link)',
      'emailAddress' => 'Endereço de E-mail',
      'deliveryDate' => 'Data de envio',
      'account' => 'Conta',
      'users' => 'Usuários',
      'replied' => 'Respondido',
      'replies' => 'Respostas',
      'isRead' => 'Está lido',
      'isNotRead' => 'Não está lido',
      'isImportant' => 'É importante',
      'isReplied' => 'Foi Respondido',
      'isNotReplied' => 'Não Foi Respondido',
      'isUsers' => 'É usuário',
      'isUsersSent' => 'Is User\'s Sent',
      'inTrash' => 'Na Lixeira',
      'inArchive' => 'In Archive',
      'folder' => 'Pasta',
      'inboundEmails' => 'Contas de Grupo',
      'emailAccounts' => 'Contas Pessoais',
      'hasAttachment' => 'Tem anexo',
      'assignedUsers' => 'Usuários Designados',
      'sentBy' => 'Enviado Por',
      'toEmailAddresses' => 'To Email Addresses',
      'ccEmailAddresses' => 'Endereços de email CC',
      'bccEmailAddresses' => 'BCC Email Addresses',
      'replyToEmailAddresses' => 'Reply-To Email Addresses',
      'messageId' => 'Id da Mensagem',
      'messageIdInternal' => 'Id da Mensagem (Interno)',
      'folderId' => 'Id da Pasta',
      'folderString' => 'Folder',
      'fromName' => 'Do Nome',
      'fromString' => 'Do String',
      'fromAddress' => 'E-mail do rementente',
      'replyToName' => 'Reply-To Name',
      'replyToAddress' => 'Reply-To Address',
      'isSystem' => 'É Sistema',
      'icsContents' => 'ICS Contents',
      'icsEventData' => 'ICS Event Data',
      'icsEventUid' => 'ICS Event UID',
      'createdEvent' => 'Evento criado',
      'event' => 'Evento',
      'icsEventDateStart' => 'Data de Início do Evento ICS',
      'groupFolder' => 'Group Folder',
      'groupStatusFolder' => 'Group Status Folder',
      'sendAt' => 'Send At',
      'isAutoReply' => 'Is Auto-Reply',
      'tasks' => 'Tarefas',
      'assignedUser' => 'Corretor designado'
    ],
    'links' => [
      'replied' => 'Respondido',
      'replies' => 'Respostas',
      'inboundEmails' => 'Contas de Grupo',
      'emailAccounts' => 'Contas Pessoais',
      'assignedUsers' => 'Usuários Designados',
      'sentBy' => 'Enviado Por',
      'attachments' => 'Anexos',
      'fromEmailAddress' => 'Do Endereço de Email',
      'toEmailAddresses' => 'To Email Addresses',
      'ccEmailAddresses' => 'CC Email Addresses',
      'bccEmailAddresses' => 'BCC Email Addresses',
      'replyToEmailAddresses' => 'Reply-To Email Addresses',
      'createdEvent' => 'Created Event',
      'groupFolder' => 'Group Folder'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Rascunho',
        'Sending' => 'Enviando',
        'Sent' => 'Enviado',
        'Archived' => 'Arquivado',
        'Received' => 'Recebido',
        'Failed' => 'Falhado'
      ],
      'groupStatusFolder' => [
        'Archive' => 'Archive',
        'Trash' => 'Trash'
      ]
    ],
    'labels' => [
      'Create Email' => 'Arquivar e-mail',
      'Archive Email' => 'Arquivar e-mail',
      'Import EML' => 'Import EML',
      'Compose' => 'Compor',
      'Reply' => 'Responder',
      'Reply to All' => 'Responder a Todos',
      'Forward' => 'Encaminhar',
      'Insert Field' => 'Inserir Campo',
      'Original message' => 'Mensagem original',
      'Forwarded message' => 'Mensagem encaminhada',
      'Email Accounts' => 'Contas de e-mail',
      'Inbound Emails' => 'Agrupar contas de e-mail',
      'Email Templates' => 'Templates de email',
      'Send Test Email' => 'Enviar e-mail de teste',
      'Send' => 'Enviar',
      'Email Address' => 'Endereço de E-mail',
      'Mark Read' => 'Marcar como lido',
      'Sending...' => 'Enviando...',
      'Save Draft' => 'Salvar rascunho',
      'Mark all as read' => 'Marcar tudo como lido',
      'Show Plain Text' => 'Exibir em texto puro',
      'Mark as Important' => 'Marcar como Importante',
      'Unmark Importance' => 'Desmarcar Importância',
      'Move to Trash' => 'Mover para a Lixeira',
      'Retrieve from Trash' => 'Recuperar da lixeira',
      'Move to Folder' => 'Mover para Pasta',
      'Moved to Archive' => 'Moved to Archive',
      'No Records Moved' => 'No Records Moved',
      'Filters' => 'Filtros',
      'Folders' => 'Pastas',
      'Group Folders' => 'Group Folders',
      'No Subject' => 'Sem Assunto',
      'View Users' => 'Visualizar Usuários',
      'Event' => 'Evento',
      'View Attachments' => 'View Attachments',
      'Moved to Trash' => 'Moved to Trash',
      'Retrieved from Trash' => 'Retrieved from Trash',
      'Schedule Send' => 'Schedule Send',
      'Create Lead' => 'Criar lead',
      'Create Contact' => 'Criar contato',
      'Add to Contact' => 'Adicionar ao Contato',
      'Add to Lead' => 'Adicionar ao Lead',
      'Create Task' => 'Criar Tarefa',
      'Create Case' => 'Criar caso'
    ],
    'strings' => [
      'sendingFailed' => 'Falha no envio de email',
      'group' => 'Group'
    ],
    'messages' => [
      'confirmSend' => 'Send the email?',
      'couldNotSentScheduledEmail' => 'Could not send scheduled [email]({link})',
      'notEditAccess' => 'No edit access to email.',
      'groupFolderNoAccess' => 'No access to group folder.',
      'groupMoveOutNoEditAccess' => 'Cannot move out from group folder. No edit access to email.',
      'groupMoveToNoEditAccess' => 'Cannot move to group folder. No edit access to email.',
      'groupMoveToTrashNoEditAccess' => 'Cannot move email from group folder to trash. No edit access to email.',
      'groupMoveToArchiveNoEditAccess' => 'Cannot move from group folder to Archive. No edit access to email.',
      'alreadyImported' => 'The [email]({link}) already exists in the system.',
      'invalidCredentials' => 'Invalid credentials.',
      'unknownError' => 'Unknown error.',
      'recipientAddressRejected' => 'Recipient address rejected.',
      'noSmtpSetup' => 'SMTP não está configurado: {link}',
      'testEmailSent' => 'O e-mail de teste enviado',
      'emailSent' => 'O e-mail foi enviado',
      'savedAsDraft' => 'Salvar como rascunho',
      'sendConfirm' => 'Enviar o e-mail?',
      'removeSelectedRecordsConfirmation' => 'Tem certeza de que deseja remover os emails selecionados?

Eles serão removidos para outros usuários também.',
      'removeRecordConfirmation' => 'Tem certeza de que deseja remover o email?

Ele será removido para outros usuários também.',
      'confirmInsertTemplate' => 'O corpo do e-mail será perdido. Tem certeza de que deseja inserir o modelo?'
    ],
    'presetFilters' => [
      'sent' => 'Enviado',
      'archived' => 'Arquivado',
      'inbox' => 'Caixa de entrada',
      'drafts' => 'Rascunhos',
      'trash' => 'Lixo',
      'archive' => 'Archive',
      'important' => 'Importante'
    ],
    'actions' => [
      'moveToArchive' => 'Archive'
    ],
    'massActions' => [
      'markAsRead' => 'Marcar como lido',
      'markAsNotRead' => 'Marcar como não lido',
      'markAsImportant' => 'Marcar como importante',
      'markAsNotImportant' => 'Desmarcar destaque',
      'moveToTrash' => 'Mover para lixeira',
      'moveToFolder' => 'Mover para Pasta',
      'moveToArchive' => 'Archive',
      'retrieveFromTrash' => 'Recuperar da Lixeira'
    ],
    'otherFields' => [
      'file' => 'File'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'name' => 'Nome',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Usuário',
      'password' => 'Senha',
      'port' => 'Porta',
      'monitoredFolders' => 'Pastas monitoradas',
      'security' => 'Segurança',
      'fetchSince' => 'Recuperar desde',
      'emailAddress' => 'Endereço de E-mail',
      'sentFolder' => 'Enviar pasta',
      'storeSentEmails' => 'Armazenar emails enviados',
      'keepFetchedEmailsUnread' => 'Manter e-mails buscados como não lidos',
      'emailFolder' => 'Colocar na Pasta',
      'connectedAt' => 'Connected At',
      'useImap' => 'Buscar emails',
      'useSmtp' => 'Usar SMTP',
      'smtpHost' => 'Host SMTP',
      'smtpPort' => 'Porta SMTP',
      'smtpAuth' => 'Autenticação SMTP',
      'smtpSecurity' => 'Segurança SMTP',
      'smtpAuthMechanism' => 'Mecanismo de Autenticação SMTP',
      'smtpUsername' => 'Usuário SMTP',
      'smtpPassword' => 'Senha SMTP',
      'folderMap' => 'Folder Mapping'
    ],
    'links' => [
      'filters' => 'Filtros',
      'emails' => 'Emails'
    ],
    'options' => [
      'status' => [
        'Active' => 'Ativa',
        'Inactive' => 'Inativa'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ],
      'security' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'labels' => [
      'Create EmailAccount' => 'Criar conta de e-mail',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => 'Testar conexão',
      'Send Test Email' => 'Enviar Email de Teste',
      'SMTP' => 'SMTP'
    ],
    'presetFilters' => [
      'active' => 'Active'
    ],
    'messages' => [
      'noFolder' => 'Mapped folder does not exist.',
      'couldNotConnectToImap' => 'Não foi possível conectar ao servidor IMAP',
      'connectionIsOk' => 'Conexão está OK',
      'imapNotConnected' => 'Could not connect to [IMAP account](#EmailAccount/view/{id}).'
    ],
    'tooltips' => [
      'useSmtp' => 'A capacidade de enviar emails.',
      'emailAddress' => 'O registro do usuário (usuário designado) deve ter o mesmo endereço de email para poder usar esta conta de email para envio.',
      'monitoredFolders' => 'Várias pastas devem ser separadas por vírgula.

Você pode adicionar uma pasta \'Enviados\' para sincronizar emails enviados de um cliente de email externo.',
      'storeSentEmails' => 'Os emails enviados serão armazenados no servidor IMAP. O campo Endereço de email deve corresponder ao endereço de onde os emails serão enviados.'
    ]
  ],
  'EmailAddress' => [
    'labels' => [
      'Primary' => 'Primário',
      'Opted Out' => 'Cancelou (opt-out)',
      'Invalid' => 'Inválido'
    ],
    'fields' => [
      'optOut' => 'Cancelado',
      'invalid' => 'Inválido',
      'lower' => 'Lower-case Name'
    ],
    'presetFilters' => [
      'orphan' => 'Órfão'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'from' => 'De',
      'to' => 'Para',
      'subject' => 'Assunto',
      'bodyContains' => 'Corpo contém',
      'bodyContainsAll' => 'Body Contains All',
      'action' => 'Ação',
      'isGlobal' => 'É Global',
      'emailFolder' => 'Pasta',
      'groupEmailFolder' => 'Group Email Folder',
      'markAsRead' => 'Mark as Read',
      'skipNotification' => 'Skip Notification'
    ],
    'links' => [
      'emailFolder' => 'Folder',
      'groupEmailFolder' => 'Group Email Folder'
    ],
    'labels' => [
      'Create EmailFilter' => 'Criar filtro de email',
      'Emails' => 'Emails'
    ],
    'options' => [
      'action' => [
        'None' => 'None',
        'Skip' => 'Ignorar',
        'Move to Folder' => 'Colocar na Pasta',
        'Move to Group Folder' => 'Put in Group Folder'
      ]
    ],
    'tooltips' => [
      'name' => 'Dê ao filtro um nome descritivo.',
      'subject' => 'Use um wildcard *:

* `texto*` – inicia com texto,
* `*texto*` – contém texto,
* `*texto` – termina com texto.',
      'bodyContains' => 'O corpo do e-mail contém qualquer uma das palavras ou frases especificadas.',
      'bodyContainsAll' => 'An email body contains all specified words or phrases.',
      'from' => 'E-mails sendo enviados através das contas especificadas. Deixar em branco se desnecessário. Você pode usar wildcard *.',
      'to' => 'Enviando e-mails através das contas especificadas. Deixar em branco se desnecessário. Você pode usar wildcard *.',
      'isGlobal' => 'Aplica este filtro a todos os emails que chegam ao sistema.'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'skipNotifications' => 'Pular notificações'
    ],
    'labels' => [
      'Create EmailFolder' => 'Criar pasta',
      'Manage Folders' => 'Gerenciar Pastas',
      'Emails' => 'Emails'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'name' => 'Nome',
      'status' => 'Status',
      'isHtml' => 'Html',
      'body' => 'Conteúdo',
      'subject' => 'Assunto',
      'attachments' => 'Anexos',
      'oneOff' => 'One-off',
      'category' => 'Categorias',
      'insertField' => 'Espaços Reservados'
    ],
    'links' => [],
    'labels' => [
      'Create EmailTemplate' => 'Criar Template de E-mail',
      'Info' => 'Info',
      'Available placeholders' => 'Espaços reservados disponíveis'
    ],
    'options' => [
      'status' => [
        'Active' => 'Active',
        'Inactive' => 'Inactive'
      ]
    ],
    'messages' => [
      'infoText' => 'Marcadores de posição disponíveis:

{optOutUrl} &#8211; URL para um link de cancelamento de assinatura;

{optOutLink} &#8211; um link de cancelamento de inscrição.'
    ],
    'tooltips' => [
      'oneOff' => 'Verifique se você vai usar este template apenas uma vez. Ex: para e-mail em massa.'
    ],
    'presetFilters' => [
      'actual' => 'Atual'
    ],
    'placeholderTexts' => [
      'today' => 'Data de hoje',
      'now' => 'Data e hora atuais',
      'currentYear' => 'Ano Atual',
      'optOutUrl' => 'URL para um link de cancelamento de assinatura',
      'optOutLink' => 'link de cancelamento de inscrição'
    ]
  ],
  'EmailTemplateCategory' => [
    'labels' => [
      'Create EmailTemplateCategory' => 'Criar categoria',
      'Manage Categories' => 'Gerenciar Categorias',
      'EmailTemplates' => 'Modelos de Email'
    ],
    'fields' => [
      'order' => 'Ordem',
      'childList' => 'Lista Filha'
    ],
    'links' => [
      'emailTemplates' => 'Modelos de Email'
    ]
  ],
  'EntityManager' => [
    'labels' => [
      'Fields' => 'Campos',
      'Relationships' => 'Relacionamentos',
      'Layouts' => 'Layouts',
      'Schedule' => 'Agendamento',
      'Log' => 'Log',
      'Formula' => 'Fórmula',
      'Parameters' => 'Parameters'
    ],
    'fields' => [
      'name' => 'Nome',
      'type' => 'Tipo',
      'labelSingular' => 'Rótulo Singular',
      'labelPlural' => 'Rótulo Plural',
      'stream' => 'Fluxo',
      'label' => 'Rótulo',
      'linkType' => 'Tipo de Link',
      'entity' => 'Entidade',
      'entityForeign' => 'Entidade Estrangeira',
      'linkForeign' => 'Link Estrangeiro',
      'link' => 'Link',
      'labelForeign' => 'Rótulo Estrangeiro',
      'sortBy' => 'Ordem Padrão (campo)',
      'sortDirection' => 'Ordem Padrão (direção)',
      'relationName' => 'Nome Tabela Intermediária',
      'linkMultipleField' => 'Link Multiple Field',
      'linkMultipleFieldForeign' => 'Foreign Link Multiple Field',
      'disabled' => 'Desabilitado',
      'textFilterFields' => 'Campos de Filtro de Texto',
      'audited' => 'Auditado',
      'auditedForeign' => 'Foreign Audited',
      'statusField' => 'Campo de Status',
      'beforeSaveCustomScript' => 'Script Personalizado Antes de Salvar',
      'beforeSaveApiScript' => 'API Before Save Script',
      'color' => 'Cor',
      'kanbanViewMode' => 'Visualização Kanban',
      'kanbanStatusIgnoreList' => 'Grupos ignorados na visualização Kanban',
      'iconClass' => 'Ícone',
      'countDisabled' => 'Desabilitar contagem de registros',
      'fullTextSearch' => 'Pesquisa de Texto Completa',
      'parentEntityTypeList' => 'Tipos de Entidade Pai',
      'foreignLinkEntityTypeList' => 'Chaves estrangeiras',
      'optimisticConcurrencyControl' => 'Controle de concorrência otimista',
      'preserveAuditLog' => 'Preserve Audit Log',
      'updateDuplicateCheck' => 'Duplicate check on update',
      'duplicateCheckFieldList' => 'Duplicate check fields',
      'stars' => 'Stars',
      'layout' => 'Layout',
      'selectFilter' => 'Select Filter',
      'author' => 'Author',
      'module' => 'Module',
      'version' => 'Version',
      'primaryFilters' => 'Primary Filters',
      'assignedUsers' => 'Multiple Assigned Users',
      'collaborators' => 'Collaborators',
      'aclContactLink' => 'ACL Contact Link',
      'aclAccountLink' => 'ACL Account Link',
      'activityStatusList' => 'Activity Statuses',
      'historyStatusList' => 'History Statuses',
      'completedStatusList' => 'Completed Statuses',
      'canceledStatusList' => 'Canceled Statuses'
    ],
    'options' => [
      'type' => [
        '' => 'Nenhum',
        'Base' => 'Base',
        'Person' => 'Pessoa',
        'CategoryTree' => 'Árvore de Categoria',
        'Event' => 'Evento',
        'BasePlus' => 'Base Plus',
        'Company' => 'Empresa'
      ],
      'linkType' => [
        'manyToMany' => 'Muitos-para-Muitos',
        'oneToMany' => 'Um-para-Muitos',
        'manyToOne' => 'Muitos-para-Um',
        'oneToOneRight' => 'One-to-One Right',
        'oneToOneLeft' => 'One-to-One Left',
        'parentToChildren' => 'Parent-to-Children',
        'childrenToParent' => 'Children-to-Parent'
      ],
      'sortDirection' => [
        'asc' => 'Ascendente',
        'desc' => 'Descentente'
      ],
      'module' => [
        'Custom' => 'Custom'
      ]
    ],
    'messages' => [
      'urlHashCopiedToClipboard' => 'A URL fragment for the *{name}* filter is copied to the clipboard. You can add it to the navbar.',
      'confirmRemoveLink' => 'Are you sure you want to remove the *{link}* relationship?',
      'nameIsAlreadyUsed' => 'Name \'{name}\' is already used.',
      'nameIsNotAllowed' => 'Name \'{name}\' is not allowed.',
      'nameIsTooLong' => 'Name is too long.',
      'confirmRemove' => 'Tem certeza de que deseja remover o tipo de entidade do sistema?',
      'entityCreated' => 'A entidade foi criada',
      'linkAlreadyExists' => 'Conflito: o link já existe.',
      'linkConflict' => 'Conflito de nome: link ou campo com o mesmo nome já existe.',
      'beforeSaveCustomScript' => 'A script called every time before an entity is saved. Use for setting calculated fields.',
      'beforeSaveApiScript' => 'A script called on create and update API requests before an entity is saved. Use for custom validation and duplicate checking.'
    ],
    'tooltips' => [
      'aclContactLink' => 'The link with Contact to use when applying access control for portal users.',
      'aclAccountLink' => 'The link with Account to use when applying access control for portal users.',
      'collaborators' => 'The ability to share records with specific users.',
      'assignedUsers' => 'The ability to assign multiple users to a record.

Note that after enabling the parameter, existing assigned users won\'t be transferred to the new *Assigned Users* field.',
      'duplicateCheckFieldList' => 'Which fields to check when performing checking for duplicates.',
      'updateDuplicateCheck' => 'Perform checking for duplicates when updating a record.',
      'optimisticConcurrencyControl' => 'Evita conflitos de escrita.',
      'preserveAuditLog' => 'Disables cleanup of the audit log. This parameter is applicable only if Stream is disabled. As if Stream is enabled, audit log records are not being deleted.',
      'stars' => 'The ability to star records. Stars can be used by users to bookmark records.',
      'statusField' => 'As atualizações deste campo são registradas no stream.',
      'textFilterFields' => 'Campos usados pela pesquisa de texto.',
      'stream' => 'Se a entidade tem um Stream.',
      'disabled' => 'Verifique se você não precisa dessa entidade em seu sistema.',
      'linkAudited' => 'Criar registro relacionado e vincular com registro existente será registrado no Stream.',
      'linkMultipleField' => 'O campo Link Múltiplo fornece uma maneira prática de editar relações. Não use se você tiver um grande número de registros relacionados.',
      'linkSelectFilter' => 'A primary filter to apply by default when selecting a record.',
      'entityType' => 'Base Plus - possui painéis de Atividades, Histórico e Tarefas.

Evento - disponível nos painéis de Calendário e Atividades',
      'countDisabled' => 'O número total não será exibido na list view. Pode diminuir o tempo de carregamento quando a tabela no DB é grande.',
      'fullTextSearch' => 'A reconstrução em execução é necessária.',
      'linkParamReadOnly' => 'A read-only link cannot be edited via the *link* and *unlink* API requests. It won\'t be possible to relate and unrelate records via the relationship panel. It still possible to edit read-only links via link and link-multiple fields.',
      'activityStatusList' => 'Status values determining that an activity record should be displayed in the Activity panel and considered as actual.',
      'historyStatusList' => 'Status values determining that an activity record should be displayed in the History panel.',
      'completedStatusList' => 'Status values determining that an activity is completed.',
      'canceledStatusList' => 'Status values determining that an activity is canceled and won\'t be taken into account in free/busy ranges.'
    ]
  ],
  'Export' => [
    'fields' => [
      'exportAllFields' => 'Exportar todos os campos',
      'fieldList' => 'Lista de Campos',
      'format' => 'Formato',
      'status' => 'Status',
      'xlsxLite' => 'Lite',
      'xlsxRecordLinks' => 'Record Links',
      'xlsxTitle' => 'Title'
    ],
    'options' => [
      'format' => [
        'csv' => 'CSV',
        'xlsx' => 'XLSX · Spreadsheet'
      ],
      'status' => [
        'Pending' => 'Pendente',
        'Running' => 'Rodando',
        'Success' => 'Sucesso',
        'Failed' => 'Falhou'
      ]
    ],
    'tooltips' => [
      'xlsxLite' => 'Consumes much less memory. Recommended if a big number of records is exported.',
      'xlsxTitle' => 'Print a title and current date in the header.'
    ],
    'messages' => [
      'exportProcessed' => 'A exportação foi processada. Baixe o  [file]({url}).',
      'infoText' => 'A exportação está sendo processada em modo inativo pelo cron. Pode levar algum tempo para terminar. Fechar esta caixa de diálogo modal não afetará o processo de execução.'
    ]
  ],
  'Extension' => [
    'fields' => [
      'name' => 'Nome',
      'version' => 'Versão',
      'description' => 'Descrição',
      'isInstalled' => 'Instalada',
      'checkVersionUrl' => 'Uma URL para verificar novas versões'
    ],
    'labels' => [
      'Uninstall' => 'Desinstalar',
      'Install' => 'Instalar'
    ],
    'messages' => [
      'uninstalled' => 'A extensão {name} foi desinstalada',
      'fileExceedsMaxUploadSize' => 'The file size exceeds the max upload size {maxSize}. Consider increasing `post_max_size` or install the extension via CLI.'
    ]
  ],
  'ExternalAccount' => [
    'labels' => [
      'Connect' => 'Conectar',
      'Disconnect' => 'Desconectar',
      'Disconnected' => 'Desconectado',
      'Connected' => 'Conectado'
    ],
    'help' => [],
    'messages' => [
      'externalAccountNoConnectDisabled' => 'External account for integration \'{integration}\' has been disabled due not being able to connect.'
    ]
  ],
  'FieldManager' => [
    'labels' => [
      'Dynamic Logic' => 'Lógica Dinâmica',
      'Name' => 'Nome',
      'Label' => 'Rótulo',
      'Type' => 'Tipo',
      'View Details' => 'View Details'
    ],
    'options' => [
      'dateTimeDefault' => [
        '' => 'Nenhum',
        'javascript: return this.dateTime.getNow(1);' => 'Agora',
        'javascript: return this.dateTime.getNow(5);' => 'Agora (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Agora (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Agora (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hora',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 dia',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 dias',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 dias',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 dias',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 dias',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 dias',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 semana'
      ],
      'dateDefault' => [
        '' => 'Nenhum',
        'javascript: return this.dateTime.getToday();' => 'Hoje',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 dia',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 dias',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 dias',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 dias',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 dias',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 dias',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 dias',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 dias',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 dias',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 dias',
        'javascript: return this.dateTime.getDateShiftedFromToday(30, \'days\');' => '+30 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 semana',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 semanas',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 semanas',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mês',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 ano'
      ],
      'barcodeType' => [
        'EAN13' => 'EAN-13',
        'EAN8' => 'EAN-8',
        'EAN5' => 'EAN-5',
        'EAN2' => 'EAN-2',
        'UPC' => 'UPC (A)',
        'UPCE' => 'UPC (E)',
        'pharmacode' => 'Código Farmacêutico',
        'QRcode' => 'Código QR'
      ],
      'globalRestrictions' => [
        'forbidden' => 'Forbidden',
        'internal' => 'Internal',
        'onlyAdmin' => 'Admin-only',
        'readOnly' => 'Read-only',
        'nonAdminReadOnly' => 'Non-admin read-only'
      ]
    ],
    'tooltips' => [
      'optionsReference' => 'Re-use options from another field.',
      'currencyDecimal' => 'Use the Decimal DB type. In the app, values will be represented as strings. Check this parameter if precision is required.',
      'cutHeight' => 'A text higher then a specified value will be cut with a \'show more\' button displayed.',
      'urlStrip' => 'Strip a protocol and a trailing slash.',
      'audited' => 'As atualizações serão registradas no stream.',
      'required' => 'Campo será obrigatório. Não pode ficar vazio.',
      'default' => 'O valor será definido por padrão na criação.',
      'min' => 'Valor mínimo aceitável.',
      'max' => 'Valor máximo aceitável.',
      'seeMoreDisabled' => 'Se não estiver marcado, os textos longos serão encurtados.',
      'lengthOfCut' => 'Qual o tamanho do texto antes de ser cortado.',
      'maxLength' => 'Comprimento máximo aceitável do texto.',
      'before' => 'O valor de data deve ser anterior ao valor de data do campo especificado.',
      'after' => 'O valor de data deve ser posterior ao valor de data do campo especificado.',
      'readOnly' => 'O valor do campo não pode ser especificado pelo usuário. Mas pode ser calculado pela fórmula.',
      'readOnlyAfterCreate' => 'The field value can be specified when creating a new record. After that, the field becomes read-only. It can still be calculated by formula.',
      'preview' => 'Show the preview button. Applicable if Markdown is enabled.',
      'fileAccept' => 'Quais tipos de arquivo aceitar. É possível adicionar itens personalizados.',
      'barcodeLastChar' => 'Para o tipo EAN-13',
      'maxFileSize' => 'Se vazio ou 0, não há limite.',
      'conversionDisabled' => 'A ação de conversão de moeda não será aplicada a este campo.',
      'pattern' => 'A regular expression to check a field value against. Define an expression or select a predefined one.',
      'options' => 'A list of possible values and their labels.',
      'itemsEditable' => 'Items can be edited. Applicable only if no options are specified.',
      'optionsArray' => 'A list of possible values and their labels. If empty, the field will allow entering custom values.',
      'maxCount' => 'Maximum number of items allowed to be selected.',
      'displayAsList' => 'Each item in a new line.',
      'optionsVarchar' => 'A list of autocomplete values.',
      'linkReadOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.

It will also disable the ability to create a related record from relationship panels.',
      'relateOnImport' => 'When importing with this field, it will automatically relate a record with a matching foreign record. Use this functionality only if the foreign field is considered as unique.'
    ],
    'fieldParts' => [
      'address' => [
        'street' => 'Rua',
        'city' => 'Cidade',
        'state' => 'Estado',
        'country' => 'País',
        'postalCode' => 'Código Postal',
        'map' => 'Mapa'
      ],
      'personName' => [
        'salutation' => 'Saudação',
        'first' => 'Primeiro',
        'middle' => 'Meio',
        'last' => 'Último'
      ],
      'currency' => [
        'converted' => '(Convertido)',
        'currency' => '(Moeda)'
      ],
      'datetimeOptional' => [
        'date' => 'Data'
      ]
    ],
    'fieldInfo' => [
      'varchar' => 'Texto de linha única.',
      'decimal' => 'A decimal number with fixed-point precision.',
      'enum' => 'Selectbox, só um valor pode ser selecionado.',
      'text' => 'Um texto de várias linhas com suporte a markdown.',
      'date' => 'Data sem hora.',
      'datetime' => 'Data e hora',
      'currency' => 'Um valor de moeda. Um número flutuante com um código de moeda.',
      'int' => 'Um número inteiro.',
      'float' => 'Um número com casa decimal.',
      'bool' => 'Um checkbox. Dois valores possíveis: verdadeiro e falso.',
      'multiEnum' => 'Uma lista de valores, vários valores podem ser selecionados. A lista está ordenada.',
      'checklist' => 'Uma lista de checkboxes.',
      'array' => 'A list of values, similar to Multi-Enum field.',
      'address' => 'Um endereço com rua, cidade, estado, código postal e país.',
      'url' => 'Para armazenar links.',
      'urlMultiple' => 'Multiple links.',
      'wysiwyg' => 'Um texto com suporte HTML.',
      'file' => 'Para upload de arquivos.',
      'image' => 'Para upload de imagens.',
      'attachmentMultiple' => 'Permite upload de vários arquivos.',
      'number' => 'Um número de incremento automático do tipo de string com um possível prefixo e comprimento determinado.',
      'autoincrement' => 'Um número inteiro de incremento automático gerado somente leitura.',
      'barcode' => 'Um código de barras. Pode ser impresso em PDF.',
      'email' => 'A set of email addresses with their parameters: Opted-out, Invalid, Primary.',
      'phone' => 'A set of phone numbers with their parameters: Type, Opted-out, Invalid, Primary.',
      'foreign' => 'Um campo de um registro relacionado. Somente leitura.',
      'link' => 'A record related through Belongs-To (many-to-one or one-to-one) relationship.',
      'linkParent' => 'A record related through Belongs-To-Parent relationship. Can be of different entity types.',
      'linkMultiple' => 'Um conjunto de registros relacionados por meio do relacionamento Has-Many (many-to-many ou one-to-manys). Nem todos os relacionamentos têm seus campos de links múltiplos. Somente aqueles fazem isso, onde o(s) parâmetro(s) Link-Multiple está(ão) habilitado(s).'
    ],
    'messages' => [
      'fieldCreatedAddToLayouts' => 'Field has been created. Now, you can add it to [layouts]({link})',
      'confirmRemove' => 'Are you sure you want to remove the *{field}* field?

Field removal does not remove data from the database. Data from the database will be removed if you run hard rebuild.',
      'fieldNameIsNotAllowed' => 'Field name \'{field}\' is not allowed.',
      'fieldAlreadyExists' => 'Field \'{field}\' already exists in \'{entityType}\'.',
      'linkWithSameNameAlreadyExists' => 'Link with the name \'{field}\' already exists in \'{entityType}\'.',
      'namingFieldLinkConflict' => 'Name \'{field}\' conflicts with link.'
    ],
    'otherFields' => [
      'attributes' => 'Attributes'
    ]
  ],
  'Formula' => [
    'labels' => [
      'Check Syntax' => 'Verificar Sintaxe',
      'Run' => 'Execute'
    ],
    'fields' => [
      'target' => 'Alvo',
      'targetType' => 'Tipo do Alvo ',
      'script' => 'Script',
      'output' => 'Saída',
      'error' => 'Erro'
    ],
    'messages' => [
      'runSuccess' => 'Executado com sucesso.',
      'runError' => 'Erro.',
      'checkSyntaxSuccess' => 'Sintaxe está correta.',
      'checkSyntaxError' => 'Erro de sintaxe.',
      'emptyScript' => 'Script está vazio.'
    ],
    'tooltips' => [
      'output' => 'Imprima valores com a função `output\\printLine`.'
    ]
  ],
  'Global' => [
    'scopeNames' => [
      'Note' => 'Note',
      'Email' => 'E-mail',
      'User' => 'Corretor',
      'Team' => 'Time',
      'Role' => 'Regra',
      'EmailTemplate' => 'Template de E-mail',
      'EmailTemplateCategory' => 'Categorias de Modelos de Email',
      'EmailAccount' => 'Conta de e-mail',
      'EmailAccountScope' => 'Conta de e-mail',
      'OutboundEmail' => 'E-mail de Saída',
      'ScheduledJob' => 'Tarefa Agendada',
      'ExternalAccount' => 'Conta externa',
      'Extension' => 'Extensão',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'E-mail de Entrada',
      'Stream' => 'Fluxo',
      'Import' => 'Importar',
      'ImportError' => 'Import Error',
      'Template' => 'PDF Template',
      'Job' => 'Tarefas',
      'EmailFilter' => 'Filtro de Email',
      'Portal' => 'Portal',
      'PortalRole' => 'Regra de Portal',
      'Attachment' => 'Anexo',
      'EmailFolder' => 'Pasta de Email',
      'GroupEmailFolder' => 'Group Email Folder',
      'PortalUser' => 'Usuário do Portal',
      'ApiUser' => 'API de Usuário',
      'ScheduledJobLogRecord' => 'Registro de Log de Trabalho Agendado',
      'PasswordChangeRequest' => 'Solicitação de Alteração de Senha',
      'ActionHistoryRecord' => 'Registro de Histórico de Ações',
      'AuthToken' => 'Token de Autenticação',
      'UniqueId' => 'ID Único',
      'LastViewed' => 'Visto por Último',
      'Settings' => 'Configurações',
      'FieldManager' => 'Gerenciar Campo',
      'Integration' => 'Integração',
      'LayoutManager' => 'Gerenciar Layout',
      'EntityManager' => 'Gerenciar de Entidade',
      'Export' => 'Exportar',
      'DynamicLogic' => 'Lógica Dinâmica',
      'DashletOptions' => 'Opções do painel',
      'Admin' => 'Admin',
      'Global' => 'Global',
      'Preferences' => 'Preferências',
      'EmailAddress' => 'Endereço de Email',
      'PhoneNumber' => 'Número de Telefone',
      'AppLogRecord' => 'App Log Record',
      'AuthLogRecord' => 'Registro de Log de Autorização',
      'AuthFailLogRecord' => 'Registro de Log de Falha de Autenticação',
      'LeadCapture' => 'Ponto de Entrada de Captura de Leads',
      'LeadCaptureLogRecord' => 'Registro de Log de Captura de Leads',
      'ArrayValue' => 'Valor em Array',
      'DashboardTemplate' => 'Modelo de Dashboard',
      'Currency' => 'Moeda',
      'LayoutSet' => 'Conjunto de layout',
      'Webhook' => 'Webhook',
      'WebhookQueueItem' => 'Webhook Queue Item',
      'WebhookEventQueueItem' => 'Webhook Event Queue Item',
      'Mass Action' => 'Ação em massa',
      'WorkingTimeCalendar' => 'Working Time Calendar',
      'WorkingTimeRange' => 'Working Time Exception',
      'AuthenticationProvider' => 'Authentication Provider',
      'GlobalStream' => 'Global Stream',
      'AddressCountry' => 'Address Country',
      'AppSecret' => 'App Secret',
      'OAuthProvider' => 'OAuth Provider',
      'OAuthAccount' => 'OAuth Account',
      'OpenApi' => 'OpenAPI',
      'CurrencyRecord' => 'Currency Record',
      'CurrencyRecordRate' => 'Currency Rate',
      'Account' => 'Conta',
      'Contact' => 'Contato',
      'Lead' => 'Lead',
      'Target' => 'Alvo',
      'Opportunity' => 'Negociação',
      'Meeting' => 'Reunião',
      'Calendar' => 'Calendário',
      'Call' => 'Ligação',
      'Task' => 'Tarefa',
      'Case' => 'Atendimento',
      'Document' => 'Documento',
      'DocumentFolder' => 'Pasta de Documentos',
      'Campaign' => 'Campanha',
      'TargetList' => 'Lista de Alvos',
      'MassEmail' => 'E-mail em Massa',
      'EmailQueueItem' => 'Item da Fila de Email',
      'CampaignTrackingUrl' => 'URL de Rastreamento',
      'Activities' => 'Atividades',
      'KnowledgeBaseArticle' => 'Artigo da Base de Conhecimento',
      'KnowledgeBaseCategory' => 'Categoria da Base de Conhecimento',
      'CampaignLogRecord' => 'Registro de Log de Campanha',
      'TargetListCategory' => 'Target List Category',
      'RealEstateProperty' => 'Imóvel',
      'RealEstateRequest' => 'Solicitação',
      'RealEstateLocation' => 'Location',
      'CCondominium' => 'Condomínio'
    ],
    'scopeNamesPlural' => [
      'Note' => 'Notes',
      'Email' => 'E-mails',
      'User' => 'Corretores',
      'Team' => 'Times',
      'Role' => 'Regras',
      'EmailTemplate' => 'Templates de E-mail',
      'EmailTemplateCategory' => 'Categorias de Modelos de Email',
      'EmailAccount' => 'Contas de e-mail',
      'EmailAccountScope' => 'Contas de e-mail',
      'OutboundEmail' => 'E-mails de Saída',
      'ScheduledJob' => 'Tarefas Agendadas',
      'ExternalAccount' => 'Contas externas',
      'Extension' => 'Extensões',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'E-mails de Entrada',
      'EmailAddress' => 'Endereços de E-mail',
      'PhoneNumber' => 'Números de Telefone',
      'Stream' => 'Fluxo',
      'Import' => 'Importar',
      'ImportError' => 'Import Errors',
      'Template' => 'PDF Templates',
      'Job' => 'Tarefas',
      'EmailFilter' => 'Filtros de Email',
      'Portal' => 'Portais',
      'PortalRole' => 'Regras de Portal',
      'Attachment' => 'Anexos',
      'EmailFolder' => 'Pastas de Email',
      'GroupEmailFolder' => 'Group Email Folders',
      'PortalUser' => 'Usuários do Portal',
      'ApiUser' => 'API de Usuários',
      'ScheduledJobLogRecord' => 'Registros de Log de Trabalho Agendado',
      'PasswordChangeRequest' => 'Solicitações de alteração de senha',
      'ActionHistoryRecord' => 'Histórico de Ações',
      'AuthToken' => 'Tokens de Autenticação',
      'UniqueId' => 'IDs Únicos',
      'LastViewed' => 'Visto por Último',
      'AppLogRecord' => 'App Log',
      'AuthLogRecord' => 'Log de Autorização',
      'AuthFailLogRecord' => 'Log de Falha de Autenticação',
      'LeadCapture' => 'Captura de Lead',
      'LeadCaptureLogRecord' => 'Log de Captura de Lead',
      'ArrayValue' => 'Valores em Array',
      'DashboardTemplate' => 'Modelos de Dashboard',
      'Currency' => 'Moeda',
      'LayoutSet' => 'Conjunto de Layouts',
      'Webhook' => 'Webhooks',
      'WebhookQueueItem' => 'Webhook Queue Items',
      'WebhookEventQueueItem' => 'Webhook Event Queue Items',
      'WorkingTimeCalendar' => 'Working Time Calendars',
      'WorkingTimeRange' => 'Working Time Exceptions',
      'AuthenticationProvider' => 'Authentication Providers',
      'GlobalStream' => 'Global Stream',
      'AddressCountry' => 'Address Countries',
      'AppSecret' => 'App Secrets',
      'OAuthProvider' => 'OAuth Providers',
      'OAuthAccount' => 'OAuth Accounts',
      'OpenApi' => 'OpenAPI',
      'CurrencyRecord' => 'Currencies',
      'CurrencyRecordRate' => 'Currency Rates',
      'Account' => 'Contas',
      'Contact' => 'Contatos',
      'Lead' => 'Leads',
      'Target' => 'Alvos',
      'Opportunity' => 'Negociações',
      'Meeting' => 'Reuniões',
      'Calendar' => 'Calendário',
      'Call' => 'Ligações',
      'Task' => 'Tarefas',
      'Case' => 'Atendimentos',
      'Document' => 'Documentos',
      'DocumentFolder' => 'Pastas de Documentos ',
      'Campaign' => 'Campanhas',
      'TargetList' => 'Listas de Alvo',
      'MassEmail' => 'E-mails em Massa',
      'EmailQueueItem' => 'Itens da Fila de Email',
      'CampaignTrackingUrl' => 'URLs de Rastreamento',
      'Activities' => 'Atividades',
      'KnowledgeBaseArticle' => 'Base de Conhecimento',
      'KnowledgeBaseCategory' => 'Categorias da base de conhecimento',
      'CampaignLogRecord' => 'Registros de Log de Campanha',
      'TargetListCategory' => 'Target List Categories',
      'RealEstateProperty' => 'Imóveis',
      'RealEstateRequest' => 'Solicitações',
      'RealEstateLocation' => 'Locations',
      'CCondominium' => 'Condomínios'
    ],
    'labels' => [
      'Previous Page' => 'Previous Page',
      'Next Page' => 'Next Page',
      'First Page' => 'First Page',
      'Last Page' => 'Last Page',
      'Page' => 'Page',
      'Sort' => 'Sort',
      'Column Resize' => 'Column Resize',
      'Misc' => 'Misc',
      'General' => 'General',
      'Merge' => 'Mesclar',
      'None' => 'Nenhum',
      'Home' => 'Início',
      'by' => 'por',
      'Proceed' => 'Prosseguir',
      'Saved' => 'Salvo',
      'Error' => 'Erro',
      'Select' => 'Selecionar',
      'Not valid' => 'Inválido',
      'Please wait...' => 'Aguarde...',
      'Please wait' => 'Aguarde',
      'Attached' => 'Anexado',
      'Loading...' => 'Carregando...',
      'Uploading...' => 'Enviando...',
      'Sending...' => 'Enviando...',
      'Send' => 'Send',
      'Merged' => 'Mesclado',
      'Removed' => 'Removido',
      'Posted' => 'Postado',
      'Linked' => 'Relacionado',
      'Unlinked' => 'Relacionamento removido',
      'Done' => 'Feito',
      'Access denied' => 'Acesso negado',
      'Not found' => 'Não encontrado',
      'Internal server error' => 'Internal server error',
      'Access' => 'Acesso',
      'Timeout' => 'Timeout',
      'No internet' => 'No internet',
      'Network error' => 'Network error',
      'Are you sure?' => 'Você confirma?',
      'Record has been removed' => 'Registro removido',
      'Wrong username/password' => 'Usuário/senha incorretos',
      'Post cannot be empty' => 'A postagem não pode estar vazia',
      'Username can not be empty!' => 'O nome de usuário não pode estar vazio!',
      'Cache is not enabled' => 'O cache não está habilitado',
      'Cache has been cleared' => 'Cache limpo',
      'Rebuild has been done' => 'Reconstrução concluída',
      'Return to Application' => 'Retornar para Aplicação',
      'Modified' => 'Modificado',
      'Created' => 'Criado',
      'Create' => 'Criar',
      'create' => 'criar',
      'Scheduled' => 'Scheduled',
      'Overview' => 'Visão Geral',
      'Details' => 'Detalhes',
      'Add Field' => 'Adicionar Campo',
      'Add Dashlet' => 'Adicionar Painel',
      'Filter' => 'Filtro',
      'Edit Dashboard' => 'Editar Dashboard',
      'Add' => 'Adicionar',
      'Add Item' => 'Adicionar Item',
      'Reset' => 'Resetar',
      'Menu' => 'Menu',
      'More' => 'Mais',
      'Search' => 'Busca',
      'Only My' => 'Apenas meus',
      'Open' => 'Aberto',
      'Admin' => 'Admin',
      'About' => 'Sobre',
      'Refresh' => 'Recarregar',
      'Remove' => 'Remover',
      'Restore' => 'Restaurar',
      'Options' => 'Opções',
      'Username' => 'Usuário',
      'Password' => 'Senha',
      'Login' => 'Login',
      'Log Out' => 'Sair',
      'Log in' => 'Log in',
      'Log in as' => 'Log in as',
      'Sign in' => 'Sign in',
      'Preferences' => 'Preferências',
      'State' => 'Estado',
      'Street' => 'Logradouro',
      'Country' => 'País',
      'City' => 'Cidade',
      'PostalCode' => 'CEP',
      'Star' => 'Star',
      'Unstar' => 'Unstar',
      'Starred' => 'Starred',
      'Followed' => 'Seguido',
      'Follow' => 'Seguir',
      'Followers' => 'Seguidores',
      'Clear Local Cache' => 'Limpar Cache Local',
      'Actions' => 'Ações',
      'Delete' => 'Excluir',
      'Update' => 'Atualizar',
      'Save' => 'Salvar',
      'Edit' => 'Editar',
      'View' => 'Ver',
      'Cancel' => 'Cancelar',
      'Apply' => 'Aplicar',
      'Unlink' => 'Remover ligação',
      'Mass Update' => 'Atualização em Massa',
      'Export' => 'Exportar',
      'No Data' => 'Sem dados',
      'No Access' => 'Sem acesso',
      'All' => 'Tudo',
      'Active' => 'Ativo',
      'Inactive' => 'Inativo',
      'Write your comment here' => 'Escreva seu comentário aqui',
      'Post' => 'Postar',
      'Stream' => 'Fluxo',
      'Show more' => 'Exibir mais',
      'Dashlet Options' => 'Opções do Painel',
      'Full Form' => 'Formulário Completo',
      'Insert' => 'Inserir',
      'Person' => 'Pessoa',
      'First Name' => 'Nome',
      'Last Name' => 'Sobrenome',
      'Middle Name' => 'Nome do Meio',
      'Original' => 'Original',
      'You' => 'Você',
      'you' => 'você',
      'change' => 'modificar',
      'Change' => 'Modificar',
      'Primary' => 'Primário',
      'Save Filter' => 'Salvar Filtro',
      'Remove Filter' => 'Remove Filter',
      'Ready' => 'Ready',
      'Administration' => 'Administração',
      'Run Import' => 'Executar Importação',
      'Duplicate' => 'Duplicar',
      'Notifications' => 'Notificações',
      'Mark all read' => 'Marcar tudo como lido',
      'See more' => 'Ver mais',
      'Today' => 'Hoje',
      'Tomorrow' => 'Amanhã',
      'Yesterday' => 'Ontem',
      'Now' => 'Now',
      'Submit' => 'Enviar',
      'Close' => 'Fechar',
      'Yes' => 'Sim',
      'No' => 'Não',
      'Select All Results' => 'Selecionar todos',
      'Value' => 'Valor',
      'Edit Item' => 'Edit Item',
      'Current version' => 'Versão atual',
      'List View' => 'Visualização em Lista',
      'Tree View' => 'Visão em árvore',
      'Unlink All' => 'Desmarcar Todos',
      'Total' => 'Total',
      'Print' => 'Print',
      'Print to PDF' => 'Imprimir em PDF',
      'Default' => 'Padrão',
      'Number' => 'Número',
      'From' => 'De',
      'To' => 'Para',
      'Create Post' => 'Criar Post',
      'Previous Entry' => 'Entrada Anterior',
      'Next Entry' => 'Próxima Entrada',
      'View List' => 'Visão em lista',
      'Attach File' => 'Anexar Arquivo',
      'Skip' => 'Pular',
      'Attribute' => 'Atributo',
      'Function' => 'Função',
      'Self-Assign' => 'Self-Assign',
      'Self-Assigned' => 'Self-Assigned',
      'Expand' => 'Expandir',
      'Collapse' => 'Recolher',
      'Expanded' => 'Expanded',
      'Collapsed' => 'Collapsed',
      'Top Level' => 'Top Level',
      'New notifications' => 'Novas notificações',
      'Manage Categories' => 'Gerenciar Categorias',
      'Manage Folders' => 'Gerenciar Pastas',
      'Convert to' => 'Converter para',
      'View Personal Data' => 'Ver dados pessoais',
      'Personal Data' => 'Dados Pessoais',
      'Erase' => 'Apagar',
      'View Followers' => 'Ver Seguidores',
      'Convert Currency' => 'Converter Moeda',
      'View on Map' => 'Ver no Mapa',
      'Preview' => 'Pré-visualização',
      'Move Over' => 'Mover Sobre',
      'Up' => 'Acima',
      'Save & Continue Editing' => 'Salvar e Continuar Editando',
      'Save & New' => 'Salvar e Novo',
      'Field' => 'Campo',
      'Fields' => 'Fields',
      'Resolution' => 'Resolução',
      'Resolve Conflict' => 'Resolver Conflito',
      'Download' => 'Download',
      'Global Search' => 'Global Search',
      'Navigation Panel' => 'Show Navigation Panel',
      'Copy to Clipboard' => 'Copy to Clipboard',
      'Copied to clipboard' => 'Copied to clipboard',
      'Audit Log' => 'Audit Log',
      'View Audit Log' => 'View Audit Log',
      'View User Access' => 'View User Access',
      'Reacted' => 'Reacted',
      'Reaction Removed' => 'Reaction Removed',
      'Reactions' => 'Reactions',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Scheduler' => 'Agendador',
      'Create InboundEmail' => 'Criar E-mail de Entrada',
      'Activities' => 'Atividades',
      'History' => 'Histórico',
      'Attendees' => 'participantes',
      'Schedule Meeting' => 'Agendar Reunião',
      'Schedule Call' => 'Agendar Ligação',
      'Compose Email' => 'Compor E-mail',
      'Log Meeting' => 'Logar Reunião',
      'Log Call' => 'Logar Ligação',
      'Archive Email' => 'Arquivar E-mail',
      'Create Task' => 'Criar Tarefa',
      'Tasks' => 'Tarefas',
      'Merging...' => 'Mesclando...',
      'Removing...' => 'Removendo...',
      'Unlinking...' => 'Removendo relacionamento...',
      'Posting...' => 'Postando...',
      'Saving...' => 'Salvando...'
    ],
    'messages' => [
      'checkLogsForDetails' => 'Check logs for details.',
      'pleaseWait' => 'Por favor aguarde...',
      'loading' => 'Carregando...',
      'saving' => 'Salvando...',
      'confirmLeaveOutMessage' => 'Você tem certeza que quer abandonar o formulário?',
      'notModified' => 'Você não modificou o registro',
      'duplicate' => 'O registro que você está criando parece estar duplicado',
      'dropToAttach' => 'Solte para anexar',
      'pageNumberIsOutOfBound' => 'Page number is out of bound',
      'fieldUrlExceedsMaxLength' => 'Encoded URL exceeds max length of {maxLength}',
      'fieldNotMatchingPattern' => '{field} does not match the pattern `{pattern}`',
      'fieldNotMatchingPattern$noBadCharacters' => '{field} contains not allowed characters',
      'fieldNotMatchingPattern$noAsciiSpecialCharacters' => '{field} should not contain ASCII special characters',
      'fieldNotMatchingPattern$latinLetters' => '{field} can contain only latin letters',
      'fieldNotMatchingPattern$latinLettersDigits' => '{field} can contain only latin letters and digits',
      'fieldNotMatchingPattern$latinLettersDigitsWhitespace' => '{field} can contain only latin letters, digits and whitespace',
      'fieldNotMatchingPattern$latinLettersWhitespace' => '{field} can contain only latin letters and whitespace',
      'fieldNotMatchingPattern$digits' => '{field} can contain only digits',
      'fieldNotMatchingPattern$uriOptionalProtocol' => '{field} must be a valid URL',
      'fieldNotMatchingPattern$phoneNumberLoose' => '{field} contains characters not allowed in a phone number',
      'fieldInvalid' => '{field} é inválido',
      'fieldIsRequired' => '{field} é obrigatório',
      'fieldPhoneInvalid' => '{field} is invalid',
      'fieldPhoneInvalidCode' => 'Invalid country code',
      'fieldPhoneTooShort' => '{field} is too short',
      'fieldPhoneTooLong' => '{field} is too long',
      'fieldPhoneInvalidCharacters' => 'Only digits, latin letters and characters `-+_@:#().` are allowed',
      'fieldPhoneExtensionTooLong' => 'Extension should not be longer than {maxLength}',
      'fieldShouldBeEmail' => '{field} deve ser um e-mail válido',
      'fieldShouldBeFloat' => '{field} deve ser um float válido',
      'fieldShouldBeInt' => '{field} deve ser um valor inteiro',
      'fieldShouldBeNumber' => '{field} should be a valid number',
      'fieldShouldBeDate' => '{field} deve ser uma data válida',
      'fieldShouldBeDatetime' => '{field} deve ser uma data/hora válida',
      'fieldShouldAfter' => '{field} deve ser depois de {otherField}',
      'fieldShouldBefore' => '{field} deve ser antes de {otherField}',
      'fieldShouldBeBetween' => '{field} deve estar entre {min} e {max}',
      'fieldShouldBeLess' => '{field} deve ser menos que {value}',
      'fieldShouldBeGreater' => '{field} deve ser maior que {value}',
      'fieldBadPasswordConfirm' => '{field} confirmado impropriamente',
      'fieldMaxFileSizeError' => 'O arquivo não deve exceder {max} Mb',
      'fieldValueDuplicate' => 'Valor Duplicado',
      'fieldIsUploading' => 'Upload em andamento',
      'fieldExceedsMaxCount' => 'A contagem excede o máximo permitido {maxCount}',
      'barcodeInvalid' => '{field} is not valid {type}',
      'arrayItemMaxLength' => 'Item shouldn\'t be longer than {max} characters',
      'arrayInputNotEmpty' => 'Item is entered but not added',
      'resetPreferencesDone' => 'As preferências foram redefinidas para o padrão',
      'confirmation' => 'Você tem certeza?',
      'unlinkAllConfirmation' => 'Você tem certeza que quer desvincular todos os registros relacionados?',
      'resetPreferencesConfirmation' => 'Você gostaria mesmo de redefinir as preferências para o padrão?',
      'removeRecordConfirmation' => 'Você gostaria mesmo de remover este registro?',
      'unlinkRecordConfirmation' => 'Você gostaria mesmo de desfazer este relacionamento?',
      'removeSelectedRecordsConfirmation' => 'Você gostaria mesmo de remover os registros selecionados?',
      'unlinkSelectedRecordsConfirmation' => 'Tem certeza de que deseja desvincular os registros selecionados?',
      'massUpdateResult' => '{count} registros foram atualizados',
      'massUpdateResultSingle' => '{count} registro foi atualizado',
      'recalculateFormulaConfirmation' => 'Tem certeza de que deseja recalcular a fórmula para os registros selecionados?',
      'noRecordsUpdated' => 'Nenhum registro foi atualizado',
      'massRemoveResult' => '{count} registros foram removidos',
      'massRemoveResultSingle' => '{count} registro foi removido',
      'noRecordsRemoved' => 'Nenhum registro foi removido',
      'changesLossConfirmation' => 'Unsaved changes will be lost. Are you sure?',
      'clickToRefresh' => 'Clique para atualizar',
      'writeYourCommentHere' => 'Escreva seu comentário aqui',
      'writeMessageToUser' => 'Escreva uma mensagem para {user}',
      'writeMessageToSelf' => 'Escreva uma mensagem no seu stream',
      'typeAndPressEnter' => 'Digite & pressione enter',
      'checkForNewNotifications' => 'Verificar por novas notificações',
      'checkForNewNotes' => 'Verifique se há atualizações de stream',
      'internalPost' => 'A postagem será vista apenas por usuários internos',
      'internalPostTitle' => 'A postagem é vista apenas por usuários internos',
      'done' => 'Feito',
      'notUpdated' => 'Não atualizado',
      'confirmMassUpdate' => 'Are you sure you want to mass-update selected records?',
      'confirmMassFollow' => 'Tem certeza de que deseja seguir os registros selecionados?',
      'confirmMassUnfollow' => 'Tem certeza de que deseja deixar de seguir os registros selecionados?',
      'massFollowResult' => '{count} registros agora são seguidos',
      'massUnfollowResult' => '{count} registros agora não são seguidos',
      'massFollowResultSingle' => '{count} registro agora é seguido',
      'massUnfollowResultSingle' => '{count} registro agora não é seguido',
      'massFollowZeroResult' => 'Nada foi seguido',
      'massUnfollowZeroResult' => 'Nada deixou de ser seguido',
      'erasePersonalDataConfirmation' => 'Os campos marcados serão apagados permanentemente. Tem certeza?',
      'maintenanceModeError' => 'The application currently is in maintenance mode.',
      'maintenanceMode' => 'O aplicativo está atualmente em modo de manutenção. Somente usuários administradores têm acesso.

O modo de manutenção pode ser desabilitado em Administração → Configurações.',
      'resolveSaveConflict' => 'O registro foi modificado. Você precisa resolver o conflito antes de salvar o registro.',
      'massPrintPdfMaxCountError' => 'Não é possível imprimir mais de {maxCount} registros.',
      'massActionProcessed' => 'Ação em massa foi processada.',
      'validationFailure' => 'Backend validation failure.

Field: `{field}`
Validation: `{type}`',
      'extensionLicenseInvalid' => 'Invalid \'{name}\' extension license.',
      'extensionLicenseExpired' => 'The \'{name}\' extension license subscription has expired.',
      'extensionLicenseSoftExpired' => 'The \'{name}\' extension license subscription has expired.',
      'confirmAppRefresh' => 'The application has been updated. It is recommended to refresh the page to ensure the proper functioning.',
      'loggedOutLeaveOut' => 'Logged out. The session is inactive. You may lose unsaved form data after page refresh. You may need to make a copy.',
      'noAccessToRecord' => 'Operation requires `{action}` access to record.',
      'noAccessToForeignRecord' => 'Operation requires `{action}` access to foreign record.',
      'noLinkAccess' => 'Can\'t relate with {foreignEntityType} record through the link \'{link}\'. No access.',
      'cannotUnrelateRequiredLink' => 'Can\'t unrelate required link.',
      'cannotRelateNonExisting' => 'Can\'t relate with non-existing {foreignEntityType} record.',
      'cannotRelateForbidden' => 'Can\'t relate with forbidden {foreignEntityType} record. `{action}` access required.',
      'cannotRelateForbiddenLink' => 'No access to link \'{link}\'.',
      'cannotLinkAlreadyLinked' => 'Cannot link an already linked record.',
      'error404' => 'The url you requested can\'t be handled.',
      'error403' => 'You don\'t have access to this area.',
      'emptyMassUpdate' => 'No fields available for Mass Update.',
      'attemptIntervalFailure' => 'The operation is not allowed during a specific time interval. Wait for some time before the next attempt.',
      'confirmRestoreFromAudit' => 'The previous values will be set in a form. Then you can save the record to restore the previous values.',
      'starsLimitExceeded' => 'The number of stars exceeded the limit.',
      'select2OrMoreRecords' => 'Select 2 or more records',
      'selectNotMoreThanNumberRecords' => 'Select not more than {number} records',
      'selectAtLeastOneRecord' => 'Select at least one record',
      'duplicateConflict' => 'A record already exists.',
      'cannotRemoveCategoryWithChildCategory' => 'Cannot remove a category that has a child category.',
      'cannotRemoveNotEmptyCategory' => 'Cannot remove a non-empty category.',
      'sameRecordIsAlreadyBeingEdited' => 'The record is already being edited.',
      'posting' => 'Postando...'
    ],
    'boolFilters' => [
      'onlyMy' => 'Meus',
      'onlyMyTeam' => 'Meu Time',
      'followed' => 'Seguido',
      'shared' => 'Shared'
    ],
    'presetFilters' => [
      'followed' => 'Seguido',
      'all' => 'Todos',
      'starred' => 'Starred',
      'active' => 'Active'
    ],
    'massActions' => [
      'delete' => 'Delete',
      'remove' => 'Remover',
      'merge' => 'Mesclar',
      'update' => 'Atualizar',
      'massUpdate' => 'Atualização em Massa',
      'unlink' => 'Desvincular',
      'export' => 'Exportar',
      'follow' => 'Seguir',
      'unfollow' => 'Deixar de Seguir',
      'convertCurrency' => 'Converter Moeda',
      'recalculateFormula' => 'Recalcular Fórmula',
      'printPdf' => 'Imprimir para PDF'
    ],
    'fields' => [
      'name' => 'Nome',
      'firstName' => 'Primeiro Nome',
      'lastName' => 'Sobrenome',
      'middleName' => 'Nome do Meio',
      'salutationName' => 'Saudação',
      'assignedUser' => 'Usuário Designado',
      'assignedUsers' => 'Usuários Designados',
      'collaborators' => 'Collaborators',
      'emailAddress' => 'E-mail',
      'emailAddressData' => 'Dados de Endereço de Email',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'emailAddressIsInvalid' => 'Email Address is Invalid',
      'assignedUserName' => 'Nome de Usuário Designado',
      'teams' => 'Times',
      'users' => 'Users',
      'createdAt' => 'Criado em',
      'modifiedAt' => 'Modificado em',
      'createdBy' => 'Criado por',
      'modifiedBy' => 'Modificado por',
      'streamUpdatedAt' => 'Stream Updated At',
      'description' => 'Descrição',
      'address' => 'Endereço',
      'phoneNumber' => 'Telefone',
      'phoneNumberMobile' => 'Telefone (Móvel)',
      'phoneNumberHome' => 'Telefone (Casa)',
      'phoneNumberFax' => 'Telefone (Fax)',
      'phoneNumberOffice' => 'Telefone (Escritório)',
      'phoneNumberOther' => 'Telefone (Outro)',
      'phoneNumberData' => 'Dados do Número de Telefone',
      'phoneNumberIsOptedOut' => 'Phone Number is Opted-Out',
      'phoneNumberIsInvalid' => 'Phone Number is Invalid',
      'order' => 'Pedido',
      'parent' => 'Pai',
      'children' => 'Criança',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Tipo',
      'names' => 'Nomes',
      'types' => 'Tipos',
      'targetListIsOptedOut' => 'É Cancelado (Lista de Alvo)',
      'childList' => 'Child List',
      'billingAddressCity' => 'Cidade',
      'billingAddressCountry' => 'País',
      'billingAddressPostalCode' => 'CEP',
      'billingAddressState' => 'Estado',
      'billingAddressStreet' => 'Logradouro',
      'billingAddressMap' => 'Mapa',
      'addressCity' => 'Cidade',
      'addressStreet' => 'Logradouro',
      'addressCountry' => 'País',
      'addressState' => 'Estado',
      'addressPostalCode' => 'CEP',
      'addressMap' => 'Mapa',
      'shippingAddressCity' => 'Cidade (Envio)',
      'shippingAddressStreet' => 'Logradouro (Envio)',
      'shippingAddressCountry' => 'País (Envio)',
      'shippingAddressState' => 'Estado (Envio)',
      'shippingAddressPostalCode' => 'CEP (Envio)',
      'shippingAddressMap' => 'Mapa (Envio)'
    ],
    'links' => [
      'assignedUser' => 'Corretor Designado',
      'assignedUsers' => 'Assigned Users',
      'collaborators' => 'Collaborators',
      'createdBy' => 'Criado por',
      'modifiedBy' => 'Modificado por',
      'team' => 'Time',
      'roles' => 'Regras',
      'teams' => 'Times',
      'users' => 'Usuários',
      'parent' => 'Pai',
      'children' => 'Criança',
      'contacts' => 'Contatos',
      'opportunities' => 'Oportunidades',
      'leads' => 'Leads',
      'meetings' => 'Reuniões',
      'calls' => 'Ligações',
      'tasks' => 'Tarefas',
      'emails' => 'E-mails',
      'accounts' => 'Contas',
      'cases' => 'Atendimentos',
      'documents' => 'Documentos',
      'account' => 'Conta',
      'opportunity' => 'Oportunidade',
      'contact' => 'Contato'
    ],
    'dashlets' => [
      'Stream' => 'Fluxo',
      'Emails' => 'Minha Caixa de Entrada',
      'Iframe' => 'Iframe',
      'Records' => 'Lista de Registro',
      'Memo' => 'Memo',
      'Leads' => 'Meus Leads',
      'Opportunities' => 'Minhas Oportunidades',
      'Tasks' => 'Minhas Tarefas',
      'Cases' => 'Meus Atendimentos',
      'Calendar' => 'Calendário',
      'Calls' => 'Minhas Ligações',
      'Meetings' => 'Minhas Reuniões',
      'OpportunitiesByStage' => 'Oportunidades por Estágio',
      'OpportunitiesByLeadSource' => 'Oportunidades por Origem do Lead',
      'SalesByMonth' => 'Vendas Por Mês',
      'SalesPipeline' => 'Funil de Vendas',
      'Activities' => 'Minhas Atividades',
      'Properties' => 'My Properties',
      'Requests' => 'My Requests'
    ],
    'notificationMessages' => [
      'assign' => '{entityType} {entity} foi atribuído à você',
      'emailReceived' => 'Email recebido de {from}',
      'entityRemoved' => '{user} removido {entityType} {entity}',
      'emailInbox' => '{user} added email {entity} to your inbox',
      'userPostReaction' => '{user} reacted to your {post}',
      'addedToCollaborators' => '{user} added you as a collaborator to {entityType} {entity}',
      'userPostInParentReaction' => '{user} reacted to your {post} in {entityType} {entity}',
      'eventAttendee' => '{user} added you to {entityType} {entity}'
    ],
    'streamMessages' => [
      'post' => '{user} postou em {entityType} {entity}',
      'attach' => '{user} anexou em {entityType} {entity}',
      'status' => '{user} atualizou {field} em {entityType} {entity}',
      'update' => '{user} atualizou {entityType} {entity}',
      'postTargetTeam' => '{user} postou para o time {target}',
      'postTargetTeams' => '{user} postou para os times {target}',
      'postTargetPortal' => '{user} postou para portal {target}',
      'postTargetPortals' => '{user} postou para os portais {target}',
      'postTarget' => '{user} postou para {target}',
      'postTargetYou' => '{user} postou para você',
      'postTargetYouAndOthers' => '{user} postou para {target} e para você',
      'postTargetAll' => '{user} postou para todos',
      'postTargetSelf' => '{user} auto-postado',
      'postTargetSelfAndOthers' => '{user} postaram em {target} neles mesmos',
      'mentionInPost' => '{user} mencionado {mentioned} em {entityType} {entity}',
      'mentionYouInPost' => '{user} mencionou você em {entityType} {entity}',
      'mentionInPostTarget' => '{user} mencionou {mentioned} na postagem',
      'mentionYouInPostTarget' => '{user} mencionou você na postagem para {target}',
      'mentionYouInPostTargetAll' => '{user} mencionou você na postagem para todos',
      'mentionYouInPostTargetNoTarget' => '{user} mencionou você na postagem',
      'create' => '{user} criou {entityType} {entity}',
      'createThis' => '{user} criou {entityType}',
      'createAssignedThis' => '{user} criou {entityType} atribuído a {assignee}',
      'createAssigned' => '{user} criou {entityType} {entity} atribuído a {assignee}',
      'createAssignedYou' => '{user} criou {entityType} {entity} atribuído a você.',
      'createAssignedThisSelf' => '{user} criou este {entityType} auto-atribuído',
      'createAssignedSelf' => '{user} criou {entityType} {entity} auto-atribuído',
      'assign' => '{user} atribuiu {entityType} {entity} a {assignee}',
      'assignThis' => '{user} atribuiu {entityType} a {assignee}',
      'assignYou' => '{user} atribuiu {entityType} {entity} a você',
      'assignThisVoid' => '{user} cancelou a atribuição deste {entityType}',
      'assignVoid' => '{user} não atribuído {entityType} {entity}',
      'assignThisSelf' => '{user} auto-atribuiu este {entityType}',
      'assignSelf' => '{user} auto-atribuído {entityType} {entity}',
      'assignMultiAdd' => '{user} assigned {entity} to {assignee}',
      'assignMultiRemove' => '{user} unassigned {entity} from {removedAssignee}',
      'assignMultiAddRemove' => '{user} assigned {entity} to {assignee} and unassigned from {removedAssignee}',
      'assignMultiAddThis' => '{user} assigned this {entityType} to {assignee}',
      'assignMultiRemoveThis' => '{user} unassigned this {entityType} from {removedAssignee}',
      'assignMultiAddRemoveThis' => '{user} assigned this {entityType} to {assignee} and unassigned from {removedAssignee}',
      'postThis' => '{user} postou',
      'attachThis' => '{user} anexou',
      'statusThis' => '{user} atualizou {field}',
      'updateThis' => '{user} atualizou {entityType}',
      'createRelatedThis' => '{user} criou {relatedEntityType} {relatedEntity} relacionado a {entityType}',
      'createRelated' => '{user} criou {relatedEntityType} {relatedEntity} atribuido a {entityType} {entity}',
      'relate' => '{user} vinculado {relatedEntityType} {relatedEntity} com {entityType} {entity}',
      'relateThis' => '{user} vinculado {relatedEntityType} {relatedEntity} com essa {entityType}',
      'unrelate' => '{user} unlinked {relatedEntityType} {relatedEntity} from {entityType} {entity}',
      'unrelateThis' => '{user} unlinked {relatedEntityType} {relatedEntity} from this {entityType}',
      'emailReceivedFromThis' => 'O e-mail {email} foi recebido de {from}',
      'emailReceivedInitialFromThis' => 'O e-mail {email} foi recebido de e {from} e criou um(a) {entityType}',
      'emailReceivedThis' => 'O e-mail {email} foi recebido',
      'emailReceivedInitialThis' => 'O e-mail {email} foi recebido e criou um(a) {entityType}',
      'emailReceivedFrom' => 'O e-mail {email} relacionado a {entityType} {entity} foi recebido por {from}',
      'emailReceivedFromInitial' => 'O e-mail {email} foi recebido de {from} e criou {entityType} {entity}',
      'emailReceived' => 'O e-mail {email} relacionado a {entityType} {entity} foi recebido',
      'emailReceivedInitial' => 'O e-mail {email} foi recebido e criou {entityType} {entity}',
      'emailReceivedInitialFrom' => 'O e-mail {email} foi recebido de {from} e criou {entityType} {entity}',
      'emailSent' => '{by} enviou o e-mail {email} relacionado a {entityType} {entity}',
      'emailSentThis' => '{by} enviou o e-mail {email}',
      'eventConfirmationAccepted' => '{invitee} accepted participation in {entityType} {entity}',
      'eventConfirmationDeclined' => '{invitee} declined participation in {entityType} {entity}',
      'eventConfirmationTentative' => '{invitee} is tentative about participation in {entityType} {entity}',
      'eventConfirmationAcceptedThis' => '{invitee} accepted participation',
      'eventConfirmationDeclinedThis' => '{invitee} declined participation',
      'eventConfirmationTentativeThis' => '{invitee} is tentative about participation'
    ],
    'streamMessagesMale' => [
      'postTargetSelfAndOthers' => '{user} postou em {target} e em si mesmo'
    ],
    'streamMessagesFemale' => [
      'postTargetSelfAndOthers' => '{user} postou em {target} e nela mesma'
    ],
    'lists' => [
      'monthNames' => [
        0 => 'Janeiro',
        1 => 'Fevereiro',
        2 => 'Março',
        3 => 'Abril',
        4 => 'Maio',
        5 => 'Junho',
        6 => 'Julho',
        7 => 'Agosto',
        8 => 'Setembro',
        9 => 'Outubro',
        10 => 'Novembro',
        11 => 'Dezembro'
      ],
      'monthNamesShort' => [
        0 => 'Jan',
        1 => 'Fev',
        2 => 'Mar',
        3 => 'Abr',
        4 => 'Mai',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Ago',
        8 => 'Set',
        9 => 'Out',
        10 => 'Nov',
        11 => 'Dez'
      ],
      'dayNames' => [
        0 => 'Domingo',
        1 => 'Segunda',
        2 => 'Terça',
        3 => 'Quarta',
        4 => 'Quinta',
        5 => 'Sexta',
        6 => 'Sábado'
      ],
      'dayNamesShort' => [
        0 => 'Dom',
        1 => 'Seg',
        2 => 'Ter',
        3 => 'Qua',
        4 => 'Qui',
        5 => 'Sex',
        6 => 'Sáb'
      ],
      'dayNamesMin' => [
        0 => 'D',
        1 => 'S',
        2 => 'T',
        3 => 'Q',
        4 => 'Q',
        5 => 'S',
        6 => 'S'
      ]
    ],
    'durationUnits' => [
      'd' => 'd',
      'h' => 'h',
      'm' => 'm',
      's' => 's'
    ],
    'options' => [
      'salutationName' => [
        'Mr.' => 'Sr.',
        'Mrs.' => 'Sra.',
        'Ms.' => 'Srta.',
        'Dr.' => 'Dr.'
      ],
      'language' => [
        'ar_AR' => 'Arabic',
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'ur_IN' => 'Urdu (India)',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)'
      ],
      'dateSearchRanges' => [
        'on' => 'Em',
        'notOn' => 'Menos em',
        'after' => 'Posterior',
        'before' => 'Anterior',
        'between' => 'Entre',
        'today' => 'Hoje',
        'past' => 'Passado',
        'future' => 'Futuro',
        'currentMonth' => 'Mês corrente',
        'lastMonth' => 'Último mês',
        'nextMonth' => 'Próximo Mês',
        'currentQuarter' => 'Trimestre corrente',
        'lastQuarter' => 'Último trimestre',
        'currentYear' => 'Ano corrente',
        'lastYear' => 'Último ano',
        'lastSevenDays' => 'Últimos 7 Dias',
        'lastXDays' => 'Últimos X Dias',
        'nextXDays' => 'Próximos X Dias',
        'ever' => 'Sempre',
        'isEmpty' => 'É Vazio',
        'olderThanXDays' => 'Mais de X Dias',
        'afterXDays' => 'Após X Dias',
        'currentFiscalYear' => 'Ano Fiscal Atual',
        'lastFiscalYear' => 'Último Ano Fiscal',
        'currentFiscalQuarter' => 'Trimestre Fiscal Atual',
        'lastFiscalQuarter' => 'Último Trimestre Fiscal'
      ],
      'searchRanges' => [
        'is' => 'É',
        'isEmpty' => 'Está Vazio',
        'isNotEmpty' => 'Não Está Vazio',
        'isOneOf' => 'Qualquer',
        'isFromTeams' => 'É do Time',
        'isNot' => 'Não É',
        'isNotOneOf' => 'Nenhum',
        'anyOf' => 'Qualquer',
        'allOf' => 'Todos De',
        'noneOf' => 'Nenhum',
        'any' => 'Qualquer'
      ],
      'varcharSearchRanges' => [
        'equals' => 'Iguais',
        'like' => 'É Como (%)',
        'notLike' => 'Não é Como (%)',
        'startsWith' => 'Inicia Com',
        'endsWith' => 'Termina Com',
        'contains' => 'Contém',
        'notContains' => 'Não Contém',
        'isEmpty' => 'Está Vazio',
        'isNotEmpty' => 'Não Está Vazio',
        'notEquals' => 'Não é Igual',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of'
      ],
      'intSearchRanges' => [
        'equals' => 'Igual',
        'notEquals' => 'Diferente',
        'greaterThan' => 'Maior que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Maior ou igual',
        'lessThanOrEquals' => 'Menor ou igual',
        'between' => 'Entre',
        'isEmpty' => 'É Vazio',
        'isNotEmpty' => 'Não Está Vazio'
      ],
      'autorefreshInterval' => [
        0 => 'Nenhum',
        '0.5' => '30 segundos',
        1 => '1 minuto',
        2 => '2 minutos',
        5 => '5 minutos',
        10 => '10 minutos'
      ],
      'phoneNumber' => [
        'Mobile' => 'Celular',
        'Office' => 'Comercial',
        'Fax' => 'Fax',
        'Home' => 'Residencial',
        'Other' => 'Outro'
      ],
      'saveConflictResolution' => [
        'current' => 'Atual',
        'actual' => 'Real',
        'original' => 'Original'
      ],
      'reminderTypes' => [
        'Popup' => 'Popup',
        'Email' => 'Email'
      ]
    ],
    'sets' => [
      'summernote' => [
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => [
          'bold' => 'Negrito',
          'italic' => 'Itálico',
          'underline' => 'Sublinhado',
          'strike' => 'Strike',
          'clear' => 'Remover estilo da fonte',
          'height' => 'Altura da linha',
          'name' => 'Família da Fonte',
          'size' => 'Tamanho da fonte'
        ],
        'image' => [
          'image' => 'Imagem',
          'insert' => 'Inserir imagem',
          'resizeFull' => 'Resize Full',
          'resizeHalf' => 'Resize Half',
          'resizeQuarter' => 'Resize Quarter',
          'floatLeft' => 'Float Left',
          'floatRight' => 'Float Right',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Arraste uma imagem para cá',
          'selectFromFiles' => 'Selecione a partir dos arquivos',
          'url' => 'URL da image',
          'remove' => 'Remover imagem'
        ],
        'link' => [
          'link' => 'Link',
          'insert' => 'Inserir link',
          'unlink' => 'Remover link',
          'edit' => 'Editar',
          'textToDisplay' => 'Texto para exibir',
          'url' => 'Para qual URL esse link leva?',
          'openInNewWindow' => 'Abrir em uma nova janela'
        ],
        'video' => [
          'video' => 'Vídeo',
          'videoLink' => 'Link para vídeo',
          'insert' => 'Inserir vídeo',
          'url' => 'URL do vídeo?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, DailyMotion, ou Youku)'
        ],
        'table' => [
          'table' => 'Tabela'
        ],
        'hr' => [
          'insert' => 'Inserir linha horizontal'
        ],
        'style' => [
          'style' => 'Estilo',
          'normal' => 'Normal',
          'blockquote' => 'Citação',
          'pre' => 'Código',
          'h1' => 'Título 1',
          'h2' => 'Título 2',
          'h3' => 'Título 3',
          'h4' => 'Título 4',
          'h5' => 'Título 5',
          'h6' => 'Título 6'
        ],
        'lists' => [
          'unordered' => 'Lista com marcadores',
          'ordered' => 'Lista numerada'
        ],
        'options' => [
          'help' => 'Ajuda',
          'fullscreen' => 'Tela cheia',
          'codeview' => 'Ver código-fonte'
        ],
        'paragraph' => [
          'paragraph' => 'Parágrafo',
          'outdent' => 'Outdent',
          'indent' => 'Indent',
          'left' => 'Alinhar à esquerda',
          'center' => 'Alinhar ao centro',
          'right' => 'Alinhar à direita',
          'justify' => 'Justify full'
        ],
        'color' => [
          'recent' => 'Cor recente',
          'more' => 'Mais cores',
          'background' => 'Fundo',
          'foreground' => 'Fonte',
          'transparent' => 'Transparente',
          'setTransparent' => 'Fundo transparente',
          'reset' => 'Restaurar',
          'resetToDefault' => 'Restaurar padrão'
        ],
        'shortcut' => [
          'shortcuts' => 'Atalhos do teclado',
          'close' => 'Fechar',
          'textFormatting' => 'Formatação de texto',
          'action' => 'Ação',
          'paragraphFormatting' => 'Formatação de parágrafo',
          'documentStyle' => 'Estilo de documento'
        ],
        'history' => [
          'undo' => 'Desfazer',
          'redo' => 'Refazer'
        ]
      ]
    ],
    'listViewModes' => [
      'list' => 'Lista',
      'kanban' => 'Kanban'
    ],
    'themes' => [
      'Dark' => 'Escuro',
      'Light' => 'Light',
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL',
      'Sakura' => 'Sakura',
      'Violet' => 'Violeta',
      'Hazyblue' => 'Azul Nebuloso',
      'Glass' => 'Glass'
    ],
    'themeNavbars' => [
      'side' => 'Side Navbar',
      'top' => 'Top Navbar'
    ],
    'fieldValidations' => [
      'required' => 'Required',
      'maxCount' => 'Max Count',
      'maxLength' => 'Max Length',
      'pattern' => 'Pattern Matching',
      'emailAddress' => 'Valid Email Address',
      'phoneNumber' => 'Valid Phone Number',
      'array' => 'Array',
      'arrayOfString' => 'Array of Strings',
      'valid' => 'Validity',
      'noEmptyString' => 'No Empty String',
      'max' => 'Max Value',
      'min' => 'Min Value'
    ],
    'fieldValidationExplanations' => [
      'valid' => 'Invalid value.',
      'maxLength' => 'Value length exceeds maximum value.',
      'phone_valid' => 'Phone number is not valid. May be caused by a wrong or empty country code.',
      'url_valid' => 'Invalid URL value.',
      'currency_valid' => 'Invalid amount value.',
      'currency_validCurrency' => 'The currency code value is invalid or not allowed.',
      'varchar_pattern' => 'Likely, the value contains not allowed characters.',
      'email_emailAddress' => 'Invalid email address value.',
      'phone_phoneNumber' => 'Invalid phone number value.',
      'datetimeOptional_valid' => 'Invalid date-time value.',
      'datetime_valid' => 'Invalid date-time value.',
      'date_valid' => 'Invalid date value.',
      'enum_valid' => 'Invalid enum value. The value must be one of defined enum options. An empty value is allowed only if the field has an empty option.',
      'int_valid' => 'Invalid integer number value.',
      'float_valid' => 'Invalid number value.',
      'multiEnum_valid' => 'Invalid multi-enum value. Values must be one of defined field options.'
    ],
    'navbarTabs' => [
      'Business' => 'Business',
      'Marketing' => 'Marketing',
      'Support' => 'Support',
      'CRM' => 'CRM',
      'Activities' => 'Activities'
    ],
    'wysiwygLabels' => [
      'cell' => 'Cell',
      'align' => 'Align',
      'width' => 'Width',
      'height' => 'Height',
      'borderWidth' => 'Border Width',
      'borderColor' => 'Border Color',
      'cellPadding' => 'Cell Padding',
      'backgroundColor' => 'Background Color',
      'verticalAlign' => 'Vertical Align'
    ],
    'wysiwygOptions' => [
      'align' => [
        'left' => 'Left',
        'center' => 'Center',
        'right' => 'Right'
      ],
      'verticalAlign' => [
        'top' => 'Top',
        'middle' => 'Middle',
        'bottom' => 'Bottom'
      ]
    ],
    'detailViewModes' => [
      'detail' => 'Detail'
    ],
    'strings' => [
      'yesterdayShort' => 'Yest'
    ],
    'reactions' => [
      'Smile' => 'Smile',
      'Surprise' => 'Surprise',
      'Laugh' => 'Laugh',
      'Meh' => 'Meh',
      'Sad' => 'Sad',
      'Love' => 'Love',
      'Like' => 'Like',
      'Dislike' => 'Dislike'
    ],
    'recordActions' => [
      'create' => 'Create',
      'read' => 'Read',
      'edit' => 'Edit',
      'delete' => 'Delete',
      'stream' => 'Stream'
    ],
    'tabs' => [
      'Stream' => 'Stream'
    ]
  ],
  'GroupEmailFolder' => [
    'links' => [
      'emails' => 'Emails'
    ],
    'labels' => [
      'Create GroupEmailFolder' => 'Create Folder'
    ]
  ],
  'Import' => [
    'labels' => [
      'New import with same params' => 'Nova importação com os mesmos parâmetros',
      'Revert Import' => 'Reverter Importar',
      'Return to Import' => 'Retornar a Importação',
      'Run Import' => 'Executar importação',
      'Back' => 'Voltar',
      'Field Mapping' => 'Mapeamento de Campos',
      'Default Values' => 'Valores Padrão',
      'Add Field' => 'Adicionar Campo',
      'Created' => 'Criado',
      'Updated' => 'Atualizado',
      'Result' => 'Resultado',
      'Show records' => 'Exibir Registros',
      'Remove Duplicates' => 'Remover Duplicados',
      'importedCount' => 'Importados (Quant.)',
      'duplicateCount' => 'Duplicados (Quant.)',
      'updatedCount' => 'Atualizados (Quant.)',
      'Create Only' => 'Criar Apenas',
      'Create and Update' => 'Criar & Atualizar',
      'Update Only' => 'Somente Atualizar',
      'Update by' => 'Atualizado por',
      'Set as Not Duplicate' => 'Marcar como não duplicado',
      'File (CSV)' => 'Arquivo (CSV)',
      'First Row Value' => 'Valor Primeira Linha',
      'Skip' => 'Pular',
      'Header Row Value' => 'Valor Linha do Cabeçalho',
      'Field' => 'Campo',
      'What to Import?' => 'O que Importar?',
      'Entity Type' => 'Tipo de Entidade',
      'What to do?' => 'O que fazer?',
      'Parameters' => 'Parameters',
      'Header Row' => 'Linha do Cabeçalho',
      'Person Name Format' => 'Formato Nome da Pessoa',
      'John Smith' => 'João Silva',
      'Smith John' => 'Silva João',
      'Smith, John' => 'Silva, João',
      'Field Delimiter' => 'Delimitar Campo',
      'Date Format' => 'Formato da Data',
      'Decimal Mark' => 'Ponto Decimal',
      'Text Qualifier' => 'Qualificador de Texto',
      'Time Format' => 'Formato de data',
      'Currency' => 'Moeda',
      'Preview' => 'Anterior',
      'Next' => 'Próximo',
      'Step 1' => 'Passo 1',
      'Step 2' => 'Passo 2',
      'Double Quote' => 'Aspas Duplas',
      'Single Quote' => 'Aspas Simples',
      'Imported' => 'Importado',
      'Duplicates' => 'Duplicados',
      'Skip searching for duplicates' => 'Pular a busca por duplicatas',
      'Timezone' => 'Fuso Horário',
      'Remove Import Log' => 'Remover Log de Importação',
      'New Import' => 'Nova Importação',
      'Import Results' => 'Resultados da Importação',
      'Run Manually' => 'Executar Manualmente',
      'Silent Mode' => 'Modo silencioso',
      'Export' => 'Export',
      'Properties' => 'Propriedades'
    ],
    'messages' => [
      'importRunning' => 'Import running...',
      'noErrors' => 'No errors',
      'utf8' => 'Deve estar codificado com UTF-8',
      'duplicatesRemoved' => 'Duplicados removidos',
      'inIdle' => 'Executar em modo inativo (para big data; via cron)',
      'revert' => 'Isso removerá todos os registros importados permanentemente.',
      'removeDuplicates' => 'Isso removerá permanentemente todos os registros importados que foram reconhecidos como duplicados.',
      'confirmRevert' => 'Isso removerá todos os registros importados permanentemente. Tem certeza?',
      'confirmRemoveDuplicates' => 'Isso removerá permanentemente todos os registros importados que foram reconhecidos como duplicados. Tem certeza?',
      'confirmRemoveImportLog' => 'Isso removerá o log de importação. Todos os registros importados serão mantidos. Você não poderá reverter os resultados da importação. Tem certeza?',
      'removeImportLog' => 'Isso removerá o log de importação. Todos os registros importados serão mantidos. Use-o se tiver certeza de que a importação está correta.'
    ],
    'params' => [
      'phoneNumberCountry' => 'Telephone country code'
    ],
    'fields' => [
      'file' => 'Arquivo',
      'entityType' => 'Tipo de Entidade',
      'imported' => 'Registros Importados',
      'duplicates' => 'Registros Duplicados',
      'updated' => 'Registros Atualizados',
      'status' => 'Status'
    ],
    'links' => [
      'errors' => 'Errors'
    ],
    'options' => [
      'status' => [
        'Failed' => 'Falhou',
        'Standby' => 'Em Espera',
        'Pending' => 'Pendente',
        'In Process' => 'Em Processo',
        'Complete' => 'Completo'
      ],
      'personNameFormat' => [
        'f l' => 'Primeiro Último',
        'l f' => 'Último Primeiro',
        'f m l' => 'Primeiro Meio Último',
        'l f m' => 'Último Primeiro Meio',
        'l, f' => 'Último, Primeiro'
      ]
    ],
    'strings' => [
      'commandToRun' => 'Comando para executar (da CLI)',
      'saveAsDefault' => 'Salvar como padrão'
    ],
    'tooltips' => [
      'manualMode' => 'Se marcado, você precisará executar a importação manualmente da CLI. O comando será mostrado após configurar a importação.',
      'silentMode' => 'A maioria dos scripts pós-salvamento será ignorada, as notas de transmissão não serão criadas. A importação será executada mais rapidamente.'
    ]
  ],
  'ImportError' => [
    'fields' => [
      'type' => 'Type',
      'validationFailures' => 'Validation Failures',
      'import' => 'Import',
      'rowIndex' => 'Row Index',
      'exportRowIndex' => 'Export Row Index',
      'lineNumber' => 'Line Number',
      'exportLineNumber' => 'Export Line Number',
      'row' => 'Row',
      'entityType' => 'Entity Type'
    ],
    'options' => [
      'type' => [
        'Validation' => 'Validation',
        'Access' => 'Access',
        'Not-Found' => 'Not-Found'
      ]
    ],
    'tooltips' => [
      'lineNumber' => 'A line number in the original CSV.',
      'exportLineNumber' => 'A line number in the export CSV.'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'name' => 'Nome',
      'emailAddress' => 'Endereço de Email',
      'team' => 'Time',
      'status' => 'Status',
      'assignToUser' => 'Atribuído a',
      'host' => 'Host',
      'username' => 'Usuário',
      'password' => 'Senha',
      'port' => 'Porta',
      'monitoredFolders' => 'Pastas Monitoradas',
      'trashFolder' => 'Pasta da Lixeira',
      'security' => 'Segurança',
      'createCase' => 'Criar Atendimento',
      'reply' => 'Responder',
      'caseDistribution' => 'Distribuição do Atendimento',
      'replyEmailTemplate' => 'Template do E-mail de Resposta',
      'replyFromAddress' => 'E-mail de Resposta (From)',
      'replyToAddress' => 'Responder para o Endereço',
      'replyFromName' => 'Nome de Resposta (FromName)',
      'targetUserPosition' => 'Posição do usuário alvo',
      'fetchSince' => 'Buscados Desde',
      'addAllTeamUsers' => 'Para todos os usuários do time',
      'teams' => 'Times',
      'sentFolder' => 'Pasta Enviados',
      'storeSentEmails' => 'Guardar Emails Enviados',
      'keepFetchedEmailsUnread' => 'Manter Emails Buscados Não Lidos',
      'connectedAt' => 'Connected At',
      'excludeFromReply' => 'Exclude from Reply',
      'useImap' => 'Buscar emails',
      'useSmtp' => 'Usar SMTP',
      'smtpHost' => 'Servidor SMTP',
      'smtpPort' => 'Porta SMTP',
      'smtpAuth' => 'Auth SMTP',
      'smtpSecurity' => 'Segurança SMTP',
      'smtpAuthMechanism' => 'Mecanismo de autenticação SMTP',
      'smtpUsername' => 'Nome de Usuário SMTP',
      'smtpPassword' => 'Senha SMTP',
      'fromName' => 'De Nome',
      'smtpIsShared' => 'SMTP é Compartilhado',
      'smtpIsForMassEmail' => 'SMTP é para email em massa',
      'groupEmailFolder' => 'Group Email Folder',
      'isSystem' => 'Is System',
      'ssl' => 'SSL'
    ],
    'tooltips' => [
      'isSystem' => 'Is the system email account.',
      'useSmtp' => 'A capacidade de enviar e-mails.',
      'reply' => 'Notificar rementente que seus e-mails foram recebidos.',
      'createCase' => 'Criar automaticamente um atendimento para os e-mais recebidos.',
      'replyToAddress' => 'Especifique o endereço de e-mail desta caixa postal para que as respostas cheguem aqui.',
      'caseDistribution' => 'Como os atendimentos serão distribuídos. Assinados diretamente ao usuário ou entregues ao time.',
      'assignToUser' => 'Usuário responsável pelos e-mails/atendimentos.',
      'team' => 'Time que será relacionado aos e-mails/atendimentos.',
      'teams' => 'Os emails do Time serão atribuídos.',
      'targetUserPosition' => 'Define a posição dos usuários para quem serão distribuídos os atendimentos.',
      'addAllTeamUsers' => 'Os emails aparecerão na caixa de entrada de todos os usuários dos times especificados.',
      'monitoredFolders' => 'Várias pastas devem ser separadas por vírgula.',
      'smtpIsShared' => 'Se marcado, os usuários poderão enviar e-mails usando este SMTP. A disponibilidade é controlada por Regras por meio da permissão Conta de Email do Grupo.',
      'smtpIsForMassEmail' => 'Se marcado, o SMTP estará disponível para email em massa.',
      'storeSentEmails' => 'Os emails enviados serão armazenados no servidor IMAP.',
      'groupEmailFolder' => 'Put incoming emails in a group folder.',
      'excludeFromReply' => 'When replying on emails sent to this account\'s email address, its email address won\'t be added to CC.

Note that by enabling this parameter, the email address of this account will be exposed to users who have access to send Emails.'
    ],
    'links' => [
      'filters' => 'Filtros',
      'emails' => 'Emails',
      'assignToUser' => 'Atribuir ao Usuário',
      'groupEmailFolder' => 'Group Email Folder'
    ],
    'options' => [
      'status' => [
        'Active' => 'Ativo',
        'Inactive' => 'Inativo'
      ],
      'caseDistribution' => [
        '' => 'Nenhum',
        'Direct-Assignment' => 'Atribuição Direta',
        'Round-Robin' => 'Rodízio',
        'Least-Busy' => 'Menos Ocupado'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ],
      'security' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'labels' => [
      'Create InboundEmail' => 'Criar E-mail de Entrada',
      'IMAP' => 'IMAP',
      'Actions' => 'Ações',
      'Main' => 'Principal'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Não foi possível conectar ao servidor IMAP',
      'imapNotConnected' => 'Could not connect to group [IMAP account](#InboundEmail/view/{id}).'
    ]
  ],
  'Integration' => [
    'fields' => [
      'enabled' => 'Habilitado',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'URL de Redirecionamento',
      'apiKey' => 'Chave de API',
      'siteKey' => 'Site Key',
      'secretKey' => 'Secret Key',
      'scoreThreshold' => 'Score Threshold',
      'mapId' => 'Map ID'
    ],
    'titles' => [
      'GoogleMaps' => 'Google Maps',
      'GoogleReCaptcha' => 'Google reCAPTCHA'
    ],
    'messages' => [
      'selectIntegration' => 'Selecione uma integração no menu.',
      'noIntegrations' => 'Nenhuma integração disponível.'
    ],
    'help' => [
      'GoogleReCaptcha' => 'Obtain the Site Key and Secret Key from [Google](https://www.google.com/recaptcha/).',
      'Google' => '**Obtenha as credenciais do OAuth 2.0 no Google Developers Console.**

Visite o [Google Developers Console](https://console.developers.google.com/project) para obter credenciais do OAuth 2.0, como um ID do cliente e um "Client Secret", que são conhecidos pelo aplicativo do Google e do EspoCRM.',
      'GoogleMaps' => 'Obtenha a chave de API [aqui] (https://developers.google.com/maps/documentation/javascript/get-api-key).'
    ]
  ],
  'Job' => [
    'fields' => [
      'status' => 'Estado',
      'executeTime' => 'Executar Em',
      'executedAt' => 'Executado Em',
      'startedAt' => 'Iniciado Em',
      'attempts' => 'Tentativas Restantes',
      'failedAttempts' => 'Tentativas Falhas',
      'serviceName' => 'Serviço',
      'method' => 'Método (obsoleto)',
      'methodName' => 'Método',
      'scheduledJob' => 'Tarefas agendadas',
      'scheduledJobJob' => 'Nome Tarefa Agendada',
      'data' => 'Dado',
      'targetType' => 'Tipo de Alvo',
      'targetId' => 'ID do Alvo',
      'number' => 'Número',
      'queue' => 'Fila',
      'group' => 'Grupo',
      'className' => 'Nome da Classe',
      'targetGroup' => 'Grupo Alvo',
      'job' => 'Trabalho (Job)'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pendente',
        'Success' => 'Sucesso',
        'Running' => 'Executando',
        'Failed' => 'Falhado'
      ]
    ]
  ],
  'LayoutManager' => [
    'fields' => [
      'width' => 'Largura (%)',
      'link' => 'Link',
      'notSortable' => 'Não Classificável',
      'align' => 'Alinhar',
      'panelName' => 'Nome do Painel',
      'style' => 'Estilo',
      'sticked' => 'Stick to top',
      'isMuted' => 'Muted color',
      'isLarge' => 'Tamanho de fonte grande',
      'hidden' => 'Oculto',
      'noLabel' => 'No Label',
      'dynamicLogicVisible' => 'Condições que tornam o painel visível',
      'dynamicLogicStyled' => 'Condições que fazem o estilo aplicado',
      'tabLabel' => 'Tab Label',
      'tabBreak' => 'Tab-Break',
      'noteText' => 'Note Text',
      'noteStyle' => 'Note Style'
    ],
    'options' => [
      'align' => [
        'left' => 'Esquerda',
        'right' => 'Direita'
      ],
      'style' => [
        'default' => 'Padrão',
        'success' => 'Sucesso',
        'danger' => 'Perigo',
        'info' => 'Info',
        'warning' => 'Aviso',
        'primary' => 'Primário'
      ]
    ],
    'labels' => [
      'New panel' => 'Novo Painel',
      'Layout' => 'Layout'
    ],
    'messages' => [
      'alreadyExists' => 'Layout `{name}` already exists.',
      'createInfo' => 'Custom list layouts can be used by relationship panels.',
      'cantBeEmpty' => 'O layout não pode estar vazio.',
      'fieldsIncompatible' => 'Os campos não podem estar juntos no layout: {fields}.'
    ],
    'tooltips' => [
      'noteText' => 'A text to be displayed in the panel. Markdown is supported.',
      'tabBreak' => 'A separate tab for the panel and all following panels until the next tab-break.',
      'noLabel' => 'Don\'t display a column label in the header.',
      'notSortable' => 'Disables the ability to sort by the column.',
      'width' => 'A column width. It\'s recommended to have one column without specified width, usually it should be the *Name* field.',
      'sticked' => 'O painel será colado no painel acima. Sem folga entre os painéis.',
      'hiddenPanel' => 'Precisa clicar em \'mostrar mais\' para ver o painel.',
      'panelStyle' => 'Uma cor do painel.',
      'dynamicLogicVisible' => 'Se definido, o painel ficará oculto, a menos que a condição seja atendida.',
      'dynamicLogicStyled' => 'Uma cor será aplicada se uma condição específica for atendida. A cor é definida pelo parâmetro *Estilo*.',
      'link' => 'Se marcado, um valor de campo será exibido como um link apontando para a visualização de detalhes do registro. Normalmente é usado para campos *Nome*.'
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'layoutList' => 'Layouts'
    ],
    'labels' => [
      'Create LayoutSet' => 'Criar Conjunto de Layout',
      'Edit Layouts' => 'Editar Layouts'
    ],
    'tooltips' => []
  ],
  'LeadCapture' => [
    'fields' => [
      'name' => 'Nome',
      'campaign' => 'Campanha',
      'isActive' => 'Está Ativo',
      'subscribeToTargetList' => 'Inscrito na Lista de Alvo',
      'subscribeContactToTargetList' => 'Inscrever Contato caso existir',
      'targetList' => 'Lista de Alvo',
      'fieldList' => 'Payload Fields',
      'optInConfirmation' => 'Double Opt-In',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'optInConfirmationLifetime' => 'Opt-in confirmation lifetime (hours)',
      'optInConfirmationSuccessMessage' => 'Text to show after opt-in confirmation',
      'leadSource' => 'Origem do Lead',
      'apiKey' => 'Chave de API',
      'targetTeam' => 'Time Alvo',
      'exampleRequestMethod' => 'Método',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Payload',
      'exampleRequestHeaders' => 'Headers',
      'createLeadBeforeOptInConfirmation' => 'Criar Lead antes da confirmação',
      'skipOptInConfirmationIfSubscribed' => 'Pule a confirmação se o lead já estiver na lista de destino',
      'smtpAccount' => 'Conta SMTP',
      'inboundEmail' => 'Conta de Email do Grupo',
      'duplicateCheck' => 'Verificar Duplicados',
      'phoneNumberCountry' => 'Telephone country code',
      'fieldParams' => 'Field Params',
      'formId' => 'Form ID',
      'formEnabled' => 'Web Form',
      'formUrl' => 'Form URL',
      'formTitle' => 'Form Title',
      'formTheme' => 'Form Theme',
      'formSuccessText' => 'Text to display after form submission',
      'formText' => 'Text to display on form',
      'formSuccessRedirectUrl' => 'URL to redirect to after form submission',
      'formLanguage' => 'Language used on form',
      'formFrameAncestors' => 'Allowed hosts for form embedding',
      'formCaptcha' => 'Use Captcha'
    ],
    'links' => [
      'targetList' => 'Lista de Alvo',
      'campaign' => 'Campanha',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'targetTeam' => 'Time Alvo',
      'inboundEmail' => 'Conta de Email do Grupo',
      'logRecords' => 'Log'
    ],
    'labels' => [
      'Create LeadCapture' => 'Criar Ponto de Entrada',
      'Generate New API Key' => 'Gerar Nova Chave de API',
      'Request' => 'Solicitação',
      'Confirm Opt-In' => 'Confirm Opt-In',
      'Generate New Form ID' => 'Generate New Form ID',
      'Web Form' => 'Web Form'
    ],
    'messages' => [
      'generateApiKey' => 'Criar Nova Chave de API',
      'optInConfirmationExpired' => 'Opt-in confirmation link is expired.',
      'optInIsConfirmed' => 'Opt-in is confirmed.'
    ],
    'tooltips' => [
      'formCaptcha' => 'To be able to use Captcha, you need to configure it under **Administration** > **Integrations**.',
      'optInConfirmationSuccessMessage' => 'Markdown é suportado.'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'number' => 'Número',
      'data' => 'Data',
      'target' => 'Alvo',
      'leadCapture' => 'Captura de Lead',
      'createdAt' => 'Inserido Em',
      'isCreated' => 'É Lead Criado'
    ],
    'links' => [
      'leadCapture' => 'Captura de Lead',
      'target' => 'Alvo'
    ]
  ],
  'MassAction' => [
    'fields' => [
      'status' => 'Status',
      'processedCount' => 'Contagem processada'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pendente',
        'Running' => 'Executando',
        'Success' => 'Sucesso',
        'Failed' => 'Falhou'
      ]
    ],
    'messages' => [
      'infoText' => 'A ação em massa está sendo processada em modo inativo pelo cron. Pode levar algum tempo para terminar. Fechar esta caixa de diálogo modal não afetará o processo de execução.'
    ]
  ],
  'Note' => [
    'fields' => [
      'post' => 'Postagem',
      'attachments' => 'Anexos',
      'targetType' => 'Alvo',
      'teams' => 'Times',
      'users' => 'Usuários',
      'portals' => 'Portais',
      'type' => 'Tipo',
      'isGlobal' => 'É Global',
      'isInternal' => 'É interno (para usuários internos)',
      'isPinned' => 'Is Pinned',
      'related' => 'Relacionado',
      'createdByGender' => 'Criado por Gênero',
      'data' => 'Dado',
      'number' => 'Número'
    ],
    'filters' => [
      'all' => 'Todos',
      'posts' => 'Posts',
      'updates' => 'Atualizações',
      'activity' => 'Activity'
    ],
    'options' => [
      'targetType' => [
        'self' => 'para mim',
        'users' => 'para determinado(s) usuário(s)',
        'teams' => 'para determinado(s) time(s)',
        'all' => 'para todos os usuários internos',
        'portals' => 'para usuários do portal'
      ],
      'type' => [
        'Post' => 'Postagem',
        'Create' => 'Create',
        'CreateRelated' => 'Create Related',
        'Update' => 'Update',
        'Status' => 'Status',
        'Assign' => 'Assign',
        'Relate' => 'Relate',
        'Unrelate' => 'Unrelate',
        'EmailReceived' => 'Email Received',
        'EmailSent' => 'Email Sent'
      ]
    ],
    'labels' => [
      'View Posts' => 'View Posts',
      'View Attachments' => 'View Attachments',
      'View Activity' => 'View Activity',
      'Pin' => 'Pin',
      'Unpin' => 'Unpin',
      'Pinned' => 'Pinned',
      'Quote Reply' => 'Quote Reply'
    ],
    'messages' => [
      'writeMessage' => 'Escreva sua mensagem aqui',
      'pinnedMaxCountExceeded' => 'Cannot pin more notes. Max allowed number is {count}.'
    ],
    'links' => [
      'portals' => 'Portals',
      'attachments' => 'Attachments',
      'superParent' => 'Super Parent',
      'related' => 'Relacionado'
    ],
    'otherFields' => [
      'to' => 'To'
    ]
  ],
  'OAuthAccount' => [
    'labels' => [
      'Create OAuthAccount' => 'Create OAuth Account',
      'Connection' => 'Connection'
    ],
    'fields' => [
      'provider' => 'Provider',
      'hasAccessToken' => 'Has Access Token',
      'user' => 'User',
      'providerIsActive' => 'Provider is Active',
      'data' => 'Data'
    ],
    'links' => [
      'provider' => 'Provider'
    ]
  ],
  'OAuthProvider' => [
    'labels' => [
      'Create OAuthProvider' => 'Create OAuth Provider'
    ],
    'fields' => [
      'isActive' => 'Is Active',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'authorizationEndpoint' => 'Authorization Endpoint',
      'tokenEndpoint' => 'Token Endpoint',
      'authorizationRedirectUri' => 'Authorization Redirect URI',
      'scopes' => 'Scopes',
      'scopeSeparator' => 'Scope Separator',
      'hasAccessToken' => 'Has Access Token',
      'authorizationPrompt' => 'Authorization Prompt',
      'authorizationParams' => 'Authorization Params'
    ],
    'links' => [
      'accounts' => 'Accounts'
    ],
    'tooltips' => [
      'authorizationParams' => 'Additional query parameters to be sent to the authorization endpoint. Specified in JSON format.'
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'type' => 'Tipo',
      'optOut' => 'Cancelado',
      'invalid' => 'Inválido',
      'numeric' => 'Numeric Value'
    ],
    'presetFilters' => [
      'orphan' => 'Órfão'
    ]
  ],
  'Portal' => [
    'fields' => [
      'name' => 'Nome',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Regras',
      'isActive' => 'Está Ativo',
      'isDefault' => 'É padrão',
      'tabList' => 'Lista de Aba',
      'applicationName' => 'Application Name',
      'quickCreateList' => 'Criar Lista Rápida',
      'companyLogo' => 'Logo',
      'theme' => 'Tema',
      'language' => 'Linguagem',
      'dashboardLayout' => 'Layout do Dashboard',
      'dateFormat' => 'Formato de data',
      'timeFormat' => 'Formato de hora',
      'timeZone' => 'Fuso Horário',
      'weekStart' => 'Primeiro Dia da Semana',
      'defaultCurrency' => 'Moeda Padrão',
      'layoutSet' => 'Conjunto de Layout',
      'authenticationProvider' => 'Authentication Provider',
      'customUrl' => 'URL Personalizada',
      'customId' => 'ID Personalizada',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)'
    ],
    'links' => [
      'users' => 'Usuários',
      'portalRoles' => 'Regras',
      'layoutSet' => 'Conjunto de Layout',
      'authenticationProvider' => 'Authentication Provider',
      'notes' => 'Notas',
      'articles' => 'Artigos da Base de Conhecimento'
    ],
    'tooltips' => [
      'layoutSet' => 'Fornece a capacidade de ter layouts que diferem dos padrões.',
      'portalRoles' => 'As Regras de Portal especificadas serão aplicadas a todos os usuários deste portal.'
    ],
    'labels' => [
      'Create Portal' => 'Criar portal',
      'User Interface' => 'Interface do Usuário',
      'General' => 'Geral',
      'Settings' => 'Configurações'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'exportPermission' => 'Exportar Permissão',
      'massUpdatePermission' => 'Permissão de Atualização em Massa',
      'data' => 'Data',
      'fieldData' => 'Field Data'
    ],
    'links' => [
      'users' => 'Usuários'
    ],
    'labels' => [
      'Access' => 'Acesso',
      'Create PortalRole' => 'Criar Regra de Portal',
      'Scope Level' => 'Nível do Escopo',
      'Field Level' => 'Nível do Campo'
    ],
    'tooltips' => [
      'exportPermission' => 'Define se os usuários do portal têm a capacidade de exportar registros.',
      'massUpdatePermission' => 'Define se os usuários do portal têm a capacidade de fazer atualização em massa de registros.'
    ]
  ],
  'PortalUser' => [
    'labels' => [
      'Create PortalUser' => 'Criar Usuário do Portal'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'dateFormat' => 'Formato da Data',
      'timeFormat' => 'Formato da Hora',
      'timeZone' => 'Time Zone',
      'weekStart' => 'Primeiro dia da Semana',
      'thousandSeparator' => 'Separador de milhar',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moeda Padrão',
      'currencyList' => 'Moedas Disponíveis',
      'language' => 'Idioma',
      'exportDelimiter' => 'Delimitador de Exportação',
      'receiveAssignmentEmailNotifications' => 'Receber e-mail de notificação quando designado',
      'receiveMentionEmailNotifications' => 'Notificações por email sobre menções em postagens',
      'receiveStreamEmailNotifications' => 'Notificações por email sobre postagens e atualizações de status',
      'assignmentNotificationsIgnoreEntityTypeList' => 'Notificações de Atribuição no Aplicativo',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Notificações de atribuição de email',
      'reactionNotifications' => 'In-app notifications about reactions',
      'reactionNotificationsNotFollowed' => 'Notifications about reactions for non-followed records',
      'autoFollowEntityTypeList' => 'Auto-Seguir',
      'signature' => 'Assinatura do E-mail',
      'dashboardTabList' => 'Lista de Aba',
      'defaultReminders' => 'Lembretes Padrão',
      'defaultRemindersTask' => 'Default Reminders for Tasks',
      'theme' => 'Tema',
      'pageContentWidth' => 'Content Width',
      'useCustomTabList' => 'Personalizar Lista de Aba',
      'addCustomTabs' => 'Add Custom Tabs',
      'tabList' => 'Lista de Aba',
      'emailReplyToAllByDefault' => 'Resposta por Email para todos por padrão',
      'dashboardLayout' => 'Layout de Dashboard',
      'dashboardLocked' => 'Lock Dashboard',
      'emailReplyForceHtml' => 'Resposta de Email em HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Não preencha previamente o usuário designado na criação do registro',
      'followEntityOnStreamPost' => 'Auto-follow record after posting in Stream',
      'followCreatedEntities' => 'Seguir automaticamente registros criados',
      'followCreatedEntityTypeList' => 'Auto-follow created records of specific entity types',
      'followAsCollaborator' => 'Auto-follow when added as a collaborator',
      'emailUseExternalClient' => 'Use um cliente de email externo',
      'textSearchStoringDisabled' => 'Disable text filter storing',
      'calendarSlotDuration' => 'Calendar Slot Duration',
      'calendarScrollHour' => 'Calendar Scroll to Hour',
      'scopeColorsDisabled' => 'Desativar cores do escopo'
    ],
    'links' => [],
    'options' => [
      'weekStart' => [
        0 => 'Domingo',
        1 => 'Segunda'
      ],
      'pageContentWidth' => [
        '' => 'Normal',
        'Wide' => 'Wide'
      ]
    ],
    'labels' => [
      'Notifications' => 'Notificações',
      'User Interface' => 'Interface de Usuário',
      'Misc' => 'Misc',
      'Locale' => 'Local',
      'Reset Dashboard to Default' => 'Redefinir Dashboard para o padrão'
    ],
    'tooltips' => [
      'addCustomTabs' => 'If checked, custom tabs will be appended to default tabs. Otherwise, custom tabs will be used instead of default tabs.',
      'autoFollowEntityTypeList' => 'O usuário seguirá automaticamente todos os novos registros das entidades selecionadas, verá informações no fluxo e receberá notificações.',
      'doNotFillAssignedUserIfNotRequired' => 'Ao criar o registro, o usuário desginado não será preenchido com o próprio usuário, a menos que o campo seja obrigatório.',
      'followCreatedEntities' => 'Ao criar novos registros, eles serão seguidos automaticamente mesmo que atribuídos a outro usuário.',
      'followCreatedEntityTypeList' => 'Ao criar novos registros de tipos de entidade selecionados, eles serão seguidos automaticamente mesmo se atribuídos a outro usuário.'
    ],
    'tabFields' => [
      'label' => 'Label',
      'iconClass' => 'Icon',
      'color' => 'Color'
    ]
  ],
  'Role' => [
    'fields' => [
      'name' => 'Nome',
      'roles' => 'Regras',
      'assignmentPermission' => 'Atribuição de Permissões',
      'userPermission' => 'Permissão de Usuário',
      'messagePermission' => 'Message Permission',
      'portalPermission' => 'Permissão de Portal',
      'groupEmailAccountPermission' => 'Permissão da Conta de Email do Grupo',
      'exportPermission' => 'Exportar Permissão',
      'massUpdatePermission' => 'Permissão de Atualização em Massa',
      'followerManagementPermission' => 'Permissão de Gerenciamento de Seguidores',
      'dataPrivacyPermission' => 'Permissão de Privacidade de Dados',
      'auditPermission' => 'Audit Permission',
      'mentionPermission' => 'Mention Permission',
      'userCalendarPermission' => 'User Calendar Permission',
      'data' => 'Data',
      'fieldData' => 'Field Data'
    ],
    'links' => [
      'users' => 'Usuários',
      'teams' => 'Times'
    ],
    'tooltips' => [
      'messagePermission' => 'Allows to send messages to other users.

* all – can send to all
* team – can send only to teammates
* no – cannot send',
      'assignmentPermission' => 'Permite restringir a habilidade para usuários atribuírem registros para outros usuários.

tudo - nenhuma restrição

time - pode atribuir para usuários do seu time

nenhum - pode atribuir apenas para si mesmo',
      'userPermission' => 'Permite restringir a habilidade para usuários visualizarem atividades, calendários e fluxos de outros usuários.

tudo - nenhuma restrição

time - pode ver atividades dos colegas de time apenas

nenhum - não pode visualizar',
      'userCalendarPermission' => 'Allows to view calendars of other users.',
      'portalPermission' => 'Define um acesso às informações do portal, capacidade de postar mensagens para usuários do portal.',
      'groupEmailAccountPermission' => 'Define um acesso às contas de e-mail do grupo, uma capacidade de enviar e-mails do grupo SMTP.',
      'exportPermission' => 'Define se os usuários têm a capacidade de exportar registros.',
      'massUpdatePermission' => 'Define se os usuários têm a capacidade de fazer atualização em massa de registros.',
      'followerManagementPermission' => 'Permite gerenciar seguidores de registros específicos.',
      'dataPrivacyPermission' => 'Permite visualizar e apagar dados pessoais.',
      'auditPermission' => 'Allows to view the audit log.',
      'mentionPermission' => 'Allows to mention other users in the Stream.

* all – can mention all
* team – can mention only teammates
* no – cannot mention'
    ],
    'labels' => [
      'Access' => 'Acesso',
      'Create Role' => 'Criar Regra',
      'Scope Level' => 'Nível do Escopo',
      'Field Level' => 'Nível do Campo',
      'Baseline' => 'Baseline'
    ],
    'options' => [
      'accessList' => [
        'not-set' => 'indefinido',
        'enabled' => 'habilitado',
        'disabled' => 'desabilitado'
      ],
      'levelList' => [
        'all' => 'tudo',
        'team' => 'time',
        'account' => 'conta',
        'contact' => 'contato',
        'own' => 'próprio',
        'no' => 'nenhum',
        'yes' => 'sim',
        'not-set' => 'indefinido'
      ]
    ],
    'actions' => [
      'read' => 'Ler',
      'edit' => 'Editar',
      'delete' => 'Excluir',
      'stream' => 'Fluxo',
      'create' => 'Criar'
    ],
    'messages' => [
      'changesAfterClearCache' => 'Todas as modificações no controle de acesso serão aplicadas após a limpeza do cache.'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'name' => 'Nome',
      'status' => 'Status',
      'job' => 'Tarefa',
      'scheduling' => 'Agendando (notação do crontab)'
    ],
    'links' => [
      'log' => 'Log'
    ],
    'labels' => [
      'As often as possible' => 'O mais frequente possível',
      'Create ScheduledJob' => 'Agendar Tarefa'
    ],
    'options' => [
      'job' => [
        'Cleanup' => 'Limpar',
        'CheckInboundEmails' => 'Verificar e-mails recebidos',
        'CheckEmailAccounts' => 'Verificar contas de e-mail pessoais',
        'SendEmailReminders' => 'Enviar lembretes por e-mail',
        'AuthTokenControl' => 'Controle de token de autenticação',
        'SendEmailNotifications' => 'Enviar notificações por email',
        'CheckNewVersion' => 'Verifique se há Nova Versão',
        'ProcessWebhookQueue' => 'Processar Fila de Webhook',
        'SendScheduledEmails' => 'Send Scheduled Emails',
        'ProcessMassEmail' => 'Enviar Emails em Massa',
        'ControlKnowledgeBaseArticleStatus' => 'Controlar Status dos Artigo da Base de Conhecimento',
        'PropertyMatchingUpdate' => 'Property Matching Update',
        'SendPropertyMatches' => 'Send Matched Properties to Requestors'
      ],
      'cronSetup' => [
        'linux' => 'Nota: Adicione esta linha ao arquivo de crontab para executar as tarefas agendadas do Espo:',
        'mac' => 'Nota: Adicione esta linha ao arquivo de crontab para executar as tarefas agendadas do Espo:',
        'windows' => 'Nota: Crie um arquivo em lote com os seguintes comandos para executar as tarefas agendadas do EspoCRM no agendador de tarefas do Windows:',
        'default' => 'Nota: Adicione este comando Cron Job (Tarefa agendada):'
      ],
      'status' => [
        'Active' => 'Ativo',
        'Inactive' => 'Inativo'
      ]
    ],
    'tooltips' => [
      'scheduling' => 'Notação crontab. Define a frequência de execuções de trabalhos.

`*/5 * * * *` - a cada 5 minutos

`0 */2 * * *` - a cada 2 horas

`30 1 * * *` - às 01:30 uma vez por dia

`0 0 1 * *` - no primeiro dia do mês'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'status' => 'Status',
      'executionTime' => 'Tempo de execução',
      'target' => 'Alvo'
    ]
  ],
  'Settings' => [
    'fields' => [
      'useCache' => 'Usar Cache',
      'dateFormat' => 'Formato da Data',
      'timeFormat' => 'Formato da Hora',
      'timeZone' => 'Time Zone',
      'weekStart' => 'Primeiro dia da Semana',
      'thousandSeparator' => 'Separador de Milhar',
      'decimalMark' => 'Deparador Decimal',
      'defaultCurrency' => 'Moeda Padrão',
      'baseCurrency' => 'Moeda Base',
      'currencyRates' => 'Conversão de Moedas',
      'currencyList' => 'Moedas Disponíveis',
      'language' => 'Idioma',
      'companyLogo' => 'Logo da Empresa',
      'smsProvider' => 'Provedor de SMS',
      'outboundSmsFromNumber' => 'SMS do número',
      'emailAddress' => 'E-mail',
      'outboundEmailFromName' => 'Nome do rementente',
      'outboundEmailFromAddress' => 'E-mail do rementente',
      'outboundEmailIsShared' => 'Compartilhado',
      'emailAddressLookupEntityTypeList' => 'Email address look-up scopes',
      'emailAddressSelectEntityTypeList' => 'Email address select scopes',
      'recordsPerPage' => 'Registros por Página',
      'recordsPerPageSmall' => 'Registros por Página (Menor)',
      'recordsPerPageSelect' => 'Registros por página (selecione)',
      'recordsPerPageKanban' => 'Records Per Page (Kanban)',
      'tabList' => 'Lista de abas',
      'quickCreateList' => 'Lista de Criação Rápida',
      'exportDelimiter' => 'Delimitador de exportação',
      'globalSearchEntityList' => 'Pesquisa Global de Entidades',
      'authenticationMethod' => 'Método de Autenticação',
      'ldapHost' => 'Host',
      'ldapPort' => 'Porta',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Usuário',
      'ldapPassword' => 'Senha',
      'ldapBindRequiresDn' => 'Ligação exige Dn',
      'ldapBaseDn' => 'Dn Base',
      'ldapAccountCanonicalForm' => 'Formulário Canônico de Conta',
      'ldapAccountDomainName' => 'Nome de Domínio da Conta',
      'ldapTryUsernameSplit' => 'Tentar dividir o Nome de Usuário',
      'ldapPortalUserLdapAuth' => 'Use a autenticação LDAP para usuários do portal',
      'ldapCreateEspoUser' => 'Criar usuário no EspoCRM',
      'ldapSecurity' => 'Segurança',
      'ldapUserLoginFilter' => 'Filtro para Login de Usuário',
      'ldapAccountDomainNameShort' => 'Nome curto do Domínio da Conta',
      'ldapOptReferrals' => 'Referências Opt',
      'ldapUserNameAttribute' => 'Atributo Username',
      'ldapUserObjectClass' => 'ObjectClass do Usuário',
      'ldapUserTitleAttribute' => 'Atributo de Título de Usuário',
      'ldapUserFirstNameAttribute' => 'Atributo Primeiro Nome de Usuário',
      'ldapUserLastNameAttribute' => 'Atributo de Último Nome do Usuário',
      'ldapUserEmailAddressAttribute' => 'Atributo Endereço de Email de Usuário',
      'ldapUserTeams' => 'Times de Usuários',
      'ldapUserDefaultTeam' => 'Time padrão do usuário',
      'ldapUserPhoneNumberAttribute' => 'Atributo de Número de Telefone de Usuário',
      'ldapPortalUserPortals' => 'Portais Padrão para um Usuário do Portal',
      'ldapPortalUserRoles' => 'Regras Padrão para um Usuário do Portal',
      'exportDisabled' => 'Desabilitar exportação (permitido apenas para administradores)',
      'assignmentNotificationsEntityList' => 'Entidades a serem notificadas sobre a atribuição',
      'assignmentEmailNotifications' => 'Enviar notificações sobre as designações por e-mail',
      'assignmentEmailNotificationsEntityList' => 'Entidades para notificar',
      'streamEmailNotifications' => 'Notificações sobre atualizações no Stream para usuários internos',
      'portalStreamEmailNotifications' => 'Notificações sobre atualizações no Stream para usuários do portal',
      'streamEmailNotificationsEntityList' => 'Escopos de notificações por e-mail de stream',
      'streamEmailNotificationsTypeList' => 'Sobre o que notificar',
      'streamEmailWithContentEntityTypeList' => 'Entities with email body in stream notes',
      'emailNotificationsDelay' => 'Atraso de notificações por e-mail (em segundos)',
      'b2cMode' => 'Modo B2C',
      'avatarsDisabled' => 'Desabilitar Avatares',
      'followCreatedEntities' => 'Seguir os registros criados',
      'displayListViewRecordCount' => 'Exibir Contagem Total (na lista de exibição)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Desabilitar temas de usuários',
      'attachmentUploadMaxSize' => 'Upload Max Size (Mb)',
      'attachmentUploadChunkSize' => 'Upload Chunk Size (Mb)',
      'emailMessageMaxSize' => 'Tamanho Máx. E-mail (Mb)',
      'massEmailMaxPerHourCount' => 'Número máximo de e-mails enviados por hora',
      'massEmailMaxPerBatchCount' => 'Max number of emails sent per batch',
      'personalEmailMaxPortionSize' => 'Tamanho máximo da porção de email para busca de conta pessoal',
      'inboundEmailMaxPortionSize' => 'Tamanho máximo da porção de e-mail para busca de conta de grupo',
      'maxEmailAccountCount' => 'Número máx. de contas de email pessoais por usuário',
      'emailScheduledBatchCount' => 'Max number of scheduled emails sent per batch',
      'authTokenLifetime' => 'Vida útil do Token de Autenticação (horas)',
      'authTokenMaxIdleTime' => 'Tempo Máx. de Inatividade do Token de Autenticação (horas)',
      'dashboardLayout' => 'Layout Dashboard (padrão)',
      'siteUrl' => 'URL do Site',
      'addressPreview' => 'Visualização de Endereço',
      'addressFormat' => 'Formato Endereço',
      'personNameFormat' => 'Formato do nome da pessoa',
      'notificationSoundsDisabled' => 'Desativar notificações sonoras',
      'newNotificationCountInTitle' => 'Exibir novo número de notificação no título da página',
      'applicationName' => 'Nome Aplicação',
      'calendarEntityList' => 'Lista de Entidades do Calendário',
      'busyRangesEntityList' => 'Lista de entidades livres/ocupadas',
      'mentionEmailNotifications' => 'Enviar notificações por email sobre menções em postagens',
      'massEmailDisableMandatoryOptOutLink' => 'Desativar link de cancelamento obrigatório',
      'massEmailOpenTracking' => 'Rastreamento de abertura de Email',
      'massEmailVerp' => 'Usar VERP',
      'activitiesEntityList' => 'Lista das Atividades da ',
      'historyEntityList' => 'Lista do Histórico de Entidades',
      'currencyFormat' => 'Formato da Moeda',
      'currencyDecimalPlaces' => 'Casas Decimais Moeda',
      'aclAllowDeleteCreated' => 'Permitir remover registros criados',
      'adminNotifications' => 'Notificações do sistema no painel de administração',
      'adminNotificationsNewVersion' => 'Mostrar notificação quando a nova versão do EspoCRM estiver disponível',
      'adminNotificationsNewExtensionVersion' => 'Mostrar notificação quando novas versões de extensões estiverem disponíveis',
      'textFilterUseContainsForVarchar' => 'Use o operador \'contém\' ao filtrar campos varchar',
      'phoneNumberNumericSearch' => 'Numeric phone number search',
      'phoneNumberInternational' => 'International phone numbers',
      'phoneNumberExtensions' => 'Phone number extensions',
      'phoneNumberPreferredCountryList' => 'Preferred telephone country codes',
      'authTokenPreventConcurrent' => 'Apenas um token de autenticação por usuário',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors',
      'tabIconsDisabled' => 'Disable tab icons',
      'emailAddressIsOptedOutByDefault' => 'Mark new email addresses as opted-out',
      'outboundEmailBccAddress' => 'BCC address for external clients',
      'cleanupDeletedRecords' => 'Limpar registros excluídos',
      'addressCityList' => 'Lista de preenchimento automático da cidade do endereço ',
      'addressStateList' => 'Lista de Preenchimento Automático de Estados no Endereço',
      'fiscalYearShift' => 'Início do Ano Fiscal',
      'jobRunInParallel' => 'Trabalhos (Jobs) Executados em Paralelo',
      'jobMaxPortion' => 'Porção Máxima de Trabalhos (Jobs)',
      'jobPoolConcurrencyNumber' => 'Número de Simultaneidade do Pool de Trabalhos',
      'jobForceUtc' => 'Force UTC Time Zone',
      'daemonInterval' => 'Intervalo de Daemon',
      'daemonMaxProcessNumber' => 'Número Máx. de Processo do Daemon',
      'daemonProcessTimeout' => 'Timeout do Processo Daemon',
      'cronDisabled' => 'Desativar Cron',
      'maintenanceMode' => 'Modo de manutenção',
      'useWebSocket' => 'Usar WebSocket',
      'passwordRecoveryDisabled' => 'Desativar recuperação de senha',
      'passwordRecoveryForAdminDisabled' => 'Desative a recuperação de senha para usuários administradores',
      'passwordRecoveryForInternalUsersDisabled' => 'Desativar a recuperação de senha para usuários internos',
      'passwordRecoveryNoExposure' => 'Impedir a exposição do endereço de e-mail no formulário de recuperação de senha',
      'passwordGenerateLength' => 'Comprimento das senhas geradas',
      'passwordStrengthLength' => 'Tamanho mínimo de senha',
      'passwordStrengthLetterCount' => 'Número de letras exigidas na senha',
      'passwordStrengthNumberCount' => 'Número de dígitos exigidos na senha',
      'passwordStrengthBothCases' => 'A senha deve conter letras maiúsculas e minúsculas',
      'passwordStrengthSpecialCharacterCount' => 'Number of special character required in password',
      'auth2FA' => 'Ativar Autenticação de 2 fatores',
      'auth2FAForced' => 'Forçar usuários regulares a configurar 2FA',
      'auth2FAMethodList' => 'Métodos 2FA disponíveis',
      'auth2FAInPortal' => 'Allow 2FA in portals',
      'workingTimeCalendar' => 'Working Time Calendar',
      'oidcClientId' => 'OIDC Client ID',
      'oidcClientSecret' => 'OIDC Client Secret',
      'oidcAuthorizationRedirectUri' => 'OIDC Authorization Redirect URI',
      'oidcAuthorizationEndpoint' => 'OIDC Authorization Endpoint',
      'oidcTokenEndpoint' => 'OIDC Token Endpoint',
      'oidcUserInfoEndpoint' => 'OIDC UserInfo Endpoint',
      'oidcJwksEndpoint' => 'OIDC JSON Web Key Set Endpoint',
      'oidcJwtSignatureAlgorithmList' => 'OIDC JWT Allowed Signature Algorithms',
      'oidcScopes' => 'OIDC Scopes',
      'oidcGroupClaim' => 'OIDC Group Claim',
      'oidcCreateUser' => 'OIDC Create User',
      'oidcUsernameClaim' => 'OIDC Username Claim',
      'oidcTeams' => 'OIDC Teams',
      'oidcSync' => 'OIDC Sync',
      'oidcSyncTeams' => 'OIDC Sync Teams',
      'oidcFallback' => 'OIDC Fallback Login',
      'oidcAllowRegularUserFallback' => 'OIDC Allow fallback login for regular users',
      'oidcAllowAdminUser' => 'OIDC Allow OIDC login for admin users',
      'oidcLogoutUrl' => 'OIDC Logout URL',
      'oidcAuthorizationPrompt' => 'OIDC Authorization Prompt',
      'pdfEngine' => 'PDF Engine',
      'quickSearchFullTextAppendWildcard' => 'Append wildcard in quick search',
      'authIpAddressCheck' => 'Restrict access by IP address',
      'authIpAddressWhitelist' => 'IP Address Whitelist',
      'authIpAddressCheckExcludedUsers' => 'Users excluded from check',
      'availableReactions' => 'Available Reactions',
      'baselineRole' => 'Baseline Role',
      'saleMarkup' => 'Default Markup for Sale (%)',
      'rentMarkup' => 'Default Markup for Rent (%)',
      'realEstateEmailSending' => 'Email requestors about matching properties',
      'realEstatePropertyTemplate' => 'Email Template for Property',
      'realEstateEmailSendingAssignedUserCc' => 'Add assigned user to CC',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Porta',
      'smtpSecurity' => 'Segurança',
      'smtpUsername' => 'Usuário',
      'smtpPassword' => 'Senha',
      'addressCountryList' => 'Lista de Preenchimento Automático de Países no Endereço'
    ],
    'options' => [
      'authenticationMethod' => [
        'Oidc' => 'OIDC'
      ],
      'currencyFormat' => [
        1 => '10 BRL',
        2 => 'R$10'
      ],
      'personNameFormat' => [
        'firstLast' => 'Primeiro Último',
        'lastFirst' => 'Último Primeiro',
        'firstMiddleLast' => 'Primeiro Meio Último',
        'lastFirstMiddle' => 'Último Primeiro Meio'
      ],
      'streamEmailNotificationsTypeList' => [
        'Post' => 'Postagens',
        'Status' => 'Atualizações de Status',
        'EmailReceived' => 'Emails recebidos'
      ],
      'auth2FAMethodList' => [
        'Totp' => 'TOTP',
        'Email' => 'Email',
        'Sms' => 'SMS'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'tooltips' => [
      'authIpAddressCheckExcludedUsers' => 'Users that will be able to log in regardless whether their IP address is in the whitelist.',
      'authIpAddressWhitelist' => 'A list of IP addresses or ranges in CIDR notation.

Portals are not affected by restriction.',
      'workingTimeCalendar' => 'A working time calendar that will be applied to all users by default.',
      'displayListViewRecordCount' => 'Um número total de registros será mostrado na exibição de lista.',
      'currencyList' => 'Quais moedas estarão disponíveis no sistema.',
      'activitiesEntityList' => 'Quais registros estarão disponíveis no painel Atividades.',
      'historyEntityList' => 'Quais registros estarão disponíveis no painel Histórico.',
      'calendarEntityList' => 'Quais registros estarão disponíveis no calendário.',
      'addressStateList' => 'Sugestões de Estados para campos de endereço.',
      'addressCityList' => 'Sugestões de Cidades para campos de endereço.',
      'addressCountryList' => 'Sugestões de Países para campos de endereço.',
      'exportDisabled' => 'Os usuários não tem permissão para exportar registros. Apenas o admin tem permissão.',
      'globalSearchEntityList' => 'Quais registros podem ser pesquisados com a Pesquisa Global.',
      'siteUrl' => 'Uma URL desta instância do EspoCRM. Você precisa alterá-la se mudar para outro domínio.',
      'useCache' => 'Não é recomendado desativar, a menos para fins de desenvolvimento.',
      'useWebSocket' => 'O WebSocket permite a comunicação interativa bidirecional entre um servidor e um navegador. Requer a configuração do daemon WebSocket em seu servidor. Verifique a documentação para mais informações.',
      'passwordRecoveryForInternalUsersDisabled' => 'Apenas usuários do portal poderão recuperar a senha.',
      'passwordRecoveryNoExposure' => 'Não será possível determinar se um endereço de e-mail específico está cadastrado no sistema.',
      'emailAddressLookupEntityTypeList' => 'Para preenchimento automático de endereços de e-mail.',
      'emailAddressSelectEntityTypeList' => 'Record types available when selecting recipients for a composed email.',
      'emailNotificationsDelay' => 'Uma mensagem pode ser editada dentro do período de tempo especificado antes que a notificação seja enviada. ',
      'outboundEmailFromAddress' => 'Endereço de e-mail do sistema.',
      'busyRangesEntityList' => 'O que será levado em consideração ao mostrar intervalos de tempo ocupado no agendador e linha do tempo.',
      'massEmailVerp' => 'Caminho de retorno de envelope variável. Para um melhor tratamento de mensagens devolvidas. Certifique-se de que seu provedor SMTP oferece suporte.',
      'recordsPerPage' => 'Número de registros exibidos inicialmente nas visualizações de lista.',
      'recordsPerPageSmall' => 'Contar registros nos painéis de relacionamento.',
      'recordsPerPageSelect' => 'Número de registros mostrados inicialmente quando selecionando registros.',
      'recordsPerPageKanban' => 'Number of records initially displayed in kanban columns.',
      'outboundEmailIsShared' => 'Permitir que os usuários enviem e-mails deste endereço.',
      'followCreatedEntities' => 'Os usuários seguirão automaticamente os registros que criaram.',
      'emailMessageMaxSize' => 'Todos os emails de entrada que excederem um tamanho especificado serão buscados sem corpo e anexos.',
      'authTokenLifetime' => 'Define por quanto tempo os tokens podem existir.
0 - significa sem expiração.',
      'authTokenMaxIdleTime' => 'Define quanto tempo desde que os últimos tokens de acesso podem existir.
0 - significa sem expiração.',
      'userThemesDisabled' => 'Se marcada, os usuários não poderão selecionar outro tema.',
      'ldapUsername' => 'O DN completo do usuário do sistema que permite pesquisar outros usuários. Por exemplo. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'A senha para acessar o servidor LDAP.',
      'ldapAuth' => 'Credenciais de acesso para o servidor LDAP.',
      'ldapUserNameAttribute' => 'O atributo para identificar o usuário.
Ex: "userPrincipalName" ou "sAMAccountName" para o Active Directory, "uid" para o OpenLDAP.',
      'ldapUserObjectClass' => 'Atributo ObjectClass para pesquisar usuários. Ex: "person" para AD, "inetOrgPerson" para OpenLDAP.',
      'ldapAccountCanonicalForm' => 'O tipo de formulário canônico da sua conta. Existem 4 opções:

- \'Dn\' - o formulário no formato \'CN=tester,OU=espocrm,DC=teste, DC=lan\'.

- \'Username\' - o formulário \'tester\'.

- \'Backslash\' - o formulário \'COMPANY\\tester\'.

- \'Principal\' - o formulário \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'A opção de formatar o username no formato DN.',
      'ldapBaseDn' => 'O DN base padrão usado para pesquisar usuários. Ex: "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'A opção de dividir um username com o domínio.',
      'ldapOptReferrals' => 'se as referências devem ser seguidas para o cliente LDAP.',
      'ldapPortalUserLdapAuth' => 'Permitir que os usuários do portal usem a autenticação LDAP em vez da autenticação do Espo.',
      'ldapCreateEspoUser' => 'Esta opção permite que o EspoCRM crie um usuário a partir do LDAP.',
      'ldapUserFirstNameAttribute' => 'Atributo LDAP que é usado para determinar o nome do usuário. Ex: "givenname".',
      'ldapUserLastNameAttribute' => 'Atributo LDAP que é usado para determinar o sobrenome. Ex: "sn".',
      'ldapUserTitleAttribute' => 'Atributo LDAP que é usado para determinar o título do usuário. Ex: "title".',
      'ldapUserEmailAddressAttribute' => 'Atributo LDAP que é usado para determinar o endereço de email do usuário. Ex: "mail".',
      'ldapUserPhoneNumberAttribute' => 'Atributo LDAP que é usado para determinar o número de telefone do usuário. Ex: "telephoneNumber".',
      'ldapUserLoginFilter' => 'O filtro que permite restringir os usuários que podem utilizar o EspoCRM. Ex:  "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'O domínio que é usado para autorização ao servidor LDAP.',
      'ldapAccountDomainNameShort' => 'O domínio curto que é usado para autorização ao servidor LDAP.',
      'ldapUserTeams' => 'Times para usuário criado. Para saber mais, consulte o perfil do usuário.',
      'ldapUserDefaultTeam' => 'Time padrão para o usuário criado. Para saber mais, consulte o perfil do usuário.',
      'ldapPortalUserPortals' => 'Portais Padrão para o Usuário do Portal criado',
      'ldapPortalUserRoles' => 'Regras Padrão para o Usuário do Portal criado',
      'b2cMode' => 'Por padrão, o EspoCRM é adaptado para B2B. Você pode mudar para B2C.',
      'currencyDecimalPlaces' => 'Número de casas decimais. Se estiver vazio, todas as casas decimais não vazias serão exibidas.',
      'aclStrictMode' => 'Habilitado: O acesso aos escopos será proibido se não estiver especificado nas regras.

Desabilitado: O acesso aos escopos será permitido se não for especificado nas regras.',
      'aclAllowDeleteCreated' => 'Os usuários poderão remover os registros que criaram mesmo que não tenham acesso de exclusão.',
      'textFilterUseContainsForVarchar' => 'Se não estiver marcado, o operador \'começa com\' é usado. Você pode usar o curinga \'%\'.',
      'streamEmailNotificationsEntityList' => 'Notificações por email sobre atualizações de fluxo de registros seguidos. Os usuários receberão notificações por email apenas para tipos de entidade especificados.',
      'authTokenPreventConcurrent' => 'Os usuários não poderão fazer login em vários dispositivos simultaneamente.',
      'emailAddressIsOptedOutByDefault' => 'Ao criar um novo endereço de e-mail de registro será marcado como desativado.',
      'cleanupDeletedRecords' => 'Os registros removidos serão excluídos do banco de dados após um tempo.',
      'jobRunInParallel' => 'Os trabalhos (jobs) serão executados em processos paralelos.',
      'jobPoolConcurrencyNumber' => 'Número máximo de processos executados simultaneamente.',
      'jobMaxPortion' => 'Número máximo de trabalhos (jobs) processados por uma execução.',
      'jobForceUtc' => 'Use the UTC time zone for scheduled jobs. Otherwise, the time zone set in settings will be used.',
      'daemonInterval' => 'Intervalo em segundos entre as execuções dos processos crons.',
      'daemonMaxProcessNumber' => 'Número máximo de processos cron executados simultaneamente.',
      'daemonProcessTimeout' => 'Tempo máximo de execução (em segundos) alocado para um único processo cron.',
      'cronDisabled' => 'Cron não será executado.',
      'maintenanceMode' => 'Somente administradores terão acesso ao sistema.',
      'oidcGroupClaim' => 'A claim to use for team mapping.',
      'oidcFallback' => 'Allow login by username/password.',
      'oidcCreateUser' => 'Create a new user in Espo when no matching user found.',
      'oidcSync' => 'Sync user data (on every login).',
      'oidcSyncTeams' => 'Sync user teams (on every login).',
      'oidcUsernameClaim' => 'A claim to use for a username (for user matching and creation).',
      'oidcTeams' => 'Espo teams mapped against groups/teams/roles of the identity provider. Teams with an empty mapping value will be always assigned to a user (when creating or syncing).',
      'oidcLogoutUrl' => 'A URL the browser will redirect to after logging out from Espo. Intended for clearing the session information in the browser and doing logging out on the provider side. Usually the URL contains a redirect-URL parameter, to return back to Espo.

Available placeholders:
* `{siteUrl}`
* `{clientId}`',
      'quickSearchFullTextAppendWildcard' => 'Append a wildcard to the autocomplete search query when Full-Text search is enabled. Reduces search performance.',
      'baselineRole' => 'The default role applied to all users. Any additional roles assigned to a user grant permissions on top of this baseline.

**Important**. Changing this role affects all users – review the change carefully to avoid granting unintended permissions.',
      'smtpServer' => 'Se estiver vazio, será usada a Conta de Email do Grupo com o endereço de email correspondente.'
    ],
    'labels' => [
      'Group Tab' => 'Aba Grupo',
      'Divider' => 'Divider',
      'System' => 'Sistema',
      'Locale' => 'Idioma',
      'Search' => 'Pesquisa',
      'Misc' => 'Misc',
      'SMTP' => 'SMTP',
      'General' => 'General',
      'Phone Numbers' => 'Phone Numbers',
      'Navbar' => 'Navbar',
      'Dashboard' => 'Dashboard',
      'Configuration' => 'Configuração',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Notificações de Email',
      'Currency Settings' => 'Configurações de Moeda',
      'Currency Rates' => 'Conversão de moedas',
      'Mass Email' => 'E-mail em Massa',
      'Scheduled Send' => 'Scheduled Send',
      'Test Connection' => 'Testar conexão',
      'Connecting' => 'Conectando...',
      'Activities' => 'Atividades',
      'Admin Notifications' => 'Administrar Notificações',
      'Passwords' => 'Senhas',
      '2-Factor Authentication' => 'Autenticação de 2 Fatores',
      'Attachments' => 'Attachments',
      'IdP Group' => 'IdP Group',
      'Access' => 'Access',
      'Strength' => 'Strength',
      'Recovery' => 'Recovery'
    ],
    'messages' => [
      'ldapTestConnection' => 'A conexão foi estabelecida com sucesso.',
      'confirmBaselineRoleChange' => 'Are you sure you want to change the baseline role? An unconsidered change may grant unintended permissions to all users.'
    ]
  ],
  'Stream' => [
    'messages' => [
      'infoMention' => 'Digite **@username** para mencionar o usuário na postagem.',
      'infoSyntax' => 'Sintaxe de markdown disponível',
      'couldNotAddFollowerUserHasNoAccessToStream' => 'Não foi possível adicionar o usuário \'{userName}\' aos seguidores. O usuário não tem acesso \'stream\' ao registro'
    ],
    'syntaxItems' => [
      'code' => 'código',
      'multilineCode' => 'código de várias linhas',
      'strongText' => 'strong text',
      'emphasizedText' => 'emphasized text',
      'deletedText' => 'Texto excluído',
      'blockquote' => 'blockquote',
      'link' => 'link text'
    ]
  ],
  'Team' => [
    'fields' => [
      'name' => 'Nome',
      'roles' => 'Regras',
      'layoutSet' => 'Conjunto de Layout',
      'workingTimeCalendar' => 'Working Time Calendar',
      'positionList' => 'Lista de Posições',
      'userRole' => 'User Role'
    ],
    'links' => [
      'users' => 'Usuários',
      'notes' => 'Notas',
      'roles' => 'Regras',
      'layoutSet' => 'Conjunto de Layout',
      'workingTimeCalendar' => 'Working Time Calendar',
      'inboundEmails' => 'Contas de Email do Grupo',
      'groupEmailFolders' => 'Group Email Folders'
    ],
    'tooltips' => [
      'workingTimeCalendar' => 'A calendar will be applied to users who have this team set as a Default Team.',
      'layoutSet' => 'Fornece a capacidade de ter layouts que diferem dos padrões. O Conjunto de Layout será aplicado aos usuários que têm esse time definido como Time Padrão (Default Team).',
      'roles' => 'Todos os usuários deste time terão acesso as configurações das regras selecionadas.',
      'positionList' => 'Posições disponíveis neste time. E.g. Vendedor, Gerente.'
    ],
    'labels' => [
      'Create Team' => 'Criar Time'
    ]
  ],
  'Template' => [
    'fields' => [
      'name' => 'Nome',
      'body' => 'Corpo',
      'entityType' => 'Tipo de Entidade',
      'header' => 'Cabeçalho',
      'footer' => 'Rodapé',
      'leftMargin' => 'Margem Esquerda',
      'topMargin' => 'Margem Superior',
      'rightMargin' => 'Margem Direita',
      'bottomMargin' => 'Margem Inferior',
      'printFooter' => 'Imprimir Rodapé',
      'printHeader' => 'Cabeçalho de Impressão',
      'footerPosition' => 'Posição do Rodapé',
      'headerPosition' => 'Posição do Cabeçalho',
      'variables' => 'Espaços Reservados Disponíveis',
      'pageOrientation' => 'Orientação de Página',
      'pageFormat' => 'Formato do Papél',
      'pageWidth' => 'Larg. da página (mm)',
      'pageHeight' => 'Altura da Página (mm)',
      'fontFace' => 'Fonte',
      'title' => 'Título',
      'style' => 'Style',
      'status' => 'Status',
      'filename' => 'Filename'
    ],
    'links' => [],
    'labels' => [
      'Create Template' => 'Criar template'
    ],
    'options' => [
      'status' => [
        'Active' => 'Active',
        'Inactive' => 'Inactive'
      ],
      'pageOrientation' => [
        'Portrait' => 'Retrato',
        'Landscape' => 'Paisagem'
      ],
      'pageFormat' => [
        'Custom' => 'Personalizado'
      ],
      'placeholders' => [
        'pagebreak' => 'Quebra de página',
        'today' => 'Hoje (data)',
        'now' => 'Agora (Data e Hora)'
      ],
      'fontFace' => []
    ],
    'tooltips' => [
      'filename' => 'An optional filename. Entity attributes can be used as placeholders.

Additional placeholder:
- `{{today}}`

Example:
`Document_{{today}}_{{name}}`',
      'footer' => 'Use {pageNumber} para imprimir o número da página.',
      'variables' => 'Necessário espaço reservado no Cabeçalho, Corpo ou Rodapé para copiar e colar.'
    ]
  ],
  'User' => [
    'fields' => [
      'name' => 'Nome',
      'userName' => 'Nome de Usuário',
      'title' => 'Título',
      'type' => 'Tipo',
      'isAdmin' => 'Administrador',
      'defaultTeam' => 'Time Padrão',
      'emailAddress' => 'E-mail',
      'phoneNumber' => 'Telefone',
      'roles' => 'Regras',
      'portals' => 'Portais',
      'portalRoles' => 'Regras de Portal',
      'teamRole' => 'Posição',
      'password' => 'Senha',
      'currentPassword' => 'Senha Atual',
      'passwordConfirm' => 'Confirmação da Senha',
      'newPassword' => 'Nova senha',
      'newPasswordConfirm' => 'Confirme a nova senha',
      'yourPassword' => 'Sua senha atual',
      'avatar' => 'Avatar',
      'avatarColor' => 'Avatar Color',
      'isActive' => 'Está ativo',
      'isPortalUser' => 'É Usuário do Portal',
      'contact' => 'Contato',
      'accounts' => 'Contas',
      'account' => 'Conta (Primária)',
      'sendAccessInfo' => 'Enviar e-mail com informações de acesso ao usuário',
      'portal' => 'Portal',
      'gender' => 'Gênero',
      'position' => 'Posição no Time',
      'ipAddress' => 'Endereço IP',
      'passwordPreview' => 'Pré-visualização de senha',
      'isSuperAdmin' => 'É Super Admin',
      'lastAccess' => 'Último Acesso',
      'apiKey' => 'Chave de API',
      'secretKey' => 'Chave Secreta',
      'dashboardTemplate' => 'Modelo de Dashboard',
      'workingTimeCalendar' => 'Working Time Calendar',
      'auth2FA' => '2FA',
      'authMethod' => 'Método de autenticação',
      'auth2FAEnable' => 'Ativar Autenticação de 2 Fatores',
      'auth2FAMethod' => 'Método 2FA',
      'auth2FATotpSecret' => 'Segredo 2FA TOTP',
      'layoutSet' => 'Layout Set',
      'acceptanceStatus' => 'Status de Aceitação',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Status de Aceitação (Ligações)'
    ],
    'links' => [
      'defaultTeam' => 'Time Padrão',
      'teams' => 'Times',
      'roles' => 'Regras',
      'notes' => 'Notas',
      'portals' => 'Portais',
      'portalRoles' => 'Regras de Portal',
      'contact' => 'Contato',
      'accounts' => 'Contas',
      'account' => 'Conta (Primária)',
      'tasks' => 'Tarefas',
      'userData' => 'Dados do Usuário',
      'dashboardTemplate' => 'Modelo de Dashboard',
      'workingTimeCalendar' => 'Working Time Calendar',
      'workingTimeRanges' => 'Working Time Exceptions',
      'layoutSet' => 'Layout Set',
      'targetLists' => 'Lista de alvos'
    ],
    'labels' => [
      'Create User' => 'Criar Corretor',
      'Generate' => 'Gerar',
      'Access' => 'Acesso',
      'Preferences' => 'Preferências',
      'Change Password' => 'Trocar Senha',
      'Teams and Access Control' => 'Times e controle de acesso',
      'Forgot Password?' => 'Esqueceu a senha?',
      'Password Change Request' => 'Solicitar troca da senha',
      'Email Address' => 'Endereço de e-mail',
      'External Accounts' => 'Contas externas',
      'Email Accounts' => 'Contas de e-mail',
      'Portal' => 'Portal',
      'Create Portal User' => 'Criar Usuário de Portal',
      'Proceed w/o Contact' => 'Prossiga sem Contato',
      'Generate New API Key' => 'Gerar Nova Chave de API',
      'Generate New Password' => 'Gerar Nova Senha',
      'Send Password Change Link' => 'Enviar link de alteração de senha',
      'Back to login form' => 'Voltar ao formulário de login',
      'Requirements' => 'Requisitos',
      'Security' => 'Segurança',
      'Reset 2FA' => 'Reiniciar 2FA',
      'Code' => 'Código',
      'Secret' => 'Segredo',
      'Send Code' => 'Enviar código',
      'Login Link' => 'Login Link'
    ],
    'tooltips' => [
      'defaultTeam' => 'Todos os registros criados por este usuário serão relacionados e este time por padrão.',
      'userName' => 'Letras a-z, números 0-9 e underscores são permitidos.',
      'isAdmin' => 'Usuário Admin pode acessar tudo.',
      'isActive' => 'Se desmarcado, o usuário não conseguirá logar.',
      'teams' => 'Times aos quais este usuário pertence. O controle de acesso é herdado das regras do time.',
      'roles' => 'Regras de acesso adicionais. Use se o usuário não pertence a nenhum time ou se for necessário extender o controle de acesso deste usuário.',
      'portalRoles' => 'Regras adicionais do portal. Use-o para estender o nível de controle de acesso exclusivamente para este usuário.',
      'portals' => 'Portais aos quais este usuário tem acesso.',
      'layoutSet' => 'Layouts from the specified layout set will be applied for the user. The default layouts will be overridden.'
    ],
    'messages' => [
      '2faMethodNotConfigured' => 'The 2FA method is not fully configured in the system.',
      'loginAs' => 'Open the login link in an incognito window to preserve your current session. Use your admin credentials to log in.',
      'sendPasswordChangeLinkConfirmation' => 'Um e-mail com um link exclusivo será enviado ao usuário permitindo que ele altere sua senha. O link expirará após um determinado período de tempo.',
      'passwordRecoverySentIfMatched' => 'Supondo que os dados inseridos correspondam a qualquer conta de usuário.',
      'passwordStrengthLength' => 'Deve ter pelo menos {length} caracteres.',
      'passwordStrengthLetterCount' => 'Deve conter pelo menos {count} letra(s).',
      'passwordStrengthNumberCount' => 'Deve conter pelo menos {count} dígito(s).',
      'passwordStrengthSpecialCharacterCount' => 'Must contain at least {count} special character(s).',
      'passwordStrengthBothCases' => 'Deve conter letras maiúsculas e minúsculas.',
      'passwordWillBeSent' => 'A senha será enviada para o email do usuário.',
      'passwordChanged' => 'A senha foi atualizada',
      'userCantBeEmpty' => 'O nome de usuário deve ser informado',
      'wrongUsernamePassword' => 'Usuário / senha incorretos',
      'failedToLogIn' => 'Failed to log in',
      'emailAddressCantBeEmpty' => 'O endereço de e-mail deve ser informado',
      'userNameEmailAddressNotFound' => 'Usuário / E-mail não localizados',
      'forbidden' => 'Proibido, por favor tente mais tarde',
      'uniqueLinkHasBeenSent' => 'Um link único foi enviado para o endereço de e-mail informado.',
      'passwordChangedByRequest' => 'A senha foi atualizada.',
      'setupSmtpBefore' => 'Você precisa configurar [configurações SMTP]({url}) para que o sistema possa enviar a senha por e-mail.',
      'userNameExists' => 'Nome de Usuário',
      'loginError' => 'Error occurred',
      'wrongCode' => 'Código Errado',
      'codeIsRequired' => 'Código é obrigatório',
      'yourAuthenticationCode' => 'Seu código de autenticação: {code}.',
      'choose2FaSmsPhoneNumber' => 'Selecione um número de telefone que será usado para 2FA.',
      'choose2FaEmailAddress' => 'Selecione um endereço de e-mail que será usado para 2FA. É altamente recomendável usar um endereço de e-mail não principal.',
      'enterCodeSentInEmail' => 'Digite o código enviado para o seu endereço de e-mail.',
      'enterCodeSentBySms' => 'Digite o código enviado por SMS para o seu número de telefone.',
      'enterTotpCode' => 'Entre com o código de seu app autenticador.',
      'verifyTotpCode' => 'Digitalize o código QR com seu aplicativo autenticador móvel. Se você tiver problemas com a digitalização, poderá inserir o segredo manualmente. Depois disso, você verá um código de 6 dígitos em seu aplicativo. Digite este código no campo abaixo.',
      'generateAndSendNewPassword' => 'Uma nova senha será gerada e enviada para o endereço de email do usuário.',
      'security2FaResetConfirmation' => 'Tem certeza de que deseja redefinir as configurações atuais de 2FA?',
      'auth2FARequiredHeader' => 'Autenticação de 2 fatores necessária',
      'auth2FARequired' => 'Você precisa configurar a autenticação de 2 fatores. Use um aplicativo autenticador em seu celular (ex: Google Authenticator).',
      'ldapUserInEspoNotFound' => 'O usuário não foi encontrado no EspoCRM. Entre em contato com o administrador para criar o usuário.',
      'passwordChangeRequestNotFound' => 'A solicitação de alteração de senha não foi encontrada. Pode estar expirada. Tente iniciar uma nova recuperação de senha a partir do [login page]({url}).',
      'defaultTeamIsNotUsers' => 'Default Team should be one of user\'s Teams'
    ],
    'options' => [
      'gender' => [
        '' => 'Não Informado',
        'Male' => 'Masculino',
        'Female' => 'Feminino',
        'Neutral' => 'Neutro'
      ],
      'type' => [
        'regular' => 'Regular',
        'admin' => 'Administrador',
        'portal' => 'Portal',
        'system' => 'Sistema',
        'super-admin' => 'Super Admin',
        'api' => 'API'
      ],
      'authMethod' => [
        'ApiKey' => 'Chave de API',
        'Hmac' => 'HMAC'
      ]
    ],
    'boolFilters' => [
      'onlyMyTeam' => 'Apenas meu time',
      'onlyMe' => 'OnlyMe'
    ],
    'presetFilters' => [
      'active' => 'Ativo',
      'activePortal' => 'Portal Ativo',
      'activeApi' => 'API Ativa'
    ],
    'actions' => [
      'changePosition' => 'Change Position'
    ]
  ],
  'Webhook' => [
    'labels' => [
      'Create Webhook' => 'Criar Webhook'
    ],
    'fields' => [
      'event' => 'Evento',
      'url' => 'URL',
      'isActive' => 'Está Ativo',
      'user' => 'API de Usuário',
      'entityType' => 'Tipo de Entidade',
      'field' => 'Campo',
      'secretKey' => 'Chave Secreta',
      'skipOwn' => 'Skip Own'
    ],
    'links' => [
      'user' => 'Usuário',
      'queueItems' => 'Queue Items'
    ],
    'tooltips' => [
      'skipOwn' => 'Do not send if the event was initiated by the user owning the webhook.'
    ]
  ],
  'WebhookEventQueueItem' => [
    'fields' => [
      'event' => 'Event',
      'target' => 'Target',
      'data' => 'Data',
      'isProcessed' => 'Is Processed',
      'user' => 'User'
    ],
    'links' => [
      'target' => 'Target',
      'user' => 'User'
    ]
  ],
  'WebhookQueueItem' => [
    'fields' => [
      'event' => 'Event',
      'webhook' => 'Webhook',
      'target' => 'Target',
      'data' => 'Data',
      'status' => 'Status',
      'processedAt' => 'Processed At',
      'attempts' => 'Attempts',
      'processAt' => 'Process At'
    ],
    'links' => [
      'webhook' => 'Webhook'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ]
  ],
  'WorkingTimeCalendar' => [
    'labels' => [
      'Create WorkingTimeCalendar' => 'Create Calendar'
    ],
    'fields' => [
      'timeZone' => 'Time Zone',
      'timeRanges' => 'Workday Schedule',
      'weekday0' => 'Sun',
      'weekday1' => 'Mon',
      'weekday2' => 'Tue',
      'weekday3' => 'Wed',
      'weekday4' => 'Thu',
      'weekday5' => 'Fri',
      'weekday6' => 'Sat',
      'weekday0TimeRanges' => 'Sun Schedule',
      'weekday1TimeRanges' => 'Mon Schedule',
      'weekday2TimeRanges' => 'Tue Schedule',
      'weekday3TimeRanges' => 'Wed Schedule',
      'weekday4TimeRanges' => 'Thu Schedule',
      'weekday5TimeRanges' => 'Fri Schedule',
      'weekday6TimeRanges' => 'Sat Schedule'
    ],
    'links' => [
      'ranges' => 'Exceptions'
    ]
  ],
  'WorkingTimeRange' => [
    'labels' => [
      'Create WorkingTimeRange' => 'Create Exception',
      'Calendars' => 'Calendars'
    ],
    'fields' => [
      'timeRanges' => 'Schedule',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'type' => 'Type',
      'calendars' => 'Calendars',
      'users' => 'Users'
    ],
    'links' => [
      'calendars' => 'Calendars',
      'users' => 'Users'
    ],
    'options' => [
      'type' => [
        'Non-working' => 'Non-working',
        'Working' => 'Working'
      ]
    ],
    'presetFilters' => [
      'actual' => 'Actual'
    ],
    'tooltips' => [
      'calendars' => 'Calendars to apply the exception to. The exception will be applied to all users of selected calendars.

Leave the field empty if you need to apply the exception only for specific users.',
      'users' => 'Specific users to apply the exception to.'
    ]
  ],
  'Account' => [
    'fields' => [
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'website' => 'Website',
      'phoneNumber' => 'Telefone',
      'billingAddress' => 'Endereço de Cobrança',
      'shippingAddress' => 'Endereço de Entrega',
      'description' => 'Descrição',
      'sicCode' => 'CNPJ',
      'industry' => 'Ramo de Atividade',
      'type' => 'Tipo',
      'contactRole' => 'Regra',
      'contactIsInactive' => 'Inativo',
      'campaign' => 'Campanha',
      'targetLists' => 'Listas de Alvo',
      'targetList' => 'Lista de Alvo',
      'originalLead' => 'Lead Original',
      'assignedUser' => 'Corretor designado'
    ],
    'links' => [
      'contacts' => 'Contatos',
      'contactsPrimary' => 'Contatos (primário)',
      'opportunities' => 'Oportunidades',
      'cases' => 'Atendimentos',
      'documents' => 'Documentos',
      'meetingsPrimary' => 'Reuniões (Interno)',
      'callsPrimary' => 'Ligações (Interno)',
      'tasksPrimary' => 'Tarefas (Interno)',
      'emailsPrimary' => 'Emails (expandido)',
      'targetLists' => 'Lista de Alvos',
      'campaignLogRecords' => 'Log da Campanha',
      'campaign' => 'Campanha',
      'portalUsers' => 'Usuários do Portal',
      'originalLead' => 'Lead Original',
      'properties' => 'Properties'
    ],
    'options' => [
      'type' => [
        'Customer' => 'Cliente',
        'Investor' => 'Investidor',
        'Partner' => 'Parceiro',
        'Reseller' => 'Revendedor'
      ],
      'industry' => [
        'Aerospace' => 'Aeroespacial',
        'Agriculture' => 'Agricultura',
        'Advertising' => 'Publicidade',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Architecture' => 'Arquitetura',
        'Automotive' => 'Automotiva',
        'Banking' => 'Banco',
        'Biotechnology' => 'Biotecnologia',
        'Building Materials & Equipment' => 'Materiais de Construção e Equipamento',
        'Chemical' => 'Química',
        'Construction' => 'Construção',
        'Computer' => 'Computadores',
        'Defense' => 'Defesa',
        'Creative' => 'Criativa',
        'Culture' => 'Cultura',
        'Consulting' => 'Consultoria',
        'Education' => 'Educação',
        'Electronics' => 'Eletrônicos',
        'Electric Power' => 'Energia Elétrica',
        'Energy' => 'Energia',
        'Entertainment & Leisure' => 'Entretenimento e Laser',
        'Finance' => 'Finanças',
        'Food & Beverage' => 'Alimentação',
        'Grocery' => 'Mercearia',
        'Hospitality' => 'Hotelaria',
        'Healthcare' => 'Plano de Saúde',
        'Insurance' => 'Seguro',
        'Legal' => 'Jurídico',
        'Manufacturing' => 'Manufatura',
        'Mass Media' => 'Mídia de Massa',
        'Mining' => 'Mineração',
        'Music' => 'Musica',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publicações',
        'Petroleum' => 'Petróleo',
        'Real Estate' => 'Imobiliário',
        'Retail' => 'Varejo',
        'Shipping' => 'Navegação',
        'Service' => 'Serviços',
        'Support' => 'Suporte',
        'Sports' => 'Esportes',
        'Software' => 'Software',
        'Technology' => 'Tecnologia',
        'Telecommunications' => 'Telecomunicações',
        'Television' => 'Televisão',
        'Testing, Inspection & Certification' => 'Testes, Inspeção e Certificação',
        'Transportation' => 'Transportes',
        'Travel' => 'Viagem',
        'Venture Capital' => 'Capital de Risco',
        'Wholesale' => 'Atacado',
        'Water' => 'Água'
      ]
    ],
    'labels' => [
      'Create Account' => 'Criar Conta',
      'Copy Billing' => 'Copiar Cobrança',
      'Set Primary' => 'Definir Primário'
    ],
    'presetFilters' => [
      'customers' => 'Clientes',
      'partners' => 'Parceiros',
      'recentlyCreated' => 'Criado Recentemente'
    ],
    'tabs' => [
      'Account' => 'Account',
      'Support' => 'Support'
    ]
  ],
  'Calendar' => [
    'modes' => [
      'month' => 'Mês',
      'week' => 'Semana',
      'day' => 'Dia',
      'agendaWeek' => 'Semana',
      'agendaDay' => 'Dia',
      'timeline' => 'Linha do Tempo'
    ],
    'labels' => [
      'Today' => 'Hoje',
      'Create' => 'Criar',
      'Shared' => 'Compartilhado',
      'Add User' => 'Adicionar Usuário',
      'current' => 'atual',
      'time' => 'tempo',
      'User List' => 'Lista de Usuário',
      'View Calendar' => 'Ver Calendário',
      'Create Shared View' => 'Criar Visualização Compartilhada',
      'Edit Shared View' => 'Edit Shared View',
      'Shared Mode Options' => 'Shared Mode Options',
      'Manage Users' => 'Gerenciar Usuários'
    ]
  ],
  'Call' => [
    'fields' => [
      'name' => 'Nome',
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Data Final',
      'direction' => 'Direção',
      'duration' => 'Duração',
      'description' => 'Descrição',
      'users' => 'Usuários',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'reminders' => 'Lembretes',
      'account' => 'Conta',
      'acceptanceStatus' => 'Status de Aceitação',
      'uid' => 'UID',
      'assignedUser' => 'Corretor designado'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Planejado',
        'Held' => 'Realizada',
        'Not Held' => 'Não Realizada'
      ],
      'direction' => [
        'Outbound' => 'Saída',
        'Inbound' => 'Entrada'
      ],
      'acceptanceStatus' => [
        'None' => 'Nenhum',
        'Accepted' => 'Aceita',
        'Declined' => 'Rejeitada',
        'Tentative' => 'Tentativa'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Marcar para Realizar',
      'setNotHeld' => 'Marcar Não Realizado'
    ],
    'labels' => [
      'Create Call' => 'Criar Ligação',
      'Set Held' => 'Marcar como Realizada',
      'Set Not Held' => 'Marcar como não realizada',
      'Send Invitations' => 'Enviar Convites'
    ],
    'presetFilters' => [
      'planned' => 'Planejado',
      'held' => 'Realizado',
      'todays' => 'Hoje'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'name' => 'Nome',
      'description' => 'Descrição',
      'status' => 'Status',
      'type' => 'Tipo',
      'startDate' => 'Data de início',
      'endDate' => 'Data de fim',
      'targetLists' => 'Lista de Alvos',
      'excludingTargetLists' => 'Excluindo Lista de Alvos',
      'sentCount' => 'Enviar',
      'openedCount' => 'Abertos',
      'clickedCount' => 'Clicados',
      'optedOutCount' => 'Cancelamentos',
      'bouncedCount' => 'Bounces',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Hard Bounce',
      'softBouncedCount' => 'Soft Bounce',
      'leadCreatedCount' => 'Leads Criados',
      'revenue' => 'Receita',
      'revenueConverted' => 'Revenda (convertida)',
      'budget' => 'Orçamento',
      'budgetConverted' => 'Orçamento (convertido)',
      'budgetCurrency' => 'Moeda do Budget',
      'contactsTemplate' => 'Modelo de Contatos',
      'leadsTemplate' => 'Modelo de Leads',
      'accountsTemplate' => 'Modelo de Contas',
      'usersTemplate' => 'Modelo de Usuários',
      'mailMergeOnlyWithAddress' => 'Pular registros sem endereço preenchido',
      'assignedUser' => 'Corretor designado'
    ],
    'links' => [
      'targetLists' => 'Lista de alvos',
      'excludingTargetLists' => 'Excluindo Lista de Alvos',
      'accounts' => 'Contas',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'opportunities' => 'Oportunidades',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Email em Massa',
      'trackingUrls' => 'URLs de Rastreio',
      'contactsTemplate' => 'Modelo de Contatos',
      'leadsTemplate' => 'Modelo de Leads',
      'accountsTemplate' => 'Modelo de Contas',
      'usersTemplate' => 'Modelo de Usuários'
    ],
    'options' => [
      'type' => [
        'Email' => 'E-mail',
        'Informational Email' => 'Informational Email',
        'Web' => 'Web',
        'Television' => 'Televisão',
        'Radio' => 'Rádio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Correio'
      ],
      'status' => [
        'Planning' => 'Planejamento',
        'Active' => 'Ativa',
        'Inactive' => 'Inativa',
        'Complete' => 'Completa'
      ]
    ],
    'labels' => [
      'Create Campaign' => 'Criar Campanha',
      'Target Lists' => 'Lista de Alvos',
      'Statistics' => 'Estatísticas',
      'hard' => 'hard',
      'soft' => 'soft',
      'Unsubscribe' => 'Cancelar Subscrição',
      'Mass Emails' => 'Emails em Massa',
      'Email Templates' => 'Templates de email',
      'Unsubscribe again' => 'Cancelar inscrição novamente',
      'Subscribe again' => 'Inscreva-se novamente',
      'Create Target List' => 'Criar Lista de Alvo',
      'Mail Merge' => 'Mala Direta',
      'Generate Mail Merge PDF' => 'Gerar PDF de mala direta'
    ],
    'presetFilters' => [
      'active' => 'Ativa'
    ],
    'messages' => [
      'cannotChangeType' => 'Cannot change type.',
      'unsubscribed' => 'Você foi descadastrado de nossa lista de emails.',
      'subscribedAgain' => 'Você está inscrito novamente.'
    ],
    'tooltips' => [
      'targetLists' => 'Alvos que devem receber mensagens.',
      'excludingTargetLists' => 'Alvos que não devem receber mensagens.'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'action' => 'Ação',
      'actionDate' => 'Data',
      'data' => 'Dados',
      'campaign' => 'Campanha',
      'parent' => 'Alvo',
      'object' => 'Objeto',
      'application' => 'Aplicação',
      'queueItem' => 'Queue Item',
      'stringData' => 'Dados String',
      'stringAdditionalData' => 'Dados Adicionais String',
      'isTest' => 'É Teste'
    ],
    'links' => [
      'queueItem' => 'Queue Item',
      'parent' => 'Parent',
      'object' => 'Assunto',
      'campaign' => 'Campanha'
    ],
    'options' => [
      'action' => [
        'Sent' => 'Enviado',
        'Opened' => 'Aberto',
        'Opted Out' => 'Cancelado',
        'Bounced' => 'Bounced',
        'Clicked' => 'Clicado',
        'Lead Created' => 'Lead Criado',
        'Opted In' => 'Opted In'
      ]
    ],
    'labels' => [
      'All' => 'Tudo'
    ],
    'presetFilters' => [
      'sent' => 'Enviado',
      'opened' => 'Aberto',
      'optedOut' => 'Cancelado',
      'optedIn' => 'Opted In',
      'bounced' => 'Bounced',
      'clicked' => 'Clicado',
      'leadCreated' => 'Lead criado'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'url' => 'URL',
      'action' => 'Ação',
      'urlToUse' => 'Código para inserir em vez de URL',
      'message' => 'Mensagem',
      'campaign' => 'Campanha'
    ],
    'links' => [
      'campaign' => 'Campanha'
    ],
    'labels' => [
      'Create CampaignTrackingUrl' => 'Criar URL de rastreamento'
    ],
    'options' => [
      'action' => [
        'Redirect' => 'Redirecionar',
        'Show Message' => 'Mostrar Mensagem'
      ]
    ],
    'tooltips' => [
      'url' => 'O destinatário será redirecionado para este local depois de seguir o link.',
      'message' => 'A mensagem será mostrada ao destinatário depois que ele seguir o link. Markdown é suportado.'
    ]
  ],
  'Case' => [
    'fields' => [
      'name' => 'Nome',
      'number' => 'Número',
      'status' => 'Status',
      'account' => 'Conta',
      'contact' => 'Contato',
      'contacts' => 'Contatos',
      'priority' => 'Prioridade',
      'type' => 'Tipo',
      'description' => 'Descrição',
      'inboundEmail' => 'Conta de email do grupo',
      'lead' => 'Lead',
      'attachments' => 'Anexos',
      'originalEmail' => 'Original Email',
      'isInternal' => 'Hidden from Portal',
      'assignedUser' => 'Corretor designado'
    ],
    'links' => [
      'inboundEmail' => 'Conta de email do grupo',
      'account' => 'Conta',
      'contact' => 'Contato (Primário)',
      'Contacts' => 'Contatos',
      'meetings' => 'Reuniões',
      'calls' => 'Ligações',
      'tasks' => 'Tarefas',
      'emails' => 'Emails',
      'articles' => 'Artigos da Base de Conhecimento',
      'lead' => 'Lead',
      'attachments' => 'Anexos'
    ],
    'options' => [
      'status' => [
        'New' => 'Novo',
        'Assigned' => 'Designado',
        'Pending' => 'Pendente',
        'Closed' => 'Fechado',
        'Rejected' => 'Rejeitado',
        'Duplicate' => 'Duplicado'
      ],
      'priority' => [
        'Low' => 'Baixa',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente'
      ],
      'type' => [
        'Question' => 'Questão',
        'Incident' => 'Incidente',
        'Problem' => 'Problema'
      ]
    ],
    'labels' => [
      'Create Case' => 'Criar Atendimento',
      'Close' => 'Fechar',
      'Reject' => 'Rejeitar',
      'Closed' => 'Fechado',
      'Rejected' => 'Rejeitado'
    ],
    'presetFilters' => [
      'open' => 'Aberto',
      'closed' => 'Fechado'
    ]
  ],
  'Contact' => [
    'fields' => [
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Titulo da Conta',
      'account' => 'Conta',
      'accounts' => 'Contas',
      'phoneNumber' => 'Telefone',
      'accountType' => 'Tipo de Conta',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'opportunityRole' => 'Regra de Oportunidade',
      'accountRole' => 'Regra',
      'description' => 'Descrição',
      'campaign' => 'Campanha',
      'targetLists' => 'Listas de Alvo',
      'targetList' => 'Lista de Alvo',
      'portalUser' => 'Usuário do Portal',
      'hasPortalUser' => 'Tem Usuário do Portal',
      'originalLead' => 'Lead Original',
      'acceptanceStatus' => 'Status de Aceitação',
      'accountIsInactive' => 'Conta Inativa',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Status de Aceitação (Ligações)',
      'originalEmail' => 'Original Email',
      'properties' => 'Properties',
      'propertyRole' => 'Role'
    ],
    'links' => [
      'opportunities' => 'Oportunidades',
      'cases' => 'Atendimento',
      'targetLists' => 'Listas de Alvos',
      'campaignLogRecords' => 'Log das Campanhas',
      'campaign' => 'Campanha',
      'account' => 'Conta (Primária)',
      'accounts' => 'Contas',
      'casesPrimary' => 'Casos (Primários)',
      'tasksPrimary' => 'Tarefas (expandido)',
      'opportunitiesPrimary' => 'Oportunidades (Primárias)',
      'portalUser' => 'Usuário do Portal',
      'originalLead' => 'Lead Original',
      'documents' => 'Documentos',
      'properties' => 'Properties',
      'requests' => 'Requests',
      'requestsPrimary' => 'Requests (Primary)'
    ],
    'labels' => [
      'Create Contact' => 'Criar Contato'
    ],
    'options' => [
      'opportunityRole' => [
        '' => '',
        'Decision Maker' => 'Tomador de Decisão',
        'Evaluator' => 'Avaliador',
        'Influencer' => 'Influenciador',
        'Landlord' => 'Proprietário',
        'Property Manager' => 'Corretor',
        'Requester' => 'Solicitante',
        'Tenant' => 'Inquilino'
      ],
      'propertyRole' => [
        'Landlord' => 'Proprietário',
        'Tenant' => 'Inquilino',
        'Property Manager' => 'Corretor',
        'Requester' => 'Requester'
      ]
    ],
    'presetFilters' => [
      'portalUsers' => 'Usuários do Portal',
      'notPortalUsers' => 'Não Usuários do Portal',
      'accountActive' => 'Ativo'
    ]
  ],
  'Document' => [
    'labels' => [
      'Create Document' => 'Criar Documento',
      'Details' => 'Detalhes'
    ],
    'fields' => [
      'name' => 'Nome',
      'status' => 'Status',
      'file' => 'Arquivo',
      'type' => 'Tipo',
      'publishDate' => 'Data de Publicação',
      'expirationDate' => 'Data de expiração',
      'description' => 'Descrição',
      'accounts' => 'Contas',
      'folder' => 'Pasta',
      'properties' => 'Properties',
      'assignedUser' => 'Corretor designado'
    ],
    'links' => [
      'accounts' => 'Contas',
      'opportunities' => 'Oportunidades',
      'folder' => 'Pasta',
      'leads' => 'Leads',
      'contacts' => 'Contatos',
      'properties' => 'Properties'
    ],
    'options' => [
      'status' => [
        'Active' => 'Ativo',
        'Draft' => 'Rascunho',
        'Expired' => 'Expirado',
        'Canceled' => 'Cancelado'
      ],
      'type' => [
        '' => 'Nenhum',
        'Contract' => 'Contrato',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Contrato de Licença'
      ]
    ],
    'presetFilters' => [
      'active' => 'Ativo',
      'draft' => 'Rascunho'
    ]
  ],
  'DocumentFolder' => [
    'labels' => [
      'Create DocumentFolder' => 'Criar Pasta de Documentos',
      'Manage Categories' => 'Gerenciar Pastas',
      'Documents' => 'Documentos'
    ],
    'links' => [
      'documents' => 'Documentos'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'name' => 'Nome',
      'status' => 'Status',
      'target' => 'Alvo',
      'sentAt' => 'Data enviada',
      'attemptCount' => 'Tentativas',
      'emailAddress' => 'Endereço de E-mail',
      'massEmail' => 'E-mail em Massa',
      'isTest' => 'É teste'
    ],
    'links' => [
      'target' => 'Alvo',
      'massEmail' => 'E-mail em Massa'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pendente',
        'Sent' => 'Enviado',
        'Failed' => 'Falhou',
        'Sending' => 'Enviando'
      ]
    ],
    'presetFilters' => [
      'pending' => 'Pendente',
      'sent' => 'Enviado',
      'failed' => 'Falhou'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'labels' => [
      'Create KnowledgeBaseArticle' => 'Criar artigo',
      'Any' => 'Qualquer',
      'Send in Email' => 'Enviar por e-mail',
      'Move Up' => 'Mover para Cima',
      'Move Down' => 'Mover para Baixo',
      'Move to Top' => 'Mover para o Topo',
      'Move to Bottom' => 'Mover para o Fundo'
    ],
    'fields' => [
      'name' => 'Nome',
      'status' => 'Status',
      'type' => 'Tipo',
      'attachments' => 'Anexos',
      'publishDate' => 'Data de publicação',
      'expirationDate' => 'Data de validade',
      'description' => 'Descrição',
      'body' => 'Corpo',
      'categories' => 'Categorias',
      'language' => 'Linguagem',
      'portals' => 'Portais',
      'bodyPlain' => 'Body Plain',
      'assignedUser' => 'Corretor designado'
    ],
    'links' => [
      'cases' => 'Casos',
      'opportunities' => 'Oportunidades',
      'categories' => 'Categorias',
      'portals' => 'Portais'
    ],
    'options' => [
      'status' => [
        'In Review' => 'Em Revisão',
        'Draft' => 'Rascunho',
        'Archived' => 'Arquivado',
        'Published' => 'Publicado'
      ],
      'type' => [
        'Article' => 'Artigo'
      ]
    ],
    'tooltips' => [
      'portals' => 'O artigo estará disponível apenas em portais especificados.'
    ],
    'presetFilters' => [
      'published' => 'Publicado'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'labels' => [
      'Create KnowledgeBaseCategory' => 'Criar categoria',
      'Manage Categories' => 'Gerenciar categorias',
      'Articles' => 'Artigos'
    ],
    'links' => [
      'articles' => 'Artigos'
    ]
  ],
  'Lead' => [
    'labels' => [
      'Converted To' => 'Convertido Para',
      'Create Lead' => 'Criar Lead',
      'Convert' => 'Converter',
      'convert' => 'converter'
    ],
    'fields' => [
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'website' => 'Website',
      'phoneNumber' => 'Telefone',
      'accountName' => 'Conta',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'status' => 'Status',
      'source' => 'Origem',
      'opportunityAmount' => 'Valor da Oportunidade',
      'opportunityAmountConverted' => 'Valor da Oportunidade (convertido)',
      'description' => 'Descrição',
      'createdAccount' => 'Conta',
      'createdContact' => 'Contato',
      'createdOpportunity' => 'Oportunidade',
      'convertedAt' => 'Convertido Em',
      'campaign' => 'Campanha',
      'targetLists' => 'Listas de Alvo',
      'targetList' => 'Lista Alvo',
      'industry' => 'Ramo de Atividade',
      'acceptanceStatus' => 'Status de Aceitação',
      'opportunityAmountCurrency' => 'Moeda do Valor da Oportunidade',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Status de Aceitação (Ligações)',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'targetLists' => 'Lista de Alvos',
      'campaignLogRecords' => 'Logs das Campanhas',
      'campaign' => 'Campanha',
      'createdAccount' => 'Conta',
      'createdContact' => 'Contato',
      'createdOpportunity' => 'Oportunidade',
      'cases' => 'Casos',
      'documents' => 'Documentos'
    ],
    'options' => [
      'status' => [
        'New' => 'Novo',
        'Assigned' => 'Atribuído',
        'In Process' => 'Em Processo',
        'Converted' => 'Convertido',
        'Recycled' => 'Reciclado',
        'Dead' => 'Morto'
      ],
      'source' => [
        'Call' => 'Ligação',
        'Email' => 'E-mail',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Parceiro',
        'Public Relations' => 'Relacionamento',
        'Web Site' => 'Website',
        'Campaign' => 'Campanha',
        'Other' => 'Outro'
      ]
    ],
    'presetFilters' => [
      'active' => 'Ativo',
      'actual' => 'Atual',
      'converted' => 'Convertido'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'name' => 'Nome',
      'status' => 'Status',
      'storeSentEmails' => 'Armazenar emails enviados',
      'startAt' => 'Data de Início',
      'fromAddress' => 'Do Endereço',
      'fromName' => 'De Nome',
      'replyToAddress' => 'Endereço de Resposta',
      'replyToName' => 'Responder para Nome',
      'campaign' => 'Campanha',
      'emailTemplate' => 'Template de email',
      'inboundEmail' => 'Conta de Email',
      'targetLists' => 'Listas de Alvo',
      'excludingTargetLists' => 'Excluindo Listas de Alvo',
      'optOutEntirely' => 'Cancelado Completamente',
      'smtpAccount' => 'Conta SMTP'
    ],
    'links' => [
      'targetLists' => 'Listas de Alvo',
      'excludingTargetLists' => 'Excluindo Listas de Alvos',
      'queueItems' => 'Itens da Fila',
      'campaign' => 'Campanha',
      'emailTemplate' => 'Modelo de Email',
      'inboundEmail' => 'Conta de Email'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Rascunho',
        'Pending' => 'Pendente',
        'In Process' => 'Em processo',
        'Complete' => 'Completo',
        'Canceled' => 'Cancelado',
        'Failed' => 'Falhou'
      ]
    ],
    'labels' => [
      'Create MassEmail' => 'Criar email em massa',
      'Send Test' => 'Enviar Teste',
      'System SMTP' => 'SMTP do sistema',
      'system' => 'sistema',
      'group' => 'grupo'
    ],
    'messages' => [
      'selectAtLeastOneTarget' => 'Selecione pelo menos um destino.',
      'testSent' => 'Email(s) de teste que devem ser enviados'
    ],
    'tooltips' => [
      'optOutEntirely' => 'Os endereços de e-mail de destinatários que cancelaram a assinatura serão marcados como desativados e não receberão mais e-mails em massa.',
      'targetLists' => 'Destinos que devem receber mensagens.',
      'excludingTargetLists' => 'Destinos que não devem receber mensagens.',
      'storeSentEmails' => 'Os emails serão armazenados no CRM.'
    ],
    'presetFilters' => [
      'actual' => 'Real',
      'complete' => 'Completo'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'name' => 'Nome',
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Data Final',
      'duration' => 'Duração',
      'description' => 'Descrição',
      'users' => 'Usuários',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'reminders' => 'Lembretes',
      'account' => 'Conta',
      'acceptanceStatus' => 'Status de Aceitação',
      'dateStartDate' => 'Data de Início (dia todo)',
      'dateEndDate' => 'Data Final (dia todo)',
      'isAllDay' => 'É o Dia Todo',
      'sourceEmail' => 'E-mail de origem',
      'uid' => 'UID',
      'joinUrl' => 'Join URL',
      'Acceptance' => 'Aceitação',
      'assignedUser' => 'Corretor designado'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Planejada',
        'Held' => 'Realizada',
        'Not Held' => 'Não Realizada'
      ],
      'acceptanceStatus' => [
        'None' => 'Nenhum',
        'Accepted' => 'Aceita',
        'Declined' => 'Rejeitada',
        'Tentative' => 'Tentativa'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Marcar Realizada',
      'setNotHeld' => 'Marcar Não Realizada'
    ],
    'labels' => [
      'Create Meeting' => 'Criar Reunião',
      'Set Held' => 'Marcar como Realizada',
      'Set Not Held' => 'Marcar como não realizada',
      'Send Invitations' => 'Enviar convites',
      'Send Cancellation' => 'Send Cancellation',
      'on time' => 'na hora',
      'before' => 'antes',
      'All-Day' => 'Dia Todo',
      'Acceptance' => 'Acceptance'
    ],
    'presetFilters' => [
      'planned' => 'Planejada',
      'held' => 'Realizada',
      'todays' => 'Hoje'
    ],
    'messages' => [
      'sendInvitationsToSelectedAttendees' => 'Invitation emails will be sent to the selected attendees.',
      'sendCancellationsToSelectedAttendees' => 'Cancellation emails will be sent to the selected attendees.',
      'selectAcceptanceStatus' => 'Defina seu status de aceitação.',
      'nothingHasBeenSent' => 'Nada foi enviado'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'name' => 'Nome',
      'account' => 'Conta',
      'stage' => 'Estágio',
      'amount' => 'Valor',
      'probability' => 'Probabilidade, %',
      'leadSource' => 'Origem do Lead',
      'doNotCall' => 'Não ligar',
      'closeDate' => 'Data de Fechamento',
      'contacts' => 'Contatos',
      'contact' => 'Contato (Primário)',
      'description' => 'Descrição',
      'amountConverted' => 'Valor (convertido)',
      'amountWeightedConverted' => 'Valor Quantificado',
      'campaign' => 'Campanha',
      'originalLead' => 'Lead Original',
      'amountCurrency' => 'Valor em Moeda',
      'contactRole' => 'Regra Contato',
      'lastStage' => 'Último Estágio',
      'property' => 'Property',
      'request' => 'Request',
      'assignedUser' => 'Corretor designado'
    ],
    'links' => [
      'contacts' => 'Contatos',
      'contact' => 'Contato (Primário)',
      'documents' => 'Documentos',
      'campaign' => 'Campanha',
      'originalLead' => 'Lead Original',
      'property' => 'Property',
      'request' => 'Request'
    ],
    'options' => [
      'stage' => [
        'Prospecting' => 'Prospectando',
        'Qualification' => 'Qualificação',
        'Proposal' => 'Proposta',
        'Negotiation' => 'Negociação',
        'Needs Analysis' => 'Necessita de Análise',
        'Value Proposition' => 'Proposta de Valor',
        'Id. Decision Makers' => 'Identificação dos Decisores',
        'Perception Analysis' => 'Análise da Percepção',
        'Proposal/Price Quote' => 'Proposta/Cotação',
        'Negotiation/Review' => 'Negociação/Revisão',
        'Closed Won' => 'Ganha',
        'Closed Lost' => 'Perdida'
      ],
      'contactRole' => [
        'Landlord' => 'Landlord',
        'Tenant' => 'Tenant',
        'Property Manager' => 'Property Manager'
      ]
    ],
    'labels' => [
      'Create Opportunity' => 'Criar Negociação'
    ],
    'presetFilters' => [
      'open' => 'Aberta',
      'won' => 'Ganha',
      'lost' => 'Perdida'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'name' => 'Nome',
      'description' => 'Descrição',
      'entryCount' => 'Contagem de entrada',
      'optedOutCount' => 'Quant. Desistentes',
      'campaigns' => 'Campanhas',
      'endDate' => 'Data final',
      'targetLists' => 'Lista de alvos',
      'includingActionList' => 'Incluindo',
      'excludingActionList' => 'Excluindo',
      'targetStatus' => 'Statos do Alvo',
      'isOptedOut' => 'É Cancelado',
      'sourceCampaign' => 'Source Campaign',
      'category' => 'Category',
      'assignedUser' => 'Corretor designado'
    ],
    'links' => [
      'accounts' => 'Contas',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'campaigns' => 'Campanhas',
      'massEmails' => 'Emails em Massa',
      'category' => 'Category'
    ],
    'options' => [
      'type' => [
        'Email' => 'E-mail',
        'Web' => 'Web',
        'Television' => 'Televisão',
        'Radio' => 'Rádio',
        'Newsletter' => 'Newsletter'
      ],
      'targetStatus' => [
        'Opted Out' => 'Cancelado',
        'Listed' => 'Listado'
      ]
    ],
    'labels' => [
      'Create TargetList' => 'Criar Lista de Alvos',
      'Opted Out' => 'Cancelado',
      'Cancel Opt-Out' => 'Cancelar Cancelamento',
      'Opt-Out' => 'Cancelar'
    ]
  ],
  'TargetListCategory' => [
    'labels' => [
      'Create TargetListCategory' => 'Create Category'
    ],
    'links' => [
      'targetLists' => 'Target Lists'
    ]
  ],
  'Task' => [
    'fields' => [
      'name' => 'Name',
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Até a Data',
      'dateStartDate' => 'Data de Início (dia todo)',
      'dateEndDate' => 'Data Final (dia todo)',
      'priority' => 'Prioridade',
      'description' => 'Descrição',
      'isOverdue' => 'Atrasada',
      'account' => 'Conta',
      'dateCompleted' => 'Date Completed',
      'attachments' => 'Anexos',
      'reminders' => 'Lembretes',
      'contact' => 'Contato',
      'originalEmail' => 'Original Email',
      'assignedUser' => 'Corretor designado'
    ],
    'links' => [
      'attachments' => 'Anexos',
      'account' => 'Conta',
      'contact' => 'Contato',
      'email' => 'Email'
    ],
    'options' => [
      'status' => [
        'Not Started' => 'Não Iniciada',
        'Started' => 'Iniciada',
        'Completed' => 'Completa',
        'Canceled' => 'Cancelada',
        'Deferred' => 'Adiada'
      ],
      'priority' => [
        'Low' => 'Baixa',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente'
      ]
    ],
    'labels' => [
      'Create Task' => 'Criar Tarefa',
      'Complete' => 'Concluída',
      'overdue' => 'atrasado'
    ],
    'presetFilters' => [
      'actual' => 'Atual',
      'completed' => 'Completa',
      'deferred' => 'Adiada',
      'todays' => 'Hoje',
      'overdue' => 'Atrasada'
    ],
    'nameOptions' => [
      'replyToEmail' => 'Responder ao e-mail'
    ]
  ],
  'RealEstateLocation' => [
    'labels' => [
      'Create RealEstateLocation' => 'Criar um Condomínio'
    ],
    'fields' => [
      'address' => 'Address'
    ],
    'tooltips' => [
      'address' => 'This address will be inserted into property address field once you specify this location. Keep not needed address fields empty.'
    ],
    'links' => [
      'locations' => 'Condomínios'
    ]
  ],
  'RealEstateMatchingConfiguration' => [
    'fields' => [
      'fieldList' => 'Field list used for matching'
    ],
    'messages' => [
      'typeFieldsMap' => 'Fields available for property types'
    ]
  ],
  'RealEstateProperty' => [
    'labels' => [
      'Create RealEstateProperty' => 'Criar Imóvel',
      'Matching Requests' => 'Matching Requests',
      'Locations' => 'Locations'
    ],
    'fields' => [
      'type' => 'Tipo do Imóvel',
      'address' => 'Endereço',
      'contacts' => 'Contatos do Imóvel',
      'status' => 'Status',
      'assignedUser' => 'Corretor designado',
      'images' => 'Imagens',
      'sellers' => 'Sellers',
      'square' => 'Área Total (m²)',
      'yearBuilt' => 'Ano de Construção',
      'documents' => 'Documents',
      'requestType' => 'Tipo de Solicitação',
      'price' => 'Preço',
      'priceConverted' => 'Preço (Convertido)',
      'bedroomCount' => 'Quartos/Salas Comerciais',
      'bathroomCount' => 'Banheiros',
      'floor' => 'Andar situado',
      'floorCount' => 'Qtd. de andares',
      'location' => 'Imobiliária',
      'matchingRequest' => 'Solicitações Compatíveis',
      'number' => 'Número',
      'account' => 'Conta',
      'addressMap' => 'Mapa',
      'matchingRequestCount' => 'Qtd. Solicitações Compatíveis',
      'contactRole' => 'Função do Contato',
      'cAddressNeighbor' => 'Bairro',
      'cDescricao' => 'Descrição',
      'cCondominium' => 'Condomínio',
      'cAdicionais' => 'Adicionais',
      'cConsolidadoadicionais' => 'Consolidado Adicionais',
      'cUsefulsquare' => 'Área Útil (m²)',
      'cIdwp' => 'Id WP',
      'cUrlgooglemaps' => 'URL Google Maps',
      'cUrlvideo' => 'URL Vídeo',
      'cSuite' => 'Suítes',
      'cVagasdegaragem' => 'Vagas de Garagem',
      'cUrlwp' => 'URL Wordpress',
      'cCapa' => 'Capa',
      'cStatuswp' => 'Status WP',
      'cLatitude' => 'Latitude',
      'cLongitude' => 'Longitude',
      'cTitlewp' => 'Title WP',
      'cUrlGdrive' => 'URL GoogleDrive',
      'cLarguraComprimento' => 'Largura x Comprimento',
      'cRecordId' => 'Id CRM',
      'priceCurrency' => 'Moeda',
      'streamUpdatedAt' => 'Fluxo Atualizado em',
      'description' => 'Description'
    ],
    'options' => [
      'type' => [
        'Apartment' => 'Apartamento',
        'Separate House' => 'Residência',
        'Office' => 'Escritório',
        'Warehouse' => 'Armazém',
        'Retail' => 'Loja / Comércio',
        'Farm' => 'Chácara / Sítio',
        'Room' => 'Sala Comercial',
        'Land Lot' => 'Terreno'
      ],
      'status' => [
        'New' => 'Novo',
        'Assigned' => 'Atribuido',
        'In Process' => 'Em Processo',
        'Completed' => 'Completo',
        'Canceled' => 'Cancelado',
        'Lost' => 'Perdido'
      ],
      'requestType' => [
        'Rent' => 'Rent',
        'Sale' => 'Sale'
      ],
      'cAdicionais' => [
        'Alarme' => 'Alarme',
        'Ar-Condicionado' => 'Ar-Condicionado',
        'Automação Residencial' => 'Automação Residencial',
        'Baias/Cocheiras' => 'Baias/Cocheiras',
        'Câmeras de Segurança' => 'Câmeras de Segurança',
        'Campo de Futebol' => 'Campo de Futebol',
        'Canil' => 'Canil',
        'Casa do Caseiro' => 'Casa do Caseiro',
        'Cerca Elétrica' => 'Cerca Elétrica',
        'Churrasqueira' => 'Churrasqueira',
        'Closet' => 'Closet',
        'Cobertura' => 'Cobertura',
        'Duplex' => 'Duplex',
        'Energia Trifásica' => 'Energia Trifásica',
        'Fechadura Eletrônica' => 'Fechadura Eletrônica',
        'Galpão/Celeiro' => 'Galpão/Celeiro',
        'Gerador de Energia' => 'Gerador de Energia',
        'Horta' => 'Horta',
        'Interfone' => 'Interfone',
        'Internet(Fibra ou Satélite)' => 'Internet(Fibra ou Satélite)',
        'Jacuzi' => 'Jacuzi',
        'Jardim/Paisagismo' => 'Jardim/Paisagismo',
        'Lago/Açude' => 'Lago/Açude',
        'Lavabo' => 'Lavabo',
        'Móveis Planejados' => 'Móveis Planejados',
        'Painéis Solares' => 'Painéis Solares',
        'Piscina' => 'Piscina',
        'Playground Infantil' => 'Playground Infantil',
        'Poço Artesiano' => 'Poço Artesiano',
        'Pomar' => 'Pomar',
        'Portão Eletrônico' => 'Portão Eletrônico',
        'Quadra de Tênis/Beach Tennis' => 'Quadra de Tênis/Beach Tennis',
        'Quadra Poliesportiva' => 'Quadra Poliesportiva',
        'Quarto de Serviço' => 'Quarto de Serviço',
        'Sacada' => 'Sacada',
        'Sauna' => 'Sauna',
        'Torneira Aquecida' => 'Torneira Aquecida',
        'Triplex' => 'Triplex',
        'Varanda Gourmet' => 'Varanda Gourmet'
      ],
      'cConsolidadoadicionais' => [],
      'cStatuswp' => [
        'Rascunho' => 'Rascunho',
        'Publicado' => 'Publicado'
      ]
    ],
    'links' => [
      'contacts' => 'Contacts',
      'documents' => 'Documents',
      'opportunities' => 'Opportunities',
      'location' => 'Location',
      'account' => 'Account',
      'matchingRequests' => 'Matching Requests',
      'cCondominium' => 'Condominium'
    ],
    'presetFilters' => [
      'completed' => 'Completed',
      'actual' => 'Actual',
      'actualRent' => 'Rent Actual',
      'actualSale' => 'Sale Actual'
    ],
    'tooltips' => [
      'cLarguraComprimento' => 'Conveniente para Terrenos. Digite ambos em metros e separado por x.'
    ]
  ],
  'RealEstateRequest' => [
    'labels' => [
      'Create RealEstateRequest' => 'Criar Solicitação',
      'Matching Properties' => 'Matching Properties',
      'Create Opportunity' => 'Create Opportunity',
      'Not Interested' => 'Not Interested',
      'Unset Not Interested' => 'Unset Not Interested',
      'Locations' => 'Locations',
      'Min' => 'Min',
      'Max' => 'Max'
    ],
    'fields' => [
      'status' => 'Status',
      'assignedUser' => 'Corretor designado',
      'type' => 'Tipo de Solicitação',
      'propertyType' => 'Tipo de Imóvel',
      'number' => 'Número',
      'contact' => 'Contato Solicitante',
      'contacts' => 'Contatos Solicitante',
      'fromPrice' => 'Preço mínimo',
      'toPrice' => 'Preço Máximo',
      'fromSquare' => 'Área Total Mínima (m²)',
      'toSquare' => 'Área Total Máxima (m²)',
      'fromBedroomCount' => 'Min Qtd. Quartos',
      'toBedroomCount' => 'Max Qtd. Quartos',
      'fromBathroomCount' => 'Min Qtd. Banheiros',
      'toBathroomCount' => 'Max Qtd. Banheiros',
      'fromFloor' => 'Min Preferência Andar',
      'toFloor' => 'Max Preferência Andar',
      'fromFloorCount' => 'Min Qtd Andares',
      'toFloorCount' => 'Max Qtd. Andar',
      'fromPriceConverted' => 'Preço mínimo (Convertido)',
      'toPriceConverted' => 'Preço Máximo (Convertido)',
      'price' => 'Preço',
      'bedroomCount' => 'Quartos',
      'bathroomCount' => 'Banheiros',
      'floor' => 'Andar situado',
      'floorCount' => 'Qtd. de andares',
      'square' => 'Área Total (m²)',
      'locations' => 'Imobiliária',
      'matchingProperty' => 'Imóveis Compatíveis',
      'yearBuilt' => 'Ano de Construção',
      'fromYearBuilt' => 'Ano de Construção (Min)',
      'toYearBuilt' => 'Ano de Construção (Max)',
      'matchingPropertyCount' => 'Qtd. Imóveis compatíveis',
      'cAddressCountry' => 'País',
      'cAddressCity' => 'Cidade',
      'cAddressState' => 'Estado',
      'cAddressNeighbor' => 'Bairro',
      'cAdicionais' => 'Adicionais',
      'cCondominium' => 'Condomínio',
      'fromPriceCurrency' => 'Preço na moeda',
      'toPriceCurrency' => 'Moeda'
    ],
    'links' => [
      'contact' => 'Contact',
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunities',
      'locations' => 'Locations',
      'matchingProperties' => 'Matching Properties',
      'cCondominium' => 'Condomínio'
    ],
    'options' => [
      'status' => [
        'New' => 'Novo',
        'Assigned' => 'Atribuído',
        'In Process' => 'Em Processo',
        'Completed' => 'Completo',
        'Canceled' => 'Cancelado',
        'Lost' => 'Perdido'
      ],
      'type' => [
        'Rent' => 'Aluguel',
        'Sale' => 'Venda'
      ],
      'propertyType' => [
        'Apartment' => 'Apartment',
        'Separate House' => 'Separate House',
        'Office' => 'Office',
        'Warehouse' => 'Warehouse',
        'Retail' => 'Retail',
        'Farm' => 'Farm'
      ],
      'cAdicionais' => [
        'Academia/Espaço Fitness' => 'Academia/Espaço Fitness',
        'Alarme' => 'Alarme',
        'Ar-Condicionado' => 'Ar-Condicionado',
        'Automação Residencial' => 'Automação Residencial',
        'Baias / Cocheiras' => 'Baias / Cocheiras',
        'Bicicletário' => 'Bicicletário',
        'Brinquedoteca' => 'Brinquedoteca',
        'Câmeras de Segurança' => 'Câmeras de Segurança',
        'Campo de Futebol' => 'Campo de Futebol',
        'Canil' => 'Canil',
        'Casa do Caseiro' => 'Casa do Caseiro',
        'Cerca Elétrica' => 'Cerca Elétrica',
        'Churrasqueira' => 'Churrasqueira',
        'Closet' => 'Closet',
        'Cobertura' => 'Cobertura',
        'Colheita de Lixo (porta a porta)' => 'Colheita de Lixo (porta a porta)',
        'Controle de Acesso (Biométrico/Facial)' => 'Controle de Acesso (Biométrico/Facial)',
        'Duplex' => 'Duplex',
        'Duto de Lixo' => 'Duto de Lixo',
        'Energia Trifásica' => 'Energia Trifásica',
        'Espaço Gourmet' => 'Espaço Gourmet',
        'Fechadura Eletrônica' => 'Fechadura Eletrônica',
        'Galpão / Celeiro' => 'Galpão / Celeiro',
        'Gerador de Energia' => 'Gerador de Energia',
        'Horta' => 'Horta',
        'Interfone' => 'Interfone',
        'Internet (Fibra ou Satélite)' => 'Internet (Fibra ou Satélite)',
        'Jacuzi' => 'Jacuzi',
        'Jardim / Paisagismo' => 'Jardim / Paisagismo',
        'Lago / Açude' => 'Lago / Açude',
        'Lavabo' => 'Lavabo',
        'Lavanderia Compartilhada' => 'Lavanderia Compartilhada',
        'Minimercado (interno)' => 'Minimercado (interno)',
        'Móveis Planejados' => 'Móveis Planejados',
        'Painéis Solares' => 'Painéis Solares',
        'Pet Place (Espaço Pet)' => 'Pet Place (Espaço Pet)',
        'Piscina' => 'Piscina',
        'Playground Infantil' => 'Playground Infantil',
        'Poço Artesiano' => 'Poço Artesiano',
        'Pomar' => 'Pomar',
        'Ponto de Recarga p/ Carros Elétricos' => 'Ponto de Recarga p/ Carros Elétricos',
        'Portaria 24h' => 'Portaria 24h',
        'Portão Eletrônico' => 'Portão Eletrônico',
        'Quadra Poliesportiva' => 'Quadra Poliesportiva',
        'Quarto de Serviço' => 'Quarto de Serviço',
        'Ronda Motorizada' => 'Ronda Motorizada',
        'Sacada' => 'Sacada',
        'Salão de Festas' => 'Salão de Festas',
        'Salão de Jogos' => 'Salão de Jogos',
        'Sauna' => 'Sauna',
        'Spa' => 'Spa',
        'Torneira Aquecida' => 'Torneira Aquecida',
        'Triplex' => 'Triplex',
        'Vagas p/ Visitantes' => 'Vagas p/ Visitantes',
        'Academia / Espaço Fitness' => 'Academia / Espaço Fitness'
      ]
    ],
    'presetFilters' => [
      'completed' => 'Completed',
      'actual' => 'Actual',
      'actualRent' => 'Rent Actual',
      'actualSale' => 'Sale Actual'
    ]
  ],
  'CCondominium' => [
    'fields' => [
      'address' => 'Endereço',
      'addressStreet' => 'Logradouro',
      'addressCity' => 'Cidade',
      'addressState' => 'Estado',
      'addressCountry' => 'País',
      'addressPostalCode' => 'Código Postal',
      'addressMap' => 'Mapa',
      'monthlyfee' => 'Mensalidade',
      'monthlyfeeCurrency' => 'Mensalidade (Moeda)',
      'monthlyfeeConverted' => 'Mensalidade (Convertido)',
      'realEstateProperties' => 'Real Estate Properties',
      'lazer' => 'Lazer',
      'segurancaservicos' => 'Seguranca & Serviços',
      'realEstateRequests' => 'Real Estate Requests',
      'addressNeighbor' => 'Bairro',
      'idwp' => 'Id WP',
      'urlwp' => 'URL WP',
      'urlVideo' => 'URL Vídeo',
      'capa' => 'Capa',
      'imagens' => 'Imagens',
      'latitude' => 'Latitude',
      'longitude' => 'Longitude',
      'urlGoogleMaps' => 'URL Google Maps',
      'qtdElevadores' => 'Qtd Elevadores',
      'disponibilidade' => 'Disponibilidade',
      'descricao' => 'Descrição',
      'tipoCondominio' => 'Tipo do Condominio',
      'urlGoogleDrive' => 'URL Google Drive',
      'recordId' => 'Id CRM',
      'assignedUser' => 'Corretor designado',
      'description' => 'description'
    ],
    'links' => [
      'realEstateProperties' => 'Real Estate Properties',
      'realEstateRequests' => 'Real Estate Requests'
    ],
    'labels' => [
      'Create CCondominium' => 'Criar Condomínio'
    ],
    'options' => [
      'lazer' => [
        'Piscina' => 'Piscina',
        'Sauna' => 'Sauna',
        'Spa' => 'Spa',
        'Churrasqueira' => 'Churrasqueira',
        'Espaço Gourmet' => 'Espaço Gourmet',
        'Salão de Festas' => 'Salão de Festas',
        'Playground Infantil' => 'Playground Infantil',
        'Brinquedoteca' => 'Brinquedoteca',
        'Academia / Espaço Fitness' => 'Academia / Espaço Fitness',
        'Quadra Poliesportiva' => 'Quadra Poliesportiva',
        'Quadra de Tênis / Beach Tennis' => 'Quadra de Tênis / Beach Tennis',
        'Salão de Jogos' => 'Salão de Jogos',
        'Bicicletário' => 'Bicicletário'
      ],
      'segurancaservicos' => [
        'Vagas p/ Visitantes' => 'Vagas p/ Visitantes',
        'Portaria 24h' => 'Portaria 24h',
        'Controle de Acesso (Biométrico/Facial)' => 'Controle de Acesso (Biométrico/Facial)',
        'Ronda Motorizada' => 'Ronda Motorizada',
        'Câmeras de Segurança' => 'Câmeras de Segurança',
        'Gerador de Energia' => 'Gerador de Energia',
        'Minimercado (interno)' => 'Minimercado (interno)',
        'Pet Place (Espaço Pet)' => 'Pet Place (Espaço Pet)',
        'Lavanderia Compartilhada' => 'Lavanderia Compartilhada',
        'Ponto de Recarga p/ Carros Elétricos' => 'Ponto de Recarga p/ Carros Elétricos',
        'Colheita de Lixo (porta a porta)' => 'Colheita de Lixo (porta a porta)',
        'Duto de Lixo' => 'Duto de Lixo'
      ],
      'disponibilidade' => [
        'disponível' => 'disponível',
        'indisponível' => 'indisponível'
      ],
      'tipoCondominio' => [
        'Apartamento' => 'Apartamento',
        'Casa' => 'Casa'
      ]
    ]
  ],
  'Prospect' => [
    'fields' => [
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'website' => 'Website',
      'accountName' => 'Conta',
      'phone' => 'Telefone',
      'phoneOffice' => 'Telefone (Comercial)',
      'fax' => 'Fax',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'description' => 'Descrição'
    ],
    'links' => [],
    'labels' => [
      'Create Prospect' => 'Criar Prospecto',
      'Convert to Lead' => 'Converter para Lead'
    ]
  ]
];
