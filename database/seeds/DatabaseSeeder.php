<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RolesPermissionTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(PostTableSeeder::class);

    }
}
