<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

/** @var JDocumentHtml $this */
/*
	Off system scripts and styles
 */
$headlink = $this->getHeadData();
unset($headlink['scripts']['/media/system/js/caption.js']);
unset($headlink['scripts']['/media/system/js/validate.js']);
unset($headlink['scripts']['/media/system/js/mootools-core.js']);
unset($headlink['scripts']['/media/system/js/mootools-more.js']);
unset($headlink['scripts']['/media/system/js/core.js']);
unset($headlink['scripts']['/media/jui/js/bootstrap.min.js']);
unset($headlink['scripts']['/media/jui/js/jquery-noconflict.js']);
unset($headlink['scripts']['/media/jui/js/jquery.min.js']);
$this->setHeadData($headlink);

JHtml::_('stylesheet', 'templates/' . $this->template . '/css/bootstrap.css', array('version' => 'auto'));
JHtml::_('stylesheet', 'templates/' . $this->template . '/css/bootstrap-theme.css', array('version' => 'auto'));

JHtml::_('script', 'templates/' . $this->template . '/javascript/jquery-3.2.1.js', array('version' => 'auto'));
JHtml::_('script', 'templates/' . $this->template . '/javascript/bootstrap.js', array('version' => 'auto'));



?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
		<meta name="HandheldFriendly" content="true" />
		<meta name="apple-mobile-web-app-capable" content="YES" />
		<jdoc:include type="head" />
	</head>
	<body id="shadow">
	</body>
</html>