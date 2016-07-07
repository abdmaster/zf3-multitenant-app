<?php

namespace LocaleDetector\View\Helper;

use Locale;

class CurrentLocale
{

    public function __invoke()
    {
        return Locale::getDefault();
    }

}