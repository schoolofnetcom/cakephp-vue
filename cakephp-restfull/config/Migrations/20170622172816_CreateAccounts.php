<?php
use Migrations\AbstractMigration;

class CreateAccounts extends AbstractMigration
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
        $table = $this->table('accounts');
        $table->addColumn('title', 'string', [
            'limit' => 45
        ]);
        $table->addColumn('agency', 'integer');
        $table->addColumn('account_number', 'integer');
        $table->addColumn('balance', 'decimal', [
            'precision'=>11,
            'scale'=>2
        ]);
        $table->addColumn('balance_initial', 'decimal', [
            'precision'=>11,
            'scale'=>2
        ]);
        $table->addColumn('bank_id', 'integer');
        $table->create();
    }
}
