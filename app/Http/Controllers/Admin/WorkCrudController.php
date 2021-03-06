<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WorkRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
// use App\Models\Work;

/**
 * Class SkillCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WorkCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Work::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/work');
        CRUD::setEntityNameStrings('work', 'works');

    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */

    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(WorkRequest::class);


        // CRUD::field('work_name')->type('text');
        // CRUD::field('url_link')->type('text');
        // CRUD::field('image')->type('upload');

       //  CRUD::addField(['name' => 'work_name',
       //   'type' => 'text',
       //   'label' => 'Work Name',
       // ]);
       //  CRUD::addField(['name' => 'url_link',
       //   'type' => 'text',
       //   'label' => 'Work LInk',
       // ]);
       //  CRUD::addField(['name' => 'image',
       //   'type' => 'upload',
       //   'upload' => true,
       //   'label' => 'Image',
       //   'disk' => 'public',
       //   // 'prefix' => 'storage/',
       // ],'both');


       // 'atrributes'=>[ 'enctype' => 'multipart/form-data',
       //  ]

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
         // CRUD::field('image')->type('file');
         // CRUD::addField(['name' => 'image', 'type' => 'file']);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
