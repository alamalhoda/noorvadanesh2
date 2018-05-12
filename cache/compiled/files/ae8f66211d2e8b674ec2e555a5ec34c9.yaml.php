<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/noorvadanesh2/user/config/plugins/git-sync.yaml',
    'modified' => 1525980654,
    'data' => [
        'enabled' => false,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false,
        'password' => 'gitsync-def5020006eeb472e0da32e16dbaccd89a81f191edee3b3a10b640bcfc003cc2468d28dc0d2be0c61cc3045a5615563daf2bebe2441a14ab70721998557ce193ce0861d3ab10e35fce5badc32e7f80237d3cc173'
    ]
];
