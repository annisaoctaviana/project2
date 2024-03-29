<?php

namespace Modules\Jib\Repositories\Admin\Interfaces;

use Modules\Jib\Entities\Pengajuan;

interface PengajuanRepositoryInterface
{
    public function findAll($options = []);
    public function findAllInTrash($options = []);
    public function findById($id);
    public function create($params = []);
//    public function update(Pengajuan $pengajuan, $params = []);
    public function delete($id, $permanentDelete = false);
    public function restore($id);
    public function getStatuses();
//    public function getMetaFields();
    public function count_review();
    public function count_approval();
    public function count_closed();

    //workspace
    public function findAllWorkspace($options = []);
}
