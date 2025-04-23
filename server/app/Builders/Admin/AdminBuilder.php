<?php
declare(strict_types=1);

use Illuminate\Database\Eloquent\Builder;

class AdminBuilder extends Builder {

    /**
     * 管理者情報を取得するクエリビルダ
     *
     * @param {integer} $id
     * @return void
     */
    public function getAdmin(integer $id): mixed {
        return $this->where('admin_id', $id);
    }

}
