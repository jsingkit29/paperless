<?php

namespace App\Helper;

use App\Module;
use App\Permission;
use Illuminate\Support\Collection;

/**
 * Class TemplatePlugin
 * @package App
 */
class TemplatePlugin
{

    /**
     * @return string
     */
    public static function currentLocation()
    {
        $location = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/";
        return $location;
    }

    /**
     * @return string
     */
    public static function rootLocation()
    {
        $location = "http://$_SERVER[HTTP_HOST]/";
        return $location;
    }



    public function getUserPermission($user_group_id)
    {
        $parent =  Module::where('parent_id',null)->orderBy('order')->get();
        $permissions =  Permission::where('user_group_id',$user_group_id)
            ->where('can_access', 1)
            ->get(['module_id']);

        $permissions = array_column($permissions->toArray(), 'module_id');
        $return_permission = new Collection();
        foreach ($parent as $p){
            if(in_array($p->module_id,$permissions)){
                if(sizeof($p->child) > 0){
                    foreach ($p->child as $key => $c){
                        if(!in_array($c->module_id,$permissions)){
                            $p->child->forget($key);
                        }
                    }
                }
                $return_permission->push($p);
            }
        }
        return $return_permission;
    }
}
