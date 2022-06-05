<?php

namespace Breuermarcel\Survey;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Breuermarcel\Survey\Skeleton\SkeletonClass
 */
class SurveyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'survey';
    }
}
