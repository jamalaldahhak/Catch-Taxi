<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

trait LanguageTrait
{
    /**
     * Get language from the request header.
     */
    public static function getLanguageFromRequest(Request $request): string
    {
        return $request->header('Accept-Language') ?? App::currentLocale();
    }

    /**
     * Get localized field based on language.
     */
    private function getLocalizedField(string $language, string $fieldName): ?string
    {
        return $language === 'ar' ? $this->{$fieldName . '_ar'} : $this->{$fieldName};
    }
}

