<?php

namespace app\components\rbac;

use yii\rbac\Rule;

/**
 * Checks if authorID matches user passed via params
 */
class AuthorRule extends Rule
{
    public $name = 'isAuthor';

    /**
     * @param string|int $user the user ID.
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return bool a value indicating whether the rule permits the role or permission it is associated with.
     */
    public function execute($user, $item, $params)
    {
        $result = false;
        if(isset($params['creatorId'])) {
            return $params['creatorId'] == $user;
        }
        if(isset($params['creator'])) {
            $creator = isset($params['creator']) ? $params['creator']->created_by == $user : false;
            // $result = isset($params['creator']) ? $params['creator']->created_by == $user : false;
            $result = $creator;
        }
        return $result;
    }
}
