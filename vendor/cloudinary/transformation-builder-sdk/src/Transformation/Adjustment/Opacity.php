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

use Cloudinary\Transformation\Qualifier\BaseExpressionQualifier;

/**
 * Adjusts the opacity of the image to the specified percentage of opaqueness, making it semi-transparent.
 *
 * **Learn more**:
 * <a href=https://cloudinary.com/documentation/effects_and_artistic_enhancements#controlling_image_opacity
 * target="_blank">Controlling image opacity</a>
 *
 *
 * @api
 */
class Opacity extends BaseExpressionQualifier implements AdjustmentInterface
{
}
