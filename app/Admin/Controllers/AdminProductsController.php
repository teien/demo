<?php

namespace App\Admin\Controllers;

use App\Models\Products;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AdminProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Products';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Products());
        $grid->column('id', __('ID'));
        $grid->column('CATALOG_ID', __('CATALOG ID'))->editable();
        $grid->column('name', __('Name'))->editable();
        $grid->column('price', __('Price'))->editable();
        $grid->column('amount', __('Amount'))->editable();
        $grid->column('img_link')->display(function ($img_link) {
            $fullUrl = asset("assets/{$img_link}");
            return "<img src='{$fullUrl}' style='width: 80px;' />";
        });
        //$grid->column('img_link', __('Image link'));
        $grid->column('content', __('Content'))->editable();
        $grid->filter(function ($filter) {
            // Xóa ID filter mặc định
           // $filter->disableIdFilter();

            // Thêm 1 filter theo cột dữ liệu
            $filter->like('name', 'Name');
            $filter->like('CATALOG_ID', 'Catalog ID');
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Products::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('CATALOG_ID', __('CATALOG ID'));
        $show->field('name', __('Name'));
        $show->field('price', __('Price'));
        $show->field('amount', __('Amount'));
        $show->field('img_link', __('Image link'));
        //$show->image('img_link', __('Image link'))->basePath('public/assets/img');
        $show->field('content', __('Content'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Products());
        $form->number('CATALOG_ID', __('CATALOG ID'));
        $form->text('name', __('Name'));
        $form->decimal('price', __('Price'));
        $form->number('amount', __('Amount'));
        $form->text('img_link', __('Img link'));
        $form->textarea('content', __('Content'));
        return $form;
    }
}
