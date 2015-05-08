<?php

return [

    /*
     * In order to integrate the Facebook SDK into your site,
     * you'll need to create an app on Facebook and enter the
     * app's ID and secret here.
     *
     * Add an app: https://developers.facebook.com/apps
     */
    'app_id' => '876807442339037',
    'app_secret' => '86d336a8bb315f3a8a3a6a09a8c6ff62',

    /*
     * The default list of permissions that are
     * requested when authenticating a new user with your app.
     * The fewer, the better! Leaving this empty is the best.
     * You can overwrite this when creating the login link.
     *
     * Example:
     *
     * 'default_scope' => ['email', 'user_birthday'],
     *
     * For a full list of permissions see:
     *
     * https://developers.facebook.com/docs/facebook-login/permissions
     */
    'default_scope' => ['public_profile'],

    /*
     * The default endpoint that Facebook will redirect to after
     * an authentication attempt.
     */
    'default_redirect_uri' => '/facebook/login',

    /*
     * For a full list of locales supported by Facebook visit:
     *
     * https://www.facebook.com/translations/FacebookLocales.xml
     */
    'locale' => 'es_ES',
    'channel_endpoint' => '/channel.html',

    ];
