<?php namespace OnionCreative\ContentEditor\Http\Middleware;

use Closure;
use OnionCreative\ContentEditor\Models\Settings;
use Backend\Facades\BackendAuth;

class EditorPermissionsMiddleware
{
    public function handle($request, Closure $next)
    {
        $backendUser = BackendAuth::getUser();
        if ($backendUser && $backendUser->hasAccess(Settings::get('permissions', 'cms.manage_content'))) {
            return $next($request);
        }

        return abort(404);
    }
}
