<?php

namespace app\components\rbac;

use yii\rbac\Rule;

/**
 * Checks if authorID matches user passed via params
 */
class AccessRule extends Rule
{
    public $name = 'isAccessable';

    /**
     * @param string|int $user the user ID.
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return bool a value indicating whether the rule permits the role or permission it is associated with.
     */
    public function execute($user, $item, $params)
    {
        $result = false;

        if(isset($params['attachment'])) {
            if(isset($params['download_attachment'])) {
                return \common\model\AttachmentAccess::find()
                ->where(['downloadable_by' => $user])
                ->andWhere(['attachment_id' => $params['attachment']->id])
                ->exists();
            }
            if(isset($params['view_attachment'])) {
                return \common\model\AttachmentAccess::find()
                ->where(['viewable_by' => $user])
                ->andWhere(['attachment_id' => $params['attachment']->id])
                ->exists();
            }
        } else if(isset($params['company'])) {
            return \common\model\CompanyPic::find()
            // ->select('company_id')
            ->where(['user_id' => $user])
            ->andWhere(['company_id' => $params['company']->id])
            ->exists();
        } else if(isset($params['branch'])) {
            return \common\model\CompanyPic::find()
            // ->select('branch_id')
            ->where(['user_id' => $user])
            ->andWhere(['branch_id' => $params['branch']->id])
            ->exists();
        }

        return $result;
    }
}
