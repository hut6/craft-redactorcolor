<?php

namespace Craft;

/**
 * Class Hut6RedactorColorPlugin
 * @package Craft
 */
class Hut6RedactorColorPlugin extends BasePlugin
{
    /**
     * @return string
     */
    function getName()
    {
        return 'Color button for Redactor';
    }

    /**
     * @return string
     */
    function getVersion()
    {
        return '0.9';
    }

    /**
     * @return string
     */
    function getDeveloper()
    {
        return 'Hut6';
    }

    /**
     * @return string
     */
    function getDeveloperUrl()
    {
        return 'https://github.com/hut6';
    }

    /**
     *
     */
    public function init()
    {
        if (craft()->request->isCpRequest()) {
            craft()->templates->includeJsResource('hut6redactorcolor/fontcolor.js');
        }
    }
}
