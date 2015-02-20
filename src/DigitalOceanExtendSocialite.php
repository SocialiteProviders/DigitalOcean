<?php
namespace SocialiteProviders\DigitalOcean;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DigitalOceanExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('digitalocean', __NAMESPACE__.'\Provider');
    }
}
