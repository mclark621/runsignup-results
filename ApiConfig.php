<?php

// Server info
define('ENDPOINT', 'runsignup.com/Rest/');
define('PROTOCOL', 'https');

// Secrets must come from the environment — do not commit live credentials.
// This file is still required by several entry points (index, callback, results, etc.).
define('TIMER_API_KEY', getenv('TIMER_API_KEY') ?: '');
define('TIMER_API_SECRET', getenv('TIMER_API_SECRET') ?: '');

define('RSU_CLIENT_ID', '86');
define('RSU_CLIENT_SECRET', getenv('RSU_CLIENT_SECRET') ?: '');
define('RSU_REDIRECT_URI', 'https://results.j311.co/callback.php');
define('RSU_SCOPE', 'rsu_api_read');
define('RSU_AUTH_ENDPOINT', 'https://runsignup.com/Profile/OAuth2/RequestGrant');
define('RSU_TOKEN_ENDPOINT', 'https://runsignup.com/rest/v2/auth/auth-code-redemption.json');
