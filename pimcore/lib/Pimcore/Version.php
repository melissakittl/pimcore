<?php 
/**
 * Pimcore
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.pimcore.org/license
 *
 * @copyright  Copyright (c) 2009-2014 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     New BSD License
 */

class Pimcore_Version {

    public static $version = "2.3.0";

    public static $revision = 3293;

    public static $svnInfo = array (
  'Path' => 'trunk',
  'URL' => 'http',
  'Repository Root' => 'http',
  'Repository UUID' => '1f8fe7d8-47f0-464c-8d0a-336f4953ab05',
  'Revision' => '5322',
  'Node Kind' => 'directory',
  'Last Changed Author' => 'brusch',
  'Last Changed Rev' => '5322',
  'Last Changed Date' => '2014-09-24 13',
);

    public static function getVersion() {
        return self::$version;
    }

    public static function getRevision()
    {
        return self::$revision;
    }

    public static function getSvnInfo()
    {
        return self::$svnInfo;
    }
}
