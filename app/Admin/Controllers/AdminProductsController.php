<?php

namespace App\Admin\Controllers;

use App\Models\Products;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;
use Encore\Admin\Facades\Admin;
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
        $grid->column('id', __('ID'))->sortable();
        $grid->column('catalog_id', __('Loại sản phẩm'))->sortable();
        $grid->column('name', __('Tên sản phẩm'))->sortable();
        $grid->column('price', __('Giá'))->sortable()->display(function ($price) {
            return number_format($price, 0, ',', '.');
        });
        $grid->column('quantity', __('Tồn kho'))->sortable();
        $grid->column('img_link',__('Ảnh minh họa'))->display(function ($img_link) {
            $fullUrl = asset("{$img_link}");
            return "<img src='{$fullUrl}' style='width: 80px;' />";
        });
        //$grid->column('img_link', __('Image link'));
        $grid->column('content', __('Giới thiệu'))->display(function ($content) {
            // ...

            return Str::limit($content, 200, '...');
        })->width(900);
        $grid->column('is_visible', __('Visible'))->switch();

        $grid->filter(function ($filter) {
            // Xóa ID filter mặc định
           // $filter->disableIdFilter();

            // Thêm 1 filter theo cột dữ liệu
            $filter->like('name', 'Name');
            $filter->like('catalog_id', 'Loại sản phẩm');
        });
        $grid->actions(function ($actions) {
            $actions->disableDelete();


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
        $show->field('catalog_id', __('Loại sản phẩm'));
        $show->field('name', __('Tên sản phẩm'));
        $show->field('price', __('Giá'));
        $show->field('quantity', __('Tồn kho'));
        $show->field('img_link', __('Ảnh minh họa'));
        //$show->image('img_link', __('Image link'))->basePath('public/assets/img');
        $show->field('content', __('Giới thiệu sp'));
        $show->panel()
        ->tools(function ($tools) {

            $tools->disableDelete();
        });
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
        $form->number('catalog_id', __('Loại sản phẩm'));
        $form->text('name', __('Tên sản phẩm'));
        $form->decimal('price', __('Giá'));
        $form->number('quantity', __('Tồn kho'));
        $form->image('img_link', 'Ảnh sản phẩm')->name(function ($file) {
    return  $file->getClientOriginalName();
});
        $form->textarea('content', __('Giới thiệu'));
        $form->switch('is_visible', __('Visible'));

        return $form;
    }
}
