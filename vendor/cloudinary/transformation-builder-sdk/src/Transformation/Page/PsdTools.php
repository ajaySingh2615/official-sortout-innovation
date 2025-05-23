<?php
/**
 * This file is part of the Cloudinary PHP package.
 *
 * (c) Cloudinary
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cloudinary\Transformation;

use Cloudinary\ClassUtils;

/**
 * Tools for working with specified layers of a Photoshop image
 *
 * @see https://cloudinary.com/documentation/paged_and_layered_media#deliver_selected_layers_of_a_psd_image
 *
 * @api
 */
abstract class PsdTools
{
    /**
     * Delivers an image containing only specified layers of a Photoshop image.
     *
     * @param PsdLayer|int ...$layers
     *
     *
     * @see https://cloudinary.com/documentation/paged_and_layered_media#deliver_selected_layers_of_a_psd_image
     */
    public static function getLayer(...$layers): PsdLayer
    {
        return ClassUtils::forceVarArgsInstance($layers, PsdLayer::class);
    }

    /**
     * Extracts the original content of an embedded object of a Photoshop image.
     *
     * @param SmartObject|int ...$smartObjects
     *
     */
    public static function smartObject(...$smartObjects): SmartObject
    {
        return ClassUtils::forceVarArgsInstance($smartObjects, SmartObject::class);
    }

    /**
     * Trims the pixels of a PSD image according to a Photoshop clipping path that is stored in the image's metadata.
     *
     * @param int|string|null $clippingPath Number or the name of the clipping path.
     *
     */
    public static function clip(int|string|null $clippingPath = null): ClippingPath
    {
        return ClassUtils::forceInstance($clippingPath, ClippingPath::class) ;
    }
}
