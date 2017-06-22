<?php
use Migrations\AbstractMigration;

class CreateBanks extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('banks');
        $table->addColumn('title', 'string');
        $table->addColumn('code', 'string');
        $table->create();
    }
}
