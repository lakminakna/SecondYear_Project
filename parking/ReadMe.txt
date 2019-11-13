CMD

>composer global require laravel/installer
>composer create-project --prefer-dist laravel/laravel parkme_1
>cd parkme_1
>php artisan serve

<http://127.0.0.1:8000>

>composer require laravel/ui
>php artisan ui vue --auth
>php artisan migrate:install
>php artisan migrate
>php artisan serve

<http://127.0.0.1:8000/login>






Microsoft Windows [Version 10.0.18362.295]
(c) 2019 Microsoft Corporation. All rights reserved.

E:\@Projects\Laravel>composer global require laravel/installer
Changed current directory to C:/Users/S A H A N/AppData/Roaming/Composer
Using version ^2.1 for laravel/installer
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 1 update, 0 removals
  - Updating laravel/installer (v2.0.1 => v2.1.0): Downloading (100%)
Writing lock file
Generating autoload files

E:\@Projects\Laravel>composer create-project --prefer-dist laravel/laravel parkme_1
Installing laravel/laravel (v6.0.1)
  - Installing laravel/laravel (v6.0.1): Downloading (100%)
Created project in parkme_1
> @php -r "file_exists('.env') || copy('.env.example', '.env');"
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 84 installs, 0 updates, 0 removals
  - Installing symfony/polyfill-ctype (v1.12.0): Downloading (100%)
  - Installing phpoption/phpoption (1.5.0): Downloading (100%)
  - Installing vlucas/phpdotenv (v3.5.0): Downloading (100%)
  - Installing symfony/css-selector (v4.3.4): Downloading (100%)
  - Installing tijsverkoyen/css-to-inline-styles (2.2.1): Loading from cache
  - Installing symfony/polyfill-php72 (v1.12.0): Downloading (100%)
  - Installing symfony/polyfill-mbstring (v1.12.0): Downloading (100%)
  - Installing symfony/var-dumper (v4.3.4): Downloading (100%)
  - Installing symfony/routing (v4.3.4): Downloading (100%)
  - Installing symfony/process (v4.3.4): Downloading (100%)
  - Installing psr/log (1.1.0): Downloading (100%)
  - Installing symfony/polyfill-php73 (v1.12.0): Downloading (100%)
  - Installing symfony/debug (v4.3.4): Downloading (100%)
  - Installing symfony/polyfill-intl-idn (v1.12.0): Downloading (100%)
  - Installing symfony/mime (v4.3.4): Downloading (100%)
  - Installing symfony/http-foundation (v4.3.4): Downloading (100%)
  - Installing symfony/event-dispatcher-contracts (v1.1.5): Downloading (100%)
  - Installing psr/container (1.0.0): Loading from cache
  - Installing symfony/event-dispatcher (v4.3.4): Downloading (100%)
  - Installing symfony/http-kernel (v4.3.4): Downloading (100%)
  - Installing symfony/finder (v4.3.4): Downloading (100%)
  - Installing symfony/service-contracts (v1.1.6): Downloading (100%)
  - Installing symfony/console (v4.3.4): Downloading (100%)
  - Installing symfony/polyfill-iconv (v1.12.0): Downloading (100%)
  - Installing doctrine/lexer (1.1.0): Downloading (100%)
  - Installing egulias/email-validator (2.1.11): Downloading (100%)
  - Installing swiftmailer/swiftmailer (v6.2.1): Downloading (100%)
  - Installing paragonie/random_compat (v9.99.99): Loading from cache
  - Installing ramsey/uuid (3.8.0): Loading from cache
  - Installing psr/simple-cache (1.0.1): Loading from cache
  - Installing opis/closure (3.4.0): Downloading (100%)
  - Installing symfony/translation-contracts (v1.1.6): Downloading (100%)
  - Installing symfony/translation (v4.3.4): Downloading (100%)
  - Installing nesbot/carbon (2.24.0): Downloading (100%)
  - Installing monolog/monolog (2.0.0): Downloading (100%)
  - Installing league/flysystem (1.0.55): Downloading (100%)
  - Installing erusev/parsedown (1.7.3): Downloading (100%)
  - Installing dragonmantank/cron-expression (v2.3.0): Downloading (100%)
  - Installing doctrine/inflector (v1.3.0): Loading from cache
  - Installing laravel/framework (v6.0.1): Downloading (100%)
  - Installing fideloper/proxy (4.2.1): Downloading (100%)
  - Installing jakub-onderka/php-console-color (v0.2): Loading from cache
  - Installing jakub-onderka/php-console-highlighter (v0.4): Loading from cache
  - Installing dnoegel/php-xdg-base-dir (0.1): Loading from cache
  - Installing nikic/php-parser (v4.2.4): Downloading (100%)
  - Installing psy/psysh (v0.9.9): Loading from cache
  - Installing laravel/tinker (v1.0.10): Downloading (100%)
  - Installing scrivo/highlight.php (v9.15.10.0): Downloading (100%)
  - Installing filp/whoops (2.5.0): Downloading (100%)
  - Installing facade/ignition-contracts (1.0.0): Downloading (100%)
  - Installing facade/flare-client-php (1.0.3): Downloading (100%)
  - Installing facade/ignition (1.4.18): Downloading (100%)
  - Installing fzaninotto/faker (v1.8.0): Loading from cache
  - Installing hamcrest/hamcrest-php (v2.0.0): Loading from cache
  - Installing mockery/mockery (1.2.3): Downloading (100%)
  - Installing nunomaduro/collision (v3.0.1): Downloading (100%)
  - Installing sebastian/version (2.0.1): Loading from cache
  - Installing sebastian/type (1.1.3): Downloading (100%)
  - Installing sebastian/resource-operations (2.0.1): Loading from cache
  - Installing sebastian/object-reflector (1.1.1): Loading from cache
  - Installing sebastian/recursion-context (3.0.0): Loading from cache
  - Installing sebastian/object-enumerator (3.0.3): Loading from cache
  - Installing sebastian/global-state (3.0.0): Downloading (100%)
  - Installing sebastian/exporter (3.1.1): Downloading (100%)
  - Installing sebastian/environment (4.2.2): Downloading (100%)
  - Installing sebastian/diff (3.0.2): Downloading (100%)
  - Installing sebastian/comparator (3.0.2): Loading from cache
  - Installing phpunit/php-timer (2.1.2): Downloading (100%)
  - Installing phpunit/php-text-template (1.2.1): Loading from cache
  - Installing phpunit/php-file-iterator (2.0.2): Loading from cache
  - Installing phpunit/php-token-stream (3.1.0): Downloading (100%)
  - Installing theseer/tokenizer (1.1.3): Downloading (100%)
  - Installing sebastian/code-unit-reverse-lookup (1.0.1): Loading from cache
  - Installing phpunit/php-code-coverage (7.0.7): Downloading (100%)
  - Installing webmozart/assert (1.5.0): Downloading (100%)
  - Installing phpdocumentor/reflection-common (1.0.1): Loading from cache
  - Installing phpdocumentor/type-resolver (0.4.0): Loading from cache
  - Installing phpdocumentor/reflection-docblock (4.3.1): Downloading (100%)
  - Installing doctrine/instantiator (1.2.0): Downloading (100%)
  - Installing phpspec/prophecy (1.8.1): Downloading (100%)
  - Installing phar-io/version (2.0.1): Loading from cache
  - Installing phar-io/manifest (1.0.3): Loading from cache
  - Installing myclabs/deep-copy (1.9.3): Downloading (100%)
  - Installing phpunit/phpunit (8.3.4): Downloading (100%)
symfony/var-dumper suggests installing ext-intl (To show region name in time zone dump)
symfony/routing suggests installing symfony/config (For using the all-in-one router or any loader)
symfony/routing suggests installing symfony/yaml (For using the YAML loader)
symfony/routing suggests installing symfony/expression-language (For using expression matching)
symfony/routing suggests installing doctrine/annotations (For using the annotation loader)
symfony/polyfill-intl-idn suggests installing ext-intl (For best performance)
symfony/event-dispatcher-contracts suggests installing psr/event-dispatcher
symfony/event-dispatcher suggests installing symfony/dependency-injection
symfony/http-kernel suggests installing symfony/browser-kit
symfony/http-kernel suggests installing symfony/config
symfony/http-kernel suggests installing symfony/dependency-injection
symfony/service-contracts suggests installing symfony/service-implementation
symfony/console suggests installing symfony/lock
egulias/email-validator suggests installing ext-intl (PHP Internationalization Libraries are required to use the SpoofChecking validation)
swiftmailer/swiftmailer suggests installing ext-intl (Needed to support internationalized email addresses)
swiftmailer/swiftmailer suggests installing true/punycode (Needed to support internationalized email addresses, if ext-intl is not installed)
paragonie/random_compat suggests installing ext-libsodium (Provides a modern crypto API that can be used to generate random bytes.)
ramsey/uuid suggests installing ircmaxell/random-lib (Provides RandomLib for use with the RandomLibAdapter)
ramsey/uuid suggests installing ext-libsodium (Provides the PECL libsodium extension for use with the SodiumRandomGenerator)
ramsey/uuid suggests installing ext-uuid (Provides the PECL UUID extension for use with the PeclUuidTimeGenerator and PeclUuidRandomGenerator)
ramsey/uuid suggests installing moontoast/math (Provides support for converting UUID to 128-bit integer (in string form).)
ramsey/uuid suggests installing ramsey/uuid-doctrine (Allows the use of Ramsey\Uuid\Uuid as Doctrine field type.)
ramsey/uuid suggests installing ramsey/uuid-console (A console application for generating UUIDs with ramsey/uuid)
symfony/translation suggests installing symfony/config
symfony/translation suggests installing symfony/yaml
monolog/monolog suggests installing graylog2/gelf-php (Allow sending log messages to a GrayLog2 server)
monolog/monolog suggests installing doctrine/couchdb (Allow sending log messages to a CouchDB server)
monolog/monolog suggests installing ruflin/elastica (Allow sending log messages to an Elastic Search server)
monolog/monolog suggests installing elasticsearch/elasticsearch (Allow sending log messages to an Elasticsearch server via official client)
monolog/monolog suggests installing php-amqplib/php-amqplib (Allow sending log messages to an AMQP server using php-amqplib)
monolog/monolog suggests installing ext-amqp (Allow sending log messages to an AMQP server (1.0+ required))
monolog/monolog suggests installing ext-mongodb (Allow sending log messages to a MongoDB server (via driver))
monolog/monolog suggests installing mongodb/mongodb (Allow sending log messages to a MongoDB server (via library))
monolog/monolog suggests installing aws/aws-sdk-php (Allow sending log messages to AWS services like DynamoDB)
monolog/monolog suggests installing rollbar/rollbar (Allow sending log messages to Rollbar)
monolog/monolog suggests installing php-console/php-console (Allow sending log messages to Google Chrome)
league/flysystem suggests installing league/flysystem-eventable-filesystem (Allows you to use EventableFilesystem)
league/flysystem suggests installing league/flysystem-rackspace (Allows you to use Rackspace Cloud Files)
league/flysystem suggests installing league/flysystem-azure (Allows you to use Windows Azure Blob storage)
league/flysystem suggests installing league/flysystem-webdav (Allows you to use WebDAV storage)
league/flysystem suggests installing league/flysystem-aws-s3-v2 (Allows you to use S3 storage with AWS SDK v2)
league/flysystem suggests installing league/flysystem-aws-s3-v3 (Allows you to use S3 storage with AWS SDK v3)
league/flysystem suggests installing spatie/flysystem-dropbox (Allows you to use Dropbox storage)
league/flysystem suggests installing srmklive/flysystem-dropbox-v2 (Allows you to use Dropbox storage for PHP 5 applications)
league/flysystem suggests installing league/flysystem-cached-adapter (Flysystem adapter decorator for metadata caching)
league/flysystem suggests installing league/flysystem-sftp (Allows you to use SFTP server storage via phpseclib)
league/flysystem suggests installing league/flysystem-ziparchive (Allows you to use ZipArchive adapter)
laravel/framework suggests installing ext-memcached (Required to use the memcache cache driver.)
laravel/framework suggests installing ext-pcntl (Required to use all features of the queue worker.)
laravel/framework suggests installing ext-posix (Required to use all features of the queue worker.)
laravel/framework suggests installing ext-redis (Required to use the Redis cache and queue drivers.)
laravel/framework suggests installing aws/aws-sdk-php (Required to use the SQS queue driver, DynamoDb failed job storage and SES mail driver (^3.0).)
laravel/framework suggests installing doctrine/dbal (Required to rename columns and drop SQLite columns (^2.6).)
laravel/framework suggests installing guzzlehttp/guzzle (Required to use the Mailgun mail driver and the ping methods on schedules (^6.0).)
laravel/framework suggests installing league/flysystem-aws-s3-v3 (Required to use the Flysystem S3 driver (^1.0).)
laravel/framework suggests installing league/flysystem-cached-adapter (Required to use the Flysystem cache (^1.0).)
laravel/framework suggests installing league/flysystem-sftp (Required to use the Flysystem SFTP driver (^1.0).)
laravel/framework suggests installing moontoast/math (Required to use ordered UUIDs (^1.1).)
laravel/framework suggests installing pda/pheanstalk (Required to use the beanstalk queue driver (^4.0).)
laravel/framework suggests installing pusher/pusher-php-server (Required to use the Pusher broadcast driver (^3.0).)
laravel/framework suggests installing symfony/cache (Required to PSR-6 cache bridge (^4.3.4).)
laravel/framework suggests installing symfony/psr-http-message-bridge (Required to use PSR-7 bridging features (^1.2).)
laravel/framework suggests installing wildbit/swiftmailer-postmark (Required to use Postmark mail driver (^3.0).)
psy/psysh suggests installing ext-pcntl (Enabling the PCNTL extension makes PsySH a lot happier :))
psy/psysh suggests installing ext-posix (If you have PCNTL, you'll want the POSIX extension as well.)
psy/psysh suggests installing ext-pdo-sqlite (The doc command requires SQLite to work.)
psy/psysh suggests installing hoa/console (A pure PHP readline implementation. You'll want this if your PHP install doesn't already support readline or libedit.)
filp/whoops suggests installing whoops/soap (Formats errors as SOAP responses)
facade/ignition suggests installing laravel/telescope (^2.0)
sebastian/global-state suggests installing ext-uopz (*)
sebastian/environment suggests installing ext-posix (*)
phpunit/php-code-coverage suggests installing ext-xdebug (^2.7.2)
phpunit/phpunit suggests installing phpunit/php-invoker (^2.0.0)
phpunit/phpunit suggests installing ext-soap (*)
phpunit/phpunit suggests installing ext-xdebug (*)
Writing lock file
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi
Discovered Package: facade/ignition
Discovered Package: fideloper/proxy
Discovered Package: laravel/tinker
Discovered Package: nesbot/carbon
Discovered Package: nunomaduro/collision
Package manifest generated successfully.
> @php artisan key:generate --ansi
Application key set successfully.

E:\@Projects\Laravel>cd parkme_1

E:\@Projects\Laravel\parkme_1>php artisan serve
Laravel development server started: <http://127.0.0.1:8000>
[Mon Sep  9 13:57:55 2019] 127.0.0.1:50763 [200]: /favicon.ico
^C
E:\@Projects\Laravel\parkme_1>php artisan make:auth


  Command "make:auth" is not defined.

  Did you mean one of these?
      make:channel
      make:command
      make:controller
      make:event
      make:exception
      make:factory
      make:job
      make:listener
      make:mail
      make:middleware
      make:migration
      make:model
      make:notification
      make:observer
      make:policy
      make:provider
      make:request
      make:resource
      make:rule
      make:seeder
      make:test



E:\@Projects\Laravel\parkme_1>composer require laravel/ui
Using version ^1.0 for laravel/ui
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Installing laravel/ui (v1.0.1): Downloading (100%)
Writing lock file
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi
Discovered Package: facade/ignition
Discovered Package: fideloper/proxy
Discovered Package: laravel/tinker
Discovered Package: laravel/ui
Discovered Package: nesbot/carbon
Discovered Package: nunomaduro/collision
Package manifest generated successfully.

E:\@Projects\Laravel\parkme_1>php artisan ui vue --auth
Vue scaffolding installed successfully.
Please run "npm install && npm run dev" to compile your fresh scaffolding.
Authentication scaffolding generated successfully.

E:\@Projects\Laravel\parkme_1>npm install && npm run dev
npm WARN deprecated resolve-url-loader@2.3.1: package is bloated with temp files (fixed in 2.3.2)
npm notice created a lockfile as package-lock.json. You should commit this file.
npm WARN optional SKIPPING OPTIONAL DEPENDENCY: fsevents@1.2.9 (node_modules\fsevents):
npm WARN notsup SKIPPING OPTIONAL DEPENDENCY: Unsupported platform for fsevents@1.2.9: wanted {"os":"darwin","arch":"any"} (current: {"os":"win32","arch":"x64"})

added 1010 packages from 486 contributors and audited 17164 packages in 170.47s
found 0 vulnerabilities



   ╭────────────────────────────────────────────────────────────────╮
   │                                                                │
   │      New major version of npm available! 5.6.0 -> 6.11.3       │
   │   Changelog: https://github.com/npm/cli/releases/tag/v6.11.3   │
   │               Run npm install -g npm to update!                │
   │                                                                │
   ╰────────────────────────────────────────────────────────────────╯


> @ dev E:\@Projects\Laravel\parkme_1
> npm run development


> @ development E:\@Projects\Laravel\parkme_1
> cross-env NODE_ENV=development node_modules/webpack/bin/webpack.js --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js

98% after emitting SizeLimitsPlugin

 DONE  Compiled successfully in 10455ms                                                                                                                         14:12:00

       Asset      Size   Chunks             Chunk Names
/css/app.css   173 KiB  /js/app  [emitted]  /js/app
  /js/app.js  1.38 MiB  /js/app  [emitted]  /js/app

E:\@Projects\Laravel\parkme_1>php artisan serve
Laravel development server started: <http://127.0.0.1:8000>
[Mon Sep  9 14:12:17 2019] 127.0.0.1:50986 [200]: /favicon.ico
[Mon Sep  9 14:12:32 2019] 127.0.0.1:50991 [200]: /favicon.ico
[Mon Sep  9 14:12:38 2019] 127.0.0.1:50996 [200]: /js/app.js
[Mon Sep  9 14:12:38 2019] 127.0.0.1:50997 [200]: /css/app.css
[Mon Sep  9 14:12:38 2019] 127.0.0.1:50998 [200]: /favicon.ico
[Mon Sep  9 14:12:46 2019] 127.0.0.1:50999 [200]: /favicon.ico
[Mon Sep  9 14:12:49 2019] 127.0.0.1:51008 [200]: /favicon.ico
[Mon Sep  9 14:12:53 2019] 127.0.0.1:51010 [200]: /js/app.js
[Mon Sep  9 14:12:53 2019] 127.0.0.1:51011 [200]: /css/app.css
[Mon Sep  9 14:12:53 2019] 127.0.0.1:51012 [200]: /favicon.ico
[Mon Sep  9 14:12:58 2019] 127.0.0.1:51014 [200]: /js/app.js
[Mon Sep  9 14:12:58 2019] 127.0.0.1:51015 [200]: /css/app.css
[Mon Sep  9 14:12:58 2019] 127.0.0.1:51016 [200]: /favicon.ico
[Mon Sep  9 14:14:14 2019] 127.0.0.1:51026 [200]: /js/app.js
[Mon Sep  9 14:14:14 2019] 127.0.0.1:51028 [200]: /css/app.css
[Mon Sep  9 14:14:14 2019] 127.0.0.1:51029 [200]: /favicon.ico
[Mon Sep  9 14:14:40 2019] 127.0.0.1:51030 [200]: /favicon.ico
[Mon Sep  9 14:15:24 2019] 127.0.0.1:51035 [200]: /favicon.ico
^C
E:\@Projects\Laravel\parkme_1>php artisan serve
Laravel development server started: <http://127.0.0.1:8000>
[Mon Sep  9 14:15:37 2019] 127.0.0.1:51042 [200]: /favicon.ico
[Mon Sep  9 14:17:07 2019] 127.0.0.1:51082 [200]: /favicon.ico
[Mon Sep  9 14:17:34 2019] 127.0.0.1:51091 [200]: /favicon.ico
[Mon Sep  9 14:17:37 2019] 127.0.0.1:51094 [200]: /js/app.js
[Mon Sep  9 14:17:37 2019] 127.0.0.1:51095 [200]: /css/app.css
[Mon Sep  9 14:17:37 2019] 127.0.0.1:51096 [200]: /favicon.ico
[Mon Sep  9 14:17:43 2019] 127.0.0.1:51097 [200]: /favicon.ico
^C
E:\@Projects\Laravel\parkme_1>php artisan serve
Laravel development server started: <http://127.0.0.1:8000>
[Mon Sep  9 14:18:44 2019] 127.0.0.1:51115 [200]: /favicon.ico
[Mon Sep  9 14:18:47 2019] 127.0.0.1:51122 [200]: /favicon.ico
[Mon Sep  9 14:18:49 2019] 127.0.0.1:51123 [200]: /js/app.js
[Mon Sep  9 14:18:49 2019] 127.0.0.1:51124 [200]: /css/app.css
[Mon Sep  9 14:18:50 2019] 127.0.0.1:51125 [200]: /favicon.ico
[Mon Sep  9 14:18:52 2019] 127.0.0.1:51126 [200]: /js/app.js
[Mon Sep  9 14:18:52 2019] 127.0.0.1:51128 [200]: /css/app.css
[Mon Sep  9 14:18:52 2019] 127.0.0.1:51129 [200]: /favicon.ico
[Mon Sep  9 14:19:10 2019] 127.0.0.1:51130 [200]: /favicon.ico
^C
E:\@Projects\Laravel\parkme_1>php artisan migrate

   Illuminate\Database\QueryException  : SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO) (SQL: select * from information_schema.tables where table_schema = nanga_parkme_1 and table_name = migrations and table_type = 'BASE TABLE')

  at E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connection.php:665
    661|         // If an exception occurs when attempting to run a query, we'll format the error
    662|         // message to include the bindings with SQL, which will make this exception a
    663|         // lot more helpful to the developer instead of just the database's errors.
    664|         catch (Exception $e) {
  > 665|             throw new QueryException(
    666|                 $query, $this->prepareBindings($bindings), $e
    667|             );
    668|         }
    669|

  Exception trace:

  1   PDOException::("SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)")
      E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connectors\Connector.php:70

  2   PDO::__construct("mysql:host=127.0.0.1;port=3306;dbname=nanga_parkme_1", "root", "", [])
      E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connectors\Connector.php:70

  Please use the argument -v to see more details.

E:\@Projects\Laravel\parkme_1>php artisan serve
Laravel development server started: <http://127.0.0.1:8000>
[Mon Sep  9 14:23:41 2019] 127.0.0.1:51173 [200]: /favicon.ico
[Mon Sep  9 14:23:45 2019] 127.0.0.1:51174 [200]: /js/app.js
[Mon Sep  9 14:23:45 2019] 127.0.0.1:51175 [200]: /css/app.css
[Mon Sep  9 14:23:46 2019] 127.0.0.1:51176 [200]: /favicon.ico
[Mon Sep  9 14:23:49 2019] 127.0.0.1:51178 [200]: /favicon.ico
^C
E:\@Projects\Laravel\parkme_1>php artisan serve
Laravel development server started: <http://127.0.0.1:8000>
[Mon Sep  9 14:33:47 2019] 127.0.0.1:51281 [200]: /favicon.ico
[Mon Sep  9 14:33:50 2019] 127.0.0.1:51282 [200]: /js/app.js
[Mon Sep  9 14:33:50 2019] 127.0.0.1:51283 [200]: /css/app.css
[Mon Sep  9 14:33:50 2019] 127.0.0.1:51284 [200]: /favicon.ico
[Mon Sep  9 14:33:54 2019] 127.0.0.1:51288 [200]: /favicon.ico
[Mon Sep  9 14:34:08 2019] 127.0.0.1:51289 [200]: /favicon.ico
[Mon Sep  9 14:34:10 2019] 127.0.0.1:51291 [200]: /js/app.js
[Mon Sep  9 14:34:10 2019] 127.0.0.1:51292 [200]: /css/app.css
[Mon Sep  9 14:34:11 2019] 127.0.0.1:51293 [200]: /favicon.ico
[Mon Sep  9 14:34:26 2019] 127.0.0.1:51297 [200]: /favicon.ico
[Mon Sep  9 14:34:36 2019] 127.0.0.1:51298 [200]: /favicon.ico
[Mon Sep  9 14:34:37 2019] 127.0.0.1:51299 [200]: /favicon.ico
[Mon Sep  9 14:34:39 2019] 127.0.0.1:51300 [200]: /favicon.ico
^C
E:\@Projects\Laravel\parkme_1>php artisan migrate:install
Migration table created successfully.

E:\@Projects\Laravel\parkme_1>php artisan migrate
Migrating: 2014_10_12_000000_create_users_table

   Illuminate\Database\QueryException  : SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `users` add unique `users_email_unique`(`email`))

  at E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connection.php:665
    661|         // If an exception occurs when attempting to run a query, we'll format the error
    662|         // message to include the bindings with SQL, which will make this exception a
    663|         // lot more helpful to the developer instead of just the database's errors.
    664|         catch (Exception $e) {
  > 665|             throw new QueryException(
    666|                 $query, $this->prepareBindings($bindings), $e
    667|             );
    668|         }
    669|

  Exception trace:

  1   PDOException::("SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes")
      E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connection.php:459

  2   PDOStatement::execute()
      E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connection.php:459

  Please use the argument -v to see more details.

E:\@Projects\Laravel\parkme_1>php artisan migrate:install

   Illuminate\Database\QueryException  : SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'migrations' already exists (SQL: create table `migrations` (`id` int unsigned not null auto_increment primary key, `migration` varchar(191) not null, `batch` int not null) default character set utf8mb4 collate 'utf8mb4_unicode_ci')

  at E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connection.php:665
    661|         // If an exception occurs when attempting to run a query, we'll format the error
    662|         // message to include the bindings with SQL, which will make this exception a
    663|         // lot more helpful to the developer instead of just the database's errors.
    664|         catch (Exception $e) {
  > 665|             throw new QueryException(
    666|                 $query, $this->prepareBindings($bindings), $e
    667|             );
    668|         }
    669|

  Exception trace:

  1   PDOException::("SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'migrations' already exists")
      E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connection.php:459

  2   PDOStatement::execute()
      E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connection.php:459

  Please use the argument -v to see more details.

E:\@Projects\Laravel\parkme_1>php artisan serve
Laravel development server started: <http://127.0.0.1:8000>
^C
E:\@Projects\Laravel\parkme_1>php artisan migrate
Migrating: 2014_10_12_000000_create_users_table

   Illuminate\Database\QueryException  : SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'users' already exists (SQL: create table `users` (`id` bigint unsigned not null auto_increment primary key, `name` varchar(191) not null, `email` varchar(191) not null, `email_verified_at` timestamp null, `password` varchar(191) not null, `remember_token` varchar(100) null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci')

  at E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connection.php:665
    661|         // If an exception occurs when attempting to run a query, we'll format the error
    662|         // message to include the bindings with SQL, which will make this exception a
    663|         // lot more helpful to the developer instead of just the database's errors.
    664|         catch (Exception $e) {
  > 665|             throw new QueryException(
    666|                 $query, $this->prepareBindings($bindings), $e
    667|             );
    668|         }
    669|

  Exception trace:

  1   PDOException::("SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'users' already exists")
      E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connection.php:459

  2   PDOStatement::execute()
      E:\@Projects\Laravel\parkme_1\vendor\laravel\framework\src\Illuminate\Database\Connection.php:459

  Please use the argument -v to see more details.

E:\@Projects\Laravel\parkme_1>php artisan migrate:install
Migration table created successfully.

E:\@Projects\Laravel\parkme_1>php artisan migrate
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (0.56 seconds)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (0.41 seconds)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (0.34 seconds)

E:\@Projects\Laravel\parkme_1>php artisan serve
Laravel development server started: <http://127.0.0.1:8000>
[Mon Sep  9 14:43:21 2019] 127.0.0.1:51435 [200]: /js/app.js
[Mon Sep  9 14:43:21 2019] 127.0.0.1:51437 [200]: /css/app.css
[Mon Sep  9 14:43:21 2019] 127.0.0.1:51438 [200]: /favicon.ico
[Mon Sep  9 14:43:24 2019] 127.0.0.1:51439 [200]: /js/app.js
[Mon Sep  9 14:43:24 2019] 127.0.0.1:51441 [200]: /css/app.css
[Mon Sep  9 14:43:24 2019] 127.0.0.1:51442 [200]: /favicon.ico
[Mon Sep  9 14:43:26 2019] 127.0.0.1:51446 [200]: /js/app.js
[Mon Sep  9 14:43:26 2019] 127.0.0.1:51447 [200]: /css/app.css
[Mon Sep  9 14:43:27 2019] 127.0.0.1:51448 [200]: /favicon.ico
[Mon Sep  9 14:43:29 2019] 127.0.0.1:51450 [200]: /js/app.js
[Mon Sep  9 14:43:29 2019] 127.0.0.1:51451 [200]: /css/app.css
[Mon Sep  9 14:43:29 2019] 127.0.0.1:51452 [200]: /favicon.ico
[Mon Sep  9 14:43:44 2019] 127.0.0.1:51457 [200]: /js/app.js
[Mon Sep  9 14:43:44 2019] 127.0.0.1:51456 [200]: /css/app.css
[Mon Sep  9 14:43:44 2019] 127.0.0.1:51458 [200]: /favicon.ico
[Mon Sep  9 14:43:56 2019] 127.0.0.1:51464 [200]: /js/app.js
[Mon Sep  9 14:43:56 2019] 127.0.0.1:51465 [200]: /css/app.css
[Mon Sep  9 14:43:56 2019] 127.0.0.1:51466 [200]: /favicon.ico
[Mon Sep  9 14:44:01 2019] 127.0.0.1:51470 [200]: /favicon.ico
[Mon Sep  9 14:44:03 2019] 127.0.0.1:51472 [200]: /js/app.js
[Mon Sep  9 14:44:03 2019] 127.0.0.1:51473 [200]: /css/app.css
[Mon Sep  9 14:44:04 2019] 127.0.0.1:51474 [200]: /favicon.ico
[Mon Sep  9 14:44:06 2019] 127.0.0.1:51475 [200]: /favicon.ico
[Mon Sep  9 14:44:09 2019] 127.0.0.1:51477 [200]: /js/app.js
[Mon Sep  9 14:44:09 2019] 127.0.0.1:51478 [200]: /css/app.css
[Mon Sep  9 14:44:09 2019] 127.0.0.1:51479 [200]: /favicon.ico
[Mon Sep  9 14:44:26 2019] 127.0.0.1:51484 [200]: /js/app.js
[Mon Sep  9 14:44:26 2019] 127.0.0.1:51485 [200]: /css/app.css
[Mon Sep  9 14:44:26 2019] 127.0.0.1:51486 [200]: /favicon.ico
[Mon Sep  9 14:44:30 2019] 127.0.0.1:51490 [200]: /favicon.ico
^C
E:\@Projects\Laravel\parkme_1>