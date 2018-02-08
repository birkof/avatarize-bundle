<?php
/*
 * This file is part of the AvatarizeBundle.
 *
 * (c) Daniel STANCU <birkof@birkof.ro>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace birkof\Avatarize\Twig;

use LasseRafn\Initials\Initials;

class AvatarGeneratorExtension extends \Twig_Extension
{
    /** @var Initials */
    protected $initialsLibrary;

    /**
     * AvatarGeneratorExtension constructor.
     */
    public function __construct()
    {
        $this->initialsLibrary = new Initials();
    }

    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return \Twig_Filter[]
     */
    public function getFilters()
    {
        return [
            new \Twig_Filter('avatarize', [$this, 'avatarizeString']),
        ];
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return \Twig_Function[]
     */
    public function getFunctions()
    {
        return [
            new \Twig_Function('avatarize', [$this, 'avatarizeString']),
        ];
    }

    /**
     * Avatarize a string.
     *
     * @param null $string
     * @param int  $length
     * @param bool $keepCase
     *
     * @return string
     */
    public function avatarizeString($string = null, $length = 2, $keepCase = false)
    {
        return $this->initialsLibrary
            ->name($string)
            ->length($length)
            ->keepCase($keepCase)
            ->generate();
    }
}
