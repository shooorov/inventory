<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LegacyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            AccountsTableSeeder::class,
            AttendancesTableSeeder::class,
            BillersTableSeeder::class,
            BrandsTableSeeder::class,
            CashRegistersTableSeeder::class,
            CategoriesTableSeeder::class,
            CouponsTableSeeder::class,
            CurrenciesTableSeeder::class,
            CustomersTableSeeder::class,
            CustomerGroupsTableSeeder::class,
            DeliveriesTableSeeder::class,
            DepartmentsTableSeeder::class,
            DepositsTableSeeder::class,
            EmployeesTableSeeder::class,
            ExpensesTableSeeder::class,
            ExpenseCategoriesTableSeeder::class,
            GeneralSettingsTableSeeder::class,
            GiftCardsTableSeeder::class,
            GiftCardRechargesTableSeeder::class,
            HrmSettingsTableSeeder::class,
            LanguagesTableSeeder::class,
            MigrationsTableSeeder::class,
            MoneyTransfersTableSeeder::class,
            NotificationsTableSeeder::class,
            PaymentsTableSeeder::class,
            PaymentWithChequeTableSeeder::class,
            PaymentWithCreditCardTableSeeder::class,
            PaymentWithGiftCardTableSeeder::class,
            PayrollsTableSeeder::class,
            PermissionsTableSeeder::class,
            PosSettingTableSeeder::class,
            ProductsTableSeeder::class,
            ProductPurchasesTableSeeder::class,
            ProductQuotationTableSeeder::class,
            ProductReturnsTableSeeder::class,
            ProductSalesTableSeeder::class,
            ProductTransferTableSeeder::class,
            ProductVariantsTableSeeder::class,
            ProductWarehouseTableSeeder::class,
            PurchasesTableSeeder::class,
            PurchaseProductReturnTableSeeder::class,
            QuotationsTableSeeder::class,
            ReturnsTableSeeder::class,
            ReturnPurchasesTableSeeder::class,
            RolesTableSeeder::class,
            RoleHasPermissionsTableSeeder::class,
            SalesTableSeeder::class,
            StockCountsTableSeeder::class,
            SuppliersTableSeeder::class,
            TaxesTableSeeder::class,
            TransfersTableSeeder::class,
            UnitsTableSeeder::class,
            UsersTableSeeder::class,
            VariantsTableSeeder::class,
            WarehousesTableSeeder::class,
        ]);
    }
}
