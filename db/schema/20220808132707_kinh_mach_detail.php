<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class KinhMachDetail extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table("kinh_mach_detail");
        $table
            ->addColumn("kinh_mach_id", "integer", ["null" => true])
            ->addIndex("kinh_mach_id")
            ->addColumn("level", "smallinteger", ["null" => true])
            ->addColumn("chinh_xac", "integer", ["null" => true])
            ->addColumn("ne_tranh", "integer", ["null" => true])
            ->addColumn("noi_phong", "integer", ["null" => true])
            ->addColumn("bo_qua_noi_phong", "integer", ["null" => true])
            ->addColumn("khi_huyet", "integer", ["null" => true])
            ->addColumn("noi_luc", "integer", ["null" => true])
            ->addColumn("noi_luc_cooldown", "integer", ["null" => true])
            ->addColumn("chan_khi_tien_cap", "integer", ["null" => true])
            ->addColumn("chan_khi_tong", "integer", ["null" => true])
            ->addColumn("phong_kinh", "integer", ["null" => true])
            ->addColumn("chinh_xac_noi", "integer", ["null" => true])
            ->addColumn("bo_qua_noi_giai", "integer", ["null" => true])
            ->addColumn("sat_thuong_bao_kich_noi", "integer", ["null" => true])
            ->addColumn("hoi_noi_luc", "integer", ["null" => true])
            ->addColumn("noi_tuc", "integer", ["null" => true])
            ->addColumn("created_at", "timestamp", ["null" => true, "default" => "CURRENT_TIMESTAMP", "timezone" => false])
            ->addColumn("updated_at", "timestamp", ["null" => true, "timezone" => false])
            ->create();
    }
}
