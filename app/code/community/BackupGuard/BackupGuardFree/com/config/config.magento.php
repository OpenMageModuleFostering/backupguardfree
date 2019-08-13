<?php
$m = new Mage();
$version = $m->getVersion();

define('SG_ENV_WORDPRESS', 'Wordpress');
define('SG_ENV_MAGENTO', 'Magento');
define('SG_ENV_VERSION', $version);
define('SG_ENV_ADAPTER', SG_ENV_MAGENTO);
define('SG_ENV_DB_PREFIX', (string)Mage::getConfig()->getTablePrefix());

require_once(dirname(__FILE__).'/config.php');

define('SG_ENV_CORE_TABLE', SG_MAGENTO_CORE_TABLE);

//Database
define('SG_DB_ADAPTER', SG_ENV_ADAPTER);
define('SG_DB_NAME', (string)Mage::getConfig()->getNode('global/resources/default_setup/connection/dbname'));
define('SG_BACKUP_DATABASE_EXCLUDE', SG_ACTION_TABLE_NAME.','.SG_CONFIG_TABLE_NAME);

//Mail
define('SG_MAIL_BACKUP_TEMPLATE', 'backupguard_backup');
define('SG_MAIL_RESTORE_TEMPLATE', 'backupguard_restore');

//Backup
define('SG_APP_ROOT_DIRECTORY', Mage::getBaseDir().'/');

$excludes = array(
					'app/code/community/BackupGuard/',
					'app/etc/modules/BackupGuard_BackupGuardFree.xml',
					'app/etc/modules/BackupGuard_BackupGuard.xml',
					'app/design/adminhtml/default/default/layout/backupguardfree.xml',
					'app/design/adminhtml/default/default/layout/backupguard.xml',
					'app/design/adminhtml/default/default/template/backupguardfree/',
					'app/design/adminhtml/default/default/template/backupguard/',
					'app/locale/en_US/template/email/backupguard_backup_fail.html',
					'app/locale/en_US/template/email/backupguard_backup_success.html',
					'app/locale/en_US/template/email/backupguard_restore_fail.html',
					'app/locale/en_US/template/email/backupguard_restore_success.html',
					'media/sg_symlinks/',
					'skin/adminhtml/base/default/css/BackupGuardFree/',
					'skin/adminhtml/base/default/css/BackupGuard/',
					'skin/adminhtml/base/default/js/BackupGuardFree/',
					'skin/adminhtml/base/default/js/BackupGuard/',
					'skin/adminhtml/base/default/media/BackupGuardFree/',
					'skin/adminhtml/base/default/media/BackupGuard/',
					'var/log/'
				);
define('SG_BACKUP_FILE_PATHS_EXCLUDE', implode(',', $excludes));
define('SG_BACKUP_DIRECTORY', SG_APP_PATH.'../sg_backups/'); //backups will be stored here

define('SG_PING_FILE_PATH', SG_BACKUP_DIRECTORY.'ping.json');

define('SG_SYMLINK_URL', Mage::getBaseUrl('media').'sg_symlinks/');
define('SG_SYMLINK_PATH', Mage::getBaseDir('media').'/sg_symlinks/');

//Storage
define('SG_STORAGE_UPLOAD_CRON', '');

//The following constants can be modified at run-time
define('SG_BACKUP_FILE_PATHS', 'app,js,lib,media,skin,var'); //fix this after development
