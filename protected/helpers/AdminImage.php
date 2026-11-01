<?php

/**
 * Renders an uploaded image that opens larger when clicked.
 */
class AdminImage
{
    /**
     * @param string $folder path under uploads/, used for the thumbnail
     * @param string $filename stored file name
     * @param integer $width maximum thumbnail width in pixels
     * @param string|null $fullFolder path under uploads/ for the enlarged image
     * @return string
     */
    public static function preview($folder, $filename, $width = 80, $fullFolder = null)
    {
        $filename = trim((string) $filename);
        if ($filename === '' || !preg_match('/\.(jpe?g|png|gif|webp)$/i', $filename)) {
            return $filename === '' ? '' : CHtml::encode($filename);
        }

        $thumbRelative = trim($folder, '/\\') . '/' . $filename;
        $thumbDisk = Yii::app()->basePath . '/../uploads/' . $thumbRelative;
        if (!is_file($thumbDisk)) {
            return CHtml::encode($filename);
        }

        $fullRelative = ($fullFolder === null ? trim($folder, '/\\') : trim($fullFolder, '/\\')) . '/' . $filename;
        $fullDisk = Yii::app()->basePath . '/../uploads/' . $fullRelative;
        $fullUrl = Yii::app()->baseUrl . '/uploads/' . (is_file($fullDisk) ? $fullRelative : $thumbRelative);
        $thumbUrl = Yii::app()->baseUrl . '/uploads/' . $thumbRelative;
        $height = max(60, (int) round($width * 0.75));

        $image = CHtml::image($thumbUrl, '', array(
            'style' => 'max-width:' . (int) $width . 'px;max-height:' . $height . 'px;cursor:zoom-in;vertical-align:middle;',
        ));

        return CHtml::link($image, $fullUrl, array(
            'class' => 'admin-zoom',
            'title' => 'Click to enlarge',
        ));
    }
}
