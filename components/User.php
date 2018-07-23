<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;

class User extends \yii\web\User {

    public function getStatus() {
        $identity = $this->getIdentity();

        return $identity->status !== 1 ? 'Active' : 'Deactivate';
    }

    public function getAvatar() {
        $identity = $this->getIdentity();

        return $identity !== null ? \Yii::getAlias('@web/dist').'/img/tiada_gambar.jpg' : \Yii::getAlias('@web/dist').'/img/tiada_gambar.jpg';
    }

    public function getUsername() {
        $identity = $this->getIdentity();

        return $identity !== null ? $identity->username : null;
    }

    public function getName() {
        $identity = $this->getIdentity();
        return $identity->profile !== null ? $identity->profile->name : null;
    }

    public function getCompany() {
        $identity = $this->getIdentity();

        return isset($identity->company) ? $identity->company : null;
    }

    public function getPicList() {
        $identity = $this->getIdentity();
        // var_dump($identity);die;
        return isset($identity->companyPics) ? $identity->getCompanyPics()->asArray()->all() : null;
    }

    public function getBranchList() {
        $picList = $this->picList;
        $branchlist = [];
        if($picList) {
            foreach ($picList as $key => $value) {
                if(is_null($value['branch_id'])){
                    continue;
                } else {
                    $branchlist[] = $value['branch_id'];
                }
            }

            return $branchlist;
        }
        return null;
        return !empty($picList) ? array_column($picList, 'branch_id') : [];
    }

    public function getCompanyList() {
        $picList = $this->picList;
        if($picList) {
            $companyList = !empty($picList) ? array_column($picList, 'company_id') : [];
            return $companyList;
        }
        return null;
    }

}
