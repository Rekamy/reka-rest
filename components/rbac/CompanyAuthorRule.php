<?php

namespace app\components\rbac;

use yii\rbac\Rule;

/**
 * Checks if authorID matches user passed via params
 */
class CompanyAuthorRule extends Rule
{
    public $name = 'isCompanyAuthor';

    /**
     * @param string|int $user the user ID.
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return bool a value indicating whether the rule permits the role or permission it is associated with.
     */
    public function execute($user, $item, $params)
    {
        if(isset($params['companyIds']) && isset($params['companyId'])) {
            $access = !empty($params['companyIds']) ? in_array($params['companyId'], $params['companyIds']) : false;
            return $access;
        }

        if(isset($params['creator'])) {
            $access = isset($params['creator']) ? $params['creator']->created_by == $user : false;
            return $access;
        }
        return false;
    }
}
