# Quasar CRM App for Laravel

[![Total Downloads](https://poser.pugx.org/quasar/crm/downloads)](https://packagist.org/packages/quasar/crm)
[![Latest Stable Version](http://img.shields.io/github/release/syscover/quasar-crm.svg)](https://packagist.org/packages/quasar/crm)

Quasar is a application that generates a control panel where you can create custom solutions.

---

## Installation

**1 - After install Laravel framework, execute on console:**
```
composer require quasar/crm
```

**2 - Execute publish command**
```
php artisan vendor:publish --provider="Quasar\Crm\CrmServiceProvider"
```

**3 - Execute migrations and seed database**
```
composer dump-autoload
php artisan migrate
php artisan db:seed --class="CrmSeeder"
```

**4 - Add graphQL routes to graphql/schema.graphql file**
```
# Crm
#import ./../vendor/quasar/crm/src/Quasar/Crm/GraphQL/inputs.graphql
#import ./../vendor/quasar/crm/src/Quasar/Crm/GraphQL/types.graphql

type Query {
    # others imports

    # Crm
    #import ./../vendor/quasar/crm/src/Quasar/Crm/GraphQL/queries.graphql
}

type Mutation {
    # others imports

    # Crm
    #import ./../vendor/quasar/crm/src/Quasar/Crm/GraphQL/mutations.graphql
}
```