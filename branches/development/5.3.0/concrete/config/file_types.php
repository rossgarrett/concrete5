<?
defined('C5_EXECUTE') or die(_("Access Denied."));

$ft = FileTypeList::getInstance();
$ft->define('jpg,jpeg,jpe', t('JPEG'), FileType::T_IMAGE, 'image', 'image');
$ft->define('gif', t('GIF'), FileType::T_IMAGE, 'image', 'image');
$ft->define('png', t('PNG'), FileType::T_IMAGE, 'image', 'image');
$ft->define('bmp', t('Windows Bitmap'), FileType::T_IMAGE, 'image');
$ft->define('tif,tiff', t('TIFF'), FileType::T_IMAGE, 'image');
$ft->define('htm,html', t('HTML'), FileType::T_IMAGE);
$ft->define('swf', t('Flash'), FileType::T_IMAGE, 'image');
$ft->define('ico', t('Icon'), FileType::T_IMAGE);
$ft->define('asf,wmv', t('Windows Video'), FileType::T_VIDEO, false, 'video');
$ft->define('mov,qt', t('Quicktime'), FileType::T_VIDEO, false, 'video');
$ft->define('avi', t('AVI'), FileType::T_VIDEO, false, 'video');
$ft->define('txt', t('Plain Text'), FileType::T_TEXT);
$ft->define('php', t('PHP'), FileType::T_TEXT, 'php');
$ft->define('doc,docx', t('MS Word'), FileType::T_DOCUMENT);
$ft->define('css', t('Stylesheet'), FileType::T_TEXT);
$ft->define('mp4', t('MP4'), FileType::T_VIDEO);
$ft->define('mp3', t('MP3'), FileType::T_AUDIO, false, 'audio');
$ft->define('m4a', t('MP4'), FileType::T_AUDIO, false, 'audio');
$ft->define('ra,ram', t('Realaudio'), FileType::T_AUDIO);
$ft->define('wma', t('Windows Audio'), FileType::T_AUDIO);
$ft->define('rtf', t('Rich Text'), FileType::T_DOCUMENT);
$ft->define('js', t('JavaScript'), FileType::T_TEXT);
$ft->define('pdf', t('PDF'), FileType::T_DOCUMENT, 'pdf');
$ft->define('psd', t('Photoshop'), FileType::T_IMAGE);
$ft->define('mpeg,mpg', t('MPEG'), FileType::T_VIDEO);
$ft->define('xla,xls,xlt,xlw', t('MS Excel'), FileType::T_DOCUMENT);
$ft->define('pps,ppt,pot', t('MS Powerpoint'), FileType::T_DOCUMENT);
$ft->define('tar', t('TAR Archive'), FileType::T_APPLICATION);
$ft->define('zip', t('Zip Archive'), FileType::T_APPLICATION);
$ft->define('gz,gzip', t('GZip Archive'), FileType::T_APPLICATION);

$ft->defineImporterAttribute('width', t('Width'), 'NUMBER', false);
$ft->defineImporterAttribute('height', t('Height'), 'NUMBER', false);