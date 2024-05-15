<?php

namespace App\Builders\SEO\Schemas;

class SchemaOrganization implements SchemaInterface
{
    public static function get($model = null): string
    {
        $currentURL = url()->current();
        $logo = asset('assets/img/logo.png');
        $email = settings('site.email');
        $phone = settings('site.phone');

        $facebook = settings('social.facebook');
        $instagram = settings('social.instagram');

        return "
            {
                \"@context\": \"http://schema.org\",
                \"@type\": \"Organization\",
                \"url\": \"$currentURL\",
                \"logo\": \"$logo\",
                \"brand\": \"Bercut.MD\",
                \"email\": \"$email\",
                \"contactPoint\": [{
                    \"@type\": \"ContactPoint\",
                    \"telephone\": \"$phone\",
                    \"contactType\": \"customer service\",
                    \"contactOption\": \"TollFree\",
                    \"areaServed\": \"MD\"
                }],
                \"sameAs\": [
                    \"$facebook\",
                    \"$instagram\"
                ]
            }
        ";
    }
}
