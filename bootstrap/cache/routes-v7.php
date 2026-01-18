<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KMU4qv068WFxS5fl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1ew9bV6qC2GdqUtD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9LHkQEunv0ZSfgQy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/initial-setup/item-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.item-codes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.item-codes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/initial-setup/invoice-charges' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.invoice-charges.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.invoice-charges.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/initial-setup/cargo-officers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cargo-officers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cargo-officers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/initial-setup/cn-stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cn-stock.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cn-stock.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/initial-setup/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cities.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/initial-setup/zones' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.zones.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.zones.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/initial-setup/party-rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.party-rates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.party-rates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/cn-entry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.cn-entry.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.cn-entry.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/cn-entry/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.cn-entry.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/load-plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.load-plans.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.load-plans.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/load-plans/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.load-plans.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/delivery-sheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.delivery-sheets.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.delivery-sheets.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/delivery-sheets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.delivery-sheets.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/pickup-sheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.pickup-sheets.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.pickup-sheets.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/pickup-sheets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.pickup-sheets.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.invoices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.invoices.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/invoices/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.invoices.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/party-fuel-rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.party-fuel-rates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.party-fuel-rates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/s2e-logistics/party-fuel-rates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.party-fuel-rates.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales/cn-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales.cn-detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales/list-invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales.list-invoices',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales/cn-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales.cn-status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales/cn-profit-loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales.cn-profit-loss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales/city-profit-loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales.city-profit-loss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales/shipper-profit-loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales.shipper-profit-loss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales/hub-profit-loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales.hub-profit-loss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales/spo-profit-loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales.spo-profit-loss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales/hub-cn-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales.hub-cn-detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales/transporter-documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales.transporter-documents',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales/zone-profit-loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales.zone-profit-loss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/edit-lists/spo-cn-stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.edit-lists.spo-cn-stock',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/edit-lists/missing-sn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.edit-lists.missing-sn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/edit-lists/pending-invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.edit-lists.pending-invoices',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/edit-lists/item-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.edit-lists.item-codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/edit-lists/city-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.edit-lists.city-codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/edit-lists/city-hub-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.edit-lists.city-hub-list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/edit-lists/vehicle-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.edit-lists.vehicle-types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/edit-lists/spo-officers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.edit-lists.spo-officers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/edit-lists/rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.edit-lists.rates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/edit-lists/party-fuel-rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.edit-lists.party-fuel-rates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/other/delivery-cn-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.other.delivery-cn-detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/other/group-outstanding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.other.group-outstanding',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/other/sales-tax-invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.other.sales-tax-invoices',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/other/cn-detail-cod' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.other.cn-detail-cod',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/other/delivery-sheet-cod' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.other.delivery-sheet-cod',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/other/cod-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.other.cod-status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/other/stock-in-transit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.other.stock-in-transit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/other/cn-in-stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.other.cn-in-stock',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/other/non-service-charges' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.other.non-service-charges',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/group-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.group-codes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'finance.group-codes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/group-codes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.group-codes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/control-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.control-codes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'finance.control-codes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/control-codes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.control-codes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/chart-of-accounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.chart-of-accounts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'finance.chart-of-accounts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/chart-of-accounts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.chart-of-accounts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/account-grouping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.account-grouping.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'finance.account-grouping.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/account-grouping/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.account-grouping.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/vouchers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.vouchers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'finance.vouchers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/vouchers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.vouchers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/balance-sheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.balance-sheet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/profit-loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.profit-loss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/change-voucher-date' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.change-voucher-date',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'finance.update-voucher-date',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/list-chart-of-accounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.list-chart-of-accounts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/list-vouchers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.list-vouchers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/cn-expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.cn-expenses',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/trial-balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.trial-balance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/master-schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.master-schedule',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/accounts-ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.accounts-ledger',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/profit-loss-comparative' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.profit-loss-comparative',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/month-closing-balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.month-closing-balance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/group-outstanding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.group-outstanding',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/group-ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.group-ledger',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/trial-balance-console' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.trial-balance-console',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/master-schedule-console' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.master-schedule-console',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/accounts-ledger-console' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.accounts-ledger-console',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/pl-comparative-console' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.pl-comparative-console',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/account-grouping-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.account-grouping-detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/sales-tax-register-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.sales-tax-register-invoice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/sales-tax-register-customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.sales-tax-register-customer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/party-outstanding-detailed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.party-outstanding-detailed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/party-outstanding-aging' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.party-outstanding-aging',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/party-cleared-outstanding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.party-cleared-outstanding',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/finance/party-outstanding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.party-outstanding',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.departments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.departments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/departments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.departments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/designations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.designations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.designations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/designations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.designations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/employees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.employees.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.employees.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/employees/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.employees.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/loans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.loans.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.loans.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/loans/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.loans.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/deductions-allowances' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.deductions-allowances.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.deductions-allowances.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/deductions-allowances/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.deductions-allowances.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/authorized-leaves' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.authorized-leaves.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.authorized-leaves.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/authorized-leaves/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.authorized-leaves.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.process',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/list-employees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.list-employees',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/list-monthly-payroll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.list-monthly-payroll',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/list-deductions-allowances' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.list-deductions-allowances',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/authorized-leaves-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.authorized-leaves-detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/leave-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.leave-status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/department-register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.department-register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/registers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.registers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.permissions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.permissions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/permissions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.permissions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.change-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.update-password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/change-year' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.change-year',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.update-year',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/initialize-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.initialize-data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.process-initialize-data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/data-processing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.data-processing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.process-data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/payroll-processing-final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.payroll-processing-final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.process-payroll-final',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/system-optimization' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.system-optimization',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.run-optimization',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/un-void-cn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.un-void-cn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.process-un-void-cn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/email-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.update-email-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/inter-branch-jv-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.inter-branch-jv-code',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.update-inter-branch-jv-code',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/unpost-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.unpost-data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.process-unpost-data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/audit-logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.audit-logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/s(?|2e\\-logistics/(?|in(?|itial\\-setup/(?|i(?|tem\\-codes/([^/]++)(?|(*:76))|nvoice\\-charges/([^/]++)(?|(*:111)))|c(?|argo\\-officers/([^/]++)(?|(*:151))|n\\-stock/([^/]++)(?|(*:180))|ities/([^/]++)(?|(*:206)))|zones/([^/]++)(?|(*:233))|party\\-rates/([^/]++)(?|(*:266)))|voices/([^/]++)(?|(*:294)|/(?|edit(*:310)|post(*:322))|(*:331)))|cn\\-entry/([^/]++)(?|(*:362)|/edit(*:375)|(*:383))|load\\-plans/([^/]++)(?|(*:415)|/(?|edit(*:431)|dispatch(*:447)|receive(*:462))|(*:471))|delivery\\-sheets/([^/]++)(?|(*:508)|/(?|edit(*:524)|mark\\-(?|delivered/([^/]++)(*:559)|returned/([^/]++)(*:584)))|(*:594))|p(?|ickup\\-sheets/([^/]++)(?|(*:632)|/(?|edit(*:648)|mark\\-picked/([^/]++)(*:677))|(*:686))|arty\\-fuel\\-rates/([^/]++)(?|(*:724)|/edit(*:737)|(*:745))))|ettings/(?|users/([^/]++)(?|(*:784)|/edit(*:797)|(*:805))|roles/([^/]++)(?|(*:831)|/edit(*:844)|(*:852))|permissions/([^/]++)(?|(*:884)|/edit(*:897)|(*:905))))|/finance/(?|group\\-codes/([^/]++)(?|(*:952)|/edit(*:965)|(*:973))|c(?|ontrol\\-codes/([^/]++)(?|(*:1011)|/edit(*:1025)|(*:1034))|hart\\-of\\-accounts/([^/]++)(?|(*:1074)|/edit(*:1088)|(*:1097)))|account\\-grouping/([^/]++)(?|(*:1137)|/edit(*:1151)|(*:1160))|vouchers/(?|([^/]++)(?|(*:1193)|/edit(*:1207)|(*:1216))|create/([^/]++)(*:1241)|([^/]++)/(?|post(*:1266)|unpost(*:1281))))|/payroll/(?|de(?|partments/([^/]++)(?|(*:1331)|/edit(*:1345)|(*:1354))|signations/([^/]++)(?|(*:1386)|/edit(*:1400)|(*:1409))|ductions\\-allowances/([^/]++)(?|(*:1451)|/edit(*:1465)|(*:1474)))|employees/([^/]++)(?|(*:1506)|/edit(*:1520)|(*:1529))|loans/([^/]++)(?|(*:1556)|/edit(*:1570)|(*:1579))|authorized\\-leaves/([^/]++)(?|(*:1619)|/edit(*:1633)|(*:1642))))/?$}sDu',
    ),
    3 => 
    array (
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.item-codes.update',
          ),
          1 => 
          array (
            0 => 'item_code',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.item-codes.destroy',
          ),
          1 => 
          array (
            0 => 'item_code',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      111 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.invoice-charges.update',
          ),
          1 => 
          array (
            0 => 'invoice_charge',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.invoice-charges.destroy',
          ),
          1 => 
          array (
            0 => 'invoice_charge',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cargo-officers.update',
          ),
          1 => 
          array (
            0 => 'cargo_officer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cargo-officers.destroy',
          ),
          1 => 
          array (
            0 => 'cargo_officer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cn-stock.update',
          ),
          1 => 
          array (
            0 => 'cn_stock',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cn-stock.destroy',
          ),
          1 => 
          array (
            0 => 'cn_stock',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      206 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cities.update',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.cities.destroy',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.zones.update',
          ),
          1 => 
          array (
            0 => 'zone',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.zones.destroy',
          ),
          1 => 
          array (
            0 => 'zone',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.party-rates.update',
          ),
          1 => 
          array (
            0 => 'party_rate',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'initial-setup.party-rates.destroy',
          ),
          1 => 
          array (
            0 => 'party_rate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.invoices.show',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      310 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.invoices.edit',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.invoices.post',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.invoices.update',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.invoices.destroy',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.cn-entry.show',
          ),
          1 => 
          array (
            0 => 'cn_entry',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.cn-entry.edit',
          ),
          1 => 
          array (
            0 => 'cn_entry',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.cn-entry.update',
          ),
          1 => 
          array (
            0 => 'cn_entry',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.cn-entry.destroy',
          ),
          1 => 
          array (
            0 => 'cn_entry',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.load-plans.show',
          ),
          1 => 
          array (
            0 => 'load_plan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.load-plans.edit',
          ),
          1 => 
          array (
            0 => 'load_plan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.load-plans.dispatch',
          ),
          1 => 
          array (
            0 => 'loadPlan',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.load-plans.receive',
          ),
          1 => 
          array (
            0 => 'loadPlan',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.load-plans.update',
          ),
          1 => 
          array (
            0 => 'load_plan',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.load-plans.destroy',
          ),
          1 => 
          array (
            0 => 'load_plan',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.delivery-sheets.show',
          ),
          1 => 
          array (
            0 => 'delivery_sheet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.delivery-sheets.edit',
          ),
          1 => 
          array (
            0 => 'delivery_sheet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      559 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.delivery-sheets.mark-delivered',
          ),
          1 => 
          array (
            0 => 'deliverySheet',
            1 => 'cn',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.delivery-sheets.mark-returned',
          ),
          1 => 
          array (
            0 => 'deliverySheet',
            1 => 'cn',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.delivery-sheets.update',
          ),
          1 => 
          array (
            0 => 'delivery_sheet',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.delivery-sheets.destroy',
          ),
          1 => 
          array (
            0 => 'delivery_sheet',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.pickup-sheets.show',
          ),
          1 => 
          array (
            0 => 'pickup_sheet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.pickup-sheets.edit',
          ),
          1 => 
          array (
            0 => 'pickup_sheet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.pickup-sheets.mark-picked',
          ),
          1 => 
          array (
            0 => 'pickupSheet',
            1 => 'cn',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.pickup-sheets.update',
          ),
          1 => 
          array (
            0 => 'pickup_sheet',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.pickup-sheets.destroy',
          ),
          1 => 
          array (
            0 => 'pickup_sheet',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      724 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.party-fuel-rates.show',
          ),
          1 => 
          array (
            0 => 'party_fuel_rate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.party-fuel-rates.edit',
          ),
          1 => 
          array (
            0 => 'party_fuel_rate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      745 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 's2e.party-fuel-rates.update',
          ),
          1 => 
          array (
            0 => 'party_fuel_rate',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 's2e.party-fuel-rates.destroy',
          ),
          1 => 
          array (
            0 => 'party_fuel_rate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      797 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      831 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      884 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.permissions.show',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      897 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.permissions.edit',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.permissions.update',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.permissions.destroy',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      952 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.group-codes.show',
          ),
          1 => 
          array (
            0 => 'group_code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.group-codes.edit',
          ),
          1 => 
          array (
            0 => 'group_code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.group-codes.update',
          ),
          1 => 
          array (
            0 => 'group_code',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'finance.group-codes.destroy',
          ),
          1 => 
          array (
            0 => 'group_code',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1011 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.control-codes.show',
          ),
          1 => 
          array (
            0 => 'control_code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1025 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.control-codes.edit',
          ),
          1 => 
          array (
            0 => 'control_code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.control-codes.update',
          ),
          1 => 
          array (
            0 => 'control_code',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'finance.control-codes.destroy',
          ),
          1 => 
          array (
            0 => 'control_code',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.chart-of-accounts.show',
          ),
          1 => 
          array (
            0 => 'chart_of_account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1088 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.chart-of-accounts.edit',
          ),
          1 => 
          array (
            0 => 'chart_of_account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1097 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.chart-of-accounts.update',
          ),
          1 => 
          array (
            0 => 'chart_of_account',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'finance.chart-of-accounts.destroy',
          ),
          1 => 
          array (
            0 => 'chart_of_account',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.account-grouping.show',
          ),
          1 => 
          array (
            0 => 'account_grouping',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.account-grouping.edit',
          ),
          1 => 
          array (
            0 => 'account_grouping',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.account-grouping.update',
          ),
          1 => 
          array (
            0 => 'account_grouping',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'finance.account-grouping.destroy',
          ),
          1 => 
          array (
            0 => 'account_grouping',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.vouchers.show',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.vouchers.edit',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.vouchers.update',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'finance.vouchers.destroy',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.vouchers.create-type',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.vouchers.post',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.vouchers.unpost',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.departments.show',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.departments.edit',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.departments.update',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.departments.destroy',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.designations.show',
          ),
          1 => 
          array (
            0 => 'designation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.designations.edit',
          ),
          1 => 
          array (
            0 => 'designation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.designations.update',
          ),
          1 => 
          array (
            0 => 'designation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.designations.destroy',
          ),
          1 => 
          array (
            0 => 'designation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.deductions-allowances.show',
          ),
          1 => 
          array (
            0 => 'deductions_allowance',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.deductions-allowances.edit',
          ),
          1 => 
          array (
            0 => 'deductions_allowance',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1474 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.deductions-allowances.update',
          ),
          1 => 
          array (
            0 => 'deductions_allowance',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.deductions-allowances.destroy',
          ),
          1 => 
          array (
            0 => 'deductions_allowance',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.employees.show',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.employees.edit',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1529 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.employees.update',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.employees.destroy',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.loans.show',
          ),
          1 => 
          array (
            0 => 'loan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.loans.edit',
          ),
          1 => 
          array (
            0 => 'loan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.loans.update',
          ),
          1 => 
          array (
            0 => 'loan',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.loans.destroy',
          ),
          1 => 
          array (
            0 => 'loan',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.authorized-leaves.show',
          ),
          1 => 
          array (
            0 => 'authorized_leafe',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1633 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.authorized-leaves.edit',
          ),
          1 => 
          array (
            0 => 'authorized_leafe',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.authorized-leaves.update',
          ),
          1 => 
          array (
            0 => 'authorized_leafe',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.authorized-leaves.destroy',
          ),
          1 => 
          array (
            0 => 'authorized_leafe',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KMU4qv068WFxS5fl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009fa0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KMU4qv068WFxS5fl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1ew9bV6qC2GdqUtD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1ew9bV6qC2GdqUtD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9LHkQEunv0ZSfgQy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9LHkQEunv0ZSfgQy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.item-codes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/initial-setup/item-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.item-codes.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.item-codes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/initial-setup/item-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.item-codes.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.item-codes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/initial-setup/item-codes/{item_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.item-codes.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.item-codes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/initial-setup/item-codes/{item_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.item-codes.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.invoice-charges.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/initial-setup/invoice-charges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.invoice-charges.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.invoice-charges.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/initial-setup/invoice-charges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.invoice-charges.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.invoice-charges.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/initial-setup/invoice-charges/{invoice_charge}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.invoice-charges.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.invoice-charges.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/initial-setup/invoice-charges/{invoice_charge}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.invoice-charges.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cargo-officers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/initial-setup/cargo-officers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cargo-officers.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cargo-officers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/initial-setup/cargo-officers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cargo-officers.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cargo-officers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/initial-setup/cargo-officers/{cargo_officer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cargo-officers.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cargo-officers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/initial-setup/cargo-officers/{cargo_officer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cargo-officers.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cn-stock.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/initial-setup/cn-stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cn-stock.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cn-stock.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/initial-setup/cn-stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cn-stock.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cn-stock.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/initial-setup/cn-stock/{cn_stock}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cn-stock.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cn-stock.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/initial-setup/cn-stock/{cn_stock}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cn-stock.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/initial-setup/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cities.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/initial-setup/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cities.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cities.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/initial-setup/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cities.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.cities.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/initial-setup/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.cities.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.zones.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/initial-setup/zones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.zones.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.zones.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/initial-setup/zones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.zones.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.zones.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/initial-setup/zones/{zone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.zones.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.zones.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/initial-setup/zones/{zone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.zones.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.party-rates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/initial-setup/party-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.party-rates.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.party-rates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/initial-setup/party-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.party-rates.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.party-rates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/initial-setup/party-rates/{party_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.party-rates.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initial-setup.party-rates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/initial-setup/party-rates/{party_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'initial-setup.party-rates.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InitialSetupController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics/initial-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.cn-entry.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/cn-entry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.cn-entry.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.cn-entry.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/cn-entry/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.cn-entry.create',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@create',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@create',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.cn-entry.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/cn-entry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.cn-entry.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.cn-entry.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/cn-entry/{cn_entry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.cn-entry.show',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@show',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@show',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.cn-entry.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/cn-entry/{cn_entry}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.cn-entry.edit',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@edit',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@edit',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.cn-entry.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/cn-entry/{cn_entry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.cn-entry.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.cn-entry.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/cn-entry/{cn_entry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.cn-entry.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\ConsignmentNoteController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.load-plans.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/load-plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.load-plans.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.load-plans.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/load-plans/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.load-plans.create',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@create',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@create',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.load-plans.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/load-plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.load-plans.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.load-plans.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/load-plans/{load_plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.load-plans.show',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@show',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@show',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.load-plans.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/load-plans/{load_plan}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.load-plans.edit',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@edit',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.load-plans.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/load-plans/{load_plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.load-plans.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.load-plans.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/load-plans/{load_plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.load-plans.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.load-plans.dispatch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/load-plans/{loadPlan}/dispatch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@dispatch',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@dispatch',
        'as' => 's2e.load-plans.dispatch',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.load-plans.receive' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/load-plans/{loadPlan}/receive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@receive',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\LoadPlanController@receive',
        'as' => 's2e.load-plans.receive',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.delivery-sheets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/delivery-sheets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.delivery-sheets.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.delivery-sheets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/delivery-sheets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.delivery-sheets.create',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@create',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@create',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.delivery-sheets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/delivery-sheets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.delivery-sheets.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.delivery-sheets.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/delivery-sheets/{delivery_sheet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.delivery-sheets.show',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@show',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@show',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.delivery-sheets.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/delivery-sheets/{delivery_sheet}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.delivery-sheets.edit',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@edit',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@edit',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.delivery-sheets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/delivery-sheets/{delivery_sheet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.delivery-sheets.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.delivery-sheets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/delivery-sheets/{delivery_sheet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.delivery-sheets.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.delivery-sheets.mark-delivered' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/delivery-sheets/{deliverySheet}/mark-delivered/{cn}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@markDelivered',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@markDelivered',
        'as' => 's2e.delivery-sheets.mark-delivered',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.delivery-sheets.mark-returned' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/delivery-sheets/{deliverySheet}/mark-returned/{cn}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@markReturned',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\DeliverySheetController@markReturned',
        'as' => 's2e.delivery-sheets.mark-returned',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.pickup-sheets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/pickup-sheets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.pickup-sheets.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.pickup-sheets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/pickup-sheets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.pickup-sheets.create',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@create',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@create',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.pickup-sheets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/pickup-sheets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.pickup-sheets.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.pickup-sheets.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/pickup-sheets/{pickup_sheet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.pickup-sheets.show',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@show',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@show',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.pickup-sheets.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/pickup-sheets/{pickup_sheet}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.pickup-sheets.edit',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@edit',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@edit',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.pickup-sheets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/pickup-sheets/{pickup_sheet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.pickup-sheets.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.pickup-sheets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/pickup-sheets/{pickup_sheet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.pickup-sheets.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.pickup-sheets.mark-picked' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/pickup-sheets/{pickupSheet}/mark-picked/{cn}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@markPicked',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PickupSheetController@markPicked',
        'as' => 's2e.pickup-sheets.mark-picked',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.invoices.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.invoices.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/invoices/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.invoices.create',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@create',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@create',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.invoices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.invoices.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.invoices.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.invoices.show',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@show',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.invoices.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/invoices/{invoice}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.invoices.edit',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@edit',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@edit',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.invoices.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.invoices.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.invoices.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.invoices.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.invoices.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/invoices/{invoice}/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@post',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\InvoiceController@post',
        'as' => 's2e.invoices.post',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.party-fuel-rates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/party-fuel-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.party-fuel-rates.index',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@index',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@index',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.party-fuel-rates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/party-fuel-rates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.party-fuel-rates.create',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@create',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@create',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.party-fuel-rates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 's2e-logistics/party-fuel-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.party-fuel-rates.store',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@store',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@store',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.party-fuel-rates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/party-fuel-rates/{party_fuel_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.party-fuel-rates.show',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@show',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@show',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.party-fuel-rates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 's2e-logistics/party-fuel-rates/{party_fuel_rate}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.party-fuel-rates.edit',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@edit',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@edit',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.party-fuel-rates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 's2e-logistics/party-fuel-rates/{party_fuel_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.party-fuel-rates.update',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@update',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@update',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    's2e.party-fuel-rates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 's2e-logistics/party-fuel-rates/{party_fuel_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 's2e.party-fuel-rates.destroy',
        'uses' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@destroy',
        'controller' => 'App\\Http\\Controllers\\S2ELogistics\\PartyFuelRateController@destroy',
        'namespace' => NULL,
        'prefix' => '/s2e-logistics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales.cn-detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales/cn-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@cnDetail',
        'controller' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@cnDetail',
        'as' => 'reports.sales.cn-detail',
        'namespace' => NULL,
        'prefix' => 'reports/sales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales.list-invoices' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales/list-invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@listInvoices',
        'controller' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@listInvoices',
        'as' => 'reports.sales.list-invoices',
        'namespace' => NULL,
        'prefix' => 'reports/sales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales.cn-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales/cn-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@cnStatus',
        'controller' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@cnStatus',
        'as' => 'reports.sales.cn-status',
        'namespace' => NULL,
        'prefix' => 'reports/sales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales.cn-profit-loss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales/cn-profit-loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@cnProfitLoss',
        'controller' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@cnProfitLoss',
        'as' => 'reports.sales.cn-profit-loss',
        'namespace' => NULL,
        'prefix' => 'reports/sales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales.city-profit-loss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales/city-profit-loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@cityProfitLoss',
        'controller' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@cityProfitLoss',
        'as' => 'reports.sales.city-profit-loss',
        'namespace' => NULL,
        'prefix' => 'reports/sales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales.shipper-profit-loss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales/shipper-profit-loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@shipperProfitLoss',
        'controller' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@shipperProfitLoss',
        'as' => 'reports.sales.shipper-profit-loss',
        'namespace' => NULL,
        'prefix' => 'reports/sales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales.hub-profit-loss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales/hub-profit-loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@hubProfitLoss',
        'controller' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@hubProfitLoss',
        'as' => 'reports.sales.hub-profit-loss',
        'namespace' => NULL,
        'prefix' => 'reports/sales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales.spo-profit-loss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales/spo-profit-loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@spoProfitLoss',
        'controller' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@spoProfitLoss',
        'as' => 'reports.sales.spo-profit-loss',
        'namespace' => NULL,
        'prefix' => 'reports/sales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales.hub-cn-detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales/hub-cn-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@hubCnDetail',
        'controller' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@hubCnDetail',
        'as' => 'reports.sales.hub-cn-detail',
        'namespace' => NULL,
        'prefix' => 'reports/sales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales.transporter-documents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales/transporter-documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@transporterDocuments',
        'controller' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@transporterDocuments',
        'as' => 'reports.sales.transporter-documents',
        'namespace' => NULL,
        'prefix' => 'reports/sales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales.zone-profit-loss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales/zone-profit-loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@zoneProfitLoss',
        'controller' => 'App\\Http\\Controllers\\Reports\\SalesReportsController@zoneProfitLoss',
        'as' => 'reports.sales.zone-profit-loss',
        'namespace' => NULL,
        'prefix' => 'reports/sales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.edit-lists.spo-cn-stock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/edit-lists/spo-cn-stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\EditListsController@spoCnStock',
        'controller' => 'App\\Http\\Controllers\\Reports\\EditListsController@spoCnStock',
        'as' => 'reports.edit-lists.spo-cn-stock',
        'namespace' => NULL,
        'prefix' => 'reports/edit-lists',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.edit-lists.missing-sn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/edit-lists/missing-sn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\EditListsController@missingSn',
        'controller' => 'App\\Http\\Controllers\\Reports\\EditListsController@missingSn',
        'as' => 'reports.edit-lists.missing-sn',
        'namespace' => NULL,
        'prefix' => 'reports/edit-lists',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.edit-lists.pending-invoices' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/edit-lists/pending-invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\EditListsController@pendingInvoices',
        'controller' => 'App\\Http\\Controllers\\Reports\\EditListsController@pendingInvoices',
        'as' => 'reports.edit-lists.pending-invoices',
        'namespace' => NULL,
        'prefix' => 'reports/edit-lists',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.edit-lists.item-codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/edit-lists/item-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\EditListsController@itemCodes',
        'controller' => 'App\\Http\\Controllers\\Reports\\EditListsController@itemCodes',
        'as' => 'reports.edit-lists.item-codes',
        'namespace' => NULL,
        'prefix' => 'reports/edit-lists',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.edit-lists.city-codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/edit-lists/city-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\EditListsController@cityCodes',
        'controller' => 'App\\Http\\Controllers\\Reports\\EditListsController@cityCodes',
        'as' => 'reports.edit-lists.city-codes',
        'namespace' => NULL,
        'prefix' => 'reports/edit-lists',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.edit-lists.city-hub-list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/edit-lists/city-hub-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\EditListsController@cityHubList',
        'controller' => 'App\\Http\\Controllers\\Reports\\EditListsController@cityHubList',
        'as' => 'reports.edit-lists.city-hub-list',
        'namespace' => NULL,
        'prefix' => 'reports/edit-lists',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.edit-lists.vehicle-types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/edit-lists/vehicle-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\EditListsController@vehicleTypes',
        'controller' => 'App\\Http\\Controllers\\Reports\\EditListsController@vehicleTypes',
        'as' => 'reports.edit-lists.vehicle-types',
        'namespace' => NULL,
        'prefix' => 'reports/edit-lists',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.edit-lists.spo-officers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/edit-lists/spo-officers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\EditListsController@spoOfficers',
        'controller' => 'App\\Http\\Controllers\\Reports\\EditListsController@spoOfficers',
        'as' => 'reports.edit-lists.spo-officers',
        'namespace' => NULL,
        'prefix' => 'reports/edit-lists',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.edit-lists.rates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/edit-lists/rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\EditListsController@rates',
        'controller' => 'App\\Http\\Controllers\\Reports\\EditListsController@rates',
        'as' => 'reports.edit-lists.rates',
        'namespace' => NULL,
        'prefix' => 'reports/edit-lists',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.edit-lists.party-fuel-rates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/edit-lists/party-fuel-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\EditListsController@partyFuelRates',
        'controller' => 'App\\Http\\Controllers\\Reports\\EditListsController@partyFuelRates',
        'as' => 'reports.edit-lists.party-fuel-rates',
        'namespace' => NULL,
        'prefix' => 'reports/edit-lists',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.other.delivery-cn-detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/other/delivery-cn-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@deliveryCnDetail',
        'controller' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@deliveryCnDetail',
        'as' => 'reports.other.delivery-cn-detail',
        'namespace' => NULL,
        'prefix' => 'reports/other',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.other.group-outstanding' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/other/group-outstanding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@groupOutstanding',
        'controller' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@groupOutstanding',
        'as' => 'reports.other.group-outstanding',
        'namespace' => NULL,
        'prefix' => 'reports/other',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.other.sales-tax-invoices' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/other/sales-tax-invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@salesTaxInvoices',
        'controller' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@salesTaxInvoices',
        'as' => 'reports.other.sales-tax-invoices',
        'namespace' => NULL,
        'prefix' => 'reports/other',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.other.cn-detail-cod' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/other/cn-detail-cod',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@cnDetailCod',
        'controller' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@cnDetailCod',
        'as' => 'reports.other.cn-detail-cod',
        'namespace' => NULL,
        'prefix' => 'reports/other',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.other.delivery-sheet-cod' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/other/delivery-sheet-cod',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@deliverySheetCod',
        'controller' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@deliverySheetCod',
        'as' => 'reports.other.delivery-sheet-cod',
        'namespace' => NULL,
        'prefix' => 'reports/other',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.other.cod-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/other/cod-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@codStatus',
        'controller' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@codStatus',
        'as' => 'reports.other.cod-status',
        'namespace' => NULL,
        'prefix' => 'reports/other',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.other.stock-in-transit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/other/stock-in-transit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@stockInTransit',
        'controller' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@stockInTransit',
        'as' => 'reports.other.stock-in-transit',
        'namespace' => NULL,
        'prefix' => 'reports/other',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.other.cn-in-stock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/other/cn-in-stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@cnInStock',
        'controller' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@cnInStock',
        'as' => 'reports.other.cn-in-stock',
        'namespace' => NULL,
        'prefix' => 'reports/other',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.other.non-service-charges' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/other/non-service-charges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@nonServiceCharges',
        'controller' => 'App\\Http\\Controllers\\Reports\\OtherReportsController@nonServiceCharges',
        'as' => 'reports.other.non-service-charges',
        'namespace' => NULL,
        'prefix' => 'reports/other',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.group-codes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/group-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.group-codes.index',
        'uses' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@index',
        'controller' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@index',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.group-codes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/group-codes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.group-codes.create',
        'uses' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@create',
        'controller' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@create',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.group-codes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'finance/group-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.group-codes.store',
        'uses' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@store',
        'controller' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@store',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.group-codes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/group-codes/{group_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.group-codes.show',
        'uses' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@show',
        'controller' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@show',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.group-codes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/group-codes/{group_code}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.group-codes.edit',
        'uses' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@edit',
        'controller' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@edit',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.group-codes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'finance/group-codes/{group_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.group-codes.update',
        'uses' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@update',
        'controller' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@update',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.group-codes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'finance/group-codes/{group_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.group-codes.destroy',
        'uses' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Finance\\GroupCodeController@destroy',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.control-codes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/control-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.control-codes.index',
        'uses' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@index',
        'controller' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@index',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.control-codes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/control-codes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.control-codes.create',
        'uses' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@create',
        'controller' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@create',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.control-codes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'finance/control-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.control-codes.store',
        'uses' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@store',
        'controller' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@store',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.control-codes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/control-codes/{control_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.control-codes.show',
        'uses' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@show',
        'controller' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@show',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.control-codes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/control-codes/{control_code}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.control-codes.edit',
        'uses' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@edit',
        'controller' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@edit',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.control-codes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'finance/control-codes/{control_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.control-codes.update',
        'uses' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@update',
        'controller' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@update',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.control-codes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'finance/control-codes/{control_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.control-codes.destroy',
        'uses' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Finance\\ControlCodeController@destroy',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.chart-of-accounts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/chart-of-accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.chart-of-accounts.index',
        'uses' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@index',
        'controller' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@index',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.chart-of-accounts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/chart-of-accounts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.chart-of-accounts.create',
        'uses' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@create',
        'controller' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@create',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.chart-of-accounts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'finance/chart-of-accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.chart-of-accounts.store',
        'uses' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@store',
        'controller' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@store',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.chart-of-accounts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/chart-of-accounts/{chart_of_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.chart-of-accounts.show',
        'uses' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@show',
        'controller' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@show',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.chart-of-accounts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/chart-of-accounts/{chart_of_account}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.chart-of-accounts.edit',
        'uses' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@edit',
        'controller' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@edit',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.chart-of-accounts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'finance/chart-of-accounts/{chart_of_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.chart-of-accounts.update',
        'uses' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@update',
        'controller' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@update',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.chart-of-accounts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'finance/chart-of-accounts/{chart_of_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.chart-of-accounts.destroy',
        'uses' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@destroy',
        'controller' => 'App\\Http\\Controllers\\Finance\\ChartOfAccountController@destroy',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.account-grouping.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/account-grouping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.account-grouping.index',
        'uses' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@index',
        'controller' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@index',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.account-grouping.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/account-grouping/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.account-grouping.create',
        'uses' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@create',
        'controller' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@create',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.account-grouping.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'finance/account-grouping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.account-grouping.store',
        'uses' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@store',
        'controller' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@store',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.account-grouping.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/account-grouping/{account_grouping}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.account-grouping.show',
        'uses' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@show',
        'controller' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@show',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.account-grouping.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/account-grouping/{account_grouping}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.account-grouping.edit',
        'uses' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@edit',
        'controller' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@edit',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.account-grouping.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'finance/account-grouping/{account_grouping}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.account-grouping.update',
        'uses' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@update',
        'controller' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@update',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.account-grouping.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'finance/account-grouping/{account_grouping}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.account-grouping.destroy',
        'uses' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@destroy',
        'controller' => 'App\\Http\\Controllers\\Finance\\AccountGroupingController@destroy',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.vouchers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/vouchers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.vouchers.index',
        'uses' => 'App\\Http\\Controllers\\Finance\\VoucherController@index',
        'controller' => 'App\\Http\\Controllers\\Finance\\VoucherController@index',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.vouchers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/vouchers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.vouchers.create',
        'uses' => 'App\\Http\\Controllers\\Finance\\VoucherController@create',
        'controller' => 'App\\Http\\Controllers\\Finance\\VoucherController@create',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.vouchers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'finance/vouchers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.vouchers.store',
        'uses' => 'App\\Http\\Controllers\\Finance\\VoucherController@store',
        'controller' => 'App\\Http\\Controllers\\Finance\\VoucherController@store',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.vouchers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/vouchers/{voucher}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.vouchers.show',
        'uses' => 'App\\Http\\Controllers\\Finance\\VoucherController@show',
        'controller' => 'App\\Http\\Controllers\\Finance\\VoucherController@show',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.vouchers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/vouchers/{voucher}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.vouchers.edit',
        'uses' => 'App\\Http\\Controllers\\Finance\\VoucherController@edit',
        'controller' => 'App\\Http\\Controllers\\Finance\\VoucherController@edit',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.vouchers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'finance/vouchers/{voucher}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.vouchers.update',
        'uses' => 'App\\Http\\Controllers\\Finance\\VoucherController@update',
        'controller' => 'App\\Http\\Controllers\\Finance\\VoucherController@update',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.vouchers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'finance/vouchers/{voucher}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'finance.vouchers.destroy',
        'uses' => 'App\\Http\\Controllers\\Finance\\VoucherController@destroy',
        'controller' => 'App\\Http\\Controllers\\Finance\\VoucherController@destroy',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.vouchers.create-type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/vouchers/create/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\VoucherController@create',
        'controller' => 'App\\Http\\Controllers\\Finance\\VoucherController@create',
        'as' => 'finance.vouchers.create-type',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.vouchers.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'finance/vouchers/{voucher}/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\VoucherController@post',
        'controller' => 'App\\Http\\Controllers\\Finance\\VoucherController@post',
        'as' => 'finance.vouchers.post',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.vouchers.unpost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'finance/vouchers/{voucher}/unpost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\VoucherController@unpost',
        'controller' => 'App\\Http\\Controllers\\Finance\\VoucherController@unpost',
        'as' => 'finance.vouchers.unpost',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.balance-sheet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/balance-sheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@balanceSheet',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@balanceSheet',
        'as' => 'finance.balance-sheet',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.profit-loss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/profit-loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@profitLoss',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@profitLoss',
        'as' => 'finance.profit-loss',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.change-voucher-date' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/change-voucher-date',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@changeVoucherDate',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@changeVoucherDate',
        'as' => 'finance.change-voucher-date',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.update-voucher-date' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'finance/change-voucher-date',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@updateVoucherDate',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@updateVoucherDate',
        'as' => 'finance.update-voucher-date',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.list-chart-of-accounts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/list-chart-of-accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@listChartOfAccounts',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@listChartOfAccounts',
        'as' => 'finance.list-chart-of-accounts',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.list-vouchers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/list-vouchers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@listVouchers',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@listVouchers',
        'as' => 'finance.list-vouchers',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.cn-expenses' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/cn-expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@cnExpenses',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@cnExpenses',
        'as' => 'finance.cn-expenses',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.trial-balance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/trial-balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@trialBalance',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@trialBalance',
        'as' => 'finance.trial-balance',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.master-schedule' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/master-schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@masterSchedule',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@masterSchedule',
        'as' => 'finance.master-schedule',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.accounts-ledger' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/accounts-ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@accountsLedger',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@accountsLedger',
        'as' => 'finance.accounts-ledger',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.profit-loss-comparative' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/profit-loss-comparative',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@profitLossComparative',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@profitLossComparative',
        'as' => 'finance.profit-loss-comparative',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.month-closing-balance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/month-closing-balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@monthClosingBalance',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@monthClosingBalance',
        'as' => 'finance.month-closing-balance',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.group-outstanding' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/group-outstanding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@groupOutstanding',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@groupOutstanding',
        'as' => 'finance.group-outstanding',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.group-ledger' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/group-ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@groupLedger',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@groupLedger',
        'as' => 'finance.group-ledger',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.trial-balance-console' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/trial-balance-console',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@trialBalanceConsole',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@trialBalanceConsole',
        'as' => 'finance.trial-balance-console',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.master-schedule-console' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/master-schedule-console',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@masterScheduleConsole',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@masterScheduleConsole',
        'as' => 'finance.master-schedule-console',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.accounts-ledger-console' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/accounts-ledger-console',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@accountsLedgerConsole',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@accountsLedgerConsole',
        'as' => 'finance.accounts-ledger-console',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.pl-comparative-console' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/pl-comparative-console',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@plComparativeConsole',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@plComparativeConsole',
        'as' => 'finance.pl-comparative-console',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.account-grouping-detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/account-grouping-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@accountGroupingDetail',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@accountGroupingDetail',
        'as' => 'finance.account-grouping-detail',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.sales-tax-register-invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/sales-tax-register-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@salesTaxRegisterInvoice',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@salesTaxRegisterInvoice',
        'as' => 'finance.sales-tax-register-invoice',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.sales-tax-register-customer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/sales-tax-register-customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@salesTaxRegisterCustomer',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@salesTaxRegisterCustomer',
        'as' => 'finance.sales-tax-register-customer',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.party-outstanding-detailed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/party-outstanding-detailed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@partyOutstandingDetailed',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@partyOutstandingDetailed',
        'as' => 'finance.party-outstanding-detailed',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.party-outstanding-aging' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/party-outstanding-aging',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@partyOutstandingAging',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@partyOutstandingAging',
        'as' => 'finance.party-outstanding-aging',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.party-cleared-outstanding' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/party-cleared-outstanding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@partyClearedOutstanding',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@partyClearedOutstanding',
        'as' => 'finance.party-cleared-outstanding',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.party-outstanding' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'finance/party-outstanding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Finance\\FinanceController@partyOutstanding',
        'controller' => 'App\\Http\\Controllers\\Finance\\FinanceController@partyOutstanding',
        'as' => 'finance.party-outstanding',
        'namespace' => NULL,
        'prefix' => '/finance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.departments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.departments.index',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@index',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@index',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.departments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/departments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.departments.create',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@create',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@create',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.departments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payroll/departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.departments.store',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@store',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@store',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.departments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.departments.show',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@show',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@show',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.departments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/departments/{department}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.departments.edit',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@edit',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@edit',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.departments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'payroll/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.departments.update',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@update',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@update',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.departments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'payroll/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.departments.destroy',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DepartmentController@destroy',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.designations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/designations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.designations.index',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DesignationController@index',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DesignationController@index',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.designations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/designations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.designations.create',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DesignationController@create',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DesignationController@create',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.designations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payroll/designations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.designations.store',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DesignationController@store',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DesignationController@store',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.designations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/designations/{designation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.designations.show',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DesignationController@show',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DesignationController@show',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.designations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/designations/{designation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.designations.edit',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DesignationController@edit',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DesignationController@edit',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.designations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'payroll/designations/{designation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.designations.update',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DesignationController@update',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DesignationController@update',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.designations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'payroll/designations/{designation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.designations.destroy',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DesignationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DesignationController@destroy',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.employees.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.employees.index',
        'uses' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@index',
        'controller' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@index',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.employees.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/employees/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.employees.create',
        'uses' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@create',
        'controller' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@create',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.employees.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payroll/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.employees.store',
        'uses' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@store',
        'controller' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@store',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.employees.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.employees.show',
        'uses' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@show',
        'controller' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@show',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.employees.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/employees/{employee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.employees.edit',
        'uses' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@edit',
        'controller' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@edit',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.employees.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'payroll/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.employees.update',
        'uses' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@update',
        'controller' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@update',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.employees.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'payroll/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.employees.destroy',
        'uses' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Payroll\\EmployeeController@destroy',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.loans.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/loans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.loans.index',
        'uses' => 'App\\Http\\Controllers\\Payroll\\LoanController@index',
        'controller' => 'App\\Http\\Controllers\\Payroll\\LoanController@index',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.loans.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/loans/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.loans.create',
        'uses' => 'App\\Http\\Controllers\\Payroll\\LoanController@create',
        'controller' => 'App\\Http\\Controllers\\Payroll\\LoanController@create',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.loans.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payroll/loans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.loans.store',
        'uses' => 'App\\Http\\Controllers\\Payroll\\LoanController@store',
        'controller' => 'App\\Http\\Controllers\\Payroll\\LoanController@store',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.loans.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/loans/{loan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.loans.show',
        'uses' => 'App\\Http\\Controllers\\Payroll\\LoanController@show',
        'controller' => 'App\\Http\\Controllers\\Payroll\\LoanController@show',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.loans.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/loans/{loan}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.loans.edit',
        'uses' => 'App\\Http\\Controllers\\Payroll\\LoanController@edit',
        'controller' => 'App\\Http\\Controllers\\Payroll\\LoanController@edit',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.loans.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'payroll/loans/{loan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.loans.update',
        'uses' => 'App\\Http\\Controllers\\Payroll\\LoanController@update',
        'controller' => 'App\\Http\\Controllers\\Payroll\\LoanController@update',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.loans.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'payroll/loans/{loan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.loans.destroy',
        'uses' => 'App\\Http\\Controllers\\Payroll\\LoanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Payroll\\LoanController@destroy',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.deductions-allowances.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/deductions-allowances',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.deductions-allowances.index',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@index',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@index',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.deductions-allowances.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/deductions-allowances/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.deductions-allowances.create',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@create',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@create',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.deductions-allowances.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payroll/deductions-allowances',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.deductions-allowances.store',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@store',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@store',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.deductions-allowances.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/deductions-allowances/{deductions_allowance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.deductions-allowances.show',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@show',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@show',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.deductions-allowances.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/deductions-allowances/{deductions_allowance}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.deductions-allowances.edit',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@edit',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@edit',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.deductions-allowances.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'payroll/deductions-allowances/{deductions_allowance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.deductions-allowances.update',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@update',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@update',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.deductions-allowances.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'payroll/deductions-allowances/{deductions_allowance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.deductions-allowances.destroy',
        'uses' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Payroll\\DeductionAllowanceController@destroy',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.authorized-leaves.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/authorized-leaves',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.authorized-leaves.index',
        'uses' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@index',
        'controller' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@index',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.authorized-leaves.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/authorized-leaves/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.authorized-leaves.create',
        'uses' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@create',
        'controller' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@create',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.authorized-leaves.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payroll/authorized-leaves',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.authorized-leaves.store',
        'uses' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@store',
        'controller' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@store',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.authorized-leaves.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/authorized-leaves/{authorized_leafe}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.authorized-leaves.show',
        'uses' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@show',
        'controller' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@show',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.authorized-leaves.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/authorized-leaves/{authorized_leafe}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.authorized-leaves.edit',
        'uses' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@edit',
        'controller' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@edit',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.authorized-leaves.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'payroll/authorized-leaves/{authorized_leafe}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.authorized-leaves.update',
        'uses' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@update',
        'controller' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@update',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.authorized-leaves.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'payroll/authorized-leaves/{authorized_leafe}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'payroll.authorized-leaves.destroy',
        'uses' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@destroy',
        'controller' => 'App\\Http\\Controllers\\Payroll\\AuthorizedLeaveController@destroy',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.process' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payroll/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Payroll\\PayrollController@process',
        'controller' => 'App\\Http\\Controllers\\Payroll\\PayrollController@process',
        'as' => 'payroll.process',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.list-employees' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/list-employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Payroll\\PayrollController@listEmployees',
        'controller' => 'App\\Http\\Controllers\\Payroll\\PayrollController@listEmployees',
        'as' => 'payroll.list-employees',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.list-monthly-payroll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/list-monthly-payroll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Payroll\\PayrollController@listMonthlyPayroll',
        'controller' => 'App\\Http\\Controllers\\Payroll\\PayrollController@listMonthlyPayroll',
        'as' => 'payroll.list-monthly-payroll',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.list-deductions-allowances' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/list-deductions-allowances',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Payroll\\PayrollController@listDeductionsAllowances',
        'controller' => 'App\\Http\\Controllers\\Payroll\\PayrollController@listDeductionsAllowances',
        'as' => 'payroll.list-deductions-allowances',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.authorized-leaves-detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/authorized-leaves-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Payroll\\PayrollController@authorizedLeavesDetail',
        'controller' => 'App\\Http\\Controllers\\Payroll\\PayrollController@authorizedLeavesDetail',
        'as' => 'payroll.authorized-leaves-detail',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.leave-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/leave-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Payroll\\PayrollController@leaveStatus',
        'controller' => 'App\\Http\\Controllers\\Payroll\\PayrollController@leaveStatus',
        'as' => 'payroll.leave-status',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.department-register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/department-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Payroll\\PayrollController@departmentRegister',
        'controller' => 'App\\Http\\Controllers\\Payroll\\PayrollController@departmentRegister',
        'as' => 'payroll.department-register',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.registers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/registers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Payroll\\PayrollController@registers',
        'controller' => 'App\\Http\\Controllers\\Payroll\\PayrollController@registers',
        'as' => 'payroll.registers',
        'namespace' => NULL,
        'prefix' => '/payroll',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.users.index',
        'uses' => 'App\\Http\\Controllers\\Settings\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Settings\\UserController@index',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.users.create',
        'uses' => 'App\\Http\\Controllers\\Settings\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\Settings\\UserController@create',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.users.store',
        'uses' => 'App\\Http\\Controllers\\Settings\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Settings\\UserController@store',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.users.show',
        'uses' => 'App\\Http\\Controllers\\Settings\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Settings\\UserController@show',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.users.edit',
        'uses' => 'App\\Http\\Controllers\\Settings\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Settings\\UserController@edit',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'settings/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.users.update',
        'uses' => 'App\\Http\\Controllers\\Settings\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Settings\\UserController@update',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'settings/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.users.destroy',
        'uses' => 'App\\Http\\Controllers\\Settings\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Settings\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.roles.index',
        'uses' => 'App\\Http\\Controllers\\Settings\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Settings\\RoleController@index',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.roles.create',
        'uses' => 'App\\Http\\Controllers\\Settings\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Settings\\RoleController@create',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.roles.store',
        'uses' => 'App\\Http\\Controllers\\Settings\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Settings\\RoleController@store',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.roles.show',
        'uses' => 'App\\Http\\Controllers\\Settings\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Settings\\RoleController@show',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.roles.edit',
        'uses' => 'App\\Http\\Controllers\\Settings\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Settings\\RoleController@edit',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'settings/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.roles.update',
        'uses' => 'App\\Http\\Controllers\\Settings\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Settings\\RoleController@update',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'settings/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Settings\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Settings\\RoleController@destroy',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.permissions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.permissions.index',
        'uses' => 'App\\Http\\Controllers\\Settings\\PermissionController@index',
        'controller' => 'App\\Http\\Controllers\\Settings\\PermissionController@index',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.permissions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/permissions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.permissions.create',
        'uses' => 'App\\Http\\Controllers\\Settings\\PermissionController@create',
        'controller' => 'App\\Http\\Controllers\\Settings\\PermissionController@create',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.permissions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.permissions.store',
        'uses' => 'App\\Http\\Controllers\\Settings\\PermissionController@store',
        'controller' => 'App\\Http\\Controllers\\Settings\\PermissionController@store',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.permissions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.permissions.show',
        'uses' => 'App\\Http\\Controllers\\Settings\\PermissionController@show',
        'controller' => 'App\\Http\\Controllers\\Settings\\PermissionController@show',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.permissions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/permissions/{permission}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.permissions.edit',
        'uses' => 'App\\Http\\Controllers\\Settings\\PermissionController@edit',
        'controller' => 'App\\Http\\Controllers\\Settings\\PermissionController@edit',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.permissions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'settings/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.permissions.update',
        'uses' => 'App\\Http\\Controllers\\Settings\\PermissionController@update',
        'controller' => 'App\\Http\\Controllers\\Settings\\PermissionController@update',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.permissions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'settings/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'settings.permissions.destroy',
        'uses' => 'App\\Http\\Controllers\\Settings\\PermissionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Settings\\PermissionController@destroy',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.change-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@changePassword',
        'as' => 'settings.change-password',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.update-password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@updatePassword',
        'as' => 'settings.update-password',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.change-year' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/change-year',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@changeYear',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@changeYear',
        'as' => 'settings.change-year',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.update-year' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/change-year',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@updateYear',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@updateYear',
        'as' => 'settings.update-year',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.initialize-data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/initialize-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@initializeData',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@initializeData',
        'as' => 'settings.initialize-data',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.process-initialize-data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/initialize-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@processInitializeData',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@processInitializeData',
        'as' => 'settings.process-initialize-data',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.data-processing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/data-processing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@dataProcessing',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@dataProcessing',
        'as' => 'settings.data-processing',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.process-data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/data-processing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@processData',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@processData',
        'as' => 'settings.process-data',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.payroll-processing-final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/payroll-processing-final',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@payrollProcessingFinal',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@payrollProcessingFinal',
        'as' => 'settings.payroll-processing-final',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.process-payroll-final' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/payroll-processing-final',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@processPayrollFinal',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@processPayrollFinal',
        'as' => 'settings.process-payroll-final',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.system-optimization' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/system-optimization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@systemOptimization',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@systemOptimization',
        'as' => 'settings.system-optimization',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.run-optimization' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/system-optimization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@runOptimization',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@runOptimization',
        'as' => 'settings.run-optimization',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.un-void-cn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/un-void-cn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@unVoidCn',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@unVoidCn',
        'as' => 'settings.un-void-cn',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.process-un-void-cn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/un-void-cn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@processUnVoidCn',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@processUnVoidCn',
        'as' => 'settings.process-un-void-cn',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email-settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/email-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@emailSettings',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@emailSettings',
        'as' => 'settings.email-settings',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.update-email-settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/email-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@updateEmailSettings',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@updateEmailSettings',
        'as' => 'settings.update-email-settings',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.inter-branch-jv-code' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/inter-branch-jv-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@interBranchJvCode',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@interBranchJvCode',
        'as' => 'settings.inter-branch-jv-code',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.update-inter-branch-jv-code' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/inter-branch-jv-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@updateInterBranchJvCode',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@updateInterBranchJvCode',
        'as' => 'settings.update-inter-branch-jv-code',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.unpost-data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/unpost-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@unpostData',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@unpostData',
        'as' => 'settings.unpost-data',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.process-unpost-data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings/unpost-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@processUnpostData',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@processUnpostData',
        'as' => 'settings.process-unpost-data',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.audit-logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/audit-logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Settings\\SettingsController@auditLogs',
        'controller' => 'App\\Http\\Controllers\\Settings\\SettingsController@auditLogs',
        'as' => 'settings.audit-logs',
        'namespace' => NULL,
        'prefix' => '/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
